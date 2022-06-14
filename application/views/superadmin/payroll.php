<!-- Kodingan untuk fitur payroll -->
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
         
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Payroll Data</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped">
                                    <thead>
                                        <tr>
                                            <th><center>Payment ID</th>
                                            <th><center>Payment date</th>
                                            <th><center>Employee ID</th>
                                            <th><center>Full Name</th>
                                            <th><center>Job position</th>
                                            <th><center>Status</th>
                                            <th><center>Opsi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                         <?php $no = 1;
                                         foreach ($pay as $d) :
                                            ?>
                                            <tr>
                                                <td><center><?php echo $d->id_transaksi ?></td>
                                                <td><center><?php echo date('d F Y', strtotime($d->tgl_transaksi)); ?></td>
                                                <td><center><?php echo $d->nip ?></td>
                                                     <td><center><?php echo $d->nama_depan ?> <?php echo $d->nama_belakang ?></td>
                                                    <td><center><?php echo $d->nama_jabatan ?></td>
                                                   
                                                    <td class="text-success"><center>Success</td>
                                                    
                                                   
                                                 <td><center>
                                                    <a class="text-dark" href="<?php echo base_url('superadmin/payroll/slip/' . $d->id_transaksi) ?>">Payslip</a>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>