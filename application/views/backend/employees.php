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
                        <a href="<?php echo $url;?>Admin/employees">
                            <i class="fa fa-arrow-right  fa-fw"></i> Employees
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
        <section class="container" style="margin-top: 20px;">
            <h2>Create New Employee</h2>
            <p class="bg-success">
                <?php if($this->session->flashdata('created')):?>
                    <?php echo $this->session->flashdata('created');?>
                <?php endif;?>     
            </p>
            <?php $attributes= array('id'=>'resgister_form','class'=>'form_horizontal');?>
            <?php echo validation_errors("<p class='bg-danger'></p>");?>
            <div class="container col-md-8">
                <?php echo form_open('Admin/employees',$attributes);?>
                <div class="form-group">
                    <?php echo form_label('Full Name');?>
                    <?php 
                    $data=array(
                        "class"=>'form-control',
                        "name" => 'emp_name',
                        "placeholder" => 'Enter Your Full Name'
                    );
                    ?>
                    <?php echo form_input($data); ?>
                </div>
            </div>
            <div class="container col-md-4">
                <div class="form-group">
                    <?php echo form_label('Employee ID Number');?>
                    <?php 
                    $data=array(
                        "class"=>'form-control',
                        "name" => 'emp_id',
                        "placeholder" => 'Enter Your Employee ID'
                    );
                    ?>
                    <?php echo form_input($data); ?>
                </div>        
            </div>
            <div class="container">
                <div class="form-group">
                    <?php
                    $data = array(
                        "class" => 'btn btn-primary',
                        "name" => 'submit',
                        "value" => 'Register'
                    );
                    ?>
                    <?php echo form_submit($data); ?>
                </div>        
            </div>
            <?php echo form_close(); ?>  

            <br>
            <div class="container">
                <!-- /.row -->
                <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php foreach ($empsData as $member ) : ?>
                                    <div class="col-md-12">
                                    <hr>
                                        
                                        <div class="col-md-5">
                                            <h4>User Name </h4>
                                            <?=  $member->emp_name?>
                                        </div>

                                        <div class="col-md-4">
                                            <h4>ID Number </h4>
                                            <?=  $member->emp_id ?>
                                        </div>

                                        <div class="col-md-3">
                                            <p></p>
                                            <p></p>
                                            <h4>User Action</h4>
                                                <a class="btn btn-danger confirmation" href="<?php echo base_url();?>Adim_login/delEmp/<?php echo $member->id; ?>/"> Delete </a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>    
                            </div>
                        </div>
                </div>                
            </div>
        </section>
