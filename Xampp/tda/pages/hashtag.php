<?php
/*$connection = new MongoClient();	
ini_set('mongo.long_as_object', 1);
$collection = $connection->EPL->epl;
$cursor = $collection->find();
$num_docs = $cursor->count(); */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Footweets!!!</title>
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="../dist/css/timeline.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
			<img class="what" src="football-stadium-wallpaper.jpg" height="310" width="1348">
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                   <i class="fa fa-clock-o fa-fw"></i>  <i class="fa fa-caret-down"></i> 
                    </a>
                    <ul class="dropdown-menu dropdown-messages">                       
                        <li>
                            <a class="text-center">
                                <strong>Game Week 35</strong>
                                <i></i>
                            </a>
                        </li>
						 <li class="divider"></li>
						<li>                           
                                <div>
                                    ManCity vs Stoke City
                                    <span class="pull-right text-muted">
                                        <em>Sat |5:15 PM</em>
                                    </span>
                                </div>                            
                        </li>
                        <li class="divider"></li>
                        <li>                          
                                <div>
                                    Aston Villa vs Southampton
                                    <span class="pull-right text-muted">
                                        <em>Sat |7:30 PM</em>
                                    </span>
                                </div>                            
                        </li>
                        <li class="divider"></li>
                        <li>                          
                                <div>
                                    Bournemouth vs Chelsea
                                    <span class="pull-right text-muted">
                                        <em>Sat |7:30 PM</em>
                                    </span>
                                </div>                            
                        </li>
						<li class="divider"></li>
                        <li>                            
                                <div>
                                    Liverpool vs Newcastle
                                    <span class="pull-right text-muted">
                                        <em>Sat |7:30 PM</em>
                                    </span>
                                </div>                           
                        </li>
						<li class="divider"></li>
                        <li>                           
                                <div>
                                    Sunderland vs Arsenal
                                    <span class="pull-right text-muted">
                                        <em>Sun |6:35 PM</em>
                                    </span>
                                </div>                           
                        </li>
						<li class="divider"></li>
                        <li>                          
                                <div>
                                    Leicester vs Swansea City
                                    <span class="pull-right text-muted">
                                        <em>Sun |8:45 PM</em>
                                    </span>
                                </div>                            
                        </li>
						<li class="divider"></li>
                        <li>                           
                                <div>
                                    Tottenham vs WestBrom
                                    <span class="pull-right text-muted">
                                        <em>Tue |12:30 AM</em>
                                    </span>
                                </div>                            
                        </li>
						<li class="divider"></li>
                        <li>
                            <a class="text-center" href="grid.php">
                                <strong>Show All Fixtures</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>                            
                                <div>
                                    <p>
                                        <strong>Leicester City</strong>
                                        <span class="pull-right text-muted">26% Popularity</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100" style="width: 26%">
                                            <span class="sr-only">26% Popularity (success)</span>
                                        </div>
                                    </div>
                                </div>                           
                        </li>
                        <li class="divider"></li>
                        <li>                           
                                <div>
                                    <p>
                                        <strong>Tottenham Hotspur</strong>
                                        <span class="pull-right text-muted">19% Popularity</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="19" aria-valuemin="0" aria-valuemax="100" style="width: 19%">
                                            <span class="sr-only">19% Popularity</span>
                                        </div>
                                    </div>
                                </div>                           
                        </li>
                        <li class="divider"></li>
                        <li>                           
                                <div>
                                    <p>
                                        <strong>Arsenal</strong>
                                        <span class="pull-right text-muted">41% Popularity</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100" style="width: 41%">
                                            <span class="sr-only">41% Popularity (warning)</span>
                                        </div>
                                    </div>
                                </div>                           
                        </li>
                        <li class="divider"></li>
                        <li>                           
                                <div>
                                    <p>
                                        <strong>Manchester City</strong>
                                        <span class="pull-right text-muted">65% Popularity</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                            <span class="sr-only">65% Popularity (danger)</span>
                                        </div>
                                    </div>
                                </div>                         
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="leaguetable.php">
                                <strong>See Full Table</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>                    
                </li>               
            </ul>
			<br> <br>
			<br> <br>
			<br> <br>
			<br> <br>
			<br> <br>
			<br> <br>
			<br> <br>
			<br> <br>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">                 
                       <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								<li>
                                    <a href="playerpop.php">Popularity of Players</a>
                                </li>
                                <li>
                                    <a href="#">Hashtag Popularity</a>
                                </li>
                                <li>
                                    <a href="followmap.php">Follower Map</a>
                                </li>
								<li>
                                    <a href="matchpop.php">Match Popularity</a>
                                </li>
								<li>
                                    <a href="month.php">Tweets count per month</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="leaguetable.php"><i class="fa fa-soccer-ball-o fa-fw"></i>Football League</a>
                        </li>
						   <li>
                            <a href="#"><i class="fa fa-group fa-fw"></i>Teams<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								<li>
                                    <a href="managerpop.php">Manager Popularity</a>
                                </li>
								<li>
                                    <a href="motionmap.php">Motion Map</a>
                                </li>
								<li>
                                    <a href="teams.php">Team Description</a>
                                </li>                               
                            </ul>
                        </li>
						<li>
                            <a href="fixtures/grid.php"><i class="fa fa-flag fa-fw"></i>Fixtures</a>
                        </li>
						<li>
                            <a href="trending.php"><i class="fa fa-heart-o fa-fw"></i>Trending Data</a>
                        </li>
                   </div>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Hashtag Popularity</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Popularity Chart
                        </div>
                        <div class="panel-body">
							<script type="text/javascript">
							function gvisDataPieChartID13d85e536e0f () {
							var data = new google.visualization.DataTable();
							var datajson =
							[
							 [
							 "#EPL",
							364 
							],
							[
							 "#BPL",
							152 
							],
							[
							 "#ARSWBA",
							77 
							],
							[
							 "EURO2106",
							52 
							],
							[
							 "#FOOTBALL",
							36 
							],
							[
							 "#PremierLeague",
							28 
							],
							[
							 "#MUFC",
							17 
							],
							[
							 "#FootballShirtFriday",
							17 
							],
							[
							 "#LFC",
							15 
							],
							[
							 "#UCL",
							15 
							] 
							];
							data.addColumn('string','hashtags');
							data.addColumn('number','HashtagCount');
							data.addRows(datajson);
							return(data);
							}
							function drawChartPieChartID13d85e536e0f() {
							var data = gvisDataPieChartID13d85e536e0f();
							var options = {};
							options["allowHtml"] = true;
							options["width"] =    900;
							options["height"] =    900;
								var chart = new google.visualization.PieChart(
								document.getElementById('PieChartID13d85e536e0f')
								);
								chart.draw(data,options);
							}
							(function() {
							var pkgs = window.__gvisPackages = window.__gvisPackages || [];
							var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
							var chartid = "corechart";
							var i, newPackage = true;
							for (i = 0; newPackage && i < pkgs.length; i++) {
							if (pkgs[i] === chartid)
							newPackage = false;
							}
							if (newPackage)
							  pkgs.push(chartid);
							callbacks.push(drawChartPieChartID13d85e536e0f);
							})();
							function displayChartPieChartID13d85e536e0f() {
							  var pkgs = window.__gvisPackages = window.__gvisPackages || [];
							  var callbacks = window.__gvisCallbacks = window.__gvisCallbacks || [];
							  window.clearTimeout(window.__gvisLoad);
							  window.__gvisLoad = setTimeout(function() {
							  var pkgCount = pkgs.length;
							  google.load("visualization", "1", { packages:pkgs, callback: function() {
							  if (pkgCount != pkgs.length) {
							  return;
							}
							while (callbacks.length > 0)
							callbacks.shift()();
							} });
							}, 100);
							}
							</script>
							<script type="text/javascript" src="https://www.google.com/jsapi?callback=displayChartPieChartID13d85e536e0f"></script>
							<div id="PieChartID13d85e536e0f" 
							  style="width: 900; height: 900;">
							</div>
							  <div class="flot-chart-content" id="flot-line-chart"></div>
							<div class="panel-heading">                         
                        </div>
                        <div class="panel-body">
                            <p>As of now, the most popular hashtag used to mention the english premier league is unsurprisingly, #epl (including #EPL). It is a  small and a general hashtag used to denote a wide variety of topics. It is normally used along with another hashtag. #BPL is the second most popular hashtag of the week. BPL denotes the Barclays Premier League, which is another name of the EPL. #EPL and #BPL take over 2/3rds of the proportion of tweets (compared to the top 10 popular hashtags) #PremierLeague was also used to denote the english premier league (3.6% of the tweets comprising the tweets made by the top 10 EPL Related hashtags) #ARSWBA was the third most popular hashtag. This hashtag was used to denote the game between Arsenal and West Brom in which Sanchez scored a double to propell arsenal to victory.</p>
														<p>Other general hashtags such as #FOOTBALL was also used. Fans used this to show that their tweet was related to football only and not something else. The hype of EURO2016 is also interesting to see. Euros wont start until July, yet talk about the tournament continues. It will be interesting to see how many people talk about the tournament when it starts.
															Other popular hashtags include #MUFC and #LFC, tweets used to represent Manchester United and Liverpool. They both had very successful results this week and that explains why these hashtags are popular.</p>
						</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>
</body>
</html>