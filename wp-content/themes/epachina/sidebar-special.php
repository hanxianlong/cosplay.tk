<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Sidebar/Route
 *
   Template Name:  Sidebar/Special
 *
 * @file           sidebar-special.php
 * @package        Responsive 
 * @author         dameitui
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>

<table width="1049" border="0" cellpadding="0" cellspacing="0" class="chongfu">
        <tr>
          <td height="561" align="left" valign="top"><table width="910" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="678" height="44" align="left" valign="bottom"><table width="200" border="0" cellpadding="0" cellspacing="0">
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
              <td height="30"><img src="<?php echo get_template_directory_uri() ?>/images/special.gif" width="678" height="48" /></td>
              </tr>
          </table>
            <table width="920" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="683" height="350" align="center" valign="top"><table width="679" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="147"><img src="<?php echo the_post_thumbnail_url('66'); ?>" width="679" height="133" /></td>
                  </tr>
                </table>
                
                  <table width="683" border="0" cellpadding="0" cellspacing="0">
                          <?php /*最新消息*/ ?>
<?php 
$cate_name='special';
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$query_string='posts_per_page=4&paged='.$paged . '&category_name='.$cate_name;
query_posts($query_string);
if (have_posts()) :
    while (have_posts()) : the_post();
 ?>
                      <tr>
                          <td>
                                <table width="683" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="176" height="126" align="center"><table width="228" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td width="219" height="112" align="center" valign="middle" background="<?php echo get_template_directory_uri() ?>/images/teb11.gif">
                                      <a href="/?p=<?php the_ID() ?>" title="<?php the_title_attribute(); ?>"><img src="<?php echo the_post_thumbnail_url(get_the_ID()); ?>" width="216" height="100" border="0" /></a>
                                  </td>
                                </tr>
                            </table></td>
                            <td width="507" height="126" align="right"><table width="445" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td height="37" colspan="2" align="left"><a href="/?p=<?php the_ID() ?>" title="<?php the_title_attribute(); ?>" class="wenzi"><?php echo mb_strimwidth(get_the_title(), 0,20); ?></a></td>
                                </tr>
                                <tr>
                                    <td height="60" colspan="2" align="left" valign="top" class="STYLE1"><a href="/?p=<?php the_ID() ?>" title="<?php the_title_attribute(); ?>" class="wenzi"><?php echo mb_strimwidth(get_the_excerpt(), 0,300); ?></a></td>
                                </tr>
                                <tr>
                                  <td width="489" height="19" align="center" class="STYLE1">&nbsp;</td>
                                  <td width="76" align="center" class="STYLE1"><a href="/?p=<?php the_ID() ?>" class="wenzi">详细信息&gt;&gt;</a></td>
                                </tr>
                            </table></td>
                          </tr>
                        </table>
                          </td>
                      </tr>
                    <tr><td colspan="3" height="31px"><img src="' . get_template_directory_uri() . '/images/033.gif" width="679" height="3" /></td></tr>
                    <?php
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