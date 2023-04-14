<?php

include("connect.php");
class Post
{
  
   private $error = " ";
   public function create_post($data, $files)
   {
      if(!empty($data['post']) || !empty($files['file']['name']))
      {

         $myimage = "";

         if(!empty($files['file']['name'])){
             
            $unique_id = uniqid();

            $folder = $unique_id;

            if(!file_exists($folder)){
               mkdir($folder,0777,true); 
            }

            $myimage = $folder . ".jpg";
            move_uploaded_file($_FILES['file']['tmp_name'], $myimage);
            
         }
         $post = addslashes($data['post']);

         $query = "insert into posts (post, img) values ('$post','$myimage')";

         $DB = new Database();
         $DB->save($query);
      } else {

         $this->error = "Please type something to post!<br>";

      }

      return $this->error;
   }

   public function get_posts(){
       
      $query = "select * from posts where postid > 0 order by postid desc";

         $DB = new Database();
         $result = $DB->read($query);

         if($result)
         {
            return $result;

         } else {
            return false;
         }

   }
}