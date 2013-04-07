<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Sidebar/Content Template
 *
   Template Name:  Sidebar/News
 *
 * @file           sidebar-news-page.php
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
<?php get_header(); ?>

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
              <td height="30"><img src="<?php echo get_template_directory_uri() ?>/images/news.gif" width="678" height="48" /></td>
              </tr>
          </table>
            <table width="920" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="683" height="350" align="center" valign="top"><table width="679" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="147"><img src="<?php echo the_post_thumbnail_url('83'); ?>" width="679" height="133" /></td>
                  </tr>
                </table>
                
                  <table width="683" border="0" cellpadding="0" cellspacing="0">
                          <?php /*最新消息*/ ?>
<?php 
$cate_name='news';
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$query_string='posts_per_page=15&paged='.$paged . '&category_name='.$cate_name;
query_posts($query_string);
if (have_posts()) :
    $i=0;
    while (have_posts()) : the_post();

 ?>
                    <tr <?php if($i%2==0) echo 'bgcolor="#F5F5F5"' ?>>
                      <td width="33" height="35" align="center"><img src="<?php echo get_template_directory_uri() ?>/images/jiant.gif" width="9" height="9" /></td>
                      <td width="566" height="35" align="left" class="STYLE1">
                          <a href="/?p=<?php the_ID() ?>" title="<?php the_title_attribute(); ?>" class="wenzi"><?php the_title(); ?></a>
                        </td>
                      <td width="84" height="35" align="center" class="STYLE1"><?php echo get_the_date() ?></td>
                    </tr>
                    <?php
                    $i = $i+1;
                    endwhile;
      endif ?>
                  </table>
                  <table width="693" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="40" align="center" valign="bottom"><table width="200" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <?php if (  $wp_query->max_num_pages > 1 ) : ?>
                            <td width="67" align="center" class="STYLE1"><?php previous_posts_link( '上一页' ); ?></td>
                          <td width="67" align="center" class="STYLE1"><?php next_posts_link( '下一页' ); ?></td>
                      <?php endif; ?>
                        </tr>
                      </table></td>
                    </tr>
                  </table></td>
	               <?php get_sidebar(); ?>
              </tr>
            </table>
           </td>
        </tr>
      </table>
<?php get_footer(); ?>
