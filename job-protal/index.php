<?php 
 include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

</head>

<body>
    <div class="container-fluid mt-5">
        <h2 class="text-center text-primary">Job list</h2>
        <table class="table table-dark">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Company</th>
                <th>Salary</th>
                <th>Location</th>
                <th>Action</th>
            </tr>
            <?php
            $result = mysqli_query($conn,"SELECT * FROM jobs");
            $jobs = mysqli_fetch_all($result,MYSQLI_ASSOC);

            foreach($jobs as $x){
                echo "
                    <tr>
                    <td>{$x['id']}</td>
                    <td>{$x['title']}</td>
                    <td>{$x['company']}</td>
                    <td>{$x['salary']}</td>
                    <td>{$x['location']}</td>
                    <td>
                      <a href='edit.php?id={$x['id']}' class='btn btn-danger'>Edit</a>
                       <a href='delete.php?id={$x['id']}' class='btn btn-warning'>Delete</a>
                    </td>
                
                
                   </tr>";
            }

           ?>

        </table>
    </div>

</body>

</html>