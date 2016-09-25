<?php
use yii\helpers\Html;
require_once("funcs/candidatos.php");
$lista=new lista_partido();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>3lig3los!</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">3lig3los</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Diputados</a>
                    </li>
                    <li>
                        <a href="#">Contacto</a>
                    </li>
                    
                    <li>
    
                        <a href="login/login.html">login</a>


                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->


            <div class="col-md-8">

                <h1 class="page-header">
                    3lig3los
                    <small>Sé parte de nuestro futuro!</small>
                </h1>

                
                <?php
                $partido = [
                    "1" => "<img src='img/pri.png' style='width:40px' alt=''>",
                    "2" => "<img src='img/pan.png' style='width:40px' alt=''>",
                    "3" => "PRD",
                    "4" => "PVEM",
                    "5" => "MC",
                    "6" => "PANAL",
                    "7" => "PT",
                ];
                echo '<div class="scroll">';

                foreach ($lista->lista_completa() as $key => $value) {
                    echo '<div class="col-lg-12 col-sm-12 text-center"><img class="img-circle img-responsive img-center"';
                if($lista->lista_completa()[$key][2]!="")
                    {echo 'src="'.$lista->lista_completa()[$key][2].'" alt="">';}
                    else{ echo 'src="img/no.png" alt="" style="width:80px;">';}
                echo '<h3 align="left">'.
                $lista->lista_completa()[$key][1]
                .'<small>'.$partido[$lista->lista_completa()[$key][7]].'</small>
                </h3>
                <p align="left">';
                if($lista->lista_completa()[$key][4]!=""){
                    echo '<a href="https://www.facebook.com/'.$lista->lista_completa()[$key][4].'" target="_blank"> <img src="img/facebook.png" style="width:30px" alt=""></a>';

                }
                if($lista->lista_completa()[$key][3]!=""){
                    echo '<a href="https://twitter.com/'.$lista->lista_completa()[$key][3].'" target="_blank"> <img src="img/Twitter.png" style="width:30px" alt=""></a>';

                }
                echo 'Ranking: '.$lista->lista_completa()[$key][6].'

                </p>
            </div><br><br><hr>';
                }
                
                echo "</div>";
                ?>

            


                <!-- Second Blog Post -->
                

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
