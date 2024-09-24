<?php 
	
	try {
		
		$db = new PDO('mysql:host=localhost;dbname=sa_vote','root','');

		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


	} catch (Exception $e) {
		echo "Database connexion incorrect :" . $e->getMessage();
		exit();
	}

	$annee_scolaire = '2024 - 2025';

	$findStudent = $db->query('SELECT * FROM tbl_2024_etudiant WHERE annee_scolaire = "'.$annee_scolaire.'"');

	while ($show = $findStudent->fetch()) {
		$student_id = $show['student_id'];
		$student_nom = $show['student_nom'];
		$student_prenom = $show['student_prenom'];
		$student_email = $show['student_email'];
		$password = $show['password'];
		$etude_envisage = $show['etude_envisage'];
		$annee_etude = $show['annee_etude'];
		
		$migrate = $db->prepare('INSERT INTO users(
			matricule,
			name,
			last_name,
			email,
			password,
			mention,
			year_level,
			academic_year

		) VALUES(
			:matricule,
			:name,
			:last_name,
			:email,
			:password,
			:mention,
			:year_level,
			:academic_year

		)');$migrate->execute(array(
			'matricule' => $matricule,
			'name' => $name,
			'last_name' => $last_name,
			'email' => $email,
			'password' => $password,
			'mention' => $mention,
			'year_level' => $year_level,
			'academic_year' => $academic_year
			
		));		
	}
	exit();

 ?>