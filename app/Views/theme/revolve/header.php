<header class="header-top bg-grey ">
  <div class="container">
    <div class="columns is-gapless">
      <div class="column is-12">
        <nav class="navbar navigation">
          <div class="navbar-brand">
            <img src="<?php echo base_url('/logo-kemendikbud.png'); ?>" width="30px" alt="" class="img-fluid">&nbsp;&nbsp;
            <a class="navbar-brand " href="https://danaindonesiana.kemdikbud.go.id/" target="_blank">
              <img src="<?php echo base_url('/logo-dana-blue.png'); ?>" width="200px" alt="" class="img-fluid">&nbsp;
            </a>
            <a class="navbar-brand " href="https://lpdp.kemenkeu.go.id/" target="_blank">
              <img src="<?php echo base_url('/logo-lpdp.png'); ?>" width="75px" alt="" class="img-fluid">&nbsp;&nbsp;&nbsp;
            </a>
            <a class="navbar-brand " href="<?=base_url();?>">
              <img src="<?php echo base_url('/logo-pusako.png'); ?>" width="65px" alt="" class="img-fluid">
            </a>
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="menu1">
               <span aria-hidden="true"></span>
               <span aria-hidden="true"></span>
               <span aria-hidden="true"></span>
            </a>
          </div>
            <?= view('theme/revolve/menu') ?>
        </nav>
    </div>
  </div>
</header>