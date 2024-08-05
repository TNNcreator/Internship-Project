<?php
include('database.php');
include('admin_header.php');

$sql='select * from state';
$GetResult=mysqli_query($db,$sql);

if(isset($_REQUEST['insert']))
{

    $user= $_REQUEST['state_name'];

   
    $sql="insert into state (state_name) values('$user')";
    mysqli_query($db,$sql);
    header("location:state.php");
    
}
if(isset($_REQUEST['del']))
{
    $ida=$_REQUEST['del'];
    $sql="delete from state where state_id='$ida' ";
    mysqli_query($db,$sql);
    header('location:state.php');

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
        <h2>State Add Form </h2>
        <div class="blog">
            <form action="" method="post" enctype="multipart/form-data">
        
                <div>State Name</div>
                <div><input type="text" placeholder="State Name" required name="state_name" class="txt"></div>

                <div><input type="submit" name = "insert" class="btn"></div>
            </form>
        </div>
        <div class="table_blog">
            <table border="1">
                <tr>
                    <th>Sr.No</th>
                    <th>State Name</th>
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
                   <td><?php echo $row['state_name'];?></td>


                   <td><a href="state.php?del=<?php echo $row['state_id'];?>" onclick="return confirm('you are sure !!!')">delete</a></td>

                   
                   <td><a href="state_edit.php?edt=<?php echo $row['state_id'];?>">Edit</a></td>
                   
               </tr>
                <?php
               }
               ?>
            </table>
        </div>
    </div>
</body>
</html>


