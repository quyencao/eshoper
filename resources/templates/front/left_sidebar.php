<div class="left-sidebar">
    <h2>Category</h2>
    <!--CATEGORY-->
    <?php include_once (TEMPLATE_FRONT . DS . "category.php"); ?>

    <!--BRANDS-->
    <?php include_once (TEMPLATE_FRONT . DS . "brands.php"); ?>

    <div class="price-range"><!--price-range-->
        <h2>Price Range</h2>
        <div class="well text-center">
            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
            <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
        </div>
    </div><!--/price-range-->

    <div class="shipping text-center"><!--shipping-->
        <img src="images/home/shipping.jpg" alt="" />
    </div><!--/shipping-->

</div>