<div class="brands_products"><!--brands_products-->
    <h2>Brands</h2>
    <div class="brands-name">
        <ul class="nav nav-pills nav-stacked">
            <?php
                if(isset($_GET["brand_id"])) {
                    $selected_brand = $_GET["brand_id"];
                } else {
                    $selected_brand = '';
                }

                $brands = query("SELECT * FROM brands");

                confirm($brands);

                while($brand = fetch_assoc($brands)):
            ?>
                <?php
                    $product_by_brand = get_product_by_brand($brand["id"]);

                    $num_rows = get_num_rows($product_by_brand);
                ?>
                <li><a <?php if(!empty($selected_brand) && $selected_brand == $brand["id"]) { echo "style='color: orange'"; } ?>
                       href="shop.php?brand_id=<?php echo htmlspecialchars($brand["id"]); ?>">
                        <span class="pull-right">(<?php echo $num_rows; ?>)</span><?php echo $brand["name"]; ?></a></li>
            <?php
                endwhile;
            ?>
        </ul>
    </div>
</div><!--/brands_products-->