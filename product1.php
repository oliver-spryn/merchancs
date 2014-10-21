<?php require('header.php'); ?>

<div id="page-content-wrapper">
	<div class="container">
		<div class="row">
			<div class="product-container">
				
				<div class="product-image-container">
					<img class="product-image" src="images/floppy-disks.jpg">
				</div>
				<div class="product-info-container">
					<h2> Floppy disks </h2>
					<p> These are floppy disks </p>
					<h2> Price: $X.XX </h2>
					<hr/>
					<div class="order-controls">
						<span> Quantity: <input type="textbox" /> </span>
						<input type="button" value="Add to Cart" />
					</div>
				</div>
				<div class="review-container">
					<h2> Reviews </h2>
					<hr/>
					<div class="review">
						<img class="review-profile" src="#" alt="profile picture">
						<h3> Username </h3><br/>
						<p> User Review </p>
					</div>
					<hr/>
					<div class="review">
						<img class="review-profile" src="#" alt="profile picture">
						<h3> Username </h3><br/>
						<p> User Review </p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 

<?php require('footer.php'); ?>