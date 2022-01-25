	<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li> <a href="{{ route ('home') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
						<li class="list-divider"></li>
                        <li class="submenu"> <a href="#"><i class="fas fa-table"></i> <span> Analyses </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="analyse_staff.php">Staff </a></li>
								<li><a href="analyse_machine.php"> Machine </a></li>
								<li><a href="analyse_magasin.php"> Magasin </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Staff </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
                        <li><a href="enregitrement-staff.php"> enregistrement </a></li>
					    <li><a  href="historique_staff.php"> historique </a></li>
						<li><a href="staff_liste.php"> liste des personnelles </a></li>
						</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-tools"></i> <span> Machine </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
	                     		<li><a href="enregitrement_machine.php"> enregistrement </a></li>
								<li><a href="historique_machine.php"> Historique </a></li>
								<li><a href="{{ route ('machine') }}"> liste des machine</a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Magasin </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="mouvement_article.php">Mouvement article </a></li>
								<li><a href="suivi_stock.php">Suivie stock</a></li>
								<li><a href="ajouter_article.php"> Ajouté article </a></li>
							</ul>
						</li>
						<li> <a href="{{ route ('full-calender') }}"><i class="fas fa-calendar-alt"></i> <span>Calendar</span></a> </li>					
						<li class="submenu"> <a href="#"><i class="fas fa-cog"></i> <span>Divers</span><span class="menu-arrow"></span></a> 
						<ul class="submenu_class" style="display: none;">
								<li><a href="presence_edit.php">Modifier Presence</a></li>
								<li><a href="suivie_edit.php">Modifier Suivie</a></li>
								<li><a href="heurssup_liste.php"> Suivie heures supp</a></li>
              <li><a href="declaration_list.php">Déclaration de panne</a></li>
						</ul>
						</li>						
						</ul>
				</div>
             </div>
         </div>