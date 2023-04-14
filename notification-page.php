<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css?v=<?php echo time(); ?>"> <!--this force the css to reload-->
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
                <p class="notificationsText">Notifications</p>
                <img class="noticationSymbol2" src="images/notification-symbol.png" alt="notification-symbol"/>
                
        </div>
    </div> 

    <div class="notifications-box"> <!-- 1st notification box -->
        <button id="fakeUserBtn1">
            <img id="fakeUserPic1" src="images/fake-user-profiler1-EDITED.png" alt="fake User Pic 1">
        </button>
        <button id="notificationsPosts">
            <img id="notification-page-food-pics" src="images/beef-chili.jpg" alt="beef chili">
        </button>
        <p id="hiText"><b>Eric Doyle liked your post</b><br>Lorem Ipsum dolor sit amet...<br>10 mins ago</p>
        
        
    </div>

    <div class="notifications-box"> <!-- 2nd notification box -->
        <button id="fakeUserBtn2">
            <img id="fakeUserPic2" src="images/fake-user-profiler2EDITED.png" alt="fake User Pic 2">
        </button>
        <button id="notificationsPosts">
            <img id="notification-page-food-pics" src="images/burger.jfif" alt="burger">
        </button>
        <p id="hiText2"><b>Niamh Hyland liked your post</b><br>Lorem Ipsum dolor sit amet...<br>20 mins ago</p>
    </div>

    <div class="notifications-box"> <!-- 3rd notification box -->
        <button id="fakeUserBtn3">
            <img id="fakeUserPic3" src="images/fake-user-profiler3-EDITED.png" alt="fake User Pic 3">
        </button>
        <button id="notificationsPosts">
            <img id="notification-page-food-pics" src="images/vegetable-fajitas.jpg" alt="veggie fajitas">
        </button>
        <p id="hiText3"><b>Jeff Guinness liked your post</b><br>Lorem Ipsum dolor sit amet...<br>30 mins ago</p>
    </div>

    <div class="notifications-box"> <!-- 4th notification box -->
        <button id="fakeUserBtn4">
            <img id="fakeUserPic4" src="images/fake-user-profiler4-EDITED.png" alt="fake User Pic 4">
        </button>
        <button id="notificationsPosts">
            <img id="notification-page-food-pics" src="images/beef-chili.jpg" alt="beef chili">
        </button>
        <p id="hiText4"><b>Sam Cheesemore commented on your post</b><br>Lorem Ipsum dolor sit amet...<br>35 mins ago</p>
    </div>

    <div class="notifications-box"> <!-- 5th notification box -->
        <button id="fakeUserBtn5">
            <img id="fakeUserPic5" src="images/fake-user-profiler5-EDITED.png" alt="fake User Pic 5">
        </button>
        <button id="notificationsPosts">
            <img id="notification-page-food-pics" src="images/burger.jfif" alt="burger">
        </button>
        <p id="hiText5"><b>Jim Bob commented on your post</b><br>Lorem Ipsum dolor sit amet...<br>10 mins ago</p>
    </div>

    <div class="notifications-box"> <!-- 6th notification box -->
        <button id="fakeUserBtn6">
            <img id="fakeUserPic6" src="images/fake-user-profiler6-EDITED.png" alt="fake User Pic 6">
        </button>
        <button id="notificationsPosts">
            <img id="notification-page-food-pics" src="images/vegetable-fajitas.jpg" alt="veggie fajitas">
        </button>
        <p id="hiText6"><b>Joane McFlurry liked your post</b><br>Lorem Ipsum dolor sit amet...<br>10 mins ago</p>
    </div>

    <div class="notifications-box"> <!-- 7th notification box -->
        <button id="fakeUserBtn7">
            <img id="fakeUserPic7" src="images/fake-user-profiler7-EDITED.png" alt="fake User Pic 7">
        </button>
        <button id="notificationsPosts">
            <img id="notification-page-food-pics" src="images/vegetable-fajitas.jpg" alt="veggie fajitas">
        </button>
        <p id="hiText7"><b>Jon Stamos commented on your post</b><br>Lorem Ipsum dolor sit amet...<br>10 mins ago</p>
    </div>
    
    <div class="notifications-boxEND">

        <button id="loadMoreActivitiesBtn">Load more activities</button>
        <!-- <button>
            <p class="loadMoreActivitiesText">Load more activities</p>
        </button> -->
    </div>
    
    
    

    <!-- I used this link to find out how to position the page at the top upon reloading -->
    <script>
        window.onbeforeunload = function () {
        window.scrollTo(0, 0);
        }
    </script>
    
</body>
</html>