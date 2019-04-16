/* 	Author: Malek Ben Khalifa
	Date:02-23-2019
	Description: JavaScript code for Graduate_form.html page
	File name: graduate_form.js
*/
function year() {

	var start=1966;
	var end=new Date().getFullYear();
	var options="";
	for(var year=start;year<=end;year++){
	  options+="<option>"+year+"</option>";
	}
	document.getElementById("year").innerHTML=options;
}

var repeat=0;
function country_check(){
	var options="";
	var states_names=['Alabama','Alaska','American Samoa','Arizona','Arkansas','California','Colorado','Connecticut','Delaware','District of Columbia','Federated States of Micronesia','Florida','Georgia','Guam','Hawaii','Idaho','Illinois','Indiana','Iowa','Kansas','Kentucky','Louisiana','Maine','Marshall Islands','Maryland','Massachusetts','Michigan','Minnesota','Mississippi','Missouri','Montana','Nebraska','Nevada','New Hampshire','New Jersey','New Mexico','New York','North Carolina','North Dakota','Northern Mariana Islands','Ohio','Oklahoma','Oregon','Palau','Pennsylvania','Puerto Rico','Rhode Island','South Carolina','South Dakota','Tennessee','Texas','Utah','Vermont','Virgin Island','Virginia','Washington','West Virginia','Wisconsin','Wyoming']; 
	var selected=document.getElementById('country').value;
	var div=document.getElementById('location');
	

	if(repeat===0){
	  	var city=document.createElement("input");
	  	city.setAttribute("type","text");
	  	city.setAttribute("name","city");
	  	city.setAttribute("placeholder","City");
	  	
	  	var zip=document.createElement("input");
	  	zip.setAttribute("type","text");
	  	zip.setAttribute("name","zip_code");
	  	zip.setAttribute("placeholder","Zip Code");	
	  	
	  	
	  	if (selected==='USA'){
	  		var states=document.createElement("select");
	  		states.setAttribute("id","states");
	  		states.setAttribute("name","states");
	  		div.appendChild(states);

	  		for (var i=0;i<states_names.length;i++){
	  			options+="<option>"+states_names[i] +"</option>";
	  		}
	  		document.getElementById("states").innerHTML=options;
	  	}
	  	else{
	  		city.setAttribute("required","");

	  	}
		div.appendChild(city);
		div.appendChild(zip);
		repeat++;
	}
	else{
		var del=div.firstChild;
		while(del) {
   			 div.removeChild(del);
    		 del=div.firstChild;
		}
		repeat=0;
		country_check()
	}

}


function hover(element) {
  var name = element.getAttribute("name");
  element.setAttribute('src', 'pic/'+name+'.png');
}
		
function unhover(element) {
var name = element.getAttribute("name");
  element.setAttribute('src', 'pic/'+name+'_logo.png');
}

