 <?php
require 'Modeles/connectBdd.php';

$manager = new CatsManager($db);


//ajouter chat 
   if (isset($_POST['name']) AND isset($_POST['age']) AND isset($_POST['sexe']) AND isset($_POST['name']))

{
	$chat = new Cats([
			 "name" => $_POST['name'], 
			 "age"	=> $_POST['age'],
			 "sexe" => $_POST['sexe'],
			 "color"=> $_POST['color']
			]);
	

	$manager->add($chat);

	//redirection
	header("location: index.php");


}


  else if (isset($_POST['delete']))
{
	 $delete = $_POST['id'] ;
	$manager->delete($delete);
	header("Location: index.php");

}


$chats = $manager->getList();
// var_dump($chats);

require 'Vues/Cats.php';

