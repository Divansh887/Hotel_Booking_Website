<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DG Hotel-about</title>
    <?php include('include/links.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body class="bg-light">

    <?php require('include/header.php') ?>

    <div class="my-5 px-4">
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">About Us</h2>
        <div class="h-line bg-dark"></div>
        <div class="mt-3 text-center">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia praesentium <br>
                molestiae debitis porro sequi! Aperiam sapiente sit vero tempora perferendis,<br>
                distinctio quos facere culpa nostrum ratione sunt fugiat </p>
        </div>
    </div>

    <div class="container ">
        <div class="row d-flex align-items-center justify-content-between">
            <div class="col-lg-6 col-md-5 mb-4">
                <h3 class="mb-3">Hii, I am Andrew Charles</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br>
                    Tempore officia explicabo soluta nam impedit iusto id accusantium
                    reprehenderit quae praesentium.</p>
            </div>
            <div class="col-lg-6 col-md-5 mb-4">
                <!-- w-100 will take up the full width of its parent container -->
                <img src="images/about/about.jpg" class="w-100">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row d-flex">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop text-center">
                    <img src="images/about/hotel.svg" width="70px">
                    <h4 class="mt-3">100+ Rooms</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop text-center">
                    <img src="images/about/customers.svg" width="70px">
                    <h4 class="mt-3">200+ Customers</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop text-center">
                    <img src="images/about/rating.svg" width="70px">
                    <h4 class="mt-3">100+ Reviews</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop text-center">
                    <img src="images/about/staff.svg" width="70px">
                    <h4 class="mt-3">200+ Staffs</h4>
                </div>
            </div>
        </div>
    </div>

    <h3 class="my-5 fw-bold h-font text-center">Management Team</h3>

    <div class="container">
        <div class="swiper mySwiper mb-5">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/IMG_17352.jpg" class="w-100">
                    <h5 class="mt-2">Branden Ninja</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/IMG_17352.jpg" class="w-100">
                    <h5 class="mt-2">Branden Ninja</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/IMG_17352.jpg" class="w-100">
                    <h5 class="mt-2">Branden Ninja</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/IMG_17352.jpg" class="w-100">
                    <h5 class="mt-2">Branden Ninja</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/IMG_17352.jpg" class="w-100">
                    <h5 class="mt-2">Branden Ninja</h5>
                </div>
            </div>
        </div>
    </div>

    <?php require('include/footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script>

        var swiper = new Swiper(".mySwiper", {

            slidesPerView: 4,
            spaceBetween: 40,
            loop: true,

            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {

                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                }


            }
        });
    </script>

</body>
</body>
</body>

</html>