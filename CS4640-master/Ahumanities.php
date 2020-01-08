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
          <h1>Humanities Elective</h1>
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
            <th></th>
          </tr>

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