<?php
 include_once("./components/header.php");
 include_once("../config/connection.php");
 ?>

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Dashboard
            </h3>
          </div>
          <div class="row grid-margin">
            <div class="card">
            <div class="card-body">
              <h4 class="card-title">Data table</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>product #</th>
                            <th>tital On</th>
                            <th>description</th>
                            <th>price</th>
                            <th>stock Price</th>
                            <th> image</th>
                            <th>category</th>
                            <th>created at</th>
                            <th>action</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php

                      $getproducts ="SELECT * FROM `products` as p
                      INNER JOIN `category` as c
                      ON p.cat_id = c.cat_id; ";

                      $result = mysqli_query($conn,$getproducts);

                      if(mysqli_num_rows($result) > 0 ){

                        while ( $row = mysqli_fetch_assoc ($result)){
                             ?>
                      

                        <tr>
                            <td> <?php echo $row["product_id"]?></td>
                            <td> <?php echo $row["title"]?></td>
                            <td> <?php echo $row["description"]?></td>
                            <td> <?php echo $row["price"]?></td>
                            <td> <?php echo $row["stock"]?></td>
                            <td><img src="<?php echo $row['image']; ?> "alt=""></td>
                            <td> <?php echo $row["cat_name"]?></td>
                            
                            <td>
                              <label class="badge badge-info">On hold</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <?php
                          }
                      }
                     
                        ?>
                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
  
  <!-- container-scroller -->
 <?php
 include_once("./components/footer.php");
 ?>