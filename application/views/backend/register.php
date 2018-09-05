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
                    <a href="<?php echo $url;?>Adim_login/viewUsers">
                        <i class="fa fa-user fa-fw"></i>Admin Users
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

    <h2>Admin Register Form</h2>
    <?php $attributes= array('id'=>'resgister_form','class'=>'form_horizontal');?>
    <?php echo validation_errors("<p class='bg-danger'></p>");?>
    <?php echo form_open('Admin/regbtn',$attributes);?>
    <div class="form-group">
        <?php echo form_label('Full Name');?>
        <?php 
        $data=array(
            "class"=>'form-control',
            "name" => 'full_name',
            "placeholder" => 'Enter Your Full Name'
        );
        ?>
        <?php echo form_input($data); ?>
    </div>
    <div class="form-group">
        <?php echo form_label('Login User Name');?>
        <?php 
        $data=array(
            "class"=>'form-control',
            "name" => 'user_name',
            "placeholder" => 'Enter Your User Name'
        );
        ?>
        <?php echo form_input($data); ?>
    </div>
    <p style="color: orange;">Three characters or Above</p>
    <p></p>

    <div class="form-group">
        <?php echo form_label('Pass Word'); ?>
        <?php
        $data = array(
            "class" => 'form-control',
            "name" => 'password',
            "placeholder" => 'Enter Your Password'
        );
        ?>
        <?php echo form_password($data); ?>
    </div>
    <p style="color: orange;">Five characters or Above</p>
    <div class="form-group">
        <?php echo form_label('Confirm Password'); ?>
        <?php
        $data = array(
            "class" => 'form-control',
            "name" => 'passconf',
            "placeholder" => 'Enter Your Confirm Password'
        );
        ?>
        <?php echo form_password($data); ?>
    </div>
    <div class="form-group">
        <?php echo form_label('Select Level : '); ?>
            <div class="form-group">
                <select id="cart" name="level" class="form-control">
                        <option value="1">low Clearance</option>
                        <option value="0">High Clearance</option>
                </select>
            </div>
    </div>

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
    <?php echo form_close(); ?>   
</section>