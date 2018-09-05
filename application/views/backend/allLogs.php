<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $url;?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $url;?>css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo $url;?>css/view.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    

    <!-- Custom Fonts -->
    <link href="<?php echo $url;?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
        <section>
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
        </section>
  <section class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <h4> Showing All logs in the Database</h4>  
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group pull-right">
                            <input type="text" class="search form-control" placeholder="What you looking for?">
                        </div>
                        <span class="counter pull-right hush"></span>
                    </div>
                </div>



                            <div class="row">
                                <table width="100%" class="table table-striped table-hover results">
                                    <thead>
                                        <tr>
                                            <th>Fault Report Summary</th>
                                            <th>Category</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Status</th>
                                        </tr>
                                        <tr class="warning no-result">
                                          <td colspan="6"><i class="fa fa-warning"></i> No result</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        //var_dump($coms);
                                        foreach ($all as $key ) {
                                            echo "<tr>";
                                            echo '<td><a href="'.$url.'Admin/details/'. $key['id'] .'">'. $key['summary']. "</a></td>";
                                            echo "<td>". $key['subcart'] . " - " . $key['area'] . "</td>";
                                            echo "<td>". $key['date']. "</td>";
                                            echo "<td>". $key['time']. "</td>";
                                            switch ($key['status']) {
                                                    case 'Solved':
                                                        echo "<td>". '<i class="fa fa-check" style="color:green;"></i> &nbsp'. $key['status'] ."</td>";
                                                        break;
                                                    
                                                    case 'Monitoring':
                                                        echo "<td>". '<i class="fa fa-wrench" style="color:orange;"></i> '. $key['status'] ."</td>";
                                                        break;
                                                    
                                                    case 'Pending':
                                                        echo "<td>". '<i class="fa fa-exclamation " style="color:red;"></i>  &nbsp&nbsp'. $key['status'] ."</td>";
                                                        break;
                                                    
                                                    default:
                                                        echo "<td>". $key['status'] ."</td>";
                                                        break;
                                            };
                                            echo '<td>
                                                                    <a href="' . $url . 'Admin/edit/' .$key['id']. '" class="btn btn-info">Edit</a>                                                       
                                                                    </td>';
                                            echo "</tr>";
                                        }                            
                                        ?>
                                    </tbody>
                                </table>
                        <div class="form-group pull-right">
                            <p style="letter-spacing: 3px;"><?php echo $links; ?></p>
                        </div>
                            </div>

                </section>


    </div>
    <!-- /#wrapper -->
    <!-- /#wrapper -->

   <!-- Core JavaScript Files -->
    <!-- Core JavaScript Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>


   

  

    <!-- Custom Theme JavaScript -->
    <script type="text/javascript" src="<?php echo $url;?>js/sb-admin-2.js"></script>
     <script src="<?php echo $url;?>js/view.js"></script>

</body>

</html>