<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>

 <form action="upload.php" method="POST" enctype="multipart/form-data">
  
  <center><div style="background-color:purple;height:75px">
      <h1> Admin Uploads</h1></div>
      <br><br><br>
  <div class="form-group">
  Song Name:<input type="text" name="songName"/>
      <br><br><br>
  Artist Name:<input type="text" name="artistName"/>
      <br><br><br>
 Album Name:<input type="text" name="albumName"/>
      <br><br><br>      
<input type="file" name="audioFile"/>
  <br>
   <input type="submit" value="Upload Audio" name="save_audio"/>
     </div> 
    </form>
     </center>
</body>    
</html>