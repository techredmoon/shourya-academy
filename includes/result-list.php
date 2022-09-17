
<div class="album py-5 bg-light text-center">
    <h1 class="fw-bold">ALL INDIA SAINIK SCHOOL ENTRANCE EXAM RESULT 2021 Comming Soon</h1>
    <br>
    <div class="container">

        <div class="row autoplay-slider">
            <?php
                $result_query = "SELECT * FROM t_notice_board ORDER BY id DESC";
                include('C:\xampp\htdocs\shourya-academy\connection.php');

                if(!$db) {
                    echo "Error : Unable to open database\n";
                } else {
                    //echo "Opened database successfully\n";
                    $result = mysqli_query($db, $result_query);

                    if(!$result) {
                        echo "Error : Unable to open database connected\n";
                    } else {
                        while($rowData = mysqli_fetch_array($result)){

            ?>

            <div class="col">
                <div class="card" style="width: 90%;">
                    <!-- <img src="static/images/<?php echo $rowData['image'] ?>" class="card-img-top" alt="static/images/image-not-found.jpg"> -->
                    <img src="static/images/result.jpg" class="card-img-top" alt="static/images/image-not-found.jpg">
                </div>
            </div>
            
            <?php
                        } //While Loop
                    } //Inner Else ends
        
                }  //Outer Else ends
    
            ?>

            

        </div>
        
        <div class="viewall">
                <a class="viewall-child" href="view-all-results.php"><span class="blinkviewall">view all...</span></a>
        </div>

    </div>
</div>