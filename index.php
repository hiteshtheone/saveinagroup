<!DOCTYPE html>
<html>
<head>
<title>groupdeal.com</title>
<link rel="stylesheet" type="text/css" href="mainpage.css"> 
<script>
document.addEventListener('DOMContentLoaded', function() {
    var link = document.getElementById('dropTravel');
    // onClick's logic below:
    link.addEventListener('click', function() {
        hellYeah('xxx');
    });
});

function myTravel()
{
document.getElementById("results").innerHTML="Travel data streamed here!!!";
}
function myProducts()
{
document.getElementById("results").innerHTML="Products data streamed here!!!";
}
function myServices()
{
document.getElementById("results").innerHTML="Services data streamed here!!!";
}
function myOffers()
{
document.getElementById("results").innerHTML="Offers data streamed here!!!";
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
		<td> <a href="http://www.google.com">Contact Us  </a> |</td>
		<td><a href="http://www.google.com">Login </a>|</td>
		<td><a href="http://www.google.com">Register</a></td>
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
               	    <option value = "1" onclick="myTravel()" id = "dropTravel">travel</option>
               	    <option value = "2" onclick="myServices()" id = "dropServices">services</option>
                    <option value = "3" onclick="myProducts()" id = "dropProducts">products</option>
                    <option value = "4" onclick="myOffers()" id = "dropOffers">offers</option>
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
