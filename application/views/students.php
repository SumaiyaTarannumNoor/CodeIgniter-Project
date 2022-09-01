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
                    All Students <a href = "Student/addStudent" class="btn btn-success">Add New Student</a>
                  </div>
                  <div class = "card-body">  
                  <?php if ($this->session->userdata('delete_message') != '') {
                    echo $this->session->userdata('delete_message');
                  }

                  unset($_SESSION['delete_message']);
                   ?>
                   <table class = "table table-striped" style="background-color:#00FFFF">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>Roll</th>
                            <th>Class</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot> 
                    </thead>
                    <tbody>
                    <?php foreach($showStudents as $student){ ?>
                      <tr>
                     <td><?php echo $student->id; ?></td>
                     <td><?php echo $student->NAME; ?></td>
                     <td><?php echo $student->Roll; ?></td>
                     <td><?php echo $student->ClassNam; ?></td>
                     <td>
                            <a href="<?php echo base_url('student/details/' . $student->id) ?>" class="btn btn-info">DETAILS</a>
                            <a href="<?php echo base_url('student/editStudent/' . $student->id) ?>" class="btn btn-success">EDIT</a>
                            <a href="<?php echo base_url('student/deleteStudent/' . $student->id) ?>" class="btn btn-danger">DELETE</a>
                          </td>
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