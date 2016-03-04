<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Make-up blog">
    <meta name="author" content="Rodrigo Ramos">

    <title>Dreams & Feels</title>
    <link rel="icon" href="../img/icon.PNG">

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="../style.css" rel="stylesheet" type="text/css/">
</head>

<body>

<!-- NAVBAR
================================================== -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <img src="../img/logo_small.png" href="../index" class="visible-xs pull-left img-responsive">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav list-inline pull-left">
                <li ><a href="../index.php"><span class="glyphicon glyphicon-home"></span> Home</a>
                <li ><a href="tutorials.php">Tutorials</a></li>
                <li ><a href="looks.php">Looks</a></li>
                <li class="active"><a href="products.php">Products</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">INSERT<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li ><a href="new_tutorial">Insert new Tutorial</a></li>
                        <li ><a href="new_product.php">Insert new Product</a></li>
                        <li ><a href="new_brand.php">Insert new Brand</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- END NAVBAR -->

<br>
<br>
<br>


<div class="container color-content">
    <div class="container col-lg-9 col-md-9 push-sm-3">
        <div class="thumbnail thumb-prod">
            <img src="">
        </div>

    </div>

</div>



<!-- Thumbnails -->
<?php
$mysqliHost = 'localhost';
$mysqliUsername = 'root';
$mysqliPassword = '';
$mysqliDatabase = 'dreams-feels';

// open mysqli db connection
$mysqli = new mysqli($mysqliHost,$mysqliUsername,$mysqliPassword,$mysqliDatabase);

// query for the products in the db
$query_products = "SELECT name,description,brand_FK FROM products";
$result_products = $mysqli->query($query_products);

echo '<div class="container" id="thumb_id">
        <div class="col-lg-9 col-md-9">';

if (!$result_products) 
{
    printf("Error: %s\n", mysqli_error($mysqli));
    exit();
}

$counter=0;

while($row_t = mysqli_fetch_array($result_products))
{
    // query for the product's images in the db
    $query_images = "SELECT data,type FROM jnct_products_images INNER JOIN images WHERE tutorial_FK = ".$row_t[0];
    $result_images = $mysqli->query($query_image);
    $row_i = mysqli_fetch_array($result_image);

    echo '<div class="col-xs-12 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <h2 class="text-center">'.$row_t[1].'</h2>
                    <img src="data:image;base64, '.base64_encode( $row_i[0] ).'" class="img-rounded img-responsive">
                    <div class="caption">
                        <p>'.substr($row_t[2], 0, 210).'...</p>
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#Modal'.$counter.'">VIDEO</a>
                        <div class="modal fade" id="Modal'.$counter.'" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">'.$row_t[1].'</h4>
                              </div>
                              <div class="modal-body ">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="'.$row_t[3].'"></iframe>
                                </div>
                                <hr>
                                <p class="collapse" id="viewdetails">'.$row_t[2].'</p>
                                <p><a class="btn" data-toggle="collapse" data-target="#viewdetails">View details &raquo;</a></p>
                                <hr>
                                <p><a class="btn" data-toggle="collapse" data-target="#viewproducts">View products used &raquo;</a></p>
                                <div class="container collapse" id="viewproducts">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                            
                           
                    </div>
                </div>
            </div>';
    $counter++;
}
echo '</div>
    </div>';
// close mysqli db connection
$mysqli->close();
?>

<!-- END Thumbnails -->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>