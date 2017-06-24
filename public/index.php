<?php require_once ("../resources/config.php"); ?>
<?php $_SESSION["page"] = "index"; ?>

<!--HEADER-->
<?php include_once (TEMPLATE_FRONT . DS . "header.php"); ?>

<!--SLIDER-->
<?php include_once (TEMPLATE_FRONT . DS . "slider.php"); ?>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
                    <!--LEFT SIDEBAR-->
                    <?php include_once (TEMPLATE_FRONT . DS . "left_sidebar.php"); ?>
				</div>
				
				<div class="col-sm-9 padding-right">
                    <!--FEATURE ITEMS-->
					<?php include_once (TEMPLATE_FRONT . DS . "feature_items.php"); ?>

                    <!--CATEGORY TAB-->
                    <?php include_once (TEMPLATE_FRONT . DS . "category_tab.php"); ?>

					<!--RECOMMEND ITEMS-->
					<?php include_once (TEMPLATE_FRONT . DS . "recommend_items.php"); ?>
				</div>
			</div>
		</div>
	</section>
	
<?php include_once (TEMPLATE_FRONT . DS . "footer.php"); ?>