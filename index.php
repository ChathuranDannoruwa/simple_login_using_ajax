<!DOCTYPE html>
<html>
    <head>


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <title>Login Form PHP with Session</title>
        <style>
            .carousel-inner > .item > img,
            .carousel-inner > .item > a > img {
                width: 70%;
                margin: auto;
            }
        </style>
    </head>
    <body>
        <!-------->

        <!-- Navigation panal -->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Brand</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <img  src="img/logo.gif"> <span class="sr-only">(current)</span>




                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <form class="navbar-form navbar-left" action="" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name"  placeholder="User Name">
                                    </div>
                                    <div class="form-group">

                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control"  id="word"  placeholder="Password">
                                    </div>
                                    <div class="form-group">

                                    </div>
                                    <li role="separator" class="divider"></li>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-default" id="login" value="Login">Login</button>
                                    </div>
                                    <!-- Error Log -->
                                    <div class="form-group">
                                        <label class="text-danger" id="add_err"></label>
                                    </div>
                                </form>
                                
                             
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        
        

        <!-- Login Validation -->
        <script type="text/javascript">
            $(document).ready(function () {
                //$("#add_err").css('display', 'none', 'important');
                $("#login").click(function () {
                    username = $("#name").val();
                    password = $("#word").val();
                    $.ajax({
                        type: "POST",
                        url: "login.php",
                        data: {name1: username, pwd1: password},
                        dataType: 'json',
                        success: function (html) {
                            if (html == 'true') {
                                location.assign("http://localhost/sampleLoginAjax/profile.php");

                                $("#add_err").html(html);
                            }
                            else if (html == 'empty') {
                                $("#add_err").html("Username or password is empty");

                            }
                            else if (html == 'false') {

                                $("#add_err").html("Wrong username or password");
                            } else {

                                //  $("#add_err").html(html);
                            }
                        },
                        beforeSend: function ()
                        {
                            // $("#add_err").html(html.toString());
                            $("#add_err").html("Loading...")
                        }
                    });
                    return false;
                });
            });
        </script>


        <!-- image Slider -->
        <div class="container">
            <br>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <img src="img/slider/slider_1.jpg" alt="Chania" width="460" height="345">
                        <div class="carousel-caption">
                            <h3></h3>
                            <p></p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="img/slider/slider_2.jpg" alt="Chania" width="460" height="345">
                        <div class="carousel-caption">
                            <h3></h3>
                            <p></p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="img/slider/slider_3.jpg" alt="Flower" width="460" height="345">
                        <div class="carousel-caption">
                            <h3></h3>
                            <p></p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="img/slider/slider_3.jpg" alt="Flower" width="460" height="345">
                        <div class="carousel-caption">
                            <h3></h3>
                            <p></p>
                        </div>
                    </div>

                     <div class="item">
                        <img src="img/slider/slider_4.jpg" alt="Flower" width="460" height="345">
                        <div class="carousel-caption">
                            <h3></h3>
                            <p></p>
                        </div>
                    </div>

                     <div class="item">
                        <img src="img/slider/slider_5.jpg" alt="Flower" width="460" height="345">
                        <div class="carousel-caption">
                            <h3></h3>
                            <p></p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="img/slider/slider_6.jpg" alt="Flower" width="460" height="345">
                        <div class="carousel-caption">
                            <h3></h3>
                            <p></p>
                        </div>
                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </body>
</html>
