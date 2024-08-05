<?php
include('database.php');
include('admin_header.php');

$sql='select * from slider';
$GetResult=mysqli_query($db,$sql);

if(isset($_REQUEST['edt']))
{
    $eid=$_REQUEST['edt'];
    $sql="select * from slider where slider_id ='$eid'";
    $s=mysqli_query($db,$sql);
    $res=mysqli_fetch_array($s);
}

if(isset($_REQUEST['insert']))
{
    $user= $_REQUEST['slider_name'];
    
    $image=$_FILES['slider_img']['name'];
    move_uploaded_file($_FILES['slider_img']['tmp_name'],'sliderphoto/'.$image);
    if($image=='')
    {
        $image=$res['slider_img'];
    }

   
    $sql="update slider set slider_name='$user', slider_img='$image' where slider_id='$eid' ";
    mysqli_query($db,$sql);
    header('location:slider.php');
    
}
if(isset($_REQUEST['del']))
{
    $ida=$_REQUEST['del'];
    $sql="delete from slider where slider_id='$ida' ";
    mysqli_query($db,$sql);
    header('location:slider.php');

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
    <h2>Slider Add Form </h2>
   <div class="blog">

        <form action="" method="post" enctype="multipart/form-data">

            <div>Slider Name</div>
            <div><input type="text" placeholder="Slider Name" required name="slider_name" class="txt" value="<?php echo $res['slider_name']; ?>"></div>

            <div>Slider Image </div>
            <div><input type="file" name="slider_img" required class="txt"><img src="sliderphoto/<?php echo $res['slider_img'];?>" width=50 hight=40></div>

             <div><input type="submit" name = "insert" class="btn"></div>
        </form>
    </div>
        <div class="table_blog">
          <table border="1">
               <tr>
                   <th>Sr.No</th>
                   <th>Slider Name</th>
                   <th>Slider Image</th>
                   <th>Delete</th>
               </tr>
             <?php
             $no=1;
             while($row=mysqli_fetch_array($GetResult))
             {   
                ?>
               <tr>
                   <td><?php echo $no++;?></td>
                   <td><?php echo $row['slider_name'];?></td>

                   <td><img src="sliderphoto/<?php echo $row['slider_img'];?>" width=50 hight=40></td>
                   
                   <td><a href="slider.php?del=<?php echo $row['slider_id'];?>" onclick="return confirm('you are sure !!!')">delete</a></td>
               </tr>
                <?php
             }
             ?>
          </table>
        </div>
    </div>  
</body>
</html>