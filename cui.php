<?php
/*
Plugin Name: Conversational UI
Plugin URI:  http://www.conversational-ui.io
Description: Directors cut like interaction aid for articles
Version:     0.1
Author:      Jepser Bernardino
Author URI:  http://www.jepser.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: cui
*/

define('CUI_DIR', plugin_dir_path(__FILE__));
define('CUI_URL', plugin_dir_url(__FILE__));
define('CUI_PATH', plugin_basename(dirname(__FILE__)));

require_once(CUI_DIR . 'admin/utils.class.php');

CUIUtils::loadFile('admin/configuration.class.php');

CUIUtils::loadFile('shortcodes/cui-block.php');
CUIUtils::loadFile('shortcodes/cui-interaction.php');

CUIConfiguration::registerHooks();
