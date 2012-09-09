<!DOCTYPE html>
<html>
  <head>
    <title>mWoW > Classic</title>
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<style>
		body {
			padding-top: 60px;
		}
	</style>
  </head>
  <body>
    <div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="index.php">mWoW - A simple WoW Dungeon/raid DB</a>
			</div>
		</div>
    </div>
	<div class="navbar navbar-fixed-bottom">
		<div class="navbar-inner">
			<div class="container">
				<ul class="breadcrumb">
					<li><a href="http://tehmushy.info/mwow">Home</a> <span class="divider">/</span></li>
					<li class="active">Classic</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span2">
			<div class="well">
				<ul class="nav nav-list">
						<li><a href="index.php">Home</a></li>
						<li><a href="gpage.php">Guild Page</a>
					<li class="divider"></li>
						<li class="active nav-header"><a href="classic.php">Classic</a></li>
					<li class="divider"></li>
						<li class="nav-header"><a href="#">Burning Crusiade</li></a>
					<li class="divider"></li>	
						<li class="nav-header"><a href="#">Wrath of the Lich King</a></li>
					<li class="divider"></li>
						<li class="nav-header"><a href="#">Cataclysm</a></li>
					<li class="divider"></li>
						<li class="nav-header"><a href="#">Mists of Pandas</a></li>
					<li class="divider"></li>
					<li class="nav-header">Challanges</li>
						<li><a href="#">Scenarios</a>
						<li><a href="#">Challange Dungeons</a>
				</ul>
			</div>
			</div>
			<div class="span10">
				<div class="page-header">
					<h1>World of Warcraft: Classic<small><i> Dungeons & Raids</i></small></h1>
				</div>
				<div id="tab-placeholders">
					<ul id="classictab" class="nav nav-tabs">
						<li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
						<li class=""><a href="#dungeons" data-toggle="tab">Dungeons</a></li>
						<li class=""><a href="#raids" data-toggle="tab">Raids</a></li>
					</ul>
					<div id="classictabcontent" class="tab-content">
						<div class="tab-pane fade active in" id="overview">
							<div class="accordion" id="accordion2">
							  <div class="accordion-group">
								<div class="accordion-heading">
								  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
									boss name
								  </a>
								</div>
								<div id="collapseOne" class="accordion-body collapse in">
								  <div class="accordion-inner">
									abilities and shit here
								  </div>
								</div>
							  </div>
							  <div class="accordion-group">
								<div class="accordion-heading">
								  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
									but what about
								  </a>
								</div>
								<div id="collapseTwo" class="accordion-body collapse">
								  <div class="accordion-inner">
									the other layout?
								  </div>
								</div>
							  </div>
							</div>
						</div>
						<div class="tab-pane fade" id="dungeons">
							<div class="container-fluid">
								<div class="row-fluid">
									<div class="span9">
										<div class="well">
											boss list, abilities etc
										</div>
									</div>
									<div class="span3">
										<div class="well">
											scrollspy, viable if page is long
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="raids">
							<p><i><h6>foreveralone</h6></i></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>