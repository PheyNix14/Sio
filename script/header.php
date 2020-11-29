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
				echo "<li><a class='nav-link' href='#" . $key . "'>" . $value . "</a></li>";
			}
			?>
		</ul>
	</nav>
</header>