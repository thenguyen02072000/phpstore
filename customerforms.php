<!DOCTYPE html>
<html lang="en">
<?php 
include ("partials/head.php");
?>

<body class="animsition">
    <?php 
	include ("partials/header.php");
	?>

    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/about1.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            Customers
        </h2>
    </section>


    <!-- Content page -->
    <section class="bg0 p-t-104 p-b-116">
        <div class="container">
            <div class="flex-w flex-tr">
                <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                    <form action="handler/customerlogin.php" method="POST">
                        <h4 class="mtext-105 cl2 txt-center p-b-30">
                            Log in
                        </h4>

                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="username"
                                required placeholder="Username" pattern="^[a-z0-9_-]{3,16}$"
                                title="Username that may include _ and – having a length of 3 to 16 characters.">
                        </div>

                        <div class="bor8 m-b-30">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="password"
                                placeholder="Password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"
                                title="Password minimum eight characters, at least one letter and one number" required>

                        </div>

                        <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer"
                            name="login">
                            Log in
                        </button>
                    </form>
                </div>

                <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                    <form action="handler/customerregister.php" method="POST">
                        <h4 class="mtext-105 cl2 txt-center p-b-30">
                            Register
                        </h4>

                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="username"
                                placeholder="Username" pattern="^[a-z0-9_-]{3,16}$"
                                title="Username that may include _ and – having a length of 3 to 16 characters."
                                required>
                        </div>

                        <div class="bor8 m-b-30">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="password"
                                placeholder="Password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"
                                title="Password minimum eight characters, at least one letter and one number" required>
                        </div>

                        <div class="bor8 m-b-30">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="password2"
                                placeholder="Confirm Your Password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"
                                title="Password minimum eight characters, at least one letter and one number" required>
                        </div>


                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="fullname"
                                placeholder="Fullname"
                                pattern="^([a-zA-Z0-9]+|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{1,}|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{3,}\s{1}[a-zA-Z0-9]{1,})$"
                                title="Please enter right name" required>
                        </div>

                        <div class=" bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="tel" name="phonenumber"
                                pattern="(84|0[3|5|7|8|9])+([0-9]{8})\b" required placeholder="Phone Number"
                                title="Please enter right phone number!">
                        </div>
                        <div class=" bor8 m-b-20 how-pos4-parent">
                            <input type="email" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" id="inputEmail3"
                                placeholder="Email" name="email" required>

                        </div>



                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="address"
                                placeholder="Address" required>
                        </div>




                        <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                            Sign Up
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Map -->
    <div class="map">
        <div class="size-303" id="google_map" data-map-x="40.691446" data-map-y="-73.886787"
            data-pin="images/icons/pin.png" data-scrollwhell="0" data-draggable="1" data-zoom="11"></div>
    </div>



    <!-- Footer -->
    <?php
	include("partials/footer.php");
	?>

</body>

</html>