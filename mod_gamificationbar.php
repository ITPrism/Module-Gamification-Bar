<?php
/**
 * @package      Gamification Platform
 * @subpackage   Modules
 * @author       Todor Iliev
 * @copyright    Copyright (C) 2014 Todor Iliev <todor@itprism.com>. All rights reserved.
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

// no direct access
defined("_JEXEC") or die;

jimport("gamification.init");

// Get component parameters
$componentParams = JComponentHelper::getParams("com_gamification");

$doc = JFactory::getDocument();

$doc->addStyleSheet(JURI::root().'modules/mod_gamificationbar/css/style.css');
$doc->addScript(JURI::root()."modules/mod_gamificationbar/js/jquery.gamificationnotifications.js");
$js = '
    jQuery(document).ready(function() {
        jQuery("#gfy-ntfy").GamificationNotifications({
            resultsLimit: '.$params->get("results_limit", 5).'
        });
                    
    });
';
$doc->addScriptDeclaration($js);

require JModuleHelper::getLayoutPath('mod_gamificationbar', $params->get('layout', 'default'));