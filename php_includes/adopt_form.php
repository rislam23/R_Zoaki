<?php
    //initial variables to empyt values
    $user_name_er = $user_phone_er = $user_email_er="";
    $user_name = $user_phone = $user_email = "";

if(isset($_POST['submit'])){

    if(empty($_POST['user_name'])){
        $user_er = "Name is require";
        echo $user_er;
    }else{
        $user_name = $_POST['user_name'];
        if(!preg_match("/^[a-zA-Z]*$/",$user_name)){
            $user_name_er = "Only letters and white space allowed";
            echo $user_name_er;
        }else{
            $user_name = $_POST['user_name'];
            $user_phone = $_POST['user_phone'];
            $user_email = $_POST['user_email'];
            $post_date = date('d-m-y');
            
            $query = "INSERT INTO adoption(user_name,user_phone,user_email,post_date) ";
            $query .= "VALUES('{$user_name}','{$user_phone}','{$user_email}',now())";

            $insert_query = mysqli_query($con,$query);
        }
    }

 
 
}
// $statu = "approve";
// $query = "INSERT INTO foundmiss(user_name,user_phone,user_img,pet_status,pet_type,pet_sex,pet_age,pet_info,post_date,statu) ";
// $query .= "VALUES('{$user_name}','{$user_phone}','{$user_img}','{$pet_status}','{$pet_type}','{$pet_gender}','{$pet_age}','{$pet_info}',now(),'{$statu}')";

$msg="submitted";


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
            <div class="form-row align-items-center">
                <div class="col my-1">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="pr-2 text-danger display-5">*</span><div class="input-group-text"><i class="fas fa-phone-volume"></i></div>
                        </div>
                        <input type="email" class="form-control" placeholder="Your Email" name="user_email">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary float-right mt-1 btn-sm" name="submit" type="submit">Submit</button>
        </form>

    </div>

 