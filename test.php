  <?php
    session_start();
    if(!isset($_SESSION['login']))
        header("Location:ass1.php?err14=1");
      $email=$_SESSION['login'];
      $con=mysqli_connect("localhost","root","","e-exam") or die("server not found");
      if(isset($_REQUEST['ai']))
      {
        $query="SELECT * FROM `ai`";
        
        $_SESSION['sub'] = "ai";
        
      }
      if(isset($_REQUEST['flat']))
      {
        $query="SELECT * FROM `flat`";
        $_SESSION['sub'] = "flat";
      }
      if(isset($_REQUEST['se']))
      {
        $query="SELECT * FROM `se`";
        $_SESSION['sub'] = "se";
      }
      $sub = $_SESSION['sub'];
      $query2 ="SELECT * FROM `result` WHERE email='$email' AND sub='$sub' ";
      //echo $query2;
      $z= mysqli_query($con,$query2);
      //echo "{$z}";
      $row = mysqli_num_rows($z);
      //echo $row;
      if($row>0){
        header("Location:subject.php?err1=1");
      }
      $x=mysqli_query($con,$query) or die("wrong query");

    $_SESSION['prev']="1";
    
  ?>
  <html>
  <head>
  <style>
    .container1 {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  /* Hide the browser's default radio button */
  .container1 input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
  }

  /* Create a custom radio button */
  .checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
  }

  /* On mouse-over, add a grey background color */
  .container1:hover input ~ .checkmark {
    background-color: #ccc;
  }

  /* When the radio button is checked, add a blue background */
  .container1 input:checked ~ .checkmark {
    background-color: #2196F3;
  }

  /* Create the indicator (the dot/circle - hidden when not checked) */
  .checkmark:after {
    content: "";
    position: absolute;
    display: none;
  }

  /* Show the indicator (dot/circle) when checked */
  .container input:checked ~ .checkmark:after {
    display: block;
  }

  /* Style the indicator (dot/circle) */
  .container1 .checkmark:after {
    top: 9px;
    left: 9px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: white;
  }

  </style>
  
  <script>
    
  var totalsecond=300;
  var minute=parseInt(totalsecond/60);
  var second= parseInt(totalsecond%60);
  function checkTime()
  {
  document.getElementById("timeleft").innerHTML="timeleft: "+minute+"minute "+second+" second";
  if(totalsecond<=0){
    alert("Your time is over");
    document.getElementById("ka").submit();
  }
  else
  {
    totalsecond-=1;
    minute=parseInt(totalsecond/60);
    second=parseInt(totalsecond%60);
    setTimeout("checkTime()",1000);


  }
  }
  setTimeout("checkTime()",1000);
  </script>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="file/bootstrap-4.2.1-dist/css/bootstrap.min.css">
    <script src="file/jquery.min.js"></script>
    <script src="file/bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>

  
  <title>


    </title>






    </head>
  <body>
  <div class="container-fluid" style="background-color: #ECEAE0; height:110px;" >
    
  <div class="row">
    <div class="col-3">
      <form method="post" action="logout.php"> 
  <input type="submit" name="logout" class="btn btn-success" style="margin-top: 30px;margin-left: 10px;" value="logout">	</input>
  </form>
    </div>
  <div class="col-6">


  <h4  style="color:blue;padding-top:40px;margin-left: px; "> Hello <?php echo $_SESSION['name']; ?>,your exam is going on</h4>
  </div>
  <div class="col-3">
      <p class="text-danger" id="timeleft" style="text-align:right;color:white;margin-top:50px;">Time Left: 1 minute</p>
    </div>

  </div>

  </div>
  <div class="container-fluid">
  <div class="row">
  <div class="col-4">
  <br><br>
    <div class="btn-group">
      <button type="button" class="btn btn-primary" value="1" id="01" >1</button>
      <button type="button" class="btn btn-primary" value="2" id="02" >2</button>
      <button type="button" class="btn btn-primary" value="3" id="03" >3</button>
      <button type="button" class="btn btn-primary" value="4" id="04" >4</button>
      <button type="button" class="btn btn-primary" value="5" id="05" >5</button>
    </div>
  

  </div>	

  <div class="col-6">
  <div class="jumbotron jumbotron-fluid" >
    <div class="container" >
      <form method="post" id="ka"  action="storeAns.php">
        <?php 
        while($array=mysqli_fetch_array($x))
        { $qno=$array['id'];
          ?>
          <div id="<?php echo $array['id'];?>">
            
    <p>Que.<?php echo $array['id']." "; ?><?php echo $array['question'] ?></p></li>
    
    <div class="form-check">
        <label class="form-check-label container1">
          <input type="radio" class="form-check-input" id="radio1" name='<?php echo "$qno"?>' value="1" ><?php echo $array['option1'];?>
      <span class="checkmark"></span>
        </label>
      </div><br>
      
      <div class="form-check">
        <label class="form-check-label container1" >
          <input type="radio" class="form-check-input" id="radio2" name='<?php echo "$qno"?>' value="2"><?php echo $array['option2'];?>
        <span class="checkmark"></span>
        </label>
      </div><br>
        
      <div class="form-check">
        <label class="form-check-label container1">
          <input type="radio" class="form-check-input" name='<?php echo "$qno"?>' value="3"><?php echo $array['option3'];?>
        <span class="checkmark"></span>
        </label>
      </div><br>
      
        <div class="form-check">
        <label class="form-check-label container1">
          <input type="radio" class="form-check-input" name='<?php echo "$qno"?>' value="4"><?php echo $array['option4'];?>
    <span class="checkmark"></span>
        </label></div>
      </div><?php } ?></div>	<br>
  <br>
  <div class="btn-group">
      <button  type="button" class="btn btn-primary" style="margin-left: 40px;" id="previous">prev</button>
      <button type="button" class="btn btn-primary"  style="margin-left: 40px;" id="next">Next</button>
      </div>
  <input type="submit" id="sub" class="btn btn-secondary" style="margin-left: 120px; value="submit"></button>


  </form>

  </div>
    </div>
  </div>



    </body>
  </html>

  <script>

    var x="";
    var question1=0;
    var question2=0;
    var question3=0;
    var question4=0;
    var question5=0;
    
  $(document).ready(function(){
  $("#2").css("display","none");
    $("#3").css("display","none");
      $("#4").css("display","none");
      $("#5").css("display","none");
      //$("#sub").css("display","none");
        
            $("#previous").css("display","none");
              $("#next").css("display","block");x="1";


  $("#01").click(function(){
    $("#2").css("display","none");
    $("#3").css("display","none");
      $("#4").css("display","none");
      $("#5").css("display","none");
      //$("#sub").css("display","none");
        
              $("#1").css("display","block"); 
              $("#previous").css("display","none")
              $("#next").css("display","block");x="1";
  });

      $("#02").click(function(){
        
    $("#1").css("display","none");
    $("#3").css("display","none");
      $("#4").css("display","none");
      $("#5").css("display","none");
      $("#2").css("display","block");
      //$("#sub").css("display","none");
        
              $("#previous").css("display","block");
                $("#next").css("display","block"); x="2";

  });


        $("#03").click(function(){
    $("#1").css("display","none");
    $("#2").css("display","none");
      $("#4").css("display","none");
      $("#5").css("display","none");
      //$("#sub").css("display","none");
      
              $("#3").css("display","block");
              $("#previous").css("display","block");
                $("#next").css("display","block");  x="3";
  });

        $("#04").click(function(){
          $("#1").css("display","none");
            $("#2").css("display","none");
              $("#3").css("display","none");
                $("#5").css("display","none");
                //$("#sub").css("display","none");
      
              $("#4").css("display","block");
              $("#previous").css("display","block"); 
                $("#next").css("display","block"); x="4";

  });
        $("#05").click(function(){
    $("#1").css("display","none");
    $("#2").css("display","none");
      $("#4").css("display","none");
      $("#3").css("display","none");
      
      
              $("#5").css("display","block");
              //$("#sub").css("display","block");
              $("#previous").css("display","block"); 
                $("#next").css("display","block"); x="5";
  });



  $("#previous").click(function(){

  if(x=="2"){
    $("#2").css("display","none");
  $("#1").css("display","block");
  $('#previous').css("display","none");
  $('#next').css("display","block");
  x=1;
  }
  else if(x=="1")
    alert("It is the first question you cant go back");
  else if(x=="3"){
    $("#3").css("display","none");
  $("#2").css("display","block");

  $('#next').css("display","block");x=2;
  }
  else if(x=="4"){
    $("#4").css("display","none");
  $("#3").css("display","block");
    $('#next').css("display","block");x=3;
  }
  else if(x=="5"){
    $("#5").css("display","none");
  $("#4").css("display","block");
    $('#next').css("display","block");x=4;
  }


  });


  $("#next").click(function(){

  if(x=="2"){
    $("#2").css("display","none");
  $("#3").css("display","block");
    $('#previous').css("display","block");x=3;
  }
  else if(x=="5"){
    alert("It is the last question you cant go further");
  }
  else if(x=="3"){
    $("#3").css("display","none");
  $("#4").css("display","block");
  $('#previous').css("display","block");x=4;
  }
  else if(x=="4"){
    $("#4").css("display","none");
  $("#5").css("display","block");
  $('#previous').css("display","block");x=5;
  }
  else if(x=="1"){
    $("#1").css("display","none");
  $("#2").css("display","block");
  $('#previous').css("display","block");x=2;
  }


  });


  //attemped question should be green
  $("input:radio[name='1']").on("change",function(){
  $("#01").css("background-color","#b7eb34");
  question1= $('input:radio[name="1"]:checked').val();


  });
  $("input:radio[name='2']").on("change",function(){
  $("#02").css("background-color","#b7eb34");
  question2= $('input:radio[name="2"]:checked').val();
  


  });
  $("input:radio[name='3']").on("change",function(){
  $("#03").css("background-color","#b7eb34");
  question3= $('input:radio[name="3"]:checked').val();

  });
  $("input:radio[name='4']").on("change",function(){
  $("#04").css("background-color","#b7eb34");
  question4= $('input:radio[name="4"]:checked').val();

  });
  $("input:radio[name='5']").on("change",function(){
  $("#05").css("background-color","#b7eb34");
  question5= $('input:radio[name="5"]:checked').val();


  });


  

  });

  </script>

