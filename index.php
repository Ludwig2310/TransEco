<html>
	<head>
		<title>TransEco</title>
		<link rel="stylesheet" href="css/style.css"/>
	</head>
	
	<body>
		<!-- En tête -->
		<?php include('includes/menu.php')?>
		
		<section class="corps">
			<h1 class="titlepage">Louer un moyen de transport sain pour vos activités</h1>
			<p class="p">Profitez d'une balade avec vos proches en utilisant un moyen de transport propre.</br>
			Grâce à TransEco, louez un vélo ou une trotinette en quelques clics.</p>
			<p class="btn">LOUER DES MAINTENANT</p>
			
			
			<h1 class="titlepage2">Chercher un créneau sans m'inscrire</h1>
			<section class="searchbar">
				<img src="images/search.png"/>
				<input class="input" type="text" placeholder="59140 - DUNKERQUE"/>
				<span>Après </span>
				<select class="inputsearch">
				<?php
				$heure = 00;
				$minute = 00;
				$fin = 24;
				while($heure<24){
					?>
					<option value="<?php echo $heure.":".$minute?>"><?php echo $heure.":".$minute?></option>
					<?php
					$minute=$minute+30;
					?>
					<option value="<?php echo $heure.":".$minute;?>"><?php echo $heure.":".$minute;?></option>
					<?php
					$heure=$heure+1;
					$minute=00;
				}
				?>
				</select>
				<input class="inputSUBMIT" type="submit" value="CONSULTER"/>
			</section>
			
			<section id="resultats">
				<p style="text-align:center">choisissez un créneau dans la section ci-dessus.</p>
			</section>
			
			
			<h1 class="titlepage2">Ou voir les créneaux de cette semaine </h1>
			<?php
			$jour = 1;
			$date = 26;
			while($jour<8){
			?>
				<section class="<?php if($jour<6){echo 'jourdisabled';}else{echo 'jour';}?>">
				<h3>
				<?php
				if($jour==1){
					echo "Lundi";
				}
				if($jour==2){
					echo "Mardi";
				}
				if($jour==3){
					echo "Mercredi";
				}
				if($jour==4){
					echo "Jeudi";
				}
				if($jour==5){
					echo "Vendredi";
				}
				if($jour==6){
					echo "Samedi";
				}
				if($jour==7){
					echo "Dimanche";
				}
				?>
				</h3>
				<p><?php echo $date ?></p>
				</section>
			<?php
			$jour=$jour+1;
			if($date==31){
				$date=1;
			}
			else{
				$date=$date+1;
			}
			}
			?>
		</section>
	</body>
</html>
