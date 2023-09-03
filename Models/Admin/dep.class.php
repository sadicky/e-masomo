<?php
require_once("connexion.php");

Class Dep
{
    public $dep;
    public $dep_id;
    public $doyen;
    
    //                
     
    //ajouter un article
    public function setDep($dep, $doyen)
    {   
        $db = getConnection();
        $add1 = $db->prepare("INSERT INTO tbl_dep (dep,doyen) VALUES (?,?)");
        $addline1 = $add1->execute(array($dep,$doyen)) or die(print_r($add1->errorInfo()));       
       
        return $addline1;
    }

    public function getDeps()
        {
            $db = getConnection();
            $statement = $db->prepare("SELECT * FROM tbl_dep order by dep desc");
            $statement->execute();
            $tbP = array();
            while($data =  $statement->fetchObject()){
                $tbP[] = $data;
            }
             return $tbP;
        }
    
        public function getDep($id)
        {
            $db = getConnection();
            $statement = $db->prepare("SELECT * FROM tbl_dep where dep_id = ?");
            $statement->execute([$id]);
            $tbP = $statement->fetchObject();
            return $tbP;
        }
    
        public function deleteDep($id){
            $db = getConnection();
            $sql =$db->prepare( "DELETE FROM tbl_dep WHERE dep_id=?");
            $ok = $sql->execute(array($id));
           return $ok;
        }

        public function updateDep($dep,$doyen,$id){
                $this->dep=$dep;
                $this->doyen=$doyen;
                $this->id=$id;
                $db = getConnection();
                $update = $db->prepare("UPDATE tbl_dep SET dep=?,doyen=? WHERE dep_id =?");
                $ok = $update->execute(array($dep,$doyen,$id)) or die(print_r($update->errorInfo()));
                return $ok;
        }
   


   
}
?>