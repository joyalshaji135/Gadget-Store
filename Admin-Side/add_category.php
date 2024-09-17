<!-- connection include -->

<?php

 include('./database/config.php');


include('./Layout/header.php');

?>

<!-- header end -->

<!-- sidebar start -->

<!--main content start-->
<!-- Content -->
<section id="main-content">
    <section class=" wrapper">
        <div class="form-w3layouts">
            <div class="row">
                <div class="col-md-12">
                    <section class="panel">
                        <div data-collapsed="0" class="pane">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <u><b>Add Category</b></u>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control round-input" name="category_name">
                                            </div>

                                            <div class="col-sm-3"></div>
                                            <br><br><br>
                                            <div class="col-lg-3"></div>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="category_image" placeholder="Enter Category" name="category_image">
                                            </div>
                                            <div class="col-lg-3"></div>
                                        </div>
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6"></div>
                                        <br><br>
                                        <center>
                                            <input type="submit" value="Submit" class="btn btn-info" name="insert_category">
                                        </center>
                                        <div class="col-lg-3"></div>
                                    </form>
                                    <br>
                                    <br>
                                </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <!-- end of the Content -->
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <?php

    include('./Layout/footer.php');

    ?>


    <!-- Insert Category -->

    <?php

    if (isset($_POST['insert_category'])) {


        $category_name = $_POST['category_name'];
        $category_status = 'active';

        //Image Accessing 

        $category_image=$_FILES['category_image']['name'];

        //Image Accessing for tmp Image

        $temp_image=$_FILES['category_image']['tmp_name'];

        

        if ($category_name == '' or $category_image == '') 
        {
            echo "<script>alert('Please Fill the Blank Spaces')</script>";
            exit;
        } 
        else 
        {
            move_uploaded_file($temp_image,"./Category_Image/$category_image");

            $insert_category_query="insert into category_tbl (category_name,category_image,category_status) values ('$category_name','$category_image','$category_status')";
            $category_execute_query=mysqli_query($connection,$insert_category_query);
            if($category_execute_query)
            {
              echo "<script>alert('Category inserted Sucessfully')</script>";
              echo "<script>window.open('add_category.php','_self')</script>";
            }
            else
            {
                die(mysqli_error($connection));
            }
        }
    }

    ?>

<!-- //Image Accessing 

$product_image=$_FILES['product_image']['name'];


//Image Accessing for tmp Image

$temp_image=$_FILES['product_image']['tmp_name']; 



move_uploaded_file($temp_image,"./Product_Image/$product_image"); 
-->
