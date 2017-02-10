d <?php
   include('session.php');
?>
<!-- saved from url=(0054)http://getbootstrap.com/examples/sticky-footer-navbar/ -->
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Welcome</title>

    <!-- Bootstrap core CSS -->
    <link href="./welcome1_files/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./welcome1_files/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./welcome1_files/sticky-footer-navbar.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./welcome1_files/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse bg-primary navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://getbootstrap.com/examples/sticky-footer-navbar/#">Sound store</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="welcome1.php">Home</a></li>
            <li><a href="about.html">About</a></li>

            <li class="dropdown">
              <a href="http://getbootstrap.com/examples/sticky-footer-navbar/#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Search Songs by <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="http://getbootstrap.com/examples/sticky-footer-navbar/#">Artist</a></li>
                <li><a href="http://getbootstrap.com/examples/sticky-footer-navbar/#">Type</a></li>
                <li><a href="http://getbootstrap.com/examples/sticky-footer-navbar/#">Play-list name</a></li>

              </ul>
            </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href=""><?php echo $login_session; ?></a></li>
            <li><a href="silog.html">Signout</a></li>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">

      </div>
    </div>

    <div>
      <h1 id='song-name'></h1>
    </div>
    <footer class="footer bg-primary footer-fixed-bottom">
      <div class="container">

        <audio src="" id="song" controls="controls" style="width:1200px;" >
        </audio>
        <button id="next">Next</button>
        <button id="prev">Prev</button>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./welcome1_files/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./welcome1_files/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./welcome1_files/ie10-viewport-bug-workaround.js"></script>
    <script>

      songs = ['song1', 'song2', 'song3']
      songs_info = {
        'song1': {
          'name': 'Naruto',
          'path': 'songs/1.mp3'
        },
        'song2': {
          'name': 'xyz',
          'path': 'songs/2.mp3'
        },
        'song3': {
          'name': 'Summar of 69',
          'path': 'songs/3.mp3'
        }
      }

      function update_song(song_path) {
        song_detail = songs_info[song_path]
        song = $('#song')
        song.attr('src', song_detail.path)

        $('#song-name').text(song_detail.name)
        song[0].play()
      }
      current = 0

      function next() {
        if(current + 1 > songs.length - 1) {
          current = 0
          update_song(songs[current])
        }
        else {
          current += 1
          update_song(songs[current])
        }
        console.log(songs[current])
      }

      $(document).ready(function() {
        update_song(songs[current])

        $('#next').click(function() {
          next()
        })

        $('#song').on('ended', function(){
          next()
        })
      })

    </script>

<script src="chrome-extension://hhojmcideegachlhfgfdhailpfhgknjm/web_accessible_resources/index.js"></script></body></html>
