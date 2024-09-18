<?php

include('./database/config.php');

?>

<?php

include('./Layout/header.php');

?>



<!--main content start-->
<section id="main-content">
    <section class=" wrapper">
        <div class="form-w3layouts">
            <div class="row">
                <div class="col-md-12">
                    <section class="panel">
                        <div data-collapsed="0" class="pane">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <u><b>Add Sub Category</b></u>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="col-lg-3"></div>
                                        
                                        <div class="col-lg-6">


                                        <select class="form-control m-bot15" name="category_id" style="text-align: center;">
                                            <option selected disabled>Option Select</option>
                                            
                                                     <!--PHP Connection Start in Category-->
                                                     <!-- Function Category -->
                                                 <?php
                                                 $select_category_query = "select * from category_tbl";
                                                 $select_category_execute = mysqli_query($connection,$select_category_query);
                                                 while($category_row=mysqli_fetch_assoc($select_category_execute))
                                                 {
                                                     $category_name=$category_row['category_name'];
                                                     $category_id=$category_row['category_id'];
                                                    echo "<option value='$category_id'>$category_name</option>";
                                                 }
                                                 ?>  
                                                 <!--PHP Connection End in Category-->
                                                 
                                        </select>


                                        </div>
                                        <div class="col-lg-3"></div>
                                        <br><br><br>
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" placeholder="Enter Sub Category" name="sub_category_name">
                                        </div>
                                        <div class="col-lg-3"></div>
                                        <br><br><br>
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6">
                                            <input type="file" class="form-control" id="sub_category_image" placeholder="Enter Sub Category" name="sub_category_image">
                                        </div>
                                        <div class="col-lg-3"></div>
                                        
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6 form-group">
                                            <br>
                                            <center>
                                            <input type="submit" value="Submit" class="btn btn-info" name="sub_category_submit">
                                            </center>
                                        </div>
                                        <div class="col-lg-3"></div>
                                    </form>
                                </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

<!--main content end-->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- footer start -->

<?php

include('./Layout/footer.php');

?>


<!-- Add Sub Category Side Start -->

<?php

if(isset($_POST['sub_category_submit']))
{
    $sub_category_name = $_POST['sub_category_name'];
    $category_id = $_POST['category_id'];
    $sub_category_status = 'active';
    $sub_category_image = $_FILES['sub_category_image']['name'];
    $temp_image = $_FILES['sub_category_image']['tmp_name'];

    if ($sub_category_name == '' or $sub_category_image == '' or $category_id == '') 
        {
            echo "<script>alert('Please Fill the Blank Spaces')</script>";
            exit;
        } 
        else 
        {
            move_uploaded_file($temp_image, "./Sub_Category_Image/$sub_category_image");

            $insert_sub_category_query="insert into sub_category_tbl (category_id,sub_category_name,sub_category_image,sub_category_status) values ('$category_id','$sub_category_name','$sub_category_image','$sub_category_status')";
            $sub_category_execute_query=mysqli_query($connection,$insert_sub_category_query);
            if($sub_category_execute_query)
            {
              echo "<script>alert('Category inserted Successfully')</script>";
              echo "<script>window.open('add_subcategory.php','_self')</script>";
            }
            else
            {
                die(mysqli_error($connection));
            }
        }
}






?>


