<!-- Ashley Hoang and Jessica Phan -->
<!-- Recommended classes page -->
<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  <!-- required to handle IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" /> 
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet'>
    <title>Schedule4Me</title>


  <style>
    .dept{
      margin-left:100px;
    }
    .school-title{
      margin-top: 15px;
    }
    .text{
      text-align: center;
    }
    .col-centered{
      float:none;
      margin: 0 auto;
    }
    body{
      font-family: 'Arvo';
      background-color:#E8E8E8;
    }
    h1{
      color:#E8E8E8;
    }
  </style>

</head>


<body>
  <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #61C2A2">
        <a class="navbar-brand" href="#">Schedule4Me</a>
        <!-- Hamburger collapsible -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">   
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Account</a>
            </li>                                     
            <li class="nav-item"> 
              <a class="nav-link" href="index3.php">MySchedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Recommended</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Log Out</a>
            </li>
            
          </ul>
        </div>  
  </nav>
<!--
      <div class = "jumbotron">
        <div class ="container">
          <h1>Recommended Classes at UVA</h1>
          <p>These are the top rated classes reviewed by students at your university</p>
        </div>
      </div>
-->

  <div class="jumbotron" style="height:20%; background-color: #404040;">
    <div class="slideshow-container">
      <div class="mySlides" style="width:100%">
        <div class="text">
          <h1>Historical Studies</h1>
        </div>
      </div>

    </div> 
  </div> 

  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-2">

      </div>
      <div class="col-sm-8 text-left" style="background-color: white; padding-top: 20px; padding-bottom: 20px">
        <form action= http://localhost:4200 >
          <input type="submit" value="Write your own review">
        </form>

        <table cellpadding="10" style="width:100%; border: 1px solid black;">
          <tr style="border: 1px solid black">
            <th><h3>HISA 1501: Introduction to Child Psychology<br></h3>I loved this class. Professor Barnett is so intelligent and I feel like I learned so much, which isn’t always true with classes you take. 60 percent of your grade is participation and the other 40 is 3 papers, none longer than 6 pages and the last 2 you get revised by Barnett. This is probably one of the easiest second writing requirements and on top of that it’s super interesting. TAKE THIS CLASS!<br><br></th>
          </tr>

          <tr style="border: 1px solid black">
            <th><h3>AAS 1010: Introduction to African-American and African Studies I</h3><br>This course is not an easy A, but it is not too hard. The average for the class was an 85 this semester. There are pop quizzes and the TAs grading can be subjective based off who you have as your TA. The class definitely offered some interesting information but the class and the professor can be a lot to handle if you do not have thick skin.<br><br></th>
          </tr>

        </table>
      </div>

      <div class="col-sm-2">

      </div>
    </div>
  </div>

<script>
  var slideIndex=0;
  
  var showSlides = function(){
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i=0; i<slides.length; i++){
      slides[i].style.display = "none";
    }
    slideIndex++;
    if(slideIndex > slides.length){
      slideIndex = 1;
    }
    slides[slideIndex-1].style.display="block";
    setTimeout(showSlides, 5000);
  }
  showSlides();
</script>


</body>


</html>