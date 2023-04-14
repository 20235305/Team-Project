<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css?v=<?php echo time(); ?>"> <!-- this force the css to reload-->
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
                <p class="notificationsText">Chat</p>
                <img class="chatIconForChatPage" src="images/chat-icon.png" alt="chat-symbol"/>
                
        </div>
    </div> 

    <div class="chat-box"> <!-- 1st notification box -->
        <div class="searchBAR2">
            <img class="searchSymbol" src="images/search-symbol.png" alt="search symbol">
            <input type="text" style="width: 140px; height: 20px" placeholder="Search..">
        </div>
        <br>
        <button id="fakeUserBtn1">
            <img id="fakeUserPic1" src="images/fake-user-profiler1-EDITED.png" alt="fake User Pic 1">
        </button>
        <p id="hiTextCHAT"><b>Eric Doyle</b><br>Last Online<br>7 mins ago</p>
        <br>
        <button id="fakeUserBtn6">
            <img id="fakeUserPic6" src="images/fake-user-profiler6-EDITED.png" alt="fake User Pic 6">
        </button>
        <p id="hiTextCHAT2"><b>Joane McFlurry</b><br>Last Online<br>7 mins ago</p>
        <br>
        <button id="fakeUserBtn7">
            <img id="fakeUserPic7" src="images/fake-user-profiler7-EDITED.png" alt="fake User Pic 7">
        </button>
        <p id="hiTextCHAT3"><b>Jon Stamos</b><br>Last Online<br>7 mins ago</p>
        <br>
        <button id="fakeUserBtn2">
            <img id="fakeUserPic2" src="images/fake-user-profiler2EDITED.png" alt="fake User Pic 2">
        </button>
        <p id="hiTextCHAT4"><b>Niamh Hyland</b><br>Last Online<br>13 mins ago</p>

        <div class="line"></div>
    </div>
    
    
    

    <!-- I used this link to find out how to position the page at the top upon reloading -->
    <script>
        window.onbeforeunload = function () {
        window.scrollTo(0, 0);
        }
    </script>
    
</body>
</html>