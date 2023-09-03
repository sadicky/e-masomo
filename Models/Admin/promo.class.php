<?php
require_once("connexion.php");

Class Promo
{
    public $promo;
    
    //                
     
    //ajouter un article
    public function setPromo($promo)
    {   
        $this->promo=$promo;
        $db = getConnection();
        $add1 = $db->prepare("INSERT INTO tbl_promo (promo) VALUES (?)");
        $addline1 = $add1->execute(array($promo)) or die(print_r($add1->errorInfo()));       
       
        return $addline1;
    }

    public function getPromos()
        {
            $db = getConnection();
            $statement = $db->prepare("SELECT * FROM tbl_promo order by promo desc");
            $statement->execute();
            $tbP = array();
            while($data =  $statement->fetchObject()){
                $tbP[] = $data;
            }
             return $tbP;
        }

        public function getPromoss()
            {
                $db = getConnection();
                $statement = $db->prepare("SELECT * FROM tbl_promo order by promo desc");
                $statement->execute();
                $tbP = $statement->fetchObject();
                 return $tbP;
            }
    
        public function getPromo($id)
        {
            $db = getConnection();
            $statement = $db->prepare("SELECT * FROM tbl_promo where promo_id = ?");
            $statement->execute([$id]);
            $tbP = $statement->fetchObject();
            return $tbP;
        }
    
        public function deletePromo($id){
            $db = getConnection();
            $sql =$db->prepare( "DELETE FROM tbl_promo WHERE promo_id=?");
            $ok = $sql->execute(array($id));
           return $ok;
        }

        public function updatePromo($promo,$id){
                $this->promo=$promo;
                $this->id=$id;
                $db = getConnection();
                $update = $db->prepare("UPDATE tbl_promo SET promo=? WHERE promo_id =?");
                $ok = $update->execute(array($promo,$id)) or die(print_r($update->errorInfo()));
                return $ok;
        }
   


   
}
?>