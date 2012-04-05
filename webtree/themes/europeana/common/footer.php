	</div><!-- end content -->
    <div class="clear"></div>
	<div id="footer">
        <div class="nav-container">
            <div class="grid_10">
               <ul class="navigation">
                   <li><a href="<?php echo uri('items/browse');?>">Browse all items</a></li>
                   <li><a href="<?php echo uri('art-nouveau/credits');?>">Credits</a></li>
               </ul>
            </div>


            <div id="communities" class="grid_6">
                <a href="http://www.facebook.com/Europeana" target="_blank" title="Follow us on Facebook!"><img src="<?php echo img('icon_Facebook.png'); ?>" alt="Follow us on Facebook!" /></a>
                <a href="http://twitter.com/EuropeanaEU" target="_blank" title="Follow us on Twitter!"><img src="<?php echo img('icon_Twitter.png'); ?>" alt="Follow us on Twitter!" /></a>


                <?php echo getAddThisStandard(); ?>					 
                
            </div>
	     </div>
	</div><!-- end footer -->
</div><!-- end container_16 -->

<?php echo plugin_footer(); ?> 
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-12776629-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>
