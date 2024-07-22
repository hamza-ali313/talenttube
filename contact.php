<?php
$page = 'Home';
$pageDesc = '""';
include 'includes/header1.php';
$page = 'home';
?>

<div class="position-relative">
    <img class="contact_build_img" src="images/contact_building.svg" alt="">
    <section class="search-sec">
        <div class="container">
            <div class="search_area">
                <h2>How can we help you today?</h2>
                <form>
                    <input type="search" placeholder="Search for the topic">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </form>
            </div>
        </div>
    </section>
    <section class="contact_body">
        <div class="container">
            <div class="contact_body_inner">

                <h1>Contact us</h1>
                <p>Please fill in the form below so we can respond to your inquiry</p>
                <form>
                    <div class="item1">
                        <select class="form-select form-select-lg" aria-label=".form-select-lg example">
                            <option selected>Is English your preferred language or should we contact you in another
                                language? *
                            </option>
                            <option value="1">Spanish</option>
                            <option value="2">Mexican</option>
                            <option value="3">French</option>
                            <option value="3">Italian</option>
                            <option value="3">Arabic</option>
                        </select>
                    </div>
                    <div class="item1">
                        <select class="form-select form-select-lg" aria-label=".form-select-lg example">
                            <option selected>What is your question about? *</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="item1">
                        <label for="">First name *</label>
                        <input type="text" placeholder="Enter first name">
                    </div>
                    <div class="item1">
                        <label for="">Last name *</label>
                        <input type="text" placeholder="Enter last name">
                    </div>
                    <div class="item1">
                        <label for="">Email address *</label>
                        <input type="text" placeholder="Enter email name">
                    </div>
                    <div class="item1 cont_file_upload">
                        <label for="">File Upload</label>
                        <div class="c_upload_docs">
                            <input type="file" placeholder="Enter email name">
                            <div class="c_u_copy">
                                <span>Upload your document</span>
                                <i class="fa-solid fa-arrow-up-from-bracket"></i>
                            </div>
                        </div>
                        <p>[File size : 2MB pdf, jpeg, png]</p>
                    </div>
                    <div class="item1">
                        <label for="">Message *</label>
                        <textarea rows="4" placeholder="Describe your issue"></textarea>
                    </div>
                    <div class="item1">
                        <h4>Please verify that you are not a robot by<br> completing the field below</h4>
                    </div>
                    <div class="text-end mt-4">
                        <a href="javascript:;" class="theme-btn3 cbtn"  data-bs-target="#success-post3"
                                data-bs-toggle="modal">Send</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<?php
include 'includes/footer.php';
$page = 'home';
?>