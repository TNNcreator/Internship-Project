<?php
include('database.php');
include('admin_header.php');

$sql='select * from package';
$GetResult=mysqli_query($db,$sql);

$sql='Select * from place';
$GetPlace=mysqli_query($db,$sql);

$sql='Select * from state';
$GetState=mysqli_query($db,$sql);

$sql='Select * from city';
$GetCity=mysqli_query($db,$sql);

if(isset($_REQUEST['insert']))
{
    $pid= $_REQUEST['place_id'];
    $sid= $_REQUEST['state_id'];
    $cid= $_REQUEST['city_id'];
    $rat= $_REQUEST['rate'];
    $dec=$_REQUEST['pkg_dec'];
    $day= $_REQUEST['days'];
    $nt= $_REQUEST['note'];

    $image=$_FILES['package_img']['name'];
    move_uploaded_file($_FILES['package_img']['tmp_name'],'packageimg/'.$image);

    $sql="insert into package (place_id,state_id,city_id,rate,pkg_dec,days,note,package_img) values('$pid','$sid','$cid','$rat','$dec','$day','$nt','$image')";
    mysqli_query($db,$sql);
    header('location:package.php');
    
}
if(isset($_REQUEST['del']))
{
    $ida=$_REQUEST['del'];
    $sql="delete from package where pkg_id='$ida' ";
    mysqli_query($db,$sql);
    header('location:package.php');

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
        <h2>Package Add Form </h2>
        <div class="blog">
            <form action="" method="post" enctype="multipart/form-data">

                <div>State Name</div>
                <div>
                    <select name="state_id" id="" class="txt">
                        <option value="" hidden>Select State Name</option>
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
                <div>
                   <select name="city_id" id="" class="txt">
                        <option value="" hidden>Select City Name</option>
                        <?php
                        while($c=mysqli_fetch_array($GetCity))
                        {
                        ?>
                        <option value="<?php echo $c['city_id'];?>"> <?php echo $c['city_name'];?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

                <div>Place Name</div>
                <div>
                    <select name="place_id" id="" class="txt">
                        <option value="" hidden>Select Place Name</option>
                        <?php
                        while($p=mysqli_fetch_array($GetPlace))
                        {
                        ?>
                        <option value="<?php echo $p['place_id'];?>"><?php echo $p['place_name'];?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

                

                

                <div>Rate</div>
                <div><input type="text" placeholder="Rate" required name="rate" class="txt"></div>

                <div>Package Descreption</div>
                <div><input type="text" placeholder="Package Descreption" required name="pkg_dec" class="txt"></div>

                <div>Days</div>
                <div><input type="text" placeholder="Days" required name="days" class="txt"></div>

                <div>Note</div>
                <div><input type="text" placeholder="Note" required name="note" class="txt"></div>

                <div>Package Image</div>
                <div><input type="file" name="package_img" class="txt"></div>

                <div><input type="submit" name = "insert" class="btn"></div>
            </form>
        </div>
        <div class="table_blog">
            <table border="1">
                <tr>
                    <th>Sr.No</th>
                    <th>Place Name</th>
                    <th>State Name</th>
                    <th>City Name</th>
                    <th>Rate</th>
                    <th>Package Descreption</th>
                    <th>Package Image</th>
                    <th>Days</th>
                    <th>Note</th>
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
                    $sql="select * from city where city_id='$cid'";
                    $sq=mysqli_query($db,$sql);
                    $GetCityName=mysqli_fetch_array($sq);

                    
                    $pid=$row['place_id'];
                    $sql="select * from place where place_id='$pid'";
                    $sq=mysqli_query($db,$sql);
                    $GetPlaceName=mysqli_fetch_array($sq);


                ?>
               <tr>
                   <td><?php echo $no++;?></td>
                   <td><?php echo $GetPlaceName['place_name'];?></td>
                   <td><?php echo $GetStateName['state_name'];?></td>
                   <td><?php echo $GetCityName['city_name'];?></td>
                   <td><?php echo $row['rate'];?></td>
                   <td><?php echo $row['pkg_dec'];?></td>

                   <td><img src="packageimg/<?php echo $row['package_img']?>" width=50 hight=40></td>

                   <td><?php echo $row['days'];?></td>
                   <td><?php echo $row['note'];?></td>

                   <td><a href="package.php?del=<?php echo $row['pkg_id'];?>" onclick="return confirm('you are sure !!!')">delete</a></td>
                   <td><a href="package_edit.php?edt=<?php echo $row['pkg_id'];?>">Edit</a></td>
 
               </tr>
                <?php
               }
               ?>
            </table>
        </div>
    </div>
</body>
</html>


