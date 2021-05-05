<?php
/**
 * Plugin Fussballergebnisse Joomla 3.1+
 * @version    : 1.0.0
 * @package    : Joomla 3.1+
 * @license    : GNU General Public License version 2 or later
 * @copyright  : (C) 2016 by Internetagentur Kähler - All rights reserved!
 * @website    : http://www.internetagentur-kaehler.de
 */

// no direct access
defined( '_JEXEC' ) or die;
 
class plgContentFussballergebnisse extends JPlugin
{
	protected $autoloadLanguage = true;
	
    public function onContentPrepare($context, &$article, &$params, $limitstart = 0)
    {
    	// any matches of 'fussballergebnisse' in article?
    	if (strpos($article->text, 'fussballergebnisse') === false)
    	{
    		return true;
    	}
    	
    	// Search for expression 'fussballergebnisse'
    	$regex = '/{fussballergebnisse\s(.*?)}/i';
    	
    	// Find all instances of plugin and put in $matches for loadposition
    	// $matches[0] is full pattern match, $matches[1] is the position
    	preg_match_all($regex, $article->text, $matches, PREG_SET_ORDER);
    	
    	// Are there any matches?
    	if ($matches)
    	{
    		//load javascript from www.fussball.de
			$document = JFactory::getDocument();
			$document->addScript('http://www.fussball.de/static/layout/fbde2/egm//js/widget2.js');
			
			//we need a counter for multiple widgets
			$counter = 1;
			
    		foreach ($matches as $match)
    		{
    			$matcheslist = explode(',', $match[1]);
    			
				if( count($matcheslist) > 0 ) {
					
					//now we have the code
					$code = $matcheslist[0];
					
					//widgetcode for widget-id
					$html = '<div id="widget'.$counter.'"></div><script type="text/javascript">new fussballdeWidgetAPI().showWidget(\'widget'.$counter.'\', \''.$code.'\');</script>';
					
					//replace the pattern with the html code
					$article->text = preg_replace("|".$match[0]."|", addcslashes($html, '\\$'), $article->text, 1);
				}
				
				//next widget
				$counter++;
    		}
    	}

    }
}
?>
