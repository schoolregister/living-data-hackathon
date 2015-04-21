<?php
include('db.php');
if($_POST)
{
$q=$_POST['search'];
$p=$_POST['tschool'];
$sql_res=mysql_query("SELECT * FROM school WHERE Accountnaam LIKE '%$q%' OR Vestiging_straat LIKE '%$q%' OR Vestiging_woonplaats LIKE '%$q%' AND Schooltype LIKE '%$p%' ORDER BY Vestigingsnummer");
while($row=mysql_fetch_array($sql_res))
{
$vstraat=$row['Vestiging_straat'];
$acnaam=$row['Accountnaam'];
$vstad=$row['Vestiging_woonplaats'];
$vnum=$row['Vestigingsnummer'];
?>
<div class="show" align="left">
<a href="./school/<?php echo $vnum;?>"><h1 class="name">Naam: <?php echo $acnaam;?><br>Straat: <?php echo $vstraat;?><br>Stad: <?php echo $vstad;?></h1><br></a>
</div>
<?php
}
}
?>