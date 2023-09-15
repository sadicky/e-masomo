<?php 
require_once("connexion.php");
$db = getConnection();
$msg="";
$email=isset($_POST['email'])?$_POST['email']:""; 
$pwd=isset($_POST['pwd'])?$_POST['pwd']:""; 
if(isset($_POST['login'])){
  $sql = $db->prepare("SELECT * FROM tbl_prof WHERE access='1' and email= :email");
  $sql->bindValue('email',$email);
  $sql->execute();
  $res=$sql->fetch(PDO::FETCH_ASSOC);
  if($res){
    $pwdHash=$res['pwd'];
    if(password_verify($pwd,$pwdHash)){
    //   session_start(); 
      $_SESSION['id']=$res['prof_id'];
      $_SESSION['noms']=$res['noms'];
      $_SESSION['access']=$res['access'];
      $_SESSION['email']=$res['email'];
      $_SESSION['mat']=$res['mat'];
      $_SESSION['logged']=true;
      $isLogged= $_SESSION['logged'];
    //   var_dump($_SESSION);die();
      if ($_SESSION['access']==1) header("location:".WEBROOT."DashboardProf");
      else header("location:".WEBROOT."loginprof");
        
    }else{
      $msg="<strong style='color:red'>Error</strong>: L'adresse email et le mot de passe sont incorrect ";
    }
  }else{
      $msg="<strong style='color:red'>Erreur:</strong> Mot de passe incorrect";
  }
}
?>