<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Main Widget Template
 *
 *
 * @file           sidebar.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>
      <td width="237" align="center" valign="top">
                    <?php /*�����ؼ�*/
$cate_name='places';
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$query_string='posts_per_page=3&paged=1&category_name='.$cate_name;
query_posts($query_string);
if (have_posts()) :
    while (have_posts()) : the_post();
 ?>
                <table width="206" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="97">
                         <a href="/?p=<?php the_ID() ?>" title="<?php the_title_attribute(); ?>" class="wenzi">
                             <img src="<?php echo the_post_thumbnail_url(get_the_ID()); ?>" width="91" height="60" border="0" />
                         </a>
                    </td>
                    <td width="109" valign="top"><table width="105" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td height="20" align="left" bgcolor="#E6E6E6" class="STYLE2"><?php echo mb_strimwidth(get_the_title(),0,15); ?></td>
                        </tr>
                        <tr>
                          <td height="31" align="left" class="STYLE1"><?php echo mb_strimwidth(get_the_excerpt(),0,30,'..'); ?></td>
                        </tr>
                    </table></td>
                  </tr>
                </table>
                <table width="206" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="206" height="21"><img src="images/026.gif" width="206" height="3" /></td>
                    </tr>
                  </table>
                   <?php endwhile; endif; ?>
                  <table width="215" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td height="85" align="center"><img src="<?php echo get_template_directory_uri(); ?>/images/027.gif" width="215" height="68" /></td>
                    </tr>
                  </table>
                  <table width="200" border="0" cellpadding="0" cellspacing="0">
                        <?php 
$cate_name='route';/*�Ķ�·��*/
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$query_string='posts_per_page=3&paged=1&category_name='.$cate_name;
query_posts($query_string);
if (have_posts()) :
    while (have_posts()) : the_post();
 ?>     <tr>
                      <td height="25" align="left" class="STYLE1"><a href="<?php the_permalink(); ?>" class="wenzi">&gt; <?php echo mb_strimwidth(get_the_title(),0,14); ?></a></td>
                    </tr>
   <?php endwhile; endif; ?>
                  </table>
                  <table width="200" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="88"><img src="<?php echo get_template_directory_uri(); ?>/images/028.gif" width="214" height="74" /></td>
                    </tr>
                  </table>
                  <table width="200" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                    		<?php $options = get_option('responsive_theme_options');?>
                    		<?php if ($options['qq1'] != ''): ?>
                    		<td align="center"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $options['qq1'] ?>&amp;site=qq&amp;menu=yes"><img src="<?php echo get_template_directory_uri(); ?>/images/011.gif" width="62" height="27" /></a></td>
                        <?php endif; if ($options['qq2'] != ''): ?>
                  			<td align="center"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $options['qq2'] ?>&amp;site=qq&amp;menu=yes"><img src="<?php echo get_template_directory_uri(); ?>/images/011.gif" width="62" height="27" /></a></td>
                  			<?php endif;?>                     
                    </tr>
                </table></td>