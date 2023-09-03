
<?php 
$title =  'Login';
include ('header.php');
?>
	<!---page Title --->
	<section class="bg-img pt-150 pb-20" data-overlay="7" style="background-image: url(assets/public/images/front-end-img/background/bg-8.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">						
						<h2 class="page-title text-white"><?=$title?></h2>
						<ol class="breadcrumb bg-transparent justify-content-center">
							<li class="breadcrumb-item"><a href="<?=WEBROOT?>" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
							<li class="breadcrumb-item text-white active" aria-current="page"><?=$title?></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Page content -->	

    
	<section class="py-50">
		<div class="container">
			<div class="row justify-content-center g-0">
				<div class="col-lg-5 col-md-5 col-12">
					<div class="box box-body">
						<div class="content-top-agile pb-0 pt-20">
							<h2 class="text-primary">Let's Get Started</h2>
							<p class="mb-0">Connectez-vous pour continuer surr votre espace</p>							
						</div>
						<div class="p-40">
							<form  method="post">
								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
										<input type="email" name="email" id="email" class="form-control ps-15 bg-transparent" placeholder="Username">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
										<input type="password" name="pwd" id="pwd" class="form-control ps-15 bg-transparent" placeholder="Password">
									</div>
								</div>
								  <div class="row">
									<!-- /.col -->
									<div class="col-12 text-center">
									  <button type="submit" class="btn btn-info w-p100 mt-15" name="login">SE CONNECTER</button>
									</div>
									<!-- /.col -->
								  </div>
							</form>	
							<div class="text-center">
								<p class="mt-15 mb-0"> <a href="<?=WEBROOT?>register" class="text-danger ms-5"><strong>Créer un compte Etudiant ici</strong></a></p>
								<p class="mt-15 mb-0"> <a href="<?=WEBROOT?>pregister" class="text-info ms-5"><strong>Créer un compte Parent ici</strong></a></p>
							</div>	
						</div>
					</div>		
				</div>
			</div>
		</div>
	</section>	
    <?php 
include ('footer.php');
?>