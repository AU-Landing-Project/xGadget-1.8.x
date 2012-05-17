<?php
    
/**
 * Gadget view page
 *
 * @package XGadget
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jonathan Rico <jonathanrico@peesco.com>
 * @copyright Peesco 2008
 * @link http://www.peesco.com/
 * 
 * updated for 1.8 by Matt Beckett
 */
	 
//some required params
 
$xgadget_code = $vars['entity']->code;
$xgadget_code = substr_replace($xgadget_code,"<",0,1);
$xgadget_height = (int) $vars['entity']->height ? (int) $vars['entity']->height : 300;


// check if the gadget code it's realy a gadget code

preg_match("/.*(\/\/www\.gmodules\.com\/ig\/ifr\?url={1}http:\/\/.*\.xml.*)&amp;synd.*/", $xgadget_code, $xgadget);


if($xgadget[1]){
	// if the flickr id is empty, then do not sure any photos
	$xgadget[1]="http:".$xgadget[1];
?>

<!-- send the xml url to the html generator from google -->

<iframe  width="100%" height="<?php echo $xgadget_height; ?>" src="<?php echo $xgadget[1]; ?>" ><?php echo elgg_echo('xgadget:no:iframes'); ?></iframe>


<?php 

} else {
        
	echo elgg_echo("xgadget:none");
        
}
