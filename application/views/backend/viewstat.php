

<body>

    <div id="wrapper" style="margin-bottom: 30px;">
        <section>
            <!-- Navigation -->
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
            <?php echo ' <section class="table-intro">
                                <div class="intro-body" style="padding-left:10px; padding-right:10px;">
                                        <p></p>
                                        <h3> '. $title.' Logs</h3>
                                        <h5 style="color:blue">SHOWING LOGS FOR THE PAST 7 DAYS</h5>
                                        <p></p>
                                        <div class="table-div">

                                            <table id="myTable6" class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Fault</th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>';

                                                        foreach ($dailyinfo as $key ) {
                                                            echo "<tr>";
                                                            echo '<td><a href="'.$url.'Admin/details/'. $key['id'] .'">'. $key['summary']. "</a></td>";
                                                            echo "<td>". $key['subcart'] . " - " . $key['area'] . "</td>";
                                                            echo "<td>". $key['status']. "</td>";
                                                            echo "<td>". $key['date']. "</td>";
                                                            echo '<td>
                                                                    <a href="' . $url . 'Admin/delStat/' . $key['status'].'/'.$key['id']. '" class="btn btn-danger confirmation">Del</a>                                                        
                                                                  </td>';
                                                            echo '<td>
                                                                    <a href="' . $url . 'Admin/edit/' .$key['id']. '" class="btn btn-info">Edit</a>                                                       
                                                                    </td>';
                                                            echo "</tr>";
                                                        }                            

                                            echo'</tbody>
                                        </table>
                                    </div>
                            </div>
                        </section>';
            ?>
        </div>
        <!-- /#page-wrapper -->
               <div style="margin-right: 20px; margin-left: 20px; text-align: center;" class="alert alert-danger" role="alert">
                  showing <strong><?php echo $title; ?></strong> Logs for the past<strong> 7 DAYS!!!</strong>  For more please click <strong>Advance Search</strong> on the Admin Home Screen
                </div>

    </div>
    <!-- /#wrapper -->

