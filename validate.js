function validateForm(){
    var age = document.forms["myForm"]["age"].value;
    var email = document.forms["myForm"]["email"].value;
    
    
    if(age <=18 || age > 23){
        alert("incorrect age");
        return false;
    }


    
    if(email.indexOf("@")==0)
    {
        alert('Please Enter Valid Email');
        return false;
    }
    if(((email.charAt(e.length-4))!='.') && ((email.charAt(email.length-3))!='.'))
    {
        alert('Please Enter Valid Email');
        return false;
    }
    
    var inputList = document.getElementsByTagName("input");
    var numChecked = 0;
        
    for (var i = 0; i < inputList.length; i++) {
        if(numChecked >=2){
            break;
        }
        if (inputList[i].type == "checkbox" && inputList[i].checked) {
            numChecked = numChecked + 1;
        }
    }
    if (numChecked < 2) {
        alert("Minimum 2 skills required !"); 
        return false;
    }
}