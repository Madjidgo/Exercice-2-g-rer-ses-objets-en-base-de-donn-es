 <?php
require 'Modeles/connectBdd.php';

require 'Modeles/CatsManager.php';

$manager = new CatsManager($db);

$chat = $manager->get($_GET['id']);




if (isset($_POST['name']) AND isset($_POST['age']) AND isset($_POST['sexe']) AND isset($_POST['name']) AND isset($_POST['id']))
{
	$chat = new Cats([
			 "name" => $_POST['name'], 
			 "age"	=> $_POST['age'],
			 "sexe" => $_POST['sexe'],
			 "color"=> $_POST['color'],
			 "id" => $_POST['id']
			]);

	


	$manager->update($chat);

	require 'Location: index.php';
}
require 'Vues/update.php';


