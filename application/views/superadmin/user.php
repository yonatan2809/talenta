<!-- Kodingan error belum selesai untuk penambahan user, kalau ingin menambah user harus manual dari database -->
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <strong>Add account</strong>
                </button>
                <div class="dropdown-menu">
                    <div class="arrow"></div>
                    <a class="dropdown-item" data-toggle="modal" data-target="#editmodal">Add new account</a>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Account</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped">
                                    <thead>
                                        <tr>
                                            <th><center>Account</th>
                                            <th><center>Username</th>
                                            <th><center>Password</th>
                                            <th><center>Role</th>
                                        </thead>
                                        <tbody>
                                         <?php $no = 1;
                                         foreach ($user as $d) :
                                            ?>
                                            <tr>
                                                <td><center><?php echo $d->nama ?></td>
                                                    <td><center><?php echo $d->nip ?></td>
                                                    <td><center><?php echo $d->password ?></td>
                                                    <td><center>
                                                        <?php if ($d->role_id == "1") { ?>
                                                         Administrator
                                                     <?php } elseif ($d->role_id == "2") { ?>
                                                        Admin
                                                    <?php } else { ?>
                                                        User
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
                    <form method="POST" action="<?php echo base_url('superadmin/user/proses') ?>" enctype="multipart/form-data">
                      

                        <label class="mb-2">Account name</label>
                        <input type="text" class="form-control mb-3" name="nama" autocomplete="off" required>

                         <label class="mb-2">Username</label>
                        <input type="text" class="form-control mb-3" name="nip" autocomplete="off" required>

                        <label class="mb-2">Password</label>
                         <input type="hidden" class="form-control mb-3" name="role_id" value="1">
                        <input type="password" class="form-control mb-3" name="password" autocomplete="off" required>

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
foreach ($user as $d) : $no++; ?>
    <div class="modal" id="editmodal<?php echo $d->nip; ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo base_url('superadmin/user/update') ?>" enctype="multipart/form-data">
                      

                        <label class="mb-2">Username</label>
                        <input type="text" class="form-control mb-3" name="nip" value="<?php echo $d->nip ?>" autocomplete="off" readonly>

                         <label class="mb-2">Password</label>
                        <input type="text" class="form-control mb-3" name="password" value="<?php echo $d->password ?>" autocomplete="off">

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
