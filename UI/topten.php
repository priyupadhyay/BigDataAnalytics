<?php
include 'pages/header.php';
include 'pages/nav.php';
?>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
               
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Top Ten districts with highest Aadhar resgistrations</h4>
                                <p class="category">Male</p>
                            </div>
                            <div class="content">
                                <!-- chart here -->
                                <div class="col-md-12" align="center"> <img id="waitmale" class="" src="assets/img/waiting.gif"/></div>
                               
                            <canvas id="maleChart" width="400"></canvas>
                            <script> 
                            var disttname =[];
                            var disttcount =[];
                            $(function () {
                                $('#waitmale').hide();
                                    $.ajax({
                                    url: '../jsons/genderM.json',
                                    beforeSend: function(){
                                        $('#waitmale').show();
                                    }
                                })
                                .done(function(data){
                                   $("#timeM").html('<i class="fa fa-circle text-info"></i> Hadoop took <strong>'+data.time.mr+'</strong> ms to process<br><i class="fa fa-circle text-warning"></i> Hive took <strong>'+data.time.hive+'</strong> ms to process<br> <i class="fa fa-circle text-success"></i> Spark took <strong>'+data.time.spark+'</strong> ms to process');
                                    $('#waitmale').hide();
                                    
                                     for (var key in data.data) {
                                             console.log(data.data[key].District);
                                             console.log(data.data[key].Count);
                                             disttname.push(data.data[key].District);
                                             disttcount.push(data.data[key].Count);
                                        }

                                var ctx = document.getElementById("maleChart").getContext('2d');

                                data = {
                                        datasets: [{
                                            data: disttcount,
                                        
                                             backgroundColor: [
                                                            'rgba(46, 204, 113,0.8)',
                                                            'rgba(52, 152, 219,0.8)',
                                                            'rgba(155, 89, 182,0.8)',
                                                            'rgba(231, 76, 60,0.8)',
                                                            'rgba(230, 126, 34,0.8)',
                                                            'rgba(243, 156, 18,0.8)',
                                                            'rgba(52, 73, 94,0.8)',
                                                            'rgba(41, 128, 185,0.8)',
                                                            'rgba(189, 195, 199,0.8)',
                                                            'rgba(255, 206, 86, 0.8)'
                                                        ]
                                        }],

                                        // These labels appear in the legend and in the tooltips when hovering different arcs
                                        labels: disttname
                                    };
                           var myDoughnutChart = new Chart(ctx, {
                                type: 'doughnut',
                                data: data
                            });
                            //console.log(data);
                             
                                    
                                    })
                                .fail(function() {
                                    //toggleAddRemove(questionID);
                                    $('#status').html("<strong>An Error Occured.</strong>");
                                })});



                            
                            </script>

                                <!-- chart ends here -->
                        </div>
                                    <div class="footer">
                                    <div class="stats">Processing time
                                    </div>
                                    <hr>
                                    <div class="legend" id="timeM">
                                        <i class="fa fa-circle text-info"></i> Hadoop took <strong>899048</strong> ms to process<br>
                                        <i class="fa fa-circle text-warning"></i> Hive took <strong>899048</strong> ms to process<br>
                                        <i class="fa fa-circle text-success"></i> Spark took <strong>89904</strong> ms to process
                                    </div>
                                    
                                    
                                </div>
                            </div>

                            
                        </div>
                    

                </div>

                <!-- another one -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Top Ten districts with highest Aadhar resgistrations</h4>
                                <p class="category">Female</p>
                            </div>
                            <div class="content">
                                <!-- chart here -->
                                <div class="col-md-12" align="center"> <img id="waitfemale" class="" src="assets/img/waiting.gif"/></div>
                               
                            <canvas id="femaleChart" width="400"></canvas>
                            <script> 
                            var disttname2 =[];
                            var disttcount2 =[];
                            $(function () {
                                $('#waitfemale').hide();
                                    $.ajax({
                                    url: '../jsons/genderF.json',
                                    beforeSend: function(){
                                        $('#waitfemale').show();
                                    }
                                })
                                .done(function(data){
                                   //console.log(data);
                                    $('#waitfemale').hide();
                                    
                                     for (var key in data.data) {
                                             console.log(data.data[key].District);
                                             console.log(data.data[key].Count);
                                             disttname2.push(data.data[key].District);
                                             disttcount2.push(data.data[key].Count);
                                        }

                                var ctx2 = document.getElementById("femaleChart").getContext('2d');

                                data2 = {
                                        datasets: [{
                                            data: disttcount2,
                                        
                                             backgroundColor: [
                                                            'rgba(46, 204, 113,0.8)',
                                                            'rgba(52, 152, 219,0.8)',
                                                            'rgba(155, 89, 182,0.8)',
                                                            'rgba(52, 73, 94,0.8)',
                                                            'rgba(41, 128, 185,0.8)',
                                                            'rgba(231, 76, 60,0.8)',
                                                            'rgba(230, 126, 34,0.8)',
                                                            'rgba(243, 156, 18,0.8)',
                                                            'rgba(189, 195, 199,0.8)',
                                                            'rgba(255, 206, 86, 0.8)'
                                                        ]
                                        }],

                                        // These labels appear in the legend and in the tooltips when hovering different arcs
                                        labels: disttname2
                                    };
                           var myDoughnutChart = new Chart(ctx2, {
                                type: 'doughnut',
                                data: data2
                            });

                                  $("#timeF").html('<i class="fa fa-circle text-info"></i> Hadoop took <strong>'+data.time.mr+'</strong> ms to process<br><i class="fa fa-circle text-warning"></i> Hive took <strong>'+data.time.hive+'</strong> ms to process<br> <i class="fa fa-circle text-success"></i> Spark took <strong>'+data.time.spark+'</strong> ms to process');  
                                    })
                                .fail(function() {
                                    //toggleAddRemove(questionID);
                                    $('#status').html("<strong>An Error Occured.</strong>");
                                })});



                            
                            </script>

                                <!-- chart ends here -->
                        </div>
                                    <div class="footer">
                                    <div class="stats">Processing time
                                    </div>
                                    <hr>
                                    <div class="legend" id="timeF">
                                        <i class="fa fa-circle text-info"></i> Hadoop took <strong>899048</strong> ms to process<br>
                                        <i class="fa fa-circle text-warning"></i> Hive took <strong>899048</strong> ms to process<br>
                                        <i class="fa fa-circle text-success"></i> Spark took <strong>89904</strong> ms to process
                                    </div>
                                    
                                    
                                </div>
                            </div>

                            
                        </div>
                    </div>

                </div>



               
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <!-- <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul> -->
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">Hadoop Team</a>, made with love for Persistent Systems Ltd.
                </p>
            </div>
        </footer>

    </div>


<?php

include 'pages/footer.php';
?>