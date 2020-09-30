<?php
$errors = array();
if(isset($_GET['submit'])){
    $name = $_GET['name'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $state = $_GET['state'];
    $city = $_GET['city'];
    $about = $_GET['about'];

    if(empty($name)){
        array_push($errors,'name');
    }
    if(empty($email)){
        array_push($errors,'email');
    }
    if(empty($phone)){
        array_push($errors,'phone');
    }
    if(empty($state)){
        array_push($errors,'state');
    }
    if(empty($city)){
        array_push($errors,'city');
    }
    if(strlen($about)<10){
        array_push($errors,'about');
    }
    
    if(!$errors){
        // echo "<b>Name: </b>" . $name . "<br>";
        // echo "<b>email: </b>" .$email . "<br>";
        // echo "<b>Gender: </b>" . $state . "<br>";
        // echo "<b>adult: </b>". $city . "<br>";
        // echo "<b>adult: </b>". $about . "<br>";
        setcookie('name',$name,strtotime('+1 miniutes'));
        setcookie('email',$email,strtotime('+1 miniutes'));
        setcookie('phone',$phone,strtotime('+1 miniutes'));
        setcookie('state',$state,strtotime('+1 miniutes'));
        setcookie('city',$city,strtotime('+1 miniutes'));
        setcookie('about',$about,strtotime('+1 miniutes'));
        
        header("location: /new/St.1/check.php");
    }
}
if (!(isset($_GET['submit'])) || count($errors) > 0) {
    // setcookie('user', $name, strtotime('+1 miniute'));
    // echo "<b>Name: </b>" . $name . "<br>";
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Registration Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col col-md-4">
                <h2 style="margin-top: 25px;">FORM VALIDATION</h2>
                <form action="reg.php" method="get">

                    <div class="form-group">
                        <label for="name"><b>Name:</b></label>
                        <input type="text" class="form-control" value="<?php if(isset($_GET['name'])){ echo $_GET['name'];} ?>" placeholder="Enter name" id="name" name="name">
                        <span style="color: red; font-size:15px;"><?php if( in_array('name', $errors)){ echo "Name is Required *";} ?></span>
                    </div>

                    <div class="form-group">
                        <label for="email"><b>Email address:</b></label>
                        <input type="email" class="form-control" value="<?php if(isset($_GET['email'])){ echo $_GET['email'];} ?>" placeholder="Enter email" id="email" name="email">
                        <span style="color: red; font-size:15px;"><?php if( in_array('email', $errors)){ echo "email is Required *";} ?></span>
                    </div>


                    <div class="form-group" >
                          <label for="phone" class="label" ><b>Conatct Number</b></label>
                          <input type="number" class="form-control" placeholder="Your Conatct" id="" value="<?php if(isset($_GET['phone'])){ echo $_GET['phone'];} ?>" name="phone">
                          <span style="color: red; font-size:15px" ><?php if(in_array('phone',$errors)) {echo "Phone no is required";} ?></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="name"><b>State:</b></label>
                        <input type="text" class="form-control" value="<?php if(isset($_GET['state'])){ echo $_GET['state'];} ?>" placeholder="Enter state" id="state" name="state">
                        <span style="color: red; font-size:15px;"><?php if( in_array('state', $errors)){ echo "state is Required *";} ?></span>
                    </div>

                    <div class="form-group">
                        <label for="name"><b>City:</b></label>
                        <input type="text" class="form-control" value="<?php if(isset($_GET['city'])){ echo $_GET['city'];} ?>" placeholder="Enter city" id="city" name="city">
                        <span style="color: red; font-size:15px;"><?php if( in_array('city', $errors)){ echo "city is Required *";} ?></span>
                    </div>

                    <div class="form-group">
                        <label for="about">About Me:</label>
                        <textarea id="about" name="about" placeholder="Write something.." style="height:200px" value="<?php if(isset($_GET['about'])){ echo $_GET['about'];} ?>"></textarea>
                        <span style="color: red; font-size:15px;"><?php if( in_array('about', $errors)){ echo "about should be more than 10 ";} ?></span>
                    </div>
                    
                    <input type="submit" value="submit" name="submit" class="btn btn-primary">
                </form>
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