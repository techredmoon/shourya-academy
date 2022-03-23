
<?php 
  $title = 'Contact';
  $blogcard = 'Recent Blogs';
  require_once 'includes/header.php';
?>

<?php require_once 'includes/navbar.php'; ?>


<div class="container-fluid bg-info text-center banner">
  <div class="banner container">
    <h1 class="display-5 fw-bold lh-1 mb-3">Contact Us</h1>
    </div>
</div>

<div class="container-fluid bg-light" id="">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 text-dark text-center py-5">
    <div class="col py-4">
        <h4>Address</h4>
        <p>New Colony, Jharna Tola, Kunrathat New Kalawati Marriage Hall, Gorakhpur, Uttar Pradesh-273008<p>
    </div>
    <div class="col py-4">
    <h4>Contact Number</h4>
        <p>+91 9798451257<p>
    </div>
    <div class="col py-4">
    <h4>Email Address</h4>
        <p>info@shouryaacademyedu.com<p>
        <p>shouryaacademyedu@yahoo.com</p>
    </div>
    <div class="col py-4">
    <h4>Website/Blogs</h4>
        <p>shouryaacademyedu.com<p>
    </div>
  </div>
</div>



<div class="container-fluid bg-info p-5" id="">
  <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 text-dark">
    <div class="col py-4">
        <h4>Find Us Here</h4>
        <div id="googleMap" style="width:100%;height:400px;">
    
            <!-- Google Map Copied Code -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d1835902.6225145622!2d82.80801475383218!3d26.00909374780007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d25.5612678!2d84.8672162!4m5!1s0x39915b9b0ddc7b37%3A0x5f8e566fce29ba57!2sshourya%20academy%20gorakhpur!3m2!1d26.75808!2d83.4190776!5e0!3m2!1sen!2sin!4v1647774288723!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    width="100"
                    height="100"
                    frameborder="0"
                    style="border:0;"
                    allowfullscreen=""
                    aria-hidden="false"
                    tabindex="0">
            </iframe>
       
        
         </div>    
    </div>
    <div class="col bg-warning">
        <div class="p-6 m-5">
            <form>
               <h2>Contact Form</h2>
               <div class="form-group py-2">
                    <input type="text" class="form-control" placeholder="Enter Name" id="name">
                </div>
                <div class="form-group py-2">
                    <input type="text" class="form-control" placeholder="Enter Phone Number" id="phone">
                </div>
                <div class="form-group py-2">
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email">
                </div>
                <div class="form-group py-2">
                    <textarea class="form-control" id="txtarea" rows="3" placeholder="Write Your Query Here ..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>
  </div>
</div>

<?php require_once 'includes/blogcard.php'; ?>

<?php require_once 'includes/footer.php'; ?>



