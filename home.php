<?php
include('database.php');
include('admin_header.php');

$sql='select * from admin_login';
$GetResult=mysqli_query($db,$sql);



if(isset($_REQUEST['insert']))
{
    $user=$_REQUEST['username'];
    $pass= $_REQUEST['password'];
    

   
    $sql="insert into admin_login(username,password) values('$user','$pass')";
    mysqli_query($db,$sql);
    header("location:home.php");
    
}
if(isset($_REQUEST['del']))
{
    $ida=$_REQUEST['del'];
    $sql="delete from admin_login where admin_id='$ida' ";
    mysqli_query($db,$sql);
    header('location:home.php');

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
        <h2>Home Add Form </h2>
        <div class="blog">
            <form action="" method="post" enctype="multipart/form-data">

        
                <div>User Name</div>
                <div><input type="text" placeholder="Username" required name="username" class="txt"></div>
                
                <div>Password</div>
                <div><input type="text" placeholder="Password" required name="password" class="txt"></div>
                <div><input type="submit" name = "insert" class="btn"></div>
            </form>
        </div>
        <div class="table_blog">
            <table border="1">
                <tr>
                    <th>Sr.No</th>
                    <th>User Name</th>
                    <th>Password</th>
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
                   <td><?php echo $row['username'];?></td>
                   <td><?php echo $row['password'];?></td>


                   <td><a href="home.php?del=<?php echo $row['admin_id'];?>" onclick="return confirm('you are sure !!!')">delete</a></td>

                   
                   <td><a href="home_edit.php?edt=<?php echo $row['admin_id'];?>">Edit</a></td>
                   
               </tr>
                <?php
               }
               ?>
            </table>
        </div>
    </div>
</body>
</html>


