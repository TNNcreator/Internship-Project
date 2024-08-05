<?php
include('database.php');
include('admin_header.php');

$sql='select * from about_us';
$GetResult=mysqli_query($db,$sql);

if(isset($_REQUEST['edt']))
{
    $eid=$_REQUEST['edt'];
    $sql="select * from about_us where about_id='$eid'";
    $s=mysqli_query($db,$sql);
    $res=mysqli_fetch_array($s);
}

if(isset($_REQUEST['insert']))
{
    $user= $_REQUEST['about_name'];
    $dec=$_REQUEST['about_dec'];
    

   
    $sql="update about_us set about_name='$user', about_dec='$dec' where about_id='$eid' ";
    mysqli_query($db,$sql);
    header("location:about.php");
    
}
if(isset($_REQUEST['del']))
{
    $ida=$_REQUEST['del'];
    $sql="delete from about_us where city_id='$ida' ";
    mysqli_query($db,$sql);
    header('location:about.php');

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
        <h2>About Add Form </h2>
        <div class="blog">
            <form action="" method="post" enctype="multipart/form-data">

                <div>About Name</div>
                <div><input type="text" placeholder="About Name" required name="about_name" class="txt" value="<?php echo $res['about_name']; ?>"></div>

        
                <div>About Descreption</div>
                <div><input type="text" placeholder="City Name" required name="about_dec" class="txt" value="<?php echo $res['about_dec']; ?>"></div>

                <div><input type="submit" name = "insert" class="btn"></div>
            </form>
        </div>
        <div class="table_blog">
            <table border="1">
                <tr>
                    <th>Sr.No</th>
                    <th>About Name</th>
                    <th>About Descreption</th>
                    <th>Delete</th>
                </tr>
                 <?php
                 $no=1;
                 while($row=mysqli_fetch_array($GetResult))
                {   
                ?>
               <tr>
                   <td><?php echo $no++;?></td>
                   <td><?php echo $row['about_name'];?></td>
                   <td><?php echo $row['about_dec'];?></td>

                   <td><a href="about.php?del=<?php echo $row['about_id'];?>" onclick="return confirm('you are sure !!!')">delete</a></td>

                   
                   
                   
               </tr>
                <?php
               }
               ?>
            </table>
        </div>
    </div>
</body>
</html>


