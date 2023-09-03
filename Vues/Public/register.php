
<?php 
$title =  'Créer un compte étudiant';
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
				<div class="col-lg-12 col-md-5 col-12">
                    
                <div class='col-sm-12' id="message"></div> <div class='col-sm-12' id="messages"></div>
					<div class="box box-body">
						<div class="content-top-agile pb-0 pt-20">
							<h2 class="text-primary">Nouvelle Inscription</h2>
							<p class="mb-0"><i>Les informations suivies d'un asteriste sont obligatoires</i></p>							
						</div>
						<div class="p-40">
                            
                                
                                
				<form method="post" id="formulaire" enctype="multipart/form-data">
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<b><label>Nom: </label> <span class="text-danger">*</span></b>
								<input type="text" placeholder="Nom" class="form-control" id="nom" name="nom" required>
							</div>
							<div class="form-group">
								<b><label>Sexe: </label> <span class="text-danger">*</span></b>
								<select class="form-control" name="sexe" id="sexe">
									<option>M</option>
									<option>F</option>
								</select>
							</div>
							<div class="form-group">
							<input type="hidden" name="promo" value="<?=$getPromos->promo_id?>" id="promo" class='form-control'>
							</div>
                             <div class="form-group">
                             <b> <label class="form-label">Département: </label><span class="text-danger">*</span></b>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2"  id="dep" name="dep" >
                                            <option value="">Selectionner le Departement</option>
                                            <?php foreach ($getDeps as $dep) {?>
                                                <option value='<?=$dep->dep_id?>'><?=$dep->dep?></option>				
                                            <?php } ?>
                                        </select> 
                                    </div>
                                </div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<b><label>Prenom: </label> <span class="text-danger">*</span></b>
								<input type="text" placeholder="Prénom" class="form-control" id="prenom" name="prenom" required>
							</div>
							<div class="form-group">
								<b><label>Matricule : </label> <span class="text-danger"></span></b>
								<?php
								$string = "0123456789";
								$string = str_shuffle($string);
								$titre = substr($string, 0, 8);
								?>
								<input type="text" class="form-control" value="<?php echo $titre ?>" name="mat" id="mat" readonly>
							</div>
                            <div class="form-group">
                            <b><label class="form-label">Classe: </label><span class="text-danger">*</span></b>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2"  id="niv" name="niv" >
                                            <option value="">Selectionner la classe</option>
                                        </select> 
                                    </div>
                                </div>
									<div class="col-12 text-center">
									  <button type="submit" class="btn btn-primary w-p100 mt-15">Valider l'inscription</button>
									</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label><b>Email:</b></label><b><span class="text-danger">*</span></b>
								<input class="form-control" placeholder="Email" type="email" id="email" name="email">
							</div>
							<div class="form-group">
								<b><label>Date de Naissance: </label></b>
								<input class="form-control" type="date" name="dob" id="dob">
							</div>
							<div class="form-group">
								<b><label>Tél: </label></b>
								<input type="tel" class="form-control" placeholder="Numero de téléphone" id="tel" name="tel">
							</div>

						</div>
					</div>
				</form>
							<div class="text-center">
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


<script type="text/javascript" src="Public/ajax/register.js"></script>
<script type="text/javascript" src="Public/ajax/join.js"></script>