<!DOCTYPE html>
<html lang="en">
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
<body style= "background-color:blue">
    <section style = "padding-top: 60px;">
        <div class = "container">
            <div class= "row">
              <div class = "col-md-6 offset-md-3">
                <div class = "card">
                  <div class= "card-header" style= "background-color:rgba(2,3,10,0.4)">
                    Student Details <a href = "<?php echo base_url('/Student') ?>" class="btn btn-success">Show my posts</a>
                  </div>
                  <div class = "card-body" style= "background-color:teal" action="<?php echo base_url();?>student/details">
                  
                     <h1><?= $student->NAME ?></h1>
                     <p><?= $student->Roll ?></p>
                     <p><?= $student->ClassNam ?></p>
                  
                  </div>
                  </div>
                </div>
              </div>
            </div>
        </div>    
    </section>
</body>