<?php 
include("View/Goruntu.php");
include("Controller/Control.php");
if(!empty($_GET['url'])){
	$url = $_GET['url'];
	
	switch ($url) {
		case 'anasayfa':
			anasayfa();
			break;

		case 'haqqinda':
		      haqqinda();
		      break;

		case 'melumatlar':
		      melumatlar();
		      break;
		
		default:
			sehv();
			break;
	}

}
else{
		sehv();
	}

// git clone link yazilir
// git add .
// git commit -m 'java proyektim'
// git push

	// git remote add upstream link
	// git fetch upstream
	// git checkout master
	// git merge upstream/master
	
?>