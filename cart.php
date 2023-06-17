<?php include_once('./includes/headerNav.php'); ?>

<div class="overlay" data-overlay></div>
<!--
    - HEADER
  -->

<header>
  <!-- top head action, search etc in php -->
  <!-- inc/topheadactions.php -->
  <?php require_once './includes/topheadactions.php'; ?>
  <!-- desktop navigation -->
  <!-- inc/desktopnav.php -->
  <?php require_once './includes/desktopnav.php' ?>
  <!-- mobile nav in php -->
  <!-- inc/mobilenav.php -->
  <?php require_once './includes/mobilenav.php'; ?>

<!-- style -->
    <style>
      :root{
         --main-maroon: #CE5959;
        --deep-maroon: #89375F;
      }
      td,th{
        text-align:center;
      }
      td img{
        margin-left:auto;
        margin-right:auto;
      }
      .delete-icon{
        color:var(--bittersweet);     
        cursor: pointer; 
      }
  .child-register-btn {
    margin-top:20px;
    width:85%;
    margin-left:auto;
    margin-right:auto;
}
.child-register-btn p {
  width: 350px;
  height: 60px;
  background-color: var( --main-maroon);
  box-shadow: 0px 0px 4px #615f5f;
  line-height: 60px;
  color: #FFFFFF;
  margin-left: auto;
  border-radius: 8px;
  text-align: center;
  cursor: pointer;
  font-size: 19px;
  font-weight: 600;
}
@media screen and (max-width: 794px) {
 
  .child-register-btn {
    margin-top:30px;
  
}
 .child-register-btn p {
   width: 100%;
 }
}

    </style>
</header>





<!--
    - MAIN
  -->

<main>

    <div class="product-container">
        <div class="container">
            <!--
                - SIDEBAR
           -->


           <table>
  <tr>
    <th>Image</th>
    <th>Name</th>
    <th>Price</th>
    <th>Quantity</th>
  </tr>
  <?php

  if(isset($_SESSION['mycart']))
  {
    foreach($_SESSION['mycart'] as $value)
    {
  
  
    ?>
    <tr>
      <td>
      <img class="cart-product-image" src="./admin/upload/<?php echo $value['product_img'] ?>"  alt="">
      </td>
      <td><?php echo  $value['name']; ?></td>
      <td><?php echo  "$".$value['price']; ?></td>
      <td ><?php echo $value['product_qty']; ?></td>
    </tr>
  
    <?php
    }}else
    {

    
  
    ?>
        <tr >
      <td colspan='4' >No item available in cart</td>
    </tr>

    <?php
    }

    ?>

  
 

</table>


     
     </div>

           
        </div>
    </div>

    <?php

if(isset($_SESSION['mycart']))
            { 
   ?>
    <div class="child-register-btn">
                               
                               <p > <a href="checkout.php" style="color:#FFFFFF">Proceed To CheckOut</a>
                                </p>
                           </div>

                           <?php
}

                           ?>
</main>


<?php require_once './includes/footer.php'; ?>