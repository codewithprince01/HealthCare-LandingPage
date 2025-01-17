<?php
include('header.php');

?>

<body>

<!-- ############################### NAVBAR ############################## -->
<div class="row">
    <nav style="margin:-6px 0px;" class="navbar navbar-light bg-light stretch ">
        <div class="container sm_class set-navbar">
            <a class="navbar-brand">
                <img class="img-1" src="img/ACE_CLINIC_-_Dr_Tanveer_Fatima-MBBS-MD-Dermatology.webp" alt="Best Dermatologist in roorkee">
            </a>
            <form class="d-flex_z menu_button_s">
                <button class="btn btn_custom_z btn-outline-success btn-hover button-b" data-bs-toggle="" data-bs-target="" type="button">
                    <a style="color: white; text-decoration: none ;" href="tel:+919548732883 " target="_blank" >BOOK AN APPOINTMENT</a>
                </button>
            </form>
        </div>
    </nav>
</div>


<!-- ############################### BANNER ############################## -->
<div style="max-width: 100%;" class="container ">
    <div class="row banner mt-5">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner banner-b">
                <div class="carousel-item active">
                    <img class="d-block w-100 h-100" src="img/Best Dermatologist in Roorkee - Dr Tanveer Fatim.webp" alt="Best Dermatologist in roorkee">
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ############################### APPOINTMENT ############################## -->
<div style="max-width: 100%;" class="container">
    <div class="row appointment common_style justify-content-center">
        <div class="section-3">
            <div class="hd-1">
                <h1 class="appointment_c" style="text-align: center; font-weight: bolder; color: rgb(68, 66, 66); letter-spacing: 1px;">Make An Appointment</h1>
            </div>
            <form style="margin-top: 20px;" method="post" name="emailcontact">
                <div class="row g-3 justify-content-center">
                    <div class="col-sm-6 col-md-4">
                        <input type="text" class="form-control appointment_in" id="name" placeholder="Name" required style="border-radius: 0!important; padding: 10px!important; color: #484444; height: 55px;">
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <input type="text" class="form-control appointment_in" id="phone" placeholder="Phone Number" required style="border-radius: 0!important; padding: 10px!important; color: #484444; height: 55px;">
                    </div>
                    <div class="col-md-4 col-lg-3 input-row">
                        <!-- Use type="submit" instead of type="button" to submit the form -->
                        <button type="submit" class="btn custom-btn1 btn-primary" onclick="whatsapp();" style="border-radius: 0!important; background-color: #324d9d; width: 100%;">Book Now</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- ############################### ABOUT ############################## -->

<div class="card_b_main1 comman_style">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-body card-body_1122 text-center">
                        <img src="https://www.skinzest.com/wp-content/uploads/2023/05/personalized-care-1.png" width="50" height="50" class="img-fluid" alt="Personalized Care">
                        <h4 class="card-title">Personalized Care</h4>
                        <p class="card-text">One-on-One consultation with doctors</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-body card-body_1122 text-center">
                        <img src="https://www.skinzest.com/wp-content/uploads/2023/05/expertise.png" width="50" height="50" class="img-fluid" alt="Experience">
                        <h4 class="card-title">Expertise</h4>
                        <p class="card-text">Highly trained Dermatologist and Plastic surgeon in house</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-body card-body_1122 text-center">
                        <img src="https://www.skinzest.com/wp-content/uploads/2023/05/safe.png" width="50" height="50" class="img-fluid" alt="Safe">
                        <h4 class="card-title">Safe</h4>
                        <p class="card-text">FDA approved clinical procedure</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-body card-body_1122 text-center">
                        <img src="https://www.skinzest.com/wp-content/uploads/2023/05/technology.png" width="50" height="50" class="img-fluid" alt="Technology">
                        <h4 class="card-title">Technology</h4>
                        <p class="card-text">State-of-the-art facilities and world-class technology</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-body card-body_1122 text-center">
                        <img src="https://www.skinzest.com/wp-content/uploads/2023/05/experience-and-trust.png" width="50" height="50" class="img-fluid" alt="Expertise">
                        <h4 class="card-title">Experience</h4>
                        <p class="card-text">12+ years of experience providing world-class dermatology and Aesthetics services</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- ############################### SKINZEST ############################## -->

<div class="about comman_style">
    <div style="max-width: 1100px; margin: auto;" class="container">
        <div style="padding-top: 50px; " class="row">
            <h1 style=" text-align: strat; color:  #324d9d; margin-bottom: 40px; font-size:2rem; font-weight: bolder;">ACE Clinic - Advance Skin and Hair Center</h1>
            <div class="col-md-6">
                <h2 style="margin-bottom: 10px;">Dr. Tanveer Fatima - Dermatologist in Roorkee </h2>
                <p style="color: #484444; text-align: justify;  font-size: 1.2rem; line-height: 2rem;">ACE Clinic was started in 2020 under the vision of Dr. Tanveer Fatima, best Dermatologist in Roorkee, MD Dermatology. ACE Clinic is the advance Skin and Hair centre for dermatology, aesthetics and cosmetic surgeries in Roorkee. At
                    ACE Clinic, patient comfort is of utmost priority. We believe that beauty lies in the eyes of the beholder and the beholder should always be you. Our clinic provides an extensive range of dermatology, skin and hair treatments.
                    While using some of the latest machines and technologies to treat skin and ageing problems, we believe in giving subtle enhancements to your natural features without an artificial or plastic appearance.
                </p>
            </div>
            <div class="col-md-6">
                <div class="tt-reset-tag-p video-box-poster">
                    <img style="height: 500px; width: 450px;" src="img/dr, tanveer.webp" width="570" height="413" data-src="img/dr, tanveer.webp" class="vc_single_image-img img-fluid attachment-full" alt="Best Dermatologist in roorkee" data-srcset="img/dr-nupur.webp" data-sizes="(max-width: 570px) 100vw, 570px"
                    />
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ############################### BEST DERMATOLOGIST ############################## -->

<div class="dermatologist comman_style">
    <div class="container">
        <div class="row pt-5">
            <div class="col-12 text-center">
                <h1 style="margin-bottom: 20px; font-weight: 600;" class="text-uppercase">Best Dermatologist in Roorkee</h1>
                <div class="h-decor"></div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-4 mb-3">
                <div class="card card_py">
                    <img class="card-title_11_image card-img-top" src="img/peeling.webp" alt="Peeling Treatment in Roorkee">
                    <div class="card-body d-flex flex-column">
                        <h3 style="margin-top: 1rem; font-weight:500;" class="card-title card-title_11">Peeling</h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3">
                <div class="card card_py">
                    <img class="card-title_11_image card-img-top" src="img/hair reduction.webp" alt="Hair Reduction in Roorkee">
                    <div class="card-body d-flex flex-column">
                        <h3 style="margin-top: 1rem; font-weight:500;" class="card-title card-title_11">Hair Reduction</h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3">
                <div class="card card_py">
                    <img class="card-title_11_image card-img-top" src="img/dermal fillerss.webp" alt="Derma Filler Treatment in Roorkee">
                    <div class="card-body d-flex flex-column">
                        <h3 style="margin-top: 1rem; font-weight:500;" class="card-title card-title_11">Dermal Fillers</h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3">
                <div class="card card_py">
                    <img class="card-title_11_image card-img-top" src="img/Acne.webp" alt="Acne Treatment in Roorkee">
                    <div class="card-body d-flex flex-column">
                        <h3 style="margin-top: 1rem; font-weight:500;" class="card-title card-title_11">Acne</h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3">
                <div class="card card_py">
                    <img class="card-title_11_image card-img-top" src="img/Pigmentation.webp" alt="Pigmentation Treatment in Roorkee">
                    <div class="card-body d-flex flex-column">
                        <h3 style="margin-top: 1rem; font-weight:500;" class="card-title card-title_11">Pignentation</h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3">
                <div class="card card_py">
                    <img class="card-title_11_image card-img-top" src="img/Hair.webp" alt="Best Hair Specialist in Roorkee">
                    <div class="card-body d-flex flex-column">
                        <h3 style="margin-top: 1rem; font-weight:500;" class="card-title card-title_11">Hair Transplant</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ############################### MEET THE TEAM ############################## -->

<div class=" container wizards comman_style">
    <div class="row">
        <div class="text-center">
            <h1 class="mb-4 mt-5" style="color:#324d9d; font-size:2.8rem; font-weight: bold;">Meet with Expert</h1>
            <h2 style="font-size:2.1rem; font-weight:600;" class="mb-3">Our Skin Specialist In Roorkee</h2>
        </div>
        <div class="d-flex justify-content-center ">
            <div class="card">
                <img style="height: 385px; margin-bottom: .5rem; width: 330px;" src="img/dr, tanveer.webp" class="card-img-top" alt="Best Dermatologist in roorkee">
                <div style="background-color: rgb(194, 190, 190); text-align: justify;   height: 300px; width: 330px;" class=" card-body card-body-clone">
                    <h5 style="padding-top: 20px; " class="card-title text-center"><i><b>Dr Tanveer Fatima - MBBS MD Dermatologist </b></i></h5>
                    <p style=" font-size: 1.1rem !important; " class="card-text text-center card-text-clone">She has years of experience as a dermatologist. She can assist you if you require a dermatologist in Roorkee, Uttarakhand (Skin Specialist). ACE Clinic is proud of its workforce, which consists of highly qualified and experienced
                        dermatologists
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ############################################ WHAT PATIENT ARE SAYING ########################### -->

<div class="container custom_mar_gen">
    <div class="row mb-3">
        <div class="col-12 text-center">
            <h1 style="font-weight: 600;" class="hd-2 text">What patients are saying about ACE Clinic ?</h1>
            <div class="h-decor"></div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div style="padding-top: 30px;">
                <div class="card">
                    <div style="text-align: justify;" class="qoute_box card-body">
                        <h2 style="color:#324d9d;" class="card-title card-title-t">Nimish Kumawat</h2>
                        <p class="card-text">Dr. Tanveer Fatima is an incredible doctor. Not only has she taken great care of my hair, but also she is lovely to speak with at every appointment. The combination of such care for the patient as a person and excellent medical
                            care is rare. I highly recommend becoming her patient</p>
                        <a style="text-decoration: none;" href="https://www.google.com/maps/contrib/103383199565777408267/reviews/@30.0340417,77.7566516,15z/data=!4m3!8m2!3m1!1e1?hl=en-US&entry=ttu" target="_blank">
                            <h4 style="color:#324d9d;" class="card-text" align="right">See Review</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div style="padding-top: 30px;">
                <div class="card">
                    <div style="text-align: justify;" class="qoute_box card-body">
                        <h2 style="color:#324d9d;" class="card-title card-title-t">Km Meenu</h2>
                        <p class="card-text">"I recently visited ACE CLINIC for a skin issue and had the pleasure of seeing Dr. Tanveer Fatima. She is an excellent skin specialist in Roorkee and I couldn't be happier with the results. She is very professional, attentive
                            and provided me with the best possible treatment.</p>
                        <a style="text-decoration: none;" href="https://www.google.com/maps/contrib/100699038095095942697/reviews/@21.3297208,80.7333984,5z/data=!3m1!4b1!4m3!8m2!3m1!1e1?hl=en-US&entry=ttu" target="_blank">
                            <h4 style="color:#324d9d;" class="card-text" align="right">See Review</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div style="padding-top: 30px;">
                <div class="card">
                    <div style="text-align: justify;" class="qoute_box card-body">
                        <h2 style="color:#324d9d;" class="card-title card-title-t">Rohan Vij</h2>
                        <p class="card-text">I had a great experience at ACE CLINIC with Dr. Tanveer Fatima. She is a highly skilled skin specialist in Roorkee. She listened to my concerns, provided me with accurate diagnosis and effective treatment. I would highly recommend
                            her to anyone looking for a skin specialist in Roorkee."</p>
                        <a style="text-decoration: none;" href="https://www.google.com/maps/contrib/106281046805357441906/reviews/@21.3297208,80.7333984,5z/data=!3m1!4b1!4m3!8m2!3m1!1e1?hl=en-US&entry=ttu" target="_blank">
                            <h4 style="color:#324d9d;" class="card-text" align="right">See Review</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ############################### TESTIMONIAL ############################## -->

<div class="testimonial comman_style custom_mar_gen ">
    <div class="testimonials ">
        <div class="container ">
            <div class="row ">
                <div class="col-md-12 d-flex justify-content-center ">
                    <div class="mt-5 " style="width: 1000px; ">
                        <div class="container ">
                            <div class="row ">
                                <h1 style="text-align: center; font-weight: 600; line-height: 0.167em; margin-bottom: 60px; font-family: Roboto " , serif;>Patient Testimonials</h1>
                                <div class="col-md-4 ">
                                    <div class="card ">
                                        <div class="card-body_p ">
                                            <iframe width="100% " height="360 " src="video/yt1s.com - Kanta   Dr Tanveer Fatimas Client Feedback  Testimonials_360p.mp4" frameborder="0 " allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 ">
                                    <div class="card ">
                                        <div class="card-body_p ">
                                            <iframe width="100% " height="360 " src="video/9convert.com - Naheed  Dr Tanveer Fatimas Client Feedback  Testimonials_360p.mp4 " frameborder="0 " allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 ">
                                    <div class="card ">
                                        <div class="card-body_p ">
                                            <iframe width="100% " height="360 " src="video/9convert.com - Navadeen  Dr Tanveer Fatimas Client Feedback  Testimonials_v240P.mp4" frameborder="0 " allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- #############################  FAQ ############################## -->
<div class="container faq comman_style">
    <div style="max-width: 1200px; margin: auto;" class="faq-child">
        <div style="text-align: center; margin: 20px;">
            <h1 style="font-weight: 600;">FAQs</h1>
        </div>
        <div style="margin-bottom: 100px;" class="accordion accordion-flush" id="accordionFlushExample">

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Q: Who is a dermatologist doctor?
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div style="text-align: start;" class="accordion-body">
                        A: A dermatologist is a medical doctor who specializes in the treatment of skin and hair conditions. They provide care for patients of all ages, from infants to the elderly. In addition to addressing various skin diseases and issues, dermatologists also
                        offer cosmetic and anti-aging procedures. Dr. Tanveer Fatima is one such dermatologist who treats conditions like acne, warts, hair loss, birthmarks, scars, and provides cosmetic and anti-aging treatments.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Q: What does a dermatologist do?
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div style="text-align: start;" class="accordion-body">
                        A: Dermatologists are responsible for diagnosing and treating a wide range of skin conditions. During the initial appointment, Dr. Tanveer Fatima, the top skin specialist in Roorkee, will conduct a thorough evaluation of the patient's skin. This involves
                        discussing the onset of the problem, symptoms experienced, and any prior treatments attempted. Dermatologists may also perform surgical procedures or laser surgery when necessary. Additionally, Dr. Tanveer Fatima has expertise
                        in cosmetic treatments like anti-wrinkle injections, fillers, and chemical peels.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsethree" aria-expanded="false" aria-controls="flush-collapsethree">
                        Q: When should you go to the dermatologist?
                    </button>
                </h2>
                <div id="flush-collapsethree" class="accordion-collapse collapse" aria-labelledby="flush-headingthree" data-bs-parent="#accordionFlushExample">
                    <div style="text-align: start;" class="accordion-body">
                        A: Regular visits to a dermatologist are crucial for maintaining healthy skin. It is recommended to have a skin examination at least once a year. If someone experiences a rash, abnormal growths, or persistent acne, it is advisable to consult a dermatologist
                        promptly. Skin screening is one of the essential reasons to see a dermatologist, as changes in the skin can occur over time, and early identification of any issues is vital.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingfour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                        Q: What is the difference between a cosmetologist and a dermatologist?
                    </button>
                </h2>
                <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                    <div style="text-align: start;" class="accordion-body">
                        A: A dermatologist is a qualified medical doctor specialising in the treatment of skin and hair problems. They can prescribe medications, perform dermatosurgery, and offer services to the general public. On the other hand, cosmetology focuses on procedures
                        aimed at enhancing physical characteristics such as hair, nails, and skin. Services provided by cosmetologists include chemical peels, laser treatments, wrinkle removal, and medical facial treatments. Dermatology and cosmetology
                        are distinct fields with different areas of expertise.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingfive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                        Q: Should I see a dermatologist for my acne?
                    </button>
                </h2>
                <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                    <div style="text-align: start;" class="accordion-body">
                        A: Acne can be a frustrating condition, affecting a large number of people at some point in their lives. If acne persists or becomes severe, it is advisable to consult a dermatologist. Dr. Tanveer Fatima, the top skin specialist in Roorkee, is known for
                        providing quick and effective acne treatments tailored to individual needs. Leaving acne untreated can lead to scarring, so seeking treatment promptly is important.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingsix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsesix" aria-expanded="false" aria-controls="flush-collapsesix">
                        Q: When should I see a dermatologist for hair loss?
                    </button>
                </h2>
                <div id="flush-collapsesix" class="accordion-collapse collapse" aria-labelledby="flush-headingsix" data-bs-parent="#accordionFlushExample">
                    <div style="text-align: start;" class="accordion-body">
                        A: Hair loss is a common occurrence, with individuals typically losing 50 to 100 hairs per day. However, if hair loss is excessive or noticeable thinning occurs in specific areas, it is recommended to schedule an appointment with a dermatologist. Dr.
                        Tanveer Fatima, renowned as the best dermatologist in Roorkee for treating hair loss, will examine the scalp, inquire about the duration of hair loss, medication history, and family baldness history. Based on the investigation,
                        she will diagnose the underlying cause of hair loss and suggest appropriate treatment options.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingseven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseseven" aria-expanded="false" aria-controls="flush-collapseseven">
                        Q: Does a dermatologist provide online consultation?
                    </button>
                </h2>
                <div id="flush-collapseseven" class="accordion-collapse collapse" aria-labelledby="flush-headingseven" data-bs-parent="#accordionFlushExample">
                    <div style="text-align: start;" class="accordion-body">
                        A: Due to the pandemic and the increased workload of dermatologists, online consultations have become more prevalent. Experienced dermatologists can diagnose skin issues through text, audio, or video consultations and provide suitable treatment recommendations.
                        Dr. Tanveer Fatima, the best dermatologist in Roorkee, also offers online consultations to her patients.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingeight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseeight" aria-expanded="false" aria-controls="flush-collapseeight">
                        Q: Why is Dr. Tanveer Fatima the Best Dermatologist in Roorkee?
                    </button>
                </h2>
                <div id="flush-collapseeight" class="accordion-collapse collapse" aria-labelledby="flush-headingeight" data-bs-parent="#accordionFlushExample">
                    <div style="text-align: start;" class="accordion-body">
                        A: Dr. Tanveer Fatima has earned a reputation as the best dermatologist in Roorkee due to her extensive experience in treating various skin issues, including critical dermatological diseases. With a track record of providing effective treatment to numerous
                        patients, she prioritises individualised care and achieves outstanding results. Her vast knowledge and expertise in the field of dermatology set her apart from other practitioners.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingnine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsenine" aria-expanded="false" aria-controls="flush-collapsenine">
                        Q: Does a Dermatologist carry out Plastic & Cosmetic procedures?
                    </button>
                </h2>
                <div id="flush-collapsenine" class="accordion-collapse collapse" aria-labelledby="flush-headingnine" data-bs-parent="#accordionFlushExample">
                    <div style="text-align: start;" class="accordion-body">
                        A: Dermatologists are trained to perform minor surgical procedures known as dermatosurgy. These procedures may include nail avulsion, wart removal, skin tag removal, and vitiligo surgeries, among others.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php

    include('footer.php');

    ?>