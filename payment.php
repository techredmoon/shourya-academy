
<?php 
  $title = 'Payment';
  $blogcard = 'Recent Blogs'; 
  require_once 'includes/header.php';
?>

<?php require_once 'includes/navbar.php'; ?>


<div class="container-fluid bg-info text-center banner">
  <div class="banner container">
    <h1 class="display-5 fw-bold lh-1 mb-3">Verify Details & Pay</h1>
    <p></p>
    </div>
</div>

<div class="container-fluid bg-info" id="">
  
    <div class="container bg-warning py-5 px-5 col-8" id="">
        <form class="row g-3" action="/payment.php">
        <h5 class="py-2">Persnoal Details :</h5>
            <div class="col-6">

            <input type="fname" class="form-control" id="fname" placeholder="First Name">
            </div>
            <div class="col-6">
                <input type="lname" class="form-control" id="lname" placeholder="Last Name">
            </div>
            <div class="col-6">

            <input type="calender" class="form-control" id="dob" placeholder="Date Of Birth">
            </div>
            <div class="col-6">
                <input type="number" class="form-control" id="aadhar" placeholder="Aadhar No">
            </div>
            <div class="col-6">
                <input type="father" class="form-control" id="father" placeholder="Enter Father's Name">
            </div>
            <div class="col-6">
                <input type="mother" class="form-control" id="mother" placeholder="Enter Mother's Name">
            </div>

            <div class="col-6">
                <select id="admclass" class="form-select">
                <option selected>Choose Class ...</option>
                <option>3RD</option>
                <option>4TH</option>
                <option>5TH</option>
                </select>
            </div>
            <div class="custom-file col-6">
                <label class="custom-file-label col-3" for="customFile">Upload Image</label>
                <input type="file" class="custom-file-input col-3" id="customFile">
            </div>
            <h5 class="py-2">Communication Details :</h5>
            <div class="col-6">
                <input type="phone" class="form-control" id="phone" placeholder="Enter Phone Number">
            </div>
            <div class="col-6">
                <input type="email" class="form-control" id="email" placeholder="Enter Email (If Any)">
            </div>
            <div class="col-6">
                <input type="add1" class="form-control" id="add1" placeholder="Area">
            </div>
            <div class="col-6">
                <input type="add2" class="form-control" id="add2" placeholder="State">
            </div>
            <div class="col-6">
                <input type="add3" class="form-control" id="add3" placeholder="Pincode">
            </div>
            <div class=" col-12 text-center">
                <h5> Pay Using Below UPI Method</h5>
            <i class="fa-brands fa-google-pay fa-3x"></i>
            </div>

            <h5 class="text-center"> Upload Screensort or Transcation Id</h5>
            <div class="custom-file col-12 text-center">
                <input type="file" class="custom-file-input col-6" id="customFile">

                <input type="pay" class="form-control col-6" id="pay" placeholder="Transaction Id">
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


<?php require_once 'includes/footer.php'; ?>

