<div class="main-panel">
    <div class="content">
        <div class="page-inner">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Time Off</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped">
                                    <thead>
                                        <tr>
                                         <th><center>Employee</th>
                                         <th><center>Start Date</th>
                                         <th><center>End Date</th>
                                         <th><center>Taken</th>
                                         <th><center>Status</th>
                                         <th><center>Detail</th>
                                         <th><center>File</th>
                                         <th><center>Opsi</th>
                                     </thead>
                                     <tbody>
                                       <?php $no = 1;
                                       foreach ($cuti as $d) :
                                        ?>
                                        <tr>
                                            <td><center>
                                                <div class="flex-1 ml-3 pt-1">
                                                    <h5 class="text-uppercase fw-bold mb-1"><a href="<?php echo base_url('superadmin/karyawan/detail/' . $d->id_karyawan) ?>" class="text-dark"><?php echo $d->nama_depan ?> <?php echo $d->nama_belakang ?></a></h5>
                                                    <span class="text-muted"><?php echo $d->nip ?></span>
                                                </div></td>
                                                <td><center><?php echo $d->waktu_pengajuan ?></td>
                                                <td><center><?php echo $d->waktu_selesai ?></td>

                                                    <?php
                                                    $start_date = new DateTime("$d->waktu_pengajuan");
                                                    $end_date = new DateTime("$d->waktu_selesai");
                                                    $interval = $start_date->diff($end_date);
                                                    ?>
                                                    <td><center>
                                                       <?php echo "$interval->days Days "; ?>
                                                   </td>
                                                    <td><center><?php if ($d->status == "1") { ?>
                                                    Pending
                                                <?php } else { ?>
                                                    Accepted
                                                    <?php } ?></td>
                                                   <td><center>
                                                     <center><a class="text-dark" data-toggle="modal" data-target="#modal-lg<?php echo $d->nip; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                                      <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                                                  </svg></a>
                                              </td>
                                              <td><center>
                                                <?php if ($d->file == NULL) { ?>
                                                    -
                                                <?php } else { ?>
                                                <a class="text-dark" href="<?= base_url('assets/file/' . $d->file) ?>">Show</a>
                                                 <?php } ?>
                                            </td>
                                              
                                               <td><center>
                                                <?php if ($d->status == "1") { ?>
                                               <a onclick="return confirm('apakah anda yakin ingin menerima pengajuan cuti ini?')" href="<?php echo base_url('superadmin/cuti/approval/' . $d->nip) ?>" class="btn btn-sm btn-success">Approval</a>
                                                <?php } else { ?>
                                                    -
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


<?php $no = 0;
foreach ($cuti as $d) : $no++; ?>
<div class="modal fade" id="modal-lg<?php echo $d->nip; ?>">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Request Detail</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
      <div class="table-responsive">
         <table class="table">
            <thead>
                <tr>
                    <th scope="col">Employee ID</th>
                    <th scope="col">Time Off Type</th>
                    <th scope="col">Notes</th>
                    <th scope="col">Status</th>
                    <th scope="col">Date Created</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <h5 class="text-uppercase fw-bold mb-1"><a href="<?php echo base_url('superadmin/karyawan/detail/' . $d->id_karyawan) ?>" class="text-dark"><?php echo $d->nama_depan ?> <?php echo $d->nama_belakang ?></a></h5>
                        <span class="text-muted"><?php echo $d->nip ?></span>
                   </td>
                    <td><?php echo $d->jenis_cuti ?></td>
                    <td><?php echo $d->alasan ?></td>
                    <td><?php if ($d->status == "1") { ?>
                                                Pending
                                            <?php } else { ?>
                                                Accepted
                                                <?php } ?></td>
                    <td><?php echo $d->date_created ?></td>
                </tr>
           
        </tbody>
    </table>
</div>
</div>
<div class="modal-footer left-content-between">
  <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
</div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<?php endforeach; ?>