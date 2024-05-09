<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Hotel DG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                    <a class="nav-link me-2" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="rooms.php">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="facilities.php">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="contact.php">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="about.php">About</a>
                </li>
            </ul>
            <form class="d-flex">
                <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3 " data-bs-toggle="modal"
                    data-bs-target="#loginModal">
                    Login
                </button>

                <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3 " data-bs-toggle="modal"
                    data-bs-target="#registerModal">
                    Register
                </button>
            </form>

        </div>
    </div>
</nav>

<!-- login modal -->

<!-- we are targetting by id and data-bs-target to this modal -->

<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="bi bi-person-circle me-2"></i>User Login
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Email/Mobile</label>
                        <input type="email" class="form-control shadow-none">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control shadow-none">
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <button type="submit" class="btn btn-dark shadow-none">Login</button>
                        <a href=" javascript : void(0)" class="text-secondary text-decoration-none">
                            Forgot password ?</a>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

<!-- register modal -->

<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="bi bi-person-lines-fill me-2"></i>User Registration
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">Note: Your details must match with
                        your
                        ID(Aadhar Card, passport, driving license etc.) that will be required during
                        check-in.</span>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 ps-0">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control shadow-none">
                            </div>
                            <div class=" mb-3">
                                <label class="form-label">Email</label>
                                <input type="Email" class="form-control shadow-none">
                            </div>

                            <div class="col-md-6 ps-0">
                                <label class="form-label">Site Title</label>
                                <input type="number" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Pictures</label>
                                <input type="file" class="form-control shadow-none">
                            </div>

                            <div class="col-md-12 ps-0">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 ps-0 mb-3 mt-3">
                                <label class="form-label">Date of birth</label>
                                <input type="date" class="form-control shadow-none">
                            </div>

                            <div class="col-md-6 ps-0 mt-3">
                                <label class="form-label">Pincode</label>
                                <input type="number" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 ps-0 mb-3 mt-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 ps-0 mb-3 mt-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control shadow-none">
                            </div>

                        </div>
                    </div>

                    <div class="text-center">

                        <button class="btn btn-outline-dark shadow-none me-lg-2 me-3">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>