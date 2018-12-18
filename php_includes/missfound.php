<?php
    //initial variables to empyt values
    $user_name_er = $user_img_er = $user_phone_er ="";
    $pet_age_er= $pet_gender_er=$pet_info_er = $pet_status_er = $pet_type_er = "";
    $user_name = $user_phone = $user_img = "";
    $pet_age = $pet_gender = $pet_info = $pet_status = $pet_type = "";

if(isset($_POST['submit'])){
    $user_name = $_POST['user_name'];
    $user_phone = $_POST['user_phone'];
    $error_img="";
    if($_FILES['image']) {
        $user_img = $_FILES['image']['name'];
        $user_img_temp = $_FILES['image']['tmp_name'];
        move_uploaded_file($user_img_temp,"./user_uploaded_img/$user_img");
    }else {
        $user_img = "default.jpeg";
    }
    $pet_status = $_POST['pet_status'];
    $pet_type = $_POST['pet_type'];
    $pet_gender = $_POST['pet_gender'];
    $pet_age = $_POST['pet_age'];
    $pet_info = $_POST['pet_info'];
    $post_date = date('d-m-y');
    $statu = "approve";
    $query = "INSERT INTO foundmiss(user_name,user_phone,user_img,pet_status,pet_type,pet_sex,pet_age,pet_info,post_date,statu) ";
    $query .= "VALUES('{$user_name}','{$user_phone}','{$user_img}','{$pet_status}','{$pet_type}','{$pet_gender}','{$pet_age}','{$pet_info}',now(),'{$statu}')";
}


$insert_query = mysqli_query($con, $query);
$msg="submitted";
echo $msg;

function test_input($in){
    $in = trim($in);
    $in = stripcslashes($in);
    $in = htmlspecialchars($in);
    return $in;
}
?>
   <div class="modal-body">
        <div class="container text-center">
            <span class="error text-center text-danger"><?php echo $user_name_er; ?></span>
        </div>
        <form method="post" enctype="multipart/form-data" action="">
            <div class="form-row align-items-center">
            <div class="col-sm-6 my-1">
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="pr-2 text-danger display-5">*</span><div class="input-group-text"><i class="fas fa-address-book"></i></div>
                </div>
                <input type="text" class="form-control" placeholder="Your Name" name="user_name">
            </div>
            </div>
            <div class="col-sm-6 my-1">
                <div class="input-group">
                <div class="input-group-prepend">
                <span class="pr-2 text-danger display-5">*</span><div class="input-group-text"><i class="fas fa-phone-volume"></i></div>
                </div>
                <input type="text" class="form-control" placeholder="Your Phone#" name="user_phone">
                </div>
            </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12 my-1">
                    <div class="input-group">
                    <div class="container">
                    <span class="pr-2 text-danger display-5">*</span><input type="file" name="image" />
                    </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
            <div class="col-sm-6 my-1">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="pr-2 text-danger display-5">*</span><div class="input-group-text"><i class="fas fa-paw"></i></div>
                    </div>
                    <input type="text" class="form-control" placeholder="Breed Type" name="pet_type">
                </div>
            </div>
            <div class="col-sm-6 my-1">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="pr-2 text-danger display-5">*</span>
                    <div class="input-group-text"><i class="fas fa-info-circle"></i></div>
                    </div>
                    <!-- <input type="text" class="form-control" placeholder="Sex" name="pet_gender"> -->
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="pet_status">
                    <option selected>Found/Missing</option>
                    <option value="Found">Found</option>
                    <option value="Miss">Missing</option>
                    </select>
                </div>
            </div>
            </div>
            <div class="form-row">
            <div class="col-sm-6 my-1">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="pr-2 text-danger display-5">*</span><div class="input-group-text"><i class="fas fa-transgender"></i></div>
                    </div>
                    <!-- <input type="text" class="form-control" placeholder="Sex" name="pet_gender"> -->
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="pet_gender">
                    <option selected>Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6 my-1">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="pr-2 text-danger display-5">*</span><div class="input-group-text"><i class="fas fa-crow"></i></div>
                    </div>
                    <input type="text" class="form-control" placeholder="Age" name="pet_age">
                </div>
            </div>
            </div>
            <div class="from-row">
                <div class="col-sm-12 my-1">
                    <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="pr-2 text-danger display-5">*</span><div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                    </div>
                    <textarea id="" rows="3" cols="12" class="form-control" name="pet_info"></textarea>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary float-right mt-1 btn-sm" name="submit" type="submit">Submit</button>
        </form>

    </div>
    <div class="modal-footer">
         <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
    </div>

 