<?php
    require('php/user_info.php')
?>
   

   <!--Author: Malek Ben Khalifa
    Date:04-07-2019
    Description: Dashboard.html
-->

<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/script.js"></script>
    <link rel="shortcut icon" href="pic/kcc_Logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <header>
        <div class="dropdown">
            <button class="dropbtn">Admin Name Here</button>
            <div class="dropdown-content">
                <a href="#">Log Out</a>
            </div>
        </div>
        <a href="http://www.kirkwood.edu/" target="_blank"><img src="pic/kirkwood_logo.png"></a>
    </header>

    <div class="tab">
        <button class="tablinks active" onclick="div_flip(event,'dashboard')"><img src="pic/dashboard_logo.png">
            <br>Dashboard</button>
        <button class="tablinks" onclick="div_flip(event,'statistics')"><img src="pic/stat_logo.png">
            <br>Statistics</button>
        <button class="tablinks" onclick="div_flip(event,'email_statue')"><img src="pic/email_logo.png">
            <br>Emails Statue</button>
    </div>

    <div class="container">

        <div id="dashboard" class="tabcontent">
            <div class="dash_container">
                <h1>Welcome To The Survey Manger</h1>
                <div>
                    <a onclick="div_flip(event,'email_statue')" title="See The Survey Statue">
                        <div class="circle_container">
                            <svg viewbox="0 0 36 36" class="circular-chart blue">
                        <path class="circle-bg" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />

                        <path class="circle" stroke-dasharray="75, 100" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                        <text x="18" y="20.35" class="percentage">75%</text>
                    </svg>
                            <h3>Completed Surveys</h3>
                        </div>
                        <div class="circle_container">
                            <svg viewbox="0 0 36 36" class="circular-chart blue">
                        <path class="circle-bg" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />

                        <path class="circle" stroke-dasharray="50, 100" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                        <text x="18" y="20.35" class="percentage">10%</text>
                    </svg>
                            <h3>In Progress Surveys</h3>
                        </div>
                        <div class="circle_container">
                            <svg viewbox="0 0 36 36" class="circular-chart blue">
                        <path class="circle-bg" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />

                        <path class="circle" stroke-dasharray="5, 100" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                        <text x="18" y="20.35" class="percentage">5%</text>
                    </svg>
                            <h3>Not Started Surveys</h3>
                        </div>
                </div>
                </a>
            </div>
        </div>

        <div id="statistics" class="tabcontent" style="display: none;">
            <!------ statistic going to present here--->
            <div id="map">
                <div id="data"></div>
                <div id="googleMap" style="width:100%;height:400px;"></div>
            </div>
        </div>
        <div id="email_statue" class="tabcontent" style="display: none;">

            <!--********************************************************-->
            <div class="tab_s">
                <button class="tablinks_s active_s" onclick="div_flip_1(event,'in_progress')">In Progress</button>
                <button class="tablinks_s" onclick="div_flip_1(event,'done')">Done</button>
            </div>
            <div id="in_progress" class="tabcontent_s">
                <div>
                    <button class="btn">Send The Surevey</button>
                    <button class="btn">Send A Reminder</button>
                </div>

                <div class="table">
                    <table cellspacing="0">
                        <tr>
                            <th>
                                <input type="checkbox" onclick="select_all(this)" alt="Select All">
                            </th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Graduation Year</th>
                            <th>Survey Statue</th>
                        </tr>

                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>Jane Doe</td>
                            <td>jane.doe@foo.com</td>
                            <td>2015</td>
                            <td>Sent</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>Jane Doe</td>
                            <td>jane.doe@foo.com</td>
                            <td>2015</td>
                            <td>Sent</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>Jane Doe</td>
                            <td>jane.doe@foo.com</td>
                            <td>2015</td>
                            <td>Sent</td>
                        </tr>

                    </table>
                </div>
            </div>
            <div id="done" class="tabcontent_s" style="display: none;">
                <div>
                    <button class="btn">Print</button>
                </div>
                <div class="table">
                    <table cellspacing="0">
                       <?php
                        
                            for($i=0;$i<sizeof($graduate_info);$i++){
                             ?>   
                                <tr>
                                    <th><?php echo $graduate_info[$i]->getFirst_name() ?></th>
                                    <th><?php echo $graduate_info[$i]->getEmail() ?></th>
                                    <th><?php echo $form_info[$i]->getGraduate_year() ?></th>
                                    <th><?php echo $form_info[$i]->getSubmission_date() ?></th>
                                </tr>
                             <?php   
                            }
                        ?>
                        


                    </table>
                </div>
            </div>
            <!--****************************************************-->
        </div>

    </div>

</body>

</html>
<script>
function myMap() {
    
    var mapProp= {
      center:new google.maps.LatLng(40.633125,-89.398528),
      zoom:5,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
        
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        state_info=  this.responseText;
        result = JSON.parse(this.responseText);

        for(var i = 0; i < result.length;i++){
            if(result[i].latitude1!=""&&result[i].longitude!=""){
                var state = {lat: parseFloat(result[i].latitude), lng: parseFloat(result[i].longitude)};
                var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">'+result[i].state_name+'</h1>'+
      '<div id="bodyContent">'+
      '<p>Country Name: '+result[i].country_code+'<br>'+
      '<p>State Name: '+result[i].state_name+'<br>'+
      'Number of Student Working: '+result[i].people_work+'<br>'+
      'Average Salary : '+result[i].average_salary
      +'k</p>'+
      '</div>'+
      '</div>';

                var marker = new google.maps.Marker({
                position: state,
                map: map,
                title: result[i].state_name
                });
                
                var infowindow = new google.maps.InfoWindow(); 
                google.maps.event.addListener(marker,'click', (function(marker,contentString,infowindow){ 
                    return function() {
                        infowindow.close();
                        infowindow.setContent(contentString);
                        infowindow.open(map,marker);
                        windows.push(infowindow)
                        google.maps.event.addListener(map,'click', function(){ 
                            infowindow.close();
                        }); 
                    };
                })(marker,contentString,infowindow));  
                
            }
            
        }
      }
    };
    xmlhttp.open("GET", "php/statistics_state.php", true);
    xmlhttp.send();
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHZeIXv3LGNelhLJU1MgXSRHseiUazy04&callback=myMap"></script>