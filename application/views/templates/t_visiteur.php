﻿<?php
	$this->load->helper('url');
	$v_path = base_url('application/views');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

	<head>
		<title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link href="<?php echo css_url('styles.css')?>" rel="stylesheet" type="text/css" />

		<script type="text/javascript">
			function hideNotify() {
				document.getElementById("notify").style.display = "none";
			}
		</script>

	</head>

	<body onload="setTimeout(hideNotify,7000);">
		<div id="page">
			<div id="entete">
				<img src="<?php echo img_url('logo.jpg')?>" id="logoGSB" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin" />
				<h1>Gestion des frais de déplacements</h1>
			</div>

			<!-- Division pour le menu -->
			<div id="menuGauche">
				<div id="infosUtil">
					<h2></h2>
				</div>

				<ul id="menuList">
					<li>
						<?php
							if($this->session->userdata('statut') == 'visiteur'){
								echo "Visiteur :<br/>";
							}else{
								echo "Comptable :<br/>";
							}
						?>
						<?php echo $this->session->userdata('prenom')."  ".$this->session->userdata('nom');  ?>
					</li>

					<li class="smenu">
						<?php echo anchor('c_visiteur/', 'Accueil', 'title="Page d\'accueil"'); ?>
					</li>

					<li class="smenu">
						<?php echo anchor('c_visiteur/mesFiches', 'Mes fiches de frais', 'title="Consultation de mes fiches de frais"'); ?>
					</li>

					<li class="smenu">
						<?php echo anchor('c_visiteur/deconnecter', 'Se déconnecter', 'title="Déconnexion"'); ?>
					</li>
				</ul>

			</div>

			<?php echo $body; ?>

			<div id="pied">
				<br/>
				<p>
					<a href="#"><img
					src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>
				</p>
				<p>
<a href="http://jigsaw.w3.org/css-validator/check/referer">
    <img style="border:0;width:88px;height:31px"
        src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
        alt="CSS Valide !" />
    </a>
</p>
			</div>

		</div>

	</body>
</html>
