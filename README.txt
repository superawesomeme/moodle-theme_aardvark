/*
 *  Aardvark
 *
 *  The original menubar based theme for Moodle rewritten for Moodle 2.9+ to draw
 *  its base from Bootstrap.
 *
 *  Aardvark has evolved over the past 10 years as Moodle has integrated the
 *  features that have made Aardvark so popular into its core system, including
 *  custom menu and user menu.
 *
 *  The theme now features a simple flat look with inspiration taken from Flat UI
 *  and Google's material design. 
 * 
 *  ------------------------------------------------------------------------------
 *  More information and documentation can be
 *  found at https://moodle.org/plugins/view.php?plugin=theme_aardvark
 *
 *  Licenses
 *  ------------------------------------------------------------------------------
 *  - Theme - http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *  - Font Awesome font is licensed under SIL OFL 1.1 - http://scripts.sil.org/OFL
 *  - Font Awesome CSS, LESS, and SASS files are licensed under MIT License -
 *    http://opensource.org/licenses/mit-license.html
 *  - Icons - http://www.fatcow.com/free-icons
 *
 *  Author - Shaun Daubney
 *  ------------------------------------------------------------------------------
 *  Twitter: http://twitter.com/newburycollege
 *  Website: http://vle.newbury-college.ac.uk
 */

 v2.9.6
 - Convert fixed path to dynamic path for img.defaultuserpic url. Fixes broken default user image links; when Moodle is mounted in a sub-directory. [Timothy OBrien]
 
 v2.9.5
 - removed the z-index fix that turned out to be less of a fix and more or a nightmare

 v2.9.4
 - increased z-index even more because 5000 was too low for the activity chooser
 
 v2.9.3
 - fixed actionmenu hover colour
 - increased z-index on PDF Editor
 
 v2.9.2
 - fixed img max-width issue that affected Gradebook in Chrome
 
 v2.9.1
 - updated a few oranges and yellows to make them less "murky"
 - fixed logo width to allow for wider logos
 
 v2.9
 - redesigned with a modern, flat style to appear less cluttered and easier to navigate.
 - fixed issue with mobile/responsive menu not showing in 2.9
 - tidied up some custom settings that are no longer required or broken.
 
 v2.8.1
 - replaced 'profileblock' with new 'User menu items' from Moodle Core.
 - set Moodle 2.8+ as minimum specification

 v2.8
 - updated to fix image widths in version 2.8
 
 v2.6.4
 - updated config.php for gradebook compatibility in Moodle 2.6+ (Thank you Mary)
 - added Wikipedia to Social Network icons in footer
 
 v2.6.3
 - added a workaround for the TinyMCE hyperlink issue in IE11
 