<?php
include('database.php');
include('admin_header.php');

$sql='select * from admin_login';
$GetResult=mysqli_query($db,$sql);

if(isset($_REQUEST['edt']))
{
    $eid=$_REQUEST['edt'];
    $sql="select * from admin_login where admin_id='$eid'";
    $s=mysqli_query($db,$sql);
    $res=mysqli_fetch_array($s);
}


if(isset($_REQUEST['insert']))
{
    $user=$_REQUEST['username'];
    $pass= $_REQUEST['password'];
    

   
    $sql="update admin_login set username='$user',password='$pass'where admin_id='$eid'";
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
                <div><input type="text" placeholder="Username" required name="username" class="txt" value="<?php echo $res['username']; ?>"></div>

                
                <div>Password</div>
                <div><input type="text" placeholder="Password" required name="password" class="txt" value="<?php echo $res['password']; ?>"></div>

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

                   
                   
                   
               </tr>
                <?php
               }
               ?>
            </table>
        </div>
    </div>
</body>
</html>


