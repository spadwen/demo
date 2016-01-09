<?php header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
/*
This script is using PHP PDO to generate a MySQL database in JSON format.

It is only using a general select SQL query without a special analogy query to find valuable shares.
*/

/* ###########################################
require_once 'mydbconfig.php';
can make a file of mydbconfig.php with the following codes
<?php
    $host = 'servername';
    $dbname = 'databasename';
    $username = 'username';
    $password = 'password';
?>
#############################################
*/

    $host = 'servername';
    $dbname = 'databasename';
    $username = 'username';
    $password = 'password';

try {
	// connect to the database
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	
	// a query get all the records from the Australian Industry shares
 $sql = 'SELECT ASXCode, SecurityDescription, 52WeekHigh, 52WeekLow, DivCentsPerShare, NTA, DivYld, EarnSharePerCent, PERatio FROM IndustryShares  order by DivCentsPerShare desc';
 
  // use prepared statements, even if not strictly required is good practice
 $q = $conn->prepare( $sql );
 
 // execute the query
 $q->execute();

   // fetch the results into an array
        $result = $q->fetchAll( PDO::FETCH_ASSOC );
		$output = ['records' => $result];

        // convert to json
        $json = json_encode( $output);

        // echo the json string
        echo $json;
	
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}


?>