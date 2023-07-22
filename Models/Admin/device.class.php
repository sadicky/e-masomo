<?php
require_once("connexion.php");

Class Device
{
    public $brand;
    public $name;
    public $model;
    public $id;
    
    //                
     
    //ajouter un article
    public function setDevice($name,$model,$brand)
    {   
        $this->brand=$brand;
        $this->name=$name;
        $this->model=$model;
        $db = getConnection();
        $add1 = $db->prepare("INSERT INTO tbl_device (name,model,brand_id) VALUES (?,?,?)");
        $addline1 = $add1->execute(array($name,$model,$brand)) or die(print_r($add1->errorInfo()));       
       
        return $addline1;
    }

    public function getDevices()
        {
            $db = getConnection();
            $statement = $db->prepare("SELECT b.name_brand, d.name, d.model,d.device_id FROM tbl_device as d,tbl_brands as b where  b.brand_id=d.brand_id");
            $statement->execute();
            $tbP = array();
            while($data =  $statement->fetchObject()){
                $tbP[] = $data;
            }
             return $tbP;
        }
    
        public function getDevice($id)
        {
            $db = getConnection();
            $statement = $db->prepare("SELECT b.brand_id, b.name_brand, d.name, d.model,d.device_id FROM tbl_device as d,tbl_brands as b where  b.brand_id=d.brand_id and device_id = ?");
            $statement->execute([$id]);
            $tbP = $statement->fetchObject();
            return $tbP;
        }
    
        public function deleteDevice($id){
            $db = getConnection();
            $sql =$db->prepare( "DELETE FROM tbl_device WHERE device_id=?");
            $ok = $sql->execute(array($id));
           return $ok;
        }

        public function updateDevice($name,$model,$brand,$id){
                $this->brand=$brand;
                $this->name=$name;
                $this->model=$model;
                $this->id=$id;
                $db = getConnection();
                $update = $db->prepare("UPDATE tbl_device SET name=?,model=?,brand_id=? WHERE device_id =?");
                $ok = $update->execute(array($name,$model,$brand,$id)) or die(print_r($update->errorInfo()));
                return $ok;
        }
   


   
}
?>