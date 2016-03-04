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
                <li class="active"><a href="tutorials.php">Tutorials</a></li>
                <li ><a href="looks.php">Looks</a></li>
                <li ><a href="products.php">Products</a></li>
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

<!-- Thumbnails -->
<?php
$mysqliHost = 'localhost';
$mysqliUsername = 'root';
$mysqliPassword = '';
$mysqliDatabase = 'dreams-feels';

// open mysqli db connection
$mysqli = new mysqli($mysqliHost,$mysqliUsername,$mysqliPassword,$mysqliDatabase);

// query for the articles in the db
$query_tutorial = 'SELECT tutorial_ID, title, description, url FROM tutorials';
$result_tutorial = $mysqli->query($query_tutorial);

echo '<div class="container" id="thumb_id">
        <div class="row">';

if (!$result_tutorial) 
{
    printf("Error: %s\n", mysqli_error($mysqli));
    exit();
}

$counter=0;

while($row_t = mysqli_fetch_array($result_tutorial))
{
    // query for the article's image in the db
    $query = 'SELECT images.data FROM jnct_tutorials_images INNER JOIN images ON jnct_tutorials_images.image_FK = images.image_ID WHERE jnct_tutorials_images.tutorial_FK = '.$row_t[0];
    $result_images = $mysqli->query($query);
    $row_i = mysqli_fetch_array($result_images); 

    echo '<div class="col-xs-12 col-sm-6 col-md-6">
                <div class="thumbnail">
                    <h2 class="text-center">'.$row_t[1].'</h2>
                    <img src="data:image;base64, '.base64_encode( $row_i[0] ).'" class="img-rounded img-responsive img-tutorial">
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
                                    <iframe id="Video'.$counter.'" class="embed-responsive-item" src="'.$row_t[3].'" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen"></iframe>
                                </div>
                                <hr>
                                <p><a class="btn" data-toggle="collapse" data-target="#viewdetails">View details &raquo;</a></p>
                                <p class="collapse" id="viewdetails">'.$row_t[2].'</p>
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

<!-- START THE FEATURETTES -->
<div class="container">
    <hr>

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-7 col-md-push-5">
            <h2>Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
            <img class="-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-7">
            <h2>And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
            <img class="img-responsive center-block" src="">
        </div>
    </div>

    <hr>
</div>
<!-- /END THE FEATURETTES -->

<!-- JavaScript for youtube videos -->
<script type="text/javascript" src="http://www.youtube.com/player_api"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>