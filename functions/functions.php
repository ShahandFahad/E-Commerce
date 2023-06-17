<?php
    require_once './includes/config.php';

    // get banner products and details
    function get_banner_details(){
        global $conn;
        $query = "SELECT * FROM banner WHERE banner.banner_status = 1";


        return $result = mysqli_query($conn, $query);
    }


    // get top rated products
    function get_category_bar_products(){
        global $conn;
        $query = "SELECT * FROM category_bar WHERE category_bar.category_status = 1";

        return $result = mysqli_query($conn, $query);
    }


    // get categories 
    function get_categories(){
        global $conn;
        $query = "SELECT * FROM category WHERE category.status = 1";

        return $result = mysqli_query($conn, $query);
    }
    
    // get clothes category
    function get_clothes_category(){
        global $conn;
        $query = "SELECT * FROM clothes WHERE clothes.coloth_category_status = 1";

        return $result = mysqli_query($conn, $query);
    }
    // get footwear category
    function get_footwear_category(){
        global $conn;
        $query = "SELECT * FROM footwear WHERE footwear.footwear_category_status = 1";

        return $result = mysqli_query($conn, $query);
    }
    // get jewelry category
    function get_jewelry_category(){
        global $conn;
        $query = "SELECT * FROM jewelry WHERE jewelry.jewelry_category_status = 1";

        return $result = mysqli_query($conn, $query);
    }
    // get perfume category
    function get_perfume_category(){
        global $conn;
        $query = "SELECT * FROM perfume WHERE perfume.perfume_category_status = 1";

        return $result = mysqli_query($conn, $query);
    }
    // get cosmetics category
    function get_cosmetics_category(){
        global $conn;
        $query = "SELECT * FROM cosmetics WHERE cosmetics.cosmetics_category_status = 1";

        return $result = mysqli_query($conn, $query);
    }
    // get glasses category
    function get_glasses_category(){
        global $conn;
        $query = "SELECT * FROM glasses WHERE glasses.glasses_category_status = 1";

        return $result = mysqli_query($conn, $query);
    }
    // get bags category
    function get_bags_category(){
        global $conn;
        $query = "SELECT * FROM bags WHERE bags.bags_category_status = 1";

        return $result = mysqli_query($conn, $query);
    }


    // get best sellers form product table
    function get_best_sellers(){
        // SELECT * FROM products ORDER BY products
        global $conn;
        // $query = "SELECT products.product_id, products.product_title, products.category_id, products.product_price, products.product_price, products.product_img FROM products
        // LEFT JOIN section
        // ON products.section_id = section.id
        // WHERE section.id = 6 AND section.status = 1";
        $query = "SELECT * FROM products LIMIT 4;";
        

        return $result = mysqli_query($conn, $query);
    }


    // get new sellers
    function get_new_arrivals(){
        global $conn;
        $query = "SELECT * FROM products LIMIT 8 OFFSET 0;";

        return $result = mysqli_query($conn, $query);
    }


    // get trending products
    function get_trending_products(){
//  SELECT *
// FROM your_table_name
// LIMIT (m - n + 1) OFFSET (n - 1);
// For example, if you want to select rows 3 to 7 from a table, you would replace (n - 1) with (3 - 1) and (m - n + 1) with (7 - 3 + 1). This would result in OFFSET 2 LIMIT 5. This query will retrieve the rows within the specified range from the table.

        global $conn;
        $query = "SELECT * FROM products LIMIT 8 OFFSET 8;";

        return $result = mysqli_query($conn, $query);
    }

    // get top rated products
    function get_top_rated_products(){
        global $conn;
        $query = "SELECT * FROM products LIMIT 8 OFFSET 16;";

        return $result = mysqli_query($conn, $query);
    }

    // get deal of the day
    function get_deal_of_day(){
        global $conn;
        $query = "SELECT * FROM deal_of_the_day WHERE deal_of_the_day.deal_status = 1";
        

        return $result = mysqli_query($conn, $query);
    }


    function get_new_products($offset, $limit){
        // "SELECT * FROM products ORDER BY products.product_id DESC LIMIT {$offset},{$limit}";
        global $conn;
        $query = "SELECT * FROM products ORDER BY products.product_id DESC LIMIT {$offset},{$limit}";


        return $result = mysqli_query($conn, $query);
    }
    

    function display_electronic_category(){
        global $connect;
        $query = "SELECT * FROM category_electronics WHERE category_electronics.status = 1";

        
        return $result = mysqli_query($connect, $query);
    }

    // get product through id from product table 
    function get_product($id){
        global $conn;
        $query = "SELECT * FROM products WHERE products.product_id = $id";
        return $result = mysqli_query($conn, $query);
    }

        // get specific category
    function get_items_by_category_items($category){
        global $conn;
        $query = "SELECT * FROM products WHERE products.product_catag = '$category' AND products.status = 1";

        return $result = mysqli_query($conn, $query);
    }
?>