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

    <!-- script for validating everything is okey -->
    <script type="text/javascript">
        function valForm() 
        {
            var errors = 0;
            var name = document.forms["brand_form"]["name"].value;
            var description = document.forms["brand_form"]["description"].value;
            var url = document.forms["brand_form"]["url"].value;
            var img = document.forms["brand_form"]["image1"].value;
            
            if (name == null || name == "") 
            {
                document.getElementById("name_div").className = "form-group has-error";
                errors++;
            } else{
                document.getElementById("name_div").className = "form-group";
            }

            if (description == null || description == "") 
            {
                document.getElementById("description_div").className = "form-group has-error";
                errors++;
            } else{
                document.getElementById("description_div").className = "form-group";
            }

            if (url== null || url == "") 
            {
                document.getElementById("url_div").className = "form-group has-error";
                errors++;
            } else{
                document.getElementById("url_div").className = "form-group";
            }

            if( errors > 0)
            {
                document.getElementById("error_container").innerHTML = "<div class='alert alert-danger' role='alert'><p><b>ERROR! </b>All the information must be fulfilled.</p></div>";
                return false;
            }

            if (img == null || img == "") 
            {
                document.getElementById("error_container").innerHTML = "<div class='alert alert-danger' role='alert'><p><b>ERROR! </b> You must introduce one image.</p></div>";
                return false;
            }
        }</script>
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
                <li ><a href="products.php">Products</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">INSERT<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li ><a href="new_tutorial">Insert new Tutorial</a></li>
                        <li ><a href="new_product.php">Insert new Product</a></li>
                        <li class="active"><a href="new_brand.php">Insert new Brand</a></li>
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



<!-- FORM -->
<div class="container">
    <div id="error_container" class="container"></div>
    <form name="brand_form" enctype="multipart/form-data" action="insert_brand.php" onsubmit="return valForm()" method="post">
        <div id="name_div" class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name input">
        </div>
        <div id="description_div" class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" placeholder="Description" rows="5"></textarea>
        </div>
        <div id="url_div" class="form-group">
            <label for="url">Brand website URL</label>
            <input type="text" class="form-control" id="url" name="url" placeholder="Insert website url">
        </div>
        <hr>
        <div class="form-group col-md-6 col-lg-6">
            <label for="file1">Insert image file 1</label>
            <input type="file" name="image1" id="file1">
            <p class="help-block">Select the file. Take care that it's size is no longer that 16 MB.</p>
        </div>
        <input type="submit" value="Submit" name="submit" class="btn btn-success">
    </form>
    <hr>
</div>
<!-- END FORM -->



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>