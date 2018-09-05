                            <!-- /input-group -->

<section class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <h4> Advanced CNS Database Tables</h4>  
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
                                          <td colspan="5"><i class="fa fa-warning"></i> No result</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        //var_dump($coms);
                                        foreach ($all as $key ) {
                                            echo "<tr>";
                                            echo '<td><a href="'.$url.'view/details/'. $key['id'] .'">'. $key['summary']. "</a></td>";
                                            echo "<td>". $key['subcart'] . "-" . $key['area'] . "</td>";
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
                                            echo "</tr>";
                                        }                            
                                        ?>
                                    </tbody>
                                </table>
                        <div class="form-group pull-right">
                            <p style="letter-spacing: 3px;"><?php echo $links; ?></p>
                        </div>
                            </div>
                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>DataTables Usage Information</h4>
                                <p>DataTables is a very flexible, displaying <strong>50 items</strong> on a screen. In Admin, we can edit, delete and update the DATA here.</p>
                            </div>

</section>

