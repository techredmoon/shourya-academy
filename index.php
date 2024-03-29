
<?php 
  $title = 'Home';
  $blogcard = 'Recent Blogs';
  $teachercard = 'Our Teachers';
  $coursecard = 'Courses We Offer';
  require_once 'includes/header.php';
?>

<?php require_once 'includes/navbar.php'; ?>

<div id="popup">

    <!-- and here comes the image -->
    <img src="static/images/notice1.jpeg" style="height:80%; width: 80%;" alt="popup">

        <!-- Now this is the button which closes the popup-->
        <button id="close"> X </button>

        <!-- and finally we close the POPUP FRAME-->
        <!-- everything on it will show up within the popup so you can add more things not just an image -->
</div>

<?php require_once 'includes/slideshow.php'; ?>


<div class="container-fluid bg-success">
    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 text-white text-center">
  <img src="static/images/notice5.jpeg" alt="ads">
</div>
</div>
<div class="container-fluid bg-info">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 text-white text-center">
    <div class="col py-4 bg-info">
        <h3>Our Vision</h3>
        <p>Our aim is to generate skillful officers in Defence Sectars and a build the youth conscious of the Dignity, Pride and Honour of Defence Services. We are openhanded them the best Quality they can articulate that —. “Yes. I do have it in me.”</p>
    </div>
    <div class="col py-4 bg-warning">
    <h3>Mission & Objectives</h3>
    
    <p>Shourya Academy coaching is a foremost Institution which is providing preparation of written examination for Defence Services. Our Faculty has the enthusiasm and imminent and cleverness to bring outstanding results-time and time again.</p>
    </div>
    <div class="col py-4 bg-info">
    <h3>Books & Library</h3>
    
    <p>I have always imagined that Paradise will be a kind of a Library. We will provide every kind of books and library for preparation of entrance exams.</p>
    </div>
    <div class="col py-4 bg-warning">
      <h3>Special Education</h3>
      <p>Students practice at their own pace, first filling in gaps in their understanding and then accelerating their learning.</p>
    </div>
  </div>
</div>

<div class="container-fluid bg-light">
    <div class="row flex-lg-row-reverse align-items-center g-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="static/images/nda-2.jpg" class="img-fluid" alt="Bootstrap Themes" width="600" height="300" loading="lazy">
      </div>
      <div class="col-lg-6 text-center" id="offer">
        <h1 class="display-5 fw-bold lh-1 mb-3">What We Offer !</h1>
        <p>Shourya Academy coaching is a foremost Institution which is providing preparation of written examination for Defence Services. Our Faculty has the enthusiasm and imminent and cleverness to bring outstanding results-time and time again.</p>
          <div class="container-fluid " id="">
            <div class="row row-cols-2">
              <div class="col py-4">
              <i class="fa fa-bed fa-4x" aria-hidden="true"></i><br>
                <h4>Hostel & Day Boarding</h4>
              </div>
              <div class="col py-4">
              <i class="fa fa-book fa-4x" aria-hidden="true"></i><br>
              <h4>Regular Classes</h4>
              </div>
              <div class="col py-4">
              <i class="fa fa-address-card-o fa-4x" aria-hidden="true"></i><br>
              <h4>Certified Teachers</h4>
              
              </div>
              <div class="col py-4">
              <i class="fa fa-university fa-4x" aria-hidden="true"></i><br>
              <h4>Sufficient Classrooms</h4>
                
              </div>
              <div class="col py-4">
              <i class="fa fa-cubes fa-4x" aria-hidden="true"></i><br>
              <h4>Creative Lessons</h4>
              </div>
              <div class="col py-4">
              <i class="fa fa-building fa-4x" aria-hidden="true"></i><br>
              <h4>Neat & Clean Facilities</h4>
              
              </div>
            </div>
          </div>

      </div>
    </div>
  </div>


<div class="container-fluid bg-info" id="youtube">
    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 text-white text-center">
        <div class="col py-4">
          <iframe src="https://www.youtube.com/embed/TjernXS0kjI" width="100%" height="300" style="border:none;">
          </iframe>
        </div>
        <div class="col py-4">
          <h1 class="display-5 fw-bold lh-1 mb-3">Shourya Academy</h1>
          <br>
            <p>

When you trust on yourself that you can perform it, half of your mission is completed. “I can & I will” is the guiding standard and a technique of life at fast track training. Each enormous Journey initiates with a single step. If you wish for conquer all major hurdles in your life, you ought to begin with self-confidence.</p><p>

Shourya Academy coaching is a foremost Institution which is providing preparation of written examination for Defence Services. Our Faculty has the enthusiasm and imminent and cleverness to bring outstanding results-time and time again.</p>
        </div>
    </div>
</div>



<?php require_once 'includes/teachercard.php'; ?>

<?php require_once 'includes/coursecard.php'; ?>

<?php require_once 'includes/blogcard.php'; ?>

<?php require_once 'includes/footer.php'; ?>

<div id="popup">

    <!-- and here comes the image -->
    <img src="static/images/notice1.jpeg" style="height:80%; width: 80%;" alt="popup">

        <!-- Now this is the button which closes the popup-->
        <button id="close"> X </button>

        <!-- and finally we close the POPUP FRAME-->
        <!-- everything on it will show up within the popup so you can add more things not just an image -->
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
$(document).ready(function () {

    //select the POPUP FRAME and show it
    $("#popup").hide().fadeIn(1000);

    //close the POPUP if the button with id="close" is clicked
    $("#close").on("click", function (e) {
        e.preventDefault();
        $("#popup").fadeOut(1000);
    });

});
</script>

