<?php
    require('php/graduation_form_Logic.php');
    
?>



<!--Author: Malek Ben Khalifa
	Date:02-23-2019
	Last Update: 03-28-2019
	Description: Graduate_form.html
-->
<!DOCTYPE html>
<html>
<head>
	<title>Survey</title>
	<script src="js/graduate_form.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="pic/kcc_Logo.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body onload="year(),country_check()">
	
	
	<video autoplay muted loop id="myVideo">
  	<source src="pic/banner.mp4" type="video/mp4">
	</video>

	<header>
		<a href="https://www.kirkwood.edu/" target="_blank"><img src="pic/kirkwood_logo.png" class="logo"></a>
		<a href="https://www.youtube.com/user/KirkwoodCommCollege" target="_blank" > <img src="pic/YouTube_logo.png" class="social" name="Youtube" onmouseover="hover(this);" onmouseout="unhover(this);"></a>
		<a href="https://www.linkedin.com/school/kirkwood-community-college/" target="_blank"><img src="pic/LinkedIn_logo.png" class="social" name="Linkedin" onmouseover="hover(this);" onmouseout="unhover(this);"></a>
		<a href="https://twitter.com/kirkwoodcc" target="_blank"><img src="pic/Twitter_logo.png" class="social" name="Twitter" onmouseover="hover(this);" onmouseout="unhover(this);"></a>
		<a href="https://www.instagram.com/kirkwoodlife/" target="_blank"><img src="pic/Instagram_logo.png" class="social" name="Instagram"onmouseover="hover(this);" onmouseout="unhover(this);"></a>
		<a href="https://www.facebook.com/kirkwoodcommunitycollege" target="_blank"><img src="pic/Facebook_logo.png" class="social" name="Facebook" onmouseover="hover(this);" onmouseout="unhover(this);"></a>
	<a href="#form" class="btn">Start The Survey</a>
	<h1><?php
        if(isset($_GET["graduate_number"])){
        $graduate_id = htmlspecialchars($_GET['graduate_number']);
        $thisgraduate = getGraduateInfo($graduate_id);
        echo "Hi ".$thisgraduate->getFirst_name();
    }else{
        
    }?></h1>
	<h1>Kirkwood After Graduation <br>Survey</h1>
	<h4>This survey is made for Kirkwood graduated student to follow their professional progress.<br>
All the information received from this survey help us to improve our educational system so we can help our student to start their professional carrier</h4>
	

	</header>

<article id="form">
	
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="msform"><!--To Complete by the PHP builder--><!--Don't change the form ID!-->
		

  
		<fieldset>
			<section>
		<h2 class="fs-title">Graduation Information</h2>
		<input type="hidden" id="graduate_id" name="graduate_id" value="<?php echo $graduate_id ?>">
		<label>Primary Program</label><!--Porgram_id options-->
		<select name="program_id" id="prog_select" required="">
			<option value="">Select a program</option>
			<option>Accounting</option>
			<option>Administrative Management</option>
			<option>Apparel Merchandising</option>
			<option>Business Administration</option>
			<option>Computer Software Development</option>
			<option>Computer Support Specialist</option>
			<option>Financial Services</option>
			<option>Graphic Communication Technology</option>
			<option>Interior Design</option>
			<option>Management</option>
			<option>Marketing Management</option>
			<option>Network and System Administration</option>
			<option>Web Technologies</option>
		</select>
		<br>

		<label>Graduation Year</label><!--Date options starting from 1966-->
		<select id="year" name="graduate_year" required="">
		</select>
		<br>
		<label>Continuing Education</label><!--Continuing Education options-->
		<br>
		<select name="continue_edu" id="edu_select" required="">
			<option value="">Select Option</option>
			<option value="1"><b>Yes</b>, I have continued my education since I left Kirkwood</option>
			<option value="0"><b>No</b>, I didn't continued my education since I left Kirkwood</option>
		</select>
		<label>Working Statue</label><!--does graduated have a job or no options-->
		<br>
		<select name="work_state" id="work_state" onchange="working_check()" required="">
			<option value="">Select Option</option>
			<option value="yes"><b>Yes</b>, I get a job</option>
			<option value="no"><b>No</b>, I didn't get a job</option>
		</select>
    </section>
    <section id="employment_info_location">
    	<!--It will be automatically filled in case the user choice "yes I get a job"-->
		</section>
		<section>
			<hr>
		<br>
		<h2 class="fs-title">Location</h2>
		<select name="country" id="country" onchange="country_check()" required=""><!--graduates country-->
		<option value="">Select a country</option>
		<option value="AFG">Afghanistan</option>
		<option value="ALA">Åland Islands</option>
		<option value="ALB">Albania</option>
		<option value="DZA">Algeria</option>
		<option value="ASM">American Samoa</option>
		<option value="AND">Andorra</option>
		<option value="AGO">Angola</option>
		<option value="AIA">Anguilla</option>
		<option value="ATA">Antarctica</option>
		<option value="ATG">Antigua and Barbuda</option>
		<option value="ARG">Argentina</option>
		<option value="ARM">Armenia</option>
		<option value="ABW">Aruba</option>
		<option value="AUS">Australia</option>
		<option value="AUT">Austria</option>
		<option value="AZE">Azerbaijan</option>
		<option value="BHS">Bahamas</option>
		<option value="BHR">Bahrain</option>
		<option value="BGD">Bangladesh</option>
		<option value="BRB">Barbados</option>
		<option value="BLR">Belarus</option>
		<option value="BEL">Belgium</option>
		<option value="BLZ">Belize</option>
		<option value="BEN">Benin</option>
		<option value="BMU">Bermuda</option>
		<option value="BTN">Bhutan</option>
		<option value="BOL">Bolivia, Plurinational State of</option>
		<option value="BES">Bonaire, Sint Eustatius and Saba</option>
		<option value="BIH">Bosnia and Herzegovina</option>
		<option value="BWA">Botswana</option>
		<option value="BVT">Bouvet Island</option>
		<option value="BRA">Brazil</option>
		<option value="IOT">British Indian Ocean Territory</option>
		<option value="BRN">Brunei Darussalam</option>
		<option value="BGR">Bulgaria</option>
		<option value="BFA">Burkina Faso</option>
		<option value="BDI">Burundi</option>
		<option value="KHM">Cambodia</option>
		<option value="CMR">Cameroon</option>
		<option value="CAN">Canada</option>
		<option value="CPV">Cape Verde</option>
		<option value="CYM">Cayman Islands</option>
		<option value="CAF">Central African Republic</option>
		<option value="TCD">Chad</option>
		<option value="CHL">Chile</option>
		<option value="CHN">China</option>
		<option value="CXR">Christmas Island</option>
		<option value="CCK">Cocos (Keeling) Islands</option>
		<option value="COL">Colombia</option>
		<option value="COM">Comoros</option>
		<option value="COG">Congo</option>
		<option value="COD">Congo, the Democratic Republic of the</option>
		<option value="COK">Cook Islands</option>
		<option value="CRI">Costa Rica</option>
		<option value="CIV">Côte d'Ivoire</option>
		<option value="HRV">Croatia</option>
		<option value="CUB">Cuba</option>
		<option value="CUW">Curaçao</option>
		<option value="CYP">Cyprus</option>
		<option value="CZE">Czech Republic</option>
		<option value="DNK">Denmark</option>
		<option value="DJI">Djibouti</option>
		<option value="DMA">Dominica</option>
		<option value="DOM">Dominican Republic</option>
		<option value="ECU">Ecuador</option>
		<option value="EGY">Egypt</option>
		<option value="SLV">El Salvador</option>
		<option value="GNQ">Equatorial Guinea</option>
		<option value="ERI">Eritrea</option>
		<option value="EST">Estonia</option>
		<option value="ETH">Ethiopia</option>
		<option value="FLK">Falkland Islands (Malvinas)</option>
		<option value="FRO">Faroe Islands</option>
		<option value="FJI">Fiji</option>
		<option value="FIN">Finland</option>
		<option value="FRA">France</option>
		<option value="GUF">French Guiana</option>
		<option value="PYF">French Polynesia</option>
		<option value="ATF">French Southern Territories</option>
		<option value="GAB">Gabon</option>
		<option value="GMB">Gambia</option>
		<option value="GEO">Georgia</option>
		<option value="DEU">Germany</option>
		<option value="GHA">Ghana</option>
		<option value="GIB">Gibraltar</option>
		<option value="GRC">Greece</option>
		<option value="GRL">Greenland</option>
		<option value="GRD">Grenada</option>
		<option value="GLP">Guadeloupe</option>
		<option value="GUM">Guam</option>
		<option value="GTM">Guatemala</option>
		<option value="GGY">Guernsey</option>
		<option value="GIN">Guinea</option>
		<option value="GNB">Guinea-Bissau</option>
		<option value="GUY">Guyana</option>
		<option value="HTI">Haiti</option>
		<option value="HMD">Heard Island and McDonald Islands</option>
		<option value="VAT">Holy See (Vatican City State)</option>
		<option value="HND">Honduras</option>
		<option value="HKG">Hong Kong</option>
		<option value="HUN">Hungary</option>
		<option value="ISL">Iceland</option>
		<option value="IND">India</option>
		<option value="IDN">Indonesia</option>
		<option value="IRN">Iran, Islamic Republic of</option>
		<option value="IRQ">Iraq</option>
		<option value="IRL">Ireland</option>
		<option value="IMN">Isle of Man</option>
		<option value="ISR">Israel</option>
		<option value="ITA">Italy</option>
		<option value="JAM">Jamaica</option>
		<option value="JPN">Japan</option>
		<option value="JEY">Jersey</option>
		<option value="JOR">Jordan</option>
		<option value="KAZ">Kazakhstan</option>
		<option value="KEN">Kenya</option>
		<option value="KIR">Kiribati</option>
		<option value="PRK">Korea, Democratic People's Republic of</option>
		<option value="KOR">Korea, Republic of</option>
		<option value="KWT">Kuwait</option>
		<option value="KGZ">Kyrgyzstan</option>
		<option value="LAO">Lao People's Democratic Republic</option>
		<option value="LVA">Latvia</option>
		<option value="LBN">Lebanon</option>
		<option value="LSO">Lesotho</option>
		<option value="LBR">Liberia</option>
		<option value="LBY">Libya</option>
		<option value="LIE">Liechtenstein</option>
		<option value="LTU">Lithuania</option>
		<option value="LUX">Luxembourg</option>
		<option value="MAC">Macao</option>
		<option value="MKD">Macedonia, the former Yugoslav Republic of</option>
		<option value="MDG">Madagascar</option>
		<option value="MWI">Malawi</option>
		<option value="MYS">Malaysia</option>
		<option value="MDV">Maldives</option>
		<option value="MLI">Mali</option>
		<option value="MLT">Malta</option>
		<option value="MHL">Marshall Islands</option>
		<option value="MTQ">Martinique</option>
		<option value="MRT">Mauritania</option>
		<option value="MUS">Mauritius</option>
		<option value="MYT">Mayotte</option>
		<option value="MEX">Mexico</option>
		<option value="FSM">Micronesia, Federated States of</option>
		<option value="MDA">Moldova, Republic of</option>
		<option value="MCO">Monaco</option>
		<option value="MNG">Mongolia</option>
		<option value="MNE">Montenegro</option>
		<option value="MSR">Montserrat</option>
		<option value="MAR">Morocco</option>
		<option value="MOZ">Mozambique</option>
		<option value="MMR">Myanmar</option>
		<option value="NAM">Namibia</option>
		<option value="NRU">Nauru</option>
		<option value="NPL">Nepal</option>
		<option value="NLD">Netherlands</option>
		<option value="NCL">New Caledonia</option>
		<option value="NZL">New Zealand</option>
		<option value="NIC">Nicaragua</option>
		<option value="NER">Niger</option>
		<option value="NGA">Nigeria</option>
		<option value="NIU">Niue</option>
		<option value="NFK">Norfolk Island</option>
		<option value="MNP">Northern Mariana Islands</option>
		<option value="NOR">Norway</option>
		<option value="OMN">Oman</option>
		<option value="PAK">Pakistan</option>
		<option value="PLW">Palau</option>
		<option value="PSE">Palestinian Territory, Occupied</option>
		<option value="PAN">Panama</option>
		<option value="PNG">Papua New Guinea</option>
		<option value="PRY">Paraguay</option>
		<option value="PER">Peru</option>
		<option value="PHL">Philippines</option>
		<option value="PCN">Pitcairn</option>
		<option value="POL">Poland</option>
		<option value="PRT">Portugal</option>
		<option value="PRI">Puerto Rico</option>
		<option value="QAT">Qatar</option>
		<option value="REU">Réunion</option>
		<option value="ROU">Romania</option>
		<option value="RUS">Russian Federation</option>
		<option value="RWA">Rwanda</option>
		<option value="BLM">Saint Barthélemy</option>
		<option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
		<option value="KNA">Saint Kitts and Nevis</option>
		<option value="LCA">Saint Lucia</option>
		<option value="MAF">Saint Martin (French part)</option>
		<option value="SPM">Saint Pierre and Miquelon</option>
		<option value="VCT">Saint Vincent and the Grenadines</option>
		<option value="WSM">Samoa</option>
		<option value="SMR">San Marino</option>
		<option value="STP">Sao Tome and Principe</option>
		<option value="SAU">Saudi Arabia</option>
		<option value="SEN">Senegal</option>
		<option value="SRB">Serbia</option>
		<option value="SYC">Seychelles</option>
		<option value="SLE">Sierra Leone</option>
		<option value="SGP">Singapore</option>
		<option value="SXM">Sint Maarten (Dutch part)</option>
		<option value="SVK">Slovakia</option>
		<option value="SVN">Slovenia</option>
		<option value="SLB">Solomon Islands</option>
		<option value="SOM">Somalia</option>
		<option value="ZAF">South Africa</option>
		<option value="SGS">South Georgia and the South Sandwich Islands</option>
		<option value="SSD">South Sudan</option>
		<option value="ESP">Spain</option>
		<option value="LKA">Sri Lanka</option>
		<option value="SDN">Sudan</option>
		<option value="SUR">Suriname</option>
		<option value="SJM">Svalbard and Jan Mayen</option>
		<option value="SWZ">Swaziland</option>
		<option value="SWE">Sweden</option>
		<option value="CHE">Switzerland</option>
		<option value="SYR">Syrian Arab Republic</option>
		<option value="TWN">Taiwan, Province of China</option>
		<option value="TJK">Tajikistan</option>
		<option value="TZA">Tanzania, United Republic of</option>
		<option value="THA">Thailand</option>
		<option value="TLS">Timor-Leste</option>
		<option value="TGO">Togo</option>
		<option value="TKL">Tokelau</option>
		<option value="TON">Tonga</option>
		<option value="TTO">Trinidad and Tobago</option>
		<option value="TUN">Tunisia</option>
		<option value="TUR">Turkey</option>
		<option value="TKM">Turkmenistan</option>
		<option value="TCA">Turks and Caicos Islands</option>
		<option value="TUV">Tuvalu</option>
		<option value="UGA">Uganda</option>
		<option value="UKR">Ukraine</option>
		<option value="ARE">United Arab Emirates</option>
		<option value="GBR">United Kingdom</option>
		<option value="USA">United States</option>
		<option value="UMI">United States Minor Outlying Islands</option>
		<option value="URY">Uruguay</option>
		<option value="UZB">Uzbekistan</option>
		<option value="VUT">Vanuatu</option>
		<option value="VEN">Venezuela, Bolivarian Republic of</option>
		<option value="VNM">Viet Nam</option>
		<option value="VGB">Virgin Islands, British</option>
		<option value="VIR">Virgin Islands, U.S.</option>
		<option value="WLF">Wallis and Futuna</option>
		<option value="ESH">Western Sahara</option>
		<option value="YEM">Yemen</option>
		<option value="ZMB">Zambia</option>
		<option value="ZWE">Zimbabwe</option>
	</select>
	<div id="location"><!--graduates city&zip-->
		
	</div>
	<input type="submit" name="submit" class="submit action-button" value="Submit" onclick="valid()" />
	<input type="reset" name="reset" class="action-button" value="Clear" />
    
	</fieldset>
	</form>
</article>
	
</body>
</html>





<?php
/**
 * Author: Md Touhidul Islam
 * Date: 02/25/2019
 * Discription: 
 */
require('php/form_info.php');
require('php/validation.php');
if(isset($_POST['submit'])){
    $graduate_year = htmlspecialchars($_POST['graduate_year']);
    $program_name = htmlspecialchars($_POST['program_id']);
    $continue_edu = htmlspecialchars($_POST['continue_edu']);
    $program_name = htmlspecialchars($_POST['program_id']);
    $continue_edu = htmlspecialchars($_POST['continue_edu']);
    $work_satatus = htmlspecialchars($_POST['work_state']);
    $graduate_id = htmlspecialchars($_POST['graduate_id']);
    if($work_satatus=="yes"){
        $employer_name = htmlspecialchars($_POST['employer_fname'])." ".htmlspecialchars($_POST['employer_lname']);
        $employment_position = htmlspecialchars($_POST['employment_position']);
        $salary = htmlspecialchars( $_POST['salary']);
        $work_satatus = true;
    }else{
        $employer_name = "Not Apply";
        $employer_name = "Not Apply";
        $employment_position = "Not Apply";
        $salary = "0";
        $work_satatus = false;
    }
    
    $country =htmlspecialchars($_POST['country']);
    $city = htmlspecialchars($_POST['city']);
    $zip_code = htmlspecialchars($_POST['zip_code']);
   
        if(isset($_POST['states'])){
        $state = htmlspecialchars($_POST['states']);
        }else{
            $state = "Not Apply";
        }
        $continue_edu = htmlspecialchars($_POST['continue_edu']);
        //$location = $_POST['location'];
        $form_info = new form_info($graduate_year,$salary,$employment_position,$program_name,$employer_name,$continue_edu,$country,$state,$city,$zip_code,$work_satatus,$graduate_id);
        insert_graduate_info($form_info);
   
}
    
?>
