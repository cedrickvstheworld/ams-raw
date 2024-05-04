<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $last_name = $_POST['last_name'];
   $first_name = $_POST['first_name'];
   $mid_name = $_POST['mid_name'];
   $contact = $_POST['contact'];
   $occupation = $_POST['occupation'];
   $gender = $_POST['gender'];
   $user_name = $_POST['user_name'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   

   $sql = "INSERT INTO `user`(`id`, `last_name`, `first_name`, `mid_name`, `contact`, `occupation`, `gender`, `user_name`, `email`, `password`) VALUES ('NULL','$last_name','$first_name','$mid_name','$contact ','$occupation','$gender','$user_name','$email','$password')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <style type="text/css">
  .required {
    position: relative;
  }
  .required::before {
    content: "*";
    color: red;
    position: absolute;
    left: -11px;
    top: 63%;
    transform: translateY(-50%);
  }
    #eye {
    background: transparent;
    color: #333;
    margin: 5.9px 0 0 0;
    margin-left: -20px;
    padding: 18px 9px 19px 0px;
    border-radius: 0px 5px 5px 0px;
    float: right;
    position: relative;
    right: 4%;
    top: -.5%;
    z-index: 5;
    cursor: pointer;
  }
</style>

   <title>PHP CRUD Application</title>
</head>

<body>


   <div class="container">
      <div class="text-center mb-4">
         <h3>Add New User</h3>
         <p class="text-muted">Complete the form below to add a new user</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="mb-3">

                <div class="col">
                  <label class="form-label" class="required">Last Name:</label>
                  <input type="text" class="form-control" name="last_name" >
               </div>

               <div class="col">
                  <label class="form-label" class="required">First Name:</label>
                  <input type="text" class="form-control" name="first_name" >
               </div>

               <div class="col">
                  <label class="form-label">Middel Name:</label>
                  <input type="text" class="form-control" name="mid_name" >
               </div>

                <div class="col">
                    <label class="form-label" class="required">Contact:</label>
                    <input type="tel" class="form-control" name="contact" placeholder="+63" min="1" max="11" (Maximum of 1-100)>
                </div>

                <div class="col">
                    <label class="form-label" class="required">Occupation:</label>
                    <input type="occupation" class="form-control" name="occupation">
                </div>
            </div>

            <div class="form-group mb-3">
               <label>Gender:</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="gender" id="male" value="male">
               <label for="male" class="form-input-label" class="required">Male</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="gender" id="female" value="female">
               <label for="female" class="form-input-label" class="required">Female</label>
            </div>

            <div class="mb-3">
                <div class="col">
                    <label class="form-label" class="required">User Name:</label>
                    <input type="user_name" class="form-control" name="user_name">
                </div>

                <div class="col">
                    <label class="form-label" class="required">Email:</label>
                    <input type="email" class="form-control" name="email">
                </div>

                <div class="col">
                    <label class="form-label" class="required">Password:</label>
                    <input type="password" class="form-control" name="password">
                </div>
            </div>

            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
