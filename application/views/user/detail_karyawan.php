<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="row">
               <?php $no = 1;
               foreach ($detail as $d) :
                ?>
                <div class="col-md-3">
                    <div class="card card-profile card-primary">
                        <div class="card-header">
                            <div class="profile-picture">
                                <div class="avatar avatar-xl">
                                    <?php if ($d->gender == "Male") { ?>
                                        <img src="<?php echo base_url('assets') ?>/avatar5.jpg" alt="..." class="avatar-img rounded-circle">
                                    <?php } else { ?>
                                     <img src="<?php echo base_url('assets') ?>/avatar8.jpg" alt="..." class="avatar-img rounded-circle">
                                 <?php } ?>
                             </div>
                         </div>
                     </div>

                     <div class="card-body">
                        <div class="user-profile text-center">
                            <div class="name"><?php echo $d->nama_depan ?> <?php echo $d->nama_belakang ?></div>
                            <div class="job"><?php echo $d->nama_jabatan ?></div>
                            <br>
                            <hr>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row user-stats text-center">
                            <div class="col">
                                <div class="title">ID Employee</div>
                                <div class="text"><?php echo $d->nip ?></div> 
                            </div>
                            <div class="col">
                                <div class="title">Status </div>
                                <div class="text text-success"><i class="fas fa-check"></i>&nbsp; Verified</div> 
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-9">
                <div class="card card-with-nav">
                    <div class="card-header">
                        <div class="row row-nav-line">
                            <ul class="nav nav-tabs nav-line nav-color-default" role="tablist">
                               <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="
                                    flaticon-user
                                    "></i>&nbsp; Basic info</a>
                                </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="
                                        flaticon-lock
                                        "></i>&nbsp; Account</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="tab-content mt-2 mb-3" id="pills-tabContent">

                            <!-- Pertama -->
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                              <div class="card-body">
                                <form action="<?php echo base_url('user/karyawan/update') ?>" method="POST">
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>First name</label>
                                            <input type="hidden" class="form-control" value="<?php echo $d->id_karyawan ?>" name="id_karyawan" placeholder="Address">
                                            <input type="text" class="form-control" name="nama_depan" placeholder="Name" value="<?php echo $d->nama_depan ?>" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Last name</label>
                                            <input type="text" class="form-control" name="nama_belakang" placeholder="Name" value="<?php echo $d->nama_belakang ?>" autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Email</label>
                                            <input type="email" class="form-control" id="datepicker" name="email" value="<?php echo $d->email ?>" placeholder="Birth Date" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                     <div class="form-group form-group-default">
                                        <label>Phone number</label>
                                        <input type="text" class="form-control" value="<?php echo $d->no_hp ?>" name="no_hp" placeholder="Phone" autocomplete="off">
                                    </div>
                                </div>

                            </div>

                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                       <label>Birth place</label>
                                       <input type="text" class="form-control" value="<?php echo $d->tempat_lahir ?>" name="tempat_lahir" placeholder="Phone" autocomplete="off">
                                   </div>
                               </div>
                               <div class="col-md-4">
                                <div class="form-group form-group-default">
                                 <label>Birth Date</label>
                                 <input type="date" class="form-control" id="datepicker" name="tgl_lahir" value="<?php echo $d->tgl_lahir ?>" placeholder="Birth Date" autocomplete="off">
                             </div>
                         </div>
                         <div class="col-md-4">
                            <div class="form-group form-group-default">
                                <label>Gender</label>
                                <select name="gender" class="form-control" id="gender">
                                    <option value="<?php echo $d->gender ?>"><?php echo $d->gender ?></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="form-group form-group-default">
                               <label>Marital status</label>
                               <select name="status_nikah" class="form-control" id="gender">
                                <option value="<?php echo $d->status_nikah ?>"><?php echo $d->status_nikah ?></option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widow">Widow</option>
                                <option value="Widower">Widower</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group form-group-default">
                         <label>Blood Type</label>
                         <select name="gol_darah" class="form-control" id="gender">
                           <option value="<?php echo $d->gol_darah  ?>"><?php echo $d->gol_darah  ?></option>
                           <option value="A">A</option>
                           <option value="B">B</option>
                           <option value="AB">AB</option>
                           <option value="O">O</option>
                       </select>
                   </div>
               </div>
               <div class="col-md-4">
                <div class="form-group form-group-default">
                    <label>Religion</label>
                    <select name="agama" class="form-control" id="gender">
                     <option value="<?php echo $d->agama  ?>"><?php echo $d->agama  ?></option>
                     <option value="Catholic">Catholic</option>
                     <option value="Islam">Islam</option>
                     <option value="Christian">Christian</option>
                     <option value="Buddha">Buddha</option>
                     <option value="Hindu">Hindu</option>
                     <option value="Confucius">Confucius</option>
                     <option value="Others">Others</option>
                 </select>
             </div>
         </div>
     </div>

     <div class="row mt-3">
        <div class="col-md-12">
            <div class="form-group form-group-default">
                <label>Address</label>
                <input type="text" class="form-control" value="<?php echo $d->alamat ?>" name="alamat" placeholder="Address" autocomplete="off">
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="form-group form-group-default">
                <label>Identity type</label>
                <select name="jenis_identitas" class="form-control" id="gender">
                   <option value="<?php echo $d->jenis_identitas  ?>"><?php echo $d->jenis_identitas  ?></option>
                   <option value="KTP">KTP</option>
                   <option value="SIM">SIM</option>
                   <option value="Passport">Passport</option>
               </select>
           </div>
       </div>
       <div class="col-md-6">
        <div class="form-group form-group-default">
            <label>Identity Number</label>
            <input type="text" class="form-control" name="no_identitas" placeholder="Name" value="<?php echo $d->no_identitas ?>" autocomplete="off">
        </div>
    </div>
</div>

<div class="text-right mt-3 mb-3">
    <button type="submit" class="btn btn-success">Save</button>
    <button class="btn btn-danger">Back</button>
</div>
</form>
</div>
</div>

<!-- Kedua -->
<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
   <div class="card-body">
    <div class="row mb-0">
        <div class="col-md-12">
            <div class="card-body">
                <div class="table-responsive">
                 
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Account name</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $d->nama ?></td>
                                <td><?php echo $d->nip ?></td>
                                <td><?php echo $d->password ?></td>
                                <td>User</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>

<!-- aksaksks -->





</div>
</div>
<?php endforeach; ?>
</div>
</div>
</div>

</div>