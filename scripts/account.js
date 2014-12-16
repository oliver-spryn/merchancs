window.onload = function() {

	var emailChangeBtn = document.getElementById("email-change");
	var emailSubmitBtn = document.getElementById("email-submit");
	
	var pwdChangeBtn = document.getElementById("password-change");
	var pwdSubmitBtn = document.getElementById("password-submit");
	
	var payChangeBtn = document.getElementById("payment-change");
	var paySubmitBtn = document.getElementById("payment-submit");
	
	var shipChangeBtn = document.getElementById("shipping-change");
	var shipSubmitBtn = document.getElementById("shipping-submit");
	
	//Handle email editing
	emailChangeBtn.onclick = function(e) {
		e.preventDefault();
		var currentEmail = document.getElementsByClassName("email-data")[0].innerHTML;
		var emailEditBox = document.getElementsByClassName('edit-email')[0];
		var editEmail = document.getElementsByClassName('edit-email');
		var emailData = document.getElementsByClassName('email-data');
		emailEditBox.innerHTML = currentEmail;
		for(var i = 0; i < editEmail.length; i++) {
			removeClass(editEmail[i],'hide-class');
		}
		for(i = 0; i < emailData.length; i++) {
			addClass(emailData[i],'hide-class');
		}
		
	};
	emailSubmitBtn.onclick = function(e) {
		//e.preventDefault();
		var emailEditBox = document.getElementsByClassName('edit-email')[0];
		var emailBox = document.getElementsByClassName('email-data')[0];
		if(emailEditBox.value == "") {
			alert('Please enter a valid email address');
			e.preventDefault();
			return;
		}
		emailBox.innerHTML = emailEditBox.value;
		var editEmail = document.getElementsByClassName('edit-email');
		var emailData = document.getElementsByClassName('email-data');
		for(var i = 0; i < editEmail.length; i++) {
			addClass(editEmail[i],'hide-class');
		}
		for(i = 0; i < emailData.length; i++) {
			removeClass(emailData[i],'hide-class');
		}
	}
	
	
	//Handle pwd editing
	pwdChangeBtn.onclick = function(e) {
		e.preventDefault();
		var currentPassword = document.getElementsByClassName('password-data');
		var editPassword = document.getElementsByClassName('edit-password');
		for(var i = 3; i < 6; i++) {
			editPassword[i].value = "";
		}
		
		for(var i = 0; i< currentPassword.length; i++) {
			addClass(currentPassword[i], 'hide-class');
		}
		for(var i = 0; i < editPassword.length; i++) {
			removeClass(editPassword[i], 'hide-class');
		}
	};
	pwdSubmitBtn.onclick = function(e) {
		//e.preventDefault();
		var currentPassword = document.getElementsByClassName('password-data');
		var editPassword = document.getElementsByClassName('edit-password');
		
		if(editPassword[3].value == "" || editPassword[4].value == "" || editPassword[5].value == "") {
			alert("Please enter a valid password");
			e.preventDefault();
			return;
		}
		
		
		for(var i = 0; i< currentPassword.length; i++) {
			removeClass(currentPassword[i], 'hide-class');
		}
		for(var i = 0; i < editPassword.length; i++) {
			addClass(editPassword[i], 'hide-class');
		}
	};
	
	//Handle payment editing
	payChangeBtn.onclick = function(e) {
		e.preventDefault();
		var payData = document.getElementsByClassName('payment-data');
		var payCurrent = payData[0].innerHTML.split("<br>");
		
		var payEdit = document.getElementsByClassName('edit-payment');
		var payEditBox1 = payEdit[0];
		var payEditBox2 = payEdit[1];
		var payEditBox3 = payEdit[2];
		
		// payEditBox1.value = payCurrent[0];
		// payEditBox2.value = payCurrent[1];
		// payEditBox3.value = payCurrent[2];
		
		for(var i = 0; i < payData.length; i++) {
			addClass(payData[i], 'hide-class');
		}
		for(var i = 0; i < payEdit.length; i++) {
			removeClass(payEdit[i],'hide-class');
		}
	};
	paySubmitBtn.onclick = function(e) {
		//e.preventDefault();
		
		var payData = document.getElementsByClassName('payment-data');
		var payCurrent = payData[0].innerHTML.split("<br>");
		
		var payEdit = document.getElementsByClassName('edit-payment');
		// var payEditBox1 = payEdit[0];
		// var payEditBox2 = payEdit[1];
		// var payEditBox3 = payEdit[2];
		
		if(payEditBox1.value == "" || payEditBox2.value == "" || payEditBox3.value == "") {
			alert("Please enter valid payment information");
			e.preventDefault();
			return;
		}
		//payData[0].innerHTML = payEditBox1.value + "<br>" + payEditBox2.value + "<br>" + payEditBox3.value;

		for(var i = 0; i < payData.length; i++) {
			removeClass(payData[i], 'hide-class');
		}
		for(var i = 0; i < payEdit.length; i++) {
			addClass(payEdit[i],'hide-class');
		}
	};
	
	//Handle shipping editing
	shipChangeBtn.onclick = function(e) {
		e.preventDefault();
		var shipData = document.getElementsByClassName('shipping-data');
		var shipCurrent = shipData[0].innerHTML.split("<br>");
		
		
		var shipEdit = document.getElementsByClassName('edit-shipping');
		// var shipEditBox1 = shipEdit[0];
		// var shipEditBox2 = shipEdit[1];
		
		// shipEditBox1.value = shipCurrent[0];
		// shipEditBox2.value = shipCurrent[1];
		
		for(var i = 0;i < shipData.length; i++) {
			addClass(shipData[i],'hide-class');
		}
		for(var i = 0;i < shipEdit.length; i++) {
			removeClass(shipEdit[i], 'hide-class');
		}
	};
	shipSubmitBtn.onclick = function(e) {
		//e.preventDefault();
		var shipData = document.getElementsByClassName('shipping-data');
		var shipCurrent = shipData[0].innerHTML.split("<br>");
		
		
		var shipEdit = document.getElementsByClassName('edit-shipping');
		var shipEditBox1 = shipEdit[0];
		var shipEditBox2 = shipEdit[1];
		var shipEditBox3 = shipEdit[2];
		
		if(shipEditBox1.value == "" || shipEditBox2.value == "" || shipEditBox3.value == "") {
			alert("Please enter a valid shipping address");
			e.preventDefault();
			return;
		}
		//shipData[0].innerHTML = shipEditBox1.value + "<br>" + shipEditBox2.value;
		
		for(var i = 0; i< shipData.length; i++) {
			removeClass(shipData[i], 'hide-class');
		}
		for(var i = 0; i < shipEdit.length; i++) {
			addClass(shipEdit[i], 'hide-class');
		}
	};
};

function addClass(element, classToAdd) {
    var currentClassValue = element.className;
      
    if (currentClassValue.indexOf(classToAdd) == -1) {
        if ((currentClassValue == null) || (currentClassValue === "")) {
            element.className = classToAdd;
        } else {
            element.className += " " + classToAdd;
        }
    }
}

function removeClass(element, classToRemove) {
    var currentClassValue = element.className;
 
    if (currentClassValue == classToRemove) {
        element.className = "";
        return;
    }
 
    var classValues = currentClassValue.split(" ");
    var filteredList = [];
 
    for (var i = 0 ; i < classValues.length; i++) {
        if (classToRemove != classValues[i]) {
            filteredList.push(classValues[i]);
        }
    }
 
    element.className = filteredList.join(" ");
}