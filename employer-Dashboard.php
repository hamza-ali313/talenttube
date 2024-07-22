<?php
$page = 'Home';
$pageDesc = '""';
include 'includes/header1.php';
$page = 'home';
?>


<!-- employe-dashboard pg start -->
<section class="employe-dashboard-pg">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="filter-option">
                    <h2>Filter Option</h2>
                    <div class="filter-dropdown filter-Employer-Picks-dropdown my-3">
                        <div class="filter-dropdown-head">
                            <h6>Employer Picks</h6>
                            <button class="button toggle-button"> <i class="fas fa-chevron-down fa-sm"></i></button>
                        </div>
                        <div class="filter-content">
                            <ul>
                                <li class="active">
                                    <a href="#">- Jobs in Tech <span>(105)</span></a>
                                </li>
                                <li>
                                    <a href="#">
                                        + Most Commented <span>(21)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        + Newest Jobs <span>(32)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        + Featured <span>(129)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        + Watch History <span>(21)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        + Best Jobs <span>(44)</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="filter-dropdown filter-Category-dropdown my-3">
                        <div class="filter-dropdown-head">
                            <h6>Posts by Category</h6>
                            <button class="button toggle-button"> <i class="fas fa-chevron-down fa-sm"></i></button>
                        </div>
                        <div class="filter-content">
                            <form action="">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-3 custom-checkbox">
                                            <input type="checkbox" class="form-check-input" id="Technology">
                                            <label class="form-check-label" for="Technology">
                                                <span class="cust-checkbox"></span>
                                                Technology</label>
                                        </div>
                                        <div class="mb-3 custom-checkbox">
                                            <input type="checkbox" class="form-check-input" id="Cybersecurity">
                                            <label class="form-check-label" for="Cybersecurity">
                                                <span class="cust-checkbox"></span>
                                                Cybersecurity</label>
                                        </div>
                                        <div class="mb-3 custom-checkbox">
                                            <input type="checkbox" class="form-check-input" id="Computers">
                                            <label class="form-check-label" for="Computers">
                                                <span class="cust-checkbox"></span>
                                                Computers</label>
                                        </div>
                                        <div class="mb-3 custom-checkbox">
                                            <input type="checkbox" class="form-check-input" id="Development">
                                            <label class="form-check-label" for="Development">
                                                <span class="cust-checkbox"></span>
                                                Development</label>
                                        </div>
                                        <div class="mb-3 custom-checkbox">
                                            <input type="checkbox" class="form-check-input" id="Website">
                                            <label class="form-check-label" for="Website">
                                                <span class="cust-checkbox"></span>
                                                Website</label>
                                        </div>
                                        <div class="mb-3 custom-checkbox">
                                            <input type="checkbox" class="form-check-input" id="Compliance">
                                            <label class="form-check-label" for="Compliance">
                                                <span class="cust-checkbox"></span>
                                                Compliance</label>
                                        </div>
                                        <div class="mb-3 custom-checkbox">
                                            <input type="checkbox" class="form-check-input" id="Documentary">
                                            <label class="form-check-label" for="Documentary">
                                                <span class="cust-checkbox"></span>
                                                Documentary</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-3 custom-checkbox">
                                            <input type="checkbox" class="form-check-input" id="Coding">
                                            <label class="form-check-label" for="Coding">
                                                <span class="cust-checkbox"></span>
                                                Coding</label>
                                        </div>
                                        <div class="mb-3 custom-checkbox">
                                            <input type="checkbox" class="form-check-input" id="PHP">
                                            <label class="form-check-label" for="PHP">
                                                <span class="cust-checkbox"></span>
                                                PHP</label>
                                        </div>
                                        <div class="mb-3 custom-checkbox">
                                            <input type="checkbox" class="form-check-input" id="C++">
                                            <label class="form-check-label" for="C++">
                                                <span class="cust-checkbox"></span>
                                                C++</label>
                                        </div>
                                        <div class="mb-3 custom-checkbox">
                                            <input type="checkbox" class="form-check-input" id="Java">
                                            <label class="form-check-label" for="Java">
                                                <span class="cust-checkbox"></span>
                                                Java</label>
                                        </div>
                                        <div class="mb-3 custom-checkbox">
                                            <input type="checkbox" class="form-check-input" id="MobileApp">
                                            <label class="form-check-label" for="MobileApp">
                                                <span class="cust-checkbox"></span>
                                                Mobile App</label>
                                        </div>
                                        <div class="mb-3 custom-checkbox">
                                            <input type="checkbox" class="form-check-input" id="IoT">
                                            <label class="form-check-label" for="IoT">
                                                <span class="cust-checkbox"></span>
                                                IoT</label>
                                        </div>
                                        <div class="mb-3 custom-checkbox">
                                            <input type="checkbox" class="form-check-input" id="Certifications">
                                            <label class="form-check-label" for="Certifications">
                                                <span class="cust-checkbox"></span>
                                                Certifications</label>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="filter-dropdown filter-price-dropdown my-3">
                        <div class="filter-dropdown-head">
                            <h6>Applicants </h6>
                            <button class="button toggle-button"> <i class="fas fa-chevron-down fa-sm"></i></button>
                        </div>
                        <div class="filter-content">
                            <h2>Range</h2>
                            <div class="price-filter">
                                <div class="inp-rd">
                                    <h6 id="amount-start">
                                </div>
                                <div class="inp-rd">
                                    <h6 id="amount-end">
                                </div>
                                <div id="price-range"></div>
                            </div>
                        </div>
                    </div>
                    <a href="" type="submit" class="theme-btn3">
                        Refine Search
                    </a>
                    <a href="" type="submit" class="theme-btn5">
                        Reset Filter
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-9">
                <div class="filtered-jobs-sec">
                    <div class="filtered-options">
                        <ul class="time-fliter">
                            <li>
                                <a href="">today</a>
                            </li>
                            <li>
                                <a href="">this week</a>
                            </li>
                            <li>
                                <a href="">this month</a>
                            </li>
                        </ul>
                        <ul class="view-fliter">
                            <li>
                                <a href=""><i class="fa-regular fa-bars"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fa-light fa-grid-2"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fa-light fa-grid-2"></i></a>
                            </li>
                            <li class="newest-fliter">
                                <a href=""><i class="fa-light fa-arrow-down-short-wide"></i><span>newest</span> <i
                                        class="fa-sharp fa-regular fa-chevron-down"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                <div class="main-filtered-jobs">
                                    <div class="main-filtered-box">
                                        <div class="row">
                                            <div class="col-12 col-lg-4">
                                                <div class="main-filtered-box-img">
                                                    <img src="images/tech1.png" alt="" class="img-fluid">
                                                    <h6>Everest
                                                        Tech
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-8">
                                                <div class="main-filtered-box-txt">
                                                    <div class="main-filtered-head-txt">
                                                        <div>
                                                            <h2>Everest Tech</h2>
                                                            <h6>SCIENCE and TECHNOLOGY</h6>
                                                        </div>
                                                        <h4>2 days</h4>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam,
                                                    </p>
                                                    <ul>
                                                        <li>
                                                            <button>
                                                                <i class="fa-sharp fa-light fa-thumbs-up"></i>
                                                                like
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button>
                                                                <i class="fa-light fa-comment"></i>
                                                                comment
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button>
                                                                <i class="fa-light fa-share-nodes"></i>
                                                                share
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-filtered-box">
                                        <div class="row">
                                            <div class="col-12 col-lg-4">
                                                <div class="main-filtered-box-img">
                                                    <img src="images/tech1.png" alt="" class="img-fluid">
                                                    <h6>Cyber Coast
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-8">
                                                <div class="main-filtered-box-txt">
                                                    <div class="main-filtered-head-txt">
                                                        <div>
                                                            <h2>Cyber Coast</h2>
                                                            <h6>SCIENCE and TECHNOLOGY</h6>
                                                        </div>
                                                        <h4>2 days</h4>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam,
                                                    </p>
                                                    <ul>
                                                        <li>
                                                            <button>
                                                                <i class="fa-sharp fa-light fa-thumbs-up"></i>
                                                                like
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button>
                                                                <i class="fa-light fa-comment"></i>
                                                                comment
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button>
                                                                <i class="fa-light fa-share-nodes"></i>
                                                                share
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-filtered-box">
                                        <div class="row">
                                            <div class="col-12 col-lg-4">
                                                <div class="main-filtered-box-img">
                                                    <img src="images/tech1.png" alt="" class="img-fluid">
                                                    <h6>TechSav
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-8">
                                                <div class="main-filtered-box-txt">
                                                    <div class="main-filtered-head-txt">
                                                        <div>
                                                            <h2>TechSav</h2>
                                                            <h6>SCIENCE and TECHNOLOGY</h6>
                                                        </div>
                                                        <h4>2 days</h4>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam,
                                                    </p>
                                                    <ul>
                                                        <li>
                                                            <button>
                                                                <i class="fa-sharp fa-light fa-thumbs-up"></i>
                                                                like
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button>
                                                                <i class="fa-light fa-comment"></i>
                                                                comment
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button>
                                                                <i class="fa-light fa-share-nodes"></i>
                                                                share
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-filtered-box">
                                        <div class="row">
                                            <div class="col-12 col-lg-4">
                                                <div class="main-filtered-box-img">
                                                    <img src="images/tech1.png" alt="" class="img-fluid">
                                                    <h6>Xerox
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-8">
                                                <div class="main-filtered-box-txt">
                                                    <div class="main-filtered-head-txt">
                                                        <div>
                                                            <h2>Xerox</h2>
                                                            <h6>SCIENCE and TECHNOLOGY</h6>
                                                        </div>
                                                        <h4>2 days</h4>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam,
                                                    </p>
                                                    <ul>
                                                        <li>
                                                            <button>
                                                                <i class="fa-sharp fa-light fa-thumbs-up"></i>
                                                                like
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button>
                                                                <i class="fa-light fa-comment"></i>
                                                                comment
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button>
                                                                <i class="fa-light fa-share-nodes"></i>
                                                                share
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-filtered-box">
                                        <div class="row">
                                            <div class="col-12 col-lg-4">
                                                <div class="main-filtered-box-img">
                                                    <img src="images/tech1.png" alt="" class="img-fluid">
                                                    <h6>Mild Systems
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-8">
                                                <div class="main-filtered-box-txt">
                                                    <div class="main-filtered-head-txt">
                                                        <div>
                                                            <h2>Mild
                                                                Systems
                                                            </h2>
                                                            <h6>SCIENCE and TECHNOLOGY</h6>
                                                        </div>
                                                        <h4>2 days</h4>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam,
                                                    </p>
                                                    <ul>
                                                        <li>
                                                            <button>
                                                                <i class="fa-sharp fa-light fa-thumbs-up"></i>
                                                                like
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button>
                                                                <i class="fa-light fa-comment"></i>
                                                                comment
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button>
                                                                <i class="fa-light fa-share-nodes"></i>
                                                                share
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5">
                                <div class="related-jobs">
                                    <h1>Related Jobs</h1>
                                    <div class="related-jobs-box">
                                        <div class="row">
                                            <div class="col-12 col-lg-5">
                                                <div class="main-filtered-box-img">
                                                    <img src="images/tech2.png" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-7">
                                                <div class="main-filtered-box-txt">
                                                    <div class="main-filtered-head-txt">
                                                        <div>
                                                            <h2>Related Job Title - 1</h2>
                                                            <h6>Cybersecurity</h6>
                                                        </div>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod tempor incididunt
                                                    </p>
                                                    <ul>
                                                        <li>
                                                            <a href="#" class="theme-btn4">
                                                                view
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="theme-btn3">
                                                                join
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="related-jobs-box">
                                        <div class="row">
                                            <div class="col-12 col-lg-5">
                                                <div class="main-filtered-box-img">
                                                    <img src="images/tech2.png" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-7">
                                                <div class="main-filtered-box-txt">
                                                    <div class="main-filtered-head-txt">
                                                        <div>
                                                            <h2>Related Job Title - 1</h2>
                                                            <h6>Cybersecurity</h6>
                                                        </div>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod tempor incididunt
                                                    </p>
                                                    <ul>
                                                        <li>
                                                            <a href="#" class="theme-btn4">
                                                                view
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="theme-btn3">
                                                                join
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="related-jobs-box">
                                        <div class="row">
                                            <div class="col-12 col-lg-5">
                                                <div class="main-filtered-box-img">
                                                    <img src="images/tech2.png" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-7">
                                                <div class="main-filtered-box-txt">
                                                    <div class="main-filtered-head-txt">
                                                        <div>
                                                            <h2>Related Job Title - 1</h2>
                                                            <h6>Cybersecurity</h6>
                                                        </div>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod tempor incididunt
                                                    </p>
                                                    <ul>
                                                        <li>
                                                            <a href="#" class="theme-btn4">
                                                                view
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="theme-btn3">
                                                                join
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="" class="theme-btn5">view more</a>
                                </div>
                            </div>
                        </div>
                        <div class="paginatoion-sec">
                            <p>Showing 12 from 50 data</p>
                            <nav aria-label="Page navigation example">
                                <div class="page-item edge-one"><a class="page-link" href="#"><i
                                            class="fa-solid fa-chevron-left"></i>Previous</a></div>
                                <ul class="pagination">
                                    <li class="page-item "><a class="page-link active" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                </ul>
                                <div class="page-item edge-one"><a class="page-link" href="#">Next <i
                                            class="fa-solid fa-chevron-right"></i></a></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- employer pg end -->

<?php
include 'includes/footer.php';
$page = 'home';
?>