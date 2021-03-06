var log = {
  toggle: function() {},
  move: function() {},
  resize: function() {},
  clear: function() {},
  debug: function() {},
  info: function() {},
  warn: function() {},
  error: function() {},
  profile: function() {}
};

function setLanguage(lang) {
    // web_root set in common/header
	
    jQuery.cookie('ve_lang', lang,  { path: '/', secure: false });
    
}


jQuery(document).ready(function() {

	if(typeof jQuery('audio, video').mediaelementplayer == "undefined"){
		return;
	}
	
	/*
    jQuery('audio, video').mediaelementplayer({
        enableAutosize: false,
        // if the <video width> is not specified, this is the default
        
        defaultVideoWidth: 460,
        // if the <video height> is not specified, this is the default
        defaultVideoHeight: 270,
        
        //enableAutosize: true,
        
        // if set, overrides <video width>
        videoWidth: -1,
        // if set, overrides <video height>
        videoHeight: -1,
        // width of audio player
        audioWidth: 460,
        // height of audio player
        audioHeight: 30,
        plugins: ['flash','silverlight'],
        // the order of controls you want on the control bar (and other plugins below)
        features: ['playpause','progress','current','duration','volume','fullscreen']    
    });
    */
    
	jQuery('audio,video').mediaelementplayer({
        audioHeight: 30,
        plugins: ['flash','silverlight'],
        // the order of controls you want on the control bar (and other plugins below)
        features: ['playpause','progress','current','duration','volume','fullscreen'],
		success: function(player, node) {}
	});

	
	

    jQuery('a.return-to').click(function(){
        var returnTo = jQuery(this).attr('rel');
        jQuery.cookie('ve_return_to', returnTo,  {path: '/', secure: false });
    })


});

function setThemePaths(theme){
    if(theme){
        jQuery('#site-title-small img').attr('src',web_root+'/themes/'+theme+'/images/logo.png');
        jQuery('#site-title img').attr('src',web_root+'/themes/'+theme+'/images/logo.png');
        jQuery('img.arrow-left').attr('src',web_root+'/themes/'+theme+'/images/arrow-left.png');
        jQuery('img.arrow-right').attr('src',web_root+'/themes/'+theme+'/images/arrow-right.png');

        jQuery('img.icon-pdf').attr('src',web_root+'/themes/'+theme+'/images/icon-pdf.png');
        jQuery('img.icon-audio').attr('src',web_root+'/themes/'+theme+'/images/icon-audio.png');
        jQuery('img.icon-vid').attr('src',web_root+'/themes/'+theme+'/images/icon-video.png');
    }
}

