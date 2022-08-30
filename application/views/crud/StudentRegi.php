
<body style="background-image: url(<?php echo base_url(); ?>assets/images/img/background.jpg); position: relative">
    <section style = "padding-top: 70px">
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper" style="background-color:aqua">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color:darkorchid; font-family:Times New Roman, Georgia, Times, serif">Please complete the registration process.</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" style= "background-color:rgba(85,206,255,0.5)">
      <div class="container-fluid" style= "background-color:rgba(85,206,255,0.5)">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12"style= "background-color:rgba(85,206,255,0.5)">
            <!-- general form elements -->
            <div class="card card-primary" style= "background-color:rgba(85,206,255,0.5)">
              <div class="card-header" style= "background-color:rgba(85,206,255,0.5)">
                <h3 class="card-title" style= "color:white; font-family:Times New Roman, Georgia, Times, serif; font-size:32px">Student Registration Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="<?php echo base_url();?>Admin/studentRegistration">
              <div class = "card-body">   
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
                <div class="card-body">
                  <div class="form-group">
                  <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                  <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Password">
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
                </div>
            </div>
            <!-- /.card -->

        
            <!-- /.card -->

            <!-- Input addon -->
          
            <!-- /.card -->
            <!-- Horizontal Form -->
         
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
        
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</section>
</body>