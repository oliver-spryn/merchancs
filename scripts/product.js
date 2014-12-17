$(function(){
	var button = document.getElementById('add-to-cart');
	button.addEventListener('click', function(e) {
		var bubble = document.getElementById('cart-count');
		var value = parseInt(bubble.innerHTML);
		
		bubble.innerText = ++value;
		button.disabled = true;
		button.innerText = 'Added to Cart';
		
	//Send the signal to the server	
		var URL = window.location.pathname;
		var parts = URL.split("/");
		var filtered = "";
		
		for(var i = 0; i < parts.length - 1; ++i) {
			if (parts[i] != "")
				filtered += "/" + parts[i];
		}
	
		$.ajax({
			url : filtered + "/system/cart.php"
		});
		e.preventDefault();
	});
});