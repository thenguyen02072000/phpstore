<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<?php 
include ("partials/head.php");
?>

<body class="animsition">
    <?php 
	include ("partials/header.php");
	?>


    <!-- Product -->
    <br />
    <br />
    <div class="bg0 m-t-23 p-b-140">
        <div class="container">

            <div class="flex-w flex-l-m filter-tope-group m-tb-10">

                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1"
                    onclick="location.href='product.php'">
                    All Products
                </button>
                <?php
                    if(!isset($_GET['search'])) {
                        $_GET['search']="";
                    }
                    include("partials/connect.php");
                    $sqlCategories = "SELECT * FROM categories";
                    $resultCategories = $connect -> query($sqlCategories);

					while($final = $resultCategories->fetch_assoc()) {?>

                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1"
                    onclick="location.href='product.php?search=<?=$_GET['search']?>&category_id=<?=$final['id']?>'">
                    <?=$final['name']?>
                </button>

                <?php }?>


            </div>
            <div class="flex-w flex-sb-m p-b-52">




                <!-- Search product -->
                <div class="dis-none panel-search w-full p-t-10 p-b-15">
                    <div class="bor8 dis-flex p-l-15">
                        <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                            <i class="zmdi zmdi-search"></i>
                        </button>

                        <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product"
                            placeholder="Search">
                    </div>
                </div>

                <!-- Filter -->
                <div class="dis-none panel-filter w-full p-t-10">
                    <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
                        <div class="filter-col1 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Sort By
                            </div>

                            <ul>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Default
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Popularity
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Average rating
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                        Newness
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Price: Low to High
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Price: High to Low
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="filter-col2 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Price
                            </div>

                            <ul>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                        All
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        $0.00 - $50.00
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        $50.00 - $100.00
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        $100.00 - $150.00
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        $150.00 - $200.00
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        $200.00+
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="filter-col3 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Color
                            </div>

                            <ul>
                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: #222;">
                                        <i class="zmdi zmdi-circle"></i>
                                    </span>

                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Black
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
                                        <i class="zmdi zmdi-circle"></i>
                                    </span>

                                    <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                        Blue
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3;">
                                        <i class="zmdi zmdi-circle"></i>
                                    </span>

                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Grey
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: #00ad5f;">
                                        <i class="zmdi zmdi-circle"></i>
                                    </span>

                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Green
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: #fa4251;">
                                        <i class="zmdi zmdi-circle"></i>
                                    </span>

                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Red
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: #aaa;">
                                        <i class="zmdi zmdi-circle-o"></i>
                                    </span>

                                    <a href="#" class="filter-link stext-106 trans-04">
                                        White
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="filter-col4 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Tags
                            </div>

                            <div class="flex-w p-t-4 m-r--5">
                                <a href="#"
                                    class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Fashion
                                </a>

                                <a href="#"
                                    class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Lifestyle
                                </a>

                                <a href="#"
                                    class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Denim
                                </a>

                                <a href="#"
                                    class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Streetstyle
                                </a>

                                <a href="#"
                                    class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Crafts
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="row isotope-grid">


                <?php 
                    $results_per_page = 8;
                //Find number of page
                $sql = "SELECT * FROM products WHERE name LIKE '%{$_GET['search']}%' AND status = 1";
                if(isset($_GET['category_id'])) {
                $sql = "SELECT * FROM products WHERE name LIKE '%{$_GET['search']}%' AND category_id =
                {$_GET['category_id']} AND status = 1";
                }
                $result = $connect -> query($sql);
                $number_of_pages = ceil(mysqli_num_rows($result)/$results_per_page);
                
                //Get current page number
                if(!isset($_GET['page'])) {
                    $page = 1;
                } else {
                    $page = $_GET['page'];
                }

                //Show result
                $this_page_first_result = ($page-1)*$results_per_page;
                $sql = "SELECT * FROM products WHERE status = 1 AND name LIKE '%{$_GET['search']}%' LIMIT ".$this_page_first_result . ',' .  $results_per_page;
                if(isset($_GET['category_id'])) {
                $sql = "SELECT * FROM products WHERE status = 1 AND name LIKE '%{$_GET['search']}%' AND category_id =
                {$_GET['category_id']} LIMIT ".$this_page_first_result . ',' .  $results_per_page;
                }
                $result = $connect -> query($sql);


                while($final = $result->fetch_assoc()) {?>


                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="<?=$final['picture']?>" alt="IMG-PRODUCT"
                                style="min-height: 400px;max: height 400px;">

                            <a href="details.php?details_id=<?=$final['id']?>"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    <?=$final['name']?>
                                </a>

                                <span class=" stext-105 cl3">
                                    <?=$final['price']?>
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } ?>

                <?php
                        if(isset($_GET['category_id'])) {
                            $pageURL = "product.php?search={$_GET['search']}&category_id={$_GET['category_id']}";
                        } else {
                            $pageURL = "product.php?search={$_GET['search']}";
                        }
                ?>
            </div>

            <ul class="pagination">
                <li><a href="<?=$pageURL?>&page=1">&laquo;</a></li>
                <?php
                    for($i=1;$i<=$number_of_pages;$i++) {
                        if($i==$page) {
                            echo "<li class='active'><a href='#'>$i</a></li>";
                        } else {
                            echo "<li><a href='$pageURL"."&page=$i'>$i</a></li>";
                        }
                    }
                ?>
                <li><a href="<?=$pageURL?>&page=<?=$number_of_pages?>">&raquo;</a></li>

            </ul>

        </div>
    </div>


    <!-- Footer -->
    <?php 
	include("partials/footer.php");
	?>

</body>

</html>