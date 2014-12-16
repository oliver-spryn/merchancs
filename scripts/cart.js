window.onload = function() {



	var inputs = document.getElementsByClassName('quantity-box');
	var subtotals = document.getElementsByClassName('item-subtotal');
	var total = document.getElementById("total-value");
	
	var deleteControls = document.getElementsByClassName('delete-item');
	
	
	var checkoutControl = document.getElementById('checkout-button');
	
	
	
	
	//Subtotal/Total checking
	for(var i = 0;i < inputs.length; i++) {
		var price = inputs[i].parentNode.parentNode.childNodes[5].childNodes[1].innerHTML;
		price = price.replace('$','');
		var subtotal = inputs[i].value * price;
		inputs[i].parentNode.parentNode.childNodes[9].childNodes[1].innerHTML = "$" + subtotal.toFixed(2);
		
		var totalvalue = parseFloat(0.00);
		for(var j = 0; j < subtotals.length; j++) {
			var subvalue = subtotals[j].innerHTML.replace('$','');
			totalvalue += parseFloat(subvalue);
		}
		total.innerHTML = "$" + totalvalue.toFixed(2);
	
	}
	for(var i = 0;i < inputs.length; i++) {
		inputs[i].onchange = function() {
			if(/^[0-9]+$/.test(this.value) == false) {
				
				alert("Quantity must be a valid number");
				this.value = "";
			}
			else if(parseInt(this.value) < 1) {
				alert("Quantity must be greater than 0");
				this.value = "";
			}
			else {
				var price = this.parentNode.parentNode.childNodes[5].childNodes[1].innerHTML;
				price = price.replace('$','');
				
				var subtotal = this.value * price;
				this.parentNode.parentNode.childNodes[9].childNodes[1].innerHTML = "$" + subtotal.toFixed(2);
				
				var totalvalue = parseFloat(0.00);
				for(var j = 0; j < subtotals.length; j++) {
					var subvalue = subtotals[j].innerHTML.replace('$','');
					totalvalue += parseFloat(subvalue);
				}
				total.innerHTML = "$" + totalvalue.toFixed(2);
			}
			
		};
	}
	
	
	
};