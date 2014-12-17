function validateForm() {
    var title = document.forms["addItemForm"]["newItemText"].value;
    var desc = document.forms["addItemForm"]["itemDescriptionText"].value;
    var price = document.forms["addItemForm"]["itemPriceText"].value;
    var img = document.forms["addItemForm"]["itemImage"].value;
    var cat = document.forms["addItemForm"]["itemCategoryText"].value;
    
    if (title ==null || title=="" || desc ==null || desc=="" || price ==null || price=="" || img ==null || img=="" || cat ==null || cat=="") {
        alert("Please fill out all required fields");
        return false;
    }
}