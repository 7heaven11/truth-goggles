<?PHP
	set_include_path($_SERVER['DOCUMENT_ROOT']);
	require_once("conf.php");
?>
<html>
	<head>
		<title>Critical: Aiding in the audience's critical ability since 2011</title>
		
		<link rel="stylesheet" href="<?PHP echo($SITE_ROOT);?>/styles/main.css" type="text/css" media="screen" title="no title" charset="utf-8">
		<script src="<?PHP echo($SITE_ROOT);?>/scripts/jquery-1.5.2.min.js" type="text/javascript" charset="utf-8"></script>
		
	</head>
	<body>
		<div id="container">
			<div id="header"></div>
			<div id="main">
				<h1>About This Project</h1>
				<p>What you see on this page is currently a work in progress.  It is a prototype.  A <i>lot</i> will be added before it is ready for actual use.  Did I mention it isn't close to finished yet?</p><br />
				<p>As with most tools, the largest challenges are not technical but are social.  With that in mind, what you see on this page is just a tech demo for an idea that will have a full demo in the coming month.  The goggles work in many places, but they aren't that smart yet.  Facts are not scraped, and associations with content aren't being systematically generated just yet.</p><br />
				<p>Follow me at <a href="http://www.twitter.com/slifty">@slifty</a> to get updates about the project.</p>
				<h2>The Demo</h2>
				<p><a href="javascript:var%20goggles_domain='http://<?PHP echo($SITE_DOMAIN.$SITE_ROOT); ?>';var%20s=document.createElement('script');s.type='text/javascript';document.body.appendChild(s);s.src=goggles_domain+'/goggles_bookmarklet.min.js';void(0);">Apply Truth Goggles</a> <-- Bookmark this link! (Drag it to your bookmarks)</p>
				<br />
				<p><b>While</b> advising his Fox News viewers to talk about inflation at their Thanksgiving dinners, Glenn Beck falsely claimed that the government removed food and energy prices from <b>its measure <i>of</i> inflation to hide rising prices, that a survey showed economists are “worried”</b> about inflation, and that Social Security recipients are not receiving a cost-of-living adjustment because the government “changed the calculation.”</p>
				<br />
				<p>
					<span class="critical false">False statements appear red.</span><br /><br />
					<span class="critical mostlyFalse">Mostly false statements appear yellow.</span><br /><br />
					<span class="critical mostlyTrue">Mostly true statements appear blue.</span><br /><br />
					<span class="critical true">True statements appear green.</span><br /><br />
				</p>
				
				<p>It also works elsewhere on the internet!  Check out any of these articles:</p>
				<br />
				<ul>
					<li><a href="http://kaystreet.wordpress.com/2010/11/27" target="_blank">Example 1</a></li>
					<li><a href="http://mediamatters.org/mobile/research/201011230057" target="_blank">Example 2</a></li>
					<li><a href="http://www.commynews.com/tag/dinner" target="_blank">Example 3</a></li>
				</ul>
				<br />
				<p>and try running the bookmarklet again.</p>
			</div>
			<div id="footer"></div>
		</div>
	</body>
</html>