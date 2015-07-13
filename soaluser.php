<!DOCTYPE html>
<html>
<head>
	<title>ISCO 2015</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
	<?php include 'header.php'; ?>
	<div class="container">
		<div class="row">
			<!--Nav Bar -->
			<nav class="col-xs-1 bs-docs-sidebar">
				<ul id="sidebar" class="nav nav-stacked fixed col-xs-1">
					<?php 
					$start = 1;
					$end   = 5;

					for ($i=0; $i < 8; $i++) {
						echo "<li>"."\n";
						echo "<a href=\"#GroupSoal".$start.$end."\">Soal ".$start." - ".$end."</a>"."\n";
						echo "<ul class=\"nav nav-stacked\">"."\n"; 

						for ($j=0; $j < 5; $j++) { 
							echo "<li><a href=\"#GroupSubSoal".($start+$j)."\">Soal ".($start+$j)."</a></li>"."\n";
						}

						echo "</ul>"."\n";
						echo "</li>"."\n";

						$start = $end+1;
						$end += 5;
					}?>
				</ul>
			</nav>

			<!--Main Content -->
			<form action="ajax/recheck.php" method="post">
				<div class="col-sm-11">
					<?php 
					$start = 1;
					$end   = 5;

					for ($i=0; $i < 8; $i++) {
						
						$soal = "
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

						$jwb1 = "Ini Jawaban A";
						$jwb2 = "Ini Jawaban B";
						$jwb3 = "Ini Jawaban C";
						$jwb4 = "Ini Jawaban D";
						$jwb5 = "Ini Jawaban E";

						echo "<section id=\"GroupSoal".$start.$end."\" class=\"\">"."\n";
						echo "<h2 class=\"badge\">Soal ".$start." - ".$end."</h2>"."\n";

						for ($j=0; $j < 5; $j++) { 
							$judul = "Judul Soal Ke ".($start+$j);

							echo "<div id=\"GroupSubSoal".($start+$j)."\" class=\"panel panel-default\">"."\n";
							echo "  <div class=\"panel-heading\">"."\n";
							echo "		<h3 class=\"panel-title text-center\"> $judul </h3>"."\n";
							echo "	</div>"."\n";
							echo "	<div class=\"panel-body\">"."\n";
							echo "		".$soal.$soal."</br>"."\n";

							echo "	</div>"."\n";
							echo "		"."<ul class=\"list-group\">
										   	<li class=\"list-group-item\"> <input type=\"radio\" name=\"soal".($start+$j)."\" value=\"A\"> $jwb1 </li>
										   	<li class=\"list-group-item\"> <input type=\"radio\" name=\"soal".($start+$j)."\" value=\"B\"> $jwb2 </li>
										   	<li class=\"list-group-item\"> <input type=\"radio\" name=\"soal".($start+$j)."\" value=\"C\"> $jwb3 </li>
										   	<li class=\"list-group-item\"> <input type=\"radio\" name=\"soal".($start+$j)."\" value=\"D\"> $jwb4 </li>
										   	<li class=\"list-group-item\"> <input type=\"radio\" name=\"soal".($start+$j)."\" value=\"E\"> $jwb5 </li>
										   </ul>
							";
							echo "</div>"."\n";
						}

						echo "</section>"."\n";
						$start = $end+1;
						$end += 5;
					}?>
					<div class="text-right">
						<input type="submit" name="formSubmit" value="Submit" class="btn btn-primary btn-lg text-right" /> 
					</div> 
				</div>
			</form>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	$('body').scrollspy({
		target: '.bs-docs-sidebar',
		offset: 40
	});
</script><style type="text/css">
.fixed {
	position: fixed;
	left: 15px
}

/* sidebar */
.bs-docs-sidebar {
	padding-bottom: 20px;
}

/* all links */
.bs-docs-sidebar .nav>li>a {
	color: #999;
	border-left: 2px solid transparent;
	padding: 4px 2px;
	font-size: 13px;
	font-weight: 400;
}

/* nested links */
.bs-docs-sidebar .nav .nav>li>a {
	padding-top: 1px;
	padding-bottom: 1px;
	padding-left: 10px;
	font-size: 12px;
}

/* active & hover links */
.bs-docs-sidebar .nav>.active>a, 
.bs-docs-sidebar .nav>li>a:hover, 
.bs-docs-sidebar .nav>li>a:focus {
	color: #563d7c;                 
	text-decoration: none;          
	background-color: transparent;  
	border-left-color: #563d7c; 
}
/* all active links */
.bs-docs-sidebar .nav>.active>a, 
.bs-docs-sidebar .nav>.active:hover>a,
.bs-docs-sidebar .nav>.active:focus>a {
	font-weight: 700;
}
/* nested active links */
.bs-docs-sidebar .nav .nav>.active>a, 
.bs-docs-sidebar .nav .nav>.active:hover>a,
.bs-docs-sidebar .nav .nav>.active:focus>a {
	font-weight: 500;
}

/* hide inactive nested list */
.bs-docs-sidebar .nav ul.nav {
	display: none;           
}
/* show active nested list */
.bs-docs-sidebar .nav>.active>ul.nav {
	display: block;           
}

/* make sidebar srollable */
.bs-docs-sidebar > ul {
	overflow-y: auto;
	height: 100%;
	padding-top: 20px;
}
</style>
</html>