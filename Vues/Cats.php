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
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <p>Liste des chats</p>
<form action="index.php" method="post" >

	<input type="text" name="nom" value="" placeholder="nom">
	<input type="number" name="age" value="" placeholder=age>
	<input type="text" name="sexe" value="" placeholder="sexe">
	<input type="text" name="couleur" value="" placeholder="couleur">

	<input type="submit" name="submit" value="Envoyer" placeholder="">
</form>

<?php 

foreach ($chats as $key => $chat) {
}
?>
	<p>
		<span><?php echo $chat->name;?></span> 
		<span></span> 
		<span></span>
		 <form action="index.php" method="post" accept-charset="utf-8">
			<input type="hidden" name="delete" value="<?php echo $chat->id; ?>">
			<input type="submit" name="" value="supprimer">
		</form>
</p>
<? 
} 
?>



<?



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






