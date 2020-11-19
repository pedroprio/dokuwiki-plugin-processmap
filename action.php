<?php
/**
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     dan.kreiser <dan.kreiser@gmail.com>
 */

// must be run within Dokuwiki
if(!defined('DOKU_INC')) die();

if(!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN',DOKU_INC.'lib/plugins/');
require_once(DOKU_PLUGIN.'action.php');

class action_plugin_symbols extends DokuWiki_Action_Plugin {

    /**
     * return some info
     *
	* @author     dan.kreiser <dan.kreiser@gmail.com>
     */
    function getInfo(){
        return array_merge(confToHash(dirname(__FILE__).'/README'), array('name' => 'Toolbar Component'));
    }

    /**
     * register the eventhandlers
     *
      * @author     dan.kreiser <dan.kreiser@gmail.com>
     */
    function register(&$controller){
        $controller->register_hook('TOOLBAR_DEFINE', 'AFTER', $this, 'handle_toolbar', array ());
   
    }

	
	 function handle_toolbar(&$event, $param) {
        $event->data[] =array (
            'type' => 'picker',
            'title' => $this->getLang('symbols'),
            'icon' => '../../plugins/symbols/images/toolbar/buttons/symbole.png',
            'list' => array(
                array(
                    'type'   => 'insert',
                    'title'  => 'Inicio',
                    'icon'   => '../../plugins/symbols/images/toolbar/symbols/i-mp-inicio.png',
                    'insert'   => 'i-mp-inicio',
                ),
                array(
                    'type'   => 'insert',
                    'title'  => 'Caixa Simples',
                    'icon'   => '../../plugins/symbols/images/toolbar/symbols/i-mp-01.png',
                    'insert'   => 'i-mp-01',
                ),
                array(
                    'type'   => 'insert',
                    'title'  => 'Caixa Simples',
                    'icon'   => '../../plugins/symbols/images/toolbar/symbols/i-mp-fim.png',
                    'insert'   => 'i-mp-fim',
                ),		
				
				)
				);
    }
	
}

