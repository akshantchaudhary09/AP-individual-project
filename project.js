function validateForm() {
    if(document.myform.name.value == "") {
        alert("Name must be filled out");
        return false;
    }
    if(document.myform.Email.value == "") {
        alert("Email Id must be filled out");
        return false;
    }
    if(document.myform.iname.value == "") {
        alert("Institution name must be filled out");
        return false;
    }
}