<?php
require_once("connexion.php");

Class Defect
{
    public $brand;
    public $title;
    public $time;
    public $price;
    
    //                
     
    //ajouter un article
    public function setDefect($title,$time,$price,$brand)
    {   
        $this->brand=$brand;
        $this->title=$title;
        $this->price=$price;
        $this->time=$time;
        $db = getConnection();
        $add1 = $db->prepare("INSERT INTO tbl_defect (title,required_time,price,device_id) VALUES (?,?,?,?)");
        $addline1 = $add1->execute(array($title,$time,$price,$brand)) or die(print_r($add1->errorInfo()));       
       
        return $addline1;
    }

    public function getDefects()
        {
            $db = getConnection();
            $statement = $db->prepare("SELECT d.name, d.model,d.device_id,def.title,def.price,def.required_time as time FROM tbl_defect as def, tbl_device as d where def.device_id=d.device_id");
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