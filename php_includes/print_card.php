<?php 
      $page_first = 1;
      $per_page = 8;
      if (isset($_GET['page'])) {
        $page = $_GET['page'];
      }else{
        $page = "";
      }
      if ($page == "" || $page == 1) {
        $page_first = 1;
      }else{
        $page_first = ($per_page * $page) - $per_page;
      }
      $query = "SELECT * FROM foundmiss where statu = 'approve' LIMIT $page_first, $per_page";
      $slect_all_querys = mysqli_query($con,$query);
      while ($row = mysqli_fetch_array($slect_all_querys)) {
        $user_id = $row['user_id'];
        $user_name = $row['user_name'];
        $user_phone = $row['user_phone'];
        $user_img = $row['user_img'];
        $pet_status = $row['pet_status'];
        $pet_type = $row['pet_type'];
        $pet_gender = $row['pet_sex'];
        $pet_age = $row['pet_age'];
        $pet_info = $row['pet_info'];
        $post_date = $row['post_date'];

        echo "<div class='col-lg-3 col-md-6 my-2'>";
        echo "<div class='card'>";
        echo "<img class='card-img-top img-fluid' src='user_uploaded_img/$user_img' alt='Card image cap'>";
        echo "<div class='card-body'>";
        echo "<div class='container cards-head mb-2'>";
        echo "<i class='fas fa-bullhorn d-inline icon-right-animate'></i>";
        echo "<h3 class='card-title d-inline' style='font-size:30px'>$pet_status</h3>";
        echo "</div>";
        echo "<ul class='list-group list-group-flush'>";
        echo "<li class='list-group-item'><i class='fas fa-paw icon-right-animate'></i><span>$pet_type</span></li>";
        echo "<li class='list-group-item'><i class='fas fa-transgender icon-right-animate'></i><span>$pet_gender</span></li>";
        echo "<li class='list-group-item'><i class='fas fa-crow icon-right-animate'></i><span>$pet_age</span></li>";
        echo "</ul>";
        echo "  <div class='container text-center mt-2'>
        <a href='#' class='btn btn-default card-btn-info' data-toggle='modal' data-target='#$user_id'>More Information</a>
    </div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        // CARD MODAL
        echo " <div id='$user_id' class='modal fade' role='dialog'>
        <div class='modal-dialog'>
          <!-- Modal content-->
          <div class='modal-content'>
              <div class='modal-header'>
                <h4 class='modal-title float-left'>Information</h4>
                <button type='button' class='close' data-dismiss='modal'>&times;</button>
              </div>
              <div class='modal-body'>
                <p>$pet_info</p>
              </div>
              <div class='container-fluid text-center border-top'>
                  <div class='container'>
                      <i class='fas fa-address-card d-inline icon-right-animate'></i>
                      <p class='lead d-inline'>$user_name</p>
                    </div>
                  <div class='container'>
                    <i class='fas fa-phone-volume d-inline icon-right-animate'></i>
                    <p class='lead d-inline'>$user_phone</p>
                  </div>
                  <div class='container'>
                    <i class='fas fa-clock d-inline icon-right-animate'></i>
                    <p class='lead d-inline'>$post_date</p>
                  </div>
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
              </div>
          </div>
        </div>
    </div>";
      }
    
    
    ?>