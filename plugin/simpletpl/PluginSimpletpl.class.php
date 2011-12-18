<?php
/*-------------------------------------------------------
*
*   LiveStreet Engine Social Networking
*   Copyright © 2008 Mzhelskiy Maxim
*
*--------------------------------------------------------
*
*   Official site: www.livestreet.ru
*   Contact e-mail: rus.engine@gmail.com
*
*   GNU General Public License, version 2:
*   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*
---------------------------------------------------------
*/

/**
 * Запрещаем напрямую через браузер обращение к этому файлу.
 */
if (!class_exists('Plugin')) {
	die('Hacking attempt!');
}

class PluginSimpletpl extends Plugin {
	
	protected $aInherits=array(
		'block'  =>array('BlockSimpleUsersTop','BlockSimpleTopicsTop','BlockSimpleTags','BlockSimpleProfileTopics','BlockSimpleProfileComments'),
	);


	public function __construct() {
		parent::__construct();

		$this->aDelegates=array(
			'template'  =>array(Config::Get('path.root.server').'/plugins/page/templates/skin/default/actions/ActionPage/add.tpl'=>'_actions/ActionPage/add.tpl'),
		);
	}

	/**
	 * Активация плагина	 
	 */
	public function Activate() {		
		return true;
	}
	
	/**
	 * Инициализация плагина
	 */
	public function Init() {

	}
}
?>