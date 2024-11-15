<?php include('./includes/header.php'); ?>

    <!-- Start Product details  -->
    <div class="prod-details">
        <div class="container">
            <div class="sub-container pt-4 pb-4">

                <?php
                viewDetails();
                ?>
            </div>
        </div>
    </div>
    <!-- End Product details  -->

    <!-- Start Products  -->
    <div class="products">
        <div class="container">
            <div class="categ-header">
                <div class="sub-title">
                    <span class="shape"></span>
                    <span class="title">Related Products</span>
                </div>
                <h2>Discover More Products</h2>
            </div>
            <div class="row mb-3">
                <?php
                getProduct(3);
                cart();
                ?>
            </div>
            <div class="view d-flex justify-content-center align-items-center">
                <button onclick="location.href='./products.php'">View More Products</button>
            </div>
        </div>
    </div>
    <!-- End Products  -->











    <!-- divider  -->
    <!-- <div class="container">
        <div class="divider"></div>
    </div> -->
    <!-- divider  -->





    <script src="./assets//js/script.js"></script>

<?php include('./includes/footer.php'); ?>