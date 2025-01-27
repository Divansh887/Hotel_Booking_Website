<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DG Hotel-rooms</title>
    <?php include('include/links.php') ?>
</head>

<body class="bg-light">

    <?php require('include/header.php') ?>
    <div class="my-5 px-4">
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>
        <div class="h-line bg-dark"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">Filters</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#filterDropDown" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropDown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Check Availability</h5>
                                <label class="form-label">Check-in</label>
                                <input type="date" class="form-control shadow-none mb-3">
                                <label class="form-label">Check-out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Facilities</h5>
                                <div class="mb-2">
                                    <!-- form-check-input class are used for checkbox in bootstrap -->
                                    <input type="checkbox" for="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-label" id="f1">Facility One</label>
                                    <div class="mb-2">
                                        <input type="checkbox" for="f2" class="form-check-input shadow-none me-1">
                                        <label class="form-label" id="f2">Facility Two</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" for="f3" class="form-check-input shadow-none me-1">
                                        <label class="form-label" id="f3">Facility three</label>
                                    </div>
                                </div>
                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size: 18px;">Guests</h5>
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <label class="form-label">Adults</label>
                                            <input type="number" class="form-control shadow-none mb-3">
                                        </div>
                                        <div>
                                            <label class="form-label">Childrens</label>
                                            <input type="number" class="form-control shadow-none mb-3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-lg-9 col-md-12 px-4 ">
                <div class="card mb-4 shadow border-0">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 md-mb-0">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded mb-2">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Simple Room Name</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    2 Rooms
                                </span>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    1 Bathroom
                                </span>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    1 Balcony
                                </span>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    3 Sofa
                                </span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    Wifi
                                </span>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    Air Conditioner
                                </span>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    Room Heater
                                </span>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    Geyser
                                </span>
                            </div>
                            <div class="guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    9 Adults
                                </span>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    10 Childrens
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-align-center">
                            <h6 class="mb-4">₹200 per night</h6>
                            <a href="#" class="btn w-100 shadow-none text-white custom-bg mb-2">Book Now</a>
                            <a href="#" class="btn w-100 btn-sm btn-outline-dark shadow-none ">More Details</a>

                        </div>
                    </div>
                </div>
                <div class="card mb-4 shadow border-0">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 md-mb-0">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded mb-2">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Simple Room Name</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    2 Rooms
                                </span>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    1 Bathroom
                                </span>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    1 Balcony
                                </span>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    3 Sofa
                                </span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    Wifi
                                </span>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    Air Conditioner
                                </span>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    Room Heater
                                </span>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    Geyser
                                </span>
                            </div>
                            <div class="guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    9 Adults
                                </span>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    10 Childrens
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-align-center">
                            <h6 class="mb-4">₹200 per night</h6>
                            <a href="#" class="btn w-100 shadow-none text-white custom-bg mb-2">Book Now</a>
                            <a href="#" class="btn w-100 btn-sm btn-outline-dark shadow-none ">More Details</a>

                        </div>
                    </div>
                </div>
                <div class="card mb-4 shadow border-0">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 md-mb-0">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded mb-2">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Simple Room Name</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    2 Rooms
                                </span>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    1 Bathroom
                                </span>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    1 Balcony
                                </span>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    3 Sofa
                                </span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    Wifi
                                </span>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    Air Conditioner
                                </span>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    Room Heater
                                </span>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    Geyser
                                </span>
                            </div>
                            <div class="guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    9 Adults
                                </span>
                                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                    10 Childrens
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-align-center">
                            <h6 class="mb-4">₹200 per night</h6>
                            <a href="#" class="btn w-100 shadow-none text-white custom-bg mb-2">Book Now</a>
                            <a href="#" class="btn w-100 btn-sm btn-outline-dark shadow-none ">More Details</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('include/footer.php') ?>

</body>
</body>
</body>

</html>