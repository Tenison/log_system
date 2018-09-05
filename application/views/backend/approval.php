
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
                    <h1 class="page-header">Approve Logs</h1>
                </div>
            </div>
           <h3 class=" container bg-success pull-right">
                <?php if($this->session->flashdata('created')):?>
                    <?php echo '<p class="bg-success">' .$this->session->flashdata('created') .'</p>';?>
                <?php endif;?>     
            </h3>
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
                                                <?=  form_open('Admin/approval/'. $info['id']) ?>
                                                    <kbd><?= validation_errors()?></kbd>
                                                    <textarea id="comment" name="comment" class="form-control" rows="4" placeholder="Please enter Any Comments on the Log Here" ></textarea>
                                                    <p></p>
                                                    <p></p>
                                                    <input name="emp_name" class="form-control" required="true" type="text" value="<?php echo $this->session->userdata('empname'); ?>" readonly>
                                                    <p></p>
                                                    <button type="submit" class="btn btn-info pull-right">Sign Log</button>
                                                <?= form_close() ?>
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
        <!-- /#page-wrapper -->
    </div>
 


<script>
history.pushState(null, document.title, location.href);
window.addEventListener('popstate', function (event)
{
  history.pushState(null, document.title, location.href);
});
</script> 


