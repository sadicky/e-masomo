<?php
require_once("connexion.php");

Class Brand
{
    public $brand;
    
    //                
     
    //ajouter un article
    public function setBrand($brand)
    {   
        $this->brand=$brand;
        $db = getConnection();
        $add1 = $db->prepare("INSERT INTO tbl_brands (name_brand) VALUES (?)");
        $addline1 = $add1->execute(array($brand)) or die(print_r($add1->errorInfo()));       
       
        return $addline1;
    }

    public function getBrands()
        {
            $db = getConnection();
            $statement = $db->prepare("SELECT * FROM tbl_brands order by name_brand desc");
            $statement->execute();
            $tbP = array();
            while($data =  $statement->fetchObject()){
                $tbP[] = $data;
            }
             return $tbP;
        }
    
        public function getBrand($id)
        {
            $db = getConnection();
            $statement = $db->prepare("SELECT * FROM tbl_brands where brand_id = ?");
            $statement->execute([$id]);
            $tbP = $statement->fetchObject();
            return $tbP;
        }
    
        public function deleteBrand($id){
            $db = getConnection();
            $sql =$db->prepare( "DELETE FROM tbl_brands WHERE brand_id=?");
            $ok = $sql->execute(array($id));
           return $ok;
        }

        public function updateBrand($brand,$id){
                $this->brand=$brand;
                $this->id=$id;
                $db = getConnection();
                $update = $db->prepare("UPDATE tbl_brands SET name_brand=? WHERE brand_id =?");
                $ok = $update->execute(array($brand,$id)) or die(print_r($update->errorInfo()));
                return $ok;
        }
   


   
}
?>