<?php

$con_string = "host=ec2-54-221-253-117.compute-1.amazonaws.com port=5432 dbname=db1ohqopoa0v9h user=wvvhtpxdeelsit password=nQAU36hPAOksIj3Clg9W3dJu2O";

$bdcon = pg_connect($con_string);

$result = pg_query($bdcon, "select * from pocsf.carro__c");
if (!$result) {
  echo "Erro na consulta.<br>";
  exit;
}

//echo "$row[0] - $row[1] - $row[2] - $row[3] - $row[4] - $row[5] - $row[6] - $row[7] - $row[8] - $row[9] - $row[10] - $row[11] - $row[12]";
//echo "<br />\n";

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	
	<title>Poc Salesforce</title>
	
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
	<script   src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
	
	<style>
		.glyphicon { margin-right:5px; }
		.thumbnail
		{
			margin-bottom: 20px;
			padding: 0px;
			-webkit-border-radius: 0px;
			-moz-border-radius: 0px;
			border-radius: 0px;
		}

		.item.list-group-item
		{
			float: none;
			width: 100%;
			background-color: #fff;
			margin-bottom: 10px;
		}
		.item.list-group-item:nth-of-type(odd):hover,.item.list-group-item:hover
		{
			background: #428bca;
		}

		.item.list-group-item .list-group-image
		{
			margin-right: 10px;
		}
		.item.list-group-item .thumbnail
		{
			margin-bottom: 0px;
		}
		.item.list-group-item .caption
		{
			padding: 9px 9px 0px 9px;
		}
		.item.list-group-item:nth-of-type(odd)
		{
			background: #eeeeee;
		}

		.item.list-group-item:before, .item.list-group-item:after
		{
			display: table;
			content: " ";
		}

		.item.list-group-item img
		{
			float: left;
		}
		.item.list-group-item:after
		{
			clear: both;
		}
		.list-group-item-text
		{
			margin: 0 0 11px;
		}

	</style>
	
	<script>
		$(document).ready(function() {
			$('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
			$('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
		});
	</script>
	
</head>
	<body>
		<div class="container">
			<div class="well well-sm">
				<strong>Display</strong>
				<div class="btn-group">
					<a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
					</span>Lista</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
						class="glyphicon glyphicon-th"></span>Grid</a>
				</div>
			</div>
			<div id="products" class="row list-group">

<?php
  while ($row = pg_fetch_row($result)) {
 
?>
				<div class="item  col-xs-4 col-lg-4">
					<div class="thumbnail">
						<img class="group list-group-image" src="<?php echo $row[12]; ?>" alt="" />
						<div class="caption">
							<h4 class="group inner list-group-item-heading">
								<?php echo $row[10]; ?></h4>
							<p class="group inner list-group-item-text">
								<?php 
									//$nacionalidade = pg_query($bdcon, "select * from pocsf.nacionalidade__c where SFID = $row[1]");
								?>
								<?php //echo $row[12]; ?></p>
							<div class="row">
								<div class="col-xs-12 col-md-6">
									<p class="lead">
										<?php echo $row[6]; ?></p>
								</div>
								<div class="col-xs-12 col-md-6">
									<a class="btn btn-success" href=""><?php echo $row[5]; ?> cv</a>
								</div>
							</div>
						</div>
					</div>
				</div>
<?php
}
?>
			</div>
		</div>
	</body>
</html>