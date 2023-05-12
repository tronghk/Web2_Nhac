<?php 
   require ("./functions.php");
 
   if(isset($_POST['song'])){
      $song = $_POST['song'];
 
      if($song === "All Genre Song"){
         $products = getAllSong();
      }else{
         $products = getSongByGenre($song);
      }
      echo json_encode($products);
   }?>