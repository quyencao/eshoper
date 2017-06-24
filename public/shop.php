<?php require_once ("../resources/config.php"); ?>

<?php $_SESSION["page"] = "shop"; ?>

<?php include_once (TEMPLATE_FRONT . DS . "header.php"); ?>
	
	<section id="advertisement">
		<div class="container">
			<img src="images/shop/advertisement.jpg" alt="" />
		</div>
	</section>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
                    <!--LEFT SIDEBAR-->
                    <?php include_once (TEMPLATE_FRONT . DS . "left_sidebar.php"); ?>
				</div>
				
				<div class="col-sm-9 padding-right">
                    <?php include_once (TEMPLATE_FRONT . DS . "feature_items.php"); ?>
				</div>
			</div>
		</div>
	</section>

<?php include_once (TEMPLATE_FRONT . DS . "footer.php"); ?>