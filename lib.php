<?php

/*
 * @author    Shaun Daubney
 * @package   theme_aardvark
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

function aardvark_process_css($css, $theme) {
	
	// Set the main colour
    if (!empty($theme->settings->maincolor)) {
        $maincolor = $theme->settings->maincolor;
    } else {
        $maincolor = null;
    }
    $css = aardvark_set_maincolor($css, $maincolor);
	
	// Set the image for the logo 
    if (!empty($theme->settings->logo)) {
        $logo = $theme->settings->logo;
    } else {
        $logo = null;
    }
    $css = aardvark_set_logo($css, $logo);
	
	    // Set custom CSS
    if (!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = aardvark_set_customcss($css, $customcss);
    
    return $css;
}

function aardvark_set_maincolor($css, $maincolor) {
    $tag = '[[setting:maincolor]]';
    $replacement = $maincolor;
    if (is_null($replacement)) {
        $replacement = '#f98012';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function aardvark_set_logo($css, $logo) {
	global $OUTPUT;  
	$tag = '[[setting:logo]]';
	$replacement = $logo;
	$css = str_replace($tag, $replacement, $css);
	return $css;
}

function aardvark_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $replacement = $customcss;
    if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}


