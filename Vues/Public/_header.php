<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.png">

    <title>E-Masomo</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="assets/public/vendor_components/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" href="assets/public/css/vendors_css.css">
	<link rel="stylesheet" href="assets/public/vendor_components/datatable/datatables.min.css">
	
	  
	<!-- Style-->  
	<link rel="stylesheet" href="assets/public/css/style.css">
	<link rel="stylesheet" href="assets/public/css/skin_color.css">
	<link rel="stylesheet" href="assets/public/icons/icomoon/style.css">
	<link rel="stylesheet" href="assets/public/icons/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="assets/public/icons/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="assets/public/icons/glyphicons/glyphicon.css">
	<link rel="stylesheet" href="assets/public/icons/material-design-iconic-font/css/materialdesignicons.css">
     
  </head>
  
<body class="theme-primary">
	
	<header class="top-bar">
		<div class="topbar">

		  <div class="container">
			<div class="row justify-content-end">
			  <div class="col-lg-6 col-12 d-lg-block d-none">
				<div class="topbar-social text-center text-md-start topbar-left">
				  <ul class="list-inline d-md-flex d-inline-block">
					<li class="ms-10 pe-10"><a href="#"><i class="text-white fa fa-envelope"></i> info@initelematique.com</a></li>
					<li class="ms-10 pe-10"><a href="#"><i class="text-white fa fa-phone"></i> +(257) 69-368-149</a></li>
				  </ul>
				</div>
			  </div>
			  <div class="col-lg-6 col-12 xs-mb-10">
				<div class="topbar-call text-center text-lg-end topbar-right">
				  <ul class="list-inline d-lg-flex justify-content-end">		
					 <li class="me-10 ps-10"><a href="<?=WEBROOT?>register"><i class="text-white fa fa-user d-md-inline-block d-none"></i> Créer un compte(Etudiant)</a></li>
					 <li class="me-10 ps-10"><a href="<?=WEBROOT?>plogin"><i class="text-white fa fa-sign-in d-md-inline-block d-none"></i> Se Connecter</a></li>
				  </ul>
				</div>
			  </div>
			 </div> 
		  </div>
		</div>
        
            <?php include ('menu.php');?>
	</header>