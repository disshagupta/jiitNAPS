<html><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
    </head><body>
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
                            <a href="#">Logout</a>
                        </li>
                    </ul>
                    <p class="navbar-left navbar-text">MY BUSINESS IS READY FOR THE BUSINESS</p>
                </div>
            </div> </div>
            <div class="section text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Notices</h1>
                        </div>
                    </div>
                    <!-- PHP CODE # TO EXTRACT PROJECT DETAILS INTO THIS HTML PAGE -->
                    <?php 
                    require( 'check_session.php');
                     require( 'db_init_.php');
                      $table="notices" ;
                       $sql_6="SELECT * FROM $table ORDER BY `time` DESC " ; // SQL query 
                       $result6=$conn->query($sql_6);
                        $count = $result6->num_rows;
                         if($count >0) 
                           { ?>
                               <div class="col-md-12"><table class="table">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>WHO</th>
                                  <th>WHAT</th>
                                  <th>WHEN</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                             <?php       
                             while($row = $result6->fetch_assoc())
                              { $title = $row["title"]; 
                                $notice = $row["notice"];
                                $from = $row["from"];
                                $to = $row["to"];
                                $time = $row["time"];
                                $subject= $row["subject"]; 
                                ?>
                       
                          
                                    <tr>
                                      <td>1</td>
                                      <td><?php echo $from; ?></td>
                                      <td><?php echo $title; ?></td>
                                      <td><?php echo $time; ?></td>
                                    </tr>
                                    
                               
                        
                        <?php } } ?>
                           </tbody>
                               </table>
                              </div>
                </div>
            </div>
        

    

</body></html>