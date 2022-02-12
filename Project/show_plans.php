





<html>
<head>
<title>Daily Log</title>

</head>
<body style="background-color:lightblue;">


<image src="log.png"  height="1000" width="1200" align="right" hspace="0">
<br> 
<br>    
<br>

<br>
<h1 style="color:darkblue;font-size:40px;text-align:center;font-family:verdana" >PLANS</h1>  
<br><hr>





<?php




// example 2.1 ..creating a database connection
 $db_sid = "  (DESCRIPTION =
 (ADDRESS = (PROTOCOL = TCP)(HOST = WIN-4BIMB1BPCMQ)(PORT = 1521))
 (CONNECT_DATA =
   (SERVER = DEDICATED)
   (SERVICE_NAME = orcl)
 )
)";
 $db_user = "scott";
 $db_pass = "1234";
 $con = oci_connect($db_user,$db_pass,$db_sid);
 if($con)
 {
     echo "";

 }
 else{die("connection not successful 2nd time");}


 $sql = "select plan_id, type, purpose, duration from PLAN";

 $query_id = oci_parse($con, $sql); 		
 $r = oci_execute($query_id); 

 
 if($r)
{
  $emp = oci_fetch_array($query_id, OCI_BOTH+OCI_RETURN_NULLS);    
 //echo "yes";
  while($row = oci_fetch_array($query_id, OCI_BOTH+OCI_RETURN_NULLS)) {
    echo "<font size='5' face='Arial'> id: " . $row["PLAN_ID"]. ",Type: '" . $row["TYPE"]. "',Purpose: '".$row["PURPOSE"]."',Duration: '" . $row["DURATION"]. "' <br>";
  }

 //echo "daily log id done ";




}



?>


</body>
</html>


