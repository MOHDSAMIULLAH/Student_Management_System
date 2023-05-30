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
<section>
    <div class="container" style="width:100%;padding:20px;height: max-content;margin:auto;border:2px solid black">
       
<h2>Enter Marks </h2>
<form action="marks.php" method="POST">
  <div class="mb-3">
    <label for="class" class="form-label">Class</label>
    <input type="text" class="form-control" id="class" name="class">
</div> 
  <div class="mb-3">
    <label for="roll" class="form-label">Roll No.</label>
    <input type="text" class="form-control" id="roll" name="roll">
</div> 
  <div class="mb-3">
    <label for="subject_1" class="form-label">Subject1</label>
    <input type="text" class="form-control" id="subject_1" name="subject_1">
</div> 
  <div class="mb-3">
    <label for="subject_2" class="form-label">Subject2</label>
    <input type="text" class="form-control" id="subject_2" name="subject_2">
</div> 
  <div class="mb-3">
    <label for="subject_3" class="form-label">Subject3</label>
    <input type="text" class="form-control" id="subject_3" name="subject_3">
</div> 
  <div class="mb-3">
    <label for="percentage" class="form-label">Percentage</label>
    <input type="text" class="form-control" id="percentage" name="percentage">
</div> 
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="marks.php" class="btn btn-primary my-2">Back</a>
</div>
</section>

</body>
</html>