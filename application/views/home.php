
<?php
if (!empty($coms)) { 
?>
    <section id="1" class="intro">
        <div class="intro-body">

            <h3>Communication</h3>
            <p></p>
            <div class="row">
                <div class="col-sm-9 col-md-9 col-lg-9">
                    <?php
                         echo '<table id="myTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Fault</th>
                                    <th></th>
                                    <th>Time</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>';

                                    foreach ($coms as $key ) {
                                        echo "<tr>";
                                        echo '<td><a href="'.$url.'home/details/'. $key['id'] .'">'. $key['summary']. "</a></td>";
                                        echo "<td>". $key['subcart'] . " - " . $key['area'] . "</td>";
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
                                        }
                                        echo "</tr>";
                                    }                            

                        echo'</tbody>
                        </table>';
                        
                    ?>

                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    
                    <div class="panel panel-default">
                        <div style="text-align: center;" class="panel-body">
                            <img style="width: 90%;" src="<?php echo $url;?>img/GCAA.jpg">
                        </div>
                    </div>
                </div>

            </div>       
        </div>
    </section>
<?php }else if(empty($sur) and empty($nav) and empty($rad) and empty($wet)){ ?>
    <section class="intro intro-body">
            <div class="row one">
                <div style="margin-right: 20px; margin-left: 20px;" class="alert alert-danger" role="alert">
                  <strong>No new logs found today !!! Oh snap! </strong>  please click view for All logs
                </div>
            <!--<div class="bon col-sm-6 col-md-6 col-lg-6">-->
                <div  style="text-align: center;" class="image">
                    <img src="<?php echo $url;?>img/GCAA.jpg">
                </div>
                <?php
                    $rand_keys = array_rand($comsinfo);
                    echo '<h3>'.$comsinfo[$rand_keys]["header"].'</h3>';
                    echo '<p>'.$comsinfo[$rand_keys]["content"].'</p>';                   
                ?>
                <button style="margin-bottom: 20px;" type="button" class="btn btn-info"  value="Refresh" onClick="window.location.reload()">More Info</button>
               <i style="padding: 10px;"> Have fun!!!</i> 
            <!--</div>
            <div class="ban col-sm-6 col-md-6 col-lg-6">
                <?php
                    //$rand_keys = array_rand($navinfo, 2);
                    //foreach ($rand_keys as $key ) {
                    //    echo '<h3>'.$navinfo[$key]["header"].'</h3>';
                    //    echo '<p>'.$navinfo[$key]["content"].'</p>';
                    //}                       
                ?>
            </div>-->
        </div>
    </section>
<?php }else ;// do nothing}?>
    <!--Nav and Sur-->
    <section class="intro">
        <div class="intro-body">
            <div class="row">
               <div class="col-sm-9 col-md-9 col-lg-9">
                <?php if(!empty($nav)) { ?>
                    <p id="2"></p>
                    <h3>Navigation</h3>
                    <p></p>
                    <div class="">
                    <?php
                         echo '<table id="myTable1" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Fault</th>
                                    <th></th>
                                    <th>Time</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>';

                                    foreach ($nav as $key ) {
                                        echo "<tr>";
                                        echo '<td><a href="'.$url.'home/details/'. $key['id'] .'">'. $key['summary']. "</a></td>";
                                        echo "<td>". $key['subcart'] . " - " . $key['area'] . "</td>";
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
                                        }
                                        echo "</tr>";
                                    }                            

                        echo'</tbody>
                        </table>';
                    ?>
                </div>
            <?php
                }else{
                        echo "<p></p>";
                        $rand_keys = array_rand($surinfo, 2);
                        foreach ($rand_keys as $key ) {
                        echo '<h3>'.$surinfo[$key]["header"].'</h3>';
                        echo '<p>'.$surinfo[$key]["content"].'</p>';
                        }                       
                }
            ?>
                <!--sur-->
                <p id="3"></p>
               <h3>Surveillance</h3>
               <p></p>
                    <?php
                        if (!empty($sur)) {
                         echo '<table id="myTable2" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Fault</th>
                                    <th></th>
                                    <th>Time</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>';

                                    foreach ($sur as $key ) {
                                        echo "<tr>";
                                        echo '<td><a href="'.$url.'home/details/'. $key['id'] .'">'. $key['summary']. "</a></td>";
                                        echo "<td>". $key['subcart'] . " - " . $key['area'] . "</td>";
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
                                        }
                                        echo "</tr>";
                                    }                            

                        echo'</tbody>
                        </table>';
                        }
                        else{
                        echo ' 
                            <div  id="map" style="width:100%;height:350px;background:#2D2D2D;padding-buttom:5px;"></div>

                            <script>
                            function myMap() {
                            var mapOptions = {
                                center: new google.maps.LatLng(5.606877350294091, -0.1681674792235981),
                                zoom: 12,
                              
                            }
                            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
                            }
                            </script>';
                        }
                    ?>
                </div>
                    <div class="call-section col-sm-3 col-md-3 col-lg-3">
                        <h5></h5>
                        <div class="alert alert-info" role="alert">
                          <strong>NEW LOGS UNDER :</strong>
                        </div>
                        <p>
                        <?php
                            if (!empty($coms)) echo '<a href="#1">'."Communication". '</a>' . '<br>';
                            if (!empty($sur)) echo '<a href="#1">' . "Surveillance" . '</a>' . '<br>';
                            if (!empty($rad)) echo '<a href="#4">' . "R &amp; D" . '</a>' . '<br>';
                            if (!empty($nav)) echo '<a href="#2">' . "Navigation" . '</a>' .'<br>';
                            if (!empty($wet)) echo '<a href="#5">' . "Weather System" . '</a>' . '<br>';
                        ?>
                        </p>
                        <div class="alert alert-info" role="alert">
                          <strong>CNS call centers</strong>
                        </div>   
                            <p class="lead"><hr>
                                Accra: 81001 <br><hr>
                                Kumasi: 81002<br><hr>
                                Tamale: 81003<br><hr>
                                Sunyani: 81004<br><hr>
                                Danger Room: 1428<br><hr>
                                PABX: 1407<br>
                            </p>
                    </div>
              </div>           
        </div>
    </section>
    <?php
        if (!empty($rad)) {
           echo ' <section id="4" class="intro">
                    <div class="intro-body">
                            <p></p>
                            <h3>Research and Development</h3>
                            <p></p>
                            <div class="">

                                 <table id="myTable3" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Fault</th>
                                            <th></th>
                                            <th>Time</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>';

                                            foreach ($rad as $key ) {
                                                echo "<tr>";
                                                echo '<td><a href="'.$url.'home/details/'. $key['id'] .'">'. $key['summary']. "</a></td>";
                                                echo "<td>". $key['subcart'] . " - " . $key['area'] . "</td>";
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
                                                }
                                                echo "</tr>";
                                            }                            

                                echo'</tbody>
                                </table>
                        </div>
                </div>
            </section>';
        }
    ?>
    <?php
        if (!empty($wet)) {
           echo ' <section id="5" class="intro">
                    <div class="intro-body">
                            <p></p>
                            <h3>Weather System</h3>
                            <p></p>
                            <div class="">

                                 <table id="myTable4" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Fault</th>
                                            <th></th>
                                            <th>Time</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>';

                                            foreach ($wet as $key ) {
                                                echo "<tr>";
                                                echo '<td><a href="'.$url.'home/details/'. $key['id'] .'">'. $key['summary']. "</a></td>";
                                                echo "<td>". $key['area'] . "</td>";
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
                                                }
                                                echo "</tr>";
                                            }                            

                                echo'</tbody>
                                </table>
                        </div>
                </div>
            </section>';
        }
    ?> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2JDdCXh9oH2JJfFxyR-Y-jNLb-LtMXMM&callback=myMap"></script>