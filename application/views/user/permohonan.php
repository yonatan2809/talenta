<!-- fitur error, ngga jadi dipake
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
           <div class="page-header">
            <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <strong>Add job position</strong>
            </button>
            <div class="dropdown-menu">
                <div class="arrow"></div>
                <a class="dropdown-item" data-toggle="modal" data-target="#editmodal">Add new position</a>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Job Position</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped">
                                <thead>
                                    <tr>
                                       <th>No</th>
                                       <th>Position ID</th>
                                       <th>Position Name</th>
                                       <th>Opsi</th>
                                   </thead>
                                   <tbody>
                                     <?php $no = 1;
                                     foreach ($jabatan as $d) :
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d->kode_jabatan ?></td>
                                            <td><?php echo $d->nama_jabatan ?></td>

                                            <td>
                                                <button type="button" class="btn btn-sm btn-gray dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-h"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <div class="arrow"></div>
                                                    <a data-toggle="modal" data-target="#editmodal<?php echo $d->id_jabatan; ?>" class="dropdown-item">Edit</a>
                                                    <a class="dropdown-item" href="<?php echo base_url('superadmin/jabatan/delete/' . $d->id_jabatan) ?>">Delete</a>
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
                                     -->
<!-- Modal -->

<!--<div class="modal" id="editmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo base_url('superadmin/jabatan/proses') ?>" enctype="multipart/form-data">
                    <label class="mb-2">Job position name</label>
                    <input type="hidden" class="form-control" name="kode_jabatan" value="JB-<?= mt_rand(1000000, 9999999) ?>">
                    <input type="text" class="form-control" name="nama_jabatan" autocomplete="off">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save changes</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>
                                     -->

<!-- Modal -->
<!--<?php $no = 0;
foreach ($jabatan as $d) : $no++; ?>
    <div class="modal" id="editmodal<?php echo $d->id_jabatan; ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo base_url('superadmin/jabatan/update') ?>" enctype="multipart/form-data">
                        <label class="mb-2">Job position name</label>
                        <input type="hidden" class="form-control" name="id_jabatan" value="<?php echo $d->id_jabatan ?>">
                        <input type="hidden" class="form-control" name="kode_jabatan" value="<?php echo $d->kode_jabatan ?>">
                        <input type="text" class="form-control" name="nama_jabatan" value="<?php echo $d->nama_jabatan ?>" autocomplete="off">
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
                                     -->