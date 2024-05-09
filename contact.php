<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DG Hotel-Contact</title>
    <?php include('include/links.php') ?>
</head>

<body class="bg-light">

    <?php require('include/header.php') ?>
    <div class="my-5 px-4">
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Contact Us</h2>
        <div class="h-line bg-dark"></div>
        <div class="mt-3 text-center">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia praesentium <br>
                molestiae debitis porro sequi! Aperiam sapiente sit vero tempora perferendis,<br>
                distinctio quos facere culpa nostrum ratione sunt fugiat </p>
        </div>
    </div>
    <!-- left part -->

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe class=" w-100 rounded mb-4" target="_blank" height="320px"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115330.30833577899!2d81.71918275013222!3d25.402395861918716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398534c9b20bd49f%3A0xa2237856ad4041a!2sPrayagraj%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1699030945869!5m2!1sen!2sin"
                        loading="lazy"></iframe>
                    <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/qcFTAZsSyECD7DFq6" class="text-decoration-none text-dark"><i
                            class="bi bi-geo-alt-fill"></i>
                        Allahpur, Prayagraj, Uttar Pradesh
                    </a>
                    <h6 class="mt-4">Call us</h6>
                    <!-- *! anchaor tag is inline element and we cant apply margin on this so we set  it inline block element -->
                    <a href="tel: +918877665544" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>
                        +918877665544</a>
                    <br>
                    <a href="tel: +919933550011" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>
                        +919933550011</a>
                    <h5 class="mt-4">Email</h5><i class="bi bi-envelope-fill"></i>
                    <a href="mailto: div.887@gmail.com" class="text-decoration-none text-dark">div.@gmail.com</a>

                    <h6 class="mt-4">Follow us</h6>
                    <!-- *! anchaor tag is inline element and we cant apply margin on this so we set  it inline block element -->
                    <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2">
                        <i class="bi bi-twitter me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block mb-3 text-dark fs-5 ">
                        <i class="bi bi-instagram me-1"></i>
                    </a>
                    <br>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form action="">
                        <h5>Send a Message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;"> Name </label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Subject</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Message</label>
                            <textarea type="textarea" rows="4" cols="50" class="form-control shadow-none"></textarea>
                        </div>
                        <button type="submit" class="btn shadow-none text-white custom-bg mt-4">Send</button>                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- right part -->




    <?php require('include/footer.php') ?>

</body>
</body>
</body>

</html>