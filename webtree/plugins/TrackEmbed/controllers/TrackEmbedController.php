<?php

class TrackEmbed_TrackEmbedController extends Omeka_Controller_Action
{
    public function init()
    {
        $this->_modelClass = 'Embed';
    }
    
    
   	public function downloadAction()
   	{        
        $request = $this->getRequest();
		
		// set the default timezone to use. Available since PHP 5.1
		date_default_timezone_set('UTC');
		$period = date('Ym');
		
   		if( $_SERVER['HTTP_REFERER']){
   			// update or create new....
   	        $embed = $this->getTable('Embed')->findBySql('referer = ? AND resource = ? AND period = ?', array($_SERVER['HTTP_REFERER'], $request->getParam('id'), $period ) );
				
   			if($embed && count($embed) > 0 ){
   				$embed = reset($embed);
   				$embed->view_count = $embed->view_count + 1;	// bump view_count
   				$embed->last_accessed = NULL;					// force update in the db by nullifying here
   				$embed->save();
   			}
   			else{
   				$embed = new Embed();
   				$data = array(
   						"referer" => $_SERVER['HTTP_REFERER'],
   						"resource" => $request->getParam('id'),
   						"period" => $period,
   						"view_count" => 1
   						);
   				$embed->setArray($data);
   				$embed->save();
   			}
   		}

        $file = $this->findById($request->getParam('id'), 'File');
        
        // Get the archive path for the file
        $path = $file->getWebPath('archive');
        $this->getResponse()->setHeader('Location', $path);
         
        //Don't render anything 
        $this->_helper->viewRenderer->setNoRender();
    }
}