<?php require_once ("../../../resources/config.php"); ?>
<?php include_once (TEMPLATE_BACK . DS . "header.php"); ?>
<?php
    if(isset($_GET["update_id"])) {
        $title = get_category_by_id($_GET["update_id"])["title"];
        $update_id = $_GET["update_id"];
    } else if (isset($_GET["delete_id"])) {
        delete_category($_GET["delete_id"]);
        $title = "";
    } else {
        $title = "";
    }
?>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include_once (TEMPLATE_BACK . DS . "navigation.php"); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Category</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-4">
                    <?php
                        if(isset($_POST["submit"])) {
                            $title = $_POST["title"];

                            if(!empty($title)) {

                                if(!isset($_GET["update_id"])) {
                                    add_category($title);
                                } else {
                                    update_category($_GET["update_id"], $title);

                                }
                                $title = "";
                            } else {
                                $error = "Title is empty";
                            }
                        }
                    ?>
                    <form method="POST" action="category.php<?php echo isset($update_id) ? "?update_id=$update_id" : ""; ?>">
                        <div class="form-group">
                            <label for="title">Category Title:</label>
                            <input type="text" class="form-control" name="title" id="title" value="<?php echo $title; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                    <?php
                        if(isset($error)) {
                            echo "<div class='alert alert-danger'>$error</div>";
                        }
                    ?>
                </div>
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Category Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Category Id</th>
                                        <th>Category Title</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $categories = get_all_category();

                                        while ($category = fetch_assoc($categories)):
                                    ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $category["id"]; ?></td>
                                            <td><?php echo $category["title"]; ?></td>
                                            <td><a href="category.php?update_id=<?php echo htmlspecialchars($category["id"]); ?>" class="btn btn-warning">Update</a></td>
                                            <td><a href="category.php?delete_id=<?php echo htmlspecialchars($category["id"]); ?>" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                    <?php
                                        endwhile;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include_once (TEMPLATE_BACK . DS . "footer.php"); ?>