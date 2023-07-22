<?php
require_once("connexion.php");

Class Rep
{
    public $email; 
    public $pwd;
    public $name;
    public $depot;
    public $statut;
    public $iduser;
    public $adresse;
    public $tel;

    //ajouter un Admin
    public function setReparateurs($email,$name,$depot,$tel,$adresse)
    {   
    //   PWD
    $pwdg = substr(sha1(time()),0,8);
    $pwd_encrypt=password_hash($pwdg,PASSWORD_DEFAULT);

        $this->email=$email;
        $pwds = $this->pwd=$pwd_encrypt;
        $this->name=$name;
        $this->depot=$depot;
        $this->tel=$tel;
        $this->adresse=$adresse;
        $statuts = $this->statut=1;

        $db = getConnection();
        $add = $db->prepare("INSERT INTO tbl_reparateur (EMAIL,PWD,NAME,DEPOT,ADRESSE,TEL,STATUT) VALUES (?,?,?,?,?,?,?)");
        $addline = $add->execute(array($email,$pwds,$name,$depot,$tel,$adresse,$statuts));
        return !$addline?false:[
               'EMAIL'=>$this->email,
               'PWD'=>$pwdg
        ];
    }

    //afficher utilisateur
    public function getRep()
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT * FROM tbl_reparateur WHERE STATUT = '1' group by IDR DESC");
        $statement->execute();
        $tbP = array();
        while($data =  $statement->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }


    
    //afficher utilisateur
    public function getRepId($iduser)
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT * FROM tbl_reparateur WHERE IDR=? ");
        $statement->execute(array($iduser));        
        $data =  $statement->fetchObject();
         return $data;
    }


    
    //afficher utilisateur
    public function getRepEff()
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT * FROM tbl_reparateur WHERE STATUT = '1' group by IDR DESC");
        $statement->execute();
        $tbP = array();
        while($data =  $statement->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }
    

    public function activRep($iduser)
    {
    $db = getConnection();
    $req=$db->prepare("UPDATE tbl_other_entry SET STATUT='1' WHERE ID=?");
    $d=$req->execute(array($iduser));
    return $d;
    }
    
    public function activRep1($iduser)
    {
    $db = getConnection();
    $req=$db->prepare("UPDATE tbl_other_entry SET STATUTR='2' WHERE ID=?");
    $d=$req->execute(array($iduser));
    return $d;
    }

    public function desactRep($iduser)
    {
    $db = getConnection();
    $req=$db->prepare("UPDATE tbl_other_entry SET STATUT='0' WHERE ID=?");
    $d=$req->execute(array($iduser));
    return $d;
    }
    
    public function activRepa($iduser)
    {
    $db = getConnection();
    $req=$db->prepare("UPDATE tbl_reparateur SET STATUT='1' WHERE IDR=?");
    $d=$req->execute(array($iduser));
    return $d;
    }
    public function desactRepa($iduser)
    {
    $db = getConnection();
    $req=$db->prepare("UPDATE tbl_reparateur SET STATUT='0' WHERE IDR=?");
    $d=$req->execute(array($iduser));
    return $d;
    }
    
    public function annulRep($iduser)
    {
    $db = getConnection();
    $req=$db->prepare("UPDATE tbl_other_entry SET STATUT='2', STATUTR='0'  WHERE ID=?");
    $d=$req->execute(array($iduser));
    return $d;
    }
}
?>