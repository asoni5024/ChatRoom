
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- Custom styles for this template -->
    <link href="product.css" rel="stylesheet">
<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}
.any {
	height: 100px;
  border: 2px solid #dedede;
  background-color: white;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}
.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
.anyclass{
	height: 350px;
	overflow-y: scroll; 
}
</style>
</head>
<body>
<nav class="site-header sticky-top py-1">
  <div>
    <a class="py-2" style="margin-right: 3%; margin-left: 3%; " href="#">ChatRoom</a>
    <a class="py-2" href="http://localhost:8080/data/PHP/chatroom.php">Home</a>&nbsp;&nbsp;

    <a class="py-2 d-none d-md-inline-block" href="http://localhost:8080/data/PHP/cont.php">Contact</a>
    </div>
</nav><br>
<div class="container" >
  <div class="anyclass" id="anyclass" >

</div></div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<script type="text/javascript">

  // setInterval(runFunction, 100);
  
  setInterval(runFunction, 100);

  function runFunction()
  {
    
        
        $.ajax({
      type: "POST",
      url: "contact.php",
      cache: false,    
      success: function(data){
        var data1=JSON.parse(data);
        var html = '';
        for(var i in data1){


              html += '<div class=any><h4><a href="http://localhost:8080/data/PHP/rooms.php?roomname=' +data1[i]+ ' ">'+data1[i]+'</a></h4></div>'; 
              document.getElementById('anyclass').innerHTML = html;

        }
          
        
      }
});

     
    
        
      
  }

 </script>       
</body>
</html>
