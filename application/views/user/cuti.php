<div class="main-panel">
    <div class="content">
        <div class="page-inner">
           <div class="page-header">
            <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <strong>Add submission</strong>
            </button>
            <div class="dropdown-menu">
                <div class="arrow"></div>
                <a class="dropdown-item" data-toggle="modal" data-target="#editmodal">Add new submission</a>
            </div>

        </div>
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
                                   <th><center>Status</th>
                                   <th><center>Taken</th>
                                   <th><center>Detail</th>
                                   <th><center>File</th>
                                   <th><center>Opsi</th>
                               </thead>
                               <tbody>
                                <?php $no = 1;
                                foreach ($data as $d) { ?>
                                    <tr>
                                        <td><center>
                                            <div class="flex-1 ml-3 pt-1">
                                                <h5 class="text-uppercase fw-bold mb-1"><a href="<?php echo base_url('superadmin/karyawan/detail/' . $d->id_karyawan) ?>" class="text-dark"><?php echo $d->nama_depan ?> <?php echo $d->nama_belakang ?></a></h5>
                                                <span class="text-muted"><?php echo $d->nip ?></span>
                                            </div></td>
                                            <td><center><?php echo $d->waktu_pengajuan ?></td>
                                            <td><center><?php echo $d->waktu_selesai ?></td>


                                            <td><center><?php if ($d->status == "1") { ?>
                                                Pending
                                            <?php } else { ?>
                                                Accepted
                                                <?php } ?></td>

                                                <?php
                                                $start_date = new DateTime("$d->waktu_pengajuan");
                                                $end_date = new DateTime("$d->waktu_selesai");
                                                $interval = $start_date->diff($end_date);
                                                ?>
                                                <td><center>
                                                 <?php echo "$interval->days Days "; ?>
                                             </td>
                                            <td><center>
                                                     <center><a class="text-dark" data-toggle="modal" data-target="#modal-lg"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
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
                                               <a href="" class="btn btn-sm btn-danger">Cancel</a>
                                                <?php } else { ?>
                                                    -
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

 <!-- tampilan untuk popup dari add subbmision/pengajuan cuti -->
    <div class="modal" id="editmodal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Ketidakhadiran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?= base_url('user/cuti/proses') ?>" enctype="multipart/form-data">
                        <label class="mb-2">Time Off Type</label>
                        <input type="hidden" name="status" class="form-control" value="1">
                        <input type="hidden" name="date_created" class="form-control" value="<?php $tgl=date('Y-m-d h:i:s');echo $tgl;?>">
                         <input type="hidden" name="nip" class="form-control" value="<?php echo $this->session->userdata('nip') ?>">
                        <select name="jenis_cuti" class="form-control" required="">
                            <option value="" selected="" disabled="">--Pilih--</option>
                            <?php if ($bakti > 365) { ?>
                                <option value="cuti">Cuti</option>
                            <?php } ?>
                            <option value="Izin">Izin</option>
                            <option value="Sakit">Sakit</option>
                            <option value="Cuti Menikah">Cuti Menikah (special leave)</option>
                            <option value="Cuti Keluarga Meninggal">Cuti Keluarga Meninggal</option>
                            <option value="Cuti Melahirkan">Cuti Melahirkan</option>
                             <option value="Cuti Ibadah Haji">Cuti Ibadah Haji</option>
                        </select><br>
                        <label class="mb-2">Attach File</label>
                        <input type="file" name="file" class="form-control"><br>

                        <label class="mb-2">Start Date</label>
                        <input type="date" name="waktu_pengajuan" class="form-control" required=""><br>

                        <label class="mb-2">End Date</label>
                        <input type="date" name="waktu_selesai" class="form-control" required=""><br>

                        <label class="mb-2">Notes</label>
                        <textarea class="form-control" required="" name="alasan"></textarea><br>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="modal-lg">
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
               <?php $no = 1;
               foreach ($data as $d) :
                ?>
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
            <?php endforeach;?>
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
      <!-- /.modal -->

