<!-- Kodingan untuk tampilan Organization -->
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
           <div class="page-header">
            <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <strong>Add organization</strong>
            </button>
            <div class="dropdown-menu">
                <div class="arrow"></div>
                <a class="dropdown-item" data-toggle="modal" data-target="#editmodal">Add new organization</a>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Organization</h4>
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
                                   foreach ($divisi as $d) :
                                    ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $d->kode_divisi ?></td>
                                        <td><?php echo $d->nama_divisi ?></td>



                                        <td>
                                            <button type="button" class="btn btn-sm btn-gray dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-h"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <div class="arrow"></div>
                                                <a data-toggle="modal" data-target="#editmodal<?php echo $d->id_divisi; ?>" class="dropdown-item">Edit</a>
                                                <a class="dropdown-item" href="<?php echo base_url('superadmin/divisi/delete/' . $d->id_divisi) ?>">Delete</a>
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


<!-- Kodingan untuk Organization -> Opsi -> edit  -->

<div class="modal" id="editmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo base_url('superadmin/divisi/proses') ?>" enctype="multipart/form-data">
                    <label class="mb-2">Organization name</label>
                    <input type="hidden" class="form-control" name="kode_divisi" value="DV-<?= mt_rand(1000000, 9999999) ?>">
                    <input type="text" class="form-control" name="nama_divisi" autocomplete="off">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save changes</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>


<!-- Modal -->
<?php $no = 0;
foreach ($divisi as $d) : $no++; ?>
    <div class="modal" id="editmodal<?php echo $d->id_divisi; ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo base_url('superadmin/divisi/update') ?>" enctype="multipart/form-data">
                        <label class="mb-2">Organization name</label>
                        <input type="hidden" class="form-control" name="id_divisi" value="<?php echo $d->id_divisi ?>">
                        <input type="hidden" class="form-control" name="kode_divisi" value="<?php echo $d->kode_divisi ?>">
                        <input type="text" class="form-control" name="nama_divisi" value="<?php echo $d->nama_divisi ?>">
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