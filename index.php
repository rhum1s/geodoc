<!-- Doctype HTML5 -->
<!DOCTYPE html>
<html lang="en">
<html dir="ltr">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="GéoDoc">
        <meta name="author" content="Romain Souweine">

        <title>GéoDoc</title>
        
        <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

        <link rel="stylesheet" href="libs/bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css"> <!-- Bootstrap core CSS  -->
        <link href="index.css" rel="stylesheet"> <!-- Custom styles for this template -->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><b>GéoDoc</b></a>
                </div>
                <!-- 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Administration</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>

        <!-- Titre de la page et image des contributeurs-->
        <div id="headerwrap">
            <div class="container" id="head">
                <div class="row">
                    <div class="col-md-8">
                        
                        <h1>Géolocalisation des documents<h1>
                        
                    </div><!-- /col-md-8 -->
                    
                    <div class="col-md-4" id=col-contributors>
                        <!-- <img src="img/contributors2.png" id="img_contributors"> -->
                    </div><!-- /col-md-4 -->
                    
                </div><!-- /row -->
            </div><!-- /container -->
        </div><!-- /headerwrap -->

        <div class="container">
            <div class="row mt centered">
            
                <div class="col-md-9" id=map_container>
                </div><!--/col-md-9 -->

                <div class="col-md-3">
				</div><!--/col-md-3 -->
                
            </div><!-- /row -->
        </div><!-- /container -->

        <div class="container">
            <p class="centered">Romain Souweine | Bootstrap theme FLATTY | <a href="">contact</a></p>
        </div><!-- /container -->

        <!-- JQuery & Bootstrap core JavaScript -->
        <script src="libs/jquery/jquery-3.2.1.min.js"></script> 
        <script src="libs/bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

        <!-- Script -->
        <script type="text/javascript"> 

    </body>
</html>
