<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Sidebar/Reserve
 *
   Template Name:  Sidebar/Reserve
 *
 * @file           sidebar-places.php
 * @package        Responsive 
 * @author         dameitui
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @since          available since Release 1.0
 */
?>
<?php get_header(); 
if(have_posts()) the_post();
?>

<table width="1049" border="0" cellpadding="0" cellspacing="0" class="chongfu">
        <tr>
          <td height="561" valign="top"><table width="910" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="678" height="44" valign="bottom"><table width="200" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="20" height="23" class="STYLE1">&nbsp;</td>
                  <td width="180" height="23" valign="top" align="left" class="STYLE1"><?php echo responsive_breadcrumb_lists(); ?></td>
                </tr>
              </table></td>
              <td width="242" rowspan="2" align="right" valign="middle"><table width="220" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="85" align="center"><img src="<?php echo get_template_directory_uri() ?>/images/022.gif" width="214" height="62" /></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td height="30"><img src="<?php echo get_template_directory_uri() ?>/images/024.gif" width="678" height="48" /></td>
              </tr>
          </table>
            <table width="920" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="683" height="350" align="center" valign="top"> 
                    <table width="679" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="147"><img src="<?php echo the_post_thumbnail_url('372'); ?>" width="679" height="133" /></td>
                  </tr>
                </table>
                    <div style="height:20px"></div>
                    <?php the_content(__('Read more &#8250;', 'responsive')); ?>
                   </td>
            			<?php get_sidebar(); ?>
              </tr>
            </table>
           </td>
        </tr>
      </table>
<?php get_footer(); ?>