<?php 
            session_start();
            $servername = "localhost";
            $username="root";
            $password="";
            $db="student";
            $conn = mysqli_connect($servername,$username,$password,$db);
            // if(!$conn){
            //     die(mysqli_connect_error());
            // }else{
            // echo "connected";
            // }

            $req = "SELECT * FROM MARKS where percentage>60";
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
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
  </head>
  <body>
    
  <div class="container" style="width:100%;padding:20px;height: max-content;margin:auto;">
    <a href="marks.php" class="btn btn-primary float-right">Back</a>
            </div>
    <section>
    <div class="container" style="width:100%;padding:20px;height: max-content;margin:auto;border:2px solid black">
       <h2 class="my-3" >View student's Report</h2>
     <p>Student's List securing  above 60%</p>
       
       <table class="table">
  <thead>
    <tr>
      <th scope="col">Class</th>
      <th scope="col">Roll No.</th>
      <th scope="col">Subject1</th>
      <th scope="col">Subject2</th>
      <th scope="col">Subject3</th>
      <th scope="col">Percentage</th>
    </tr>
</thead>
  <tbody class="table-group-divider">
  <?php while($row = mysqli_fetch_assoc($data))
        {
             ?>
        <tr>
            <td><?php echo $row['class']; ?></td>
            <td><?php echo $row['roll']; ?></td>
            <td><?php echo $row['subject_1']; ?></td>
            <td><?php echo $row['subject_2']; ?></td>
            <td><?php echo $row['subject_3']; ?></td>
            <td><?php echo $row['percentage']; ?></td>           
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