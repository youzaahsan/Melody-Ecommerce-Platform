<?php
 include_once("./components/header.php");
 include_once("../config/connection.php");
?>

    <!-- partial -->
   
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Categories
            </h3>
          </div>
          <div class="row grid-margin">
               <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Basic form elements</h4>
                  <p class="card-description">
                    Basic form elements
                  </p>
                  <form class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="title">title</label>
                      <input type="text" required class="form-control" name="title" id="title" placeholder="enter product details">
                    </div>
                    <div class="form-group">
                      <label for="price">price</label>
                      <input type="price" required class="form-control" name="price" id="title" placeholder="enter product price">
                    </div>
                    <div class="form-group">
                      <label for="stock">stock</label>
                      <input type="number" required class="form-control" name="stock" id="stock" placeholder="enter product stock">
                    </div>
                     <div class="form-group">
                      <label for="image">image</label>
                      <input type="text" required class="form-control" name="image" id="image" placeholder="enter product image">
                    </div>
                     </div>
                     <div class="form-group">
                      <label for="description">description</label>
                      <input type="text" required name="description" class="form-control" id="description" placeholder="Enter product description">
                    </div>
                    <div class="form-group">
                      <label for="cat-id">category</label>
                        <select class="form-control" name="cat_id" id="exampleSelectGender">
                          <option value="1">Bed</option>
                           <option value="2">Wardrobe</option>
                           <option value="2">Dressing Table</option>
                          </select>
                     <button type="submit" class="btn btn-primary mr-2 " name="addproduct">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
              </div>
            </div>
          </div>
          </div>
    
        
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       <?php
include_once("./components/footer.php");
if (isset($_POST['addproduct'])){
    $title=$_POST['title'];
    $price=$_POST['price'];
    $stock=$_POST['stock'];
    $image=$_POST['image'];
    $cat_id=$_POST['cat_id'];
    $description=$_POST['description'];

    $add="insert into products (`title`, `description`, `price`, `stock`, `image`, `cat_id`) VALUES
     ('$title','$description','$price','$stock','$image','$cat_id')";
$result=mysqli_query($conn,$add);
if($result){
    echo"<script>alert('product added successfully')window.location.href='./products.php'</script>";
}else{
    echo"<script>alert('failed to add product')</script>";
}
       


       }