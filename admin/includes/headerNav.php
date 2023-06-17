<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Panel</title>
    <!-- <link rel="stylesheet" href="../css/style.php"> -->
    <!--Bootstrap css link-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <!--Bootstrap js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--fontawesome link--> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
        * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }
      .text-white > h6:hover {
        color: #f2f2f2;
      }
</style>
</head>
<body>

    <nav
      class="navbar navbar-expand-lg bg-body-tertiary bg-primary"
      style="text-transform: uppercase"
    >
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="../index.php">
          <h2>Store</h2>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a
                class="nav-link active text-white"
                aria-current="page"
                href="post.php"
              >
                <h6>Admin Panel</h6>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" href="post.php">
                <h6>Post</h6>
              </a>
            </li>
            <li class="nav- text-white">
              <a class="nav-link active text-white" href="catagory.php">
                <h6>Catagory</h6>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" href="users.php">
                <h6>Users</h6>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" href="settings.php">
                <h6>Setting</h6>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" href="logout.php?">
                <h6>Logout</h6>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</body>
</html>