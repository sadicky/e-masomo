<?php  $title =  'Accueil'; include ('header.php'); ?>

	
	<!---page Title --->
	<section class="bg-img pt-150 pb-20" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">						
						<h2 class="page-title text-white">My Dashboard</h2>
						<ol class="breadcrumb bg-transparent justify-content-center">
							<li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
							<li class="breadcrumb-item text-white active" aria-current="page"><?=$_SESSION['nom']?> <?=$_SESSION['prenom']?></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Page content -->
	
	<section class="py-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-12">
					<div class="widget courses-search-bx placeholdertx mb-10">
						<div class="form-group">
							<div class="input-group">
								<label class="form-label">Search Classes</label>
								<input name="name" type="text" required="" class="form-control">
							</div>
						</div>
					</div>
					<div class="position-sticky t-100">
						<div class="box box-widget widget-user-2">
							<div class="widget-user-header bg-secondary-light">
							  <div class="widget-user-image">
								<img class="rounded-circle bg-danger" src="<?= @$etudiant->photo ?>" alt="User Avatar">
							  </div>
							  <h3 class="widget-user-username"><?=$_SESSION['prenom']?> <?=$_SESSION['nom']?> </h3>
							  <h6 class="widget-user-desc">Active</h6>
							</div>
							<div class="box-footer no-padding">
                   
								<ul class="nav d-block nav-stacked fs-16" id="pills-tab23" role="tablist">
									<li class="nav-item bb-1">
										<a class="py-10 nav-link active" id="pills-details-tab" data-bs-toggle="pill" href="#pills-details" role="tab" aria-controls="pills-courses" aria-selected="true">
											<span class="me-10 icon-Book-open"><span class="path1"></span><span class="path2"></span></span>Details
										</a>
									</li>
									<li class="nav-item bb-1">
										<a class="py-10 nav-link" id="pills-favorite-tab" data-bs-toggle="pill" href="#pills-favorite" role="tab" aria-controls="pills-favorite" aria-selected="true">
											<span class="me-10 icon-Fan"></span>Notifications
										</a>
									</li>
									<li class="nav-item bb-1">
										<a class="py-10 nav-link" id="pills-managed-tab" data-bs-toggle="pill" href="#pills-managed" role="tab" aria-controls="pills-managed" aria-selected="true">
											<span class="me-10 icon-Mail"></span>Messages
										</a>
									</li>
									<li class="nav-item bb-1">
										<a class="py-10 nav-link" id="pills-camarades-tab" data-bs-toggle="pill" href="#pills-camarades" role="tab" aria-controls="pills-courses" aria-selected="true">
											<span class="me-10 icon-User"><span class="path1"></span><span class="path2"></span></span>Mes Camarades
										</a>
									</li>
									<li class="nav-item bb-1">
										<a class="py-10 nav-link" id="pills-courses-tab" data-bs-toggle="pill" href="#pills-courses" role="tab" aria-controls="pills-courses" aria-selected="true">
											<span class="me-10 icon-Book"><span class="path1"></span><span class="path2"></span></span>Cours
										</a>
									</li>
									<li class="nav-item bb-1">
										<a class="py-10 nav-link" id="pills-resultats-tab" data-bs-toggle="pill" href="#pills-resultats" role="tab" aria-controls="pills-courses" aria-selected="true">
											<span class="me-10 icon-File"><span class="path1"></span><span class="path2"></span></span>Résultats
										</a>
									</li>
									<li class="nav-item bb-1">
										<a class="py-10 nav-link" id="pills-edit-tab" data-bs-toggle="pill" href="#pills-edit" role="tab" aria-controls="pills-edit" aria-selected="true">
											<span class="me-10 icon-Edit"><span class="path1"></span><span class="path2"></span></span>Profile 
										</a>
									</li>
									<li class="nav-item">
										<a class="py-10 nav-link" href="<?=WEBROOT?>plogout"><span class="me-10 icon-Lock"></span>Déconnexion	</a>
									</li>
								</ul>
							</div>		
					   </div>
					</div>
				</div>

				<div class="col-lg-9 col-md-8 col-12">
					<div class="box">
						<div class="box-body">
							<div class="tab-content" id="pills-tabContent23">
								<div class="tab-pane fade show active" id="pills-details" role="tabpanel" aria-labelledby="pills-details-tab">								
									<h4 class="box-title mb-0">
										Mes Informations
									</h4>                                    
                                    <div class="container col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <hr>
                                                <?php if (@$etudiant->photo == NULL) { ?>
                                                    <form method="post" class="form-horizontal" action="Public/script/etudiantpic.php" id="eleve_pic" enctype="multipart/form-data">
                                                        <div class="form-group">
                                                            <label class="form-label" for="customFile">Ajouter une photo</label>
                                                            <input type="file" required name="image" class="form-control" id="customFile" aria-label="Ajouter une photo">
                                                        </div>
                                                        <button class="btn btn-danger btn-xs" name="change"><span class="glyphicon  glyphicon-save"></span> Ajouter une photo</button>
                                                    </form>
                                                <?php } else { ?>
                                                    <img src="<?= @$etudiant->photo ?>" width="250px" class="img-thumbnail" alt="Photo de Profil">
                                                <?php } ?>
                                            </div>
                                            <div class="col-md-4">
                                                <b>Année Scolaire: </b> <?= @$etudiant->promo ?><br>
                                                <hr>
                                                <h3>Info Générale</h3>
                                                <b>Matricule: </b> <?= @$etudiant->mat ?><br>
                                                <b>Noms: </b> <?php echo @$etudiant->nom . ' ' . @$etudiant->prenom; ?><br>
                                                <b>Sexe: </b><?php
                                                                if (@$etudiant->sexe == 'M') {
                                                                    echo "Masculin";
                                                                } else {
                                                                    echo "Feminin";
                                                                }
                                                                ?> <br>
                                                <b>Classe:  <?= @$etudiant->classe ?></b><br>
                                                <b>Département: </b> <?= @$etudiant->dep ?><br>
                                                <b>E-Mail: </b> <?= @$etudiant->email ?><br>
                                                <b>Date de Nais.: </b> <?= @$etudiant->dob ?>
                                                <hr>
                                                <a href="" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-print"></span> Visioner sa carte d'Elève</a>
                                            </div>
                                            <div class="col-md-4">
                                                <h3>Info sur le Tuteur</h3>
                                                <b>Père: </b> <br>
                                                <b>Téléphone: </b> <br>
                                                <b>Profession: </b> <br><br>
                                                <b>Mère: </b> <br>
                                                <b>Téléphone: </b> <br>
                                                <b>Profession: </b><br><br>
                                                <b>Autres: </b> <br>
                                                <b>Téléphone: </b> <br>
                                                <b>Profession: </b><br>
                                                <b>Lien: </b> <br>

                                            </div>
                                        </div>
                                    </div>
								</div>
								<div class="tab-pane fade" id="pills-courses" role="tabpanel" aria-labelledby="pills-courses-tab">								
									<h4 class="box-title mb-0">
										Mes Cours
									</h4>
									<hr>
									<div class="table-responsive">                                        
                                        <div class="container-fluid col-sm-9">
                                            <div class="row well" style="padding-top: 15px;">						
                                            <table class="table table-condensed table-bordered table-striped">
                                            <thead>
                                                    <tr>
                                                        <th>Cours</th>
                                                        <th>Prof</th>
                                                        <th>Semestre</th>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>
                                                    <?php						
                                                    foreach ($getCc as $value):?>
                                                       <tr>
                                                            <td><b><?=$value->cours?></b></td>
                                                            <td><?=$value->noms?></td>
                                                            <td><?=$value->semester?></td>
                                                       </tr>
                                                    <?php endforeach?>
                                            </table>
                                            </div>
                                        </div>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-camarades" role="tabpanel" aria-labelledby="pills-courses-tab">								
									<h4 class="box-title mb-0">
										Mes Camarades
									</h4>
									<hr>
                                    <div class="container-fluid col-sm-9">
                                        <div class="row well" style="padding-top: 15px;">						
                                        <table class="table table-condensed table-bordered table-striped" id="example" style="margin-top:20px">
                                        <thead>
                                                <tr>
                                                    <th>Photo</th>
                                                    <th>Noms</th>
                                                    <th>Sexe</th>
                                                    <th>Tél.</th>
                                                    <th>Email</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <?php if($getCam):					
                                                foreach ($getCam as $value) {
                                                    echo "<tr><td><img src='$value->photo' class='img-circle' height='30px' alt='aucune image' width='30px'></td>";
                                                    echo "<td><b>" . $value->nom . " ". $value->prenom . "</b></td>";
                                                    echo "<td>" . $value->sexe . "</td>";
                                                    echo "<td>" . $value->tel . "</td>";
                                                    echo "<td>" . $value->email . "</td></tr>";
                                                }
                                                else:
                                                    echo "<h3>Aucun camarade</h3>";
                                                endif;
                                                ?>
                                        </table>
                                        </div>
                                    </div>
								</div>
								<div class="tab-pane fade" id="pills-edit" role="tabpanel" aria-labelledby="pills-edit-tab">
									<div class="row">
										<div class="col-12">
											<form class="form">
												<div>
													<h4 class="box-title text-primary"><i class="ti-user me-15"></i> Edit Profile</h4>
													<hr class="my-15">
													<div class="row">
													  <div class="col-md-6">

														<div class="form-group">
														  <label class="form-label">First Name</label>
														  <input type="text" class="form-control" placeholder="First Name">
														</div>
													  </div>
													  <div class="col-md-6">
														<div class="form-group">
														  <label class="form-label">Last Name</label>
														  <input type="text" class="form-control" placeholder="Last Name">
														</div>
													  </div>
													</div>
													<div class="row">
													  <div class="col-md-6">
														<div class="form-group">
														  <label class="form-label">Company Name</label>
														  <input type="text" class="form-control" placeholder="Company Name">
														</div>
													  </div>
													  <div class="col-md-6">
														<div class="form-group">
														  <label class="form-label">Contact Number</label>
														  <input type="tel" class="form-control" placeholder="Phone">
														</div>
													  </div>
													</div>
													<h4 class="box-title text-primary mt-30"><i class="ti-envelope me-15"></i> Contact Info &amp; Bio</h4>
													<hr class="my-15">
													<div class="form-group">
													  <label class="form-label">Email</label>
													  <input class="form-control" type="email" placeholder="email">
													</div>
													<div class="form-group">
													  <label class="form-label">Website</label>
													  <input class="form-control" type="url" placeholder="http://">
													</div>
													<div class="form-group">
													  <label class="form-label">Contact Number</label>
													  <input class="form-control" type="tel" placeholder="Contact Number">
													</div>
													<div class="form-group">
													  <label class="form-label">Address</label>
													  <input class="form-control" type="text" placeholder="Address">
													</div>
													<div class="form-group">
													  <label class="form-label">Bio</label>
													  <textarea rows="4" class="form-control" placeholder="Bio"></textarea>
													</div>
													<h4 class="box-title text-primary mt-30"><i class="ti-share me-15"></i> Social Profile</h4>
													<hr class="my-15">
													<div class="form-group">
													  <label class="form-label">Facebook</label>
													  <input class="form-control" type="text" placeholder="Facebook">
													</div>
													<div class="form-group">
													  <label class="form-label">Twitter</label>
													  <input class="form-control" type="text" placeholder="Twitter">
													</div>
													<div class="form-group">
													  <label class="form-label">Instagram</label>
													  <input class="form-control" type="text" placeholder="Instagram">
													</div>
													<div class="form-group">
													  <label class="form-label">Linkedin</label>
													  <input class="form-control" type="text" placeholder="Linkedin">
													</div>
													<hr class="my-15">
												</div>
												<div class="d-flex justify-content-end gap-items-2">
													<button type="submit" class="btn btn-success">
													  <i class="ti-save-alt"></i> Save changes
													</button>
													<button type="button" class="btn btn-danger">
													  <i class="ti-trash"></i> Cancel
													</button>
												</div>  
											</form>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-managed" role="tabpanel" aria-labelledby="pills-managed-tab">									
									<h4 class="box-title mb-0">
										Managed Courses
									</h4>
									<hr>
									<div class="card rounded-0">
										<div class="d-lg-flex">
											<div class="position-relative w-lg-400">
												<a href="#">
													<img class="" src="../images/front-end-img/courses/9.jpg" alt="Card image cap">
												</a>
												<div class="position-absolute r-10 t-10"> 
													<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
													<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
												</div>											
											</div>
											<div class="card mb-0 no-border no-shadow w-p100">
											  <div class="card-body">
												<div class="cour-stac d-lg-flex align-items-center text-fade">
												  	  <div class="d-flex align-items-center">
														  <p>Start Date 4th Nov..</p>
														  <p class="lt-sp">|</p>
														  <p>Johen doe</p>
														  <p class="lt-sp">|</p>
													  </div>
												  	  <div class="d-flex align-items-center">
														  <p>English, Spanish</p>
														  <p class="lt-sp">|</p>
														  <span class="badge badge-success">Online</span>
													  </div>
												  </div>
												<h3 class="card-title mt-20">It &amp; software</h3>
												<p class="card-text">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.</p>
											  </div>
											  <div class="card-footer justify-content-between d-flex align-items-center">
												<div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
												<span>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star-half text-warning"></i>
													<span class="text-muted ms-2">(42)</span>
												</span>
											 </div>
											</div>
										</div>
									</div>
									<div class="card rounded-0">
										<div class="d-lg-flex">
											<div class="position-relative w-lg-400">
												<a href="#">
													<img class="" src="../images/front-end-img/courses/4.jpg" alt="Card image cap">
												</a>
												<div class="position-absolute r-10 t-10"> 
													<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
													<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
												</div>											
											</div>
											<div class="card mb-0 no-border no-shadow w-p100">
											  <div class="card-body">
												<div class="cour-stac d-lg-flex align-items-center text-fade">
												  	  <div class="d-flex align-items-center">
														  <p>Start Date 4th Nov..</p>
														  <p class="lt-sp">|</p>
														  <p>Johen doe</p>
														  <p class="lt-sp">|</p>
													  </div>
												  	  <div class="d-flex align-items-center">
														  <p>English, Spanish</p>
														  <p class="lt-sp">|</p>
														  <span class="badge badge-success">Online</span>
													  </div>
												  </div>
												<h3 class="card-title mt-20">Programming</h3>
												<p class="card-text">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.</p>
											  </div>
											  <div class="card-footer justify-content-between d-flex align-items-center">
												<div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
												<span>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star-half text-warning"></i>
													<span class="text-muted ms-2">(42)</span>
												</span>
											 </div>
											</div>
										</div>
									</div>
									<div class="card rounded-0">
										<div class="d-lg-flex">
											<div class="position-relative w-lg-400">
												<a href="#">
													<img class="" src="../images/front-end-img/courses/5.jpg" alt="Card image cap">
												</a>
												<div class="position-absolute r-10 t-10"> 
													<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
													<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
												</div>											
											</div>
											<div class="card mb-0 no-border no-shadow w-p100">
											  <div class="card-body">
												<div class="cour-stac d-lg-flex align-items-center text-fade">
												  	  <div class="d-flex align-items-center">
														  <p>Start Date 4th Nov..</p>
														  <p class="lt-sp">|</p>
														  <p>Johen doe</p>
														  <p class="lt-sp">|</p>
													  </div>
												  	  <div class="d-flex align-items-center">
														  <p>English, Spanish</p>
														  <p class="lt-sp">|</p>
														  <span class="badge badge-success">Online</span>
													  </div>
												  </div>
												<h3 class="card-title mt-20">Photography</h3>
												<p class="card-text">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.</p>
											  </div>
											  <div class="card-footer justify-content-between d-flex align-items-center">
												<div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
												<span>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star-half text-warning"></i>
													<span class="text-muted ms-2">(42)</span>
												</span>
											 </div>
											</div>
										</div>
									</div>
									<div class="card rounded-0">
										<div class="d-lg-flex">
											<div class="position-relative w-lg-400">
												<a href="#">
													<img class="" src="../images/front-end-img/courses/1.jpg" alt="Card image cap">
												</a>
												<div class="position-absolute r-10 t-10"> 
													<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
													<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
												</div>											
											</div>
											<div class="card mb-0 no-border no-shadow w-p100">
											  <div class="card-body">
												<div class="cour-stac d-lg-flex align-items-center text-fade">
												  	  <div class="d-flex align-items-center">
														  <p>Start Date 4th Nov..</p>
														  <p class="lt-sp">|</p>
														  <p>Johen doe</p>
														  <p class="lt-sp">|</p>
													  </div>
												  	  <div class="d-flex align-items-center">
														  <p>English, Spanish</p>
														  <p class="lt-sp">|</p>
														  <span class="badge badge-success">Online</span>
													  </div>
												  </div>
												<h3 class="card-title mt-20">Manegement</h3>
												<p class="card-text">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.</p>
											  </div>
											  <div class="card-footer justify-content-between d-flex align-items-center">
												<div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
												<span>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star-half text-warning"></i>
													<span class="text-muted ms-2">(42)</span>
												</span>
											 </div>
											</div>
										</div>
									</div>
									<div class="card rounded-0">
										<div class="d-lg-flex">
											<div class="position-relative w-lg-400">
												<a href="#">
													<img class="" src="../images/front-end-img/courses/2.jpg" alt="Card image cap">
												</a>
												<div class="position-absolute r-10 t-10"> 
													<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
													<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
												</div>											
											</div>
											<div class="card mb-0 no-border no-shadow w-p100">
											  <div class="card-body">
												<div class="cour-stac d-lg-flex align-items-center text-fade">
												  	  <div class="d-flex align-items-center">
														  <p>Start Date 4th Nov..</p>
														  <p class="lt-sp">|</p>
														  <p>Johen doe</p>
														  <p class="lt-sp">|</p>
													  </div>
												  	  <div class="d-flex align-items-center">
														  <p>English, Spanish</p>
														  <p class="lt-sp">|</p>
														  <span class="badge badge-success">Online</span>
													  </div>
												  </div>
												<h3 class="card-title mt-20">Networking</h3>
												<p class="card-text">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.</p>
											  </div>
											  <div class="card-footer justify-content-between d-flex align-items-center">
												<div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
												<span>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star-half text-warning"></i>
													<span class="text-muted ms-2">(42)</span>
												</span>
											 </div>
											</div>
										</div>
									</div>
									<div class="card rounded-0">
										<div class="d-lg-flex">
											<div class="position-relative w-lg-400">
												<a href="#">
													<img class="" src="../images/front-end-img/courses/8.jpg" alt="Card image cap">
												</a>
												<div class="position-absolute r-10 t-10"> 
													<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
													<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
												</div>											
											</div>
											<div class="card mb-0 no-border no-shadow w-p100">
											  <div class="card-body">
												<div class="cour-stac d-lg-flex align-items-center text-fade">
												  	  <div class="d-flex align-items-center">
														  <p>Start Date 4th Nov..</p>
														  <p class="lt-sp">|</p>
														  <p>Johen doe</p>
														  <p class="lt-sp">|</p>
													  </div>
												  	  <div class="d-flex align-items-center">
														  <p>English, Spanish</p>
														  <p class="lt-sp">|</p>
														  <span class="badge badge-dark">Offline</span>
													  </div>
												  </div>
												<h3 class="card-title mt-20">Security</h3>
												<p class="card-text">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.</p>
											  </div>
											  <div class="card-footer justify-content-between d-flex align-items-center">
												<div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
												<span>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star-half text-warning"></i>
													<span class="text-muted ms-2">(42)</span>
												</span>
											 </div>
											</div>
										</div>
									</div>
									<div class="card rounded-0">
										<div class="d-lg-flex">
											<div class="position-relative w-lg-400">
												<a href="#">
													<img class="" src="../images/front-end-img/courses/6.jpg" alt="Card image cap">
												</a>
												<div class="position-absolute r-10 t-10"> 
													<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
													<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
												</div>											
											</div>
											<div class="card mb-0 no-border no-shadow w-p100">
											  <div class="card-body">
												<div class="cour-stac d-lg-flex align-items-center text-fade">
												  	  <div class="d-flex align-items-center">
														  <p>Start Date 4th Nov..</p>
														  <p class="lt-sp">|</p>
														  <p>Johen doe</p>
														  <p class="lt-sp">|</p>
													  </div>
												  	  <div class="d-flex align-items-center">
														  <p>English, Spanish</p>
														  <p class="lt-sp">|</p>
														  <span class="badge badge-dark">Offline</span>
													  </div>
												  </div>
												<h3 class="card-title mt-20">Language</h3>
												<p class="card-text">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.</p>
											  </div>
											  <div class="card-footer justify-content-between d-flex align-items-center">
												<div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
												<span>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star-half text-warning"></i>
													<span class="text-muted ms-2">(42)</span>
												</span>
											 </div>
											</div>
										</div>
									</div>
									<div class="card rounded-0">
										<div class="d-lg-flex">
											<div class="position-relative w-lg-400">
												<a href="#">
													<img class="" src="../images/front-end-img/courses/7.jpg" alt="Card image cap">
												</a>
												<div class="position-absolute r-10 t-10"> 
													<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
													<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
												</div>											
											</div>
											<div class="card mb-0 no-border no-shadow w-p100">
											  <div class="card-body">
												<div class="cour-stac d-lg-flex align-items-center text-fade">
												  	  <div class="d-flex align-items-center">
														  <p>Start Date 4th Nov..</p>
														  <p class="lt-sp">|</p>
														  <p>Johen doe</p>
														  <p class="lt-sp">|</p>
													  </div>
												  	  <div class="d-flex align-items-center">
														  <p>English, Spanish</p>
														  <p class="lt-sp">|</p>
														  <span class="badge badge-warning">Upcoming</span>
													  </div>
												  </div>
												<h3 class="card-title mt-20">Computer</h3>
												<p class="card-text">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.</p>
											  </div>
											  <div class="card-footer justify-content-between d-flex align-items-center">
												<div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
												<span>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star-half text-warning"></i>
													<span class="text-muted ms-2">(42)</span>
												</span>
											 </div>
											</div>
										</div>
									</div>
									<div class="card rounded-0">
										<div class="d-lg-flex">
											<div class="position-relative w-lg-400">
												<a href="#">
													<img class="" src="../images/front-end-img/courses/11.jpg" alt="Card image cap">
												</a>
												<div class="position-absolute r-10 t-10"> 
													<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
													<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
												</div>											
											</div>
											<div class="card mb-0 no-border no-shadow w-p100">
											  <div class="card-body">
												<div class="cour-stac d-lg-flex align-items-center text-fade">
												  	  <div class="d-flex align-items-center">
														  <p>Start Date 4th Nov..</p>
														  <p class="lt-sp">|</p>
														  <p>Johen doe</p>
														  <p class="lt-sp">|</p>
													  </div>
												  	  <div class="d-flex align-items-center">
														  <p>English, Spanish</p>
														  <p class="lt-sp">|</p>
														  <span class="badge badge-warning">Upcoming</span>
													  </div>
												  </div>
												<h3 class="card-title mt-20">Law</h3>
												<p class="card-text">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.</p>
											  </div>
											  <div class="card-footer justify-content-between d-flex align-items-center">
												<div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
												<span>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star-half text-warning"></i>
													<span class="text-muted ms-2">(42)</span>
												</span>
											 </div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-payments" role="tabpanel" aria-labelledby="pills-payments-tab">									
									<h4 class="box-title mb-0">
										Payment Method
									</h4>
									<hr>
									<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">
										<li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#debit-card" role="tab"><span class="hidden-sm-up"><i class="fa fa-cc"></i></span> <span class="hidden-xs-down">Debit Card</span></a> </li>
										<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#paypal" role="tab"><span class="hidden-sm-up"><i class="fa fa-paypal"></i></span> <span class="hidden-xs-down">Paypal</span></a> </li>
									</ul>

									<!-- Tab panes -->
									<div class="tab-content tabcontent-border">
										<div class="tab-pane active" id="debit-card" role="tabpanel">
											<div class="p-30">
												<div class="row">
													<div class="col-lg-7 col-md-6 col-12">
														<form>
															<div class="form-group">
																<label for="exampleInputEmail1" class="form-label">CARD NUMBER</label>
																<div class="input-group">
																	<div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
																	<input type="text" class="form-control" id="exampleInputuname" placeholder="Card Number"> </div>
															</div>
															<div class="row">
																<div class="col-7">
																	<div class="form-group">
																		<label class="form-label">EXPIRATION DATE</label>
																		<input type="text" class="form-control" name="Expiry" placeholder="MM / YY" required=""> </div>
																</div>
																<div class="col-5 pull-right">
																	<div class="form-group">
																		<label class="form-label">CV CODE</label>
																		<input type="text" class="form-control" name="CVC" placeholder="CVC" required=""> </div>
																</div>
															</div>
															<div class="row">
																<div class="col-12">
																	<div class="form-group">
																		<label class="form-label">NAME OF CARD</label>
																		<input type="text" class="form-control" name="nameCard" placeholder="NAME AND SURNAME"> </div>
																</div>
															</div>
															<button class="btn btn-success">Make Payment</button>
														</form>
													</div>
													<div class="col-lg-5 col-md-6 col-12">
														<h3 class="box-title mt-10">General Info</h3>
														<h2><i class="fa fa-cc-visa text-info"></i>
															<i class="fa fa-cc-mastercard text-danger"></i>
															<i class="fa fa-cc-discover text-success"></i>
															<i class="fa fa-cc-amex text-warning"></i>
														</h2>
														<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock.</p>
														<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.  </p>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="paypal" role="tabpanel">						
											<div class="p-30">
												You can pay your money through paypal, for more info <a href="">click here</a><br><br>
												<button class="btn btn-primary"><i class="fa fa-cc-paypal"></i> Pay with Paypal</button>
											</div>
										</div>
									</div>
									<div class="table-responsive mt-30">
									  <table class="table table-striped">
									  		<thead>
												<tr class="bg-dark">
												  <th>Invoice ID</th>
												  <th>Category</th>
												  <th>Timings</th>
												  <th>Fees</th>
												  <th>Duration</th>
												  <th>Action</th>
												</tr>										
									  		</thead>
									  		<tbody>
												<tr>
												  <td>#1548348</td>
												  <td>Computer Science</td>
												  <td>8:45 am- 9:45 am</td>
												  <td>$479</td>
												  <td>6 Months</td>
												  <td>
													<a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
													<a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
												  </td>
												</tr>
												<tr>
												  <td>#154872</td>
												  <td>It Networking</td>
												  <td>8:45 am- 9:45 am</td>
												  <td>$479</td>
												  <td>6 Months</td>
												  <td>
													<a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
													<a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
												  </td>
												</tr>
												<tr>
												  <td>#84575</td>
												  <td>Medical</td>
												  <td>8:45 am- 9:45 am</td>
												  <td>$479</td>
												  <td>6 Months</td>
												  <td>
													<a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
													<a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
												  </td>
												</tr>
												<tr>
												  <td>#84575</td>
												  <td>IT & Software</td>
												  <td>8:45 am- 9:45 am</td>
												  <td>$479</td>
												  <td>6 Months</td>
												  <td>
													<a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
													<a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
												  </td>
												</tr>
												<tr>
												  <td>#42518</td>
												  <td>Programming Language</td>
												  <td>8:45 am- 9:45 am</td>
												  <td>$479</td>
												  <td>6 Months</td>
												  <td>
													<a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
													<a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
												  </td>
												</tr>
												<tr>
												  <td>#845962</td>
												  <td>Technology</td>
												  <td>8:45 am- 9:45 am</td>
												  <td>$479</td>
												  <td>6 Months</td>
												  <td>
													<a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
													<a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
												  </td>
												</tr>
												<tr>
												  <td>#12548</td>
												  <td>Business</td>
												  <td>8:45 am- 9:45 am</td>
												  <td>$479</td>
												  <td>6 Months</td>
												  <td>
													<a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
													<a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
												  </td>
												</tr>
												<tr>
												  <td>#452185</td>
												  <td>UI Design</td>
												  <td>8:45 am- 9:45 am</td>
												  <td>$479</td>
												  <td>6 Months</td>
												  <td>
													<a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
													<a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
												  </td>
												</tr>
												<tr>
												  <td>#1548348</td>
												  <td>General</td>
												  <td>8:45 am- 9:45 am</td>
												  <td>$479</td>
												  <td>6 Months</td>
												  <td>
													<a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
													<a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
												  </td>
												</tr>
												<tr>
												  <td>#845457</td>
												  <td>Graphic design</td>
												  <td>8:45 am- 9:45 am</td>
												  <td>$479</td>
												  <td>6 Months</td>
												  <td>
													<a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
													<a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
												  </td>
												</tr>										
									  		</tbody>
										</table>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-calendar" role="tabpanel" aria-labelledby="pills-calendar-tab">								
									<h4 class="box-title mb-0">
										Calendar
									</h4>
									<hr>
									<div class="row">	
									  <div class="col-12">
										  <div id="calendar"></div> 
									  </div>
									  <div class="col-12"> 
										<div class="box no-border no-shadow">
											<div class="box-header with-border">
											  <h4 class="box-title">Draggable Events</h4>
											</div>
											<div class="box-body p-0">
											  <!-- the events -->
											  <div id="external-events">
												<div class="external-event m-15 bg-primary" data-class="bg-primary"><i class="fa fa-hand-o-right"></i>Lunch</div>
												<div class="external-event m-15 bg-warning" data-class="bg-warning"><i class="fa fa-hand-o-right"></i>Go home</div>
												<div class="external-event m-15 bg-info" data-class="bg-info"><i class="fa fa-hand-o-right"></i>Do homework</div>
												<div class="external-event m-15 bg-success" data-class="bg-success"><i class="fa fa-hand-o-right"></i>Work on UI design</div>
												<div class="external-event m-15 bg-danger" data-class="bg-danger"><i class="fa fa-hand-o-right"></i>Sleep tight</div>
											  </div>
											  <div class="event-fc-bt mx-15 my-20">
												<!-- checkbox -->
												<div class="checkbox">
													<input id="drop-remove" type="checkbox">
													<label for="drop-remove" class="form-label">
														Remove after drop
													</label>
												</div>
												<a href="#" data-bs-toggle="modal" data-bs-target="#add-new-events" class="btn btn-success w-p100 my-10">
													<i class="ti-plus"></i> Add New Event
												</a>
											  </div>
										   </div>
										</div>
									  </div> 
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	<!-- BEGIN MODAL -->
	<!-- Modal Add Category -->
	<div class="modal fade none-border center-modal" id="add-new-events">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title"><strong>Add</strong> a category</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form role="form">
						<div class="row">
							<div class="col-md-6">
								<label class="control-label form-label">Category Name</label>
								<input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
							</div>
							<div class="col-md-6">
								<label class="control-label form-label">Choose Category Color</label>
								<select class="form-select form-white" data-placeholder="Choose a color..." name="category-color">
									<option value="success">Success</option>
									<option value="danger">Danger</option>
									<option value="info">Info</option>
									<option value="primary">Primary</option>
									<option value="warning">Warning</option>
									<option value="inverse">Inverse</option>
								</select>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success save-category" data-bs-dismiss="modal">Save</button>
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- END MODAL -->
	
	


<?php include ('footer.php');?>