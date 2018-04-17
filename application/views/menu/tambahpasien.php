<!-- helo
<?php echo $this->session->userdata('username');?>

<?php  ?> -->
<?php $this->load->view('template/loader');?>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Top Bar -->
<?php
$this->load->view('template/navbar');

?>
<!-- #Top Bar -->
<section>
    <?php $this->load->view('template/sidebar');?>
        <!-- Menu -->
        <?php
        if($this->session->userdata('akses') == 'Laborat'){
            $this->load->view('template/dashboard/laborat_menu');
        }
        elseif ($this->session->userdata('akses') == 'Radio') {
            $this->load->view('template/dashboard/radio_menu');
        }
        else if ($this->session->userdata('akses') == 'Medical') {
            $this->load->view('template/dashboard/medical_menu');
        }
        ?>
        <!-- #Menu -->
        <!-- Footer -->
        <?php $this->load->view('template/footer');?>
        <!-- #Footer -->
    </aside>
</section>
<section class="content">
    <div class="container-fluid">
      <div class="body">
        <?php
        $int = 1;
        $int = 'PHP'.$int;
        echo $int;
         ?>
        <form class="" action="<?php echo base_url().'Laborat/addPas' ?>" method="post">
          <div class="col-lg-3">
            <input type="text" name="fullname" placeholder="Nama Lengkap" required class="tambahp col-lg-9" style="margin-bottom: 10px;"> <br>
            <input type="text" name="umur" placeholder="Usia" required class="tambahp col-lg-9" style="margin-bottom: 10px;"> <br>
            <input type="text" name="gender" placeholder="Jenis Kelamin" required class="tambahp col-lg-9" style="margin-bottom: 10px;"> <br>
            <input type="text" name="alamat" placeholder="Alamat" required class="tambahp col-lg-9" style="margin-bottom: 10px;"> <br>
            <input type="text" name="noTelp" placeholder="No Telepon" required class="tambahp col-lg-9" style="margin-bottom: 10px;"> <br>
          </div>
          <div class="col-lg-3">
            <!-- <input type="text" name="umur" placeholder="Usia" class="form_control col-lg-9"> -->
          </div>
          <div class="col-lg-3">
            <!-- <input type="text" name="gender" placeholder="Jenis Kelamin" class="form_control col-lg-9"> -->
          </div>
          <div class="col-lg-3">
            <!-- <input type="text" name="alamat" placeholder="Alamat" class="form_control col-lg-9"> -->
          </div>
          <div class="col-lg-12">
            <div class="col-lg-3">
              <button class="btn btn-block bg-blue waves-effect" type="submit">ADD</button>
            </div>
          </div>
        </form>
      </div>
    </div>
</section>
