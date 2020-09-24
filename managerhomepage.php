<?php  


?>

<!DOCTYPE html>
<html>
<head>

	
<style>
.btn {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  background-color: #008CBA;
}
.btn-success{
	float: left;
}

.sec1{
	margin-top:200px;
	margin-left:450px;
}
.sec2{
	margin-top: 40px;
	margin-left: 450px;

}
.btn1{
	margin-left: 20px;
	margin-right: 20px;

}
/*button a{
	margin: 20px;
}*/
</style>
</head>
<body>
	<h1 style="text-align:center">Manager Homepage </h1>

            <div class="sec1">
            	<button class="btn btn-success btn1"><a href="add.php"
                    style="text-decoration:none;color:red;">Add user</a></button>
        
            <button class="btn btn-success btn1"><a href="addworkingtime.php"
                    style="text-decoration:none;color:red;">Add working time</a></button>

                    <button class="btn btn-success btn1"><a href=""
                    style="text-decoration:none;color:red;"></a></button>
            </div>
            <br>

            <div class="sec2">
            	<button class="btn btn-success2 btn1"><a href="display.php"
                    style="text-decoration:none;color:red;">Display user</a></button>
             
            <button class="btn btn-success2 btn1"><a href="displayt.php"
                    style="text-decoration:none;color:red;">Show Working Time</a></button>

                     <button class="btn btn-success2 btn1"><a href=""
                    style="text-decoration:none;color:red;"></a></button>
            </div>
      
      

</body>
</html