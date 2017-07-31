<!DOCTYPE html>
<html>
<head>
	<title>AJAX Demo</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
		body {padding-top: 40px; padding-left: 25%}
		input[type=number]::-webkit-inner-spin-button, 
		input[type=number]::-webkit-outer-spin-button { 
   		-webkit-appearance: none;
        -moz-appearance: none;
       appearance: none;
       margin: 0; 
}
	</style>
</head>
<body>


<div class="row">
<div class="pos-demo"></div>
	<h1>Create User</h1>
	<div class="col-md-6">
		<form onsubmit="submitFormData()">
	<div class="form-group">
    	<label for="nameSub">Name:</label>
    	<input type="text" class="form-control" id="nameSub" required="true" autocomplete="off">
  	</div>
  	<div class="form-group">
    	<label for="age">Age:</label>
    	<input type="number" class="form-control" id="age" max="120" min="13" required="true" autocomplete="off">
  	</div>
  	

  	<label for="gender">Gender:</label>
  	<select class="form-control" required id="gender">
    	<option>M</option>
    	<option>F</option>
	</select><br>

  	<div class="form-group">
    	<label for="city">City:</label>
    	<input type="text" class="form-control" id="city" required="true">
  	</div>
  	<button type="submit" class="btn btn-success">Submit</button>
</form>
	</div>
</div>

<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
 -->
<script type="text/javascript">
	function submitFormData() {
		var nameSub = document.getElementById("nameSub").value;
		var age = document.getElementById("age").value;
		var gender = document.getElementById("gender").value;
		var city = document.getElementById("city").value;

		var xhr;
 		if (window.XMLHttpRequest) { // Mozilla, Safari, ...
    		xhr = new XMLHttpRequest();
		} else if (window.ActiveXObject) { // IE 8 and older
    		xhr = new ActiveXObject("Microsoft.XMLHTTP");
		}

		var data = "nameSub=" + nameSub + "&age=" + age + "&gender=" + gender + "&city=" + city;

		


    	xhr.open("POST", "insertion.php", true); 
     	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
     	xhr.send(data);
     	xhr.onreadystatechange = display_data;


     	function display_data() {
	 		if (xhr.readyState == 4) {
      			if (xhr.status == 200) {
      				//$(".pos-demo").notify( "I'm to the right of this box",  { position:"right" } );
              alert('Success');
      				
      			} else {
        			alert('There was a problem with the request.');
      			}
     		}
		}
	}
</script>
</body>
</html>