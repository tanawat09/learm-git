<?php
  defined('APPS') OR exit('No direct script access allowed');
  $permission = fetch_all("per_id, per_name","permission");

  $fields = "*";
  $table = "category";
  $conditions = " WHERE status = 'Y' ";
  $categorys = fetch_all($fields, $table, $conditions);


  $fields = "*";
  $table = "section";
  $conditions = " WHERE status = 'Y' ";
  $sections = fetch_all($fields, $table, $conditions);


  $fields = "*";
  $table = "type";
  $conditions = " WHERE status = 'Y' ";
  $types = fetch_all($fields, $table, $conditions);

  $fields = "*";
  $table = "brand";
  $conditions = " WHERE status = 'Y' ";
  $brand = fetch_all($fields, $table, $conditions);

  $fields = "*";
  $table = "status";
  //$conditions = " WHERE status = 'Y' ";
  $conditions = "   ";
  $statuss = fetch_all($fields, $table, $conditions);
 

  $fields = "*";
  $table = "osname";
  $conditions = " WHERE status = 'Y' ";
  $osnames = fetch_all($fields, $table, $conditions);



?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Borrowing system/ระบบยืม</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item"><a href="?page=services">Borrowing</a></li>
            <li class="breadcrumb-item active">New Borrowing</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <form id="forminfo" class="form-horizontal" enctype="multipart/form-data"
                action="apps/services/do_services.php?action=create_services" method="POST" autocomplete="off">
                
                <div class="form-group row">
                  <label for="username" class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <img id="photo_profile" class="img-fluid img-thumbnail" src="dist/img/pic_empty.jpg"
                      alt="User profile picture"
                      style="max-width:225px; max-height:225px; min-width:225px; min-height:225px;">
                  </div>
                </div>
      
                <div class="form-group row">
                  <label for="name" class="col-sm-2 col-form-label">Name <span class="text-danger">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value=""
                      placeholder="Name" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="serial_number" class="col-sm-2 col-form-label">Serial Number <span
                      class="text-danger"></span></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="serial_number" name="serial_number" value=""
                      placeholder="Serial Number"  >
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="owner_name" class="col-sm-2 col-form-label">Owner Name <span
                      class="text-danger"></span></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="owner_name" name="owner_name" value=""
                      placeholder="ชื่อผู้ใช้งาน"  >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="email" class="col-sm-2 col-form-label">Category <span class="text-danger">*</span></label>
                  <div class="col-sm-10">
                    <select name="category" id="category" class="form-control">
                      <option value="">-- Please Select Category --</option>
                    </select>
                  </div>
                </div>
             

                <div class="form-group row">
                  <label for="type" class="col-sm-2 col-form-label">Type <span class="text-danger">*</span></label>
                  <div class="col-sm-10">
                    <select name="type" id="type" class="form-control">
                        <option value="">-- Please Select Type --</option>
                      </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="brand" class="col-sm-2 col-form-label">Brand <span class="text-danger">*</span></label>
                  <div class="col-sm-10">
                    <select name="brand" id="brand" class="form-control">
                        <option value="">-- Please Select Brand --</option>
                      </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="section" class="col-sm-2 col-form-label">Section <span class="text-danger">*</span></label>
                  <div class="col-sm-10">
                    <select name="section" id="section" class="form-control">
                      <option value="">-- Please Select Section --</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="cpu_model" class="col-sm-2 col-form-label">CPU Speed<span
                      class="text-danger"></span></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="cpu_model" name="cpu_model" value=""
                      placeholder="cpu"  >
                  </div>
                </div>

                <div class="form-group row">
                  <label for="ram_model" class="col-sm-2 col-form-label">Ram  <span
                      class="text-danger"></span></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="ram_model" name="ram_model" value=""
                      placeholder="Ram Capacity"  >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="hdd_model" class="col-sm-2 col-form-label">Hard disk<span
                      class="text-danger"></span></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="hdd_model" name="hdd_model" value=""
                      placeholder="Hard disk Capacity"  >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="os_name" class="col-sm-2 col-form-label">Operating system <span class="text-danger">*</span></label>
                  <div class="col-sm-10">
                    <select name="os_name" id="os_name" class="form-control" required>
                      <option value="">-- Please Select OS --</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="monitor_model" class="col-sm-2 col-form-label">Monitor<span
                      class="text-danger"></span></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="monitor_model" name="monitor_model" value=""
                      placeholder="Monitor"  >
                  </div>
                </div>

                <div class="form-group row">
                  <label for="expire_date" class="col-sm-2 col-form-label">Expire Date<span class="text-danger"></span></label>
                  <div class="col-sm-10">
                  <input class="form-control" type="date" name="expire_date" id="expire_date">
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="inven_status" class="col-sm-2 col-form-label">Status <span class="text-danger">*</span></label>
                  <div class="col-sm-10">
                    <select name="inven_status" id="inven_status" class="form-control">
                      <option value="">-- Please Select Status --</option>
                    </select>
                  </div>
                </div>
 

                <div class="form-group row">
                  <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary btn-upload"><i class="fas fa-check-circle"></i>
                      Save</button>
                  </div>
                </div>
              </form>
            </div><!-- /.card-body -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>


<script>

var arr_cate = <?php echo json_encode($categorys);?>;
var arr_sec = <?php echo json_encode($sections);?>;
var arr_type = <?php echo json_encode($types);?>;
var arr_brand = <?php echo json_encode($brand);?>;
var arr_stat = <?php echo json_encode($statuss);?>;
var arr_os = <?php echo json_encode($osnames);?>;

</script>