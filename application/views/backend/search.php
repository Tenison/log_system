<body>

    <div id="wrapper" style="margin-bottom: 20px;">
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
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
<div class="container" style="padding-bottom: 20px;">
  <form class="" action="search" method="post">
      <fieldset>
       <section style="padding-top: 50px; text-align: center;">
          <!-- Multiple Radios (inline) -->
          <div class="form-group">
            <div class="col-sm-3 col-md-3 col-lg-3">
              
              <div class="date">
                  <div class="input-group input-append date" id="datePicker">
                      <input type="text" class="form-control" name="date" value='<?php echo $dailyinfo ? $this->session->userdata('date') : "2018-01-01"?>' />
                      <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                  </div>
              </div>
              <label class="control-label">Start Date</label>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">   
              <div class="date">
                  <div class="input-group input-append date" id="datePicker1">
                      <input type="text" class="form-control" name="date1" value='<?php echo $dailyinfo ? $this->session->userdata('date1') : "2018-01-01"?>'/>
                      <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                  </div>
                  <label class="control-label">End Date</label>
              </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4" style="padding-bottom: 10px;">
                                                 
                      <select id="sursubcart" name="cart" class="form-control" >
                          <option value="all">View All Sections</option>
                          <option value="Navigation">Navigation</option>  
                          <option value="Surveillance">Surveillance</option>
                          <option value="Weather System">Weather System</option>
                          <option value="Research and development">Research and development</option>
                          <option value="Communication">Communication</option>

                      </select>      
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2">
              <button type="submit" class="btn btn-info">Search</button> 
            </div>
          </div>
        </section>
      </fieldset>
    </form>
</div>
</section>
            <!--everything else-->
            <?php echo ' <section class="table-intro" style="margin-bottom: 30px;">
                                <div class="intro-body" style="padding-left:10px; padding-right:10px;">
                                        <div class="table-div">

                                            <table id="myTable9" class="table">
                                                <thead>
                                                    <tr>
                                                        <th data-class-name="priority">Fault</th>
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
                                                                    <a href="' . $url . 'Admin/delSearch/' .$key['id']. '" class="btn btn-danger confirmation">Del</a>                                                        
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


<script type="text/javascript">
    var elems = document.getElementsByClassName('confirm');
    var confirmIt = function (e) {
        if (!confirm('Are you sure you want to delete this?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>
