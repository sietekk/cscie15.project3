<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
      @yield('title','Project 3')
    </title>
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ elixir("css/bundle.css") }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid container">
      <!-- Navbar Section -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation...</span>
              <span class="glyphicon glyphicon-chevron-down"></span>
            </button>
            <a class="navbar-brand" href="#">Projects</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav nav-pills nav-justified">
              <li role="presentation" class="dropdown">
                  <button class="dropdown-toggle nav-btn-width btn btn-default navbar-btn" role="button" id="project1Menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Project 1
                    <span class="glyphicon glyphicon-chevron-down float-glyph-right"></span>
                  </button>
                  <ul class="dropdown-menu nav-btn-width" aria-labelledby="project1Menu">
                    <li><a href="http://p1.sietekk.com">View Project 1</a></li>
                    <li><a href="https://github.com/sietekk/cscie15.project1">Project 1 Source Code</a><li>
                  </ul>
              </li>
              <li role="presentation" class="dropdown">
                  <button class="dropdown-toggle nav-btn-width btn btn-default navbar-btn" role="button" id="project2Menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Project 2
                    <span class="glyphicon glyphicon-chevron-down float-glyph-right"></span>
                  </button>
                  <ul class="dropdown-menu nav-btn-width" aria-labelledby="project2Menu">
                    <li><a href="http://p2.sietekk.com">View Project 2</a></li>
                    <li><a href="https://github.com/sietekk/cscie15.project2">Project 2 Source Code</a><li>
                  </ul>
              </li>
              <li role="presentation" class="dropdown">
                  <button class="dropdown-toggle nav-btn-width btn btn-default navbar-btn" role="button" id="project3Menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Project 3
                    <span class="glyphicon glyphicon-chevron-down float-glyph-right"></span>
                  </button>
                  <ul class="dropdown-menu nav-btn-width" aria-labelledby="project3Menu">
                    <li><a href="http://p3.sietekk.com">View Project 3</a></li>
                    <li><a href="https://github.com/sietekk/cscie15.project3">Project 3 Source Code</a><li>
                  </ul>
              </li>
              <li role="presentation" class="dropdown">
                  <button class="dropdown-toggle nav-btn-width btn btn-default navbar-btn" role="button" id="project4Menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Project 4
                    <span class="glyphicon glyphicon-chevron-down float-glyph-right"></span>
                  </button>
                  <ul class="dropdown-menu nav-btn-width" aria-labelledby="project4Menu">
                    <li><a href="http://p4.sietekk.com">View Project 4</a></li>
                    <li><a href="https://github.com/sietekk/cscie15.project4">Project 4 Source Code</a><li>
                  </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Header -->
      <div class="page-header">
        <h1>Project 3 <small>Developers Best Friend</small></h1>
      </div>
      <!-- Page Content -->
      <div id="main-container">
        @yield('content')
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ elixir("js/bundle.js") }}"></script>
  </body>
</html>
