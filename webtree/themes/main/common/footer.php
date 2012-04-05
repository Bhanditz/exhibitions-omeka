<?php
/**
 * File: Footer.php
 * Common footer shared across this theme and all themes that don't have this page defined
 */
    $currentExhibit = exhibit_builder_get_current_exhibit();
    $eName = ve_get_exhibit_name_from_slug($exhibit->slug);
    $pageSlug = 'credits-' . $eName;
    $creditsPage = ve_get_page_by_slug($pageSlug);
?>



<div class="row" id="bottom-navigation">
	<div class="six columns">
		<ul class="navigation">
			<li>
				<a href="<?php echo uri('contact');?>"><?php echo ve_translate('contact', 'Contact');?></a>
			</li>
			<?php if (exhibit_builder_get_current_exhibit()): ?>
			<li>
				<a class="return-to" rel="<?php echo uri(); ?>"
					href="<?php echo uri('items/browse') . '/?tags=' . ve_get_exhibit_name_from_slug($exhibit->slug) . '&theme=' . $currentExhibit->theme; ?>"><?php echo ve_translate("items-browse", "Browse items");?></a>
			</li>

			<?php if ($creditsPage):?>
                <li>
                    <a  class="return-to" rel="<?php echo uri(); ?>"
                        href="<?php echo uri('credits-' . $eName) . '?theme=' . $currentExhibit->theme;?>"><?php echo ve_translate('credits', 'Credits');?>
                    </a>
                </li>

                <?php endif; ?>
                <?php endif; ?>
                 <li>
                   <a
                      href="<?php echo uri('about-exhibitions');?>"><?php echo ve_translate("about-exhibitions", "About Exhibitions");?>
                   </a>
               </li>
                
                 </ul>


        </div>
		<div class="six columns" style="text-align: right;">
			<ul class="navigation">
				<!-- 
				<li><a href="http://www.facebook.com/Europeana" target="_blank" title="Follow us on Facebook!"><img src="http://exhibitions.europeana.eu/themes/europeana/images/icon_Facebook.png" alt="Follow us on Facebook!"></a></li>
				<li><a href="http://twitter.com/EuropeanaEU" target="_blank" title="Follow us on Twitter!"><img src="http://exhibitions.europeana.eu/themes/europeana/images/icon_Twitter.png" alt="Follow us on Twitter!"></a></li>
				-->
				<li>
 					<style type="text/css">
	 					table.uiGrid{
	 						width:	26.8333px !important;
							height:	17.8333px !important;
	 					}
	 					
	 					td.connect_widget_button_count_excluding{
	 						width:	26.8333px !important;
							height:	19.8333px !important;
	 					}
 					</style>
 					
 					<div id="standard_shares">
 						<?php echo getAddThisStandard(); ?>					 
					</div>
				</li>
			</ul>

					

            

   	<script type="text/javascript">
//	alert("call responsive gallery in main/common/footer");
	
	responsiveGallery({
		scriptClass: 'euresponsive-script',
		testClass: 'euresponsive',
		initialSuffix: '_euresponsive_1.jpg',
		suffixes: {
			'1': '_euresponsive_1.jpg',
			'2': '_euresponsive_2.jpg',
			'3': '_euresponsive_3.jpg',
			'4': '_euresponsive_4.jpg'
		}
	});
	</script>
            
            
        </div>
    </div>
</div>

<?php if (isset($_GET['theme'])): ?>
    <script type="text/javascript" language="javascript">

        jQuery(document).ready(function() {
    		//alert("main/common/footer     setThemePaths();");
    		if(typeof(setThemePaths) != "undefined"){
	            setThemePaths("<?php echo $_GET['theme']; ?>");
       		}
        });
    </script>
<?php endif; ?>

</div><!-- end container -->
