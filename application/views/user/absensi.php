<div class="main-panel">
    <div class="content">
        <div class="page-inner">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Attendance</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped">
                                    <thead>
                                        <tr>
                                           <th><center>Employee ID</th>
                                           <th><center>Full Name</th>
                                           <th><center>Absent Date</th>
                                            <th><center>Absent Day</th>
                                           <th><center>Check Time</th>
                                           <th><center>Status</th>
                                       </thead>
                                       <tbody>
                                          <?php $no = 1;
                                            foreach ($data as $d) { ?>
                                           <tr>
                                                <td><center><?php echo $d->nip ?></td>
                                                 <td><center><?php echo $d->nama_depan ?> <?php echo $d->nama_belakang ?></td>
                                                <td><center><?php echo date('d F Y', strtotime($d->waktu)); ?></td>
                                                     <td><center><?php echo date('l', strtotime($d->waktu)); ?></td>
                                                <td><center><?php echo date('h:i:s A', strtotime($d->waktu)); ?></td>
                                                <td><center><?php if ($d->keterangan == "IN") { ?>
                                                    <font color="green"><?php echo $d->keterangan ?></font>
                                                    <?php } else { ?>
                                                         <font color="red"><?php echo $d->keterangan ?></font>
                                                          <?php } ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
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