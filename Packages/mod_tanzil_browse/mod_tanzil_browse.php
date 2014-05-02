<?php
/**
 * @package     Tanzil.Site
 * @subpackage  mod_tanzil_browse
 *
 * @copyright   Copyright (C) 2013 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

if(JRequest::getCmd('option') == 'com_tanzil')
{
	// Include the Tanzil functions only once
	require_once __DIR__ . '/helper.php';

	$suras = ModTanzilBrowseHelper::getSuras($params);

	$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

	require JModuleHelper::getLayoutPath('mod_tanzil_browse', $params->get('layout', 'default'));
}
