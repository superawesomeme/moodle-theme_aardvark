<?php

/*
 * @author    Shaun Daubney
 * @package   theme_aardvark
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    // Basic Heading
    $name = 'theme_aardvark/basicheading';
    $heading = get_string('basicheading', 'theme_aardvark');
    $information = get_string('basicheadingdesc', 'theme_aardvark');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
	
	// Main colour setting
	$name = 'theme_aardvark/maincolor';
	$title = get_string('maincolor','theme_aardvark');
	$description = get_string('maincolordesc', 'theme_aardvark');
	$default = '#f98012';
	$previewconfig = NULL;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$settings->add($setting);	
	
	// Logo file setting
	$name = 'theme_aardvark/logo';
	$title = get_string('logo','theme_aardvark');
	$description = get_string('logodesc', 'theme_aardvark');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$settings->add($setting);	

	// Short Name setting
	$name = 'theme_aardvark/shortname';
	$title = get_string('shortname','theme_aardvark');
	$description = get_string('shortnamedesc', 'theme_aardvark');
	$default = 1;
	$choices = array(1=>get_string('yes',''), 0=>get_string('no',''));
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
	$settings->add($setting);

	// General Alert setting
	$name = 'theme_aardvark/generalalert';
	$title = get_string('generalalert','theme_aardvark');
	$description = get_string('generalalertdesc', 'theme_aardvark');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);
	
	// Custom CSS file
	$name = 'theme_aardvark/customcss';
	$title = get_string('customcss','theme_aardvark');
	$description = get_string('customcssdesc', 'theme_aardvark');
	$default = '';
	$setting = new admin_setting_configtextarea($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);
	
	// Footer Options Heading
    $name = 'theme_aardvark/footeroptheading';
    $heading = get_string('footeroptheading', 'theme_aardvark');
    $information = get_string('footeroptdesc', 'theme_aardvark');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
	
	// Copyright setting
	$name = 'theme_aardvark/copyright';
	$title = get_string('copyright','theme_aardvark');
	$description = get_string('copyrightdesc', 'theme_aardvark');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// CEOP
	$name = 'theme_aardvark/ceop';
	$title = get_string('ceop','theme_aardvark');
	$description = get_string('ceopdesc', 'theme_aardvark');
	$default = '';
	$choices = array(''=>get_string('ceopnone','theme_aardvark'), 'http://www.thinkuknow.org.au/site/report.asp'=>get_string('ceopaus','theme_aardvark'), 'http://www.ceop.police.uk/report-abuse/'=>get_string('ceopuk','theme_aardvark'));
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
	$settings->add($setting);

	// Disclaimer setting
	$name = 'theme_aardvark/disclaimer';
	$title = get_string('disclaimer','theme_aardvark');
	$description = get_string('disclaimerdesc', 'theme_aardvark');
	$default = '';
	$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
	$settings->add($setting);	

	// Social Icons Heading
    $name = 'theme_aardvark/socialiconsheading';
    $heading = get_string('socialiconsheading', 'theme_aardvark');
    $information = get_string('socialiconsheadingdesc', 'theme_aardvark');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
	
	// Website url setting
	$name = 'theme_aardvark/website';
	$title = get_string('website','theme_aardvark');
	$description = get_string('websitedesc', 'theme_aardvark');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Facebook url setting
	$name = 'theme_aardvark/facebook';
	$title = get_string('facebook','theme_aardvark');
	$description = get_string('facebookdesc', 'theme_aardvark');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Twitter url setting
	$name = 'theme_aardvark/twitter';
	$title = get_string('twitter','theme_aardvark');
	$description = get_string('twitterdesc', 'theme_aardvark');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Google+ url setting
	$name = 'theme_aardvark/googleplus';
	$title = get_string('googleplus','theme_aardvark');
	$description = get_string('googleplusdesc', 'theme_aardvark');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Flickr url setting
	$name = 'theme_aardvark/flickr';
	$title = get_string('flickr','theme_aardvark');
	$description = get_string('flickrdesc', 'theme_aardvark');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Pinterest url setting
	$name = 'theme_aardvark/pinterest';
	$title = get_string('pinterest','theme_aardvark');
	$description = get_string('pinterestdesc', 'theme_aardvark');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Instagram url setting
	$name = 'theme_aardvark/instagram';
	$title = get_string('instagram','theme_aardvark');
	$description = get_string('instagramdesc', 'theme_aardvark');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// LinkedIn url setting
	$name = 'theme_aardvark/linkedin';
	$title = get_string('linkedin','theme_aardvark');
	$description = get_string('linkedindesc', 'theme_aardvark');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);
	
	// Wikipedia url setting
	$name = 'theme_aardvark/wikipedia';
	$title = get_string('wikipedia','theme_aardvark');
	$description = get_string('wikipediadesc', 'theme_aardvark');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// YouTube url setting
	$name = 'theme_aardvark/youtube';
	$title = get_string('youtube','theme_aardvark');
	$description = get_string('youtubedesc', 'theme_aardvark');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Apple url setting
	$name = 'theme_aardvark/apple';
	$title = get_string('apple','theme_aardvark');
	$description = get_string('appledesc', 'theme_aardvark');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Android url setting
	$name = 'theme_aardvark/android';
	$title = get_string('android','theme_aardvark');
	$description = get_string('androiddesc', 'theme_aardvark');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

}

