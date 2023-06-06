<?php
require("check.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Update Subject</title>
    <?php require("styles.php"); ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php require("sidebar.php"); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php require("topbar.php"); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid ">
                    <div class="row">

                        <!-- Basic Card Example -->
                        <div class="card border-left-info shadow mb-4 col-xl-12 col-md-12 mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Update Subject</h6>
                            </div>
                            <!-- Data of this form is sent to ""(simpleQueries.php)"" page Where (name="updateSubject")-->
                            <form action="simpleQueries.php" method="POST">
                                <div class="form-group">
                                    <h1 class="heading">Update subject</h1>
                                    <div class="controls">
                                        <label for="name">Subject Name</label>
                                        <input type="text" id="id" name="id" value="<?php if (isset($_REQUEST['id'])) {
                                                                                        echo $_REQUEST['id'];
                                                                                    } ?>" hidden required>
                                        <input type="text" id="name" name="name" value="<?php if (isset($_REQUEST['name'])) {
                                                                                                echo $_REQUEST['name'];
                                                                                            } ?>" required>
                                    </div>
                                    <div class="controls">
                                        <label for="scheme">Scheme</label>
                                        <input type="text" id="scheme" name="scheme" value="<?php if (isset($_REQUEST['scheme'])) {
                                                                                            echo $_REQUEST['scheme'];
                                                                                        } ?>" required>
                                    </div>
                                    <div class="controls">
                                        <label for="type">Type</label>
                                        <select name="type" required>
                                        <?php
                                            if (isset($_REQUEST['type'])) {
                                            ?>
                                            <option value="theory"  <?php if ($_REQUEST['type'] == "theory") {
                                                                        echo "selected";
                                                                    } ?>>Theory</option>
                                            <option value="practical" <?php if ($_REQUEST['type'] == "practical") {
                                                                        echo "selected";
                                                                    } ?>>Practical</option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="controls">
                                        <label for="sem">Semester</label>
                                        <select name="sem" required>
                                            <?php
                                            if (isset($_REQUEST['sem'])) {
                                            ?>
                                                <option value="1" <?php if ($_REQUEST['sem'] == "1") {
                                                                        echo "selected";
                                                                    } ?>>1<sup>st</sup></option>
                                                <option value="2" <?php if ($_REQUEST['sem'] == "2") {
                                                                        echo "selected";
                                                                    } ?>>2<sup>nd</sup></option>
                                                <option value="3" <?php if ($_REQUEST['sem'] == "3") {
                                                                        echo "selected";
                                                                    } ?>>3<sup>rd</sup></option>
                                                <option value="4" <?php if ($_REQUEST['sem'] == "4") {
                                                                        echo "selected";
                                                                    } ?>>4<sup>th</sup></option>
                                                <option value="5" <?php if ($_REQUEST['sem'] == "5") {
                                                                        echo "selected";
                                                                    } ?>>5<sup>th</sup></option>
                                                <option value="6" <?php if ($_REQUEST['sem'] == "6") {
                                                                        echo "selected";
                                                                    } ?>>6<sup>th</sup></option>
                                            <?php
                                            }
                                            ?>
                                        </select>

                                    </div>
                                    <div class="grid">
                                        <button type="submit" value="Submit" class="col-1-4"
                                            name="updateSubject">Update Subject</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Monthly Attendance Tracker |
                                <?php echo date("Y"); ?>
                            </span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <?php require("scripts.php"); ?>



</body>

</html>