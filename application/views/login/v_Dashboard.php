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
        <?php
        if($this->session->userdata('akses') == 'Laborat'){
          $this->load->view('template/dashboard/laborat_isi');
        }
        else if($this->session->userdata('akses') == 'Radio'){
          $this->load->view('template/dashboard/radio_isi');
        }
        else if($this->session->userdata('akses') == 'Medical'){
          $this->load->view('template/dashboard/medical_isi');
        }
         ?>
        <!-- #END# With Captions -->
    </div>
</section>
