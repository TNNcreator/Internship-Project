<?php
include('database.php');
include('admin_header.php');

$sql='select * from place';
$GetResult=mysqli_query($db,$sql);

$sql='select * from state';
$GetState=mysqli_query($db,$sql);

$sql='select* from city';
$GetCity=mysqli_query($db,$sql);

if(isset($_REQUEST['insert']))
{
    $sid= $_REQUEST['state_id'];
    $cid= $_REQUEST['city_id'];
    $name= $_REQUEST['place_name'];
    $dec=$_REQUEST['place_dec'];
    $image=$_FILES['place_img']['name'];
    move_uploaded_file($_FILES['place_img']['tmp_name'],'placeimg/'.$image);

   
    $sql="insert into place (state_id,city_id,place_name,place_dec,place_img) values('$sid','$cid','$name','$dec','$image')";
    mysqli_query($db,$sql);
    header('location:place.php');
    
}
if(isset($_REQUEST['del']))
{
    $ida=$_REQUEST['del'];
    $sql="delete from place where place_id='$ida' ";
    mysqli_query($db,$sql);
    header('location:place.php');

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
        <h2>Placet Add Form </h2>
        <div class="blog">
            <form action="" method="post" enctype="multipart/form-data">

                <div>State Name</div>
                <div>
                    <select name="state_id" id="" class="txt">
                        <option value="" hidden>Select Sate Name</option>
                        <?php
                        while($op=mysqli_fetch_array($GetState))
                        {
                        ?>
                        <option value="<?php echo $op['state_id'];?>"><?php echo $op['state_name'];?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

                <div>City Name</div>
                <div>
                    <select name="city_id" id="" class="txt">
                        <option value="" hidden>Select City Name</option>
                        <?php
                        while($c=mysqli_fetch_array($GetCity))
                        {
                        ?>
                        <option value="<?php echo $c['city_id'];?>"><?php echo $c['city_name'];?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

                <div>Place Name</div>
                <div><input type="text" placeholder="Place Name" required name="place_name" class="txt"></div>

                <div>Place Descreption</div>
                <div><input type="text" placeholder="Place Descreption" required name="place_dec" class="txt"></div>

                <div>Place Image</div>
                <div><input type="file" name="place_img" required class="txt"></div>

                <div><input type="submit" name = "insert" class="btn"></div>
            </form>
        </div>
        <div class="table_blog">
            <table border="1">
                <tr>
                    <th>Sr.No</th>
                    <th>State ID</th>
                    <th>City ID</th>
                    <th>Place Name</th>
                    <th>Place Descreption</th>
                    <th>Place Image</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                 <?php
                 $no=1;
                 while($row=mysqli_fetch_array($GetResult))
                { 
                    $sid=$row['state_id'];
                    $sql="select * from state where state_id='$sid'";
                    $sq=mysqli_query($db,$sql);
                    $GetStateName=mysqli_fetch_array($sq);

                    $cid=$row['city_id'];
                    $sqi="select * from city where city_id='$cid'";
                    $cq=mysqli_query($db,$sqi);
                    $GetCityName=mysqli_fetch_array($cq);
                ?>
               <tr>
                   <td><?php echo $no++;?></td>
                   <td><?php echo $GetStateName['state_name'];?></td>
                   <td><?php echo $GetCityName['city_name'];?></td>
                   <td><?php echo $row['place_name'];?></td>
                   <td><?php echo $row['place_dec'];?></td>

                   <td><img src="placeimg/<?php echo $row['place_img'];?>" width=50 hight=40></td>

                   <td><a href="place.php?del=<?php echo $row['place_id'];?>" onclick="return confirm('you are sure !!!')">delete</a></td>

                   
                   <td><a href="place_edit.php?edt=<?php echo $row['place_id'];?>">Edit</a></td>
                   
               </tr>
                <?php
               }
               ?>
            </table>
        </div>
    </div>
</body>
</html>


