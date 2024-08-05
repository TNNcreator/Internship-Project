<?php
include('database.php');
include('admin_header.php');

$sql='select * from state';
$GetResult=mysqli_query($db,$sql);

if(isset($_REQUEST['edt']))
{
    $eid=$_REQUEST['edt'];
    $sql="select * from state where state_id ='$eid'";
    $s=mysqli_query($db,$sql);
    $res=mysqli_fetch_array($s);
}

if(isset($_REQUEST['insert']))
{

    $user= $_REQUEST['state_name'];
   
    $sql="update state set state_name='$user' where state_id='$eid' ";
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
                <div><input type="text" placeholder="State Name"  name="state_name" class="txt" value="<?php echo $res['state_name']; ?>"></div>

                <div><input type="submit" name = "insert" class="btn"></div>
            </form>
        </div>
        <div class="table_blog">
            <table border="1">
                <tr>
                    <th>Sr.No</th>
                    <th>State Name</th>
                    <th>Delete</th>
                    
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
                   
               </tr>
                <?php
               }
               ?>
            </table>
        </div>
    </div>
</body>
</html>


