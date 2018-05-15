<html>
<head>
<title> PICKUP </title>
<style>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: grey;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

</style><center><h2>Transport pooling</h2></center>
<div class="container1">
<div class="topnav">

 <a href="http://localhost/2015cse026/main.html">TRAVEL</a> 
<a href="http://localhost/2015cse026/pickup.php">SHARE</a>
  <a href="#about">Home</a>
</div>

<div style="padding-left:16px">
</style>
</div><center>
<style>
body{
	background-color: "#0000FF";
	text-align: center;
}
h1{
	color: rgb(0,0,255);
}
.displaybox{
	color: rgb(0,0,255);	
	margin: auto;
	width: 150px;
	border: 2px solid #000000;
	padding: 10px;
	align: center;
	font: 1.5em normal verdana, helvetica, arial; 
}
</style>
<script>
	var ajaxobject=new XMLHttpRequest();
	function getCandidateList() {
	  if(!ajaxobject)
	  {
	  	document.getElementById("showcandidate").innerHTML="AJAX obejct could not be created";
	  	return;
	  }
	  	  ajaxobject.open("GET","candidates1.html");
	  	  ajaxobject.send();
	  	  ajaxobject.onreadystatechange=getResponse; 	
	}
	function getResponse(){
		if(ajaxobject.readyState == 4 && ajaxobject.status == 200)
		{
			document.getElementById('showcandidate').innerHTML=ajaxobject.responseText;
		}
		else
		{
			document.getElementById('showcandidate').innerHTML= ajaxobject.readyState+ajaxobject.status+ajaxobject.statusText;
		}

	}
	var count = 0;
	function changeColor()
	{
		count++;
		var col="red";
		if(count%2==0)
			col="lightgreen";
		else
			col="red";
		document.getElementById('showcandidate').style.backgroundColor=col;
	}
	function makeItBold()
	{
		//document.getElementById('showcandidate').style.
	}
	function ajaxConfirm()
	{
		document.getElementById('selectedcandidate').innerHTML = document.getElementById("myform").elements['candidate'].value;
	}
</script>
</head>
	

</html>
