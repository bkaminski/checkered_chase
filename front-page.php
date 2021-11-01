<?php get_header(); ?>
<div class="main-container section-in-small">
    <div class="section-in-small hero-section">
    <?php echo get_template_part('parts/page', 'main-nav'); ?>
      <div class="container-1140 hero-container">
        <div class="home-header">
          <div data-w-id="946b9886-b467-d89b-d03e-f8174b418c5e" class="left-nav">
            <div data-w-id="652febee-827f-619b-b518-a26220ebdfe4" class="menu-line"></div>
            <div data-w-id="b134eebe-6a3a-acce-4406-68a123cbe444" class="menu-line"></div>
            <div data-w-id="9aad8210-42fb-aa2b-fb8f-36ddff1454fb" class="menu-line"></div>
          </div>
          <div class="logo-block">
            <a href="<?php echo get_home_url(); ?>" aria-current="page" class="logo-link-block w-inline-block w--current">
              <img src="<?php echo get_home_url(); ?>/wp-content/uploads/Checker-Chase-Logo.png" loading="lazy" data-w-id="946b9886-b467-d89b-d03e-f8174b418c62" class="checkered-chase-logo">
            </a>
          </div>
          <div class="right-nav">
            <img src="<?php echo get_home_url(); ?>/wp-content/uploads/menu-icon.png" loading="lazy" data-w-id="946b9886-b467-d89b-d03e-f8174b418c64" sizes="(max-width: 767px) 11vw, 8vw" alt="" class="leaderboard-trigger">
          </div>
        </div>
      </div>
    </div>
    <div class="section-in-small homepage-hero">
      <div class="dashboard-container container-1140">
        <div id="w-node-_06538c49-44b1-6cf1-7110-f101e28d7239-c21407f6" class="left-speedomter">
          <div class="left-needle-cont">
            <img class="speedomter-needle" src="<?php echo get_home_url(); ?>/wp-content/uploads/long-needle-left0003.png" width="398" alt="" style="opacity:0" data-w-id="41e41bcd-9c58-c324-c1dd-9f929dbbb042" loading="lazy">
          </div>
          <img class="left-speed-img" src="<?php echo get_home_url(); ?>/wp-content/uploads/yellow-speedometer.png" width="339" alt="" style="opacity:0" sizes="(max-width: 991px) 100vw, 339px" data-w-id="c555b5ad-2337-60e9-8877-e9e31155c2b9" loading="lazy">
        </div>
        <div class="mid-speedometer">
          <a href="services" class="link-block w-inline-block">
            <div class="mid-speed-needle-container">
              <img class="mid-speedometer-needle" src="<?php echo get_home_url(); ?>/wp-content/uploads/left-needle-left-speedometer0002.png" width="112" alt="" style="opacity:0" sizes="(max-width: 479px) 135px, 176px" data-w-id="7e072f29-59b7-b141-15f7-dacbcc84022b" loading="lazy" >
            </div>
            <img class="mid-speed-img" src="<?php echo get_home_url(); ?>/wp-content/uploads/middle-speedometer-with-services-08.png" width="543" alt="" style="opacity:0" sizes="(max-width: 479px) 363px, (max-width: 991px) 479px, 543px" data-w-id="7c2cfa4f-da30-c616-2f61-1a95fb896e8e" loading="lazy">
          </a>
        </div>
        <div id="w-node-db5cfd39-cea9-41e5-0430-607764e62d88-c21407f6" class="right-speedometer">
          <div class="right-needle-cont">
            <img class="right-speedometer-needle" src="<?php echo get_home_url(); ?>/wp-content/uploads/long-needle-right0002.png" width="165" alt="" style="opacity:0" sizes="(max-width: 991px) 100vw, 100px" data-w-id="e9ea7612-4e69-92b4-2f7d-1678e50bf16e" loading="lazy" >
          </div>
          <img class="right-speed-img" src="<?php echo get_home_url(); ?>/wp-content/uploads/red-speedometer.png" width="346" alt="" style="opacity:0" sizes="(max-width: 991px) 100vw, 346px" data-w-id="cd493d0e-036b-750a-e1fe-a2ec0260d82d" loading="lazy" >
        </div>
        <a href="javascript:play_single_sound();" id="start-btn" data-w-id="372f7392-d30c-a121-827a-3f70d1deb9c4" style="opacity:0" class="hero-cta w-inline-block">
          <div class="hero-cta-btn-txt">ENGINE</div>
          <div class="hero-cta-btn-txt-2">START</div>
        </a>
      </div>
      <div class="audio w-embed">
        <audio id="audiotag" src="<?php echo get_template_directory_uri(); ?>/mustang-SF.mp3"></audio>
      </div>
    </div>
  </div>
<?php get_footer(); ?>