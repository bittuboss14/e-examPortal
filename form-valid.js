function validateForm() {
    var name = document.forms["myForm"]["name"].value;
    var id = document.forms["myForm"]["id"].value;
    var email = document.forms["myForm"]["email"].value;
    
    var password = document.forms["myForm"]["password"].value;
    var age = document.forms["myForm"]["age"].value;
    var gender = document.forms["myForm"]["gender"].value;
    var address = document.forms["myForm"]["address"].value;

    //var skills = document.forms["myForm"]["skill"].value;

    // if(name == "" || id == "" || email == "" ||  age == "" || password == ""|| address == "" ||gender == "" || skills == "" ){

    //     alert("Some fields are empty");
    //     return false;
    // }




    // if ( name.length >25) {
    //   alert("Name length too long");
    //   return false;
    // }

    

    
    // var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    // if(email.match(mailformat))
    // {
    //     alert("Valid email address!");
    //     document.form1.text1.focus();
       
    // }
    // else
    // {
    //     alert("You have entered an invalid email address!");
    //     document.myForm.email.wrong();
    //     return false;
    // }


    if(age < 18 || age >23){
        alert("invalid age");
        return false;
    }

   
    // var inputList = document.getElementsByTagName("input");
    // var numChecked = 0;
        
    // for (var i = 0; i < inputList.length; i++) {
    //     if (inputList[i].type == "checkbox" && inputList[i].checked) {
    //         numChecked = numChecked + 1;
    //     }
    // }
    // if (numChecked < 2) {
    //     alert("Minimum 2 skills required !"); 
    //     return false;
    // }
      
    // else{
    //     return true;
    // }
}
