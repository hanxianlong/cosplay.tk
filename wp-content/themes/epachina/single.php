<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Single Posts Template
 *
 *
 * @file           single.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/single.php
 * @link           http://codex.wordpress.org/Theme_Development#Single_Post_.28single.php.29
 * @since          available since Release 1.0
 */
?>
<?php get_header();

$title='未找到内容.';
$content='对不起，内容未找到。';
if (have_posts()) : the_post();
$title= get_the_title();
$content = get_the_content();
endif;

 ?>
<table width="1049" border="0" cellpadding="0" cellspacing="0" class="chongfu">
        <tr>
          <td height="561" valign="top"><table width="910" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="678" height="44"  align="left" valign="bottom"><table width="200" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="20" height="23" class="STYLE1">&nbsp;</td>
                  <td width="180" height="23" valign="top" class="STYLE1"><?php echo responsive_breadcrumb_lists(); ?></td>
                </tr>
              </table></td>
              <td width="242" rowspan="2" align="right" valign="middle"><table width="220" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="85" align="center"><img src="<?php echo get_template_directory_uri() ?>/images/022.gif" width="214" height="62" /></td>
                </tr>
              </table></td>
            </tr>
            <tr>
            	 <td height="30"><table width="678" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="48" background="<?php echo get_template_directory_uri() ?>/images/sanji.gif"><table width="500." border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="14">&nbsp;</td>
                      <td width="486" align="left"><?php echo $title; ?></td>
                    </tr>
                  </table></td>
                </tr>
              </table></td>
              
              </tr>
          </table>
            <table width="920" border="0" align="center" cellpadding="0" cellspacing="0">
            	<tr><td height="10px">&nbsp;</td></tr>
              <tr>
                <td width="683"  align="center" valign="top"><table width="680" border="0" cellpadding="0" cellspacing="0">
                  <tbody><tr>
                           <?php 
                            $images = rwmb_meta('YOUR_PREFIX_thickbox', 'type=image' );
                            $leftImages = '';
                            foreach ( $images as $image )
                            {
                                $leftImages .= "<img src='{$image['full_url']}' width='273' height='154' alt='{$image['alt']}' />";
                            }
                            ?>
                          <?php if($leftImages != ''): ?>
                    <td width="289" align="center" class="singleLeft" valign="top">
	                     <!--三级页左侧列表开始-->
	                   <?php echo $leftImages; ?>
                  </td>
                    <?php endif; ?>
                      <!--三级页左侧列表结束-->
                      
                    <td width="<?php echo $leftImages==''?680:391; ?>" style="overflow:hidden" align="center" valign="top"> 
                      <table width="100%" border="0" cellpadding="0" cellspacing="10" class="zzz">
                        <tbody><tr>
                          <td height="193" valign="top" align="center"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tbody><tr>
                              <td align="left">
                              	<div class="STYLE2"><?php echo $title;?><br><br/>
                              </div>
                              <div class="content">
                              <?php echo $content; ?>
                              </p>
                              </td>
                            </tr>
                          </tbody></table>  <p class="STYLE2">&nbsp;</p>
                            </td>
                        </tr>
                      </tbody></table></td>
                  </tr>
                </tbody></table></td>
                <?php get_sidebar(); ?>
              </tr>
            </table>
           </td>
        </tr>
      </table>
<?php get_footer(); ?>