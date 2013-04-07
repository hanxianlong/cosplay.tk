<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Home Widgets Template
 *
 *
 * @file           sidebar-home.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar-home.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>  
<script language="javascript">
		jQuery(function(){
			jQuery('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true,
				animationStart: function(){
					jQuery('.caption').animate({
						bottom:-35
					},100);
				},
				animationComplete: function(current){
					jQuery('.caption').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						console.log(current);
					};
				}
			});
		});
	</script>
	    <?php $options = get_option('responsive_theme_options');?>
 <table width="921" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="425" height="225">
          <div id="container">
		<div id="example">
		  <img src="<?php echo get_template_directory_uri() ?>/img/new-ribbon.png" width="112" height="112" alt="New Ribbon" id="ribbon" />
		  <div id="slides">
		    <div class="slides_container">
		    	                       
<?php /*景点特集*/
$cate_name='places';
$query_string='posts_per_page=7&paged=1&category_name='.$cate_name;
query_posts($query_string);
if (have_posts()) :
    while (have_posts()) : the_post();
 ?>
              <div>
              	<a href="/?p=<?php the_ID() ?>" title="<?php the_title_attribute(); ?>" target="_blank" class="wenzi">
              		<img src="<?php echo the_post_thumbnail_url(get_the_ID()); ?>" width="380" height="158" alt="<?php the_title_attribute(); ?>" />
              	</a>
              	<div class="caption" style="bottom:0">
                    <p><?php echo mb_strimwidth(get_the_title(), 0,20); ?></p>
                </div>
              </div>
               <?php endwhile; endif ?>
		      </div>
		    <a href="#" class="prev"><img src="<?php echo get_template_directory_uri() ?>/img/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a> <a href="#" class="next"><img src="<?php echo get_template_directory_uri() ?>/img/arrow-next.png" width="24" height="43" alt="Arrow Next"></a> </div>
			<img src="<?php echo get_template_directory_uri() ?>/img/example-frame.png" width="495" height="200" alt="Example Frame" id="frame">		</div>
</div>          </td>
          <td width="36" align="right"><img src="<?php echo get_template_directory_uri() ?>/images/020.jpg" width="4" height="212" /></td>
          <td width="5" align="right">&nbsp;</td>
          <td width="460" align="right"><table width="470" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="198">&nbsp;</td>
              <td width="302" align="right"><table width="210" border="0" cellpadding="0" cellspacing="0">
                <tr>
                		<?php if ($options['qq1'] != ''): ?>
                  <td width="50" align="center"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $options['qq3'] ?>&amp;site=qq&amp;menu=yes"><img src="<?php echo get_template_directory_uri() ?>/images/04.gif" width="32" height="31" border="0" /></a></td>
                  <?php endif; if ($options['qq2'] != ''): ?>
                  <td width="50" align="center"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $options['qq3'] ?>&amp;site=qq&amp;menu=yes"><img src="<?php echo get_template_directory_uri() ?>/images/05.gif" width="32" height="32" border="0" /></a></td>
                  <?php endif; if ($options['qq3'] != ''): ?>
                  <td width="50" align="center"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $options['qq3'] ?>&amp;site=qq&amp;menu=yes"><img src="<?php echo get_template_directory_uri() ?>/images/06.gif" width="32" height="32" border="0" /></a></td>
                  <?php endif;?>
                                 
                  <td width="50" align="center"><a href="/?p=83"><img src="<?php echo get_template_directory_uri() ?>/images/07.gif" width="75" height="23" border="0" /></a></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td>
              	 <?php /*最新消息第一条*/
$cate_name='news';
$query_string='posts_per_page=1&paged=1&category_name='.$cate_name;
query_posts($query_string);

if (have_posts()) :
    while (have_posts()) : the_post();
    	$thumbnail_url= the_post_thumbnail_url(get_the_ID());
    	$content = mb_strimwidth(get_the_excerpt(),0,250);
    	$id = get_the_ID();
	 	endwhile; 
endif; ?>
              	<table width="198" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="185" background="<?php echo get_template_directory_uri() ?>/images/09.jpg"><table width="189" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="27" height="144">&nbsp;</td>
                      <td width="162" align="center" valign="top"><img src="<?php echo $thumbnail_url; ?>" width="162" height="142" /></td>
                    </tr>
                  </table></td>
                </tr>
              </table></td>
             
              <td align="center" valign="middle"><table width="260" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="131" colspan="2" align="left" valign="top" class="STYLE1"><?php echo $content; ?></td>
                </tr>
                <tr>
                  <td width="174" height="15" align="right"><img src="<?php echo get_template_directory_uri() ?>/images/03.jpg" width="10" height="10" /></td>
                  <td width="86"><span class="STYLE1"><A class="wenzi" href="/?p=<?php echo $id; ?>">查看详细信息</A></span></td>
                </tr>
              </table></td>
            </tr>
          </table></td>
        </tr>
    </table>
      <table width="921" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><img src="<?php echo the_post_thumbnail_url(359);?>" width="920" height="88" /></td>
        </tr>
      </table>
      <table width="921" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table>
      <table width="918" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="79" background="<?php echo get_template_directory_uri() ?>/images/014.gif"><table width="918" border="0">
            <tr>
              <td width="835">&nbsp;</td>
              <td width="76"><a href="/?p=149"><span class="wenzi">更多&gt;&gt;</span></a></td>
            </tr>
          </table></td>
        </tr>
      </table>
      <table width="918" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="563" valign="top" background="<?php echo get_template_directory_uri() ?>/images/015.gif">
          	<?php /*推荐行程，调用特别行程内容*/
$cate_name='special';
$query_string='posts_per_page=3&paged=1&category_name='.$cate_name;
query_posts($query_string);
if (have_posts()) :
    while (have_posts()) : the_post();
 ?>
          	<table width="865" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="288" height="156"><table width="286" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="143" background="<?php echo get_template_directory_uri() ?>/images/018.gif"><table width="280" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="131" align="center" valign="top"><?php /*特色图像*/?>
                      	<img src="<?php echo the_post_thumbnail_url(get_the_ID()); ?>" width="270" height="126" />
                      </td>
                    </tr>
                  </table></td>
                </tr>
              </table></td>
              <td width="592" align="right"><table width="565" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="37" colspan="2" align="left"><?php echo mb_strimwidth(get_the_title(), 0,20); ?></td>
                </tr>
                <tr>
                  <td height="76" colspan="2" align="left" valign="top" class="STYLE1"><?php echo mb_strimwidth(get_the_excerpt(), 0,220); ?></td>
                </tr>
                <tr>
                  <td width="489" height="27" align="center" class="STYLE1">&nbsp;</td>
                  <td width="76" align="center" class="STYLE1"><a href="/?p=<?php the_ID() ?>" class="wenzi">详细信息&gt;&gt;</a></td>
                </tr>
              </table></td>
            </tr>
          </table>
           <table width="877" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="27"><img src="<?php echo get_template_directory_uri() ?>/images/017.gif" width="877" height="3" /></td>
              </tr>
            </table>
          <?php endwhile;
          endif;
           ?>
          </td>
        </tr>
      </table>
      <table width="918" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><img src="<?php echo get_template_directory_uri() ?>/images/016.gif" width="918" height="28" /></td>
        </tr>
      </table>
      <table width="921" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table>
      <table width="1114" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="400" align="center" valign="top" background="<?php echo get_template_directory_uri() ?>/images/019.gif"><table width="921" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="330" align="left"><img src="<?php echo get_template_directory_uri() ?>/images/012.gif" width="313" height="38" /></td>
              <td width="330" align="left"><img src="<?php echo get_template_directory_uri() ?>/images/013.gif" width="313" height="38" /></td>
              <td width="267">&nbsp;</td>
            </tr>
            <tr>
              <td width="330" height="167" align="left" valign="middle"><table width="310" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="154" valign="top" class="STYLE1">
                  		<?php /*关于我们*/
$cate_name='aboutus';
$query_string='posts_per_page=1&paged=1&category_name='.$cate_name;
query_posts($query_string);
if (have_posts()) :
    while (have_posts()) : the_post();
    	echo get_the_content();
	 	endwhile; 
endif; ?>
                  	</td>
                </tr>
              </table></td>
          
              <td width="324" align="left" valign="top"><table width="320" border="0" cellpadding="0" cellspacing="0">
                <tr>
                	<?php if ($options['qq1'] != ''): ?>
                  <td height="41" align="center" class="STYLE1"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $options['qq1'] ?>&amp;site=qq&amp;menu=yes"><img src="<?php echo get_template_directory_uri() ?>/images/011.gif" width="62" height="27" /></a></td>
                  <?php endif; if ($options['qq2'] != ''): ?>
                  <td align="center" class="STYLE1"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $options['qq2'] ?>&amp;site=qq&amp;menu=yes"><img src="<?php echo get_template_directory_uri() ?>/images/011.gif" width="62" height="27" /></a></td>
                  <?php endif; if ($options['qq3'] != ''): ?>
                  <td align="center" class="STYLE1"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $options['qq3'] ?>&amp;site=qq&amp;menu=yes"><img src="<?php echo get_template_directory_uri() ?>/images/011.gif" width="62" height="27" /></a></td>
                  <?php endif; if ($options['qq4'] != ''): ?>
                  <td align="center" class="STYLE1"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $options['qq4'] ?>&amp;site=qq&amp;menu=yes"><img src="<?php echo get_template_directory_uri() ?>/images/011.gif" width="62" height="27" /></a></td>
                  <?php endif; ?>
                </tr>
              </table></td>
              <td>&nbsp;</td>
            </tr>
          </table>