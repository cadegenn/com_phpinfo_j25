<?php

/**
 * @package		
 * @subpackage	
 * @brief
 * @copyright	Copyright (C) 2010 - 2014 DEGENNES Charles-Antoine <cadegenn@gmail.com>
 * @license		Affero GNU General Public License version 3 or later; see LICENSE.txt
 * 
 * @TODO		
 */

/** 
 *  Copyright (C) 2014-2014 DEGENNES Charles-Antoine <cadegenn@gmail.com>
 *  com_phpinfo is a joomla! 2.5 component
 *  
 *  This file is part of com_phpinfo.
 * 
 *     com_phpinfo is free software: you can redistribute it and/or modify
 *     it under the terms of the Affero GNU General Public License as published by
 *     the Free Software Foundation, either version 3 of the License, or
 *     (at your option) any later version.
 * 
 *     com_phpinfo is distributed in the hope that it will be useful,
 *     but WITHOUT ANY WARRANTY; without even the implied warranty of
 *     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *     Affero GNU General Public License for more details.
 * 
 *     You should have received a copy of the Affero GNU General Public License
 *     along with com_phpinfo.  If not, see <http://www.gnu.org/licenses/>.
 * 
 */
?>

<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
// import the Joomla modellist library
jimport('joomla.application.component.modellist');
/**
 * phpinfoModelPhpinfo List Model
 */
class phpinfoModelPhpinfo extends JModelList
{
	/**
	 * @brief	getComponent()	get version of component from Joomla!'s database
	 * @return	(string)		version of component
	 * @since	0.1.13
	 */
	public function getComponent() {
		// Create a new query object.
		$db = $this->getDbo();
		$query = $db->getQuery(true);

		$component = JRequest::getVar('option', '','get','string');
		// Construct the query
		$query->select('*')->from('#__extensions AS e')->where('name = "'.$component.'"');

		// Setup the query
		$db->setQuery($query->__toString(), 0, 1);

		// Return the result
		return $db->loadObject();
	}

}
?>
