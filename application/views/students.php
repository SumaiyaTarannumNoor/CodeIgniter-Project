<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Your Plans</title>
    <!-- CSS only --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">		
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
 
    
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