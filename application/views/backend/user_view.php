<!DOCTYPE html>
<html lang="en">
<head>
	<title>View User Tabulation</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="Tenison" content="">

 

    <!-- Bootstrap Core CSS -->

    <link href="<?php echo $url;?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Include Bootstrap Datepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

    

    <!-- Custom CSS -->
    <link href="<?php echo $url;?>css/sb-admin-2.css" rel="stylesheet">
    <!--<link href="<?php //echo $url;?>css/backend/bootstrap-datetimepicker.min.css" rel="stylesheet">-->
    <!-- Morris Charts CSS -->
    

    <!-- Custom Fonts -->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <br>
		<div class="container">
			<!-- /.row -->
			<div class="row">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4><i class="fa fa-fw fa-compass"></i>Admin Members</h4>
							
						</div>
						<div class="panel-body">
						<?php foreach ($result as $member ) : ?>
						<div class="col-md-12">
						<hr>
							
							<div class="col-md-3">
								<h4>User Name </h4>
								<?=  $member['username']  ?>
							</div>

							<div class="col-md-3">
								<h4>Full Name </h4>
								<?=  $member['name']  ?>
							</div>
							
							<div class="col-md-3">
								<h4>User Group</h4>
								<?php if ($member['level'] == '0' ):?>
								<?php echo "High Clearance"  ;?>
								<?php endif;?>
								<?php if ($member['level'] == '1' ):?>
								<?php  echo "Low Clearance"  ;?>
								<?php endif;?>
								
							</div>

							<div class="col-md-3">
								<p></p>
								<p></p>
								<h4>User Action</h4>
								<?php if ($member['level'] == '1' ):?>
									<a class="btn btn-danger confirmation" href="<?php echo base_url();?>Adim_login/delUser/<?php echo $member['id']; ?>/"> Delete </a>
								<?php endif;?>
								
							</div>
						</div>
						<?php endforeach; ?>	
						</div>
					</div>
				
			</div>
			<!-- /.row -->
			
			<!-- Features Section -->
			
			<!-- /.row -->
			
		</div>
		<!-- /.container -->


   <!-- Core JavaScript Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>



    <!-- Bootstrap Core JavaScript -->
    <!--<script src="<?php //echo $url;?>js/bootstrap.min.js"></script>-->


  

    <!-- Custom Theme JavaScript -->
    <script type="text/javascript" src="<?php echo $url;?>js/sb-admin-2.js"></script>

<script type="text/javascript">
    $('.confirmation').on('click', function () {
        return confirm('Are you sure you want to delete this?');
    });
</script>
</body>
</html>