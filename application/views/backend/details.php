

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

            <!--everything else-->
    </div>
    <br>
    <div class=" container panel panel-primary " style="margin-top: 40px;">
            <div class="panel-heading lead">
                <div class="row" style="align-self: inherit;">
                    <div class="col-lg-10 col-md-10 col-sm-10"> <?php echo $info['cart'];?></div>
                    <div class="col-lg-2 col-md-2 col-sm-2 text-right">
                        <div class="btn-group text-center">
                            <a <?php echo 'href="' . $url . 'Admin/edit/' .$info['id']. '"'; ?> class="btn btn-danger  btn-default"><i class="fa fa-edit fa-1x"></i></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-body">

                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#Summery" class="text-primary"><i class="fa fa-indent"></i> Log Details</a></li>  
                                    </ul>

                                    <div class="tab-content">
                                        <div id="Summery" class="tab-pane fade in active">

                                            <div class="table-responsive panel">
                                                <table class="table">
                                                    <tbody>
    
                                                            <tr>
                                                                <td class="text-primary"><i class="fa fa-user"></i> Category</td>
                                                                <td><?php echo $info['subcart'];?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-primary"><i class="fa fa-list-ol"></i> Summary</td>
                                                                <td><?php echo $info['summary'];?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-primary"><i class="fa fa-list-ol"></i> Fault Descption</td>
                                                                <td><?php echo $info['fault'];?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-primary"><i class="fa fa-book"></i> Solution</td>
                                                                <td><?php echo $info['solution'];?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-primary"><i class="fa fa-book"></i> Location</td>
                                                                <td><?php echo $info['area'];?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-primary"><i class="fa fa-group"></i> Status info</td>
                                                                <td><?php echo $info['status'];?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-primary"><i class="fa fa-calendar"></i> Date &amp; Time</td>
                                                                <td><?php echo $info['date'];?> <?php echo $info['time'];?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-primary"><i class="fa fa-user"></i> Logged By</td>
                                                                <td><?php echo $info['empuser'];?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-primary"><i class="fa fa-user"></i> Editted</td>
                                                                <td><?php echo $info['superuser'];?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-primary"><i class="fa fa-calendar"></i>supervisor</td>
                                                                <?php if($info['apvlstatus'] == 0):?>
                                                                    <td>
                                                                        <p class="lead pull-right" style="color: red; padding-right: 20px">
                                                                            Not Signed
                                                                        </p>
                                                                    </td>
                                                                <?php else: ?>
                                                                    <td>
                                                                        <p>
                                                                            <?php echo $info['apvlcomment'];?>
                                                                        </p>
                                                                        <p class="lead pull-right" style="padding-right: 20px">
                                                                            Log Signed - <?php echo $info['apvuser'];?>
                                                                        </p>
                                                                        
                                                                    </td>
                                                                <?php endif?>
                                                            </tr>
                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>

                                    </div>

                                </div>
        </div>
   
