<?php 
/**
 * Template Name: Schedule
 *
 * @package WordPress
 * @subpackage Checkered Chase Challenge
 * 
 */
get_header() ;?>
<div class="main-about-div">
    <div class="section-in-small about-hero">
      <?php echo get_template_part('parts/page', 'main-nav'); ?>
      <div class="container-1140 hero-container">
        <div class="home-header">
          <div data-w-id="946b9886-b467-d89b-d03e-f8174b418c5e" class="left-nav">
            <div data-w-id="652febee-827f-619b-b518-a26220ebdfe4" class="menu-line"></div>
            <div data-w-id="b134eebe-6a3a-acce-4406-68a123cbe444" class="menu-line"></div>
            <div data-w-id="9aad8210-42fb-aa2b-fb8f-36ddff1454fb" class="menu-line"></div>
          </div>
          <div class="logo-block">
            <a href="<?php echo get_home_url(); ?>" class="logo-link-block w-inline-block"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/Checker-Chase-Logo.png" loading="lazy" data-w-id="946b9886-b467-d89b-d03e-f8174b418c62" sizes="(max-width: 479px) 32vw, (max-width: 767px) 45vw, 46vw" alt="Checkered Chase Logo">
            </a>
          </div>
          <div class="right-nav"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/menu-icon.png" loading="lazy" data-w-id="946b9886-b467-d89b-d03e-f8174b418c64" sizes="(max-width: 767px) 11vw, 8vw" alt="" class="leaderboard-trigger"></div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>