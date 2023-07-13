<?php
include('conn/dbconnection.php');

$test='';


$test.= "<table border='1'>

<tr>



<th>farmername</th>

<th>village</th>

<th>taluka</th>

<th>district</th>

<th>state</th>

<th>country</th>

<th>agriculturelandholding</th>

<th>gender</th>

<th>icsname</th>

<th>plotarea</th>

<th>cropvariety</th>

<th>cottoncroppedarea</th>

<th>irrigationtype</th>

<th>cottonproductionperfarmer</th>

<th>pricepaidtofarmer</th>

<th>premium</th>


</tr>";


$GetAllProducts=mysqli_query($Db,"select * from farmersdata");


$i=1;
while($GetAllProductsprice=mysqli_fetch_array($GetAllProducts)){

$test.= "<tr><td>$i</td>



<td>$GetAllProductsprice[1]</td>

<td>$GetAllProductsprice[2]</td>

<td>$GetAllProductsprice[3]</td>

<td>$GetAllProductsprice[4]</td>

<td>$GetAllProductsprice[5]</td>

<td>$GetAllProductsprice[6]</td>

<td>$GetAllProductsprice[7]</td>

<td>$GetAllProductsprice[8]</td>

<td>$GetAllProductsprice[10]</td>

<td>$GetAllProductsprice[11]</td>

<td>$GetAllProductsprice[12]</td>

<td>$GetAllProductsprice[13]</td>

<td>$GetAllProductsprice[14]</td>

<td>$GetAllProductsprice[15]</td>

<td>$GetAllProductsprice[16]</td>
</tr>";

$i++;

}



/*$GetAllProductsprice[12]*/

$test.= "</table>";



$file="farmers_data.xls";



header("Content-type: application/vnd.ms-excel");

header("Content-Disposition: attachment; filename=$file");

echo $test;



?>