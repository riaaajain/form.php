<?php 
$errors = array();
if(isset($_GET['submit'])){
  $name = $_GET['name'];
  $address = $_GET['address'];
  $country = $_GET['country'];
  $age = $_GET['age'];
  $phone = $_GET['phone'];
  $email = $_GET['email'];
  $password = $_GET['password'];
  $conatct  = array();

  if(empty($name)){
    array_push($errors, 'name');
  }
  if(empty($address)){
    array_push($errors, 'address');
  }
  if(empty($country)){
    array_push($errors, 'country');
  }
  if(empty($age)){
    array_push($errors, 'age');
  }
  if(empty($phone)){
    array_push($errors, 'phone');
  }
  if(empty($email)){
    array_push($errors, 'email');
  }
  if(empty($password)){
    array_push($errors, 'password');
  }
  if(isset($_GET['email1'])){
    array_push($conatct, $_GET['email1']);
  }
  else{
    array_push($errors,'email1' );
  }
  if(isset($_GET['phoneno'])){
    array_push($conatct, $_GET['phoneno']);
  }
  if( isset($_GET['gender'])    ){
    if( $_GET['gender'] != 'female' ){
        array_push($errors, 'gender');
    }
  }
  else{
    array_push($errors, 'gender');
  }
}
if (!(isset($_GET['submit'])) || count($errors) > 0) {

?>
<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }
  .intro-wrapper {
  background-color: #fff;
  border: 1px solid #777474;
  border-radius: 5px 5px 0 0;

  -webkit-box-shadow: -1px 1px 3px -1px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: -1px 1px 3px -1px rgba(0, 0, 0, 0.75);
  box-shadow: -1px 1px 3px -1px rgba(0, 0, 0, 0.75);
    }
.nav-wrap {
  border-bottom: 1px solid #777474;
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #999;
  border-radius: 5px 5px 0 0;
}
.dots-wrapper {
  display: flex;
  padding: 10px;
}

#dot-1 {
  background-color: #fc6058;
}

#dot-2 {
  background-color: #fec02f;
}

#dot-3 {
  background-color: #2aca3e;
}
.browser-dot {
  background-color: black;
  height: 15px;
  width: 15px;
  border-radius: 50%;
  margin: 5px;

  -webkit-box-shadow: -1px 1px 3px -1px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: -1px 1px 3px -1px rgba(0, 0, 0, 0.75);
  box-shadow: -1px 1px 3px -1px rgba(0, 0, 0, 0.75);
}
.coll {
  background: #3d3c3c;
  justify-content: center;
  display: flex;
  align-items: center;
}
.label{
    color: whitesmoke;
}
</style>
<body>
<div class="container" style="margin-top: 2%;">
    <div class="intro-wrapper">
        <div class="nav-wrap">
            <div class="dots-wrapper">
                <div id="dot-1" class="browser-dot">
                </div>
                <div id="dot-2" class="browser-dot">
                </div>
                <div id="dot-3" class="browser-dot">
                </div>
            </div>
        </div>
        <div class="container coll">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h2 style="margin-top: 25px; text-align:center; color:white;">FORM VALIDATION</h2>
                    <form action="forms.php" method="GET" >

                        <div class="form-group" style="margin-top: 40px;">
                          <label for="name" class="label" style="letter-spacing:2px;"><b>Name</b></label>
                          <input type="text" class="form-control" placeholder="Your name" id="" value="<?php if(isset($_GET['name'])){ echo $_GET['name'];} ?>" name="name">
                          <span style="color: red; font-size:15px" ><?php if(in_array('name',$errors)) {echo "Name is required";} ?></span>
                        </div>

                        <div class="form-group" style="margin-top: 15px;">
                          <label for="Address" class="label" style="letter-spacing:2px;"><b>Address</b></label>
                          <input type="text" class="form-control" placeholder="Your address" id="" value="<?php if(isset($_GET['address'])){ echo $_GET['address'];} ?>" name="address">
                          <span style="color: red; font-size:15px" ><?php if(in_array('address',$errors)) {echo "Address is required";} ?></span>
                        </div>

                        <div class="form-group" style="margin-top: 15px;">
                          <label for="country" class="label" style="letter-spacing:2px;"><b>Country</b></label>
                          <select class="form-control" name="country" id="">
                          <option selected value="">Please select Country..</option>
                          <option <?php if(isset($_GET['country']) && $_GET['country']=='australia') { echo "selected";} ?> value="australia">Australia</option>
                          <option <?php if(isset($_GET['country']) && $_GET['country']=='India') { echo "selected";} ?> value="india">India</option>
                          <option <?php if(isset($_GET['country']) && $_GET['country']=='russia') { echo "selected";} ?> value="russia">Russia</option>
                          <option <?php if(isset($_GET['country']) && $_GET['country']=='spain') { echo "selected";} ?> value="spain">Spain</option>
                          </select>
                          <span style="color: red; font-size:15px" ><?php if(in_array('country',$errors)) {echo "Country is required";} ?></span>
                        </div>

                        <div class="form-group" style="margin-top: 15px;">
                          <label for="age" class="label" style="letter-spacing:2px;"><b>Age</b></label>
                          <input type="number" class="form-control" placeholder="Your Age" id="" value="<?php if(isset($_GET['age'])){ echo $_GET['age'];} ?>" name="age">
                          <span style="color: red; font-size:15px" ><?php if(in_array('age',$errors)) {echo "Age is required";} ?></span>
                        </div>

                        <div class="form-group" style="margin-top: 15px;">
                          <label for="contact"class="label" style="letter-spacing:2px;"><b>Gender</b></label>
                          <div class="form-check">
                            <label for="form-check-label" style="color: whitesmoke;">
                              <input type="radio" name="gender"  class="form-check-input" value="Male" <?php if(isset($_GET['gender']) && $_GET['gender']=='male') {echo "checked";} ?> id="">
                              Male
                            </label>
                          </div>
                          <div class="form-check" style="color: whitesmoke;">
                            <label for="form-check-label">
                              <input type="radio" name="gender"  class="form-check-input" value="Female"  <?php if(isset($_GET['gender']) && $_GET['gender']=='female') {echo "checked";} ?>id="">
                              Female
                            </label>
                          </div>
                          <span style="color: red; font-size:15px;"><?php if( in_array('gender', $errors)){ echo "Gender is required";} ?></span><br>
                        </div>

                        <div class="form-group" style="margin-top: 15px;">
                          <label for="phone" class="label" style="letter-spacing:2px;"><b>Conatct Number</b></label>
                          <input type="number" class="form-control" placeholder="Your Conatct" id="" value="<?php if(isset($_GET['phone'])){ echo $_GET['phone'];} ?>" name="phone">
                          <span style="color: red; font-size:15px" ><?php if(in_array('phone',$errors)) {echo "Phone no is required";} ?></span>
                        </div>

                        <div class="form-group" style="margin-top: 15px;">
                          <label for="contact" class="label" style="letter-spacing:2px;"><b>Preferred method of Contact</b></label>
                          <div class="form-check" style="color: whitesmoke;">
                          <span style="color: red; font-size:15px;"><?php if( in_array('email1', $errors)){ echo "email is Required";} ?></span><br>
                            <label for="form-check-label">
                              <input type="checkbox" name="email1" class="form-check-input" value="email1" id="" <?php if(isset($_GET['email1'])){echo 'checked';} ?>>
                              Email
                            </label>
                          </div>
                          <div class="form-check">
                            <label for="form-check-label"style="color: whitesmoke;">
                              <input type="checkbox" name="phoneno" class="form-check-input" value="phoneno" id=""<?php if(isset($_GET['phoneno'])){echo 'checked';} ?>>
                              Phone 
                            </label>
                          </div>
                        </div>

                        <div class="form-group" style="margin-top: 15px;">
                          <label for="email" class="label" style="letter-spacing:2px;"><b>Email</b></label>
                          <input type="email" class="form-control" placeholder="Your email" id="" value="<?php if(isset($_GET['email'])){ echo $_GET['email'];} ?>" name="email">
                          <span style="color: red; font-size:15px" ><?php if(in_array('email',$errors)) {echo "Email is required";} ?></span>
                        </div>

                        <div class="form-group" style="margin-top: 15px;">
                          <label for="password" class="label" style="letter-spacing:2px;"><b>Password</b></label>
                          <input type="password" class="form-control" placeholder="Your password" id="" value="<?php if(isset($_GET['password'])){ echo $_GET['password'];} ?>" name="password">
                          <span style="color: red; font-size:15px" ><?php if(in_array('password',$errors)) {echo "Passowrd is required";} ?></span>
                        </div>

                        <input type="submit" value = "Submit" name="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
}
?>