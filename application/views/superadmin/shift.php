 <!-- Kodiingan bawaan bootstrap, tidak terpakai  -->
 <!-- Top Bar End -->

 <!--<div class="page-wrapper">
-->
    <!-- Page Content-->
    <!--<div class="page-content-tab">
        <br>
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between mb-3">
                        <div class="align-self-center">
                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModalSend"><i data-feather="plus-circle" class="align-self-center icon-xs me-2"></i>Add New Position</button>
                            <!-- Modal -->
                            <!--<div class="modal fade" id="exampleModalSend" tabindex="-1" aria-labelledby="exampleModalSendLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="<?php echo base_url('superadmin/shift/proses') ?>" method="post">
                                            <div class="modal-header">
                                                <h6 class="modal-title m-0" id="exampleModalDefaultSend">Add New Position</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-4">
                                                    <label class="mb-2" for="cryptocurrency">Shift name</label>              
                                                    <input type="text" class="form-control" name="shift" required autocomplete="off">
                                                </div>
                                                <div class="mb-2">
                                                    <label for="cryptocurrency">Work schedule</label>              
                                                    <select name="jadwal" class="form-select">
                                                        <option selected hidden disabled>Choose...</option>
                                                        <option class="text-muted" value="Pagi">Pagi</option>
                                                        <option class="text-muted" value="Malam">Malam</option>
                                                    </select>  
                                                </div>
                                            </div><!--end modal-body-->
                                            <!--<div class="modal-footer">
                                                <button class="btn btn-de-success btn-sm" type="submit">Submit</button>
                                                <button type="button" class="btn btn-de-danger btn-sm" data-bs-dismiss="modal">Close</button>
                                            </div><!--end modal-footer-->
                                        </form>
                                    </div><!--end modal-content-->
                                </div><!--end modal-dialog-->
                            </div><!--end modal-->                                    


                            <!--<div class="modal fade" id="exampleModalRequest" tabindex="-1" aria-labelledby="exampleModalRequestLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h6 class="modal-title m-0" id="exampleModalRequestLabel">Request Coin</h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-2">
                                                <label for="cryptocurrency">Crypto Currency</label>              
                                                <select class="form-select" aria-label="Default select example">
                                                   <option selected>-- Currency --</option>
                                                   <option value="BTC">BTC</option>
                                                   <option value="ETH">ETH</option>
                                               </select>
                                           </div>
                                           <div class="mb-2">
                                            <label for="cryptocurrency">Receive To</label>              
                                            <select class="form-select" aria-label="Default select example">
                                               <option selected>-- My wallet --</option>
                                               <option value="BTC">BTC</option>
                                               <option value="ETH">ETH</option>
                                           </select>
                                       </div>
                                       <div class=" mb-2">
                                        <label for="toaddress">Address</label> 
                                        <div class="input-group">
                                            <input type="text" class="form-control"  id="W-Address" value="c12b001a15f9bd46ef1c6551386c">
                                            <button class="btn btn-outline-light" type="button" id="Copy_link"><i class="fas fa-copy"></i></button>
                                        </div>
                                    </div>                                                    
                                </div><!--end modal-body-->
                                <!--<div class="modal-footer">
                                    <button class="btn btn-de-success btn-sm" type="button">Done</button>
                                </div><!--end modal-footer-->
                            </div><!--end modal-content-->
                        </div><!--end modal-dialog-->
                    </div><!--end modal-->
                </div><!--end /div-->

            </div><!--end /div-->
        </div><!--end col-->
    </div><!--end row-->
    <!--<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Schedule Details </h4>
                </div><!--end card-header-->
                <!--<div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="datatable_1">
                            <thead class="thead-light">
                              <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Work Schedule</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php $no = 1;
                           foreach ($shift as $d) :
                            ?> ->>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d->shift ?></td>
                                <td>Shift <?php echo $d->jadwal ?></td>
                                <td>
                                   <button type="button" class="btn btn-de-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalSend"><i data-feather="edit" class="align-self-center icon-xs me-2"></i>Edit</button>
                                   <button type="button" class="btn btn-de-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalSend"><i data-feather="trash-2" class="align-self-center icon-xs me-2"></i>Delete</button>
                               </td>
                           </tr>
                       <?php endforeach;?>                              
                   </tbody>
               </table>
           </div>
       </div>
   </div>
</div> <!-- end col -->
</div> <!-- end row -->




</div><!-- container -->

<!--Start Rightbar-->
<!--Start Rightbar/offcanvas-->
<!--<div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
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
        <!--<div class="form-check form-switch mb-2">
            <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
            <label class="form-check-label" for="settings-switch2">Location Permission</label>
        </div><!--end form-switch-->
        <!--<div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="settings-switch3">
            <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
        </div><!--end form-switch-->
    </div><!--end /div-->
    <!--<h6>General Settings</h6>
    <div class="p-2 text-start mt-3">
        <div class="form-check form-switch mb-2">
            <input class="form-check-input" type="checkbox" id="settings-switch4">
            <label class="form-check-label" for="settings-switch4">Show me Online</label>
        </div><!--end form-switch-->
        <!--<div class="form-check form-switch mb-2">
            <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
            <label class="form-check-label" for="settings-switch5">Status visible to all</label>
        </div><!--end form-switch-->
        <!--<div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="settings-switch6">
            <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
        </div><!--end form-switch-->
    </div><!--end /div-->               
</div><!--end offcanvas-body-->
</div>
<!--end Rightbar/offcanvas-->
<!--end Rightbar-->

<!--Start Footer-->

</div>
<!-- end page content -->
</div>
    <!-- end page-wrapper -->