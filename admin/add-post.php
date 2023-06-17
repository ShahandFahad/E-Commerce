<?php 
    include_once('./includes/headerNav.php');
    include_once('./includes/restriction.php');
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
         .addpost{
            border: 1px solid black;
            width: 80%;
            padding: 25px;
            border-radius: 16px;
            background-color: #f1f1f1;
         }

     </style>
 </head>
<div class="content-box-post">
    
 <div class="addpost">
 <h1>Add post here</h1>

  <!-- Form -->
    <form
      action="save-post.php"
      method="POST"
      enctype="multipart/form-data"
      class="row g-3"
    >
      <div class="col-12">
        <label for="inputAddress" class="form-label">Title</label>
        <input
          name="prod-title"
          type="text"
          class="form-control"
          placeholder="Product Name..."
          required="required"
        />
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Price</label>
        <input
          name="prod-price"
          type="number"
          class="form-control"
          value=""
          required="required"
        />
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Discount</label>
        <input
          name="prod-discount"
          type="number"
          class="form-control"
          required="required"
        />
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label"
          >Description</label
        >
        <textarea
          class="form-control"
          rows="3"
          name="prod-desc"
          required="required"
        ></textarea>
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">No. of Items</label>
        <input
          type="number"
          class="form-control"
          name="noofitem"
          value=""
          required="required"
        />
      </div>
      <div class="col-md-6">
        <label for="inputState" class="form-label">Category</label>
        <select name="prod-category" value="" class="form-select">
          <option value="all" selected>All</option>
          <option value="men">Men</option>
          <option value="women">Women</option>
        </select>
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Image</label>
        <input
          type="file"
          name="prod-img"
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
        <button type="submit" name="submit" class="btn btn-primary">Add</button>
      </div>
    </form>
                  <!--/Form -->
 </div>
</div>




