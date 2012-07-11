<?php
/*
 * SET/GET ALL NECESSARY SESSION VARS
 */
ve_session_vars();


	// helper function
	function selfURL(){
		if(!isset($_SERVER['REQUEST_URI'])){
			$serverrequri = $_SERVER['PHP_SELF'];
		}
		else{
			$serverrequri = $_SERVER['REQUEST_URI'];
		}
		$s = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "s" : "";
		$protocol = strleft(strtolower($_SERVER["SERVER_PROTOCOL"]), "/").$s;
		$port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]);
		return $protocol."://".$_SERVER['SERVER_NAME'].$port.$serverrequri;
	}
?>

<!doctype html>


	<head>
	
	
	http://localhost/ombad/webtree/service/oembed/8
		
	<link rel="alternate" type="application/json+oembed"
		
		href="<?php echo(WEB_ROOT); ?>/service/oembed/8?url=<?php urlencode(selfURL);?>;format=json"
			
			
		title="Andy's test title json" />
	
	<link rel="alternate" type="text/xml+oembed"
		href="<?php echo(WEB_ROOT); ?>/service/oembed/8?url=http%3a%2f%2facceptance.exhibit.eanadev.org%2ftrack_embed%2fdownload%2f185&amp;format=xml"
		title="Andy's test title xml" />
	
	<!--/*
	
	<link rel="alternate" type="application/json+oembed"
		href="http://acceptance.exhibit.eanadev.org/track_embed/download/oembed?url=http%3A//acceptance.exhibit.eanadev.org/track_embed/download/185&format=json"
		title="Andy's test title json" />
	
	<link rel="alternate" type="text/xml+oembed"
		href="http://acceptance.exhibit.eanadev.org/track_embed/download/oembed?url=http%3A//acceptance.exhibit.eanadev.org/track_embed/download/185&format=xml"
		title="Andy's test title xml" />

	*/-->
	
	
	<link rel="alternate" type="application/json+oembed"
		href="http://flickr.com/services/oembed?url=http%3A//flickr.com/photos/bees/2362225867/&format=json"
		title="Bacon Lollys oEmbed Profile" />
	
	<meta charset="utf-8" />


	
	<meta http-equiv="X-UA-Compatible" value="IE=9" />
	
	
	<meta property="author" content="test oembed" />
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <script type="text/javascript">var web_root = "<?php echo WEB_ROOT; ?>";</script>


<?php
	$pageURL = "http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
?>



<?php if ($pageURL == WEB_ROOT."/"): ?>

	<meta name="author" content="Andy MacLean" />
	<meta name="author" content="Dean Birkett" />

	<title>Europeana Exhibitions</title>

	<meta name="description" content="Europeana Exhibitions, a place for Europeana and their partners to showcase their exhibitions." />

	<!--
		Splash page body comes from SimplePages, which wraps everything in a div with the id "primary".
		Here we open the body tag and leave the simple page to write the rest.
	-->
	
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->	
	

	<!--link rel="stylesheet" href="http://127.0.0.1/ombad/webtree/themes/main/css/foundation/stylesheets/foundation.css" /-->
	<link rel="stylesheet" href="themes/main/css/foundation/stylesheets/foundation.css" />
	<link rel="stylesheet" href="themes/main/css/foundation-overrides.css" />
	<link rel="stylesheet" href="splash/css/style.css" />
	<link rel="stylesheet" href="splash/css/splash.css" />

	<!--[if IE 7]><link rel="stylesheet" type="text/css" href="splash/css/ie7.css" /><![endif]-->
	
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  //_gaq.push(['_setAccount', 'UA-31316761-1']);	// acceptance
	  _gaq.push(['_setAccount', 'UA-12776629-3']);	// production
	  _gaq.push(['_trackPageview']);
	 
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
	<!-- other scripts at bottom of page (see Simple Page) -->

	</head>
	<body>
		<form method="POST" action="" name="setLang" id="setLang">
			<input type="hidden" id="lang" name="lang"/>
		</form>

		
<?php else: ?>

	<!--DEFAULT HEAD / BODY-->
		<meta name="author" content="Andy MacLean" />


		<title><?php echo ve_exhibit_breadcrumbs($pageId = null, $exhibit = null, $section = null, $showAsTitle=true); ?></title>


	    <!-- Meta -->
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5"/>
	    <!--meta name="description" content="<?php //echo settings('description'); ?>"/-->
	    <?php echo auto_discovery_link_tag(); ?>

	    <!-- Plugin Stuff -->
	    <?php plugin_header(); ?>

	    <!-- Stylesheets -->
	    <?php ve_set_exhibits_css();?>
	    
	    
	    <!--BEGIN RESPONSIVE CODE-->
	   	<style>
		<?php
		
			$BREAKPOINTS = explode("~", get_option('euresponsive_breakpoints'));
			for ($i = 0; $i < sizeof($BREAKPOINTS); $i++) {
				$j=$i+1;
				echo (PHP_EOL);
				echo ("        @media all and (min-width: ".$BREAKPOINTS[$i]."px){".PHP_EOL);
				echo ("          .euresponsive {".PHP_EOL);
				echo ("            width: ".$j."px;".PHP_EOL);
				echo ("          }".PHP_EOL);
				echo ("        }".PHP_EOL);
			}
			
		?>
		</style>
		
		<?php echo js('euresponsive'); ?>
		<script type="text/javascript">

			// ipad fix
			if (navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i)) {
			    var viewportmeta = document.querySelector('meta[name="viewport"]');
			    if (viewportmeta) {
			        viewportmeta.content = 'width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0';
			        document.body.addEventListener('gesturestart', function () {
			            viewportmeta.content = 'width=device-width, minimum-scale=0.25, maximum-scale=1.6';
			        }, false);
			    }
			}

		</script>
	    <!--END RESPONSIVE CODE-->
	    
	    
	    <!-- JavaScripts -->
	    <?php ve_set_exhibit_js(); ?>
	</head>

	<body<?php echo isset($bodyid) ? ' id="' . $bodyid . '"' : ''; ?><?php echo isset($bodyclass) ? ' class="' . $bodyclass . '"' : ''; ?>>
	
	<div class="container">
		
	    <div id="header" class="row">
	        <div class="twelve columns">
	        
	        
	        	<?php if (strrpos($pageURL, 'browse') > 0): ?>
	        	
		        	<div id="site-title" class="twelve columns">
		        		<h1 style="margin-bottom:0px;">
		        			<a href="<?php echo(WEB_ROOT); ?>"><img alt="Europeana Exhibitions" src="<?php echo img('logo.png'); ?>"></a>
		        		</h1>
		        	</div>
		        	
	        	<?php else: ?>
	        	
		        	<div id="site-title" class="twelve columns">
						<a href="<?php echo(WEB_ROOT); ?>"><img alt="Europeana Exhibitions" src="<?php echo img('logo.png'); ?>"></a>
		        	</div>
		        	
	        	<?php endif; ?>
	        	
	        	
		        <div id="secondary-branding" style="float:right;"><?php echo ve_exhibit_secondary_logo(); ?></div>
	        	
	        </div>
	    </div>
		
	    
		<div id="top-navigation" class="row">
		    <div class="twelve columns inner">
			    <div id="main-breadcrumbs" style="float:left;">
				    <div id="site-title-small">
				        <a target="_blank"  href="<?php echo(WEB_ROOT); ?>">
				            <img alt="Europeana Exhibitions" src="<?php echo img('logo_no_text.png'); ?>"/>
				        </a>
				    </div>
			        <?php echo ve_exhibit_breadcrumbs(); ?>
			    </div>
				<div id="standard_shares" style="float:right;"><?php echo getAddThisStandard(); ?></div>
			</div>
	     </div>
	    
		<div id="content" class="row" andy="header file ends here">

<?php endif; ?>