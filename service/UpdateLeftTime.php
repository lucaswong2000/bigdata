<?php
/* require the user as the parameter */
if(isset($_GET['username']) && intval($_GET['time'])) {
	$content = file_get_contents("../data/user.json");
	$json_content = json_decode($content, true);
	//var_dump($json_content);
	for($i = 0; $i < count($json_content) ; $i++)
	{
		//var_dump($json_content[$i]['username']);
		//var_dump($_GET['username']);
		if (strcmp($json_content[$i]['username'],$_GET['username']) == 0 )
		{
			echo("reducing the time for this user");
			$time = intval($json_content[$i]['time_left']) - intval($_GET['time']);
			//echo $time;
			$json_content[$i]['time_left'] = $time;
		}
	}
	var_dump($json_content);
	//write the new content to JSON
	file_put_contents("../data/user.json", json_encode($json_content));
}
?>

