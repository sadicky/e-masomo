<?php
require_once("connexion.php");

Class Status
{
    public $email; 
    public $pwd;
    public $username;
    public $role;
    public $statut;
    public $phone;

   
    //ajouter un Admin
    public function setUser($username,$email,$phone,$pwd,$role)
    {   
    //   PWD
        $pwd_encrypt=password_hash($pwd,PASSWORD_DEFAULT);

        $this->email=$email;
        $pwd = $this->pwd=$pwd_encrypt;
        $this->username=$username;
        $this->role=$role;
        $this->phone=$phone;
        $statut = $this->statut=1;

        $db = getConnection();
        $add = $db->prepare("INSERT INTO tbl_users (username,email,phone,password,statut,role_id) VALUES (?,?,?,?,?,?)");
        $addline = $add->execute(array($username,$email,$phone,$pwd,$statut,$role));
        return $addline;
    }

    //afficher utilisateur
    public function getStatus()
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT * FROM tbl_status");
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

    public function activUser($iduser)
    {
    $db = getConnection();
    $req=$db->prepare("UPDATE tbl_users SET STATUT='1' WHERE ID=?");
    $d=$req->execute(array($iduser));
    return $d;
    }
    public function desactUser($iduser)
    {
    $db = getConnection();
    $req=$db->prepare("UPDATE tbl_users SET STATUT='0' WHERE ID=?");
    $d=$req->execute(array($iduser));
    return $d;
    }
}
?>