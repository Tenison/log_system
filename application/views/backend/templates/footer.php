    <!-- /#wrapper -->

   <!-- Core JavaScript Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>



    <!-- Bootstrap Core JavaScript -->
    <!--<script src="<?php //echo $url;?>js/bootstrap.min.js"></script>-->



    <!--<script src="<?php //echo $url;?>js/backend/bootstrap-datetimepicker.min.js"></script>-->
        <script src="<?php echo $url;?>js/backend/<?php echo $js;?>.js"></script>
  

    <!-- Custom Theme JavaScript -->
    <script type="text/javascript" src="<?php echo $url;?>js/sb-admin-2.js"></script>

<script type="text/javascript">
    $('.confirmation').on('click', function () {
        return confirm('Are you sure you want to delete this?');
    });
</script>
</body>

</html>
