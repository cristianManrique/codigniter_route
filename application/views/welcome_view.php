<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styles.css'); ?>">
    <script type='text/javascript' src="<?php echo base_url('assets/js/jquery-latest.min.js'); ?>"></script>
 
 <?php //var_dump(base_url('assets/css/styles.css'))?>
</head>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p>cette page est la vue par defaut</p>
		<a></a>
		<a href="<?php echo site_url('route1/') ?>">Route1</a>
		<a href="<?php echo site_url('route2/') ?>">Route2</a>	
	</div>
	<div>
	    <button id='myButton'>Mon bouton</button>
	</div>

</div>
<script>
    $(function () {
        console.log('jQuery ready to rumble');
        
        $('#myButton').click(function(){ alert('I click my Button')})
      
   });
    
</script>

</body>
</html>