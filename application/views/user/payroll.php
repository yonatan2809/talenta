<div class="main-panel">
    <div class="content">
        <div class="page-inner">
         
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Payroll</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                           <table id="basic-datatables" class="display table table-striped">
                            <thead>
                                <tr>
                                  <th><center>Transaction code</th>
                                  <th><center>Transaction date</th>
                                  <th><center>Job position</th>
                                  <th><center>Status</th>
                                  <th><center>Opsi</th>
                                </tr>
                               </thead>
                               <tbody>
                                <?php $no = 1;
                                foreach ($data as $d) { ?>
                                    <tr>
                                                <td><center><?php echo $d->id_transaksi ?></td>
                                                <td><center><?php echo date('d F Y', strtotime($d->tgl_transaksi)); ?></td>
                                                    <td><center><?php echo $d->nama_jabatan ?></td>
                                                   
                                                    <td class="text-success"><center>Success</td>
                                                    
                                                   
                                                 <td><center>
                                                    <a class="text-dark" href="<?php echo base_url('user/payroll/slip/' . $d->id_transaksi) ?>">Payslip</a>
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

 <!-- Modal -->
    <!--<div class="modal" id="editmodal" tabindex="-1" role="dialog">
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
                                            -->
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
      <!-- /.modal -->

