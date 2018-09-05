
<div class=" container panel panel-primary " style="margin-top: 10px;">
            <div class="panel-heading lead">
                <div class="row">
                    <div class="col-lg-8 col-md-8"> <i class="fa fa-power"></i> <?php echo $info['cart'];?></div>
                    <div class="col-lg-4 col-md-4 text-right">

                    </div>
                </div>
            </div>
            <div class="panel-body">

                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#Summery" class="text-success"><i class="fa fa-indent"></i> Log Details</a></li>  
                                    </ul>

                                    <div class="tab-content">
                                        <div id="Summery" class="tab-pane fade in active">

                                            <div class="table-responsive panel">
                                                <table class="table">
                                                    <tbody>
    
                                                            <tr>
                                                                <td class="text-primary"><i class="fa fa-user"></i> Cart</td>
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
        </div>