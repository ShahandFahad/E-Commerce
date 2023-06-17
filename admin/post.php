<?php 
    include_once('./includes/headerNav.php');
    include_once('./includes/restriction.php');
    if(!(isset($_SESSION['logged-in']))){
      header("Location:login.php?unauthorizedAccess");
    }
 ?>

<!-- <h4>All Posts</h4>
<h5><a href="add-post.php">Add Post</a></h5> -->

    <div class="d-flex" style="justify-content: space-between; padding: 18px">
      <h1>PRODUCTS</h1>
      <button type="button" class="btn btn-primary btn-lg">
        <a class="btn" href="add-post.php">ADD Products</a>
      </button>
    </div>
<hr>

<?php
                  include "includes/config.php"; 
                  /* define how much data to show in a page from database*/
                  $limit = 10;
                  if(isset($_GET['page'])){
                    $page = $_GET['page'];
                    switch($page){
                      case 1: $sn = 0; break;
                      case 2: $sn = 4;break;
                      case 3: $sn = 8; break;
                      case 4: $sn = 12; break;
                      case 5: $sn = 16; break;
                      case 6: $sn = 20; break;
                    }
                  }else{
                    $page = 1;
                    switch($page){
                      case 1: $sn = 0; break;
                      case 2: $sn = 4;break;
                      case 3: $sn = 8; break;
                      case 4: $sn = 12; break;
                      case 5: $sn = 16; break;
                      case 6: $sn = 20; break;
                    }
                  }
                  //define from which row to start extracting data from database
                  $offset = ($page - 1) * $limit; //remember offset formula this is why we need page var here

                  if($_SESSION["customer_role"] == 'admin'){
                    /* select query of post table for admin user */
                    //this will fetch product data in descending order with applied limitation per page
                    $sql = "SELECT * FROM products
                            ORDER BY products.product_id DESC LIMIT {$offset},{$limit}";

                  }elseif($_SESSION["user_role"] == 'normal'){
                    /* select query of post table for normal user */
                    $sql = "SELECT * FROM products WHERE product_author='{$_SESSION['customer_name']}'
                            ORDER BY products.product_id DESC LIMIT {$offset},{$limit}";
                  }

                  $result = $conn->query($sql) or die("Query Failed.");
                  //means if no of rows found on the basis of query is >0 then goes inside if
                  if ($result->num_rows > 0) {
                ?>

<div class="table-cont">
<table class="table">
    <!-- tablehead html -->
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Title</th>
      <th scope="col">Category</th>
      <th scope="col">Date</th>
      <th scope="col">Author</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
 <!-- tablehead html end -->

 <!-- tabledata body html -->
  <tbody class="table-group-divider">
     <!-- data row1 -->
<?php
  // output data of each row
  while($row = $result->fetch_assoc()) { //this will run for every row at a time and run until row finished
  $sn = $sn+1;
?>
    <tr>
      <th scope="row"><?php echo $sn?></th>
      <td><?php echo $row["product_title"] ?></td>
      <td><?php echo $row["product_catag"] ?></td>
      <td><?php echo $row["product_date"] ?></td>
      <td><?php echo  $row["product_author"] ?></td>
      <td>
        <a class="fn_link" href="update-post.php?id=<?php echo $row["product_id"] ?>">
        <i class='fa fa-edit'></i>
        </a>
      </td>
      <td>
        <a class="fn_link" href="remove-post.php?id=<?php echo $row["product_id"] ?>">
        <i class='fa fa-trash'></i>
        </a>
      </td>
    </tr>

<?php 
  }} else { echo "0 results"; }
  $conn->close(); 
?>
</tbody>
<!-- tabledata body end -->

</table>
</div>
<!--Pagination-->
<?php
    include "includes/config.php"; 
    // Pagination btn using php with active effects 

    $sql1 = "SELECT * FROM products";
    $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");

    if(mysqli_num_rows($result1) > 0){
        $total_products = mysqli_num_rows($result1);
        $total_page = ceil($total_products / $limit);

?>
    <nav aria-label="..." style="margin-left: 10px;">
      <ul class="pagination pagination-sm">


        <?php 
            for($i=1; $i<=$total_page; $i++){
                //important this is for active effects that denote in which page you are in current position
                if ($page==$i) {
                    $active = "active";
                } else {
                    $active = "";
                }
        ?>
        <li class="page-item">
            <a class="page-link <?php echo $active; // page number ?>" href="post.php?page=<?php echo $i; // page number ?>">
            <?php echo $i; // page number ?>
            </a>
        </li>
        <?php }} ?>

      </ul>
    </nav>


