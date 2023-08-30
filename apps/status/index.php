<?php
  defined('APPS') OR exit('No direct script access allowed');
  $fields = "*";
  $table = "status";
  $status = fetch_all($fields, $table);
?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Status</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active">Status</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">

        <!-- /.col-md-6 -->
        <div class="col-lg-12">
          <div class="card">
            <!-- <div class="card-header"> -->
              <!-- <a href="?page=users/add" class="btn btn-success btn-sm float-right"><i class="fas fa-plus-circle"></i>
                New User</a> -->
                <!-- <div class="row">
                  <div class="col-12 col-lg-4 mx-auto">
                    <div class="card">
                      <div class="card-body">
                        <form id="forminfo" action="apps/status/do_status.php?action=save_status" method="POST" autocomplete="off">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="status_name" class="col-form-label">Status Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="status_name" name="status_name" required>
                                <input type="hidden" class="form-control" id="status_id" name="status_id">
                              </div>
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-check-circle"></i> Save</button>
                                <button type="reset" class="btn btn-danger btn-block"><i class="fas fa-times-circle"></i> Cancel</button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                  -->
            <!-- </div> -->
            <div class="card-body">

            <div class="border border-secondary p-3 mb-4">
              <form id="forminfo" action="apps/status/do_status.php?action=save_status" method="POST">
                <div class="row d-flex justify-content-center">
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="text" name="status_name" id="status_name" class="form-control form-control-sm" placeholder="Status Name *">
                      <input type="hidden" name="status_id" id="status_id">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block btn-sm font-weight-bold"><i class="fas fa-save mr-1"></i> SAVE</button>
                    </div>
                  </div>
                </div>
            </form>
            </div>

              <form action="apps/status/do_status.php?action=delete_all" id="frm" method="POST">
                <div class="table-responsive">
                  <table class="table table-striped table-hover table-sm">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th></th>
                        <th>Name</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                $i = 1;
                  foreach($status as $status){
                    // if($status["name"] == "In Progress"){
                    //   $bg = "warning";
                    // }elseif($status["name"] == "Success"){
                    //   $bg = "success";
                    // }else{
                    //   $bg = "danger";
                    // }
                ?>
                      <tr>
                        <td><?php echo $i++;?></td>
                        <td class="text-center">
                          <div class="icheck-primary d-inline">
                            <input type="checkbox" id="checK_<?php echo $i;?>" name="ch[]"
                              value="<?php echo $status["id"];?>">
                            <label for="checK_<?php echo $i;?>">
                            </label>
                          </div>
                        </td>
                        <!-- <td><span class="badge badge-<?php echo $bg;?> badge-pill"><?php echo $status["name"];?></span></td> -->
                        <td><?php echo $status["name"];?></td>
                        <td>
                          <div class="dropdown">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                              id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <small><a class="dropdown-item status-edit"
                                  href="javascript:void(0);" data-status-id="<?php echo $status["id"];?>" data-status-name="<?php echo $status["name"];?>"><i class="fas fa-edit"></i>
                                  Edit</a></small>
                              <small><a class="dropdown-item" href="javascript:void(0);" data-toggle="modal"
                                  data-target="#modalDelete" data-status-id="<?php echo $status["id"];?>" data-status-name="<?php echo $status["name"];?>"><i class="fas fa-trash"></i>
                                  Delete</a></small>
                        
                            </div>
                          </div>
                        </td>
                      </tr>
                    <?php } ?>
                  
                    </tbody>
                  </table>
                </div>

                <!-- <input type="text" id="hdcount" name="hdcount" value="1"> -->


                <div class="row">
                  <div class="col-md-12">
                    <div class="btn-group">
                      <button type="button" class="btn-sm btn">
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="checkall">
                          <label for="checkall">Check All
                          </label>
                        </div>
                      </button>
                      <button type="button" class="btn-sm btn btn-danger btn-delete-all" disabled data-toggle="modal"
                        data-target="#modalDeleteAll"><i class="fas fa-trash"></i>
                        Delete</button>
                    </div>
                  </div>
                </div>

          
                <form>
            </div>
          </div>
        </div>
        <!-- /.col-md-6 -->

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <!-- /.content -->
</div>


<div class="modal" id="modalDeleteAll" role="dialog" tabindex="-1" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <i class="fas fa-exclamation-circle"></i> Are you sure you want to delete all?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary btn-continue">Yes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="modalDelete" role="dialog" tabindex="-1" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <i class="fas fa-exclamation-circle"></i>
        <span></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary btn-continue" onClick="">Yes</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  var msg = "<?php echo isset($_SESSION["MSG"]) ? $_SESSION["MSG"] : ""  ?>";
  var status = "<?php echo isset($_SESSION["STATUS"]) ? $_SESSION["STATUS"] : ""  ?>";
  var permission = "<?php echo $_SESSION["PERMISSION"] ?>";
</script>

<?php unset($_SESSION["STATUS"],$_SESSION["MSG"]); ?>
