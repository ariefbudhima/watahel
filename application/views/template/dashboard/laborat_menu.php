<div class="menu">
    <ul class="list">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
            <a href="<?php echo base_url(); ?>">
                <i class="material-icons">home</i>
                <span>Home</span>
            </a>
        </li>
        <li>
          <a href="javascript:void(0);" class="menu-toggle">
              <i class="material-icons">local_library</i>
              <span>Pasien</span>
          </a>
          <ul class="ml-menu">
              <li>
                  <a href="<?php echo base_url();?>Laborat/dataPasien">Data Pasien</a>
              </li>
              <li>
                  <a href="<?php echo base_url();?>Laborat/tambahPasien">Tambah Pasien</a>
              </li>
          </ul>
            <!-- <a href="<?php echo base_url(); ?>Laborat/tambahPasien" >
                <i class="material-icons">local_library</i>
                <span>Tambah Pasien</span>
              </a> -->
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">assignment</i>
                <span>Pemeriksaan</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="<?php echo base_url();?>Laborat/dataPemeriksaan">Data Pemeriksaan</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>Presensi/tambah">Tambah Pemeriksaan</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">attachment</i>
                <span>Lampiran</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="<?php echo base_url();?>Lampiran">Data Lampiran</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>Lampiran/unggahLampiran">Unggah Lampiran</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
