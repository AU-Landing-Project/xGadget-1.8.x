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
	
function xgadget_init() {
    		
	//add a widget
	elgg_register_widget_type('xgadget', elgg_echo('xgadget:google:gadgets'), elgg_echo('xgadget:add:to:page'), 'all,index', TRUE);
}
		
elgg_register_event_handler('init','system','xgadget_init');

