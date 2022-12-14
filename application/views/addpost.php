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
<body style="background-color:black">
    <section style = "padding-top: 70px;">
    <div id="main">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
        <div class = "container" style="background-color:#00FFFF">
            <div class= "row">
              <div class = "col-md-12">
                <div class = "card">
                  <div class= "card-header">
                    All Plans <a href = "<?php echo base_url();?>plan" class="btn btn-success">Back</a>
                  </div>
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
                 <form method="post" action="<?php echo base_url();?>Plan/addposted">
                    <input type="text" name="title" placeholder="Title" /><br>
                    <input type="date" name="planDate"  /><br>                    
                    <input type="text" name="description" placeholder="Description" /><br><br>
                    <button class="btn btn-primary" type="submit">Update</button>
                  </form>
                  </div>
                </div>
              </div>
            </div>
        </div>  
    </div>
    </div>  
    </section>
    </body>
</html>