<!DOCTYPE html>
<html>
    <head>
        <title>Danielius.net</title>
    </head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="{{ url('css/app.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,400i,600&amp;subset=latin-ext" rel="stylesheet">
<body>
    <nav class="navbar navbar-custom">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="first-block">
                <div class="navbar-right social-block">
                    <button class="send-news-button">Pranešk naujieną</button>
                    <button class="contact-button">Kontaktai</button>
                    <span class="social-title">Mus Sekite:</span>
                    <a href="http://facebook.com"><img class="fb-icon" src="{{url('images/facebook.png')}}"></img></a>
                    <a href="http://youtube.com"><img class="yt-icon" src="{{url('images/youtube.png')}}"></img></a>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <a class="navbar-brand logo-block" href="/"><img  class="logo" src="{{url('images/logo.png')}}"></img></a>
                </div>
            </div>
            <div class="second-block">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="meniu-item" href="#">AKTUALIJOS</a></li> 
                    <li><a class="meniu-item" href="#">VIDEO</a></li>
                    <li><a class="meniu-item" href="#">GALERIJA</a></li>
                    <li><a class="meniu-item" href="#">RENGINIAI</a></li>
                    <li><a class="meniu-item" href="#">APIE</a></li>
                </ul>
            </div><!-- Collect the nav links, forms, and other content for toggling -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
        <div class="row">
            <div class="main-block">
                <div class="content-block">
                    <a href="{{url('/')}}"><img class="big-news-image" src="{{url('images/church.jpg')}}"></img></a>
                    <a href="{{url('/')}}" class="news-title">SENOSIOS VARĖNOS ŠV. ARKANGELO MYKOLO BAŽNYČIA</a>
                </div>
                <div class="day-quote-block">
                  <span class="day-quote"> DIENOS FRAZE ČIA</span>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    
</body>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
