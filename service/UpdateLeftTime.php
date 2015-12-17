<?php
/* require the user as the parameter */
if(isset($_GET['username']) && intval($_GET['time'])) {
	$content = file_get_contents("../data/user.json");
	$json_content = json_decode($content, true);
	//var_dump($json_content);
	for($i = 0; $i < count($json_content) ; $i++)
	{
		var_dump( $json_content[$i]);
		if ($user['username'] == $_GET['username'] )
		{
			//echo "reducing the time for this user";
			$time = intval($user['time_left']) - intval($_GET['time']);
			//echo $time;
			$user['time_left'] = $time;
		}
	}
	//var_dump($json_content);
}
?>

