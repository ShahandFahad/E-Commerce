
<head>

  <!-- TODO: Work on the image sacling -->
    <style>
      .product_image_box{
    /* border: 1px solid red; */

      width: 50%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      }
    
        .pimage{
    /* border: 6px solid red; */
      /* width: 40%;
  height: 100%;
  object-fit: scale-down; */
    width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
     border-radius: 16px;
        
      }
        #image-pr{
/*             
            height:80%;
            width:50% */
          /* width: 40%;
          height: 450px; */
        }
        .img-magnifier-container {
          position:absolute;
         /*top:8%;
         left:20%;  */
         /* width:100%;
         height:100%
               /* width: 65%;
      height: 450px; */
       }


       .img-magnifier-glass {
        position: absolute;
        left:25%;
        opacity:0.1;
        border-radius: 5%;
        cursor: none;
       /*Set the size of the magnifier glass:*/
        width: 20px;
        height: 20px;
      }
       .img-magnifier-glass:hover {
        opacity:1;
        border-radius: 10%;
        cursor: none;
       /*Set the size of the magnifier glass:*/
        width: 130px;
        height: 130px;
      }
  
    </style>

<script>
 //jquery script for image magnifier

function magnify(imgID, zoom) {
  var img, glass, w, h, bw;
  img = document.getElementById(imgID);
  /*create magnifier glass:*/
  glass = document.createElement("DIV");
  glass.setAttribute("class", "img-magnifier-glass");
  /*insert magnifier glass:*/
  img.parentElement.insertBefore(glass, img);
  /*set background properties for the magnifier glass:*/
  glass.style.backgroundImage = "url('" + img.src + "')";
  glass.style.backgroundRepeat = "no-repeat";
  glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
  bw = 3;
  w = glass.offsetWidth / 2;
  h = glass.offsetHeight / 2;
  /*execute a function when someone moves the magnifier glass over the image:*/
  glass.addEventListener("mousemove", moveMagnifier);
  img.addEventListener("mousemove", moveMagnifier);
  /*and also for touch screens:*/
  glass.addEventListener("touchmove", moveMagnifier);
  img.addEventListener("touchmove", moveMagnifier);
  function moveMagnifier(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    x = pos.x;
    y = pos.y;
    /*prevent the magnifier glass from being positioned outside the image:*/
    if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
    if (x < w / zoom) {x = w / zoom;}
    if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
    if (y < h / zoom) {y = h / zoom;}
    /*set the position of the magnifier glass:*/
    glass.style.left = (x - w) + "px";
    glass.style.top = (y - h) + "px";
    /*display what the magnifier glass "sees":*/
    glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
</script>
</head>


<?php

// $sql11 ="SELECT * FROM  products WHERE product_id='{$_GET['id']}';";
// $sql11 ="SELECT * FROM  products WHERE product_id=10";
// $result11 = $conn->query($sql11);
// $row11 = $result11->fetch_assoc();
// $conn->close();
// $product_ID = 34;
// $result11 = get_product($product_ID);
// $row11 = $result11->fetch_assoc();
// $conn->close();


?>

<div class="product_image_box">
  <!-- <div class="img-magnifier-container"> -->
    <!-- <img class="pimage" id='image-pr' src="admin/upload/<?php echo $row['product_img'] ?>"  alt="product-img"> -->
<div class="img-magnifier-container" style="width: 18rem;">
  <img   class="pimage" id='image-pr' src="admin/upload/<?php echo $row['product_img'] ?>" alt="...">
</div>
  <!-- </div> -->
</div>




<script>
/* Initiate Magnify Function
with the id of the image, and the strength of the magnifier glass:*/
magnify("image-pr", 3);
</script>

<script src="./js/increament.js"></script>