<?php include('ketnoi.php'); ?>
<?php
//Thêm danh mục
if(isset($_POST['them'])){
    $icon = $_POST['icon'];
    $name = $_POST['name'];
    $link = $_POST['link'];
    
    $sql = mysqli_query($conn,"INSERT INTO `link` (`icon`, `name`, `link`) VALUES ('$icon', '$name', '$link');");
    header('Location: index.php');
    exit();}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý danh mục</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
    
                         <div class="col-md-4">
                <h4>Thêm liên kết</h4>
                <form action="" method="POST">
                <label>đường dẫn icon</label>
                    <input type="text" class="form-control" name="icon" placeholder="Đường dẫn icon"><br>
                <label>Tên</label>
                    <input type="text" class="form-control" name="name" placeholder="Tên"><br>
                <label>Liên kết</label>
                <input type="text" class="form-control" name="link" placeholder="Liên kết đến trang"><br>
                    <input type="submit" value="Thêm liên kết" class="btn btn-success" name="them">
                </form>
            </div>
     
            </div>
        </div>
    </div>
</body>
</html>