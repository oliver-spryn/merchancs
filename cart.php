<?php require('header.php'); ?>

<div id="page-content-wrapper">
	<div class="container">
		<div class="row">
		<div class="col-sm-3"> </div>
		<div class="col-sm-9">
			<h2>Shopping Cart</h2>
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12">
						<div id="cart-container">
							<table class="cart-table">
								<tbody>
								<tr>
									<td><div class="col-sm-3"></div></td>
									<td><div class="col-sm-3"></div></td>
									<td class="column-header">
											<span>Price</span>
									</td>
									<td class="column-header">
											<span>Quantity</span>
									</td>
									<td class="column-header">
										<div class="col-sm-3">
											<span>Subtotal</span>
										</div>
									</td>
								</tr>
								<tr class="item-row"> 
									<td class="cart-image">
										<div class="col-sm-3">
											<img class="image-responsive thumbnail" src="images/floppy-disks.jpg" alt="Floppy disk" >
											<a href="#" class="delete-item">Delete</a>
										</div>
									</td>
									<td class="cart-info">
										<h3><a href="#">Floppy Disks</a></h3>
										<p>Item description here </p>
									</td>
									<td class="cart-price">
										<span class="item-price">$232.99</span>
									</td>
									<td class="cart-quantity">
										<span>+</span>
										<input class="quantity-box" type="text" value="1" maxlength="6" />
										<span>=</span>									</td>
									<td class="cart-subtotal">
										<span class="item-subtotal">$232.99</span>
									</td>
								</tr>
								
								<tr class="item-row"> 
									<td class="cart-image">
										<div class="col-sm-3">
											<img class="image-responsive thumbnail" src="images/dictionary.jpg" alt="Dictionary" >
											<a href="#" class='delete-item'>Delete</a>
										</div>
									</td>
									<td class="cart-info">
										<h3><a href="#">Dictionary</a></h3>
										<p>Item description here </p>
									</td>
									<td class="cart-price">
										<span class="item-price">$43.99</span>
									</td>
									<td class="cart-quantity">
										<span>+</span>
										<input class="quantity-box" type="text" value="1" maxlength="6" />
										<span>=</span>									</td>
									<td class="cart-subtotal">
										<span class="item-subtotal">$43.99</span>
									</td>
								</tr>
									</tbody>
							</table>
							
							<div class="total-div">
								<h3><b>Total: <span id="total-value">$X.XX</span></b></h3>
								<input type="button" id="checkout-button" value="Proceed to Checkout" />
							</div>
							
							<a href="#" id="clear-cart">Clear Cart</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	</div>

<?php require('footer.php'); ?>