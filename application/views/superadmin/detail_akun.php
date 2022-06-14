 <div class="page-wrapper">

    <!-- Page Content-->
    <div class="page-content-tab">

        <div class="container-fluid">
            <!-- Page-Title -->
            <br>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-lg-12">
                    <table class="body-wrap" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: transparent; margin: 0;" bgcolor="transparent">
                        <tr>
                            <td valign="top"></td>
                            <td class="container" width="800" style="display: block !important; max-width: 600px !important; clear: both !important;" valign="top">
                                <div class="content" style="padding: 10px;">
                                    <div class="row">
                                      <?php $no = 1;
                                      foreach ($akun as $d) :
                                        ?>
                                        <div class="col-lg-12 col-xl-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Account Permission</h4>
                                                </div><!--end card-header-->
                                                <div class="card-body"> 
                                                    <form action="<?php echo base_url('superadmin/karyawan/registrasi_account') ?>" method="post">
                                                     <div class="form-group mb-3 row">
                                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Full name</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control" type="text" name="nama" value="<?php echo $d->nama_depan?> <?php echo $d->nama_belakang?>" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-3 row">
                                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Username</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control" type="text" name="nip" value="<?php echo $d->nip?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3 row">
                                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Password</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control" type="text" name="password" value="<?php echo $d->no_identitas?>" readonly>
                                                        </div>
                                                    </div>
                                                     <div class="form-group mb-3 row">
                                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Access role</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                           <select class="form-control" name="role_id">
                                                               <option selected hidden disabled>Choose...</option>
                                                               <option value="2">Admin</option>
                                                                  <option value="3">User</option>
                                                           </select>
                                                        </div>
                                                    </div>
                                                    <br>
                                                      <hr class="hr-dashed mt-4 mb-4">
                                                    <div class="form-group mb-3 row">
                                                        <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                            <button type="submit" class="btn btn-success"><i class="fas fa-key"></i>&nbsp; Give Access</button>
                                                            <button type="button" class="btn btn-dark">Cancel</button>
                                                        </div>
                                                    </div> 
                                                    </form>  
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                            </div> <!-- end col -->                                       <?php endforeach;?>                           
                                        </div><!--end row-->                                              
                                    </div><!--end content-->   
                                </td>
                                <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
                            </tr>
                        </table><!--end table-->                                
                    </div><!--end col-->
                </div><!--end row-->

            </div><!-- container -->

            <!--Start Rightbar-->
            <!--Start Rightbar/offcanvas-->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
                <div class="offcanvas-header border-bottom">
                  <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                  <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">  
                <h6>Account Settings</h6>
                <div class="p-2 text-start mt-3">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch1">
                        <label class="form-check-label" for="settings-switch1">Auto updates</label>
                    </div><!--end form-switch-->
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                        <label class="form-check-label" for="settings-switch2">Location Permission</label>
                    </div><!--end form-switch-->
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="settings-switch3">
                        <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                    </div><!--end form-switch-->
                </div><!--end /div-->
                <h6>General Settings</h6>
                <div class="p-2 text-start mt-3">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch4">
                        <label class="form-check-label" for="settings-switch4">Show me Online</label>
                    </div><!--end form-switch-->
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                        <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                    </div><!--end form-switch-->
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="settings-switch6">
                        <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                    </div><!--end form-switch-->
                </div><!--end /div-->               
            </div><!--end offcanvas-body-->
        </div>
        <!--end Rightbar/offcanvas-->
        <!--end Rightbar-->

        <!--Start Footer-->
        <!-- Footer Start -->
        <footer class="footer text-center text-sm-start">
            &copy; <script>
                document.write(new Date().getFullYear())
            </script> Unikit <span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i
                class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
            </footer>
            <!-- end Footer -->                
            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>