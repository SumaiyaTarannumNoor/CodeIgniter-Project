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
  <section style="padding-top: 70px;">
    <div id="main">
      <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
        <div class="container" style="background-color:#00FFFF">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  All Plans <a href="Plan/addpost" class="btn btn-success">Add New Plan</a>
                </div>
                <div class="card-body">
                  <?php if ($this->session->userdata('delete_message') != '') {
                    echo $this->session->userdata('delete_message');
                  }

                  unset($_SESSION['delete_message']);
                   ?>
                  <table class="table table-striped" style="background-color:#00FFFF">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Plan Title</th>
                        <th>Date</th>
                        <th>Plan Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($viewPlanData as $post) { ?>
                        <tr>
                          <td><?php echo $post->id; ?></td>
                          <td><?php echo $post->title; ?></td>
                          <td><?php echo $post->planDate; ?></td>
                          <td><?php echo $post->description; ?></td>
                          <td>
                            <a href="<?php echo base_url('plan/details/' . $post->id) ?>" class="btn btn-info">DETAILS</a>
                            <a href="<?php echo base_url('plan/editPost/' . $post->id) ?>" class="btn btn-success">EDIT</a>
                            <a href="<?php echo base_url('plan/deletePost/' . $post->id) ?>" class="btn btn-danger">DELETE</a>
                          </td>
                        </tr>

                      <?php } ?>
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