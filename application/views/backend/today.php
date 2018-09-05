        


<body>

    <div id="wrapper">
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
  <section class="container">
                <div class="row">
                    <div class="" >
                        <h4> &nbsp &nbspAll Logs for Today</h4>  
                        <p></p>
                    </div>
                </div>



                            <div class="row">
                                <table width="100%" class="table table-striped table-hover results">
                                    <thead>
                                        <tr>
                                            <th>Fault Report Summary</th>
                                            <th>Category</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <tr class="warning no-result">
                                          <td colspan="5"><i class="fa fa-warning"></i> No result</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        //var_dump($coms);
                                        foreach ($dailyinfo as $key ) {
                                            echo "<tr>";
                                            echo '<td><a href="'.$url.'Admin/details/'. $key['id'] .'">'. $key['summary']. "</a></td>";
                                            echo "<td>". $key['subcart'] . " - " . $key['area'] . "</td>";
                                            echo "<td>". $key['date']. "</td>";
                                            switch ($key['status']) {
                                                    case 'Solved':
                                                        echo "<td>". '<i class="fa fa-check" style="color:green;"></i>'. "</td>";
                                                        break;
                                                    
                                                    case 'Monitoring':
                                                        echo "<td>". '<i class="fa fa-wrench" style="color:orange;"></i> ' ."</td>";
                                                        break;
                                                    
                                                    case 'Pending':
                                                        echo "<td>". '<i class="fa fa-exclamation " style="color:red;"></i> ' ."</td>";
                                                        break;
                                                    
                                                    default:
                                                        echo "<td>". $key['status'] ."</td>";
                                                        break;
                                            };
                                            echo '<td>
                                                                    <a href="' . $url . 'Admin/delAll/viewToday' .'/'.$key['id']. '" class="btn btn-danger confirmation">Del</a>                                                        
                                                                  </td>';
                                            echo '<td>
                                                                    <a href="' . $url . 'Admin/edit/' .$key['id']. '" class="btn btn-info">Edit</a>                                                       
                                                                    </td>';
                                            echo "</tr>";
                                        }                            
                                        ?>
                                    </tbody>
                                </table>
                            </div>

                </section>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

