<html>
    <head>
       <style>
           
           body{
               background-image:url('img/music7.jpg');
           }   
        </style> 
    </head>
    <body>
        
    </body>
</html>



<?php


if(isset($_POST['save_audio']) && $_POST['save_audio']=="Upload Audio")
{
    $songName=$_POST['songName'];
    $artistName=$_POST['artistName'];
     $albumName=$_POST['albumName'];
    $dir='uploads/';
$audio_path=$dir.basename($_FILES['audioFile']['name']);
  
if(move_uploaded_file($_FILES['audioFile']['tmp_name'],$audio_path))
{
    echo "uploaded successfully";
    saveAudio($audio_path);
    
    displayAudios();
}

}

function displayAudios(){
    $conn =mysqli_connect('localhost','root','','music');
 if(!$conn){
     die('server not connected');
 } 
    
    $query="select * from audios";
    $r=mysqli_query($conn,$query);
    
    while($row=mysqli_fetch_array($r)){
       
        echo '<a href="play.php?name='.$row['FileName'].'">'.$row['FileName'].'</a>';
        echo "<br/>";
    }
    mysqli_close($conn);
}




function saveAudio($fileName){
    $songName=$_POST['songName'];
     $artistName=$_POST['artistName'];
    $albumName=$_POST['albumName'];
 $conn =mysqli_connect('localhost','root','','music');
 if(!$conn){
     die('server not connected');
 }  
    $query="insert into audios(FileName,songName,artistName,albumName)values('{$fileName}','{$songName}','{$artistName}','{$albumName}')";
    mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn)>0)
    {
        echo "audio file path saved in dtabase";
    }
    mysqli_close($conn);
}


?>