<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
 
// load tooltip behavior
JHtml::_('behavior.tooltip');
?>

<table class="adminlist">
	<thead><?php //echo $this->loadTemplate('head');?></thead>
	<tbody><?php phpinfo();?></tbody>
	<tfoot><pre><?php var_dump($this); ?></pre></tfoot>
</table>
<div>
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
	<?php echo JHtml::_('form.token'); ?>
</div>
