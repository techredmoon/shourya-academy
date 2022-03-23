
<?php 
  $title = 'Registration';
  $blogcard = 'Recent Blogs'; 
  require_once 'includes/header.php';
?>

<?php require_once 'includes/navbar.php'; ?>


<div class="container-fluid bg-info text-center banner">
  <div class="banner container">
    <h1 class="display-5 fw-bold lh-1 mb-3">Register Your Self</h1>
    </div>
</div>

<div class="container-fluid bg-info" id="">
  
    <div class="container bg-warning py-5 px-5 col-8" id="">
        <form class="row g-3">
            <div class="col-md-6">

            <input type="fname" class="form-control" id="fname" placeholder="First Name">
            </div>
            <div class="col-md-6">
                <input type="lname" class="form-control" id="lname" placeholder="Last Name">
            </div>
            <div class="col-12">
                <input type="email" class="form-control" id="email" placeholder="Enter Email">
            </div>
            <div class="col-12">
                <input type="email" class="form-control" id="email" placeholder="Enter Email">
            </div>
            <div class="col-12">
                <input type="email" class="form-control" id="email" placeholder="Enter Email">
            </div>
            <div class="col-12">
                <select id="inputState" class="form-select">
                <option selected>Choose Class ...</option>
                <option>3RD</option>
                <option>4TH</option>
                <option>5TH</option>
                </select>
            </div>
            <div class="col-12 align-items-center">
                <button type="submit" class="btn btn-primary px-5">Submit Registration Form</button>
            </div>
        </form>
       
    </div>
</div>

<div class="container-fluid bg-info text-center banner">
  <div class="banner container">
    <h1 class="display-5 fw-bold lh-1 mb-3"></h1>
    </div>
</div>

<?php require_once 'includes/blogcard.php'; ?>

<?php require_once 'includes/footer.php'; ?>

