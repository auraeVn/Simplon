<header>
	<nav class="navbar navbar-expand-lg bg-body-tertiary" id="navContainer">


		<a class="navbar-brand" href="?controller=home&action=home"><img class="imglogo" src="Content/logo.png" alt=""></a>

		<div class="collapse navbar-collapse" id="menu">
			<ul class="navbar-nav" id="nav_ul">

				<li class="nav-item">
					<button type="button" class="btn btn-outline-light btnNav"><a class="nav-link" id="navbarDropdownMenuLink" href="?controller=home&action=home">Home</a></button>
				</li>

				<!-- <li class="nav-item">
					<button type="button" class="btn btn-outline-light btnNav"><a class="nav-link" id="navbarDropdownMenuLink" href="../?controller=user&action=deconnexion">Déconnexion</a></button>
				</li> -->

				
				<li class="nav-item dropdown nav_li">
					<button class="btn btn-secondary"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							 <?php echo $_SESSION['prenom'];?>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="../?controller=user&action=deconnexion">Déconnexion</a>
						</div>
				</li>


				<li class="nav-item dropdown nav_li">
					<button class="btn btn-secondary"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Livres
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="?controller=livre&action=all_livres">Tous les livres</a>
							<a class="dropdown-item" href="?controller=livre&action=ajout_livres">Ajouter un livre</a>
							<a class="dropdown-item" href="?controller=livre&action=titre_livres">Par titre</a>
							<a class="dropdown-item" href="?controller=livre&action=auteur_livres">Par auteur</a>
							<a class="dropdown-item" href="?controller=livre&action=editeur_livres">Par éditeur</a>
						</div>
				</li>

				<li class="nav-item dropdown nav_li">
					<button class="btn btn-secondary"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Fournisseurs
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="?controller=fournisseur&action=all_fournisseurs">Tous les fournisseurs</a>
							<a class="dropdown-item" href="?controller=fournisseur&action=ajout_fournisseurs">Ajouter un fournisseur</a>
							<a class="dropdown-item" href="?controller=fournisseur&action=raison_sociale_fournisseurs">Par raison sociale</a>
							<a class="dropdown-item" href="?controller=fournisseur&action=localite_fournisseurs">Par localité</a>
							<a class="dropdown-item" href="?controller=fournisseur&action=pays_fournisseurs">Par pays</a>
						</div>
				</li>

				<li class="nav-item dropdown nav_li">
					<button class="btn btn-secondary"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Commandes
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="?controller=commande&action=all_commandes">Toutes les commandes</a>
							<a class="dropdown-item" href="?controller=commande&action=ajout_commandes_titres">Ajouter une commande</a>
							<a class="dropdown-item" href="?controller=commande&action=commande_editeurs">Par éditeur</a>
							<a class="dropdown-item" href="?controller=commande&action=commande_titres">Par titre</a>
							<a class="dropdown-item" href="?controller=commande&action=commande_dates">Par date</a>
						</div>
				</li>

			</ul>
		</div>

		<div class="hamburger">
			<div class="bar1"></div>
			<div class="bar2"></div>
			<div class="bar3"></div>
		</div>

	</nav>
</header>