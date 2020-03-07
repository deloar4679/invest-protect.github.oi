<?php

include ('config/connect.php');
	
	if ($_POST['id']!='12345' && $_GET['id']!='12345') {
		echo "Wrong ID"; 
		exit;
	}
	
	$incl=true;
	if(!@include("inc/config.inc.php")) 
		if(!@include("inc_hyipguyz/config.inc.php"))
			if(!@include("../inc/config.inc.php")) { //Can't locate config.inc.php, use manual values
					$incl=false;
					if(!mysql_connect($dbhost, $dbuser, $dbpassword))	{
						echo "Error. Can't connect $dbuser to database $dbhost"; exit(); }
					if (!mysql_select_db($dbname)) {
						echo "Error. Can't select database $dbname."; exit(); }
				}
				
   if ($incl) { // use confing.inc.php for DB connection
		$dbconn = db_open ();
		if (!$dbconn) {
			print 'Can not connect to mysql';
			exit ();
		}
	}
	
	if ($res = mysql_query("SELECT  l.id, l.url, l.name, l.hyip_status, l.percents, l.date_added, lp.Last_Payment FROM hl_listings as l LEFT JOIN (SELECT listing_id, MAX(date) AS Last_Payment FROM hl_statistics WHERE hl_statistics.date>(now() - INTERVAL 15 DAY) GROUP BY listing_id) AS lp ON l.id = lp.listing_id WHERE l.status=1 and l.group_id!=7"))
	  while ($rr = mysql_fetch_array($res)) {
	    if (preg_match("/https?:\/\/(www\.)?([a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,9})/i", $rr['url'], $dm)) {
			$domain = strtolower($dm[2]);
	        $status=5-$rr['hyip_status'];
	        $id=intval($rr['id']);
	        $name=str_replace("|",":",$rr['name']);
	        $name=str_replace("\n"," ",$name);
	        $plans=str_replace("|",":",$rr['percents']);
	        $plans=str_replace("\n"," ",$plans);
	        echo "$id|$domain|$name|$status|{$rr['date_added']}|{$rr['Last_Payment']}|$plans\n";
	     }
	  } else {
	  	echo "Mysql query error<br>";
	  	echo mysql_error();
	  	exit();
	  }
	  
?>
