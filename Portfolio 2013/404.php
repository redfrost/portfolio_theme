<?php get_template_part('templates/page', 'header'); ?>

<div class="row">
<div class="span6">

<h2>"There are three things we cry about in life, things that are lost, things that are found, and things that are magnificent."</h2>
<p><?php _e('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'roots'); ?></p>

<hr>

<p><strong><?php _e('Please try the following:', 'roots'); ?></strong></p>
<ul>
  <li><?php _e('Check your spelling', 'roots'); ?></li>
  <li><?php printf(__('Try <a href="%s">This</a>', 'roots'), home_url()); ?></li>
  <li><?php _e('Try <a href="javascript:history.back()">That</a>', 'roots'); ?></li>
</ul>

</div>

<div class="span6">
<img class="404" src="http://simonalex.com/portfolio/assets/404.jpg" />
<p></p>
<p></p>
</div>
</div>