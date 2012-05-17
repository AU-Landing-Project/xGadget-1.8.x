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
$id = 'widget-title-' . $vars['entity']->guid;

// title input
$options = array(
	'name' => 'params[title]',
	'value' => $vars['entity']->title,
	'id' => $id,
);

echo elgg_echo("xgadget:title");
echo elgg_view('input/text', $options) . "<br><br>";


// code input
$options = array(
	'name' => 'params[code]',
	'value' => htmlentities($vars['entity']->code),
	'onblur' => "this.value='x'+this.value.substr(1)",
);

echo elgg_echo('xgadget:code');
echo elgg_view('input/text', $options) . "<br><br>";


// height
$options = array(
	'name' => 'params[height]',
	'value' => $vars['entity']->height,
);

echo elgg_echo('xgadget:height');
echo elgg_view('input/text', $options) . "<br><br>";

echo elgg_echo('xgadget:codewhere');
?>


<script>
// live update of the widget title
$(document).ready( function() {
	$("#<?php echo $id; ?>").keyup( function() {
		var title = $("#<?php echo $id; ?>").val();
		$("#elgg-widget-<?php echo $vars['entity']->guid; ?> .elgg-widget-handle h3").text(title);
	});
});
</script>