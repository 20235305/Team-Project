<?php //PHP opening tag
    if($_POST){
        
      //declare and give value to variables, which are the same as the database already created
      $servername = "localhost:3307";
      $user = "root";
      $password = "password";
      $dbname ="project2023";
      //creates an empty array to store error messages
      $errors = array();

      //connection to the Database; new mysqli create a new connection directly to the database
      $conn = new mysqli($servername, $user, '', $dbname);
        
      //check that the login form has been submitted correctly and that the username and password exist in the database
      //isset to che if a variable is set (TRUE) otherwise is considered NULL (FALSE)
        if(isset($_POST['login'])){
          $username = $_POST['username']; // Get the username from the submitted form
          $password = $_POST['password'];

        if (count($errors) == 0){
          $query = "SELECT * FROM usercredential WHERE username='$username' AND password='$password'";
        }else{
          header('Location: registration.php?error1=Incorrect username or password');
          exit();
        }
      
      //mysqli_query is used to make a query into the database via the connection previously created with the variable $conn
      $result = mysqli_query($conn, $query);

      if(mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        
        header('location: homepage.php');
        exit();
      }else{
        header('Location: login.php?error1=Incorrect username or password');
        exit();
      }
    }
  
        
    
       // Close the database connection
       mysqli_close($conn);
       
  }
?>