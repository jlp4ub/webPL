<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Schedule4Me</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" /> 
    <link rel="stylesheet" type="text/css" href="index.css">
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet'>
    <style> 
        body {
            background-color: #282828;
            font-family: 'Arvo';
            color: #E8E8E8;
        }
        .a {
            padding-top: 30px;
            width: 100%;
        }
        .list {
            /*width: 1000px;*/
            display: inline-block;
            margin-top: 40px;
            margin-left: 30px;
        }
        .first {
            display: inline-block;
            width: 110%;
        }
    </style>


</head>

<body>
    
    <?php
    session_start();

    // LOG IN ~ CHECK IF EMAIL IS FOUND IN DATABASE
    require('connect-db.php');
    // require('database.php');
    $email = "";
    $password = "";
    // if (isset($_SESSION['use'])) {
    //     header('Location: index3.php');
    // }
    
    if (isset($_POST['lname']) && isset($_POST['lpass'])) {
        $email = $_POST['lname'];
        $password = $_POST['lpass'];

        $query = "SELECT accounts FROM email WHERE email='$email'";
        $res_u = mysqli_query($db, $query);
        echo 'hello' . $res_u;

        if (mysqli_num_rows($res_u) == 0) {
            // echo "Account does not exist...Please create an account.";
            echo "<script type='text/javascript'>alert('Account does not exist...Please create an account.');</script>";
        } else {
            $query2 = "SELECT accounts FROM email,password WHERE email='$email' AND password='$password'";
            $res_p = mysqli_query($db, $query2);

            if (mysqli_num_rows($res_p) == 0) {
                echo "<script type='text/javascript'>alert('Password does not match email.');</script>";
            } else {
                setcookie('email', $email, time()+3600);
                setcookie('password', md5($password), time()+3600); 
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                $_SESSION['use'] = $email;
                        
                header('Location: index3.php'); 
            }
        }
    }

    //CREATE ACCOUNT ~ CHECK IF EMAIL IS ALREADY IN USE IN DATABASE
    if (isset($_POST['cname']) && isset($_POST['cpass'])) {
        $email = $_POST['cname'];
        $password = $_POST['cpass'];

        $query = "SELECT accounts FROM email WHERE email='$email'";
        $res_u = mysqli_query($db, $query);

        if (mysqli_num_rows($res_u) > 0) {
            // echo "Account does not exist...Please create an account.";
            echo "<script type='text/javascript'>alert('Email is already in use.');</script>";
        }

        setcookie('email', $email, time()+3600);
        setcookie('password', md5($password), time()+3600); 
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['create'] = $_POST['create'];
        $_SESSION['school'] = $_POST['school'];
        $_SESSION['major'] = $_POST['major'];
        $_SESSION['minor'] = $_POST['minor'];

        $_SESSION['use'] = $email;
                        
        header('Location: index3.php'); 
    }
    ?>



    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #61C2A2">
        <a class="navbar-brand" href="#">Schedule4Me</a>
    </nav>

    <div class="page-row">
        <div id="descrip" class="col-md-offset-1 col-md6 hidden-sm hidden-xs" style="float:left;">
            <div class="a">
                <h1 class="welcome" style="text-align: center;">Welcome to Schedule4Me</h1>
            </div>

            <div class="b">
                    <h4 style="text-align: center;">Helping you visualize your next four years at UVA</h4>
            </div>
            
            <div class = "list">
                <div class = "first"> 
                     <h5><img src="check.png" style= "width: 8%;height:8%; margin-right: 30px;">See what college and major requirements you need to fulfill</h5>
                     <h5><img src="check.png" style= "width: 8%;height:8%; margin-right: 30px;">Plan out your semesters accordingly</h5>
                     <h5><img src="check.png" style= "width: 8%;height:8%; margin-right: 30px;">See what classes other students are recommending</h5>
                </div>
            </div>   
        </div>

<!-- LOG IN -->
        <div id="login" class="col-md-5" style="float:right;">
            <form id="returnuser" onsubmit="return validateLoginForm()" method="post">
                <div class="panel-login">

                    <div class="sign-in-title">
                        <h1>Sign in</h1>
                    </div>
                    <div class="login-row" style="margin-left:30%">
                        <input type="email" name = "lname" id="lname" placeholder="Enter UVa email">
                    </div>
                    <div class="login-row" style="margin-left:30%;">
                        <input type="password" name="lpass" id="lpass" placeholder="Enter password" required>
                        <input type="submit" id="button" value="Submit" style = "background-color: #61C2A2">
                    </div>

                </div>
            </form>

<!-- CREATE ACCOUNT -->
            <form id="returnuser" onsubmit="return validateCreateForm()" method="POST">
                <div class="panel-login">
                    <div class="sign-in-title">
                        <h1>Create Account</h1>
                    </div>
                    <div class="login-row" style="margin-left:10%">
                        <input type="email" name= "cname" id="cname" placeholder="Enter UVa email" style="width: 76.5%;">
                    </div>
                    <div class="login-row" style="margin-left:10%">
                        <input list = "schools" name="school" placeholder="Choose School" style="width: 76.5%;">
                        <datalist id="schools">
                            <option value = "College of Arts and Sciences">
                            <option value = "Engineering School">
                            <option value = "Nursing School">    
                        </datalist>
                    </div>
                    <div>
                        <div class="login-row" style="margin-left:10%">
                        <input list = "majors" name="major" placeholder="Choose Major">
                        <datalist id="majors">
                            <option value = "Accounting">
                            <option value = "Business">
                            <option value = "Finance">    
                        </datalist>
                        <input list = "minors" name="minor" placeholder="Choose Minor">
                        <datalist id="minors">
                            <option value = "N/A">
                            <option value = "Accounting">
                            <option value = "Business">
                            <option value = "Finance">    
                        </datalist>
                        </div>
                    </div>

                    <div>
                        <div class="login-row" style="margin-left:10%;">
                        <input type="password" name= "cpass" id="cpass" placeholder="Enter password" required>
                        <input type="password" id="confirmpass" placeholder="Confirm password" required>
                        <input type="submit" name="create" id="button" value="Submit" style = "background-color: #61C2A2"></div>
                    </div>
                    
                </div>
            </form>

        </div>
    </div>



</body>
    
<script>
    /*
    function validateLoginForm(){

        var email = document.forms["returnuser"]["name"].value;
        if (email==""){
            alert("Email must be filled out");
            return false;
        }
    }*/
    
    document.getElementById("button").addEventListener("click", function(e){

        var name = document.getElementById("lname").value;
        var nameRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9._%+-]+\.edu$/;
        
        if (nameRegex.test(name) == true) {
            // alert('true');
            return true;
        } else {
            alert('Please enter an @virginia.edu email');
            e.preventDefault();
        }

    });


    function validateCreateForm(){

        var pass = document.getElementById("cpass");
        var pass2 = document.getElementById("confirmpass");
        if (pass.value != pass2.value){
            alert("Passwords do not match");
            return false;
        }
        if (pass.value.length < 2){
            alert("Password is too short. Must be at least 8 characters.")
            return false;
        }
        var name = document.getElementById("cname").value;
        // alert("hi");
        var nameRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9._%+-]+\.edu$/;

        if (nameRegex.test(name) == true) {
            // alert('true');
            return true;
        } else {
            alert('Please enter an @virginia.edu email');
            return false;
        }
    }
</script>

</html>
