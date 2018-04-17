<div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            DATA KELAS
                        </h2>
                    </div>
                    <div class="body">
                      <?php echo $totalpas ?>
                      <?php echo strtoupper($this->session->userdata('Id')); ?>
                        <!-- <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>Id Pasien</th>
                                <th>Nama Pasien</th>
                                <th>Umur</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                            </tr>
                            </thead>
                            <tbody>
                                  <?php
                            foreach ($pasien as $obj) {
                                echo "<tr>";
                                echo "<td>$obj->idPasien</td>";
                                echo "<td>$obj->nmPasien</td>";
                                echo "<td>$obj->umur</td>";
                                echo "<td>$obj->gender</td>";
                                echo "<td>$obj->Alamat</td>";
                            }
                            ?>
                            </tbody>
                        </table> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
