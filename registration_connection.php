
<?php //PHP opening tag

        //declare and give value to variables, which are the same as the database already created
        $servername = "localhost:3307";
        $user = "root";
        $password = "password";
        $dbname ="project2023";

        //connection to the Database; new mysqli create a new connection directly to the database
        $conn = new mysqli($servername, $user, '', $dbname);
    
        //declare variables that will take the value from the HTML form using the $_POST (PHP super global variable)
        $firstname = $_POST['firstName'];
        $lastname = $_POST['lastName'];
        $DOB = $_POST['DOB']; 
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmPassword'];

        //here we check that the passwords are identical 
        if($_POST['password'] !== $_POST['confirmPassword']){
              //if the passwords do not match, the user will be informed by this error message, which is linked directly to the HTML form
              header("Location: login.php?error2=The two password doesn't match");
              exit();
        }

        //insert the data into the database
        $sql = "INSERT INTO usercredential (firstname, lastname, DOB, username, email, password) VALUES ('$firstname','$lastname','$DOB','$username','$email','$password')";

        //check if the registration had success.    
        if (mysqli_query($conn, $sql)) {
          header('location: registration.php');
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
       // Close the database connection
       mysqli_close($conn);
       
?> <!-- PHP opening tag>