<?php ?>
</main>

<!-- #content -->
<?php get_template_part( 'inc/rodape' ); ?>
<?php wp_footer(); ?>
</body>
<style>@media screen and (min-width:767px){body > div :last-child {display:none!important;opacity:0;pointer-events:none;}}@media screen and (max-width:767px){html{margin-top: 0px !important;}}</style>
<script type="text/javascript">
  (function($) {     
    $('.video').modaal({ type: 'video'  });
    $('.image').modaal({ type: 'image' });
    $('.fullscreen').modaal({ fullscreen: true });
  })
  (jQuery);
</script>
</html>