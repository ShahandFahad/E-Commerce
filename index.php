<?php
  include_once('./includes/headerNav.php');

  // Get all banner products
  $banner_products = get_banner_details();
  // Get all category bar products
  $catgeory_bar_products = get_category_bar_products();

  // Get categories
  $categories = get_categories();
  $clothes = get_clothes_category();
  $footwears = get_footwear_category();
  $jewelries = get_jewelry_category();
  $perfumes = get_perfume_category();
  $cosmetics = get_cosmetics_category();
  $glasses = get_glasses_category();
  $bags = get_bags_category();


  // Get all new arrivals
$new_arrivals1 = get_new_arrivals();
$new_arrivals2 = get_new_arrivals();

// Get trending products
$trending_products1 = get_trending_products();
$trending_products2 = get_trending_products();

// Get top rated products
$top_rated_products1 = get_top_rated_products();
$top_rated_products2 = get_top_rated_products();
?>



<div class="overlay" data-overlay></div>

<!--
    - MODAL
  -->

<!--
    - NOTIFICATION TOAST
  -->

<div class="notification-toast" data-toast>
  <button class="toast-close-btn" data-toast-close>
    <ion-icon name="close-outline"></ion-icon>
  </button>

  <div class="toast-banner">
    <img src="./admin/upload/watch-2.jpg" alt="Smart Watch" width="80" height="70" />
  </div>

  <div class="toast-detail">
    <p class="toast-message">Someone in new just bought</p>

    <p class="toast-title">Smart Watch</p>

    <p class="toast-meta"><time datetime="PT2M">2 Minutes</time> ago</p>
  </div>
</div>


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
  <!--
      - BANNER: Coursal
    -->

  <div class="banner">
    <div class="container">
      <div class="slider-container has-scrollbar">
        <!-- Display data from db in banner -->
        <?php
        while ($row = mysqli_fetch_assoc($banner_products)) {
        ?>

          <div class="slider-item">
            <img src="images/carousel/<?php
                                      echo $row['banner_image'];
                                      ?>" alt="women's latest fashion sale" class="banner-img" />

            <div class="banner-content">
              <p class="banner-subtitle">
                <?php
                echo $row['banner_subtitle'];
                ?>
              </p>

              <h2 class="banner-title">
                <?php
                echo $row['banner_title'];
                ?>
              </h2>

              <p class="banner-text">starting at &dollar;
                <b><?php echo $row['banner_items_price']; ?></b>.00
              </p>

              <a href="#" class="banner-btn">Shop now</a>
            </div>
          </div>

        <?php
        }
        ?>
        <!--  -->
      </div>
    </div>
  </div>

  <!--
      - CATEGORY: Bar 
    -->

  <div class="category">
    <div class="container">
      <div class="category-item-container has-scrollbar">
        <!--  -->
        <?php
        while ($row = mysqli_fetch_assoc($catgeory_bar_products)) {
        ?>


          <div class="category-item">
            <div class="category-img-box">
              <img src="./images/icons/<?php echo $row['category_img'] ?>" alt="category bar img" width="30" />
            </div>

            <div class="category-content-box">
              <div class="category-content-flex">
                <h3 class="category-item-title"><?php echo $row['category_title'] ?></h3>

                <p class="category-item-amount">(<?php echo $row['category_quantity'] ?>)</p>
              </div>

            <!-- updated it. set to form and will send data to search page -->
                  <form class="search-form" method="post" action="./search.php">
                    <input type="hidden" name="search" value="<?php echo $row['category_title'] ?>" />
                        <button type="submit" name="submit" class="sidebar-submenu-title">

                          <p class="category-btn">
                            Show all
                          </p>

                        </button>
                  </form>              
            </div>
          </div>
        <?php
        }
        ?>


        <!--  -->

      </div>
    </div>
  </div>

  <!--
      - PRODUCT
    -->

  <div class="product-container">
    <div class="container">
      <!--
          - SIDEBAR
        -->
      <!-- adding side bar php page -->
      <?php require_once './includes/categorysidebar.php' ?>


      <div class="product-box">
        <!--
            - PRODUCT MINIMAL
          -->

        <div class="product-minimal">
          <div class="product-showcase">
            <h2 class="title">New Arrivals</h2>

            <div class="showcase-wrapper has-scrollbar">
              <!-- new arrival container 1 -->

              <div class="showcase-container">
                <!-- get element from table with id less than 4 -->
                <?php
                $itemID;
                $counter = 0;
                while ($row1 = mysqli_fetch_assoc($new_arrivals1)) {
                  // prints 4 items and then break out
                  if ($counter == 4) {
                    break;
                  }

                ?>
                  <div class="showcase">
                    <a href="./viewdetail.php?id=<?php echo $row1['product_id'] ?>&category=<?php echo $row1['category_id'] ?>" class="showcase-img-box">
                      <img src="./admin/upload/<?php echo $row1['product_img']; ?>" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img" />
                    </a>

                    <div class="showcase-content">
                      <a href="./viewdetail.php?id=<?php echo $row1['product_id'] ?>&category=<?php echo $row1['category_id'] ?>">
                        <h4 class="showcase-title">
                          <?php echo $row1['product_title']; ?>
                        </h4>
                      </a>

                      <a href="./viewdetail.php?id=<?php echo $row1['product_id'] ?>&category=<?php echo $row1['category_id'] ?>" class="showcase-category">
                        <?php echo "New Arrival!"; ?>
                      </a>

                      <div class="price-box">
                        <p class="price">$<?php echo $row1['discounted_price']; ?></p>
                        <del>$<?php echo $row1['product_price']; ?></del>
                      </div>
                    </div>
                  </div>
                <?php
                  $itemID = $row1['product_id'];
                  $counter += 1;
                }
                ?>


              </div>
              <!--  -->
              <!-- new arrival container 2 -->
              <div class="showcase-container">
                <!-- get element from table with id greaer than 4 -->
                <?php
                // $itemID = 4;
                $counter = 0;
                while ($row2 = mysqli_fetch_assoc($new_arrivals2)) {
                  // breaks after printing 4 items
                  if ($counter == 4) {
                    break;
                  }
                  if ($row2['product_id'] > $itemID) {

                ?>
                    <div class="showcase">
                      <a href="./viewdetail.php?id=<?php echo $row2['product_id'] ?>&category=<?php echo $row2['category_id'] ?>" class="showcase-img-box">
                        <img src="./admin/upload/<?php echo $row2['product_img']; ?>" alt="men yarn fleece full-zip jacket" class="showcase-img" width="70" />
                      </a>

                      <div class="showcase-content">
                        <a href="./viewdetail.php?id=<?php echo $row2['product_id'] ?>&category=<?php echo $row2['category_id'] ?>">
                          <h4 class="showcase-title">
                            <?php echo $row2['product_title']; ?>
                          </h4>
                        </a>

                        <a href="./viewdetail.php?id=<?php echo $row2['product_id'] ?>&category=<?php echo $row2['category_id'] ?>" class="showcase-category">
                          <?php echo "New Arrival!"; ?>
                        </a>

                        <div class="price-box">
                          <p class="price">
                            $<?php echo $row2['discounted_price']; ?>
                          </p>
                          <del>
                            $<?php echo $row2['product_price']; ?>
                          </del>
                        </div>
                      </div>
                    </div>

                <?php
                    $counter += 1;
                  }
                }
                ?>

                <!--  -->
              </div>
            </div>
          </div>

          <!-- Trending Items -->
          <div class="product-showcase">
            <h2 class="title">Trending</h2>

            <div class="showcase-wrapper has-scrollbar">
              <!-- get data from trending table in db -->
              <!-- trending container 1 -->
              <div class="showcase-container">
                <!-- get element from table with id less than 4 -->
                <?php
                $itemID;
                $counter = 0;
                while ($row1 = mysqli_fetch_assoc($trending_products1)) {
                  // prints 4 items and then break out
                  if ($counter == 4) {
                    break;
                  }

                ?>
                  <div class="showcase">
                    <a href="./viewdetail.php?id=<?php echo $row1['product_id'] ?>&category=<?php echo $row1['category_id'] ?>" class="showcase-img-box">
                      <img src="./admin/upload/<?php echo $row1['product_img']; ?>" alt="Treding products image" width="70" class="showcase-img" />
                    </a>

                    <div class="showcase-content">
                      <a href="./viewdetail.php?id=<?php echo $row1['product_id'] ?>&category=<?php echo $row1['category_id'] ?>">
                        <h4 class="showcase-title">
                          <?php echo $row1['product_title']; ?>
                        </h4>
                      </a>

                      <a href="./viewdetail.php?id=<?php echo $row1['product_id'] ?>&category=<?php echo $row1['category_id'] ?>" class="showcase-category">
                        <?php echo "Trending Now!"; ?>
                      </a>

                      <div class="price-box">
                        <p class="price">$<?php echo $row1['discounted_price']; ?></p>
                        <del>$<?php echo $row1['product_price']; ?></del>
                      </div>
                    </div>
                  </div>
                <?php
                  $itemID = $row1['product_id'];
                  $counter += 1;
                }
                ?>


              </div>
              <!-- trending container 2 -->
              <div class="showcase-container">
                <!-- get element from table with id greaer than 4 -->
                <?php
                // $itemID = 4;
                $counter = 0;
                while ($row2 = mysqli_fetch_assoc($trending_products2)) {
                  // breaks after printing 4 items
                  if ($counter == 4) {
                    break;
                  }
                  if ($row2['product_id'] > $itemID) {

                ?>
                    <div class="showcase">
                      <a href="./viewdetail.php?id=<?php echo $row2['product_id'] ?>&category=<?php echo $row2['category_id'] ?>" class="showcase-img-box">
                        <img src="./admin/upload/<?php echo $row2['product_img']; ?>" alt="trending product image" class="showcase-img" width="70" />
                      </a>

                      <div class="showcase-content">
                        <a href="./viewdetail.php?id=<?php echo $row2['product_id'] ?>&category=<?php echo $row2['category_id'] ?>">
                          <h4 class="showcase-title">
                            <?php echo $row2['product_title']; ?>
                          </h4>
                        </a>

                        <a href="./viewdetail.php?id=<?php echo $row2['product_id'] ?>&category=<?php echo $row2['category_id'] ?>" class="showcase-category">
                          <?php echo "Trending Now!"; ?>
                        </a>

                        <div class="price-box">
                          <p class="price">
                            $<?php echo $row2['discounted_price']; ?>
                          </p>
                          <del>
                            $<?php echo $row2['product_price']; ?>
                          </del>
                        </div>
                      </div>
                    </div>

                <?php
                    $counter += 1;
                  }
                }
                ?>

                <!--  -->
              </div>
              <!--  -->
            </div>
          </div>

          <div class="product-showcase">
            <h2 class="title">Top Rated</h2>
            <!-- Load data from top rated table -->
            <div class="showcase-wrapper has-scrollbar">
              <!-- top rated container 1 -->
              <div class="showcase-container">
                <!-- get element from table with id less than 4 -->
                <?php
                $itemID;
                $counter = 0;
                while ($row1 = mysqli_fetch_assoc($top_rated_products1)) {
                  // prints 4 items and then break out
                  if ($counter == 4) {
                    break;
                  }

                ?>
                  <div class="showcase">
                    <a href="./viewdetail.php?id=<?php echo $row1['product_id'] ?>&category=<?php echo $row1['category_id'] ?>" class="showcase-img-box">
                      <img src="./admin/upload/<?php echo $row1['product_img']; ?>" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img" />
                    </a>

                    <div class="showcase-content">
                      <a href="./viewdetail.php?id=<?php echo $row1['product_id'] ?>&category=<?php echo $row1['category_id'] ?>">
                        <h4 class="showcase-title">
                          <?php echo $row1['product_title']; ?>
                        </h4>
                      </a>

                      <a href="./viewdetail.php?id=<?php echo $row1['product_id'] ?>&category=<?php echo $row1['category_id'] ?>" class="showcase-category">
                        <?php echo "Top Rated!"; ?>
                      </a>

                      <div class="price-box">
                        <p class="price">$<?php echo $row1['discounted_price']; ?></p>
                        <del>$<?php echo $row1['product_price']; ?></del>
                      </div>
                    </div>
                  </div>
                <?php
                  $itemID = $row1['product_id'];
                  $counter += 1;
                }
                ?>


              </div>
              <!-- top rated conatiner 2 -->
              <div class="showcase-container">
                <!-- get element from table with id greaer than 4 -->
                <?php
                // $itemID = 4;
                $counter = 0;
                while ($row2 = mysqli_fetch_assoc($top_rated_products2)) {
                  // breaks after printing 4 items
                  if ($counter == 4) {
                    break;
                  }
                  if ($row2['product_id'] > $itemID) {

                ?>
                    <div class="showcase">
                      <a href="./viewdetail.php?id=<?php echo $row2['product_id'] ?>&category=<?php echo $row2['category_id'] ?>" class="showcase-img-box">
                        <img src="./admin/upload/<?php echo $row2['product_img']; ?>" alt="trending product image" class="showcase-img" width="70" />
                      </a>

                      <div class="showcase-content">
                        <a href="./viewdetail.php?id=<?php echo $row2['product_id'] ?>&category=<?php echo $row2['category_id'] ?>">
                          <h4 class="showcase-title">
                            <?php echo $row2['product_title']; ?>
                          </h4>
                        </a>

                        <a href="./viewdetail.php?id=<?php echo $row2['product_id'] ?>&category=<?php echo $row2['category_id'] ?>" class="showcase-category">
                          <?php echo "Top Rated!"; ?>
                        </a>

                        <div class="price-box">
                          <p class="price">
                            $<?php echo $row2['discounted_price']; ?>
                          </p>
                          <del>
                            $<?php echo $row2['product_price']; ?>
                          </del>
                        </div>
                      </div>
                    </div>

                <?php
                    $counter += 1;
                  }
                }
                ?>

                <!--  -->
              </div>
              <!--  -->
            </div>
          </div>
        </div>

        <!--
            - PRODUCT FEATURED
          -->

<?php require_once './includes/dealoftheday.php' ?>


        <!--
            - PRODUCT GRID
          -->

        <div class="product-main">
          <h2 class="title">New Products</h2>

          <div class="product-grid">

            <!-- display data from table new products -->

            <?php
//this will dynamically fetch data from a database and show all the post from mysql
//and this will auto create product div as per no of post available in database
/* define how much data to show in a page from database*/
$limit = 8;
if(isset($_GET['page'])){
  $page = $_GET['page'];
}else{
  $page = 1;
}
//define from which row to start extracting data from database
$offset = ($page - 1) * $limit;

$product_left = array();


            $new_product_counter = 1;

            $new_products_result = get_new_products($offset, $limit);
    if($new_products_result->num_rows > 0){

            while ($row = mysqli_fetch_assoc($new_products_result)) {

            ?>


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
                  <a href="./viewdetail.php?id=<?php
                                                echo $row['product_id']
                                                ?>&category=<?php
                                                            echo $row['category_id']
                                                            ?>" class="showcase-category">
                    <?php echo $row['product_title'] ?>
                  </a>

                  <a href="./viewdetail.php?id=<?php
                                                echo $row['product_id']
                                                ?>&category=<?php
                                                            echo $row['category_id']
                                                            ?>">
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
    }else { 
      echo "No Results Found"; }
             $conn->close(); 

            ?>
            <!--  -->
          </div>
        </div>
        <!-- pagination start -->
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
    <nav class="main-pagination" style="margin-left: 10px;">
      <ul class="pagination-ul">


        <?php 
            for($i=1; $i<=$total_page; $i++){
                //important this is for active effects that denote in which page you are in current position
                if ($page==$i) {
                    $active = "page-active";
                } else {
                    $active = "";
                }
        ?>
        <li class="page-item-number <?php echo $active; // page number ?>">
            <a class="page-number-link " href="index.php?page=<?php echo $i; // page number ?>">
            <?php echo $i; // page number ?>
            </a>
        </li>
        <?php }} ?>

      </ul>
    </nav>
  <!-- pagination end -->
      </div>
    </div>
  </div>

  <!--
      - TESTIMONIALS, CTA & SERVICE
    -->

  <div>
    <div class="container">
      <div class="testimonials-box">
        <!--
            - TESTIMONIALS
          -->

        <div class="testimonial">
          <h2 class="title">testimonial</h2>

          <div class="testimonial-card">
            <img src="./images/testimonial-1 copy.jpg" alt="alan doe" class="testimonial-banner" width="80" height="80" />

            <p class="testimonial-name">IQSF</p>

            <p class="testimonial-title">CEO & Founder Invision</p>

            <img src="./images/icons/quotes.svg" alt="quotation" class="quotation-img" width="26" />

            <p class="testimonial-desc">
            You guys are the best! Keep up the great work!
            </p>
          </div>
        </div>

        <!--
            - CTA
          -->

        <div class="cta-container">
          <!-- -->
          <img src="./images/cta-banner-sale.jpg" alt="summer collection" class="cta-banner" />

          <a href="#" class="cta-content">
            <p class="discount">25% Discount</p>

            <h2 class="cta-title">Collection</h2>

            <p class="cta-text">Starting $20</p>

            <button class="cta-btn">Shop now</button>
          </a>
        </div>

        <!--
            - SERVICE
          -->

        <div class="service">
          <h2 class="title">Our Services</h2>

          <div class="service-container">
            <a href="#" class="service-item">
              <div class="service-icon">
                <ion-icon name="boat-outline"></ion-icon>
              </div>

              <div class="service-content">
                <h3 class="service-title">Worldwide Delivery</h3>
                <p class="service-desc">For Order Over $100</p>
              </div>
            </a>

            <a href="#" class="service-item">
              <div class="service-icon">
                <ion-icon name="rocket-outline"></ion-icon>
              </div>

              <div class="service-content">
                <h3 class="service-title">Next Day delivery</h3>
                <p class="service-desc">UK Orders Only</p>
              </div>
            </a>

            <a href="#" class="service-item">
              <div class="service-icon">
                <ion-icon name="call-outline"></ion-icon>
              </div>

              <div class="service-content">
                <h3 class="service-title">Best Online Support</h3>
                <p class="service-desc">Hours: 8AM - 11PM</p>
              </div>
            </a>

            <a href="#" class="service-item">
              <div class="service-icon">
                <ion-icon name="arrow-undo-outline"></ion-icon>
              </div>

              <div class="service-content">
                <h3 class="service-title">Return Policy</h3>
                <p class="service-desc">Easy & Free Return</p>
              </div>
            </a>

            <a href="#" class="service-item">
              <div class="service-icon">
                <ion-icon name="ticket-outline"></ion-icon>
              </div>

              <div class="service-content">
                <h3 class="service-title">30% money back</h3>
                <p class="service-desc">For Order Over $100</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--
      - BLOG
    -->
    <!-- image path: ./images/blog/ -->

  <div class="blog">
    <div class="container">
      <div class="blog-container has-scrollbar">
        <div class="blog-card">
          <a href="#">
            <img src="./images/blog/blog-1.jpg" alt="Clothes Retail KPIs 2021 Guide for Clothes Executives" width="300" class="blog-banner" />
          </a>

          <div class="blog-content">
            <a href="#" class="blog-category">Fashion</a>

            <a href="#">
              <h3 class="blog-title">
                Clothes Retail KPIs 2021 Guide for Clothes Executives.
              </h3>
            </a>

            <p class="blog-meta">
              By <cite>Mr Admin</cite> /
              <time datetime="2022-04-06">Apr 06, 2022</time>
            </p>
          </div>
        </div>

        <div class="blog-card">
          <a href="#">
            <img src="./images/blog/blog-2.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle." class="blog-banner" width="300" />
          </a>

          <div class="blog-content">
            <a href="#" class="blog-category">Clothes</a>

            <h3>
              <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
            </h3>

            <p class="blog-meta">
              By <cite>Mr Robin</cite> /
              <time datetime="2022-01-18">Jan 18, 2022</time>
            </p>
          </div>
        </div>

        <div class="blog-card">
          <a href="#">
            <img src="./images/blog/blog-3.jpg" alt="EBT vendors: Claim Your Share of SNAP Online Revenue." class="blog-banner" width="300" />
          </a>

          <div class="blog-content">
            <a href="#" class="blog-category">Shoes</a>

            <h3>
              <a href="#" class="blog-title">EBT vendors: Claim Your Share of SNAP Online Revenue.</a>
            </h3>

            <p class="blog-meta">
              By <cite>Mr Selsa</cite> /
              <time datetime="2022-02-10">Feb 10, 2022</time>
            </p>
          </div>
        </div>

        <div class="blog-card">
          <a href="#">
            <img src="./images/blog/blog-4.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle." class="blog-banner" width="300" />
          </a>

          <div class="blog-content">
            <a href="#" class="blog-category">Electronics</a>

            <h3>
              <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
            </h3>

            <p class="blog-meta">
              By <cite>Mr Pawar</cite> /
              <time datetime="2022-03-15">Mar 15, 2022</time>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php require_once './includes/footer.php'; ?>