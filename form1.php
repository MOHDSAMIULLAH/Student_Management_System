<?php 
            session_start();
            $servername = "localhost";
            $username="root";
            $password="";
            $db="student";
            $conn = mysqli_connect($servername,$username,$password,$db);
            if(!$conn){
                die(mysqli_connect_error());
            }else{
            echo "connected";
            }

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $s =$_POST['s'];
            $f_name =$_POST['f_name'];
            $l_name =$_POST['l_name'];
            $dob =$_POST['dob'];
            $parent_name =$_POST['parent_name'];
            $phone =$_POST['phone'];
            $address =$_POST['address'];
            $city =$_POST['city'];
                echo "$city"."dob";
            $query = "INSERT INTO student(S_No,f_name,l_name,dob,parent_name,phone,address,city) VALUES($s,'$f_name','$l_name','$dob','$parent_name','$phone','$address','$city')";

            $res = mysqli_query($conn,$query);

            if ($res) {
                echo "inserted";
            } else {
                echo "not inserted";
            }
            }
        $req = "SELECT * FROM STUDENT";
        $data = mysqli_query($conn,$req);
        // if ($data) {
        //     echo"fetched";
        // } else {
        //     echo"not fetched";
        // }
        
       

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  
</head>
<body>

<div class="container flex justify-content-end" style="width:50vw;padding:20px;height: max-content;margin:auto; ">
    <a href="index.php" class="btn btn-primary">Add Student</a>
    <a href="marks.php" class="btn btn-primary mx-5 flex justify-content-end">Student's Marks</a>
    </div>

    <section>
    <div class="container" style="width:100%;padding:20px;height: max-content;margin:auto;border:2px solid black">
       <h2> Student's Details</h2>
       
       <table class="table;border:1px solid black table">
       <thead>
        <tr>
        <th scope="col">Roll.NO.:</th>
        <th scope="col">Last Name:</th>
        <th scope="col">First Name:</th>
        <th scope="col">D.O.B:</th>
        <th scope="col">Parent's Name:</th>
        <th scope="col">City:</th>
        <th scope="col">Address:</th>
        <th scope="col">Phone:</th>
        </tr>
        <thead>

        <tbody class="table-group-divider " >

        <?php
        $req = "SELECT * FROM STUDENT";
        $data = mysqli_query($conn,$req);
        // if ($data) {
        //     echo"fetched";
        // } else {
        //     echo"not fetched";
        // }
        $row = mysqli_fetch_assoc($data); 
        // if ($row) {
        //     echo "row";
        // } else {
        //     echo "no row";
        // }
        ?>
        
        <?php while($row = mysqli_fetch_assoc($data))
        {
             ?>
        <tr>
            <td><?php echo $row['S_No']; ?></td>
            <td><?php echo $row['f_name']; ?></td>
            <td><?php echo $row['l_name']; ?></td>
            <td><?php echo $row['dob']; ?></td>
            <td><?php echo $row['parent_name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['phone']; ?></td>            
        </tr>
        <?php 
    } 
    ?>
    </tbody>
       </table>
      
</div>
    </section>
</body>
</html>