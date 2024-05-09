<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DG Hotel-Home</title>
        <?php include('include/links.php') ?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        
    </head>

    <body
        class="bg-light">
        
        <!-- nvbar login register -->

        <?php require('include/header.php') ?>

        <!-- swiper js carousel -->
        <div class="container-fluid px-lg-4 mt-4">
            <div class="swiper swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/carousel/1.png" class="w-100 d-block"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/carousel/2.png" class="w-100 d-block"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/carousel/3.png" class="w-100 d-block"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/carousel/4.png" class="w-100 d-block"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/carousel/5.png" class="w-100 d-block"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/carousel/6.png" class="w-100 d-block"/>
                    </div>
                </div>
            </div>
        </div>

        <!--check booking availability -->

        <div class="container availability-form">
            <div class="row">
                <div class="col-lg-12 bg-white shadow p-4 rounded">
                    <h5 class="mb-4">Check Booking Availability</h5>
                    <form>
                        <!-- *!align item set all section at end -->
                        <div class="row align-items-end">
                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font-weight: 500;">Check-in</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font-weight: 500;">Check-out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label for="form-label" style="font-weight: 500;">Adult</label>
                                <select class="form-select shadow-none">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>
                                    <option value="5">Five</option>
                                    <option value="6">Six</option>
                                    <option value="7">Seven</option>
                                    <option value="8">Eight</option>
                                    <option value="9">Nine</option>
                                </select>
                            </div>
                            <div class="col-lg-2 mb-3">
                                <label for="form-label" style="font-weight: 500;">Children</label>
                                <select class="form-select shadow-none">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>
                                    <option value="5">Five</option>
                                    <option value="6">Six</option>
                                    <option value="7">Seven</option>
                                    <option value="8">Eight</option>
                                    <option value="9">Nine</option>
                                    <option value="10">Ten</option>
                                </select>
                            </div>
                            <div class="col-lg-1 mb-lg-3 mt-2">
                                <button type="submit" class="btn shadow-none text-white custom-bg">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Our rooms -->

            <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>

            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                            <img src="images/rooms/2.png" class="card-img-top">
                            <div class="card-body">
                                <h5>Simple Room Name</h5>
                                <h6 class="mb-4">₹ 200 per Night</h6>
                                <div class="features mb-4">
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
                                <div class="facilities mb-4">
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
                                <div class="guests mb-4">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                        9 Adults
                                    </span>
                                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                        10 Childrens
                                    </span>
                                </div>
                                <div class="rating mb-4">
                                    <h6 class="mb-1">Rating</h6>
                                    <span>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                    </span>
                                </div>
                                <div class="d-flex justify-content-evenly">
                                    <a href="#" class="btn shadow-none text-white custom-bg">Book Now</a>
                                    <a href="#" class="btn btn-sm btn-outline-dark shadow-none ">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                            <img src="images/rooms/2.png" class="card-img-top">
                            <div class="card-body">
                                <h5>Simple Room Name</h5>
                                <h6 class="mb-4">₹ 200 per Night</h6>
                                <div class="features mb-4">
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
                                <div class="facilities mb-4">
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
                                <div class="guests mb-4">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                        9 Adults
                                    </span>
                                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                        10 Childrens
                                    </span>
                                </div>
                                <div class="rating mb-4">
                                    <h6 class="mb-1">Rating</h6>
                                    <span>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                    </span>
                                </div>
                                <div class="d-flex justify-content-evenly">
                                    <a href="#" class="btn shadow-none text-white custom-bg">Book Now</a>
                                    <a href="#" class="btn btn-sm btn-outline-dark shadow-none ">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                            <img src="images/rooms/2.png" class="card-img-top">
                            <div class="card-body">
                                <h5>Simple Room Name</h5>
                                <h6 class="mb-4">₹ 200 per Night</h6>
                                <div class="features mb-4">
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
                                <div class="facilities mb-4">
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
                                <div class="guests mb-4">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                        9 Adults
                                    </span>
                                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                        10 Childrens
                                    </span>
                                </div>
                                <div class="rating mb-4">
                                    <h6 class="mb-1">Rating</h6>
                                    <span>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                    </span>
                                </div>
                                <div class="d-flex justify-content-evenly">
                                    <a href="#" class="btn shadow-none text-white custom-bg">Book Now</a>
                                    <a href="#" class="btn btn-sm btn-outline-dark shadow-none ">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center mt-5">
                        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
                    </div>
                </div>
            </div>

            <!-- Facilities -->

            <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>

            <div class="container">
                <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                        <img src="images/facilities/wifi.svg" width="80px">
                        <h5 class="mt-3">Wifi</h5>
                    </div>
                    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                        <img src="images/facilities/wifi.svg" width="80px">
                        <h5 class="mt-3">Wifi</h5>
                    </div>
                    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                        <img src="images/facilities/wifi.svg" width="80px">
                        <h5 class="mt-3">Wifi</h5>
                    </div>
                    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                        <img src="images/facilities/wifi.svg" width="80px">
                        <h5 class="mt-3">Wifi</h5>
                    </div>
                    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                        <img src="images/facilities/wifi.svg" width="80px">
                        <h5 class="mt-3">Wifi</h5>
                    </div>
                    <div class="col-lg-12 text-center mt-5">
                        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
                    </div>
                </div>
            </div>


            <!-- testimonials -->

            <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>

            <div class="container mt-5">
                <div class="swiper swiper-testimonials">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide bg-white mb-3">
                            <div class="profile d-flex align-items-center p-4">
                                <img src="images/facilities/icons8-star-64.png" width="30px">
                                <h6 class="m-0 ms-2">Random user1</h6>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                                                                                                            Provident vitae magni quas neque, et harum sequi nulla illum
                                                                                                                                                             maxime ratione.</p>
                            <div class="rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>

                        </div>
                        <div class="swiper-slide bg-white mb-3">
                            <div class="profile d-flex align-items-center p-4">
                                <img src="images/facilities/icons8-star-64.png" width="30px">
                                <h6 class="m-0 ms-2">Random user1</h6>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                                                                                                        Provident vitae magni quas neque, et harum sequi nulla illum
                                                                                                                                                         maxime ratione.</p>
                            <div class="rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>

                        </div>
                        <div class="swiper-slide bg-white mb-3">
                            <div class="profile d-flex align-items-center p-4">
                                <img src="images/facilities/icons8-star-64.png" width="30px">
                                <h6 class="m-0 ms-2">Random user1</h6>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                                                                                                    Provident vitae magni quas neque, et harum sequi nulla illum
                                                                                                                                                     maxime ratione.</p>
                            <div class="rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>

                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="col-lg-12 text-center mt-5">
                        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
                    </div>
            </div>

                <!-- reach us -->

                <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                            <iframe class="w-100 rounded" height="350px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230660.8692412711!2d81.80158454999999!3d25.402263750000024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398534c9b20bd49f%3A0xa2237856ad4041a!2sPrayagraj%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1698937718585!5m2!1sen!2sin" loading="lazy"></iframe>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="bg-white p-4 rounded mb-4">
                                <h6>Call us</h6>
                                <!-- *! anchaor tag is inline element and we cant apply margin on this so we set  it inline block element -->
                                <a href="tel: +918877665544" class="d-inline-block mb-2 text-decoration-none text-dark">
                                    <i class="bi bi-telephone-fill"></i>
                                    +918877665544</a>
                                <br>
                                <a href="tel: +919933550011" class="d-inline-block mb-2 text-decoration-none text-dark">
                                    <i class="bi bi-telephone-fill"></i>
                                    +919933550011</a>

                            </div>
                            <div class="bg-white p-4 rounded mb-4 ">
                                <h6>Follow us</h6>
                                <!-- *! anchaor tag is inline element and we cant apply margin on this so we set  it inline block element -->
                                <a href="#" class="d-inline-block mb-3">
                                    <span class=" badge bg-light text-dark fs-6 p-2">
                                        <i class="bi bi-twitter me-1"></i>Twitter
                                    </span>
                                </a>
                                <br>
                                <a href="#" class="d-inline-block mb-3">
                                    <span class=" badge bg-light text-dark fs-6 p-2">
                                        <i class="bi bi-instagram me-1"></i>Instagram
                                    </span>
                                </a>
                                <br>

                                <a href="#" class="d-inline-block ">
                                    <span class=" badge bg-light text-dark fs-6 p-2">
                                        <i class="bi bi-facebook me-1"></i>
                                        Facebook
                                    </span>
                                </a>
                                <br>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- footer -->

     <?php require('include/footer.php')  ?>
                <!-- Initialize Swiper -->

                <!-- make sure swiper library is properly loaded before the script --><script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"> </script>

                <script>

                    // crousels
                    var swiper = new Swiper(".swiper-container", {
                        spaceBetween: 30,
                        effect: "fade",
                        loop: true,
                        autoplay: {
                            delay: 3500,
                            disableOnInteraction: false
                        },

                        navigation: {
                            nextEl: ".swiper-button-next",
                            prevEl: ".swiper-button-prev"
                        }
                    });

                    // testimonials
                    var swiper = new Swiper(".swiper-testimonials", {
                        effect: "coverflow",
                        grabCursor: true,
                        centeredSlides: true,
                        slidesPerView: "3",
                        loop: true,
                        coverflowEffect: {
                            rotate: 50,
                            stretch: 0,
                            depth: 100,
                            modifier: 1,
                            slideShadows: false
                        },
                        pagination: {
                            el: ".swiper-pagination"
                        },

                        breakpoints: {

                            320: {
                                slidesPerView: 1,
                                spaceBetween: 0
                            },
                            640: {
                                slidesPerView: 1,
                                spaceBetween: 0
                            },
                            768: {
                                slidesPerView: 2,
                                spaceBetween: 0
                            },
                            1024: {
                                slidesPerView: 3,
                                spaceBetween: 0
                            }


                        }
                    });
                </script>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            </body>
        </body>
    </body>
</html>
