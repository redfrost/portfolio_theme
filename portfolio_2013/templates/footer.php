<footer id="content-info" class="container" role="contentinfo">
  <?php dynamic_sidebar('sidebar-footer'); ?>
  <a rel="popover" data-placement="top" title="System Version: <?php echo SYSTEM_VERSION; ?>" class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></a>
        

</footer>
  
<?php if (GOOGLE_ANALYTICS_ID) : ?>
<script>
  var _gaq=[['_setAccount','<?php echo GOOGLE_ANALYTICS_ID; ?>'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif; ?>

<?php wp_footer(); ?>



	