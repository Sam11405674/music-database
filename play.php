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
        background-color:azure;
        background-image:url(img/music7.jpg);
    }
       </style> 
 
   </head>
    <body>
      
      
        <div style="height:75px;background-color:darksalmon;font-size:36px;text-align:center" ><h1> LISTEN AND DOWNLOAD SONGS </h1></div><br><br><br>
        <center>
        <audio controls>
            <source src="<?php echo $_GET['name'];?>" type="audio/mpeg">
            </source>
            
        </audio><br>
        <?php echo $_GET['name'];?>
       
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        </center>
    </body>
</html>