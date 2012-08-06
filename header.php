<!--<marquee loop="2">***WARNING: THIS SITE IS BETTER VIEWED IN FIREFOX OR CHROME!!!***</marquee>-->
<div class="header">
			<h1> BASEBALL FOR LIFE:  THE NEXT CHAPTER</h1>
		</div>
		<div class="navbar"><!--Navigation Bar-->
			<div class="navbar-inner"><!--Where colors and gradient is defined-->
				<ul class="nav">
					<li><a href="index.php"><i class="icon-home icon-white"></i>Home</a></li><!--Class "active" shows current page as highlighted-->
					<li><a href="http://games.espn.go.com/flb/standings?leagueId=42147&seasonId=2012">Standings</a></li>
					
					<?php 
					
		$accounts= mysql_connect("baseballforlife.db.9357957.hostedresource.com","baseballforlife", "Mattingly2327") 
		or die (mysql_error());
		mysql_select_db("baseballforlife", $accounts);



$q ="SELECT MAX(Week) FROM PowerRankings";
$result = mysql_query($q);
$data=mysql_fetch_array($result);
					echo '<li><a href="PowerRankings.php?WeekPicked='.$data[0].'">Power Rankings</a></li>';
					?>
					<li><a href="keepers.php">Keepers</a></li>
					<li><a href="history.php?YearPicked=All-Time">History</a></li>
					<li><a href="#">Team Bios</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"> Fantasy Baseball Sites<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="nav-header">My Teams</li>
							<!--<li><a href="http://games.espn.go.com/flb/leagueoffice?leagueId=42147&teamId=7&seasonId=2012">Rob's League</a></li>
							<li><a href="http://games.espn.go.com/flb/leagueoffice?leagueId=7943&seasonId=2012">My League</a></li>
							<li class="divider"></li>
							<li class="nav-header">Other Sites</li>-->
							<li><a href="http://games.espn.go.com/frontpage/baseball">ESPN</a></li>
							<li><a href="http://insider.espn.go.com/mlb/features/rumors">ESPN Rumors</a></li>
							<li><a href="http://www.fannation.com/truth_and_rumors?eref=sihp&sct=hp_bf2_a2">CNNSI Truth & Rumors</a></li>
						</ul>
					</li>   
				</ul>
			</div>
		</div>
		
		