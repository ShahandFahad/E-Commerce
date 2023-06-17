<!--  -->
<?php include_once('./includes/headerNav.php'); ?>
<?php require_once './includes/topheadactions.php'; ?>
<?php require_once './includes/mobilenav.php'; ?>

<?php
// work on getting string with spaces from url
$category_ID = "";
if (isset($_GET['category'])) {
  $category_ID = $_GET['category'];
}


$items = get_items_by_category_items($category_ID);

?>

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
      <!-- CATEGORY SIDE BAR MOBILE MENU -->
    <?php require_once 'includes/categorysidebar.php' ?>

      <!-- ############################# -->

      <div class="product-box">
        <!-- get id and url for each category and display its dat from table her in this secton -->
        <div class="product-main">


          <div class="product-grid">

            <!-- display data from table new products -->

            <?php
            $new_product_counter = 1;
            while ($row = mysqli_fetch_assoc($items)) {

            ?>
              <!-- display all category products -->
              <div class="showcase">
                <div class="showcase-banner">
                  <img src="./admin/upload/<?php
                                                      echo $row['product_img']
                                                      ?>" alt="Mens Winter Leathers Jackets" width="300" class="product-img default" />
                  <img src="./admin/upload/<?php
                                                      echo $row['product_img']
                                                      ?>" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover" />
                  <!-- Applying coditions on dicount and sale tags  -->
                  <!--  -->
                  <?php
                  if ($new_product_counter == 1) {
                  ?>
                    <p class="showcase-badge">15%</p>
                  <?php
                  }
                  ?>
                  <!--  -->
                  <?php
                  if ($new_product_counter == 3) {
                  ?>
                    <p class="showcase-badge angle black">sale</p>
                  <?php
                  }
                  ?>

                </div>

                <div class="showcase-content">
                  <a href="./viewdetail.php?id=<?php echo $row['product_id'] ?>&category=<?php $row['category_id'] ?>" class="showcase-category">
                    <?php echo $row['product_title'] ?>
                  </a>

                  <a href="./viewdetail.php?id=<?php echo $row['product_id'] ?>&category=<?php $row['category_id'] ?>">
                    <h3 class="showcase-title">
                      <?php echo $row['product_desc'] ?>
                    </h3>
                  </a>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">
                      $<?php echo $row['discounted_price'] ?>
                    </p>
                    <del>
                      $<?php echo $row['product_price'] ?>
                    </del>
                  </div>
                </div>
              </div>

            <?php
              $new_product_counter = $new_product_counter + 1;
            }

            ?>
            <!--  -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--
      - TESTIMONIALS, CTA & SERVICE
    -->

  <!--
      - BLOG
    -->

</main>

<?php require_once './includes/footer.php'; ?>
