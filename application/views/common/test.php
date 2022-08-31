
<div class="card" style="padding-left: 260px; padding-right: 30px; background-color:blueviolet">
              <div class="card-header" style="background-color:cyan">
                <h3 class="card-title"  style="color:blueviolet">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body"style="background-color:blueviolet">
                <table id="example1" class="table table-bordered table-striped" style="background-color:blueviolet">
                  <thead  style="color:cyan">
                  <tr>
                            <th>Serial No.</th>
                            <th>NAME</th>
                            <th>Email</th>
                            
                        </tr>
                  </tfoot>
                  </thead>
                    <tbody style="color:cyan">
                    <?php
                    $row_count = 1; 
                    foreach($showStudents as $student){ ?>
                      <tr>
                      <td><?php echo $row_count;?>. </td>
                     <td><?php echo $student->name; ?></td>
                     <td><?php echo $student->email; ?></td>
        
                     <!-- <td>
                            <a href="<?php echo base_url('student/details/' . $student->id) ?>" class="btn btn-info">DETAILS</a>
                            <a href="<?php echo base_url('student/editStudent/' . $student->id) ?>" class="btn btn-success">EDIT</a>
                            <a href="<?php echo base_url('student/deleteStudent/' . $student->id) ?>" class="btn btn-danger">DELETE</a> -->
                          </td> -->
                    </tr>
                    <?php $row_count++; }?>
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

      <div class="card" style="padding-left: 260px; padding-right: 30px; background-color:blueviolet">
              <div class="card-header" style="background-color:cyan">
                <h3 class="card-title"  style="color:blueviolet">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body"style="background-color:blueviolet">
                <table id="example1" class="table table-bordered table-striped" style="background-color:blueviolet">
                  <thead  style="color:cyan">
                  <tr>
                            <th>Serial No.</th>
                            <th>NAME</th>
                            <th>Email</th>
                            
                        </tr>
                  </tfoot>
                  </thead>
                    <tbody style="color:cyan">
                    <?php
                    $row_count = 1; 
                    foreach($showStudents as $student){ ?>
                      <tr>
                      <td><?php echo $row_count;?>. </td>
                     <td><?php echo $student->name; ?></td>
                     <td><?php echo $student->email; ?></td>
        
                     <!-- <td>
                            <a href="<?php echo base_url('student/details/' . $student->id) ?>" class="btn btn-info">DETAILS</a>
                            <a href="<?php echo base_url('student/editStudent/' . $student->id) ?>" class="btn btn-success">EDIT</a>
                            <a href="<?php echo base_url('student/deleteStudent/' . $student->id) ?>" class="btn btn-danger">DELETE</a> -->
                          </td> -->
                    </tr>
                    <?php $row_count++; }?>
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
