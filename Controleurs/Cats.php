 <?php
require 'Modeles/connectBdd.php';

$manager = new CatsManager($db);


//ajouter chat 
   if (isset($_POST['name'])&&
   		isset($_POST['age']) &&
   		isset($_POST['sexe'])&&
   		isset($_POST['color']))
   	  
{
	$data = ["name" => $_POST['name'], 
			 "age"	=> $_POST['age'],
			 "sexe" => $_POST['sexe'],
			 "color"=> $_POST['color']
			];

	$chat[] = new Cats($data);
	$manager->add($chat);

	//redirection
	header("location: index.php");


}
  else if (isset($_POST['delete']))
{
	$_Post['delete'] = $delete ;
	$manager->delete($delete);
	header("Location: index.php");
} 




$chats = $manager->getList();
// var_dump($chats);

require 'Vues/Cats.php';

