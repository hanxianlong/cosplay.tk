<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.3
 * @filesource     wp-content/themes/responsive/header.php
 * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 * @since          available since Release 1.0
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head> 
<title>心动九州 动漫之旅</title>

<?php wp_enqueue_style('style', get_stylesheet_uri(), false, '1.0.0');?>
<script src="<?php echo get_template_directory_uri() ?>/js/AC_RunActiveContent.js" type="text/javascript"></script>
<?php wp_head(); ?>
<script src="<?php echo get_template_directory_uri() ?>/js/slides.min.jquery.js"></script>
</head>
<body>
    
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="357" align="center" valign="top"><table width="1077" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td><img src="<?php echo get_template_directory_uri() ?>/images/tou.gif" width="1077" height="106" /></td>
      </tr>
    </table> 
      <table width="1077" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','1077','height','44','src','flash/dh','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','<?php echo get_template_directory_uri() ?>/flash/dh' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="1077" height="44">
            <param name="movie" value="<?php echo get_template_directory_uri() ?>/flash/dh.swf" />
            <param name="quality" value="high" />
            <embed src="<?php echo get_template_directory_uri() ?>/flash/dh.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="1077" height="44"></embed>
          </object></noscript></td>
        </tr>
      </table>