<?php head(array('title' => item('Dublin Core', 'Title'), 'bodyid' => 'items', 'bodyclass'=>'exhibit-item-show')); ?>
<?php
  $returnPoint = $_SERVER['HTTP_REFERER'];
  $queryString = '?tags=' . $_GET['tags'] . '&theme=' . $_GET['theme'];
?>


<!-- <div class="row"> opened in header.... -->

	<div class="twelve columns">
	    <div class="return-nav">
			<div class="" style="float:left;">
				<?php echo ve_return_to_exhbit(); ?>
			</div>
			
			<?php if($returnPoint): ?>
				<div style="float:right;">
					<a class="widget" href="<?php echo uri('items/browse') . $queryString; ?>">
						<span class="icon arrow left"></span>
						<?php echo ve_translate('back', 'Back');?>
					</a>
				</div>
			<?php endif; ?>
	    
	    </div>
	</div>
	
</div>	<!-- end row -->


<div class="row">

	<div class="six columns">
        <?php echo ve_exhibit_builder_exhibit_display_item(array('imageSize' => 'fullsize'), array('class' => 'box', 'id' => 'img-large', 'name' => 'exhibit-item-metadata-1')); ?>
    </div>

    <div class="six columns">

<!--        <ul class="item-pagination navigation">-->
<!--            <li id="previous-item" class="previous">--><?php //echo link_to_previous_item('Previous Item'); ?><!--</li>-->
<!--            <li id="next-item" class="next">--><?php //echo link_to_next_item('Next Item'); ?><!--</li>-->
<!--        </ul>-->

        <!--<?php //echo show_item_metadata(array('show_empty_elements' => false, 'return_type' => 'html')); ?> -->
        <?php echo ve_custom_show_item_metadata(array('show_empty_elements' => false, 'return_type' => 'html')); ?>
    </div>
</div>

	
<?php
	try {
		//echo("RECORD ID = " . $_POST['record_id']);
		commenting_echo_comments();
		commenting_echo_comment_form();	
	}
	catch (Exception $e) {
	    echo('Error: ' . $e->getMessage());
	}		
?>
	</div>
</div>
	
    

</div><!-- end primary -->
<script type="text/javascript">
jQuery(document).ready(function() {
   setThemePaths("<?php echo $_GET['theme']; ?>");
});
</script>

<link rel="stylesheet" href="<?php echo css('mediaelement/mediaelementplayer'); ?>"/>

<?php foot(); ?>