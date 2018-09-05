<body>

    <div id="wrapper">
        <nav>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links">
                <li class="dropdown">
                    <a href="<?php echo $url;?>Admin">
                        <i class="fa fa-home fa-fw"></i> Back Home
                    </a>
                </li>
        </nav>          
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
<div class="container" style="padding-bottom: 20px;">
  <form class="" action="print_logs" method="post">
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
            <div class="col-sm-1 col col-md-1 col-lg-1" style="padding-bottom: 20px">
              <button type="submit" class="btn btn-info">Search</button> 
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2">
              <button onClick="window.print()" style="padding-left: 20px; padding-right: 20px;" class="btn btn-danger">Print</a> 
            </div>
          </div>
        </section>
      </fieldset>
    </form>
</div>
</section>
            <!--everything else-->
            <!-- /.row -->
            <div class="container">
            <?php foreach ($dailyinfo as $info ) : ?>
            <div class="panel-body">
                <div class="tab-content">
                    <div id="Summery" class="tab-pane fade in active">
                        <div class="table-responsive panel">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="text-primary col-md-2"><i class="fa fa-user"></i> Category</td>
                                        <td class="col-md-10"><?php echo $info['cart'];?>, <?php echo $info['subcart'];?></td>
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
                                        <p class="lead pull-right" style="padding-right: 20px; color: red">
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
            <hr>
            <?php endforeach; ?>
        </div>