<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <strong>Add employee</strong>
                </button>
                <div class="dropdown-menu">
                    <div class="arrow"></div>
                    <a class="dropdown-item" href="<?php echo base_url('superadmin/karyawan/add')  ?>">Add new employee</a>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Employees</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Employee</th>
                                            <th>Job position</th>
                                            <th>Branch</th>
                                            <th>Status</th>
                                            <th>Start date</th>
                                            <th>Gender</th>
                                            <th>Religion</th>
                                            <th>Opsi</th>
                                        </thead>
                                        <tbody>
                                         <?php $no = 1;
                                         foreach ($karyawan as $d) :
                                            ?>
                                            <tr>
                                                <td>
                                                    <div class="flex-1 ml-3 pt-1">
                                                        <h5 class="text-uppercase fw-bold mb-1"><a href="<?php echo base_url('superadmin/karyawan/detail/' . $d->id_karyawan) ?>" class="text-dark"><?php echo $d->nama_depan ?> <?php echo $d->nama_belakang ?></a></h5>
                                                        <span class="text-muted"><?php echo $d->nip ?></span>
                                                    </div></td>
                                                    <td><?php echo $d->nama_jabatan ?></td>
                                                    <td><?php echo $d->cabang ?></td>
                                                    <td><?php echo $d->status_karyawan ?></td>
                                                    <td><?php echo $d->tgl_gabung ?></td>
                                                    <td>
                                                     <?php echo $d->gender ?>
                                                 </td>
                                                 <td>
                                                     <?php echo $d->agama ?>
                                                 </td>
                                                 <td>
                                                    <button type="button" class="btn btn-sm btn-gray dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <div class="arrow"></div>
                                                       
                                                        <a class="dropdown-item" href="<?php echo base_url('superadmin/payroll/transaksi/' . $d->id_karyawan) ?>">Transaction</a>
                                                        <a class="dropdown-item" data-toggle="modal" data-target="#editmodal<?php echo $d->id_karyawan; ?>">Permission</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
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

<!-- Kodingan untuk  Opsi -> menghubah pasword karyawan  -->
<?php $no = 0;
foreach ($karyawan as $d) : $no++; ?>
    <div class="modal" id="editmodal<?php echo $d->id_karyawan; ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo base_url('superadmin/karyawan/proses_permission') ?>" enctype="multipart/form-data">

                         <label class="mb-2">Full Name</label>
                         <input type="hidden" name="role_id" value="3">
                        <input type="text" class="form-control mb-3" name="nama" value="<?php echo $d->nama_depan ?> <?php echo $d->nama_belakang ?>" autocomplete="off" readonly>

                         <label class="mb-2">Username</label>
                        <input type="text" class="form-control mb-3" name="nip" value="<?php echo $d->nip ?>" autocomplete="off" readonly>

                         <label class="mb-2">Password</label>
                        <input type="password" class="form-control mb-3" name="password" autocomplete="off">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Save changes</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php endforeach; ?>