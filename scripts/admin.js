function validateForm() {
    var x = document.forms["addItemForm"]["newItemText"].value;
    if (x==null || x=="") {
        alert("Please enter a title for your new item");
        return false;
    }
}