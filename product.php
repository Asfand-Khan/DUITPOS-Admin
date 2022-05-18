<?php
include("./API/config.php"); 
include("header.php");
 ?>

 <!-- Product Start -->
<div class="row">
<div class="col-4">
<h4 class="fw-bold mb-4 text-black-50 text-uppercase">Products</h4>
</div>
<div class="col-8 text-right">
<a href="#" class="btn btn-outline shadow-none m-0 px-4 text-uppercase" data-bs-toggle="modal" data-bs-target="#addProduct" id="add-btn"><i class="fa fa-plus">
</i>&nbsp Add product</a>
</div>
</div>
<hr class="hr-border m-1 mb-4">

 <!-- Add Product Modal Start -->
 <div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <form method="post" action="./API/productInsert.php" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Name<span class="text-danger">*</span></label>
                                        <input required class="form-control"  name="pdname" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Color <span class="text-danger">*</span></label>
                                        <input required class="form-control" name="pdcolor" type="text">
                                    </div>
                                </div>
                                
                                <div class="col-sm-12">
											<div class="row">
                                                <div class="col-10">
                                                <div class="form-group">
												<label>Group <span class="text-danger">*</span></label>
												<select required name="pdgroup" class="form-control">
													<option value="">Choose Here</option>
                                                    <?php
                                                $select=mysqli_query($con,"Select * from grouptable");
                                                while($row=mysqli_fetch_array($select))   
                                                {
                                                ?>
													<option value="<?php echo $row['groupId'];?>"><?php echo $row['groupName'];?></option>
													
                                                    <?php
                                                }
                                                ?>           
												</select>
											</div>
                                                </div>
                                                <div class="col-md-2 col-12 col-sm-4">
                                                    <button class="btn btn-md btn-outline shadow-none p-0 text-uppercase form-control"  data-bs-target="#addGroup" data-bs-toggle="modal" style="margin-top:32px;"><i class="fa fa-plus h2"></i></button>
                                                </div>
                                            </div>
										</div>
                                        <div class="col-sm-12">
											<div class="row">
                                                <div class="col-10">
                                                <div class="form-group">
												<label>Department <span class="text-danger">*</span></label>
												<select required name="pddept" class="form-control">
													<option value="">Choose Here</option>
                                                    <?php
                                                $select=mysqli_query($con,"Select * from depttable");
                                                while($row=mysqli_fetch_array($select))   
                                                {
                                                ?>
													<option value="<?php echo $row['deptId'];?>"><?php echo $row['deptName'];?></option>
													
                                                    <?php
                                                }
                                                ?>           
												</select>
											</div>
                                                </div>
                                                <div class="col-md-2 col-12 col-sm-4">
                                                    <button class="btn btn-md btn-outline shadow-none p-0 text-uppercase form-control"  data-bs-target="#addDept" data-bs-toggle="modal" style="margin-top:32px;"><i class="fa fa-plus h2"></i></button>
                                                </div>
                                            </div>
										</div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Tag <span class="text-danger">*</span></label>
                                        <input required class="form-control" name="pdtag" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
									<div class="form-group">
										<label>Image</label>
										<div class="profile-upload">
											<div class="upload-img">
												<!-- <img alt="" src="assets/img/user.jpg"> -->
											</div>
											<div class="upload-input">
												<input required  type="file" name="pdimage" class="form-control">
											</div>
										</div>
									</div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Cost <span class="text-danger">*</span></label>
                                        <input required class="form-control" name="pdcost" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Price <span class="text-danger">*</span></label>
                                        <input required class="form-control" name="pdprice" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Unit <span class="text-danger">*</span></label>
                                        <input required class="form-control" name="pdunit" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Online <span class="text-danger">*</span></label>
                                        <input required class="form-control" name="pdonline" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Description <span class="text-danger">*</span></label>
                                    <textarea required class="form-control" name="pddesc"></textarea>    
                                    </div>
                                </div>
                            </div>
                    
                        </div>
                </div>
      </div>
      <div class="modal-footer text-center">
       <button name="create_product" class="btn btn-outline shadow-none m-0 px-4 text-uppercase" id="add-btn">Create Product</button>
      </div>
    </div>
                            </form>
  </div>
</div>
 <!-- Add Product Modal End -->

  <!-- Add Group Modal Start -->
  <div class="modal fade" id="addGroup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold" id="exampleModalLabel">Add Group</h5>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
                    <div class="col-12">
                        <form method="post" action="API/groupInsert.php">
                            <div class="row">
                            <div class="col-12">
                                    <div class="form-group">
                                        <label>Group Name<span class="text-danger">*</span></label>
                                        <input required class="form-control"  name="groupname" type="text">
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
      </div>
      <div class="modal-footer text-center">
       <button name="create_group" class="btn btn-outline shadow-none m-0 px-4 text-uppercase" id="add-btn">Create Group</button>
      </div>
                            </form>
    </div>
  </div>
</div>
 <!-- Add Group Modal End -->

 <!-- Add Dept Modal Start -->
 <div class="modal fade" id="addDept" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold" id="exampleModalLabel">Add Department</h5>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
                    <div class="col-12">
                        <form method="POST" action="API/deptInsert.php">
                            <div class="row">
                            <div class="col-12">
                                    <div class="form-group">
                                        <label>Department Name<span class="text-danger">*</span></label>
                                        <input required class="form-control"  name="deptname" type="text">
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
      </div>
      <div class="modal-footer text-center">
       <button name="create_dept" class="btn btn-outline shadow-none m-0 px-4 text-uppercase" id="add-btn" type="submit">Create Department</button>
      </div>
                            </form>
    </div>
  </div>
</div>
 <!-- Add Group Modal End -->

<div class="row mt-2 text-decoration-none">
    <?php
        $select=mysqli_query($con,"Select * from producttable");
        while($row=mysqli_fetch_array($select))   
        {
        ?>
    <div class="col-3 mb-1">
        <a href="/product/productdetail/<?php echo($row['productId']) ?>">
            <div class="card shadow-none" id="hvr" >
            <img class="img-fluid" src="assets\img\banner\food.jpg"  alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title txt fw-bold text-center" id="txt-color"><?php echo($row['productName']) ?></h5>
                </div>
            </div>
        </a>
    </div>
    <?php
        }
    ?>
<!-- <div class="col-3 mb-1">
<div class="card shadow-none" id="hvr" >
<img class="img-fluid" src="assets\img\banner\food.jpg"  alt="Card image cap">
<div class="card-body">
    <h5 class="card-title txt fw-bold text-center" id="txt-color">Zinger Burger</h5>
</div>
</div>
</div> -->
<!-- <div class="col-3 mb-1">
<div class="card shadow-none" id="hvr" >
<img class="img-fluid" src="assets\img\banner\food.jpg"  alt="Card image cap">
<div class="card-body">
    <h5 class="card-title txt fw-bold text-center" id="txt-color">Zinger Burger</h5>
</div>
</div>
</div> -->
<!-- <div class="col-3 mb-1">
<div class="card shadow-none" id="hvr" >
<img class="img-fluid" src="assets\img\banner\food.jpg"  alt="Card image cap">
<div class="card-body">
    <h5 class="card-title txt fw-bold text-center" id="txt-color">Zinger Burger</h5>
</div>
</div>
</div> -->


</div>
<!-- Product End -->        
<?php 
 include("footer.php")
?>      