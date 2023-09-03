<?php
require_once("connexion.php");

Class Classe
{
    public $classe;
    public $dep;
    
    //                
     
    //ajouter un article
    public function setClasse($dep,$classe)
    {   
        $this->classe=$classe;
        $this->dep=$dep;
        $db = getConnection();
        $add1 = $db->prepare("INSERT INTO tbl_classes (dep_id,classe) VALUES (?,?)");
        $addline1 = $add1->execute(array($dep,$classe)) or die(print_r($add1->errorInfo()));       
       
        return $addline1;
    }
    public function countC(){
        $db = getConnection();
        $q= $db->query("SELECT count(tbl_classes.classe) as nbre
        from tbl_classes");
        $res = $q->fetchObject();
        return $res;
    } 
    public function getClasses()
        {
            $db = getConnection();
            $statement = $db->prepare("SELECT c.classe_id as classe_id, c.classe as classe, d.dep as dep, c.dep_id as dep_id FROM tbl_classes as c, tbl_dep as d where c.dep_id=d.dep_id");
            $statement->execute();
            $tbP = array();
            while($data =  $statement->fetchObject()){
                $tbP[] = $data;
            }
             return $tbP;
        }

        public function getClasse($id)
        {
            $db = getConnection();
            $statement = $db->prepare("SELECT c.classe_id as classe_id, c.classe as classe, d.dep as dep, c.dep_id as dep_id FROM tbl_classes as c, tbl_dep as d where c.dep_id=d.dep_id and classe_id = ?");
            $statement->execute([$id]);
            $tbP = $statement->fetchObject();
            return $tbP;
        }
    
        public function deleteClasse($id){
            $db = getConnection();
            $sql =$db->prepare( "DELETE FROM tbl_classes WHERE classe_id=?");
            $ok = $sql->execute(array($id));
           return $ok;
        }

        public function updateClasse($name,$model,$classe,$id){
                $this->classe=$classe;
                $this->name=$name;
                $this->model=$model;
                $this->id=$id;
                $db = getConnection();
                $update = $db->prepare("UPDATE tbl_device SET name=?,model=?,classe_id=? WHERE device_id =?");
                $ok = $update->execute(array($name,$model,$classe,$id)) or die(print_r($update->errorInfo()));
                return $ok;
        }
   


   
}
?>