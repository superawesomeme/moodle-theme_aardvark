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

if ($ADMIN->fulltree) {

	// Basic Heading.
    $name        = 'theme_aardvark/basicheading';
    $heading     = get_string('basicheading', 'theme_aardvark');
    $information = get_string('basicheadingdesc', 'theme_aardvark');
    $setting     = new admin_setting_heading($name, $heading, $information);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Main colour setting.
    $name          = 'theme_aardvark/maincolor';
    $title         = get_string('maincolor', 'theme_aardvark');
    $description   = get_string('maincolordesc', 'theme_aardvark');
    $default       = '#f98012';
    $previewconfig = NULL;
    $setting       = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Show site name along with small logo.
    $name        = 'theme_aardvark/sitename';
    $title       = get_string('sitename', 'theme_aardvark');
    $description = get_string('sitenamedesc', 'theme_aardvark');
    $setting     = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // General Alert setting.
    $name        = 'theme_aardvark/generalalert';
    $title       = get_string('generalalert', 'theme_aardvark');
    $description = get_string('generalalertdesc', 'theme_aardvark');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Custom CSS file.
    $name        = 'theme_aardvark/customcss';
    $title       = get_string('customcss', 'theme_aardvark');
    $description = get_string('customcssdesc', 'theme_aardvark');
    $default     = '';
    $setting     = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Footer Options Heading.
    $name        = 'theme_aardvark/footeroptheading';
    $heading     = get_string('footeroptheading', 'theme_aardvark');
    $information = get_string('footeroptdesc', 'theme_aardvark');
    $setting     = new admin_setting_heading($name, $heading, $information);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Copyright setting.
    $name        = 'theme_aardvark/copyright';
    $title       = get_string('copyright', 'theme_aardvark');
    $description = get_string('copyrightdesc', 'theme_aardvark');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Copyrightlink setting.
    $name        = 'theme_aardvark/copyrightlink';
    $title       = get_string('copyrightlink', 'theme_aardvark');
    $description = get_string('copyrightlinkdesc', 'theme_aardvark');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // CEOP.
    $name        = 'theme_aardvark/ceop';
    $title       = get_string('ceop', 'theme_aardvark');
    $description = get_string('ceopdesc', 'theme_aardvark');
    $default     = '';
    $choices     = array(
        '' => get_string('ceopnone', 'theme_aardvark'),
        'https://www.thinkuknow.org.au/site/how-report' => get_string('ceopaus', 'theme_aardvark'),
        'https://www.ceop.police.uk/safety-centre/' => get_string('ceopuk', 'theme_aardvark')
    );
    $setting     = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Custom footer setting.
    $name        = 'theme_aardvark/customfooter';
    $title       = get_string('customfooter', 'theme_aardvark');
    $description = get_string('customfooterdesc', 'theme_aardvark');
    $default     = '';
    $setting     = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Disclaimer setting.
    $name        = 'theme_aardvark/disclaimer';
    $title       = get_string('disclaimer', 'theme_aardvark');
    $description = get_string('disclaimerdesc', 'theme_aardvark');
    $default     = '';
    $setting     = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Social Icons Heading.
    $name        = 'theme_aardvark/socialiconsheading';
    $heading     = get_string('socialiconsheading', 'theme_aardvark');
    $information = get_string('socialiconsheadingdesc', 'theme_aardvark');
    $setting     = new admin_setting_heading($name, $heading, $information);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Website url setting.
    $name        = 'theme_aardvark/website';
    $title       = get_string('website', 'theme_aardvark');
    $description = get_string('websitedesc', 'theme_aardvark');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Facebook url setting.
    $name        = 'theme_aardvark/facebook';
    $title       = get_string('facebook', 'theme_aardvark');
    $description = get_string('facebookdesc', 'theme_aardvark');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Twitter url setting.
    $name        = 'theme_aardvark/twitter';
    $title       = get_string('twitter', 'theme_aardvark');
    $description = get_string('twitterdesc', 'theme_aardvark');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Snapchat url setting.
    $name        = 'theme_aardvark/snapchat';
    $title       = get_string('snapchat', 'theme_aardvark');
    $description = get_string('snapchatdesc', 'theme_aardvark');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Google+ url setting.
    $name        = 'theme_aardvark/googleplus';
    $title       = get_string('googleplus', 'theme_aardvark');
    $description = get_string('googleplusdesc', 'theme_aardvark');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Flickr url setting.
    $name        = 'theme_aardvark/flickr';
    $title       = get_string('flickr', 'theme_aardvark');
    $description = get_string('flickrdesc', 'theme_aardvark');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Pinterest url setting.
    $name        = 'theme_aardvark/pinterest';
    $title       = get_string('pinterest', 'theme_aardvark');
    $description = get_string('pinterestdesc', 'theme_aardvark');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Instagram url setting.
    $name        = 'theme_aardvark/instagram';
    $title       = get_string('instagram', 'theme_aardvark');
    $description = get_string('instagramdesc', 'theme_aardvark');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // LinkedIn url setting.
    $name        = 'theme_aardvark/linkedin';
    $title       = get_string('linkedin', 'theme_aardvark');
    $description = get_string('linkedindesc', 'theme_aardvark');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Wikipedia url setting.
    $name        = 'theme_aardvark/wikipedia';
    $title       = get_string('wikipedia', 'theme_aardvark');
    $description = get_string('wikipediadesc', 'theme_aardvark');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // YouTube url setting.
    $name        = 'theme_aardvark/youtube';
    $title       = get_string('youtube', 'theme_aardvark');
    $description = get_string('youtubedesc', 'theme_aardvark');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Apple url setting.
    $name        = 'theme_aardvark/apple';
    $title       = get_string('apple', 'theme_aardvark');
    $description = get_string('appledesc', 'theme_aardvark');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Android url setting.
    $name        = 'theme_aardvark/android';
    $title       = get_string('android', 'theme_aardvark');
    $description = get_string('androiddesc', 'theme_aardvark');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
}