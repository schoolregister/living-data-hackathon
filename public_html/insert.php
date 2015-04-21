<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 
Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<title>Form Input Data</title>
</head>

<body>
<table border="1">
  <tr>
    <td align="center">Form Input Employees Data</td>
  </tr>
  <tr>
    <td>
      <table>
        <form method="post" action="input.php">
        <tr>
          <td>Name</td>
          <td><input type="text" name="name" size="20">
          </td>
        </tr>
        <tr>
          <td>Address</td>
          <td><input type="text" name="address" size="40">
          </td>
        </tr>
        <tr>
          <td></td>
          <td align="right"><input type="submit" 
          name="submit" value="Sent"></td>
        </tr>
        </table>
      </td>
    </tr>
</table>
</body>
</html>
<?
//the example of inserting data with variable from HTML form
//input.php
mysql_connect("localhost","root","admin");//database connection
mysql_select_db("employees");

//inserting data order
$order = "INSERT INTO data_employees
			(name, address)
			VALUES
			('$name',
			'$address')";

//declare in the order variable
$result = mysql_query($order);	//order executes
if($result){
	echo("<br>Input data is succeed");
} else{
	echo("<br>Input data is fail");
}
?>