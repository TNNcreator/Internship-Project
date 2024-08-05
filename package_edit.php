<?php
include('database.php');
include('admin_header.php');

$sql='select * from package';
$GetResult=mysqli_query($db,$sql);

if(isset($_REQUEST['edt']))
{
    $eid=$_REQUEST['edt'];
    $sql="select * from package where pkg_id='$eid'";
    $s=mysqli_query($db,$sql);
    $res=mysqli_fetch_array($s);
}

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
    if($image=='')
    {
        $image=$res['package_img'];
    }

   
   
    $sql="update package set place_id='$pid', state_id='$sid' , city_id='$cid' , rate='$rat' , pkg_dec='$dec' , days='$day', note='$nt' , package_img='$image' where pkg_id='$eid' ";
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

                <div>Place ID</div>
                <div><input type="text" placeholder="Place ID" required name="place_id" class="txt" value="<?php echo $res['place_id']; ?>"></div>

                <div>State ID</div>
                <div><input type="int" placeholder="State ID" required name="state_id" class="txt" value="<?php echo $res['state_id']; ?>"></div>

                <div>City ID</div>
                <div><input type="int" placeholder="City ID" required name="city_id" class="txt" value="<?php echo $res['city_id']; ?>"></div>

                <div>Rate</div>
                <div><input type="text" placeholder="Rate" required name="rate" class="txt" value="<?php echo $res['rate']; ?>"></div>

                <div>Package Descreption</div>
                <div><input type="text" placeholder="Package Descreption" required name="pkg_dec" class="txt" value="<?php echo $res['pkg_dec']; ?>"></div>

                <div>Days</div>
                <div><input type="text" placeholder="Days" required name="days" class="txt" value="<?php echo $res['days']; ?>"></div>

                <div>Note</div>
                <div><input type="text" placeholder="Note" required name="note" class="txt" value="<?php echo $res['note']; ?>"></div>
                
                
                <div>Package Image</div>
                <div><input type="file" name="package_img" class="txt"><img src="packageimg/<?php echo $res['package_img'];?>" width=50 hight=40></div>

                <div><input type="submit" name = "insert" class="btn"></div>
            </form>
        </div>
        <div class="table_blog">
            <table border="1">
                <tr>
                    <th>Sr.No</th>
                    <th>Place ID</th>
                    <th>State ID</th>
                    <th>City ID</th>
                    <th>Rate</th>
                    <th>Package Descreption</th>
                    <th>Days</th>
                    <th>Package Image</th>
                    <th>Note</th>
                    <th>Delete</th>
                    
                </tr>
                 <?php
                 $no=1;
                 while($row=mysqli_fetch_array($GetResult))
                {   
                ?>
               <tr>
                   <td><?php echo $no++;?></td>
                   <td><?php echo $row['place_id'];?></td>
                   <td><?php echo $row['state_id'];?></td>
                   <td><?php echo $row['city_id'];?></td>
                   <td><?php echo $row['rate'];?></td>
                   <td><?php echo $row['pkg_dec'];?></td>
                   <td><?php echo $row['days'];?></td>
                   <td><img src="packageimg/<?php echo $row['package_img'];?>" width=50 hight=40></td>
                   
                   <td><?php echo $row['note'];?></td>

                   <td><a href="package.php?del=<?php echo $row['pkg_id'];?>" onclick="return confirm('you are sure !!!')">delete</a></td>
 
               </tr>
                <?php
               }
               ?>
            </table>
        </div>
    </div>
</body>
</html>


