<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Your Plans</title>
    <!-- CSS only --> 
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" >		
	<!-- JavaScript Bundle with Popper -->
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min"></script>
 
    
</head>
<body style="background-color:black">
    <section style = "padding-top: 70px;">
    <div id="main">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
        <div class = "container" style="background-color:#00FFFF; padding-left: 200px; padding-right:200px; position:relative">
            <div class= "row">
              <div class = "col-md-12">
                <div class = "card">
                  <div class= "card-header">
                    All Students <a href = "<?php echo base_url('/allstudents') ?>" class="btn btn-success">Back</a>
                  </div>
                  <div class="container-fluid" style= "background-color:rgba(85,206,255,0.5)">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12"style= "background-color:rgba(85,206,255,0.5)">
            <!-- general form elements -->
            <div class="card card-primary" style= "background-color:rgba(85,206,255,0.5)">
              <div class="card-header" style= "background-color:rgba(85,206,255,0.5)">
                <h3 class="card-title" style= "color:white; font-family:Times New Roman, Georgia, Times, serif; font-size:32px">Student Registration Form</h3>
              </div>
                  <form method="post" action=<?php echo base_url('admin/updateStudent/').$student->id;?> >
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
                    <input type="text" name="name" value="<?php echo $student->name?>" > <br>
                </div>  
                <div class="card-body">
                  <div class="form-group">
                  <label>Email</label>
                    <input type="email" name="email" value="<?php echo $student->email?>"><br>   
                </div>                    
                    <button class="btn btn-primary" type="submit">Submit</button>
                  </form>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
        </div>  
    </div>
    </div>  
    </section>
</html>