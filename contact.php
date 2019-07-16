    <?php
      
      include 'db_connect.php';
      $data = array();

      $sel_query="SELECT a.roomname from rooms a inner join msgs b on a.roomname = b.room ORDER by b.stime DESC;";

      $result = mysqli_query($conn,$sel_query);

      $arr = array();
      
      while($row = mysqli_fetch_assoc($result)) { 
        
        array_push($arr,$row["roomname"]);
     
       
      }

        $data = array_unique($arr);
        // foreach($data as  $x_value) {
        //        echo '<div class="any"><h4><a href="http://localhost:8080/data/PHP/rooms.php?roomname=' .$x_value . ' ">'.$x_value.'</a></h4></div>';
           
		// }

	echo json_encode($data);

    ?>