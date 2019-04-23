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
            <input type="text" name="">b
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