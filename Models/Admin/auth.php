<?php 
require_once("connexion.php");
$db = getConnection();
$msg="";
$username=isset($_POST['username'])?$_POST['username']:""; 
$pwd=isset($_POST['pwd'])?$_POST['pwd']:""; 
if(isset($_POST['login'])){
  $sql = $db->prepare("SELECT * FROM tbl_users WHERE statut='1' and username= :username");
  $sql->bindValue('username',$username);
  $sql->execute();
  $res=$sql->fetch(PDO::FETCH_ASSOC);
  if($res){
    $pwdHash=$res['password'];
    if(password_verify($pwd,$pwdHash)){
      session_start(); 
      $_SESSION['id']=$res['user_id'];
      $_SESSION['role']=$res['role_id'];
      $_SESSION['statut']=$res['statut'];
      $_SESSION['username']=$res['username'];
      $_SESSION['email']=$res['email'];
      $_SESSION['logged']=true;
      $isLogged= $_SESSION['logged'];
      // var_dump($_SESSION);
      if ($_SESSION['role']==1) header("location:".WEBROOT."Dashboard");
      else header("location:".WEBROOT."login");
        
    }else{
      $msg="<strong style='color:red'>Error</strong>: L'adresse email et le mot de passe sont incorrect ";
    }
  }else{
      $msg="<strong style='color:red'>Erreur:</strong> Mot de passe incorrect";
  }
}
?>