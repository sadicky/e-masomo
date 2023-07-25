<?php
require_once("connexion.php");

Class Technician
{
    public $names;
    public $statut;
    public $phone;

   
    //ajouter un Admin
    public function setTechnicians($names,$phone)
    {   
        $this->names=$names;
        $this->phone=$phone;
        $statut = $this->statut=1;

        $db = getConnection();
        $add = $db->prepare("INSERT INTO tbl_tech (names,phone,statut) VALUES (?,?,?)");
        $addline = $add->execute(array($names,$phone,$statut));
        return $addline;
    }

    //afficher utilisateur
    public function getTechnicians()
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT * FROM tbl_tech");
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
    
    public function getTechnician($id)
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT * FROM tbl_tech WHERE tech_id = ?");
        $statement->execute([$id]);
        $tbP = $statement->fetchObject();
        return $tbP;
    }
    
    
    //afficher utilisateur
    public function getRoles()
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT * FROM tbl_users_roles WHERE permission = '1'");
        $statement->execute();
        $tbP = array();
        while($data =  $statement->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }

    public function deleteUser($id){
        $db = getConnection();
        $sql =$db->prepare( "DELETE FROM tbl_users WHERE user_id=?");
        $ok = $sql->execute(array($id));
       return $ok;
    }

    public function activTech($id)
    {
    $db = getConnection();
    $req=$db->prepare("UPDATE tbl_tech SET statut='1' WHERE tech_id=?");
    $d=$req->execute(array($id));
    return $d;
    }
    public function desactivTech($id)
    {
    $db = getConnection();
    $req=$db->prepare("UPDATE tbl_tech SET statut='0' WHERE tech_id=?");
    $d=$req->execute(array($id));
    return $d;
    }
    
    public function deleteTech($id){
        $db = getConnection();
        $sql =$db->prepare( "DELETE FROM tbl_tech WHERE tech_id=?");
        $ok = $sql->execute(array($id));
       return $ok;
    }

    public function updateTech($names,$phone,$id){
            $this->names=$names;
            $this->phone=$phone;
            $this->id=$id;
            $db = getConnection();
            $update = $db->prepare("UPDATE tbl_tech SET names=?, phone=? WHERE tech_id =?");
            $ok = $update->execute(array($names,$phone,$id)) or die(print_r($update->errorInfo()));
            return $ok;
    }
}
?>