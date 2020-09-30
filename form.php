<?php
// var_dump('gender');
$errors = array();
if(isset($_GET['submit'])){
    $name = $_GET['name'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    $gender = $_GET['gender'];
    $language = array();

    if(empty($name)){
        // echo "name required";
        array_push($errors,'name');
    }
    if(empty($email)){
        // echo "email required";  
        array_push($errors,'email');
    }
    if(empty($password)){
        // echo "password required";
        array_push($errors,'password');
    }
    if(empty($gender)){
        array_push($errors,'gender');
    }
    if(isset($_GET['html'])){
        array_push($language, $_GET['html']);
    }
    else{
        array_push($errors,'html');
    }
    if(isset($_GET['css'])){
        array_push($language, $_GET['css']);
    }
    
    if(isset($_GET['javascript'])){
        array_push($language, $_GET['javascript']);
    }
    
    if(isset($_GET['php'])){
        array_push($language, $_GET['php']);
    }
    // else{
    //     array_push($errors,'php');
    // }
    if(  isset($_GET['adult'])    ){
        if( $_GET['adult'] != 'yes' ){
            array_push($errors, 'adult');
        }
    }
    else{
        array_push($errors, 'adult');
    }
    if(!$errors){
        echo "<b>Name: </b>" . $name . "<br>";
        echo "<b>email: </b>" .$email . "<br>";
        echo "<b>Gender: </b>" . $gender . "<br>";
        echo "<b>adult: </b>". $adult . "<br>";
    }
}
if (!(isset($_GET['submit'])) || count($errors) > 0) {

// echo $name;
// echo "Your email is ".$email;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col col-md-4">
                <h2 style="margin-top: 25px;">FORM VALIDATION</h2>
                <form action="form.php" method="GET">

                    <!-- NAME -->

                    <div class="form-group">
                        <label for="name"><b>Name:</b></label>
                        <input type="text" class="form-control" value="<?php if(isset($_GET['name'])){ echo $_GET['name'];} ?>" placeholder="Enter name" id="name" name="name">
                        <span style="color: red; font-size:15px;"><?php if( in_array('name', $errors)){ echo "Name is Required *";} ?></span>
                    </div>

                    <!-- EMAIL -->

                    <div class="form-group">
                        <label for="email"><b>Email address:</b></label>
                        <input type="email" class="form-control" value="<?php if(isset($_GET['email'])){ echo $_GET['email'];} ?>" placeholder="Enter email" id="email" name="email">
                        <span style="color: red; font-size:15px;"><?php if( in_array('email', $errors)){ echo "email is Required *";} ?></span>
                    </div>

                    <!-- PASSWORD -->

                    <div class="form-group">
                        <label for="pwd"><b>Password:</b></label>
                        <input type="password" class="form-control" placeholder="Enter password" id="pwd"
                            name="password"value="<?php if(isset($_GET['password'])){ echo $_GET['password'];} ?>">
                        <span style="color: red; font-size:15px;"><?php if( in_array('password', $errors)){ echo "password is Required *";} ?></span>
                    </div>

                    <!-- GENDER -->

                    <div class="form-group">
                        <label for="gender"><b>Gender:</b></label>
                        <select class="form-control" name="gender" id="">
                            <option selected value="">Please select gender..</option>
                            <option <?php if(isset($_GET['gender']) && $_GET['gender']=='male') { echo "selected";} ?> value="male">Male</option>
                            <option <?php if(isset($_GET['gender']) && $_GET['gender']=='female') { echo "selected";} ?>  value="female">Female</option>
                        </select>
                        <span style="color: red; font-size:15px;"><?php if( in_array('gender', $errors)){ echo "gender is Required *";} ?></span>
                    </div>

                    <!-- LANGUAGE -->

                    <div class="form-group">
                        <label for="language"><b>Languages you know</b></label>
                        <div class="form-check">
                            <span style="color: red; font-size:15px;"><?php if( in_array('html', $errors)){ echo "html is Required *";} ?></span><br>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="html" value="html" id="" <?php if(isset($_GET['hmtl'])) {echo "checked";} ?>>
                                HTML
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="css" value="css" id=""<?php if(isset($_GET['css'])) {echo "checked";} ?>>
                                CSS
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="javascript" value="javascript" id=""<?php if(isset($_GET['javascript'])) {echo "checked";} ?>>
                                JavaScript
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="php" value="php" id=""<?php if(isset($_GET['php'])) {echo "checked";} ?>>
                                PHP
                            </label>
                        </div>
                    </div>

                    <!-- RADIO -->

                    <div class="form-group">
                        <label for="language"><b> Are you 18+ ?</b></label>
                        <div class="form-check">
                            <span style="color: red; font-size:15px;"><?php if( in_array('adult', $errors)){ echo "Your age should be above 18";} ?></span><br>
                            <label class="for-check-label">
                                <input type="radio" class="form-check-input" name="adult" value="yes" id="" <?php if(isset($_GET['adult']) && $_GET['adult']=='yes') {echo "checked";} ?>>
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="for-check-label">
                                <input type="radio" class="form-check-input" name="adult" value="no" id="" <?php if(isset($_GET['adult']) && $_GET['adult']=='no') {echo "checked";} ?>>
                                No
                            </label>
                        </div>

                    </div>
                    <input type="submit" value = "submit" name="submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php
}
?>
