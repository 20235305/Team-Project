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
    
    <div class="background-image">
            <div class="rectangle">
                <!-- /* https://www.w3schools.com/howto/howto_css_style_header.asp this link was used to help with the header */ -->
                <div class="header">
                    <h1></h1>
                    <p></p>
                    <div class="topnav">
                        <!-- <a class="active" href="#home">Home</a>
                        <a href="#about">About</a>
                        <a href="#contact">Contact</a> -->
                        <!-- <img class="searchSymbol" src="images/upload-symbol.png" alt="search symbol"> -->
                        
                              
                        <div class="buttons">  
                                <button>
                                    <!-- The href attribute is used to specifiy the links destination -->
                                    <a href="http://localhost/Project2023/websiteApplication/Login-Registration/homepage.php">
                                    <img class="homeBtn" src="images/home-button.png" alt="homebutton"/></a>
                                </button>

                                <button>
                                    <!-- The href attribute is used to specifiy the links destination -->
                                    <a href="http://localhost/Project2023/websiteApplication/Login-Registration/post-page.php">
                                    <img class="uploadSymbol" src="images/upload-symbol.png" alt="upload symbol"/></a>
                                </button>

                                <button>
                                    <a href="http://localhost/Project2023/websiteApplication/Login-Registration/notification-page.php">
                                    <img class="noticationSymbol" src="images/notification-symbol.png" alt="notification-symbol"/></a>
                                </button>
                                <button>
                                    <a href="http://localhost/Project2023/websiteApplication/Login-Registration/chat-page.php">
                                    <img class="chatSymbol" src="images/chat-icon.png" alt="chat symbol"/></a>
                                </button>
                                <!-- link to another page using a button https://linuxhint.com/make-button-link-another-page-html/ -->
                                <button class="userBtn">
                                        <a href="http://localhost/Project2023/websiteApplication/Login-Registration/profile.php">
                                        <img class="userSymbol" src="images/user-icon.png" alt="user icon"/></a>
                                </button>
                              </div>  

                              
                          


                        <!-- <button img src="images/upload-symbol.png" class="btn2" type="button">Upload</button> -->
                            <div class="searchBAR">
                                <img class="searchSymbol" src="images/search-symbol.png" alt="search symbol">
                                <input type="text" placeholder="Search..">
                            </div>
                            
                      </div>
                      
                </div>
                <p class="feedText">Delete your account</p>
                
        </div>
    </div>

    <div class="userPost-box">
        <button class="userBtn2">
        <img class="christinaPIC" src="images/circular-profile-picturePROPER.png" alt="user icon"/>
        </button>
        <p class="jSmithText">Christina Hancox</p>
        <br>
        <p>Are you sure you want to delete your account?</p>
        <br>
        <input type="radio" name="deleteYesOrNo" value="always">Yes
        <input id="deletion" type="radio" name="deleteYesOrNo" value="never">No
        <br><br>
        <p>Why do you want to delete your account?</p>
        <br>
        <div class="buttonWrapper">
            <input type="text" id="comment-boxDELETE" placeholder="Add your comment...">
        </div>
        <br>
        <p>Please enter your password to continue with account deletion:</p>
        <br>
        <div class="buttonWrapper">
            <input type="text" id="comment-boxDELETE" placeholder="Enter your password...">
        </div>
        <br>
        <p>If you continue, your profile and account details will be deleted on (todays date):</p>
        <br><br>
        <button class="postBtn">Delete your account</button>
        
        
        

        
        
    </div>
    
    

    <!-- I used this link to find out how to position the page at the top upon reloading -->
    <script>
        window.onbeforeunload = function () {
        window.scrollTo(0, 0);
        }
    </script>
    
</body>
</html>