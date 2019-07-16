<?php
$room = $_POST['room'];
// $room = 'soni1123';
$data = array();
include 'db_connect.php';
$sql = "SELECT msg, stime, ip FROM msgs WHERE room = '$room'";
$res = "";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$data[] =array(
			'ip'=>$row['ip'],
			'msg'=>$row['msg']
			,'stime'=>$row['stime']
		);
		// $res = $res . '<div class=any id='.$row['ip'].'>';
		// $res = $res . $row['ip'];
		// $res = $res . " says <p>".$row['msg'];
		// $res = $res . '</p> <span class="time-right">' . $row["stime"] . '</span></div>';
	}
}

echo json_encode($data);
?>