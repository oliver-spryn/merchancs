<?php 
require('includes/helpers.php'); 
echoHead();
echoStyles();
?>

<!-- Add My Style Links Here -->
<link href="styles/categories.css" rel="stylesheet">

<?php echoScripts(); ?>

<!-- Add My Scripts Here -->

<?php require('includes/header.php'); ?>

<!-- Add My Content Here -->

<div id="page-content-wrapper">
	<div class="container">
		<div class="row">
		<div class="col-sm-3"> </div>
		<div id="itemDisplay" class="col-sm-9">
			<?php 	
				if (isset($_GET['category']) && !empty($_GET['category']))
					echoItems($_GET['category']); 
				else echoItems("New and Featured");
			?>
		</div>
		</div>
	</div>
</div>

<?php require('includes/footer.php'); ?>