/* 	Author: Malek Ben Khalifa
	Date:02-23-2019
	Description: JavaScript code for Graduate_form.html page
	File name: graduate_form.js
*/
function year() {

    var start = 1966;
    var end = new Date().getFullYear();
    var options = '<option value="">Select a Year</option>';
    for (var year = start; year <= end; year++) {
        options += "<option>" + year + "</option>";
    }
    document.getElementById("year").innerHTML = options;
}

var repeat = 0;

function country_check() {
    var options = '<option value="">Select a State</option>';
    var states_names = ['Alabama', 'Alaska', 'American Samoa', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'District of Columbia', 'Federated States of Micronesia', 'Florida', 'Georgia', 'Guam', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Marshall Islands', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota', 'Northern Mariana Islands', 'Ohio', 'Oklahoma', 'Oregon', 'Palau', 'Pennsylvania', 'Puerto Rico', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virgin Island', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'];
    var selected = document.getElementById('country').value;
    var div = document.getElementById('location');


    if (repeat === 0) {
        var city = document.createElement("input");
        city.setAttribute("type", "text");
        city.setAttribute("name", "city");
        city.setAttribute("id", "city");
        city.setAttribute("placeholder", "City");

        var zip = document.createElement("input");
        zip.setAttribute("type", "text");
        zip.setAttribute("name", "zip_code");
        zip.setAttribute("id", "zip_code");
        zip.setAttribute("placeholder", "Zip Code");
        zip.setAttribute("pattern","[0-9]{5}");

        if (selected === 'USA') {
            var states = document.createElement("select");
            states.setAttribute("id", "states");
            states.setAttribute("name", "states");
            div.appendChild(states);

            for (var i = 0; i < states_names.length; i++) {
                options += "<option>" + states_names[i] + "</option>";
            }
            document.getElementById("states").innerHTML = options;
        } else {
            city.setAttribute("required", "");
            zip.setAttribute("required", "");
        }
        div.appendChild(city);
        div.appendChild(zip);
        repeat++;
    } else {
        var del = div.firstChild;
        while (del) {
            div.removeChild(del);
            del = div.firstChild;
        }
        repeat = 0;
        country_check();
    }

}


function working_check() {
    var selected = document.getElementById('work_state').value;
    var div = document.getElementById('employment_info_location');
    if (selected === 'yes') {
        var hr = document.createElement("hr");
        div.appendChild(hr);
        var br = document.createElement("br");
        div.appendChild(br);
        var h2 = document.createElement("h2");
        h2.setAttribute("class", "fs-title");
        var text_1 = document.createTextNode("Employment Information");
        h2.appendChild(text_1);
        div.appendChild(h2);
        var label = document.createElement("label");
        var text_2 = document.createTextNode("Employment Position");
        label.appendChild(text_2);
        div.appendChild(label);
        var input_1 = document.createElement("input");
        input_1.setAttribute("type", "text");
        input_1.setAttribute("id", "employment_position");
        input_1.setAttribute("name", "employment_position");
        input_1.setAttribute("placeholder", "Employment Position");
        input_1.setAttribute("required", "");
        div.appendChild(input_1);
        var br = document.createElement("br");
        div.appendChild(br);
        var label = document.createElement("label");
        var text_3 = document.createTextNode("Salary Range");
        label.appendChild(text_3);
        div.appendChild(label);
        var salary_select = document.createElement("select");
        salary_select.setAttribute("name", "salary");
        salary_select.setAttribute("id", "salary");
        salary_select.setAttribute("required", "");
        div.appendChild(salary_select);
        var options = '<option value="">Select Your Salary Range</option><option value="0-30">0-30,000</option><option value="30-40">30,000-40,000</option><option value="40-65">40,000-65,000</option><option value="75-85">75,000-85,000</option><option value="85-95">85,000-95,000</option><option value="95-100">95,000-100,000</option><option value="100+">Over 100,000</option>';
        document.getElementById("salary").innerHTML = options;
        var br = document.createElement("br");
        div.appendChild(br);
        var label = document.createElement("label");
        var text_4 = document.createTextNode("Employer First Name");
        label.appendChild(text_4);
        div.appendChild(label);
        var input_2 = document.createElement("input");
        input_2.setAttribute("type", "text");
        input_2.setAttribute("name", "employer_fname");
        input_2.setAttribute("id", "employer_fname");
        input_2.setAttribute("placeholder", "Employer First Name");
        input_2.setAttribute("pattern", "[A-Za-z]+");
        input_2.setAttribute("required", "");
        div.appendChild(input_2);
        var br = document.createElement("br");
        div.appendChild(br);
        var label = document.createElement("label");
        var text_5 = document.createTextNode("Employer Last Name");
        label.appendChild(text_5);
        div.appendChild(label);
        var input_3 = document.createElement("input");
        input_3.setAttribute("type", "text");
        input_3.setAttribute("name", "employer_lname");
        input_3.setAttribute("id", "employer_lname");
        input_3.setAttribute("placeholder", "Employer Last Name");
        input_3.setAttribute("pattern", "[A-Za-z]+");
        input_3.setAttribute("required", "");
        div.appendChild(input_3);


    } else {
        var del = div.firstChild;
        while (del) {
            div.removeChild(del);
            del = div.firstChild;
        }

    }
}



function hover(element) {
    var name = element.getAttribute("name");
    element.setAttribute('src', 'pic/' + name + '.png');
}

function unhover(element) {
    var name = element.getAttribute("name");
    element.setAttribute('src', 'pic/' + name + '_logo.png');
}

function valid(){

	var prog_id=document.getElementById("prog_select");
	var year=document.getElementById("year");
	var edu_select=document.getElementById("edu_select");
	var work_state=document.getElementById("work_state");
	var country=document.getElementById("country");
	var city=document.getElementById("city");
	var zip_code=document.getElementById("zip_code");


	if (prog_id.value===""){
		prog_id.setAttribute("class","error");
	}
	else{
		prog_id.removeAttribute("class");
	}

	if (year.value===""){
		year.setAttribute("class","error");
	}
	else{
		year.removeAttribute("class");
	}
	if (edu_select.value===""){
		edu_select.setAttribute("class","error");
	}
	else{
		edu_select.removeAttribute("class");
	}
	if (work_state.value===""){
		work_state.setAttribute("class","error");
	}
	else{
		work_state.removeAttribute("class");
	}

	if (work_state.value==="yes"){
		var employment_position=document.getElementById("employment_position");
		var salary=document.getElementById("salary");
		var employer_fname=document.getElementById("employer_fname");
		var employer_lname=document.getElementById("employer_lname");
	
	if (employment_position.value===""){
		employment_position.setAttribute("class","error");
	}
	else{
		employment_position.removeAttribute("class");
	}
	if (salary.value===""){
		salary.setAttribute("class","error");
	}
	else{
		salary.removeAttribute("class");
	}
	if (employer_fname.value===""){
		employer_fname.setAttribute("class","error");
	}
	else{
		employer_fname.removeAttribute("class");
	}
	if (employer_lname.value===""){
		employer_lname.setAttribute("class","error");
	}
	else{
		employer_lname.removeAttribute("class");
	}
}
	
	if (country.value===""){
		country.setAttribute("class","error");
	}
	else{
		country.removeAttribute("class");
	}
	if (work_state==="USA"){
		var states=document.getElementById("states");
		if (states.value===""){
		states.setAttribute("class","error");
	}
	else{
		states.removeAttribute("class");
	}	
	}

	if (city.value===""){
		city.setAttribute("class","error");
	}
	else{
		city.removeAttribute("class");}

if (zip_code.value===""){
		zip_code.setAttribute("class","error");
	}
	else{
		zip_code.removeAttribute("class");		

	}
}
