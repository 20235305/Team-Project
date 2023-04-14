<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php

    include("post.php");

    //print posts
    $post = new Post();
    $posts = $post->get_posts();
    ?>

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
                    <div class="topnav"> <!-- the div for the nav bar -->
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
                <p class="feedText">Feed</p>
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
    
    <!-- fake post 1 -->
    <div class="feed-box">
        <button class="userBtn2">
        <img class="userSymbol2" src="images/user-icon.png" alt="user icon"/>
        </button>
        <p class="jSmithText">Jonathon Smith</p>
        <br>
        <p>First time making lasagna... tasty!</p>
        <img class="lasagnaPic" src="images/lasagna.jpg" alt="lasagna pic">
        <button class="likeBUTTON2">
            <img class="likeBtn"src="images/like-button.png" alt="like button">
         </button>
         <p class="likeBUTTON">Like</p>
        <button class="commentBtn">
            <img class="commentSymbol" src="images/chat-icon.png" alt="comment symbol"/>
        </button>
        <p class="commentText">Comment</p>
        <br>
        <button>
            <img class="userSymbol2" src="images/user-icon.png" alt="user icon"/>
        </button>
        <button>
            <img class="userSymbol2" src="images/user-icon.png" alt="user icon"/>
        </button>
        <button>
            <img class="userSymbol2" src="images/user-icon.png" alt="user icon"/>
        </button>
        <p class="likedByBtn">Liked by <b>Paolo</b> and <b>26 others</b></p>
        <br><br>
        <button>
            <img class="userSymbol2" src="images/user-icon.png" alt="user icon"/>
        </button>
        <p class="comment1">Wow! That looks delicous Jonathon!</p>
        <br><br>
        <button>
            <img class="userSymbol2" src="images/user-icon.png" alt="user icon"/>
        </button>
        <p class="comment2">Hmm, delish, will have to try that soon.</p>
        <br><br>

            <!-- I used this link to psotion the button beside the comment box -->
            <div class="buttonWrapper">
                <input type="text" id="comment-box" placeholder="Add your comment...">
                <button class="submit-button">Submit</button>
            </div>

            
            <!-- <div class="input-container">
                    <input type="text" class="input-field"/>
                    <button class="input-button">Ok</button>
                </div> -->
    </div>

    <!-- fake post 2 -->
    <div class="feed-box">
        <button class="userBtn2">
        <img class="userSymbol2" src="images/user-icon.png" alt="user icon"/>
        </button>
        <p class="jSmithText">Mary Allen</p>
        <br>
        <p>I made pizza tonight, it was da bomb!</p>
        <img class="lasagnaPic" src="images/pizza.jpeg" alt="pizza pic">
        <button class="likeBUTTON2">
            <img class="likeBtn"src="images/like-button.png" alt="like button">
         </button>
         <p class="likeBUTTON">Like</p>
        <button class="commentBtn">
            <img class="commentSymbol" src="images/chat-icon.png" alt="comment symbol"/>
        </button>
        <p class="commentText">Comment</p>
        <br>
        <button>
            <img class="userSymbol2" src="images/user-icon.png" alt="user icon"/>
        </button>
        <button>
            <img class="userSymbol2" src="images/user-icon.png" alt="user icon"/>
        </button>
        <button>
            <img class="userSymbol2" src="images/user-icon.png" alt="user icon"/>
        </button>
        <p class="likedByBtn">Liked by <b>Jenny</b> and <b>43 others</b></p>
        <br><br>
        <button>
            <img class="userSymbol2" src="images/user-icon.png" alt="user icon"/>
        </button>
        <p class="comment3">I LOVE PIZZA! AHHHHH!</p>
        <br><br>
        <button>
            <img class="userSymbol2" src="images/user-icon.png" alt="user icon"/>
        </button>
        <p class="comment4">What kind of cheese did you use?</p>
        <br><br>

        <div class="buttonWrapper">
            <input type="text" id="comment-box" placeholder="Add your comment...">
            <button class="submit-button">Submit</button>
        </div>
        
    </div>

    <!-- fake post 3 -->
    <div class="feed-box">
        <button class="userBtn2">
        <img class="userSymbol2" src="images/user-icon.png" alt="user icon"/>
        </button>
        <p class="jSmithText">Lisa McDude</p>
        <br>
        <p>Veggie pho, my new fav thing to make!</p>
        <img class="lasagnaPic" src="images/pho.jpeg" alt="lasagna pic">
        <button class="likeBUTTON2">
            <img class="likeBtn"src="images/like-button.png" alt="like button">
         </button>
         <p class="likeBUTTON">Like</p>
        <button class="commentBtn">
            <img class="commentSymbol" src="images/chat-icon.png" alt="comment symbol"/>
        </button>
        <p class="commentText">Comment</p>
        <br>
        <button>
            <img class="userSymbol2" src="images/user-icon.png" alt="user icon"/>
        </button>
        <button>
            <img class="userSymbol2" src="images/user-icon.png" alt="user icon"/>
        </button>
        <button>
            <img class="userSymbol2" src="images/user-icon.png" alt="user icon"/>
        </button>
        <p class="likedByBtn">Liked by <b>Riley</b> and <b>103 others</b></p>
        <br><br>
        <button>
            <img class="userSymbol2" src="images/user-icon.png" alt="user icon"/>
        </button>
        <p class="comment5">Gosh! I would devour that rn!</p>
        <br><br>
        <button>
            <img class="userSymbol2" src="images/user-icon.png" alt="user icon"/>
        </button>
        <p class="comment2">Super great, will be eating that v soon!</p>
        <br><br>
            <div class="buttonWrapper">
                <input type="text" id="comment-box" placeholder="Add your comment...">
                <button class="submit-button">Submit</button>
            </div>
        
    </div>

    <!-- I used this link to find out how to position the page at the top upon reloading -->
    <script>
        window.onbeforeunload = function () {
        window.scrollTo(0, 0);
        }
    </script>
    
</body>
</html>