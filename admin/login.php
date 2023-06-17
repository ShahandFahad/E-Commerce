<?php
      include_once('./includes/restriction.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    
    <title>ADMIN | Login</title>

    <style>
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }
      body {
        display: flex;
        flex-direction: column;
        height: 100vh;
        justify-content: center;
        align-items: center;
      }
      form {
        border: 1px solid red;
        width: 400px;
        padding: 25px;
        border-radius: 10px;
      }
      .logo-box {
        padding: 10px;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
      }
      #signup-btn {
        text-decoration: none;
        color: white;
      }
      h4{
        text-align: center;
        margin: 15px;
      }
    </style>
  </head>
  <body>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST">
      <div class="logo-box">
        <img
          src="./upload/<?php echo $_SESSION['web-img']; ?>"
          alt="logo"
          width="200px"
        />
      </div>
      <h4>Admin Panel Login</h4>
      <div class="row mb-3">
        <!-- <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label> -->
        <div class="col-sm-12">
          <input
            id="inputEmail"
            name="userEmail"
            type="email"
            class="form-control"
            placeholder="Email"
            required
          />
        </div>
      </div>
      <div class="row mb-3">
        <!-- <label for="inputPassword3" class="col-sm-2 col-form-label"
          >Password</label
        > -->
        <div class="col-sm-12">
          <input
            id="inputPassword"
            name="password"
            type="password"
            class="form-control"
            placeholder="Password"
            required
          />
        </div>
      </div>


      <div style="float: right">

        <button 
        type="submit" 
        name="login" 
        class="btn btn-primary"
        >
            Sign in
        </button>
      </div>
    </form>

    <?php 
        if (isset($_POST['login'])) {
            include "includes/config.php";
            if (empty($_POST['userEmail']) || empty($_POST['password'])) {
                echo '<div class="alert alert-danger">All Fields must be entered.</div>';
                die();
            } else {
                $email = mysqli_real_escape_string($conn, $_POST['userEmail']);
                //   $password = md5($_POST['password']);
                $password =$_POST['password'];
            
                $sql = "SELECT customer_email, customer_pwd FROM customer WHERE customer_email = '{$email}' AND customer_pwd= '{$password}'";
            
                $result = mysqli_query($conn, $sql) or die("Query Failed.");
            
                if (mysqli_num_rows($result) > 0) {
                    $_SESSION['logged-in'] = '1';
                    header("Location: ./post.php");
                    } else {
                    echo '<div class="alert alert-danger">Username and Password are not matched.</div>';
                    }
                }
            }
    ?>
    

  </body>
</html>
