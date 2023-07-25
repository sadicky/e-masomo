<?php
require_once("connexion.php");

Class Marketter
{
    public $names;
    public $statut;
    public $phone;

   
    //ajouter un Admin
    public function setMarketters($names,$phone)
    {   
        $this->names=$names;
        $this->phone=$phone;
        $statut = $this->statut=1;

        $db = getConnection();
        $add = $db->prepare("INSERT INTO tbl_marketters (names,phone,statut) VALUES (?,?,?)");
        $addline = $add->execute(array($names,$phone,$statut));
        return $addline;
    }

    //afficher utilisateur
    public function getMarketters()
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT * FROM tbl_marketters");
        $statement->execute();
        $tbP = array();
        while($data =  $statement->fetchObject()){
            $tbP[] = $data;
        }
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