<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        
    <title></title>
  </head>
  <body>
  <div class="container">
<?php
    include 'ketnoi.php';
    $sql = mysqli_query($conn,"SELECT * FROM link ORDER BY id DESC");
    while($row = mysqli_fetch_array($sql)){
    
?>
 
      <div class="box">
        <div class="img">
        <a href="<?php echo $row['link']; ?>"><img src="<?php echo $row['icon']; ?>.png" /></a>
        </div>
        <p><?php echo $row['name']; ?></p>
      </div>
   

    <?php
  }
?>
 <div class="box">
        <div class="img">
        <a href="them.php"><img src="https://imgur.com/mmZaX7E.png" /></a>
        </div>
        <p>Thêm</p>
      </div>
 </div>
  </body>
</html>
