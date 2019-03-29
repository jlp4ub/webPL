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
    

</head>

<body>

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

	<div class = "left" style="color:#E8E8E8;">
        <div class ="general-req" >
          <p><u>CLAS Requirements</u></p>
          <form class= "check" action="/action_page.php">
            <input type="checkbox" class="req"> Foreign Language Requirement<br>
            <input type="checkbox" name="req"> First Writing Requirement<br>
            <input type="checkbox" name="req"> Second Writing Requirement<br><br>
            <input type="checkbox" name="req"> Social Sciences<br>
            <input type="checkbox" name="req"> Humanities<br>
            <input type="checkbox" name="req"> Historical Studies<br>
            <input type="checkbox" name="req"> Non-Western Perspective<br>
            <input type="checkbox" name="req"> Natural Science and Mathematics<br>
          </form>

        </div>

        <br>
        <br>
        <br>
        <br>
        <br>

        <div class ="major-req">
          <p><u>Major: Computer Science</u></p>
          <form class= "check" action="/action_page.php">
            <input type="checkbox" name="req"> CS 1110<br>
            <input type="checkbox" name="req"> CS 2110<br>
            <input type="checkbox" name="req"> CS 2102<br>
            <input type="checkbox" name="req"> CS 2150<br>
            <input type="checkbox" name="req"> CS 3330<br>
            <input type="checkbox" name="req"> CS 4102<br>
            <input type="checkbox" name="req"> Computing Electives<br>
            <input type="checkbox" name="req"> Integrative Electives<br><br>
          </form>
        </div>
	</div>

	<div class="right">
	
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
				<table id="schedule" align="center">
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
			</div>
		</div>
	</div>


</body>

<script>
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