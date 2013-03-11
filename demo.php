<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/reset.css" />
	<link rel="stylesheet" type="text/css" href="css/960.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/slider.css" />
	<link rel="shortcut icon" href="img/tab.jpg"/>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://gsgd.co.uk/sandbox/jquery/easing/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="script/slides.min.jquery.js"></script>
	<script type="text/javascript">
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true
			});
		});
	</script>
	
	<style>span.dropt {border-bottom: thin dotted; background: #999999;}
span.dropt:hover {text-decoration: none; background: #999999; z-index: 6; }
span.dropt span {position: absolute; left: -9999px;
  margin: 20px 0 0 0px; padding: 3px 3px 3px 3px;
  border-style:solid; border-color:black; border-width:1px; z-index: 6;}
span.dropt:hover span {left: 2%; background: #999999;} 
span.dropt span {position: absolute; left: -9999px;
  margin: 4px 0 0 0px; padding: 3px 3px 3px 3px; 
  border-style:solid; border-color:black; border-width:1px;}
span.dropt:hover span {margin: 20px 0 0 170px; background: #999999; z-index:6;} </style>


	<title>Camp Herrlich</title>
</head>

<body>
	<!-- HEADER SECTION -->

	<div class='grid_12' id='header'>
		
		<?php
			include 'inc/header.php';
		?>
		<img src='png/CH_Logo.png' alt='Welcome To Camp Herrlich Live' id='CH_Logo'/>
	</div>

	<!-- CONTENT SECTION -->
<div class="container_12">
		
	<h1 id='page_title'>demo &amp; progress</h1>
	
	<div class='demo_p'>Welcome to my online presentation of my project:<br /> Camp Herrlich Live</div>
	
	<div id='controlTags'> 
		<br />
		<img src="demo/titleControl.gif" alt="Title" />
		<a href="#appResearch"><img src="demo/research.gif" alt='Research'/></a>
		<a href="#progress"><img src="demo/management.gif" alt='Management'/></a>
		<a href="#wayFwd"><img src="demo/wayfwd.gif" alt='Way Forward'/></a>
		<a href="index.php"><img src="demo/product.gif" alt='Product'/></a>	
		<p>bullai121</p></div>
		
	<div id="example2">
			<img src="img/new-ribbon.png" width="112" height="112" alt="New Ribbon" id="ribbon"/>
			<div id="slides">
				<div class="slides_container">	
					<a href="" title=""><img src="img/0_slide.gif" width="570" height="270" alt="Slide 1"/></a>
					<a href="" title=""><img src="img/blank_slide.png" width="570" height="270" alt="Slide 2"/></a>
	
					<a href="" title=""><img src="img/1_slide.png" width="570" height="270" alt="Slide 3"/></a>
					<a href="" title=""><img src="img/3_slide.jpg" width="570" height="270" alt="Slide 4"/></a>
				</div>
				<a href="#" class="prev"><img src="img/arrow-prev.png" width="24" height="43" alt="Arrow Prev"/></a>
				<a href="#" class="next"><img src="img/arrow-next.png" width="24" height="43" alt="Arrow Next"/></a>
			</div>
			<img src="img/example-frame.png" width="739" height="341" alt="Example Frame" id="frame"/>
		</div>
		
	<div class='bigBuffer'></div>
	
	<a name="appResearch"></a> 
	<h2>Application Of Research</h2>
	
	<h5>Research has had a BIG impact on my approach and the techniques and methods I have undertaken.</h5>
	
	<ul class='demoList'>
		<li>The life cycle approach</li>
		<li>The Planning invloved</li>
		<li>Security</li>
		<li>Technologies</li>
	</ul>
	<br /><br /><br /><br />
	<h5>Particular areas to where research has led:</h5>
	
	<ul class='demoList'>
		<li>CAPTCHA</li>
		<img class='screenshot' src='demo/captcha.gif' alt='Captcha'/>
		
		<li>Object Orientation / 'Include Structures'</li>
		<img class='screenshot' src='demo/includes.gif' alt='Includes'/>		
		<li>Advanced PHP Techniques</li>
		<h4>I am currently researching and testing new ways to interact with the database using
			a safer alternative to mySQL - > mySQLi, again this may require some redevelopment.</h4>
		<h4>Researching and testing in OO based frameworks is also in progress with learnings in IITB, this may be introduced
			in areas of the product, however this is already in use in some way via includes</h4>
		
		<li>Ajax</li>
		<img class='screenshot' src='demo/ajax.gif' alt='Ajax'/>
		
		<li>jQuery (Advanced Learning)</li>
		
	</ul>
	
	<div class='bigBuffer'></div>
	<a name="progress"></a> 
	<h2>Current Progress &amp; Management</h2>
	
	<h4>Currently the project is <span id='ontime'>ON TIME</span> and on track to success!</h4>
	
	<h4>There have been many challenges and issues thus far which will be highlighted in the demo.</h4>
	
	
	<h4>How has the project been managed?</h4>
	
	<img src="demo/cycle.gif" width="500px" height="500px" alt="Life Cycle"/>
	
	<h4>The approach is generally consistent of the waterfall (mainly due to the planning that had to be undertaken).<br />
	However the project is already seeing some rapid style additions and reviews due to the clients new or amended specifications.</h4>
	<h4>A recent example being the possibility of including overnight groups throughout the year in the product, this was not planned in nor designed to accomodate this.</h4>
	<h4>In all, with the use of my log and planning documents I am well equipped to run a well focused and thought out project.</h4>
	<br/><br/><br/>
	
	<div id='planning'>
		<div class='planning_item'>
			<span class="dropt" title="Project Log">
				<img class='planning_item' src='demo/log.gif' alt='Project Log'/>
  					<span>
  						<img src="demo/logScreenShot.gif"/>
  					</span>
  			</span>		
  			
  			<span class="dropt" title="Project Log">
				<a href='demo/docs/storyboards.pdf' target="_blank"><img class='planning_item' src='demo/storyboards.gif' alt='Storyboards'/></a>
  					<span>
  						<img src="demo/storyboardScreenShot.gif"/>
  					</span>
  			</span>
  			
  			 <span class="dropt" title="Project Log">
				<img class='planning_item' src='demo/wbs.gif' alt='Storyboards'/></a>
  					<span>
  						<img src="demo/wbsScreenShot.gif"/>
  					</span>
  			</span>		
  			
  			
  		
			<a href='demo_models.php' target="_blank"><img class='planning_item' src='demo/models.gif' alt='Models'/></a>
		
			<span class="dropt" title="Project Log">
				<img class='planning_item' src='demo/gantt.gif' alt='Gantt'/>
  					<span>
  						<img src="demo/ganttScreenShot.gif"/>
  					</span>
  			</span>		
			
			
			
			<span class="dropt" title="Project Log">
				<img class='planning_item' src='demo/aplan.gif' alt='Action Plan'/>
  					<span>
  						<img src="demo/aplanScreenShot.gif"/>
  					</span>
  			</span>		
			
			
			
	</div>
		
	
			
		
	</div>
	<div class='bigBuffer'></div>
	<a name="wayFwd"></a> 
		
	<h2>Clear And Focused Progression</h2>
	
	<ul class='demoList'>
		<li>The product is now in the initial stages of connection to the various users (as this is a multi-level user account product)</li>
		<li>This is now moving the project forward rapidly with the vital foundations in place</li>
		<li>Looking forward, there are several tasks to be acheived: <br/><br/>
			- Messaging
			<br/><br/>
			- Atom<br/><br/>
			- Securing<br/><br/>
			- Testing (which quite effectively is being done as the product progresses using the log)
			- Completion and Sign Off</li>
		<li>I am very confident that this product will offer everything intended in the specification with hopes to the include extra features requested</li>
	</ul>
	
	<h4>I am very focused and well prepared for the up and coming tasks and with more hard work and determination I am very confident that my product will be ready well <b>BEFORE</b> the deadline.</h4>
	
	
	
	
	

	
</div>	
	
	
	
	
	<!-- FOOTER SECTION -->
	<div class='grid_12' id='footer'>
		<?php
			include 'inc/footer.php';
		?>
		
	
	</div>

</body>

</html>