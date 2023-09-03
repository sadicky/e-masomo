
<?php 
$title =  'Accueil';
include ('header.php');
?>

    <section class="bg-img pt-200 pb-120" data-overlay="7" style="background-image: url(assets/public/images/front-end-img/banners/banner_a.jpg); background-position: top center;">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center mt-80">
						<h1 class="box-title text-white mb-30">Find Your Online Course</h1>	
					</div>
					<div class="text-center">
						<a href="courses_list.html" class="btn btn-outline text-white">Browse Courses List</a>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="py-50 bg-img countnm-bx" style="background-image: url(assets/public/images/front-end-img/background/bg-3.jpg)" data-overlay="5" data-aos="fade-up">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<div class="text-center">
						<div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
							<span class="text-white fs-40 icon-User"><span class="path1"></span><span class="path2"></span></span>
						</div>
						<h1 class="countnm my-10 text-white fw-300"><?=$countProfs->nbre?></h1>
						<div class="text-uppercase text-white">Professeurs</div>
					</div>
				</div>	
				<div class="col-lg-3 col-md-6 col-12">
					<div class="text-center">
						<div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
							<span class="text-white fs-40 icon-Book"></span>
						</div>
						<h1 class="countnm my-10 text-white fw-300"><?=$countCours->nbre?></h1>
						<div class="text-uppercase text-white">Cours</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="text-center">
						<div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
							<span class="text-white fs-40 icon-Group"><span class="path1"></span><span class="path2"></span></span>
						</div>
						<h1 class="countnm my-10 text-white fw-300"><?=$countEtudiants->nbre?></h1>
						<div class="text-uppercase text-white">Etudiants</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="text-center">
						<div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
							<span class="text-white fs-40 icon-Globe"><span class="path1"></span><span class="path2"></span></span>
						</div>
						<h1 class="countnm my-10 text-white fw-300"><?=$countClasses->nbre?></h1>
						<div class="text-uppercase text-white">Classes</div>
					</div>
				</div>			
			</div>
		</div>
	</section>
	

	<section class="py-50 bg-white" data-aos="fade-up">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-12 text-center">
					<h1 class="mb-15">Upcoming Courses</h1>				
					<hr class="w-100 bg-primary">
				</div>
			</div>
			<div class="row mt-30">
				<div class="col-12">
					<ul class="nav nav-tabs justify-content-center bb-0 mb-10" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#tab8" role="tab">MBA</a> </li>
						<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab9" role="tab">Machine Learning</a> </li>
						<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab10" role="tab">Software & Technology</a> </li>
						<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab11" role="tab">Marketing</a> </li>
						<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab12" role="tab">Law</a> </li>
						<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab13" role="tab">Management</a> </li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab8" role="tabpanel">
							<div class="px-15 pt-15">
								<div class="row">
									<div class="col-lg-3 col-md-6 col-12">
										<div class="card">
											<a href="#">
												<img class="card-img-top" src="assets/public/images/front-end-img/courses/1.jpg" alt="Card image cap">
											</a>
											<div class="position-absolute r-10 t-10"> 
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
											</div>
										  <div class="card-body">
											<span class="badge badge-success mb-10">Online</span>
											<h4 class="card-title">Manegement</h4>
											<div class="d-flex justify-content-between">
												<a href="#"><span class="fw-bold">Duration:</span> 6 Months</a>
												<a href="#"><span class="fw-bold">Daily:</span> 2 Hours</a>
											</div>
										  </div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="card">
											<a href="#">
												<img class="card-img-top" src="assets/public/images/front-end-img/courses/9.jpg" alt="Card image cap">
											</a>
											<div class="position-absolute r-10 t-10"> 
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
											</div>
										  <div class="card-body">
											<span class="badge badge-success mb-10">Online</span>
											<h4 class="card-title">Networking</h4>
											<div class="d-flex justify-content-between">
												<a href="#"><span class="fw-bold">Duration:</span> 6 Months</a>
												<a href="#"><span class="fw-bold">Daily:</span> 2 Hours</a>
											</div>
										  </div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="card">
											<a href="#">
												<img class="card-img-top" src="assets/public/images/front-end-img/courses/8.jpg" alt="Card image cap">
											</a>
											<div class="position-absolute r-10 t-10"> 
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
											</div>
										  <div class="card-body">
											<span class="badge badge-success mb-10">Online</span>
											<h4 class="card-title">Security</h4>
											<div class="d-flex justify-content-between">
												<a href="#"><span class="fw-bold">Duration:</span> 6 Months</a>
												<a href="#"><span class="fw-bold">Daily:</span> 2 Hours</a>
											</div>
										  </div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="card">
											<a href="#">
												<img class="card-img-top" src="assets/public/images/front-end-img/courses/7.jpg" alt="Card image cap">
											</a>
											<div class="position-absolute r-10 t-10"> 
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
											</div>
										  <div class="card-body">
											<span class="badge badge-success mb-10">Online</span>
											<h4 class="card-title">IT & Software</h4>
											<div class="d-flex justify-content-between">
												<a href="#"><span class="fw-bold">Duration:</span> 6 Months</a>
												<a href="#"><span class="fw-bold">Daily:</span> 2 Hours</a>
											</div>
										  </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="tab9" role="tabpanel">
							<div class="px-15 pt-15">
								<div class="row">
									<div class="col-lg-3 col-md-6 col-12">
										<div class="card">
											<a href="#">
												<img class="card-img-top" src="assets/public/images/front-end-img/courses/7.jpg" alt="Card image cap">
											</a>
											<div class="position-absolute r-10 t-10"> 
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
											</div>
										  <div class="card-body">
											<span class="badge badge-success mb-10">Online</span>
											<h4 class="card-title">IT & Software</h4>
											<div class="d-flex justify-content-between">
												<a href="#"><span class="fw-bold">Duration:</span> 6 Months</a>
												<a href="#"><span class="fw-bold">Daily:</span> 2 Hours</a>
											</div>
										  </div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="card">
											<a href="#">
												<img class="card-img-top" src="assets/public/images/front-end-img/courses/1.jpg" alt="Card image cap">
											</a>
											<div class="position-absolute r-10 t-10"> 
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
											</div>
										  <div class="card-body">
											<span class="badge badge-success mb-10">Online</span>
											<h4 class="card-title">Manegement</h4>
											<div class="d-flex justify-content-between">
												<a href="#"><span class="fw-bold">Duration:</span> 6 Months</a>
												<a href="#"><span class="fw-bold">Daily:</span> 2 Hours</a>
											</div>
										  </div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="card">
											<a href="#">
												<img class="card-img-top" src="assets/public/images/front-end-img/courses/9.jpg" alt="Card image cap">
											</a>
											<div class="position-absolute r-10 t-10"> 
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
											</div>
										  <div class="card-body">
											<span class="badge badge-success mb-10">Online</span>
											<h4 class="card-title">Networking</h4>
											<div class="d-flex justify-content-between">
												<a href="#"><span class="fw-bold">Duration:</span> 6 Months</a>
												<a href="#"><span class="fw-bold">Daily:</span> 2 Hours</a>
											</div>
										  </div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="card">
											<a href="#">
												<img class="card-img-top" src="assets/public/images/front-end-img/courses/8.jpg" alt="Card image cap">
											</a>
											<div class="position-absolute r-10 t-10"> 
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
											</div>
										  <div class="card-body">
											<span class="badge badge-success mb-10">Online</span>
											<h4 class="card-title">Security</h4>
											<div class="d-flex justify-content-between">
												<a href="#"><span class="fw-bold">Duration:</span> 6 Months</a>
												<a href="#"><span class="fw-bold">Daily:</span> 2 Hours</a>
											</div>
										  </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="tab10" role="tabpanel">
							<div class="px-15 pt-15">
								<div class="row">
									<div class="col-lg-3 col-md-6 col-12">
										<div class="card">
											<a href="#">
												<img class="card-img-top" src="assets/public/images/front-end-img/courses/8.jpg" alt="Card image cap">
											</a>
											<div class="position-absolute r-10 t-10"> 
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
											</div>
										  <div class="card-body">
											<span class="badge badge-success mb-10">Online</span>
											<h4 class="card-title">Security</h4>
											<div class="d-flex justify-content-between">
												<a href="#"><span class="fw-bold">Duration:</span> 6 Months</a>
												<a href="#"><span class="fw-bold">Daily:</span> 2 Hours</a>
											</div>
										  </div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="card">
											<a href="#">
												<img class="card-img-top" src="assets/public/images/front-end-img/courses/7.jpg" alt="Card image cap">
											</a>
											<div class="position-absolute r-10 t-10"> 
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
											</div>
										  <div class="card-body">
											<span class="badge badge-success mb-10">Online</span>
											<h4 class="card-title">IT & Software</h4>
											<div class="d-flex justify-content-between">
												<a href="#"><span class="fw-bold">Duration:</span> 6 Months</a>
												<a href="#"><span class="fw-bold">Daily:</span> 2 Hours</a>
											</div>
										  </div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="card">
											<a href="#">
												<img class="card-img-top" src="assets/public/images/front-end-img/courses/9.jpg" alt="Card image cap">
											</a>
											<div class="position-absolute r-10 t-10"> 
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
											</div>
										  <div class="card-body">
											<span class="badge badge-success mb-10">Online</span>
											<h4 class="card-title">Networking</h4>
											<div class="d-flex justify-content-between">
												<a href="#"><span class="fw-bold">Duration:</span> 6 Months</a>
												<a href="#"><span class="fw-bold">Daily:</span> 2 Hours</a>
											</div>
										  </div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="card">
											<a href="#">
												<img class="card-img-top" src="assets/public/images/front-end-img/courses/1.jpg" alt="Card image cap">
											</a>
											<div class="position-absolute r-10 t-10"> 
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
											</div>
										  <div class="card-body">
											<span class="badge badge-success mb-10">Online</span>
											<h4 class="card-title">Manegement</h4>
											<div class="d-flex justify-content-between">
												<a href="#"><span class="fw-bold">Duration:</span> 6 Months</a>
												<a href="#"><span class="fw-bold">Daily:</span> 2 Hours</a>
											</div>
										  </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="tab11" role="tabpanel">
							<div class="px-15 pt-15">
								<div class="row">
									<div class="col-lg-3 col-md-6 col-12">
										<div class="card">
											<a href="#">
												<img class="card-img-top" src="assets/public/images/front-end-img/courses/1.jpg" alt="Card image cap">
											</a>
											<div class="position-absolute r-10 t-10"> 
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
											</div>
										  <div class="card-body">
											<span class="badge badge-success mb-10">Online</span>
											<h4 class="card-title">Manegement</h4>
											<div class="d-flex justify-content-between">
												<a href="#"><span class="fw-bold">Duration:</span> 6 Months</a>
												<a href="#"><span class="fw-bold">Daily:</span> 2 Hours</a>
											</div>
										  </div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="card">
											<a href="#">
												<img class="card-img-top" src="assets/public/images/front-end-img/courses/7.jpg" alt="Card image cap">
											</a>
											<div class="position-absolute r-10 t-10"> 
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
											</div>
										  <div class="card-body">
											<span class="badge badge-success mb-10">Online</span>
											<h4 class="card-title">IT & Software</h4>
											<div class="d-flex justify-content-between">
												<a href="#"><span class="fw-bold">Duration:</span> 6 Months</a>
												<a href="#"><span class="fw-bold">Daily:</span> 2 Hours</a>
											</div>
										  </div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="card">
											<a href="#">
												<img class="card-img-top" src="assets/public/images/front-end-img/courses/9.jpg" alt="Card image cap">
											</a>
											<div class="position-absolute r-10 t-10"> 
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
											</div>
										  <div class="card-body">
											<span class="badge badge-success mb-10">Online</span>
											<h4 class="card-title">Networking</h4>
											<div class="d-flex justify-content-between">
												<a href="#"><span class="fw-bold">Duration:</span> 6 Months</a>
												<a href="#"><span class="fw-bold">Daily:</span> 2 Hours</a>
											</div>
										  </div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="card">
											<a href="#">
												<img class="card-img-top" src="assets/public/images/front-end-img/courses/8.jpg" alt="Card image cap">
											</a>
											<div class="position-absolute r-10 t-10"> 
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
											</div>
										  <div class="card-body">
											<span class="badge badge-success mb-10">Online</span>
											<h4 class="card-title">Security</h4>
											<div class="d-flex justify-content-between">
												<a href="#"><span class="fw-bold">Duration:</span> 6 Months</a>
												<a href="#"><span class="fw-bold">Daily:</span> 2 Hours</a>
											</div>
										  </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="tab12" role="tabpanel">
							<div class="px-15 pt-15">
								<div class="row">
									<div class="col-lg-3 col-md-6 col-12">
										<div class="card">
											<a href="#">
												<img class="card-img-top" src="assets/public/images/front-end-img/courses/8.jpg" alt="Card image cap">
											</a>
											<div class="position-absolute r-10 t-10"> 
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
											</div>
										  <div class="card-body">
											<span class="badge badge-success mb-10">Online</span>
											<h4 class="card-title">Security</h4>
											<div class="d-flex justify-content-between">
												<a href="#"><span class="fw-bold">Duration:</span> 6 Months</a>
												<a href="#"><span class="fw-bold">Daily:</span> 2 Hours</a>
											</div>
										  </div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="card">
											<a href="#">
												<img class="card-img-top" src="assets/public/images/front-end-img/courses/7.jpg" alt="Card image cap">
											</a>
											<div class="position-absolute r-10 t-10"> 
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
											</div>
										  <div class="card-body">
											<span class="badge badge-success mb-10">Online</span>
											<h4 class="card-title">IT & Software</h4>
											<div class="d-flex justify-content-between">
												<a href="#"><span class="fw-bold">Duration:</span> 6 Months</a>
												<a href="#"><span class="fw-bold">Daily:</span> 2 Hours</a>
											</div>
										  </div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="card">
											<a href="#">
												<img class="card-img-top" src="assets/public/images/front-end-img/courses/1.jpg" alt="Card image cap">
											</a>
											<div class="position-absolute r-10 t-10"> 
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
											</div>
										  <div class="card-body">
											<span class="badge badge-success mb-10">Online</span>
											<h4 class="card-title">Manegement</h4>
											<div class="d-flex justify-content-between">
												<a href="#"><span class="fw-bold">Duration:</span> 6 Months</a>
												<a href="#"><span class="fw-bold">Daily:</span> 2 Hours</a>
											</div>
										  </div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="card">
											<a href="#">
												<img class="card-img-top" src="assets/public/images/front-end-img/courses/9.jpg" alt="Card image cap">
											</a>
											<div class="position-absolute r-10 t-10"> 
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
											</div>
										  <div class="card-body">
											<span class="badge badge-success mb-10">Online</span>
											<h4 class="card-title">Networking</h4>
											<div class="d-flex justify-content-between">
												<a href="#"><span class="fw-bold">Duration:</span> 6 Months</a>
												<a href="#"><span class="fw-bold">Daily:</span> 2 Hours</a>
											</div>
										  </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="tab13" role="tabpanel">
							<div class="px-15 pt-15">
								<div class="row">
									<div class="col-lg-3 col-md-6 col-12">
										<div class="card">
											<a href="#">
												<img class="card-img-top" src="assets/public/images/front-end-img/courses/9.jpg" alt="Card image cap">
											</a>
											<div class="position-absolute r-10 t-10"> 
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
											</div>
										  <div class="card-body">
											<span class="badge badge-success mb-10">Online</span>
											<h4 class="card-title">Networking</h4>
											<div class="d-flex justify-content-between">
												<a href="#"><span class="fw-bold">Duration:</span> 6 Months</a>
												<a href="#"><span class="fw-bold">Daily:</span> 2 Hours</a>
											</div>
										  </div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="card">
											<a href="#">
												<img class="card-img-top" src="assets/public/images/front-end-img/courses/8.jpg" alt="Card image cap">
											</a>
											<div class="position-absolute r-10 t-10"> 
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
											</div>
										  <div class="card-body">
											<span class="badge badge-success mb-10">Online</span>
											<h4 class="card-title">Security</h4>
											<div class="d-flex justify-content-between">
												<a href="#"><span class="fw-bold">Duration:</span> 6 Months</a>
												<a href="#"><span class="fw-bold">Daily:</span> 2 Hours</a>
											</div>
										  </div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="card">
											<a href="#">
												<img class="card-img-top" src="assets/public/images/front-end-img/courses/1.jpg" alt="Card image cap">
											</a>
											<div class="position-absolute r-10 t-10"> 
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
											</div>
										  <div class="card-body">
											<span class="badge badge-success mb-10">Online</span>
											<h4 class="card-title">Manegement</h4>
											<div class="d-flex justify-content-between">
												<a href="#"><span class="fw-bold">Duration:</span> 6 Months</a>
												<a href="#"><span class="fw-bold">Daily:</span> 2 Hours</a>
											</div>
										  </div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="card">
											<a href="#">
												<img class="card-img-top" src="assets/public/images/front-end-img/courses/7.jpg" alt="Card image cap">
											</a>
											<div class="position-absolute r-10 t-10"> 
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
												<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
											</div>
										  <div class="card-body">
											<span class="badge badge-success mb-10">Online</span>
											<h4 class="card-title">IT & Software</h4>
											<div class="d-flex justify-content-between">
												<a href="#"><span class="fw-bold">Duration:</span> 6 Months</a>
												<a href="#"><span class="fw-bold">Daily:</span> 2 Hours</a>
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
	<section class="pt-xl-100 pb-50" data-aos="fade-up">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-10 col-12">
					<div class="box box-body p-xl-50 p-30">
						<div class="row align-items-center">
							<div class="col-lg-6 col-12">
								<p class="badge badge-warning badge-lg">FREE</p>
								<h1 class="mb-15">Live Classes</h1>
								<h4 class="fw-400">It is a long established fact that a reade.</h4>
								<p class="fs-22">Experience Plus for free and start<br> learning from the best</p>
								<a href="#" class="btn btn-outline btn-primary">See all</a>
							</div>
							<div class="col-lg-6 col-12 position-relative">
								<div class="media-list media-list-hover media-list-divided md-post mt-lg-0 mt-30">
									<a class="media media-single box-shadowed bg-white pull-up mb-15" href="#">
									  <img class="w-80 rounded ms-0" src="assets/public/images/front-end-img/avatar/1.jpg" alt="...">
									  <div class="media-body fw-500">
										<h5 class="overflow-hidden text-overflow-h nowrap">Basic English for IBPS SO/ IBPS PO/IBPS Clerk exams | 5 PM</h5>
										<small class="text-fade">Today, 5:00 PM</small>
										<p><small class="text-fade mt-10">Johen doe</small></p>
									  </div>
									</a>
									<a class="media media-single box-shadowed bg-white pull-up mb-15" href="#">
									  <img class="w-80 rounded ms-0" src="assets/public/images/front-end-img/avatar/2.jpg" alt="...">
									  <div class="media-body fw-500">
										<h5 class="overflow-hidden text-overflow-h nowrap">Basic English for IBPS SO/ IBPS PO/IBPS Clerk exams | 5 PM</h5>
										<small class="text-fade">Today, 5:00 PM</small>
										<p><small class="text-fade mt-10">Johen doe</small></p>
									  </div>
									</a>
									<a class="media media-single box-shadowed bg-white pull-up mb-15" href="#">
									  <img class="w-80 rounded ms-0" src="assets/public/images/front-end-img/avatar/3.jpg" alt="...">
									  <div class="media-body fw-500">
										<h5 class="overflow-hidden text-overflow-h nowrap">Basic English for IBPS SO/ IBPS PO/IBPS Clerk exams | 5 PM</h5>
										<small class="text-fade">Today, 5:00 PM</small>
										<p><small class="text-fade mt-10">Johen doe</small></p>
									  </div>
									</a>
									<a class="media media-single box-shadowed bg-white pull-up mb-0" href="#">
									  <img class="w-80 rounded ms-0" src="assets/public/images/front-end-img/avatar/4.jpg" alt="...">
									  <div class="media-body fw-500">
										<h5 class="overflow-hidden text-overflow-h nowrap">Basic English for IBPS SO/ IBPS PO/IBPS Clerk exams | 5 PM</h5>
										<small class="text-fade">Today, 5:00 PM</small>
										<p><small class="text-fade mt-10">Johen doe</small></p>
									  </div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>						
		</div>
	</section>
	
	<section class="py-50 bg-white" data-aos="fade-up">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-12 text-center">
					<h1 class="mb-15">Try FREE courses to learn fundamentals</h1>				
					<hr class="w-100 bg-primary">
				</div>
			</div>
			<div class="row mt-30">
				<div class="col-lg-3 col-md-6 col-12">
					<div class="card">
						<a href="#">
							<img class="card-img-top" src="assets/public/images/front-end-img/courses/1.jpg" alt="Card image cap">
						</a>
						<div class="position-absolute r-10 t-10"> 
							<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
							<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
						</div>
					  <div class="card-body">
						<h4 class="card-title">Data</h4>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="btn btn-primary btn-outline btn-sm">Know More</a>
					  </div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="card">
						<a href="#">
							<img class="card-img-top" src="assets/public/images/front-end-img/courses/2.jpg" alt="Card image cap">
						</a>
						<div class="position-absolute r-10 t-10"> 
							<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
							<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
						</div>
					  <div class="card-body">
						<h4 class="card-title">Management & Marketing</h4>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="btn btn-primary btn-outline btn-sm">Know More</a>
					  </div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="card">
						<a href="#">
							<img class="card-img-top" src="assets/public/images/front-end-img/courses/3.jpg" alt="Card image cap">
						</a>
						<div class="position-absolute r-10 t-10"> 
							<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
							<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
						</div>
					  <div class="card-body">
						<h4 class="card-title">Technology</h4>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="btn btn-primary btn-outline btn-sm">Know More</a>
					  </div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="card">
						<a href="#">
							<img class="card-img-top" src="assets/public/images/front-end-img/courses/4.jpg" alt="Card image cap">
						</a>
						<div class="position-absolute r-10 t-10"> 
							<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-heart-o"></i></button>
							<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i class="fa fa-share-alt"></i></button>
						</div>
					  <div class="card-body">
						<h4 class="card-title">Digital Marketing</h4>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="btn btn-primary btn-outline btn-sm">Know More</a>
					  </div>
					</div>
				</div>
				<div class="col-12 text-center">					
					<a href="#" class="btn btn-primary mx-auto">View All Free Courses</a>
				</div>
			</div>
		</div>
	</section>
	
    <?php 
include ('footer.php');
?>