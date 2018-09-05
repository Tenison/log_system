<?php
function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}
?>

<body>

    <div id="wrapper" class="container">

        <!-- Navigation -->
        <nav>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a href="<?php echo $url;?>Admin">
                        <i class="fa fa-home fa-fw"></i> Home
                    </a>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a href="<?php echo $url;?>Admin/approval">
                        <i class="fa fa-arrow-right  fa-fw"></i> Approval
                    </a>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a href="<?php echo $url;?>Admin/register">
                        <i class="fa fa-cog  fa-fw"></i> Register
                    </a>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a href="<?php echo $url;?>Adim_login/user_logout">
                        <i class="fa fa-sign-out fa-fw"></i> logout
                    </a>
                </li>
            </ul>

        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard <a class="btn btn-primary pull-right" href="<?php echo $url;?>Admin/print_logs">Print Logs</a></h1><p class="lead">Welcome <?php echo $this->session->userdata('empname'); ?></p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-sign-in fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $all?></div>
                                    <div><strong> All Logs</strong></div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo $url;?>Admin/viewAll">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $solved?></div>
                                    <div><strong>Solved</strong></div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo $url;?>Admin/viewstat/Solved">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-arrows-alt fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $monitor?></div>
                                    <div><strong>Monitoring</strong></div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo $url;?>Admin/viewstat/Monitoring">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $pending?></div>
                                    <div><strong>Pending</strong></div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo $url;?>Admin/viewstat/Pending">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <p></p>
            <p></p>
            <!--everything else-->
            <section>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="chat">
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img  style="width: 60px; height: 47px " src="<?php echo $url;?>img/GCAA.jpg" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Daily Logs</strong>
                                            <small class="pull-right text-muted">
                                                <a class="btn btn-primary" href="<?php echo $url;?>Admin/search">Advance Search</a>
                                            </small>
                                        </div>
                                        <p>
                                            Edit and view <a class="btn btn-primary" href="<?php echo $url;?>Admin/viewToday">All Today's</a> Logs at one place. The table below gives an overview of logs
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    <!-- /.panel .chat-panel -->
            </section>

            <div style="width: 80%; margin: auto;" class="list-group">
              <a class="list-group-item d-flex justify-content-between align-items-center" href="<?php echo $url;?>Admin/view/Research_and_development" class="list-group-item"><strong>Research and Development</strong>
              <span class="badge badge-primary badge-pill"><?php echo $rad?></span>
              </a>
              <a class="list-group-item d-flex justify-content-between align-items-center" href="<?php echo $url;?>Admin/view/Communication" class="list-group-item"><strong>Communication</strong>
              <span class="badge badge-primary badge-pill"><?php echo $coms?></span>
              </a>
              <a class="list-group-item d-flex justify-content-between align-items-center" href="<?php echo $url;?>Admin/view/Navigation" class="list-group-item"><strong>Navigation</strong>
              <span class="badge badge-primary badge-pill"><?php echo $nav?></span>
              </a>
              <a class="list-group-item d-flex justify-content-between align-items-center" href="<?php echo $url;?>Admin/view/Surveillance" class="list-group-item"><strong>Surveillance</strong>
              <span class="badge badge-primary badge-pill"><?php echo $sur?></span>
              </a>
              <a class="list-group-item d-flex justify-content-between align-items-center" href="<?php echo $url;?>Admin/view/Weather_System" class="list-group-item"><strong>Weather System</strong>
              <span class="badge badge-primary badge-pill"><?php echo $wet?></span>
              </a>
            </div>
  
                <p></p>
                <p style="margin-right: 20px; margin-left: 20px; margin-top:15px; text-align: center;" class="alert alert-info" role="alert">
                  Section Links shows Logs for the past<strong> 7 DAYS</strong>  please click <strong>Advance Search</strong> to view specific Dates, <strong> OR </strong> the <strong>BLUE ALL LOGS PANE</strong> for All logs
                </p>
        </div>
        <!-- /#page-wrapper -->

    </div>
 


<script>
history.pushState(null, document.title, location.href);
window.addEventListener('popstate', function (event)
{
  history.pushState(null, document.title, location.href);
});
</script> 

