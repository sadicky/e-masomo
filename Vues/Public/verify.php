<?php 
$title =  'Vérification';
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
                    
                <div class='col-sm-12' id="message"></div> <div class='col-sm-12' id="messages"></div>
					<div class="box box-body">
						<div class="content-top-agile pb-0 pt-20">
							<h2 class="text-primary">Vérification</h2>
							<p class="mb-0"><i>Entrez le code envoyé dans votre boite email</i></p>							
						</div>
						<div class="p-40">
				<form method="post" id="formverify">
                 <input type="hidden" id="email" name="email"  value="<?php echo $_GET['email']; ?>">
								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
										<input type="text" class="form-control ps-15 bg-transparent" id="code" name="code" placeholder="Code de Vérification" required>
									</div>
								</div>
								  <div class="row">
									<!-- /.col -->
									<div class="col-12 text-center">
									  <button type="submit" id="submit" class="btn btn-info w-p100 mt-15">VERIFIER</button>
									</div>
									<!-- /.col -->
								  </div>
				</form>
						</div>
					</div>		
				</div>
			</div>
		</div>
	</section>	
    <?php 
include ('footer.php');
?>


<script type="text/javascript" src="Public/ajax/verify.js"></script>
<script type="text/javascript" src="Public/ajax/join.js"></script>