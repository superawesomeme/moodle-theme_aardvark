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
 
global $CFG;

$hasheading = ($PAGE->heading);
$hasnavbar = (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar());
$hasfooter = (empty($PAGE->layout_options['nofooter']));
$hasheader = (empty($PAGE->layout_options['noheader']));

$hassidepre = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('side-pre', $OUTPUT));
$hassidepost = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('side-post', $OUTPUT));

$showsidepre = ($hassidepre && !$PAGE->blocks->region_completely_docked('side-pre', $OUTPUT));
$showsidepost = ($hassidepost && !$PAGE->blocks->region_completely_docked('side-post', $OUTPUT));

$isfrontpage = $PAGE->bodyid == "page-site-index";
$iscoursepage = $PAGE->pagelayout == "course";

$haslogo = (!empty($PAGE->theme->settings->logo));
$hasshortname = (!empty($PAGE->theme->settings->shortname));
$hasgeneralalert = (!empty($PAGE->theme->settings->generalalert));

$custommenu = $OUTPUT->custom_menu();
$hascustommenu = (empty($PAGE->layout_options['nocustommenu']) && !empty($custommenu));

?>

<header role="banner" class="navbar navbar-fixed-top">
    <nav role="navigation" class="navbar-inner">
        <div class="container-fluid" >
		<div class="logo">
            <a href="<?php echo $CFG->wwwroot;?>"> 
			
			 <?php if ($haslogo) {
 echo html_writer::empty_tag('img', array('src'=>$PAGE->theme->settings->logo, 'class'=>'logo')); }

 else {} ?>
 
 </div>
 <?php if ($hasshortname) {?>
<a class="brand" href="<?php echo $CFG->wwwroot;?>"><?php echo
                format_string($SITE->shortname, true, array('context' => context_course::instance(SITEID)));
                ?></a>
 <?php }		 else {} ?>
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse">
			    <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <?php echo $OUTPUT->user_menu(); ?>
            <div class="nav-collapse collapse navbar-responsive-collapse">
                <?php echo $OUTPUT->custom_menu(); ?>
                <ul class="nav pull-right">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                </ul>
            </div>
        </div>
    </nav>
 
	</header>



<div class="container-fluid clearfix">

    <?php if ($hasnavbar) { ?>
        <nav class="breadcrumb-button"><?php echo $PAGE->button; ?></nav>
        <?php echo $OUTPUT->navbar(); ?>
    <?php } ?>
	<?php if ($iscoursepage) {?>
    <h1 id="courseheader"><?php echo $PAGE->heading ?></h1>
	<?php } ?>
	<?php if (($isfrontpage) && ($hasgeneralalert)) {?>
	<div id="page-header-generalalert">
	<?php echo $PAGE->theme->settings->generalalert; ?>
	</div>
	<?php } ?>
</div>
<div id="page" class="container-fluid clearfix">