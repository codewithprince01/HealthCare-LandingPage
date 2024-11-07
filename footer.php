<footer>
        <div class="container ">
            <div class="row footer_main ">
                <div class="col-12 col-sm-6 col-md-4 footer_form ">
                    <h4 style="font-weight: 600; ">BOOK AN APPOINTMENT
                    </h4>
                    <form class="footer_f_class ">
                        <div class="form-group ">
                            <input type="text " class="form-control " id="namee" placeholder="Name" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text " class="form-control " id="phonee" placeholder="Phone Number" required>
                        </div>

                        <button style="background-color: #324d9d; " type="submit" class="btn btn-primary custom-btn mt-3" onclick="whatsappp();">Submit</button>
                    </form>
                </div>


                <div style="padding-left:20px; " class="col-12 col-sm-6 col-md-4 icon_style ">
                    <h4 style="font-weight: 600; ">ROORKEE CLINIC</h4>
                    <hp style="color: #787878; font-weight: 500; ">Contact Details</hp>
                    <a style="text-decoration: none; " href="mailto:example@example.com ">
                        <p style="margin-top: 10px; "><i class="fa fa-envelope " aria-hidden="true "></i>&nbsp;&nbsp;aceclinicroorkee@gmail.com</p>
                    </a>
                    <a style="text-decoration: none; " href="tel:+1 123-456-7890 ">
                        <p><i class="fa fa-phone " aria-hidden="true "></i>&nbsp;&nbsp;9548732883</p>
                    </a>
                    <p><i class="fa fa-map-marker " aria-hidden="true "></i>&nbsp;&nbsp;Azad Nagar chowk, Roorkee, India, Uttarakhand &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;247667,</p>
                    <p><i class="fa fa-calendar " aria-hidden="true "></i> &nbsp;&nbsp;Clinic Timings</p>
                    <div style="border: 1px solid #f7f7f7; " class="row d-flex ">
                        <div style="width: 50%; " class="d1 ">Monday-Saturday </div>
                        <div style="width: 50%; " class=" d2 ">10 AM - 9 PM
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 icon_style ">
                    <h2>Location</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d216.23817335542526!2d77.87699197425813!3d29.86973056117605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390eb75accdf78dd%3A0xfd3328bc8ddbca3a!2sACE%20Clinic!5e0!3m2!1sen!2sin!4v1688813654163!5m2!1sen!2sin "
                        width="100% " height="250 " frameborder="0 " style="border:0 " allowfullscreen=" " loading="lazy " referrerpolicy="no-referrer-when-downgrade "></iframe>
                </div>
            </div>
        </div>
        <a href="https://api.whatsapp.com/send?phone=919548732883&text=Hi%2C%20I%20have%20a%20query " class="floata " target="_blank ">
            <i class="fa fa-whatsapp my-floata " aria-hidden="true "></i>
        </a>
        <a style="background-color: #324d9d; " href="tel:+919548732883 " class="floata1 " target="_blank ">
            <i style="color: white; " class="fa fa-phone my-floata1 "></i>
        </a>
        <div class="footer_bottom ">&copy;<span id="year "> </span><span> Best Dermatologist in Roorkee - Dr. Tanveer Fatima. All rights reserved.</span></div>
    </footer>

    <script>
        function whatsapp() {
            var name = document.getElementById("name").value;
            var phone = document.getElementById("phone").value;

            // Check if the phone number is valid and not empty
            if (phone && !isNaN(phone) && phone.length >= 10) {
                var url = "https://wa.me/" + 9548732883 + "?text=" +
                    "Name: " + encodeURIComponent(name) + "%0a" +
                    "Phone: " + encodeURIComponent(phone) + "%0a";

                window.open(url, '_blank').focus();
            } else {
                alert("Please enter a valid phone number.");
            }
        }
    </script>

    <script>
        function whatsappp() {
            var name = document.getElementById("namee").value;
            var phone = document.getElementById("phonee").value;

            // Check if the phone number is valid and not empty
            if (phone && !isNaN(phone) && phone.length >= 10) {
                var url = "https://wa.me/" + 9548732883 + "?text=" +
                    "Name: " + encodeURIComponent(name) + "%0a" +
                    "Phone: " + encodeURIComponent(phone) + "%0a";

                window.open(url, '_blank').focus();
            } else {
                alert("Please enter a valid phone number.");
            }
        }
    </script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js " integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p " crossorigin="anonymous "></script>
</body>

</html>