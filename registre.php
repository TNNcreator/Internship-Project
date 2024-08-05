<?php
include('admin_header.php');
include('database.php');

$sql="select * from register ";
$Getresult = mysqli_query($db,$sql);

if(isset($_REQUEST['del']))
{
    $ida=$_REQUEST['del'];
    $sql="delete from register where r_id='$ida' ";
    mysqli_query($db,$sql);
    header('location:registre.php');

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
<div class="table_blog">
            <table border="1">
                <tr>
                    <th>Sr.No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Confirm Email</th>
                    <th>Phone</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Delete</th>
                </tr>
                 <?php
                 $no=1;
                 while($row=mysqli_fetch_array($Getresult))
                {   
                ?>
               <tr>
                   <td><?php echo $no++;?></td>
                   <td><?php echo $row['first_name'];?></td>
                   <td><?php echo $row['last_name'];?></td>
                   <td><?php echo $row['email'];?></td>
                   <td><?php echo $row['confirm_email'];?></td>
                   <td><?php echo $row['phone'];?></td>
                   <td><?php echo $row['username'];?></td>
                   <td><?php echo $row['password'];?></td>

                   <td><a href="registre.php?del=<?php echo $row['r_id'];?>" onclick="return confirm('you are sure !!!')">delete</a></td>

                   
                   
                   
               </tr>
                <?php
               }
               ?>
            </table>
            </div>
</body>
</html>