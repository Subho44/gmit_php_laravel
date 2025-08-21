<?php include 'config.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Job</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

</head>
<?php
if(isset($_POST['submit'])) {
    $title = $_POST['title'];
    $company = $_POST['company'];
    $salary = $_POST['salary'];
    $location = $_POST['location'];

    $sql = "INSERT INTO jobs(title,company,salary,location) VALUES('$title','$company','$salary','$location')";

    if(mysqli_query($conn,$sql)) {
        header("Location:index.php");
    } else {
        echo "error";
    }

}
?>
<body>
    <div class="card mt-5" style="width:500px; height:500px; margin-left:400px;">
        <form method="post">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
           <div class="form-group">
                <label>Company</label>
                <input type="text" name="company" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Salary</label>
                <input type="number" name="salary" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Location</label>
                <input type="text" name="location" class="form-control" required>
            </div>
            <button class="btn btn-dark" type="submit" name="submit">Add Job</button>
        </form>

    </div>
    
</body>
</html>