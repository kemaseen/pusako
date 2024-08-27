
        <div id="menu1" class="navbar-menu">
          <div class="navbar-start">
            <div class="navbar-item">
              <a href="<?=base_url('./');?>" class="navbar-link">Beranda</a>
            </div> 
            <div class="navbar-item">
              <a href="<?=base_url('/Berita');?>" class="navbar-link">Berita</a>
            </div>
            <div class="navbar-item">
              <a href="<?=base_url('/Artikel');?>" class="navbar-link">E-Artikel</a>
            </div>
            <div class="navbar-item">
              <a href="<?=base_url('/Ebook');?>" class="navbar-link">E-Book</a>
            </div>
            <div class="navbar-item has-dropdown is-hoverable">
               <a class="navbar-link" href="#!">Galeri</a>
               <div class="navbar-dropdown">
                  <a class="dropdown-item" href="<?=base_url('/Gallery/Video');?>">Video</a>
                  <a class="dropdown-item" href="<?=base_url('/Gallery/Foto');?>">Foto</a>
               </div>
            </div>
            
            <div class="navbar-item">
              <a href="<?=base_url('/Live');?>" class="navbar-link">Live Straming</a>
            </div>
            
            <div class="navbar-item has-dropdown is-hoverable">
               <a class="navbar-link" href="#!">Manuscript</a>
               <div class="navbar-dropdown">
                  <a class="dropdown-item" href="<?=base_url('/Naskah/Digital');?>">Naskah Digital</a>
                  <a class="dropdown-item" href="<?=base_url('/Kamus/Jawi');?>">Kamus Jawi</a>
                  <a class="dropdown-item" href="<?=base_url('/Kamus/AksaraUlu');?>">Kamus Aksara Ulu</a>
               </div>
            </div>
            <div class="navbar-item">
            <a href="<?=base_url('/Penelitian');?>" class="navbar-link">Penelitian</a>
            </div>
          </div>
        </div>
        