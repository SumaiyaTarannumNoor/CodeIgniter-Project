<body style= "background-color:blue">
    <section style = "padding-top: 60px;">
        <div class = "container">
            <div class= "row">
              <div class = "col-md-6 offset-md-3">
                <div class = "card">
                  <div class= "card-header" style= "background-color:rgba(2,3,10,0.4)">
                    Student Details <a href = "<?php echo base_url('/allstudents') ?>" class="btn btn-success">Show all students</a>
                  </div>
                  <div class = "card-body" style= "background-color:teal">
                  
                     <h1><?= $student->name ?></h1>
                     <p><?= $student->email ?></p>
                  
                  </div>
                  </div>
                </div>
              </div>
            </div>
        </div>    
    </section>
</body>