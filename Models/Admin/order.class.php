<?php
require_once("connexion.php");

Class Repair
{
    private $uuid;
    private $customer_name;
    private $customer_tel;
    private $serial_number;
    private $defect_id;
    private $diagnostic;
    private $user_id;
    private $has_warranty;
    private $tech_id;
    private $total;

   
    //ajouter un Admin
    public function setRepairOrder($customer_name,$customer_tel,$serial_number,$total,$defect_id,$diagnostic,$user_id,$has_warranty,$tech_id)
    {   
        // $uuid = substr(sha1(time()),0,9);
        $string="0123456789";
        $string=str_shuffle($string);
        $uuid=substr($string,0,9);

        	  
        $this->customer_name=$customer_name;
        $this->customer_tel=$customer_tel;
        $this->serial_number=$serial_number;
        $this->defect_id=$defect_id;
        $this->diagnostic=$diagnostic;
        $this->user_id=$user_id;
        $this->has_warranty=$has_warranty;
        $this->tech_id=$tech_id;
        $this->total=$total;

        $db = getConnection();
        $add = $db->prepare("INSERT INTO tbl_repair_orders (uuid,customer_name,customer_tel,serial_number,total,
        defect_id,diagnostic,user_id,has_warranty,tech_id) VALUES (?,?,?,?,?,?,?,?,?,?)");
        $addline = $add->execute(array($uuid,$customer_name,$customer_tel,$serial_number,$total,$defect_id,$diagnostic,$user_id,$has_warranty,$tech_id));
        return $addline;
    }

    //afficher utilisateur
    public function getOrders()
    {
        $db = getConnection();
    $statement = $db->prepare("SELECT * FROM tbl_repair_orders as o,tbl_defect as d,tbl_status as s,tbl_tech as t, tbl_brands as b,tbl_device as dv
                              WHERE o.tech_id = t.tech_id and o.repair_status_id = s.status_id and o.defect_id = d.defect_id and d.device_id = dv.device_id 
                              and dv.brand_id = b.brand_id");
        $statement->execute();
        $tbP = array();
        while($data =  $statement->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }

    public function getOrder($uuid)
    {
        $db = getConnection();
    $statement = $db->prepare("SELECT * FROM tbl_repair_orders as o,tbl_defect as d,tbl_status as s,tbl_tech as t, tbl_brands as b,tbl_device as dv
                              WHERE o.tech_id = t.tech_id and o.repair_status_id = s.status_id and o.defect_id = d.defect_id and d.device_id = dv.device_id 
                              and dv.brand_id = b.brand_id and o.uuid = ?");
        $statement->execute(array($uuid));
        $tbP = $statement->fetchObject();
         return $tbP;
    }

    public function getUserEmail($email)
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT email FROM tbl_users WHERE email = ?");
        $statement->execute([$email]);
        $tbP = $statement->fetchObject();
        return $tbP;
    }
    
    public function getMarketter($id)
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT * FROM tbl_marketters WHERE market_id = ?");
        $statement->execute([$id]);
        $tbP = $statement->fetchObject();
        return $tbP;
    }
    
    
    public function deleteMarket($id){
        $db = getConnection();
        $sql =$db->prepare( "DELETE FROM tbl_marketters WHERE market_id=?");
        $ok = $sql->execute(array($id));
       return $ok;
    }

    public function activMarket($id)
    {
    $db = getConnection();
    $req=$db->prepare("UPDATE tbl_marketters SET statut='1' WHERE market_id=?");
    $d=$req->execute(array($id));
    return $d;
    }
    public function desactivMarket($id)
    {
    $db = getConnection();
    $req=$db->prepare("UPDATE tbl_marketters SET statut='0' WHERE market_id=?");
    $d=$req->execute(array($id));
    return $d;
    }
    
    public function updateMarket($names,$phone,$id){
            $this->names=$names;
            $this->phone=$phone;
            $this->id=$id;
            $db = getConnection();
            $update = $db->prepare("UPDATE tbl_marketters SET names=?, phone=? WHERE market_id =?");
            $ok = $update->execute(array($names,$phone,$id)) or die(print_r($update->errorInfo()));
            return $ok;
    }
}
?>