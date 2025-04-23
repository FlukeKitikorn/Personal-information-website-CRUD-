<?php require($_SERVER['DOCUMENT_ROOT'] . '/personal_CRUD/config/conn.php'); ?>

<!-- Main row -->
<div class="row">
    <div class="col-12">
    <div class="card">
        <div class="card-header">
            <div class="card-tools">
                <div class="input-group " style="width: auto">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append" >
                    <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: auto;">
        <table class="table table-head-fixed text-nowrap table-striped">
            <thead>
                <tr class="text-center">
                    <th width="5%">No.</th>
                    <th width="10%">Picture</th>
                    <th width="15%">Firstname</th>
                    <th width="15%">Lastname</th>
                    <th width="5%">age</th>
                    <th width="10%">Tel.</th>
                    <th width="15">Address</th>
                    <th width="5">Country</th>
                    <th width="5">Time Stamp</i></th>
                    <th width="5">Edit/Delete</th>
                </tr>
            </thead>
            <tbody>
               <!-- For each  -->
               <?php include('./admin/includes/all_users.php'); ?>
            </tbody>
        </table>
        </div>
    </div>
    </div>
</div><!-- End Main row -->
