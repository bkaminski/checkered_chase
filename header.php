<!DOCTYPE html>
<?php if ( is_front_page() ): ?>
  <html <?php language_attributes(); ?> data-wf-page="613f782cf1b55931c21407f6" data-wf-site="611f646b123d6105a98a9233">
<?php elseif ( is_page ('services') ): ?>
  <html <?php language_attributes(); ?> data-wf-page="60cb7d50b5130d70f147b445" data-wf-site="611f646b123d6105a98a9233">
<?php elseif ( is_page ('about') ): ?>
  <html <?php language_attributes(); ?> data-wf-page="60cb79f38be728b86cfc986b" data-wf-site="611f646b123d6105a98a9233">
<?php else: ?>
  <html <?php language_attributes(); ?>>
<?php endif; ?>
<head>
  <?php get_template_part( 'parts/page', 'header-tracking' ); ?>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <?php get_template_part( 'parts/page', 'favicons' ); ?>
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Roboto:300,regular,700"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <?php wp_head(); ?>
  <script type="text/javascript">
  function play_single_sound() {
      document.getElementById('audiotag').play();
  }
</script>
  </head>
  <body <?php body_class(); ?>>
    