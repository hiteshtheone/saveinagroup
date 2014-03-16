<!DOCTYPE html>
<html>
<head>
<title>groupdeal.com</title>
<link rel="stylesheet" type="text/css" href="mainpage.css"> 
<script>
function changeOption()
{
alert("hitesh");
    var selectBox = document.getElementById("myOption");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    alert(selectedValue);
    switch(selectedValue)
{
case 1:
myTravel();
break;
case 2:
myServices();
break;
case 3:
myProducts();
case 4:
myOffers()
break;
}
}
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
             	  <select id = "myOption" onchange="changeFunc();">
               	    <option value = "1" >travel</option>
               	    <option value = "2" >services</option>
                    <option value = "3" >products</option>
                    <option value = "4" >offers</option>
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
