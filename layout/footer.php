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
 * Footer
 *
 * @package   theme_aardvark
 * @author    Shaun Daubney
 * @copyright 2017 Newbury College
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$hascopyright = (empty($PAGE->theme->settings->copyright)) ? false : $PAGE->theme->settings->copyright;
$hascopyrightlink = (!empty($PAGE->theme->settings->copyrightlink));
$hasceop = (!empty($PAGE->theme->settings->ceop));
$hascustomfooter = (!empty($PAGE->theme->settings->customfooter));
$hasdisclaimer = (!empty($PAGE->theme->settings->disclaimer));
$haswebsite = (!empty($PAGE->theme->settings->website));
$hasfacebook = (!empty($PAGE->theme->settings->facebook));
$hastwitter = (!empty($PAGE->theme->settings->twitter));
$hassnapchat = (!empty($PAGE->theme->settings->snapchat));
$hasgoogleplus = (!empty($PAGE->theme->settings->googleplus));
$hasflickr = (!empty($PAGE->theme->settings->flickr));
$haspinterest = (!empty($PAGE->theme->settings->pinterest));
$hasapple = (!empty($PAGE->theme->settings->apple));
$hasinstagram = (!empty($PAGE->theme->settings->instagram));
$hasandroid = (!empty($PAGE->theme->settings->android));
$haslinkedin = (!empty($PAGE->theme->settings->linkedin));
$hasyoutube = (!empty($PAGE->theme->settings->youtube));
$haswikipedia = (!empty($PAGE->theme->settings->wikipedia));
?>
<footer id="page-footer">
	<div class="row-fluid">
    	<!-- Widget 1 -->
    	<div class="span4">
    		<div id="footer-left" class="block-region">
    			<div class="region-content">
       			 <?php 
	
            echo $OUTPUT->login_info();			
			echo $OUTPUT->standard_footer_html();
			?><p class="helplink"><?php echo page_doc_link(get_string('moodledocslink')); ?></p><?php
            if ($hasceop) {?><p><a href="<?php echo $PAGE->theme->settings->ceop;?> "><img src="<?php echo $OUTPUT->pix_url('ceopreport', 'theme')?>" /></a></p><?php }?>
			<?php if ($hascustomfooter) {echo $PAGE->theme->settings->customfooter;} else {}?>
        		</div>
        	</div>
    	</div>

    	<!-- widget 2 -->
    	<div class="span4">
    		<div id="footer-middle" class="block-region">
    			<div class="region-content">
        <?php if ($hasdisclaimer) {echo $PAGE->theme->settings->disclaimer;} else {}?>
        		</div>
        	</div>
    	</div>

    	<!-- Widget 3 -->
    	<div class="span4">
    		<div id="footer-right" class="block-region">
    			<div class="region-content">
				

				<?php if ($hasandroid) {?><a href="<?php echo $PAGE->theme->settings->android;?> "><span class="footer-icon android"><i class="fa fa-android"></i></span></a> <?php } else {}?>
       			
				<?php if ($hasapple) {?><a href="<?php echo $PAGE->theme->settings->apple;?> "><span class="footer-icon apple"><i class="fa fa-apple"></i></span></a> <?php } else {}?>
				
				<?php if ($hasyoutube) {?><a href="<?php echo $PAGE->theme->settings->youtube;?> "><span class="footer-icon youtube"><i class="fa fa-youtube"></i></span></a> <?php } else {}?>
				
				<?php if ($haswikipedia) {?><a href="<?php echo $PAGE->theme->settings->wikipedia;?> "><span class="footer-icon wikipedia"><i class="fa fa-wikipedia-w"></i></span></a> <?php } else {}?>

				<?php if ($haspinterest) {?><a href="<?php echo $PAGE->theme->settings->pinterest;?> "><span class="footer-icon pinterest"><i class="fa fa-pinterest"></i></span></a> <?php } else {}?>

				<?php if ($haslinkedin) {?><a href="<?php echo $PAGE->theme->settings->linkedin;?> "><span class="footer-icon linkedin"><i class="fa fa-linkedin"></i></span></a> <?php } else {}?>
											
				<?php if ($hasinstagram) {?><a href="<?php echo $PAGE->theme->settings->instagram;?> "><span class="footer-icon instagram"><i class="fa fa-instagram"></i></span></a> <?php } else {}?>
				
				<?php if ($hasflickr) {?><a href="<?php echo $PAGE->theme->settings->flickr;?> "><span class="footer-icon flickr"><i class="fa fa-flickr"></i></span></a> <?php } else {}?>
				
				<?php if ($hasgoogleplus) {?><a href="<?php echo $PAGE->theme->settings->googleplus;?> "><span class="footer-icon googleplus"><i class="fa fa-google-plus"></i></span></a> <?php } else {}?>
				
				<?php if ($hassnapchat) {?><a href="<?php echo $PAGE->theme->settings->snapchat;?> "><span class="footer-icon snapchat"><i class="fa fa-snapchat-ghost"></i></span></a> <?php } else {}?>
				
				<?php if ($hastwitter) {?><a href="<?php echo $PAGE->theme->settings->twitter;?> "><span class="footer-icon twitter"><i class="fa fa-twitter"></i></span></a> <?php } else {}?>
				
				<?php if ($hasfacebook) {?><a href="<?php echo $PAGE->theme->settings->facebook;?> "><span class="footer-icon facebook"><i class="fa fa-facebook"></i></span></a> <?php } else {}?>
				
				<?php if ($haswebsite) {?><a href="<?php echo $PAGE->theme->settings->website;?> "><span class="footer-icon website"><i class="fa fa-globe"></i></span></a> <?php } else {}?>
				
				
				
				
				
				
        		</div>
        	</div>
    	</div>
	</div>

	<div class="footerlinks">
	<p>
	
	
	<?php if ($hascopyright) {
	echo html_writer::link($PAGE->theme->settings->copyrightlink, '&copy; '.date("Y").' '.$hascopyright.'');
	echo ' | ';
	}
	else {}
	?>

<?php
	
 echo html_writer::link('http://moodle.org/plugins/view.php?plugin=theme_aardvark', get_string('credit', 'theme_aardvark'));
 echo ' | ';
 echo html_writer::link('http://moodle.org', 'moodle.org');?> 
    	</p>
    	
    
	</div>
</footer>