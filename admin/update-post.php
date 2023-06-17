<?php 
    include_once('./includes/headerNav.php');
    include_once('./includes/restriction.php');

    //this will provide previous user value before updating 
    include "includes/config.php";
    $sql = "SELECT * FROM products where product_id={$_GET['id']}";
    $result = $conn->query($sql);
    // output data of each row
    $row = $result->fetch_assoc();
    $_SESSION['previous_title'] = $row['product_title'];
    $_SESSION['previous_desc'] = $row['product_desc'];
    $_SESSION['previous_catag'] = $row['product_catag'];
    $_SESSION['previous_price'] = $row['product_price'];
    $_SESSION['previous_discount'] = $row['discounted_price'];
    $_SESSION['previous_no'] = $row['product_left'];
    $_SESSION['previous_img'] = $row['product_img'];
    $conn->close();
 ?>
 <head>
     <style>
        .content-box-post {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
         .update{
            border: 1px solid black;
            width: 80%;
            padding: 25px;
            border-radius: 16px;
            background-color: #f1f1f1;
         }
     </style>
 </head>
<div class="content-box-post">


 <div class="update">
     <h5>Edit post here</h5>
     <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class="row g-3">
      <div class="col-12">
        <label for="inputAddress" class="form-label">Title</label>
        <input
          class="form-control"
          type="text"
          name="title"
          value="<?php echo $_SESSION['previous_title'] ?>"
        />
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Price</label>
        <input
          class="form-control"
          type="number"
          name="price"
          value="<?php echo $_SESSION['previous_price'] ?>"
        />
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Discount</label>
        <input
          class="form-control"
          type="number"
          name="discount"
          value="<?php echo $_SESSION['previous_discount'] ?>"
        />
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label"
          >Description</label
        >
        <textarea class="form-control" rows="3" name="desc">
        <?php echo $_SESSION['previous_desc'] ?>
      </textarea
        >
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">No. of Items</label>
        <input
          class="form-control"
          type="number"
          name="noofitem"
          value="<?php echo $_SESSION['previous_no'] ?>"
        />
      </div>
      <div class="col-md-6">
        <label for="inputState" class="form-label">Category</label>
        <select
          name="catag"
          value="<?php echo $_SESSION['previous_catag'] ?>"
          class="form-select"
        >
          <option value="all" selected>All</option>
          <option value="men">Men</option>
          <option value="women">Women</option>
        </select>
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Image</label>
        <input
          type="file"
          name="newimg"
          class="form-control"
          required="required"
        />
      </div>
      <div class="form-check">
        <input
          class="form-check-input"
          type="radio"
          name="flexRadioDefault"
          id="flexRadioDefault2"
        />
        <label class="form-check-label" for="flexRadioDefault2">
          Available
        </label>
      </div>
      <div class="col-12">
        <button type="submit" name="update" class="btn btn-primary">
          Update
        </button>
      </div>
    </form>
 </div>

</div>


<?php
   if(isset($_POST['update'])){
    //below sql will update user details inside sql table when update is clicked
    include "includes/config.php";
    $sql1 = "UPDATE products
             SET  product_title= '{$_POST['title']}' ,
                  product_catag= '{$_POST['catag']}' ,
                  product_price= '{$_POST['price']}' ,
                  discounted_price= '{$_POST['discount']}',
                  product_desc= '{$_POST['desc']}',
                  product_img= '{$_POST['newimg']}',
                  product_left= '{$_POST['noofitem']}' 
             WHERE product_id={$_GET['id']} ";
    $conn->query($sql1);   
    
    $conn->close();
    header("Location:http://localhost/electronics_shop/admin/post.php?succesfullyUpdated");
    
   }
?>