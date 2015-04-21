<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<meta name="description" content="Expanding Search Bar Deconstructed" />
		<meta name="keywords" content="transition, search, expanding, search input, sliding input, css3, javascript" />
		<meta name="author" content="Sem Voigtänder" />
		<link rel="shortcut icon" href="/favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="/css/default.css" />
		<link rel="stylesheet" type="text/css" href="/css/component.css" />
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="/dist/css/vendor/bootstrap.min.css" rel="stylesheet">
 <script src="/dist/js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/dist/js/vendor/video.js"></script>
    <script src="/dist/js/flat-ui.min.js"></script>

    <!-- Loading Flat UI -->
    <link href="/dist/css/flat-ui.min.css" rel="stylesheet">
		<script src="js/modernizr.custom.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/bootstrap.css"></link>
</head>
<style>
table{
padding:5px;
}
td{
text-align:left;
padding:5px;
}
td h3{
float:right;
text-align:right;
}
.idiv{
border: 1px rgb(89,89,89) dashed;

padding: 15px;

margin: 13px;

-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=94)";
filter: alpha(opacity=94);
-moz-opacity: 0.94;
-khtml-opacity: 0.94;
opacity: 0.94;

-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;

background: rgba(255, 255, 255, 0.57);

color: rgb(255, 255, 255);
font-size: inherit;
font-weight: lighter;
font-family: inherit;
font-style: inherit;
text-decoration: none;
text-align: left;

line-height: 2.6em;
letter-spacing: 0.02em;
text-shadow: 0px 0px 39px rgb(89,89,89);

}
a{
text-decoration:underline;
}
</style>
<body>
		<div class="container">
			<!-- Top Navigation -->
			<div class="codrops-top clearfix">
				<a href="/"><span><img src="/logo.png" style="max-width:100%;"></img></span></a>
			</div>
						<header style="padding:0px;">
				<center><br><table class="pure-table pure-table-bordered"><?php
include('db.php');
$q=$_GET['school'];
$sql_res=mysql_query("SELECT * FROM school l, score e WHERE l.vestigingsnummer = e.vestigingsnummer
AND e.Vestigingsnummer='$q' AND Jaar='2013'");
while($row=mysql_fetch_array($sql_res))
{

?>
<title><?php echo $row['Accountnaam'];?></title>
<div class="show" align="left">
<div class="idiv"><h1><?php echo $row["Accountnaam"];?></h1><br><?php echo $row["Vestiging_straat"]." ".$row['Vestiging_huisnr'];?><br><?php echo $row["Vestiging_postcode"];?> <?php echo $row["Vestiging_woonplaats"];?><br><?php echo $row["Vestiging_Land"];?><br>Gemeente: <?php echo $row["Gemeente"];?><hr></hr><h3 class="fa fa-phone"></h3> <?php echo $row['Telefoon']; ?><br><h3 class="fa fa-envelope-o"></h3> <a style="color:white;" href="mailto:<?php echo $row["Email_school"];?>"><?php echo $row["Email_school"];?></a><br><h3 class=" fa fa-globe"></h3> <a style="color:white;" href="http://<?php echo $row["Website"];?>" target="_blank"><?php echo $row["Website"];?></a><hr></hr>Denominatie: </b><?php echo $row['Denominatie'];?><br>Onderwijsmethode: <?php echo $row['Onderwijsmethode'];?><br>Soort onderwijs: <?php echo $row['Soort_onderwijs'];?><br>Bestuur: <?php echo $row['Bestuur'];?><br><hr></hr>Aantal leerlingen: <?php echo $row['Aantal_leerlingen']?> <br>Aantal leraren (M): <?php echo $row['Leerkrachten_M']?><br>Aantal leraren (V): <?php echo $row['Leerkrachten_V']?><hr></hr><?php $t=$row['Cito_Score_(positie)'];?>Cito score: 
<div class="progress">
  <div class="progress-bar" role="progressbar"  aria-valuenow="<?php echo $t/5*100;?>"
  aria-valuemin="0" aria-valuemax="100" style="background-color:orange;width:<?php echo $t/5*100;?>%">
<?php if($t=="1"){echo "Zeer klein";}else if($t=="2"){echo "Klein";}else if($t=="3"){echo "Gemiddeld";}else if($t=="4"){echo "Boven gemiddeld";}else if($t=="5"){echo "Groot";}else{echo "Geen gegevens";}?></div></div>Omvang: <div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $row['omvang_positie']/5*100;?>"
  aria-valuemin="0" aria-valuemax="100" style="background-color:orange;width:<?php echo $row['omvang_positie']/5*100;?>%" >
<?php if($row['omvang_positie']=="1"){echo "Zeer klein";}else if($row['omvang_positie']=="2"){echo "Klein";}else if($row['omvang_positie']=="3"){echo "Gemiddeld";}else if($row['omvang_positie']=="4"){echo "Boven gemiddeld";}else if($row['omvang_positie']=="5"){echo "Groot";}else{echo "Geen gegevens bekend";}?>
  </div>
</div><br><iframe frameborder="0"  marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=<?php echo $row["Vestiging_straat"]." ".$row['Vestiging_huisnr'];?><?php echo $row["Vestiging_woonplaats"];?>;aq=0&amp;oq=<?php echo $row["Vestiging_straat"]." ".$row['Vestiging_huisnr'];?><?php echo $row["Vestiging_woonplaats"];?>&amp;ie=UTF8&amp;&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed" height=500 width=500></iframe>
</div>
<?php
}
?>
</table>
</center>
			</header>
</body>
</html>