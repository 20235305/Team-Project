
<!--This file has the post form that the homepage inheritace and loops through-->
    <div class="feed-box">
        <button class="userBtn2">
        <img class="userSymbol2" src="images/user-icon.png" alt="user icon"/>
        </button>
        <p class="jSmithText">Paddy O Toole</p>
        <br>
        <?php echo $row['post'] ?>

        <br><br>

        <?php 
        
        if(file_exists($row['img']))
        {
            $post_image = $row['img'];
            echo "<img src= '$post_image' style='width:100%;'/>";

        }
        
        ?>

        <button class="likeBUTTON2">
            <img class="likeBtn"src="images/like-button.png" alt="like button">
         </button>
         <p class="likeBUTTON">Like</p>
        <button class="commentBtn">
            <img class="commentSymbol" src="images/chat-icon.png" alt="comment symbol"/>
        </button>
        <p class="commentText">Comment</p>
        
        <br>
            <!-- I used this link to psotion the button beside the comment box -->
            <div class="buttonWrapper">
                <input type="text" id="comment-box" placeholder="Add your comment...">
                <button class="submit-button">Submit</button>
            </div>
    </div>