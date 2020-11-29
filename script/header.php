<header>
	<div class="logo-container">
		<img src="assets/img/logo.svg" alt="logo">
		<h4 class="logo"> <a href="#">Léo-Hacquard </a> </h4>
	</div>
	<nav>
		<ul class="nav-links">
			<?php
			$menu = [
				'about' => 'A propos',
				'competence' => 'Compétences',
				'experience' => 'Expérience',
				'formation' => 'Formation',
				'contact' => 'Contact'
			];
			foreach ($menu as $key => $value) {
				echo "<li><a class='nav-link' href='#" . $key . ".php'>" . $value . "</a></li>";
			}
			?>
			<!-- <li><a class="nav-link" href="#about">A propos</a></li> 
                    <li><a class="nav-link" href="#competence">Compétence</a></li>
                    <li><a class="nav-link" href="#experience">Expérience</a></li>
                    <li><a class="nav-link" href="#formation">Formation</a></li>
					<li><a class="nav-link" href="#contact">Contact</a></li>-->

		</ul>
	</nav>
</header>