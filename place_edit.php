<?php
include('database.php');
include('admin_header.php');

$sql='select * from place';
$GetResult=mysqli_query($db,$sql);

if(isset($_REQUEST['edt']))
{
    $eid=$_REQUEST['edt'];
    $sql="select * from place where place_id='$eid'";
    $s=mysqli_query($db,$sql);
    $res=mysqli_fetch_array($s);
}

if(isset($_REQUEST['insert']))
{
    $sid= $_REQUEST['state_id'];
    $cid= $_REQUEST['city_id'];
    $name= $_REQUEST['place_name'];
    $dec=$_REQUEST['place_dec'];
    $image=$_FILES['place_img']['name'];
    move_uploaded_file($_FILES['place_img']['tmp_name'],'placeimg/'.$image);

    if($image=='')
    {
        $image=$res['place_img'];
    }

    $sql="update place set state_id='$sid', city_id='$cid', place_name='$name', place_dec='$dec', place_img='$image' where place_id='$eid'";
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

                <div>State ID</div>
                <div><input type="int" placeholder="State ID" required name="state_id" class="txt" value="<?php echo $res['state_id']; ?>"></div>

                <div>City ID</div>
                <div><input type="int" placeholder="City ID" required name="city_id" class="txt" value="<?php echo $res['city_id']; ?>"></div>

                <div>Place Name</div>
                <div><input type="text" placeholder="Place Name" required name="place_name" class="txt" value="<?php echo $res['place_name']; ?>"></div>

                <div>Place Descreption</div>
                <div><input type="text" placeholder="Place Descreption" required name="place_dec" class="txt" value="<?php echo $res['place_dec']; ?>"></div>

                <div>Place Image</div>
                <div><input type="file" name="place_img" class="txt"><img src="placeimg/<?php echo $res['place_img'];?>" width=50 hight=40></div>

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
                    
                </tr>
                 <?php
                 $no=1;
                 while($row=mysqli_fetch_array($GetResult))
                {   
                ?>
               <tr>
                   <td><?php echo $no++;?></td>
                   <td><?php echo $row['state_id'];?></td>
                   <td><?php echo $row['city_id'];?></td>
                   <td><?php echo $row['place_name'];?></td>
                   <td><?php echo $row['place_dec'];?></td>

                   <td><img src="placeimg/<?php echo $row['place_img'];?>" width=50 hight=40></td>

                   <td><a href="place.php?del=<?php echo $row['place_id'];?>" onclick="return confirm('you are sure !!!')">delete</a></td>

                   
                   
                   
               </tr>
                <?php
               }
               ?>
            </table>
        </div>
    </div>
</body>
</html>


