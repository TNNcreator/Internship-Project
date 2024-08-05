<?php
include('database.php');
include('admin_header.php');

$sql='select * from city';
$GetResult=mysqli_query($db,$sql);

$sql="select *from state";
$GetState=mysqli_query($db,$sql);

if(isset($_REQUEST['insert']))
{
    $staid=$_REQUEST['state_id'];
    $user= $_REQUEST['city_name'];
    

   
    $sql="insert into city (city_name,state_id) values('$user','$staid')";
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

                <div>State Name</div>
                <div>
                         <select name="state_id" class="txt">
                             <option value="" hidden> Select State Name</option>                            
                            <?php
                             while($s=mysqli_fetch_array($GetState))
                             {
                                ?>
                                <option value="<?php echo $s['state_id'];?>"><?php echo $s['state_name'];?></option>
                                <?php
                             }
                            ?>
                         </select> 
                </div>

        
                <div>City Name</div>
                <div><input type="text" placeholder="City Name" required name="city_name" class="txt"></div>

                <div><input type="submit" name = "insert" class="btn"></div>
            </form>
        </div>
        <div class="table_blog">
            <table border="1">
                <tr>
                    <th>Sr.No</th>
                    <th>State Name</th>
                    <th>City Name</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                 <?php
                 $no=1;
                 while($row=mysqli_fetch_array($GetResult))
                {   
                    $Sid= $row['state_id'];
                    $sql="select *from state where state_id='$Sid'";
                    $d=mysqli_query($db,$sql);
                    $GetStateName=mysqli_fetch_array($d);
                ?>
               <tr>
                   <td><?php echo $no++;?></td>
                   <td><?php echo $GetStateName['state_name'];?></td>
                   <td><?php echo $row['city_name'];?></td>


                   <td><a href="city.php?del=<?php echo $row['city_id'];?>" onclick="return confirm('you are sure !!!')">delete</a></td>

                   
                   <td><a href="city_edit.php?edt=<?php echo $row['city_id'];?>">Edit</a></td>
                   
               </tr>
                <?php
               }
               ?>
            </table>
        </div>
    </div>
</body>
</html>


