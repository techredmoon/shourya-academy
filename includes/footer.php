<div class="container-fluid bg-dark text-white" id="footer">

<footer class="p-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
      <div class="col">
        <h5 class="text-center">Have a Questions?</h5><br>
        <ul class="nav flex-column text-left">
          
          <li class="nav-item mb-2"><i class="fa fa-map-marker" aria-hidden="true"></i>  New Colony, Jharna Tola, Kunrathat New Kalawati Marriage Hall, Gorakhpur, Uttar Pradesh-273008</li><br>
          <li class="nav-item mb-2"><i class="fa fa-mobile" aria-hidden="true"></i> +91 9798451257</li>
          <li class="nav-item mb-2"><i class="fa fa-whatsapp" aria-hidden="true"></i>  +91 9798451257</li>
          <li class="nav-item mb-2"><i class="fa fa-envelope" aria-hidden="true"></i>  info@shouryaacademyedu.com</li>
        
        
        </ul>
      </div>

      <div class="col">
        <div class="container bg-light text-black text-center col-7 p-5">
          <h5 class="text-center">Total Visitors</h5><br>
          <h1 class="text-center" id="count"></h1>
          </div>
      </div>

      <div class="col">
        <h5 class="text-center">Useful Links</h5><br>
        <ul class="nav flex-column text-center">
          <li class="nav-item mb-2"><a href="noticeboard.php" class="link">Notice Board</a></li>
          <li class="nav-item mb-2"><a href="blogs.php" class="link">Blogs</a></li>
          <li class="nav-item mb-2"><a href="applyonline.php" class="link">Registration</a></li>
          <li class="nav-item mb-2"><a href="index.php" class="link">Home</a></li>
          <li class="nav-item mb-2"><a href="about.php" class="link">About</a></li>
        </ul>
      </div>

      <div class="col">
        <h5 class="text-center">Connect With Us</h5><br>
        <ul class="nav flex-column text-center">
          <li class="nav-item mb-2"><a href="https://www.youtube.com/channel/UCQwP16OqjbiQjtVmRzqH6cg" target="_blank" class="link-danger link-icon"><i class="fa-brands fa-youtube fa-2x"></i></a></li>
          <li class="nav-item mb-2"><a href="https://www.instagram.com/academyshourya/" target="_blank" class="link-danger link-icon"><i class="fa-brands fa-instagram fa-2x"></i></a></li>
          <li class="nav-item mb-2"><a href="https://www.facebook.com/academyshourya/" target="_blank" class="link-primary link-icon"><i class="fa-brands fa-facebook fa-2x"></i></a></li>
          <li class="nav-item mb-2"><a href="https://www.linkedin.com/in/academyshourya" target="_blank" class="link-info link-icon"><i class="fa-brands fa-linkedin fa-2x"></i></a></li>
          <li class="nav-item mb-2"><a href="https://www.twitter.com/AcademyShourya/" target="_blank" class="link-info link-icon"><i class="fa-brands fa-twitter fa-2x"></i></a></li>
        </ul>
      </div>
      
 
    </div>

    <div class="row row-cols-2 d-flex py-2 border-top">
      <div class="col-3 px-3">
        <ul class="list-unstyled d-flex">
          <li class="ms-3"><a class="link-danger link-icon" href="#"><i class="fa-brands fa-youtube"></i></a></li>
          <li class="ms-3"><a class="link-danger link-icon" href="#"><i class="fa-brands fa-instagram"></i></a></li>
          <li class="ms-3"><a class="link-success link-icon" href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
      </ul>
      </div>
      <div class="col"><p>Managed & Developed by <a href="#" class="link">Red Moon Tech</a> © 2022 Shourya Academy. All rights reserved.</p></div>
     
    </div>
    
  </footer>
</div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <script>

      updateVisitCount();
      const countVis= document.getElementById('count');

      function updateVisitCount(){
        fetch('https://api.countapi.xyz/update/redmoon.com/redmoon/?amount=1')
        .then(res => res.json())
        .then(res => {
          countVis.innerHTML = res.value;
        });
      }
    </script>
    
</body>
</html>

