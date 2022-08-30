<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" >		
	<!-- JavaScript Bundle with Popper -->
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min"></script>
    <title>Just-1</title>
</head>
<body style="background-image: url(<?php echo base_url(); ?>assets/images/img/background.jpg); position: relative">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style= "height: 120px">
  <a class="navbar-brand" href="#" style="background-image: url(<?php echo base_url(); ?>assets/images/img/logo1.png); height: 90px; width:80px; position: relative; left-padding:60px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>Student">Students</a>
      </li>
       
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>Plan">Plans</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Home</a>
          <a class="dropdown-item" href="#">My Posts</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form style="margin-left: auto;margin-right: 126px;display: flex; width: 30%; justify-content: space-around;" class="form-inline my-2 my-lg-0" type="get" action="{{url('/search')}}">
      <input class="form-control mr-sm-2" name="query" placeholder="Search post" aria-label="Search"><br>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</div>
</nav>
<div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <br><br>
      <h1 style= "color:white; text-decoration-style: double; font-style: oblique; font-size: 80px">Welcome </h1>
      <h2 style= "color:white; text-decoration-style: double; font-style: oblique; font-size: 40px">Join us</h2>
      <p style= "color:aqua; text-decoration-style: double; font-style: italic; font-size: 14px; text-align: left;">
        This is a Laravel demo project for office-work at TechKnowGram. This project is developed by Sumaiya Tarannum Noor.
      </p>

      
      <p style= "color:aqua; text-decoration-style: double; font-style: italic; font-size: 14px; text-align: left;">
        This project is just a simple Demo project.
      </p>

      <p style= "color:aqua; text-decoration-style: double; font-style: italic; font-size: 14px; text-align: left;">
        All the features are going to be added in this.
      </p>
    </div>
    </div>

        <footer>
            <p style="color:white; font-weight: 400; font-size: 12 px; text-align: center">This project is developed by Sumaiya Tarannum Noor.<p>
    </footer>
    </body>
</html> 
  </body>

</html>