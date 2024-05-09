<?php


require('include/essentials.php');
adminLogin();
session_regenerate_id(true);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel-Dashboard</title>
    <?php require('include/links.php'); ?>

</head>

<body class="bg-light">


    <?php require('include/header.php'); ?>

    <div class="container-fluid " id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">SETTINGS</h3>


                <!-- general settings section -->

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">General Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                                data-bs-target="#general-s">
                                Edit<i class="bi bi-pencil-square ms-1"></i>
                            </button>
                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                        <p class="card-text">content</p>
                        <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
                        <p class="card-text">content</p>
                    </div>
                </div>


                <div class="modal fade" id="general-s" data-bs-backdrop="static" tabindex="-1" role="dialog"
                    data-bs-keyboard="true" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">General Setting</h5>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-6 ps-0">
                                        <label class="form-label">Site Title</label>
                                        <input type="text" name="site_title" class="form-control shadow-none">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <textarea  name="site_about" class="form-control shadow-none" rows="6"></textarea>
                            </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn text-secondary shadow-none"
                                        data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn custom-bg text-white shadow-none">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- general settings modal -->


            </div>
        </div>
    </div>
    <?php include('include/scripts.php'); ?>
</body>

</html>