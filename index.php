<!DOCTYPE html>
<html>
<head>
<title>groupdeal.com</title>
<link rel="stylesheet" type="text/css" href="mainpage.css"> 
<script>
function myTravel()
{
alert("fetch Travel data");
document.getElementById("results").innerHTML="Travel data streamed here!!!";
}
</script>
</head> 
<body>
<div id="hometopid">
	<div class="headline-name">
		<h1 class="headline-name">Welcome to groupdeal.com</h1>
	</div>
	<div class="headline-caption">
		<p class="p-headline-caption">Find people interested in spending on similar product or service and save money by doing group order or booking.</p>
	</div>
	<div id="home-right-top">
		<table>
		<tr>
		<td> <a href="http://www.w3schools.com">Contact Us  </a> |</td>
		<td><a href="http://www.w3schools.com">Login </a>|</td>
		<td><a href="http://www.w3schools.com">Register</a></td>
		</tr>
		</table> 
	</div>
	<div id="all-search-form">
    		<form>
       		<fieldset>
          		<legend class="all-search-legend">Look for people</legend>
          		<p class="all-search-label">
             	 <label> search in </label>
             	  <select id = "myList">
               	    <option value = "1"  onclick="myTravel()">travel</option>
               	    <option value = "2">services</option>
                    <option value = "3">products</option>
                    <option value = "4">offers</option>
                  </select>
                </p>
       	     </fieldset>
    		</form> 	
	</div>
</div>
<div id="results">
Results will be here!!
</div>
</body>
</html> 