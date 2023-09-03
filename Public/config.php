<?php
    if(!isset($_SESSION['promo']))
        $_SESSION['promo']= "1";
    else if(isset($_GET['promo']) && $_SESSION['promo'] != $_GET['promo'] && !empty($_GET['promo'])){
        if($_GET['promo']=="en")
            $_SESSION['promo']= "en";
        else if($_GET['promo']=="fr")
        $_SESSION['promo']= "1";
    }
    
 require_once $_SESSION['promo'].".php"; 


?>