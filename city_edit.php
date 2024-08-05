<?php
include('database.php');
include('admin_header.php');

$sql='select * from city';
$GetResult=mysqli_query($db,$sql);

if(isset($_REQUEST['edt']))
{
    $eid=$_REQUEST['edt'];
    $sql="select * from city where city_id='$eid'";
    $s=mysqli_query($db,$sql);
    $res=mysqli_fetch_array($s);
}

if(isset($_REQUEST['insert']))
{
    $staid=$_REQUEST['state_id'];
    $user=$_REQUEST['city_name'];
    
    $sql="update city set state_id='$staid' ,city_name='$user' where city_id='$eid' ";

    mysqli_query($db,$sql);
    header("location:city.php");
    
}
if(isset($_REQUEST['del']))
{
    $ida=$_REQUEST['del'];
    $sql="delete from city where city_id='$ida' ";
    mysqli_query($db,$sql);
    header('location:city.php');

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
        <h2>City Add Form </h2>
        <div class="blog">
            <form action="" method="post" enctype="multipart/form-data">

                <div>State ID</div>
                <div><input type="text" placeholder="State ID" r name="state_id" class="txt" value="<?php echo $res['state_id']; ?>"></div>

        
                <div>City Name</div>
                <div><input type="text" placeholder="City Name" required name="city_name" class="txt" value="<?php echo $res['city_name']; ?>"></div>

                <div><input type="submit" name = "insert" class="btn"></div>
            </form>
        </div>
        <div class="table_blog">
            <table border="1">
                <tr>
                    <th>Sr.No</th>
                    <th>state Id</th>
                    <th>City Name</th>
                    <th>Delete</th>
                </tr>
                 <?php
                 $no=1;
                 while($row=mysqli_fetch_array($GetResult))
                {   
                ?>
               <tr>
                   <td><?php echo $no++;?></td>
                   <td><?php echo $row['state_id'];?></td>
                   <td><?php echo $row['city_name'];?></td>


                   <td><a href="city.php?del=<?php echo $row['city_id'];?>" onclick="return confirm('you are sure !!!')">delete</a></td>

                   
               </tr>
                <?php
               }
               ?>
            </table>
        </div>
    </div>
</body>
</html>


