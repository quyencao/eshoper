<div class="panel-group category-products" id="accordian"><!--category-productsr-->
    <?php
        if(isset($_GET["category_id"])) {
            $select_category_id = $_GET["category_id"];
        } else {
            $select_category_id = '';
        }

        $categories = query("SELECT * FROM category");

        confirm($categories);

        while($category = fetch_assoc($categories)):
    ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a style="<?php echo ($select_category_id == $category["id"]) ? "color:orange" : ""; ?>"
                       href="shop.php?category_id=<?php echo htmlspecialchars($category["id"]); ?>">
                        <?php echo $category["title"]; ?>
                    </a>
                </h4>
            </div>
        </div>
    <?php
        endwhile;
    ?>
</div><!--/category-products-->

<!--<div class="panel panel-default">-->
<!--    <div class="panel-heading">-->
<!--        <h4 class="panel-title"><a href="#">Fashion</a></h4>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="panel panel-default">-->
<!--    <div class="panel-heading">-->
<!--        <h4 class="panel-title"><a href="#">Households</a></h4>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="panel panel-default">-->
<!--    <div class="panel-heading">-->
<!--        <h4 class="panel-title"><a href="#">Interiors</a></h4>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="panel panel-default">-->
<!--    <div class="panel-heading">-->
<!--        <h4 class="panel-title"><a href="#">Clothing</a></h4>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="panel panel-default">-->
<!--    <div class="panel-heading">-->
<!--        <h4 class="panel-title"><a href="#">Bags</a></h4>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="panel panel-default">-->
<!--    <div class="panel-heading">-->
<!--        <h4 class="panel-title"><a href="#">Shoes</a></h4>-->
<!--    </div>-->
<!--</div>-->


<!--<div class="panel panel-default">-->
<!--    <div class="panel-heading">-->
<!--        <h4 class="panel-title">-->
<!--            <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">-->
<!--                <span class="badge pull-right"><i class="fa fa-plus"></i></span>-->
<!--                Sportswear-->
<!--            </a>-->
<!--        </h4>-->
<!--    </div>-->
<!--    <div id="sportswear" class="panel-collapse collapse">-->
<!--        <div class="panel-body">-->
<!--            <ul>-->
<!--                <li><a href="#">Nike </a></li>-->
<!--                <li><a href="#">Under Armour </a></li>-->
<!--                <li><a href="#">Adidas </a></li>-->
<!--                <li><a href="#">Puma</a></li>-->
<!--                <li><a href="#">ASICS </a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="panel panel-default">-->
<!--    <div class="panel-heading">-->
<!--        <h4 class="panel-title">-->
<!--            <a data-toggle="collapse" data-parent="#accordian" href="#mens">-->
<!--                <span class="badge pull-right"><i class="fa fa-plus"></i></span>-->
<!--                Mens-->
<!--            </a>-->
<!--        </h4>-->
<!--    </div>-->
<!--    <div id="mens" class="panel-collapse collapse">-->
<!--        <div class="panel-body">-->
<!--            <ul>-->
<!--                <li><a href="#">Fendi</a></li>-->
<!--                <li><a href="#">Guess</a></li>-->
<!--                <li><a href="#">Valentino</a></li>-->
<!--                <li><a href="#">Dior</a></li>-->
<!--                <li><a href="#">Versace</a></li>-->
<!--                <li><a href="#">Armani</a></li>-->
<!--                <li><a href="#">Prada</a></li>-->
<!--                <li><a href="#">Dolce and Gabbana</a></li>-->
<!--                <li><a href="#">Chanel</a></li>-->
<!--                <li><a href="#">Gucci</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<div class="panel panel-default">-->
<!--    <div class="panel-heading">-->
<!--        <h4 class="panel-title">-->
<!--            <a data-toggle="collapse" data-parent="#accordian" href="#womens">-->
<!--                <span class="badge pull-right"><i class="fa fa-plus"></i></span>-->
<!--                Womens-->
<!--            </a>-->
<!--        </h4>-->
<!--    </div>-->
<!--    <div id="womens" class="panel-collapse collapse">-->
<!--        <div class="panel-body">-->
<!--            <ul>-->
<!--                <li><a href="#">Fendi</a></li>-->
<!--                <li><a href="#">Guess</a></li>-->
<!--                <li><a href="#">Valentino</a></li>-->
<!--                <li><a href="#">Dior</a></li>-->
<!--                <li><a href="#">Versace</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->