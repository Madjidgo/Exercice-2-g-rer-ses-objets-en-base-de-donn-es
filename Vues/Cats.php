<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
       

        <p>Liste des chats</p>
<form action="" method="post" >

	<input type="text" name="name" value="" placeholder="name">
	<input type="number" name="age" value="" placeholder=age>

    <input type="text" name="sexe" value="" placeholder="sexe">
	<input type="text" name="color" value="" placeholder="color">

	<input type="submit" name="submit" value="Envoyer" placeholder="">
</form>

<?php
 
 //var_dump($chats);


// $chats = new Cats(array());
/** @var TYPE_NAME $chats */
foreach ($chats as $key => $value)
{

?>
	<p>
		<span><?php echo $value['name'];?></span> 
		<span><?php echo $value['age']; ?></span> 
		<span><?php echo $value['sexe'];?></span>
		<span><?php echo $value['color'];?></span>


		 <form action="index.php" method="post">
			<input type="hidden" name="id" value="<?php echo $value['id']; ?>">
			<input type="submit" name="delete" value="supprimer">
            
		</form>
        <a href="chat.php?id=<?php echo $value['id']?>">Voir</a>
	</p>


<?php 
} 
?> 




<!-- footer -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>






