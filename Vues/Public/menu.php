

<nav hidden class="nav-white nav-transparent">
			<div class="nav-header">
				<a href="index.html" class="brand">
					<img src="assets/public/images/logo-dark-text.png" alt=""/>
				</a>
				<button class="toggle-bar">
					<span class="ti-menu"></span>
				</button>	
			</div>								
			<ul class="menu">				
				<li class="active">
					<a href="<?=WEBROOT?>Home">Accueil</a>
				</li>				
				<li>
					<a href="<?=WEBROOT?>about">A Propos</a>
				</li>				
				<li class="dropdown">
					<a href="#">Cours</a>
					<ul class="dropdown-menu">
						<li><a href="<?=WEBROOT?>pcours">Tous les cours</a></li>
						<li><a href="<?=WEBROOT?>pccours">Courses Categories</a></li>
					</ul>
				</li>	
				<li>
					<a href="<?=WEBROOT?>pprofs">Professeurs</a></li>
				<li>
					<a href="<?=WEBROOT?>pcontacts">Contact</a>
				</li>
			</ul>
			<div class="wrap-search-fullscreen">
				<div class="container">
					<button class="close-search"><span class="ti-close"></span></button>
					<input type="text" placeholder="Search..." />
				</div>
			</div>
		</nav>