<?php
include('database.php');
include('admin_header.php');

$sql='select * from gallery';
$GetResult=mysqli_query($db,$sql);

if(isset($_REQUEST['insert']))
{
    $user= $_REQUEST['gallery_name'];
    
    $image=$_FILES['gallery_img']['name'];
    move_uploaded_file($_FILES['gallery_img']['tmp_name'],'galleryimg/'.$image);
    

   
    $sql="insert into gallery (gallery_img,gallery_name) values('$image','$user')";
    mysqli_query($db,$sql);
    header('location:gallery.php');
    
}
if(isset($_REQUEST['del']))
{
    $ida=$_REQUEST['del'];
    $sql="delete from gallery where gallery_id='$ida' ";
    mysqli_query($db,$sql);
    header('location:gallery.php');

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="all.css">
</head>
<body>
    
    <div class="main_blog">
    <h2>Gallery Add Form </h2>
   <div class="blog">

        <form action="" method="post" enctype="multipart/form-data">

            <div>Gallery Name</div>
            <div><input type="text" placeholder="Gallery Name" required name="gallery_name" class="txt"></div>

            <div>Gallery Image </div>
            <div><input type="file" name="gallery_img" required class="txt"></div>

             <div><input type="submit" name = "insert" class="btn"></div>
        </form>
    </div>
        <div class="table_blog">
          <table border="1">
               <tr>
                   <th>Sr.No</th>
                   <th>Gallery Name</th>
                   <th>Gallery Image</th>
                   <th>Delete</th>
                   <th>Edit</th>
               </tr>
             <?php
             $no=1;
             while($row=mysqli_fetch_array($GetResult))
             {   
                ?>
               <tr>
                   <td><?php echo $no++;?></td>
                   <td><?php echo $row['gallery_name'];?></td>

                   <td><img src="galleryimg/<?php echo $row['gallery_img'];?>" width=50 hight=40></td>
                   <td><a href="gallery.php?del=<?php echo $row['gallery_id'];?>" onclick="return confirm('you are sure !!!')">delete</a></td>
                   <td><a href="gallery_edit.php?edt=<?php echo $row['gallery_id'];?>">Edit</a></td>
               </tr>
                <?php
             }
             ?>
          </table>
        </div>
    </div>  
</body>
</html>