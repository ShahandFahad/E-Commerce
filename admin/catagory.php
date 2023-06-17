<?php 
    include_once('./includes/headerNav.php');
    include_once('./includes/restriction.php');
 ?>
    <h1>PRODUCT CATEGORIES</h1>
<hr>


<div class="table-cont">
    <table class="table">

  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Category</th>
      <th scope="col">No. of Posts</th>
    </tr>
  </thead>

  <tbody class="table-group-divider">

<?php
  include "includes/config.php";

  // todo: work with those categories catagory
$catagory_list = ['men', 'women', 'kids', 'electronics', 'home', 'sports', 'beauty', 'furniture', 'books', 'stationary', 'grocery', 'other'];

for($i=0; $i<sizeof($catagory_list); $i++){
    $sn = $i+1;
    $catagory = $catagory_list[$i];
    $sql = "SELECT * FROM products WHERE product_catag= '{$catagory}' ";
    $result = $conn->query($sql);
    $total_post = $result->num_rows;
    
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
      <th scope="row"><?php echo $sn ?></th>
      <td><?php echo $row["product_catag"] ?></td>
      <td><?php echo $total_post?></td>    
</tr>
   <?php break; ?>
<?php } }//loop end 
?>

  </tbody>
</table>
</div>
<br>

