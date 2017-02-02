<?php

/**
 * @package		theme_aardvark
 * @author		Shaun Daubney
 * @license		http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$THEME->name = 'aardvark';

$THEME->doctype = 'html5';
$THEME->parents = array('bootstrapbase');
$THEME->sheets = array('aardvark', 'blockicons', 'settings');
$THEME->yuicssmodules = array();
$THEME->enable_dock = true;
$THEME->editor_sheets = array();

$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->csspostprocess = 'theme_aardvark_process_css';
