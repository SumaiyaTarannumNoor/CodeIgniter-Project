<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Your Profile</title>
    <!-- CSS only --> 
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" >		
	<!-- JavaScript Bundle with Popper -->
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min"></script>
    
</head>
<body style="background-color:red">
    <section style = "padding-top: 70px;">
    <div id="main">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
        <div class = "container" style="background-color:blue">
            <div class= "row">
              <div class = "col-md-12">
                <div class = "card">
                  <div class= "card-header">
                    All user Profiles <a href = "Profile/profileCreation" class="btn btn-success">Add New Profile</a>
                  </div>
                  <div class = "card-body">  
                   <table class = "table table-striped" style="background-color:#00FFFF">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($viewProfile as $profile){ ?>
                      <tr>
                     <td><?php echo $profile->id; ?></td>
                     <td><?php echo $profile->name; ?></td>
                     <td><?php echo $profile->email; ?></td>
                    </tr>
                    <?php }?>
                    </tbody>
                   </table>
                  </div>
                </div>
              </div>
            </div>
        </div>  
    </div>
    </div>  
    </section>
</html>