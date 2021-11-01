<?php 
/**
 * Template Name: Services
 *
 * @package WordPress
 * @subpackage Checkered Chase Challenge
 * 
 */
get_header() ;?>

  <div class="main-container section-in-small">
    <div class="section-in-small service-hero">
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
    <div class="section-in-small services-container">
      <div class="container-1140 services-hero w-container">
        <h2 class="page-heading">Services</h2>
        <div class="service-box-container">
          <div class="service-box open-track-service">
            <h3 class="service-desc-title">Open Track</h3>
            <div class="text-block">Experience the thrill of victory or the agony of defeat as you challenge your friends or the computer in open track racing simulation. </div>
          </div>
          <div class="service-box special-service-box league-service">
            <h3 class="service-desc-title">league</h3>
            <div class="text-block">Start and manage racing leagues with your friends and family. You can create a league or join an existing league for the ultimate competing in racing simulation. </div>
          </div>
        </div>
        <div class="service-box-container">
          <div class="service-box challenge-service">
            <h3 class="service-desc-title">challenge series</h3>
            <div class="text-block">Test your skills against the best of the best in our challenge series as we seek to find out who&#x27;s the best racer!</div>
          </div>
          <div class="service-box special-service-box other-services">
            <h3 class="service-desc-title">other services</h3>
            <div class="text-block">Drop in at anytime and enjoy a casual race against the computer if you&#x27;re looking for stress-free way to relax. </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>