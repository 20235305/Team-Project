<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="stylesheet.css">
    <title>Document</title>
</head>

<body>
    <!-- I used this link to help me set the background image https://www.youtube.com/watch?v=vimZLEd702Y&ab_channel=CemEygiMedia -->
    <div class="background-image">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>

            <form id="login" class="input-group" action="login_connection.php" method="POST">
                <!-- If you have an html form containing one or more fields with "required" attributes, 
                    Chrome (on last versions) will validate these fields before submitting the form and, 
                    if they are not filled, some tooltips will be shown to the users to help them 
                    get the form submitted (I.e. "please fill out this field"). -->

                <?php if (isset($_GET['error1'])) { ?>
                    <p class="error"><?php echo $_GET['error1']; ?></p>
                <?php } ?>

                <input type="text" class="input-field" placeholder="Username" name="username" required>
                <input type="password" class="input-field" placeholder="Password" name="password" required>
                <input type="checkbox" class="check-box" ><span>Remember Password</span>

                <button id ="login" name="login" type="submit" class="submit-btn">Log in</button> 
                <!-- <button type="submit" class="submit-btn">Log in</button> -->
            </form>

            <form id="register" class="input-group" action="registration_connection.php" method="POST">
                <!-- I used this webpage to help me with positioning my radio buttons 
                    https://stackoverflow.com/questions/19014766/how-can-i-get-input-radio-elements-to-horizontally-align -->
                <input type="radio" name="typeOfUser" value="always">Foodie
                <input id="chef" type="radio" name="typeOfUser" value="never">Chef
                <br><br>
                <input type="radio" name="typeOfGender" value="always">Male
                <input id="gender" type="radio" name="typeOfGender" value="never">Female

                <?php if (isset($_GET['error2'])) { ?>
                    <p class="error"><?php echo $_GET['error2']; ?></p>
                <?php } ?>
                
                <input type="text" class="input-field" placeholder="First name" name="firstName" required>
                <input type="text" class="input-field" placeholder="Last name" name="lastName" required>
                <input type="date" class="input-field" placeholder="Date of birth" name="DOB" required>
                <input type="text" class="input-field" placeholder="Username" name="username" required>
                <input type="email" class="input-field" placeholder="Email" name="email" required>
                <input type="password" class="input-field" placeholder="Password" name="password" required>
                <input type="password" class="input-field" placeholder="Confirm password" name="confirmPassword" required>
                <input type="checkbox" class="check-box"><span>I agree to the terms and conditions</span>
                <button type="submit" class="submit-btn">Register</button>
                <!-- set a confirm password -->
            </form>

            <script>
        /* function gotohomepage(){
            //check for valid entries in textboxes
            if(){
                goto homepage
            }else{
                //reset the fields
                //allow usr to enter details again
            }
        } */
        
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login(){
            x.style.left = "50px";
            y.style.left = "550px";
            z.style.left = "0";
        }
 

    </script>
    
</body>
</html>