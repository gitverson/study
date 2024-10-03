<?php

//caching is a temprory storage location , to access data more quickly.
//Cache helps to increase the speed of the website response.

$starttime = microtime(true);


try {
$dbcon = new PDO('mysql:host=localhost;dbname=digital_latest','root',"");
}
catch(PDOException $e) {
    echo 'Server Busy.. Try Later...';
    die();
	
}

$cache_file ='cache/index.cache.php';

if(file_exists($cache_file) && filemtime($cache_file) > time()-20){
	echo "<b>From Cache</b><br/><br/>";
	include($cache_file);
}else {

		$Select_query = "SELECT Milestone_id,Event_id,Event_date,Event_title,Event_title_hi, Event_status,SD_name AS stateName, Event_district,state_posted,e.emp_name,user_id,approver_id,place_of_posting,hod_name,hog_name, Approver_date,upload_date,admin_approved_date
		FROM t_milestone
		INNER JOIN m_state_district ON t_milestone.Event_state=m_state_district.SD_id
		INNER JOIN aw_nic_emp_new as e ON t_milestone.user_id=e.emp_code 
		WHERE Event_status IN (1,2)";

		$stmt = $dbcon->prepare($Select_query);

		$stmt->execute();

		$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);

		$str="<table border='1' >";
		$str .="<tr><th>Event id</th><th> Event Title</th><th> state name</th><th>Emp Name</th><th>Event Date</th></tr>";

		foreach($arr as $list )
		{

			$str .="<tr><td>".$list['Event_id']."</td><td>".$list['Event_title']."</td><td>".$list['stateName']."</td><td>".$list['emp_name']."</td><td>".$list['upload_date']."</td></tr>";
			
		}
		$str .="</table>";
		
		echo "<b> Cache Created</b><br/><br/>";
		echo $str;
		
		$handle = fopen($cache_file,'w');;
		fwrite($handle,$str);
		fclose($handle);
	} 
 
 $endtime = microtime(true);
 echo round($endtime-$starttime,4);
?>