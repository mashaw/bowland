<?php

/**
 * @file
 * Default theme implementation to format the simplenews newsletter body.
 *
 * Copy this file in your theme directory to create a custom themed body.
 * Rename it to override it. Available templates:
 *   simplenews-newsletter-body--[tid].tpl.php
 *   simplenews-newsletter-body--[view mode].tpl.php
 *   simplenews-newsletter-body--[tid]--[view mode].tpl.php
 * See README.txt for more details.
 *
 * Available variables:
 * - $build: Array as expected by render()
 * - $build['#node']: The $node object
 * - $title: Node title
 * - $language: Language code
 * - $view_mode: Active view mode
 * - $simplenews_theme: Contains the path to the configured mail theme.
 * - $simplenews_subscriber: The subscriber for which the newsletter is built.
 *   Note that depending on the used caching strategy, the generated body might
 *   be used for multiple subscribers. If you created personalized newsletters
 *   and can't use tokens for that, make sure to disable caching or write a
 *   custom caching strategy implemention.
 *
 * @see template_preprocess_simplenews_newsletter_body()
 */
?>
<div class="wrapper">
<h1><?php print $title; ?></h1>
<?php // print render($build); ?>
 
 <table cellspacing="0" cellpadding="0" border="0" class="e-news" width="600px">
    <tr><td><table cellspacing="0" cellpadding="0" border="0"  class="teasers" width="600px">
     
    <tr><th width="145px" BGCOLOR="#f58345" style="color:#fff;font-size:15px;padding:6px 12px;background-color:#f58345"><strong><a name="en" id="en"></a>Enjoyment</strong></td>
    <td width="6px" class="spacer">&nbsp;</td>
    <th width="145px"  BGCOLOR="#aa1054" style="color:#fff;font-size:15px;padding:6px 12px;background-color:#aa1054"><strong><a name="co" id="co"></a>Community</strong></td>
    <td width="6px" class="spacer">&nbsp;</td>
    <th width="145px"  BGCOLOR="#367db2" style="color:#fff;font-size:15px;padding:6px 12px;background-color:#367db2"><strong><a name="co" id="co"></a>Business</strong></td>
    <td width="6px" class="spacer">&nbsp;</td>
    <th width="145px"  BGCOLOR="#839c85" style="color:#fff;font-size:15px;padding:6px 12px;background-color:#839c85"><strong><a name="co" id="co"></a>Wildlife</strong></td>
    <tr><td valign="top">
<?php   $view = views_get_view('mail_links_1');
         print $view->preview('entity_view_2',array($build['#node']->nid));
       ?></td>
<td width="6px" class="spacer">&nbsp;</td>
<td  valign="top"><?php  $view = views_get_view('mail_links_1');
        print $view->preview('entity_view_1',array($build['#node']->nid));
       ?></td>
<td width="6px" class="spacer">&nbsp;</td>
<td valign="top"><?php   $view = views_get_view('mail_links_1');
         print $view->preview('entity_view_3',array($build['#node']->nid));
       ?></td>
<td width="6px" class="spacer">&nbsp;</td>
<td  valign="top"><?php  $view = views_get_view('mail_links_1');
         print $view->preview('entity_view_4',array($build['#node']->nid));
      ?>
</td></tr>
</table>
<tr>
<th  BGCOLOR="#f58345" style="color:#fff;font-size:21px;padding:6px 12px;background-color:#f58345"><strong><a name="en" id="en"></a>Enjoyment</strong></th>
        </tr>


    <tr><td> 
               <?php   $view = views_get_view('mail_body');
                       print $view->preview('block_1',array($build['#node']->nid));
                       ?>
                     </td></tr>
<tr>
<th BGCOLOR="#aa1054" style="color:#fff;font-size:21px;padding:6px 12px;background-color:#aa1054"><strong><a name="co" id="co"></a>Community</strong></th>
        </tr>


    <tr><td> 
               <?php   $view = views_get_view('mail_body');
                       print $view->preview('block_2',array($build['#node']->nid));
                       ?>
                     </td></tr>
                     
 <th  BGCOLOR="#367db2" style="color:#fff;font-size:21px;padding:6px 12px;background-color:#367db2"><strong><a name="co" id="co"></a>Business</strong></th>
        </tr>


    <tr><td> 
               <?php   $view = views_get_view('mail_body');
                       print $view->preview('block_3',array($build['#node']->nid));
                       ?>
                     </td></tr> 
                     
 <th   BGCOLOR="#839c85"  style="color:#fff;font-size:21px;padding:6px 12px;background-color:#839c85"><strong><a name="co" id="co"></a>Wildlife</strong></th>
        </tr>


    <tr><td> 
               <?php   $view = views_get_view('mail_body');
                       print $view->preview('block_4',array($build['#node']->nid));
                       ?>
                     </td></tr> 
                     
       <tr><td  BGCOLOR="#f58345"  CELLSPACING="6PX"> <font COLOR="WHITE" >             
                     
                     <?php   $view = views_get_view('e_news_archive');
         print $view->preview('entity_view_1',array($build['#node']->nid));
       ?> </font>
       
       </td></tr>                                      
                                         
</table>

</div>
