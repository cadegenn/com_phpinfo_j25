<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
/**
 * phpinfo View
 */
class phpinfoViewPhpinfo extends JView
{
	public $option;
	
	function __construct($config = array()) {
		$this->option = JRequest::getVar('option', '', 'get','string');
		parent::__construct($config);
	}
	
	/**
	 * phpinfos view display method
	 * @return void
	 */
	function display($tpl = null) 
	{
        $doc = JFactory::getDocument();
        $doc->addStyleSheet('components/'.$this->option.'/css/phpinfo.css');

		$this->component = $this->get('Component');
		$this->manifest = json_decode($this->component->manifest_cache);

		// Set the toolbar
		$this->addToolBar();
		
		// Display the template
		parent::display($tpl);
		
		// Set the document
		//$this->setDocument();
	}
	
	/**
	 * Setting the toolbar
	 */
	protected function addToolBar() 
	{
		// voir d'autres boutons dans /administrator/includes/toolbar.php
		JToolBarHelper::title(JText::_('COM_PHPINFO'), 'phpinfo');
		//JToolBarHelper::deleteListX('', 'phpinfo.delete');
		//JToolBarHelper::editListX('chantier.edit');
		//JToolBarHelper::addNewX('chantier.add');
		//JToolBarHelper::preferences('com_phpinfo');
	}
	
	/**
	 * Method to set up the document properties
	 *
	 * @return void
	 */
	protected function setDocument() 
	{
		$document = JFactory::getDocument();
		$document->setTitle(JText::_('COM_PHPINFO_ADMINISTRATION')." ".JText::_('COM_PHPINFO_VERSION'));
	}
}

?>
