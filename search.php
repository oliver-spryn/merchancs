<?php 
require('includes/helpers.php'); 
echoHead();
echoStyles();
?>

<!-- Add My Style Links Here -->
<link href="styles/search.css" rel="stylesheet">

<?php echoScripts(); ?>

<!-- Add My Scripts Here -->

<?php require('includes/header.php'); ?>

<div id="page-content-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>Search Results</h2>
				
				<ul class="search">
					<li>
						<a href="#">
							<img alt="Floppy" src="images/floppy-disks.jpg"/>
							<h3>Dr. Boatright's Floppy Disk Trove</h3>
							<p>$0.01</p>
						</a>
					</li>
					<li>
						<a href="#">
							<img alt="Floppy" src="images/floppy-disks.jpg"/>
							<h3>Dr. Yeagers's Floppy Disk Trove</h3>
							<p>$0.01</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php require('includes/footer.php'); ?>