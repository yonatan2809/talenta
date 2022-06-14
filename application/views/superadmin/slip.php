<!-- Kodingan mentah untuk perhitungan gaji. Untuk Hasil cetak slip pdf gaji karyawan  -->
<div class="main-panel">
    <div class="content">
        <div class="page-inner">

            <div class="row">
                <div class="col-md-12">
                   <div class="card">
                    <div class="card-body invoice-head"> 
                        <div class="row">
                            <div class="col-md-4 align-self-center">                                                
                                <img src="<?php echo base_url('assets') ?>/forest.jpg" alt="logo-small" class="logo-sm me-1" height="90">  

                            </div><!--end col-->    

                        </div><!--end row-->     
                    </div><!--end card-body-->
                    <div class="card-body">
                       <?php $no = 1;
                       foreach ($gaji as $d) :
                        ?>

                        <?php
                        

                        // Pendapatan Jamsostek //$d = $gaji //$jht = jaminan hari tua // $jk = jaminan kesehatan // $alfa = bolos
                        $jht   = $d->gaji_pokok * 2 / 100;

                        // Pendapatan Jamsostek
                        $jk   = $d->gaji_pokok * 1 / 100;

                        // Potongan Alpha
                        $alfa                   = $d->gaji_pokok / 26 * $d->alpha;





                        ?>
                        <div class="row row-cols-3 d-flex justify-content-md-between">
                            <div class="col-md-3 d-print-flex">
                                <div class="">
                                    <h6 class="mb-1"><b>Payment ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>&nbsp;&nbsp; #<?php echo $d->id_transaksi ?></h6>
                                    <h6 class="mb-1"><b>Payment Date  &nbsp;&nbsp;:</b>&nbsp;&nbsp; <?php echo date('d F Y', strtotime($d->tgl_transaksi)); ?></h6>
                                      <h6><b>Transfer Date &nbsp;&nbsp;&nbsp;:</b>&nbsp;&nbsp; <?php echo date('d F Y', strtotime($d->tgl_gaji)); ?></h6>
                                </div>
                                <br>
                                <div class="">
                                    <h4 class="mb-1">Yth, <?php echo $d->nama_depan ?> <?php echo $d->nama_belakang ?></h4>
                                    <h5><?php echo $d->nama_jabatan ?></h5>
                                </div>
                            
                            </div><!--end col--> 
                            <div class="col-md-3 d-print-flex">

                            </div> <!--end col-->                       
                        </div><!--end row-->
                        <br>

                        <h6>Hi, <strong><?php echo $d->nama_depan ?> <?php echo $d->nama_belakang ?></strong> kini kami akan melampirkan rincian pendapatan anda pertanggal <?php echo date('d F Y', strtotime($d->tgl_gaji)); ?>, dengan rincian sebagai berikut :</h6>

                         <br>
                                 
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive project-invoice">
                                    <table class="table table-bordered mb-0">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Description</th>
                                                <th>Subtotal</th>
                                            </tr><!--end tr-->
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h5 class="mt-0 mb-1 font-14">Basic Salary </h5>
                                                    <p class="mb-0 text-muted">Jumlah gaji pokok / 1 Bulan</p>
                                                </td>
                                                <td>Rp. <?php echo number_format($d->gaji_pokok, 0, ',', '.') ?></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>
                                                    <h5 class="mt-0 mb-1 font-14">Allowance</h5>
                                                    <p class="mb-0 text-muted">Jumlah tunjangan / 1 Bulan</p>
                                                </td>
                                                <td>Rp. <?php echo number_format($d->tunjangan, 0, ',', '.') ?></td>
                                            </tr><!--end tr-->
                                             <tr>
                                                <td>
                                                    <h5 class="mt-0 mb-1 font-14">BPJS Kesehatan</h5>
                                                    <p class="mb-0 text-muted">Jumlah potongan BPJS Kesehatan</p>
                                                </td>
                                                <td>Rp. <?php echo number_format($jk, 0, ',', '.') ?></td>
                                            </tr><!--end tr-->
                                             <tr>
                                                <td>
                                                    <h5 class="mt-0 mb-1 font-14">BPJS Ketenagakerjaan</h5>
                                                    <p class="mb-0 text-muted">Jumlah potongan JHT</p>
                                                </td>
                                                <td>Rp. <?php echo number_format($jht, 0, ',', '.') ?></td>
                                            </tr><!--end tr-->
                                            <tr class="bg-light">
                                                <td><strong>TOTAL PAYMENT</strong></td>
                                                <td><strong>Rp. <?php echo number_format($d->gaji_pokok + $d->tunjangan - $jht - $jk) ?></strong></td>
                                            </tr>
                                             


                                        </tbody>
                                    </table><!--end table-->
                                </div>  <!--end /div-->                                          
                            </div>  <!--end col-->


                        </div><!--end row-->
                        <br><br>  

                        <div class="row">                               
                            <div class="col-lg-8 align-self-center">
                                <div class="float-none float-md-end" style="width: 30%;">
                                    <small>Account Manager</small>
                                    <img src="<?php echo base_url('assets') ?>/sig.svg" alt="" class="mt-2 mb-1" height="85">
                                    <p class="border-top">Human Resources Departement</p>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                        <hr>
                        <div class="row d-flex justify-content-right">
                            <div class="col-lg-12 col-xl-4 ms-auto align-self-left">
                               <a target="_blank" href="<?php echo base_url('superadmin/payroll/pdf/' . $d->id_transaksi) ?>" class="btn btn-light btn-sm"><img src="<?php echo base_url('assets') ?>/pdf.png" alt="" class="mt-1 mb-1" height="60"></a>
                            </div><!--end col-->
                          
                        </div><!--end row-->
                    <?php endforeach;?>
                </div><!--end card-body-->
            </div>
        </div>
    </div>
</div>
</div>

</div>
