<!DOCTYPE html>
<html>
   <head>
       <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       <style>
           body{
               background-color:aqua;
               background-image:url(img/music11.jpg);
           }
       </style>
   </head>
   
    <body>
        <div style="height:75px;background-color:cyan;font-size:36px;text-align:center" ><h1> LIST OF HINDI Songs </h1></div><br><br><br>
        
    </body>
</html>
  

 <?php
  
  $conn =mysqli_connect('localhost','root','','music');
 if(!$conn){
     die('server not connected');
 } 
    
    $query="select * from audios";
    $r=mysqli_query($conn,$query);
    
    while($row=mysqli_fetch_array($r)){
        echo "<div style='background-color:grey'>";
        echo "<h3><I>".$row['Id']."</I></h3>";
        echo "<h2><I>Artist Name:  ".$row['songName'] ."</I></h2>";
        echo "<h2><I>Artist Name:  ".$row['artistName'] ."</I></h2>";
        echo "<h2><I>Album Name:  ".$row['albumName'] ."</I></h2>";
        echo "<h4><I>Link to download: ".'<a href="play.php?name='.$row['FileName'].'">'.$row['FileName'].'</a>'."<h4><I>";
        echo "<br/>";
        echo "</div>";
         echo "<br/>";
    }
    mysqli_close($conn);
?>
