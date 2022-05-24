<?php
	$pdo = new PDO('mysql:host=localhost;dbname=firstclass_pdo_dataobject','root','');

	// OBSERVATIONS:

	// * = WE WANT TO TAKE ALL THE COLUMNS

	// THE COMMAND BELOW AVOID 'SQL INJECTOR', USING INTERROGATION POINT, BUT IT IS NOT TOTALLY SAFE (BEFORE HTML CODE)

	/*	

	$sql = $pdo->prepare("SELECT * FROM posts WHERE category_id = ?");





	/*-----  WE COULD BE MORE SPECIFIC INSTEAD OF USE '*'  ----*/

	/*


	//$sql = $pdo->prepare("SELECT `title`,`post` FROM posts");


	$sql->execute(array($_GET['category_id']));


	// fetchAll = Take all the information in data base used in posts

	$info = $sql->fetchAll();





	/*----------- USING FOREACH ------------*/

	/* TAKING THE DATAS OF THE TABLE AND MANIPULATING ALL THE INFORMATION - FOREACH = FOR: */

	

	/*


	foreach ($info as $key => $value) {
		echo 'Title: '.$value['title'];
		echo '<br />';
		echo 'News: '.$value['content'];
		echo '<hr>';
	}


	*/




	
	/*----------- USING FOR --------------*/


	/*


	for($i = 0; $i < count($info); $i++){
		echo 'Title: '.$info[$i]['title'];
		echo '<br />';
		echo 'News: '.$info[$i]['content'];
		echo '<hr';
	}


	*/


	/*------------ TAKING THE CATEGORY AND POST OF THIS CATEGORY -------------*/

	/*

	$sql = $pdo->prepare("SELECT * FROM categories");
		

		$sql->execute();

		$info = $sql->fetchAll();


	/*---------- USING TAKING THE CATEGORY AND POST OF THIS CATEGORY -----------*/

	/*

		foreach ($info as $key => $value) {
			$category_id = $value['id'];
			echo 'Showing posts of: '.$value['name'];
			echo '<br />';
			$sql = $pdo->prepare("SELECT *FROM posts WHERE category_id = $category_id");
			$sql->execute();
			$infoPosts = $sql->fetchAll();
			foreach ($infoPosts as $key => $value) {
				echo 'Title: '.$value['title'];
				echo '<br />';
				echo 'News: '.$value['content'];
				echo '<hr>';
			}
		}

	*/


	/*----------- SIMPLIFYING THE TAKING THE CATEGORY AND POST OF THIS CATEGORY ---------*/


	// INNER JOIN = JOIN POSTS AND CATEGORIES

	$sql = $pdo->prepare("SELECT `posts`.*,`categories`.*,`posts`.`id` AS `post_id` FROM `posts` INNER JOIN `categories` ON `posts`.`category_id` = `categories`.`id`");

	$sql->execute();

	$info = $sql->fetchAll(PDO::FETCH_ASSOC);

	echo '<pre>';
	print_r($info);
	echo '</pre>';
	
?>