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
                                         foreach ($data as $d) :
                                            ?>
                                            <tr>
                                                <td><center><?php echo $d->nip ?></td>
                                                 <td><center><?php echo $d->nama_depan ?> <?php echo $d->nama_belakang ?></td>
                                                <td><center><?php echo date('d F Y', strtotime($d->waktu)); ?></td>
                                                     <td><center><?php echo date('l', strtotime($d->waktu)); ?></td>
                                                <td><center><?php echo date('h:i:s', strtotime($d->waktu)); ?></td>
                                                <td><center><?php if ($d->keterangan == "IN") { ?>
                                                    <font color="green"><?php echo $d->keterangan ?></font>
                                                    <?php } else { ?>
                                                         <font color="red"><?php echo $d->keterangan ?></font>
                                                          <?php } ?>
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

<!-- Modal -->
<div class="modal modal-default fade" id="modal_5" tabindex="-1" role="dialog" aria-labelledby="modal_5" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title h4" id="modal_title_6">
            <strong>Notes</strong></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
          <div class="text-left">

            <form action="<?php echo base_url('login') ?>" method="post">
              <?php $no = 1;
              foreach ($cuti as $d) :
                ?>
                <div class="col-md-12">
                    <div class="form-group form-group-default">
                        <label>Reason</label>
                        <input type="text" class="form-control" value="<?php echo $d->alasan ?>" name="address">
                    </div>
                </div>
            <?php endforeach; ?>
            <br>
            <hr>
            <div class="mt-4">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">CLOSE</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>