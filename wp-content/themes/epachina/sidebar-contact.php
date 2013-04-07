<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Sidebar/Content Template
 *
   Template Name:  Sidebar/Contact
 *
 * @file           sidebar-contact.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar-content-page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
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
              <td width="678" height="44"  align="left" valign="bottom"><table width="200" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="20" height="23" class="STYLE1">&nbsp;</td>
                  <td width="180" height="23" valign="top" class="STYLE1" align="left"><?php echo responsive_breadcrumb_lists(); ?></td>
                </tr>
              </table></td>
              <td width="242" rowspan="2" align="right" valign="middle"><table width="220" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="85" align="center"><img src="<?php echo get_template_directory_uri() ?>/images/022.gif" width="214" height="62" /></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td height="30"><img src="<?php echo get_template_directory_uri() ?>/images/lxzx.gif" width="678" height="48" /></td>
              </tr>
          </table>
            <table width="920" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="683" height="350" align="center" valign="top"><table width="679" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="147"><img src="<?php echo the_post_thumbnail_url('83'); ?>" width="679" height="133" /></td>
                  </tr>
                </table>
                
                  <table width="683" border="0" cellpadding="0" cellspacing="0" style="line-height:24px;">
                  	<tr>
                  		<td>
                  			<?php the_content(); ?>
                  			</td>
                  		</tr>
                  </table>
                  <table width="683" border="0" cellpadding="0" cellspacing="0" style="line-height:24px;">
		                  <tr>
												<td align="left" bgcolor="#CCCCCC" height="25">&nbsp;&nbsp;在线QQ</td> 
											</tr>
											
											  <tr>
											  	<td height="61" valign="middle" align="center" class="STYLE1">
											  	<?php $options = get_option('responsive_theme_options');?>
					                	<?php if ($options['qq1'] != ''): ?>
					                  <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $options['qq1'] ?>&amp;site=qq&amp;menu=yes"><img src="<?php echo get_template_directory_uri() ?>/images/011.gif" width="62" height="27" /></a>
					                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					                  <?php endif; if ($options['qq2'] != ''): ?>
					                  <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $options['qq2'] ?>&amp;site=qq&amp;menu=yes"><img src="<?php echo get_template_directory_uri() ?>/images/011.gif" width="62" height="27" /></a>
					                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					                  <?php endif; if ($options['qq3'] != ''): ?>
					                  <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $options['qq3'] ?>&amp;site=qq&amp;menu=yes"><img src="<?php echo get_template_directory_uri() ?>/images/011.gif" width="62" height="27" /></a>
					                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					                  <?php endif; if ($options['qq4'] != ''): ?>
					                  <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $options['qq4'] ?>&amp;site=qq&amp;menu=yes"><img src="<?php echo get_template_directory_uri() ?>/images/011.gif" width="62" height="27" /></a>
					                  <?php endif; ?>
		                </td>
		                </tr>
									</table>
                 </td>
	               <?php get_sidebar(); ?>
              </tr>
            </table>
           </td>
        </tr>
      </table>
<?php get_footer(); ?>
