<h2>formulaire update</h2>
<form action="" method="post" >
    

    <input type="text" name="name" value="<?php echo $chat->getName() ?>" placeholder="name">

    <input type="number" name="age" value="<?php echo $chat->getAge() ?>" placeholder=age>

    <input type="text" name="sexe" value="<?php echo $chat->getSexe() ?>" placeholder="sexe">

    <input type="text" name="color" value="<?php echo $chat->getColor() ?>" placeholder="color">

    <!-- <input type="hidden" name="id" value="<?php echo $chat->getId() ?>"> -->
    <form action="" method="post">
			<input type="hidden" name="id1" value="<?php echo $chat->getId(); ?>">
			<input type="submit" name="update" value="valider">
            
		</form>
