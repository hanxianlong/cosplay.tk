<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Home Page
 *
 * Note: You can overwrite home.php as well as any other Template in Child Theme.
 * Create the same file (name) include in /responsive-child-theme/ and you're all set to go!
 * @see            http://codex.wordpress.org/Child_Themes
 *
 * @file           home.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/home.php
 * @link           http://codex.wordpress.org/Template_Hierarchy
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>
 <?php $options = get_option('responsive_theme_options');?>
     <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="446" align="center" valign="top" background="images/02.jpg"><table width="1051" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','1050','height','446','src','<?php echo get_template_directory_uri() ?>/flash/map','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','wmode','transparent','movie','<?php echo get_template_directory_uri() ?>/flash/map' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="1050" height="446">
                  <param name="movie" value="<?php echo get_template_directory_uri() ?>/flash/map.swf" />
                  <param name="quality" value="high" />
                  <param name="wmode" value="transparent" />
                  <embed src="<?php echo get_template_directory_uri() ?>/flash/map.swf" width="1050" height="446" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" wmode="transparent"></embed>
                </object>
</noscript></td>
            </tr>
          </table></td>
        </tr>
      </table>
<?php get_sidebar('home'); ?>
<?php get_footer(); ?>