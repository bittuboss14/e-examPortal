<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-Exam Portal</title>
    <link rel= "stylesheet" href="registration.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script>

function validateForm(){
    var age = document.forms["myForm"]["age"].value;
    var email = document.forms["myForm"]["email"].value;
    
    
    if(age <=18 || age > 23){
        alert("incorrect age");
        return false;
    }


    
    if(email.indexOf("@")==-1)
    {
        alert('Please Enter Valid Email');
        return false;
    }
    if(((email.charAt(email.length-4))!='.') && ((email.charAt(email.length-3))!='.'))
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
</script>
   
</head>
<body class="bg-success">        
      <form  name="myForm" class = "card border-warning bg-light " method="post" action = "signup.php" >
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" id="name" maxlength = "25" required>
            
            <label for="id"><b>ID</b></label>
            <input type="text" placeholder="Enter ID" name="id" id="id" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>

            <label for="age"><b>Age</b></label>
            <input type="text" placeholder="Enter Age" name="age" id="age" required>
            <div class = " custom-radio">
            <label for="gender"><b>Gender</b></label>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label>
            </div><br>
            <label for="collegeAddress"><b>College Address</b></label><br>
            <textarea name="address" placeholder = "Enter Address Here"></textarea>
            
            <label for="branch"><b>Branch:</b></label>

            <select id="branch" name = "branch">
            <option value="" disabled selected></option>  
            <option value="cse">CSE</option>
            <option value="ece">ECE</option>
            <option value="eee">EEE</option>
            <option value="eie">EIE</option>
            </select><br>
            
            <div class = "custom-radio">
            <label for="skills"><b>Technical Skills</b></label>
            <input type="checkbox" id="c" name="c" value="1">
            <label for="c">C</label>
            <input type="checkbox" id="java" name="java" value="1">
            <label for="java">Java</label>
            <input type="checkbox" id="python" name="python" value="1">
            <label for="python">Python</label>
            <input type="checkbox" id="jsp" name="jsp" value="1">
            <label for="jsp">JSP</label><br><br>  

            <label for="file"><b>Upload File </b></label>
            <input type="file" id="resume" name="resume">
          
          <hr>
      
          <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
          <button type="submit" class="registerbtn" id="submit" name ="submit" onclick="return validateForm()">Register</button>
          <button type= "reset" class ="registerbtn" id ="reset">Reset</button>
        </div>
      
        <div class="container signin">
          <p>Already have an account? <a href="ass1.html">Sign in</a>.</p>
        </div>
      </form>
      <?php
  if(isset($_REQUEST['err']))
    {
        echo"<h1 style='text-align:center;'> Hey! You are Already Registered";
        echo"<h1  style='text-align:center;'> Please Login To Start The Test";
    }
    if(isset($_REQUEST['err1']))
    {
        echo"<h1 style='text-align:center;'> oops... You are Not Registered";
        echo"<h1  style='text-align:center;'> Please Sign Up";
    }
    if(isset($_REQUEST['err2']))
    {
        echo"<h1 style='text-align:center;'> Username or Password is Incorrect";
        echo"<h1  style='text-align:center;'> Please Try Again!";
    }
     if(isset($_REQUEST['err12']))
    {
        echo"<h1 style='text-align:center;'> Yehhh..Successfully Registered";
      
    }
  ?>
      
      
      
</body>
</html>