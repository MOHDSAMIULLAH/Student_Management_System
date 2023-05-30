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
    <div class="container" style="width:40vw;padding:20px;height: max-content;margin:auto;border:2px solid black">
     
   <h2 class="align-item-center">Add New Student's Detail </h2> 
<form action="form1.php" method="POST">
  <table class="w-100">
    <tr>
    <td>
    <label for="s" class="form-label mb-3 ">Roll :</label>
</td>
<td>
    <input type="number" class="form-control mb-3" id="s" name="s">
</td>
</tr>

<tr>
    <td>
    <label for="f_name" class="form-label mb-3">First Name:</label>
    </td>
<td>
    <input type="text" class="form-control mb-3  d-inline-block" id="f_name" name="f_name">
    </td>
</tr>

  <tr>
    <td>
    <label for="l_name" class="form-label ">Last Name:</label>
    </td>
<td>
    <input type="text" class="form-control mb-3 d-block w-100" id="l_name" name="l_name">
 </td>
</tr>
  <tr>
    <td>
    <label for="dob" class="form-label ">D.O.B:</label>
    </td>
<td>
    <input type="date" class="form-control  mb-3 d-inline-block" id="dob" name="dob">
  </td>
</tr>
  <tr>
    <td>
    <label for="parent_name" class="form-label ">Parent's Name:</label>
    </td>
<td>
    <input type="text" class="form-control mb-3 d-inline-block" id="parent_name" name="parent_name">
  </td>
</tr>
  <tr>
    <td>
    <label for="phone" class="form-label ">Phone:</label>
    </td>
<td>
    <input type="number" class="form-control  mb-3 d-inline-block" id="phone" name="phone">
  </td>
</tr>
  <tr>
    <td>
    <label for="address" class="form-label ">Address:</label>
    </td>
<td>
    <input type="text" class="form-control  mb-3 d-inline-block" id="address" name="address">
  </td>
</tr>
  <tr>
    <td>
    <label for="city" class="form-label ">City:</label>
    </td>
<td>
    <input type="text" class="form-control  mb-4 d-inline-block" id="city" name="city">
  </td>
</tr>
</table>
  <button type="submit" class="btn btn-primary mt-5">Submit</button>
  <a href="form1.php" class="text-right btn btn-primary mt-5 mx-5 flex align-self-end right-0">Cancel</a>
</form>  
</div>
</section>      
</body>
</html>


