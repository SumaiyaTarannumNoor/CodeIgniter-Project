
<body style="background-image: url(<?php echo base_url(); ?>assets/images/img/background.jpg); position: relative">
    <section style = "padding-top: 70px">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:aquamarine">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12" style="background-color:aquamarine">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-12" style="background-color:aquamarine">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href = "<?php echo base_url('/dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item"><a href = "<?php echo base_url('/registration') ?>">Registration</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" >
      <div class="container-fluid" style="background-color:aquamarine">
        <div class="row">
          <div class="col-12">
        

            <div class="card" style="color:#2F4C39">
              <div class="card-header" style="color:#2F4C39">
                <h3 class="card-title">Records of all the students</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body" >
                  <?php if ($this->session->userdata('delete_message') != '') {
                    echo $this->session->userdata('delete_message');
                    }

                  unset($_SESSION['delete_message']);
                   ?>

                    <?php if($this->session->userdata('success')!=''){
                     echo $this->session->userdata('success');
                    }
                    unset($_SESSION['success']);

                    ?>
                     <?php if($this->session->userdata('fail')!=''){
                     echo $this->session->userdata('fail');
                    } 
                    unset($_SESSION['fail']);

                    ?>
                       
                <table id="example1" class="table table-bordered table-striped" style="background-color:aquamarine">
                 
                <thead  style="color:#2F4C39">
                  <tr>
                            <th>Serial No.</th>
                            <th>NAME</th>
                            <th>Email</th>
                            
                        </tr>
                
                  </thead>
                    <tbody style="color:#2F4C39">
                    <?php
                     $row_count=1;
                    foreach($showStudents as $student){ ?>
                      <tr>
                      <td><?php echo $row_count;?>. </td>
                     <td><?php echo $student->name; ?></td>
                     <td><?php echo $student->email; ?></td>
                     <td>
                            <a href="details/<?php echo $student->id; ?>" class="btn btn-info">DETAILS</a>
                            <a href="edit/<?php echo $student->id; ?>" class="btn btn-info">EDIT</a>
                            <a href="<?php echo base_url('admin/deleteStudent/' . $student->id) ?>" class="btn btn-info">DELETE</a>
                            
                          </td>
                
                    </tr>
                   <?php ++$row_count; }?>
                    </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  </section>
</body>