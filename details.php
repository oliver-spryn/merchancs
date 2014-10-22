<?php 
require('includes/helpers.php'); 
echoHead();
echoStyles();
?>

<!-- Add My Style Links Here -->
<link href="styles/details.css" rel="stylesheet">

<?php echoScripts(); ?>

<!-- Add My Scripts Here -->
<script src="scripts/details.js"></script>

<?php require('includes/header.php'); ?>

<!-- Add My Content Here -->
<section class="banner">
<img alt="floppies" src="images/floppy-disks.jpg"/>
	
<footer>
<button class="btn btn-primary" id="add-to-cart">$0.01 - Buy with Boatright Wallet&reg;</button>
</footer>
</section>
	
<section class="description">
<h2>Dr. Boatright's Floppy Trove</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ligula velit, tempor non congue nec, suscipit ut nisi. Vestibulum sed nibh mi. Etiam neque augue, lacinia in augue id, fringilla cursus orci. Suspendisse nec velit neque. Cras erat leo, vestibulum eu leo non, laoreet gravida mi. Nam dictum sed sem tincidunt sollicitudin. Phasellus ultricies lectus vel sem bibendum interdum. Vivamus quam orci, porttitor vel augue sit amet, dapibus gravida nibh. Cras sed dui ornare, auctor neque vel, congue dolor. Sed iaculis arcu ut orci suscipit, ut placerat est viverra.</p>
</section>

<?php require('includes/footer.php'); ?>