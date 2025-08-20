<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Cards</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
           <?php
           $products = [
            ["name"=>"Product 1","price"=>100,"image"=>"assets/p1.jpg"],
             ["name"=>"Product 2","price"=>200,"image"=>"assets/p5.jpg"],
              ["name"=>"Product 3","price"=>300,"image"=>"assets/p12.jpg"],
               ["name"=>"Product 4","price"=>400,"image"=>"assets/p16.jpg"],

           ];
           foreach($products as $x): ?>
           <div class="col-md-3 mb-4">
              <div class="card">
                <img src="<?=$x['image']?>" class="card-img-top" alt="img">
                <div class="card-body">
                    <h4 class="card-title"><?=$x['name']?></h4>
                    <p class="card-text"><?=$x['price']?></p>
                    <button class="btn btn-dark">Buy Now</button>
                </div>
              </div>
           </div>
           

           <?php endforeach;?>
        </div>
    </div>
    
</body>
</html>