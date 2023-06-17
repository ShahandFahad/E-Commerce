<?php 
    include_once('./includes/headerNav.php');
    include_once('./includes/restriction.php');
    if(!(isset($_SESSION['logged-in']))){
        header("Location:login.php?unauthorizedAccess");
      }
 ?>
<head>
    <style>
        .content-box{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }
        .settings {
            border: 1px solid black;
            display: flex;
            flex-direction: column;
            gap: 25px;

            width: 60%;
            padding: 25px;

            border-radius: 16px;
            background-color: #f1f1f1;
        }

    </style>
</head>

<div class="content-box">
    
<div class="settings">
<br>

             <?php
                  include "includes/config.php";

                  $sql = "SELECT * FROM settings";

                  $result = mysqli_query($conn, $sql) or die("Query Failed.");
                  if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)) {
                ?>
 <!-- Form -->
    <form
      class="row g-3"
      action="save-settings.php"
      method="POST"
      enctype="multipart/form-data"
    >
      <div class="col-12">
        <img
          src="upload/<?php echo $row['website_logo']; ?>"
        />
        <br>
        <br>
        <label for="inputAddress" class="form-label">Website Logo</label>
        <input
          type="hidden"
          name="old_logo"
          value="<?php echo $row['website_logo']; ?>"
          class="form-control"
        />
        <input type="file" class="form-control" name="logo" />
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Website Name</label>
        <input
          type="text"
          name="website_name"
          class="form-control"
          required
          value="<?php echo $row['website_name']; ?>"
        />
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label"
          >Footer Description</label
        >
        <input
          type="text"
          name="footer_desc"
          class="form-control"
          required
          value="<?php echo $row['website_footer'];?>"
        />
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
                  <!--/Form -->
                  <?php
                      }
                    }
                  ?>
</div>
</div>

