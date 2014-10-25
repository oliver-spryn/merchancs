$(function(){
	var button = document.getElementById('add-to-cart');
	button.addEventListener('click', function(e) {
		var bubble = document.getElementById('cart-count');
		var value = parseInt(bubble.innerHTML);
		
		bubble.innerText = ++value;
		button.disabled = true;
		button.innerText = 'Added to Cart';
	});
});