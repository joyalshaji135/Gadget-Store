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
                                    <form action="" method="post">
                                        <div class="col-lg-3"></div>
                                        
                                        <div class="col-lg-6">


                                        <select class="form-control m-bot15" name="programme_id" style="text-align: center;">
                                            <option selected disabled>Option Select</option>
                                            <option value='$course_id'>S22 Ultra</option>
                                            <option value='$course_id'>S22 Ultra</option>
                                            <option value='$course_id'>S22 Ultra</option>
                                        </select>


                                        </div>
                                        <div class="col-lg-3"></div>
                                        <br><br><br>
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Enter Course" name="course_name">
                                        </div>
                                        <div class="col-lg-3"></div>
                                        <br><br><br>
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6">
                                            <input type="file" class="form-control" id="exampleInputEmail2" placeholder="Enter Course" name="course_name">
                                        </div>
                                        <div class="col-lg-3"></div>
                                        
                                        <div class="col-lg-5"></div>
                                        <div class="col-lg-6 form-group">
                                            <br>
                                            <input type="submit" placeholder=".col-md-3" class="form-button" value="Submit" name="course_submit">
                                        </div>
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





// if(isset($_POST['insert_product']))
//   {
//         $product_name=$_POST['product_name'];
//         $product_discription=$_POST['product_discription'];
//         $product_keyword=$_POST['product_keyword'];
//         $product_category=$_POST['product_category'];
//         $product_sub_category=$_POST['product_sub_category'];
//         $product_offer=$_POST['product_offer'];
//         $product_stock=$_POST['stock'];
//         $product_actual_price=$_POST['product_actual_price'];
//         $product_current_price=$_POST['product_current_price'];
//         $product_status='true';

//         //Image Accessing 

//         $product_image=$_FILES['product_image']['name'];
        

//         //Image Accessing for tmp Image
        
//         $temp_image=$_FILES['product_image']['tmp_name'];

//         //Check Empty Conditions

//         if($product_name=='' or $product_discription=='' or $product_keyword=='' or $product_category=='' 
//         or $product_sub_category=='' or $product_actual_price=='' or $product_stock=='' or
//         $product_current_price=='' or $product_image=='' or $product_offer=='')
//         {
//               echo "<script>alert('Please Fill the Blank Spaces')</script>";
//               exit;
//         }else
//         {
//             move_uploaded_file($temp_image,"./Product_Image/$product_image"); 
           
//             //Insert Query

//             $insert_product="insert into product_tbl (product_name,product_description,product_keyword,
//             category_id,sub_category_id,product_image,product_stock,product_offer,product_actual_price,product_current_price,
//             date,status) values ('$product_name','$product_discription','$product_keyword',
//             '$product_category','$product_sub_category','$product_image','$product_stock','$product_offer','$product_actual_price',
//             '$product_current_price',NOW(),'$product_status')";
            
//             $result_query=mysqli_query($con,$insert_product);

//             if($result_query){
//                 echo "<script>alert('Successfully Inserted the Products')</script>";
//             }


//         }
//     }

?>


