<!DOCTYPE html>
<html lang="en">
<head>
<?php

include("post.php");

//print posts 
$post = new Post();
$posts = $post->get_posts();
?>

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
                <p class="feedText">Posts</p>
                <img class="fakeProfiler" src="images/blank-user-profile.png" alt="circular profile picture">
                <p class="ProfilerUserName">Paddy O Toole</p>
                <p id="demo">0 Followers</p>
                <button onclick="change_text()" id="followBtn">Follow</button>
                <br>
                <button id="deleteAccountBtn" onclick="location.href='http://localhost/Project2023/websiteApplication/Login-Registration/delete-account-page.php'">Delete my account</button>

                

                
                
        </div>
        
    </div>

    <p class="feedText">Feed</p>
       
       <?php

          if(!empty($posts)){
                foreach ($posts as $row){

                    include("post-d.php");

                }
             } 
        ?>

    <script>
        window.onbeforeunload = function () {
        window.scrollTo(0, 0);
        }

        /* I used this link https://bobbyhadz.com/blog/javascript-change-button-text-on-click to help me toggle the follow button
        from follow -> unfollow */

        const followBtn = document.getElementById('followBtn');

        // Code from this link https://errorsea.com/how-to-change-text-onclick-event-javascript/ was added to the previous javascript
        //to help me toggle the amount of followers from 0 to 1 upon clicking the follow button

        followBtn.addEventListener('click', function handleClick() {
        const initialText = 'Follow';
        const demoText = "0 followers";

        if (followBtn.textContent.includes(initialText)) {
            followBtn.textContent = 'Unfollow';
            demo.textContent = "1 followers";
        } else {
            followBtn.textContent = initialText;
            demo.textContent = demoText;
        }
        });
    </script>

    
    
</body>
</html>