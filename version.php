<?php
/**
 * Aardvark theme for Moodle - Material-inspired theme based on bootstrap.
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package   theme_aardvark
 * @author    Shaun Daubney
 * @copyright 2017 Newbury College
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;
$plugin->version   = 2017092700;
$plugin->requires  = 2017051500;
$plugin->component = 'theme_aardvark';
$plugin->dependencies = array(
    'theme_bootstrapbase'  => 2017050500,
);
$plugin->maturity = MATURITY_STABLE;
$plugin->release = '3.3.1';