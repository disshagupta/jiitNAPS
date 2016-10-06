<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="projects.css" rel="stylesheet" type="text/css">
  </head><body class="">
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span>jiit NAPS</span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <a href="main-page.html">Home</a>
            </li>
            <li class="">
              <a href="about-us.html">About Us</a>
            </li>
            <li>
              <a href="feedback.html">FEEDBACK</a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">TO<br><i class="fa fa-caret-down fa-fw"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="notices.html">NOTICES</a>
                </li>
                <li>
                  <a href="assignments.html">ASSIGNMENTS</a>
                </li>
                <li>
                  <a href="projects.html">PROJECTS</a>
                </li>
                <li>
                  <a href="societies.html">SOCIETIES</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="logout.php">Logout</a>
            </li>
          </ul>
          <p class="navbar-left navbar-text">MY BUISSNESS IS READY FOR THE BUISSNESS</p>
        </div>
      </div>
    </div>
    <div class="section text-left">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 contenteditable="true">PROJECTS</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="jumbotron text-left box">
              <h2>share your minor, major or any other project with faculty and students.</h2>
              <p class="text-info"></p>
                <a class="btn btn-danger btn-large btn-lg" href="create_project.html">create&nbsp;</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>List of projects</h1>
          </div>
        </div>
        <!-- PHP CODE # TO EXTRACT PROJECT DETAILS INTO THIS HTML PAGE -->
        <?php 
        require( 'check_session.php'); 
        require( 'db_init_.php'); 
        $table="projects";
        $sql_4="SELECT * FROM $table ORDER BY `time` DESC " ;
        $result = mysqli_query($conn,$sql_4);  
        $count =  $result->num_rows; 
            
            if($count >0) { 
                    while($row = $result->fetch_assoc())
                            { 
                                $emailid = $row["emailid"]; 
                                $title = $row["title"]; 
                                $grpmem = $row["grpmem"];
                                $desc = $row["desc"]; 
                                $github = $row["github"]; 
                                $website = $row["website"];
                                $type = $row["type"]; 
         ?>                       
        <div class="row">
          <div class="col-md-12">
            <div class="jumbotron text-left">
              <div class="section">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <h3>
                        <?php echo "$title" ?>
                      </h3>
                      <h4 class="text-danger text-left">
                        <span class="label label-danger">
                          <?php echo "$type" ?>
                        </span>
                      </h4>
                      <h4 class="text-left">
                        <?php echo "$grpmem" ?>
                      </h4>
                      <p>
                        <?php echo "$desc" ?>
                      </p>
                    </div>
                    <div class="col-md-6">
                      <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png" class="img-responsive">
                    </div>
                  </div>
                </div>
              </div>
            </div><hr>
          </div>
        </div>
        <?php }} ?>
      </div>
    </div>
    <footer class="section section-primary">
      <div class="container ">
        <div class="row ">
          <div class="col-sm-6 ">
            <h1>This is a minor project</h1>
            <p class="lead ">- Sanket Deshpande
              <br>- Rishabh Agarwal
              <br>- Disha Gupta</p>
          </div>
          <div class="col-sm-6 ">
            <p class="lead text-right text-warning "></p>
            <div class="row ">
              <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left ">
                <a href="# "><i class="fa fa-3x fa-fw fa-instagram text-inverse "></i></a>
                <a href="# "><i class="fa fa-3x fa-fw fa-twitter text-inverse "></i></a>
                <a href="# "><i class="fa fa-3x fa-fw fa-facebook text-inverse "></i></a>
                <a href="# "><i class="fa fa-3x fa-fw fa-github text-inverse "></i></a>
              </div>
            </div>
            <div class="row ">
              <div class="col-md-12 hidden-xs text-right ">
                <a href="# "><i class="fa fa-3x fa-fw fa-facebook text-inverse "></i></a>
                <a href="# "><i class="fa fa-3x fa-fw fa-github text-inverse "></i></a>
              </div>
            </div>
            <p class="lead text-right text-warning ">
              <br>
              <br>Are we killing it yet ?</p>
          </div>
        </div>
      </div>
    </footer>
  

</body></html>