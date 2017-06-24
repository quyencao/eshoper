<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Features Items</h2>
    <?php
        $query = "SELECT * FROM products";

        if(isset($_GET["category_id"])) {
            $cat_id = escape_string($_GET["category_id"]);
            $query .= " WHERE category_id = $cat_id";
        }

        if(isset($_GET["brand_id"])) {
            $brand_id = escape_string($_GET["brand_id"]);
            $query .= " WHERE brand_id = $brand_id";
        }

        if(isset($_SESSION["page"]) && $_SESSION["page"] == "index") {
            $query .= " ORDER BY release_date DESC LIMIT 6";
        }

        $products = query($query);

        confirm($products);

        if(get_num_rows($products) == 0) {
            echo "No Product Found!";
            exit;
        }

        while ($product = fetch_assoc($products)):
    ?>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="images/home/<?php echo $product["image"]; ?>" alt="" />
                        <h2>$<?php echo $product["price"]; ?></h2>
                        <p><?php echo $product["name"]; ?></p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    <div class="product-overlay">
                        <div class="overlay-content">
                            <h2>$<?php echo $product["price"]; ?></h2>
                            <p><?php echo $product["name"]; ?></p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                    </div>
                    <?php if($product["condition"] == "New"): ?>
                        <img src="images/home/new.png" class="new" alt="" />
                    <?php elseif ($product["condition"] == "Sale"): ?>
                        <img src="images/home/sale.png" class="new" alt="" />
                    <?php endif; ?>
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                    </ul>
                </div>
            </div>
        </div>
    <?php
        endwhile;
    ?>
</div><!--features_items-->/