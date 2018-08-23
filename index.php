<?php	// Grant Schorgl Assignment 10 11/8/2016
session_start();
require ('includes/config.inc.php'); 
$page_title = 'Welcome to this Site!';
include ('includes/header.html');

?>
<div class="container">
	<div class="container">
		<h1 id="mainhead">Grant Schorgl</h1>
			<?PHP if (!isset($_SESSION['agent']) OR ($_SESSION['agent'] != md5($_SERVER['HTTP_USER_AGENT']) ))
				{ echo "<h4> log in for joke</h4>";}
			else
			{ echo "<h4>Son, I wanted to let you know you were adopted, my dad told me.<br> <br> Wait, really? <br> <br> Yup, get ready. Theyll be picking you up in about an hour.</h4>";} ?>
			<p>This is where you'll put the main page content. This content will differ for each page.</p>
			<p>This is where you'll put the main page content. This content will differ for each page.</p>
			<p>This is where you'll put the main page content. This content will differ for each page.</p>
	</div>
	<div class="container">
		<h2 >Subheader</h2>
			<p>This is where you'll put the main page content. This content will differ for each page.</p>
			<p>This is where you'll put the main page content. This content will differ for each page.</p>
			<p>This is where you'll put the main page content. This content will differ for each page.</p>
			<p>This is where you'll put the main page content. This content will differ for each page.</p>
	</div>
</div>
<?php include ('includes/footer.html'); ?> 