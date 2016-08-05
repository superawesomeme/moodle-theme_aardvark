<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/*
 * @author    Shaun Daubney
 * @package   theme_aardvark
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

function theme_aardvark_process_css($css, $theme) {

    // Set the background image for the 'Brand' logo.
    $brandlogo = $theme->setting_file_url('brandlogo', 'brandlogo');
    $css = theme_aardvark_set_brandlogo($css, $brandlogo);

    // Set the main colour.
    $maincolor = $theme->settings->maincolor;
    $css = theme_aardvark_set_maincolor($css, $maincolor);

    // Set custom CSS.
    $customcss = $theme->settings->customcss;
    $css = theme_aardvark_set_customcss($css, $customcss);

    return $css;
}

/**
 * Adds the 'Brand' logo to CSS.
 *
 * @param string $css The CSS.
 * @param string $brandlogo The URL of the navbar 'Brand' logo.
 * @return string The parsed CSS
 */
function theme_aardvark_set_brandlogo($css, $brandlogo) {
    $tag = '[[setting:brandlogo]]';
    $replacement = $brandlogo;
    if (is_null($replacement)) {
		$replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_aardvark_set_maincolor($css, $maincolor) {
    $tag = '[[setting:maincolor]]';
    $replacement = $maincolor;
    if (is_null($replacement)) {
        $replacement = '#f98012';
    }
    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_aardvark_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $replacement = $customcss;
    if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

/**
 * Serves any files associated with the theme settings.
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param context $context
 * @param string $filearea
 * @param array $args
 * @param bool $forcedownload
 * @param array $options
 * @return bool
 */
function theme_aardvark_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    if ($context->contextlevel == CONTEXT_SYSTEM && ($filearea === 'brandlogo')) {
        $theme = theme_config::load('aardvark');
        // By default, theme files must be cache-able by both browsers and proxies.
        if (!array_key_exists('cacheability', $options)) {
            $options['cacheability'] = 'public';
        }
        return $theme->setting_file_serve($filearea, $args, $forcedownload, $options);
    } else {
        send_file_not_found();
    }
}

