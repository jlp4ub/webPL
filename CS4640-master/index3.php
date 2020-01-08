<!-- Ashley Hoang and jessica Phan -->
<!-- Schedule page -->
<!DOCTYPE>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="index3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" />
  <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet'>
    
  <title>Schedule4Me</title>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    

</head>

<body>


  <?php
    session_start();
    
    $username = $_SESSION['email'];
    //echo $username;

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
      //print_r($_POST);
      $db = mysqli_connect('localhost:3306', 'cs4640', 'password', 'cs4640');
      //echo "/n";
      $check = 1;
      $columns=array();
      //print_r($columns);
      foreach ($_POST as $key=>$value){
        array_push($columns, $value);
      }
  
      //print_r(array_values($columns[0]));
      $db_values = $columns[0];
      //print_r($db_values);
      //$query = "INSERT INTO requirements "

      foreach ($db_values as $key => $value) {
        //echo $key.":".$value."<br>";
        //echo $value;
        $sql = "SELECT $value FROM requirements WHERE email='$username'";
        //echo $sql;
        $vset = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($vset, MYSQLI_NUM);
        $num = $row[0];
        $num = $num+1;
        //echo $num;
        //print_r($row);
        //echo $vset;
        // if ($num == 1){
        //   $num = 0;
        // } else {
        //   $num = 1;
        // }
  

        $query = "UPDATE requirements SET $value=$num WHERE email ='$username'";
        mysqli_query($db, $query);
      }
      
    }


    ?>

  <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #61C2A2">
        <a class="navbar-brand" href="#">Schedule4Me</a>
        <!-- Hamburger collapsible -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Collapse class -->

        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">   
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Account</a>
            </li>              
                         
            <li class="nav-item"> 
              <a class="nav-link" href="#">MySchedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index2.php">Recommended</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Log Out</a>
            </li>
            
          </ul>
        </div>  
      </nav>
<!-- style="color:#E8E8E8;" -->
  <div class = "left" style="color:#E8E8E8; height:95%">
      <form name="check" action='' method="post">
        <div class ="general-req" >
          <p><u>CLAS Requirements</u></p>
            <?php
              //if (isset($_SESSION['create'])){
              //require('connect-db.php');
              $db = mysqli_connect('localhost:3306', 'cs4640', 'password', 'cs4640');
              //print_r($_SESSION);
              $username = $_SESSION['email'];
              //echo $username;
              $school = $_SESSION['school'];
              //echo $school;
              $checkboxes=array();

              if ($school == 'College of Arts and Sciences'){
                
                $query="SELECT * FROM requirements WHERE email='$username'";
                $result=mysqli_query($db, $query);
                $row = mysqli_fetch_array($result, MYSQLI_NUM);
                //print_r($row);

                $checkboxes=array();

                // for($i=1; $i<10; $i++){
                //   //print_r($row[$i]);
                //   $checkboxes[]='<input type="checkbox" value=row>;
                // }
                $checkboxes[0]='<br>';
                $checkboxes[1]='<input type="checkbox" id="1" name="row[1]" value="foreignlang" onclick="task(this.id);"> Foreign Language Requirement<br>';
                $checkboxes[2]='<input type="checkbox" id="2" name="row[2]" value="firstwrite" onclick="task(this.id);"> First Writing Requirement<br><br>';

                $checkboxes[3]='<input type="checkbox" id="3" name="row[3]" value="secondwrite" onclick="task(this.id);"  > Second Writing Requirement<br><br>';

                $checkboxes[4]='<input type="checkbox" id="4" name="row[4]" value="socialscience" onclick="task(this.id);"> Social Sciences<br><br>';
              
                $checkboxes[5]='<input type="checkbox" id="5" name="row[5]" value="humanities" onclick="task(this.id);"> Humanities<br>';
               
                $checkboxes[6]='<input type="checkbox" id="6" name="row[6]" value="history" onclick="task(this.id);"> Historical Studies<br>';              

                $checkboxes[7]='<input type="checkbox" id="7" name="row[7]" value="nonwest" onclick="task(this.id);"> Non-Western Perspective<br>';
              
                $checkboxes[8]='<input type="checkbox" id="8" name="row[8]" value="science" onclick="task(this.id);"> Natural Science and Mathematics<br>';
             
                

                $checkboxes[9]='<input type="hidden" id="hidden1" name="row[1]" value="foreignlang" onclick="task(this.id);">';
                $checkboxes[10]='<input type="hidden" id="hidden2" name="row[2]" value="firstwrite" onclick="task(this.id);">';
                $checkboxes[11]='<input type="hidden" id="hidden3" name="row[3]" value="secondwrite" onclick="task(this.id);">';
                $checkboxes[12]='<input type="hidden" id="hidden4" name="row[4]" value="socialscience" onclick="task(this.id);">';
                $checkboxes[13]='<input type="hidden" id="hidden5" name="row[5]" value="humanities" onclick="task(this.id);">';
                $checkboxes[14]='<input type="hidden" id="hidden6" name="row[6]" value="history" onclick="task(this.id);">';
                $checkboxes[15]='<input type="hidden" id="hidden7" name="row[7]" value="nonwest" onclick="task(this.id);">';
                $checkboxes[16]='<input type="hidden" id="hidden8" name="row[8]" value="science" onclick="task(this.id);">';
                foreach ($row as $key=>$value){
                  //echo $key.":".$value."<br>";
                  //echo $value;
                  if ($value !=0){
                    $mod = $value%2;
                  } else{
                    $mod = 0;
                  }
                  
                  if ($mod != 0){

                      $print = $checkboxes[$key];
                      $index = strpos($print, ">");

                      $str = 'checked';
                      $checkboxes[$key]= substr_replace($print, $str, $index, 0);
            
                    
                    //echo $checkboxes[$key];
                    //$checkboxes[$key]=
                  }
                }
                echo implode($checkboxes);
                //echo implode($hidden_checkboxes);
                echo "<input type='submit' name='Update' value='Save'/>";
                
                
                //while ($row = mysqli_fetch_array($result, MYSQLI_NUM)){
                //  print_r($row);
                //}
              }
              //$checkboxes=array();
              //$checkboxes[0]='<input type="checkbox" name="x" value="$row[9]"> Foreign Language Requirement<br>';
              
              
              
            ?>
          
            <!-- <input type="checkbox" id="Lang"> Foreign Language Requirement<br>
            <input type="checkbox" id="First"> First Writing Requirement<br>
            <input type="checkbox" id="Second"> Second Writing Requirement<br><br>
            <input type="checkbox" id="social"> Social Sciences<br>
            <input type="checkbox" id="human"> Humanities<br>
            <input type="checkbox" id="history"> Historical Studies<br>
            <input type="checkbox" id="nonwest"> Non-Western Perspective<br>
            <input type="checkbox" id="math"> Natural Science and Mathematics<br> -->
     

        </div>
    </form>

        <br>
        <br>
        <br>
        <br>
        <br>

        <div class ="major-req">
          <p><u>Major: Computer Science</u></p>

            <input type="checkbox" name="req"> CS 1110<br>
            <input type="checkbox" name="req"> CS 2110<br>
            <input type="checkbox" name="req"> CS 2102<br>
            <input type="checkbox" name="req"> CS 2150<br>
            <input type="checkbox" name="req"> CS 3330<br>
            <input type="checkbox" name="req"> CS 4102<br>
            <input type="checkbox" name="req"> Computing Electives<br>
            <input type="checkbox" name="req"> Integrative Electives<br><br>

        </div>
        <!-- <div style="float:right; padding-top: 5px; padding-right: 25px">
          <input type="submit" name="Save" value="Save"/>
        </div> -->
      
  </div>

  <div class="right" style="height:95%">
  
    <div class="select-course" style="float:left;">
      <p><u>Selected Courses</u></p>
      <table id="options" border="0">
        
      </table>
    </div>

    <div class="container">
      <form class="searchbar">
        <input type="text" placeholder="Search" name="search"  id="courseID">
        <input type="button" class="btn btn-light" value="Add Class" onclick="addElement()">
          <i class="fa fa-search"></i>
        </input>
      </form>

      <div class="main-right">
        
          <table id="schedule" name="schedule" align="center">
            <tr>
              <th>1st</th>
                  <th>2nd</th>
                  <th>3rd</th>
                  <th>4th</th>
                </tr>

                <tr>
                  <th>Fall</th>
                  <th>Fall</th>
                  <th>Fall</th>
                  <th>Fall</th>
                </tr>

                <tr class="drop-row">
                  <td class="sched" ondragover="allowDrop(event)" ondrop="drop(event, this)"></td>
                  <td class="sched" ondragover="allowDrop(event)" ondrop="drop(event, this)"></td>
                  <td class="sched" ondragover="allowDrop(event)" ondrop="drop(event, this)"></td>
                  <td class="sched" ondragover="allowDrop(event)" ondrop="drop(event, this)"></td>
                </tr>

                <tr>
                  <th>Spring</th>
                  <th>Spring</th>
                  <th>Spring</th>
                  <th>Spring</th>
                </tr>

                <tr class="drop-row">
                  <td class="sched" ondragover="allowDrop(event)" ondrop="drop(event, this)"></td>
                  <td class="sched" ondragover="allowDrop(event)" ondrop="drop(event, this)"></td>
                  <td class="sched" ondragover="allowDrop(event)" ondrop="drop(event, this)"></td>
                  <td class="sched" ondragover="allowDrop(event)" ondrop="drop(event, this)"></td>
                </tr>

                <tr>
                  <th style="border:1px solid black; text-align:left; font-size: 12px">1st year:</th>
                  <th style="border:1px solid black; text-align:left; font-size: 12px">2nd year:</th>
                  <th style="border:1px solid black; text-align:left; font-size: 12px">3rd year:</th>
                  <th style="border:1px solid black; text-align:left; font-size: 12px">4th year:</th>
                </tr>
            </table>
          

          <div style="float:right; padding-top: 5px; padding-right: 25px">
            <input type="submit" name="Save" value="Save"/>
          </div>

      </div>
    </div>
  </div>


</body>

<script>

  function task(e){


    var hidden_e = 'hidden'.concat(e);
    for(i=1;i<9;i++){
      var hiddenid='hidden'.concat(i);
      if ((i == e) || (hiddenid == hidden_e)){
        document.getElementById(e).disabled=false;
        document.getElementById(hidden_e).disabled=false;
      } else{

        document.getElementById(i).disabled=true;
        document.getElementById(hiddenid).disabled=true;
      } 

    }

    document.getElementsByName("check")[0].submit();

  }

  function drop(ev, el){
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    el.appendChild(document.getElementById(data)).style.display="block";
  }
  var allowDrop = (ev)=> ev.preventDefault();
  function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
  }
  function addElement() {
    var table = document.getElementById("options");
    var row = table.insertRow(0);
    var cell = document.createElement("TD");
    var name = document.getElementById("courseID").value;
    var cell = row.insertCell(0);
    cell.innerHTML = document.getElementById("courseID").value;
    cell.classList.add("event");
  
    //cell.classList.insertBefore("event");
    
        cell.setAttribute("id", name);
        cell.setAttribute("draggable", true);
        cell.addEventListener("dragstart", drag);
        
  }
</script>

</html>