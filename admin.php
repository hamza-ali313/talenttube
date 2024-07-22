<?php
$page = 'Home';
$pageDesc = '""';
include 'includes/header1.php';
$page = 'home';
?>
<section class="jobs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="filtered-options pb-3">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="myJobs-tab" data-bs-toggle="tab" data-bs-target="#myJobs"
                                type="button" role="tab" aria-controls="myJobs" aria-selected="true">My Jobs</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="candidates-tab" data-bs-toggle="tab" data-bs-target="#candidates"
                                type="button" role="tab" aria-controls="candidates" aria-selected="false">Candidates</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="myCompany-tab" data-bs-toggle="tab" data-bs-target="#myCompany"
                                type="button" role="tab" aria-controls="myCompany" aria-selected="false">My company</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="myPlan-tab" data-bs-toggle="tab" data-bs-target="#myPlan"
                                type="button" role="tab" aria-controls="myPlan" aria-selected="false">My plan</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="myProfile-tab" data-bs-toggle="tab" data-bs-target="#myProfile"
                                type="button" role="tab" aria-controls="myProfile" aria-selected="false">My profile</a>
                        </li>
                    </ul>
                    <!-- <ul class="d-flex gap-3">
                        <li><button class="theme-btn3" data-bs-toggle="modal" data-bs-target="#stepformModal1">View
                                Saved Drafts</button></li>
                        <li><button class="theme-btn3">Post a Job</button></li>
                    </ul> -->
                </div>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="myJobs" role="tabpanel" aria-labelledby="myJobs-tab">
                    <div class="filter-btn-admin">
                        <ul class="d-flex gap-lg-3 gap-1">
                            <li><button class="theme-btn3" data-bs-toggle="modal" data-bs-target="#stepformModal1">View
                                    Saved Drafts</button></li>
                            <li><button class="theme-btn3">Post a Job</button></li>
                        </ul>
                    </div>
                    <div class="data-table-jb">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-12 col-lg-6">
                                <div class="d-flex gap-3 search-jb">
                                    <div class="position-relative">
                                        <input type="search" placeholder="Search job titles" name="title" id="">
                                        <i class="fa-light fa-magnifying-glass"></i>
                                    </div>
                                    <div class="position-relative">
                                        <input type="search" placeholder="Search location" name="location" id="">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="sorting-jb">
                                    <div class="d-flex">
                                        <label for="">Sort by:</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Posting Date</option>
                                            <option value="1">Earliest</option>
                                            <option value="2">Latest</option>
                                        </select>
                                    </div>
                                    <div class="d-flex">
                                        <label for="">Order:</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Ascending</option>
                                            <option value="1">Descending</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="customers">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Job Title</th>
                                        <th>Candidates</th>
                                        <th>Status</th>
                                        <th>Sponsorship Status</th>
                                        <th>Job Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <!--<input type="checkbox" name="" id="">-->
                                        </td>
                                        <td>
                                            <a href="executive.php">
                                                <h3>Executive Marketing Specialist</h3>
                                                <p>New York, NY</p>
                                                <p>Posted: June 21, 2022</p>
                                            </a>
                                        </td>
                                        <td>
                                            <h3 class="just-blue">
                                                <span>5 Active</span><br>
                                                <span>Candidates</span>
                                            </h3>
                                        </td>
                                        <td>
                                            <div>
                                                <h4>
                                                    <span>5</span><br>
                                                    Reviewed
                                                </h4>
                                                <h4>
                                                    <span>0</span><br>
                                                    Awaiting Reviewed
                                                </h4>
                                            </div>
                                        </td>
                                        <td>
                                            <p>5 days</p>
                                            <!--<p>240.0 (USD) Total Cost | 25 USD Daily</p>-->
                                        </td>
                                        <td>
                                            <select class="form-select job-status-select"
                                                aria-label="Default select example">
                                                <option selected>Open</option>
                                                <option value="1">Pause</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="select-dropdown">
                                                <button href="#" role="button" data-value=""
                                                    class="select-dropdown__button btn cust_btn3">Actions</button>
                                                <ul class="select-dropdown__list ">
                                                    <li data-value="31" class="select-dropdown__list-item"><a
                                                            href="javascript:;" data-bs-toggle="modal"
                                                            data-bs-target="#sponsor_modal">Spansor the post
                                                            Us</a></li>
                                                    <li data-value="32" class="select-dropdown__list-item"><a
                                                            href="javascript:;">Delete the post</a>
                                                    </li>
                                                    <!-- <li data-value="33" class="select-dropdown__list-item"><a
                                                        href="javascript:;">Members</a>
                                                </li>
                                                <li data-value="34" class="select-dropdown__list-item"><a
                                                        href="javascript:;">Merch</a>
                                                </li> -->
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <!--<input type="checkbox" name="" id="">-->
                                        </td>
                                        <td>
                                            <a href="executive.php">
                                                <h3>Executive Marketing Specialist</h3>
                                                <p>New York, NY</p>
                                                <p>Posted: June 21, 2022</p>
                                            </a>
                                        </td>
                                        <td>
                                            <h3>
                                                <span>5 Active</span><br>
                                                <span>Candidates</span>
                                            </h3>
                                        </td>
                                        <td>
                                            <div>
                                                <h4>
                                                    <span>5</span><br>
                                                    Reviewed
                                                </h4>
                                                <h4>
                                                    <span>0</span><br>
                                                    Awaiting Reviewed
                                                </h4>
                                            </div>
                                        </td>
                                        <td>
                                            <!--<p class="just-blue">Sponsored</p>-->
                                            <p>Not sponsored</p>
                                        </td>
                                        <td>
                                            <select class="form-select job-status-select"
                                                aria-label="Default select example">
                                                <option selected>Open</option>
                                                <option value="1">Pause</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="select-dropdown">
                                                <button href="#" role="button" data-value=""
                                                    class="select-dropdown__button btn cust_btn3">Actions</button>
                                                <!-- <ul class="select-dropdown__list ">
                                                <li data-value="31" class="select-dropdown__list-item"><a
                                                        href="javascript:;">About
                                                        Us</a></li>
                                                <li data-value="32" class="select-dropdown__list-item"><a
                                                        href="javascript:;">Community</a>
                                                </li>
                                                <li data-value="33" class="select-dropdown__list-item"><a
                                                        href="javascript:;">Members</a>
                                                </li>
                                                <li data-value="34" class="select-dropdown__list-item"><a
                                                        href="javascript:;">Merch</a>
                                                </li>
                                            </ul> -->
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <!--<input type="checkbox" name="" id="">-->
                                        </td>
                                        <td>
                                            <a href="executive.php">
                                                <h3>Executive Marketing Specialist</h3>
                                                <p>New York, NY</p>
                                                <p>Posted: June 21, 2022</p>
                                            </a>
                                        </td>
                                        <td>
                                            <h3>
                                                <span>5 Active</span><br>
                                                <span>Candidates</span>
                                            </h3>
                                        </td>
                                        <td>
                                            <div>
                                                <h4>
                                                    <span>5</span><br>
                                                    Reviewed
                                                </h4>
                                                <h4>
                                                    <span>0</span><br>
                                                    Awaiting Reviewed
                                                </h4>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Not sponsored</p>
                                        </td>
                                        <td>
                                            <select class="form-select job-status-select"
                                                aria-label="Default select example">
                                                <option selected>Open</option>
                                                <option value="1">Pause</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="select-dropdown">
                                                <button href="#" role="button" data-value=""
                                                    class="select-dropdown__button btn cust_btn3">Actions</button>
                                                <!-- <ul class="select-dropdown__list ">
                                                <li data-value="31" class="select-dropdown__list-item"><a
                                                        href="javascript:;">About
                                                        Us</a></li>
                                                <li data-value="32" class="select-dropdown__list-item"><a
                                                        href="javascript:;">Community</a>
                                                </li>
                                                <li data-value="33" class="select-dropdown__list-item"><a
                                                        href="javascript:;">Members</a>
                                                </li>
                                                <li data-value="34" class="select-dropdown__list-item"><a
                                                        href="javascript:;">Merch</a>
                                                </li>
                                            </ul> -->
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="jobs-bottom">
                            <div class="jb-cards-bottom">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="card-jb">
                                            <div class="jb-head">
                                                <h3>Shortlist (<span>0</span>)</h3>
                                            </div>
                                            <div class="jb-body">
                                                <img class="img-fluid" src="images/jp-2.svg" alt="">
                                                <p>No shortlisted candidates</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="card-jb">
                                            <div class="jb-head">
                                                <h3>Shortlist (<span>0</span>)</h3>
                                            </div>
                                            <div class="jb-body">
                                                <img class="img-fluid" src="images/jp-1.svg" alt="">
                                                <p>No candidates selected for interviews</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="card-jb1">
                                            <div class="jb1-head">
                                                <h3>Sponsored job billing</h3>
                                                <h3><a href="help-center.php">View FAQs</a></h3>
                                            </div>
                                            <div class="jb1-body">
                                                <div>
                                                    <p>Total</p>
                                                    <h2>$0.00</h2>
                                                    <p>For November 1 - 30</p>
                                                </div>
                                                <div class="d-flex flex-column gap-2 pb-2">
                                                    <a href="javascript:;" class="theme-btn6" data-bs-toggle="modal"
                                                        data-bs-target="#billing_history">Billing history</a>
                                                    <!-- <a href="javascript:;" class="theme-btn6">Payment method</a> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="jb-social-bottom">
                                <div class="jsb1">
                                    <h3>Advertise your job on social networks</h3>
                                    <div class="position-relative copy-link">
                                        <a href="javascript:;" id="myLink" class="">
                                            <p>telenttube.io/asdasdasd_vdsfdssfsddfsdfsf/asdasd_fsdfsdf</p>
                                        </a>
                                        <button class="" id="copyButton">Copy link</button>
                                    </div>
                                </div>
                                <div class="jsb2">
                                    <h3>Share your job on social networks</h3>
                                    <div class="social-links-jb ">
                                        <span><i class="fa-brands fa-facebook-f"></i></span>
                                        <span><i class="fa-brands fa-twitter"></i></span>
                                        <span><i class="fa-solid fa-envelope"></i></span>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="candidates" role="tabpanel" aria-labelledby="candidates-tab">
                    <div class="filter-btn-admin">
                        <ul class="d-flex gap-3">
                            <li><button class="theme-btn3" data-bs-toggle="modal" data-bs-target="#stepformModal1">Post
                                    a Job</button></li>
                        </ul>
                    </div>
                    <div class="data-table-jb">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-12">
                                <div class="d-flex gap-3 search-jb">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Posting Date</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <div class="candata">
                                        <ul>
                                            <li>
                                                <h1>Applicants</h1>
                                            </li>
                                            <li>
                                                <h6>345</h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="candata">
                                        <ul>
                                            <li>
                                                <h1>Reviewed</h1>
                                            </li>
                                            <li>
                                                <h6>423</h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="candata">
                                        <ul>
                                            <li>
                                                <h1>Awaiting Review</h1>
                                            </li>
                                            <li>
                                                <h6>3423</h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="sorting-jb">
                                    <div class="d-flex">
                                        <label for="">Sort by:</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Application Date</option>
                                            <option value="1">Earliest</option>
                                            <option value="2">Latest</option>
                                        </select>
                                    </div>
                                    <div class="d-flex">
                                        <label for="">Location:</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>New York, NY</option>
                                            <option value="1">New York, NY</option>
                                            <option value="2">Illinois, IL</option>
                                            <option value="3">Arizona, AZ</option>
                                            <option value="3">California, CA</option>
                                            <option value="3">Media</option>
                                            <option value="3">Development</option>
                                            <option value="3">Design</option>
                                        </select>
                                    </div>
                                    <div class="d-flex">
                                        <label for="">Work Authorization:</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Greencard </option>
                                            <option value="1">US citizen</option>
                                            <option value="2">Green card</option>
                                            <option value="3">EAD</option>
                                            <option value="3">C 2 C</option>
                                            <option value="3">Sponsorship</option>
                                        </select>
                                    </div>
                                    <div class="d-flex">
                                        <label for="">Years of Experience::</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Ascending</option>
                                            <option value="1">Descending</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="cand-text">
                                    <h3>Executive Marketing Specialist</h3>
                                    <p>New York, NY</p>
                                    <p>Posted: June 21, 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="customers" class="candidate-table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Location</th>
                                        <th>Authorization</th>
                                        <th>Application Date</th>
                                        <th>Years of Experience</th>
                                        <th>Intro</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div>
                                                <img src="images/pic1.svg" alt="pic">
                                            </div>
                                        </td>
                                        <td>
                                            <h3>Jason Park</h3>
                                        </td>
                                        <td>
                                            <h3 class="just-blue">
                                                <h4>
                                                    <span>Reviewed</span>
                                                </h4>
                                            </h3>
                                        </td>
                                        <td>
                                            <div>
                                                <h4>
                                                    <span>Brooklyn</span>
                                                </h4>

                                            </div>
                                        </td>
                                        <td>
                                            <h4>
                                                <span>US citizen</span>
                                            </h4>
                                        </td>
                                        <td>
                                            <h4>
                                                <span>12.13.2023</span>
                                            </h4>
                                        </td>
                                        <td>
                                            <h4>
                                                <span>5 years</span>
                                            </h4>
                                        </td>
                                        <td>
                                            <div><img src="images/youtube_check.svg" alt=""></div>
                                        </td>
                                        <td>
                                            <div class="cand-icons">
                                                <img src="images/printer.svg" data-bs-toggle="modal"
                                                    data-bs-target="#printer_modal" alt="">
                                                <img src="images/pc_check.svg" alt="">
                                                <i class="fa-solid fa-list-check"></i>
                                                <i class="fa-regular fa-circle-xmark"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <img src="images/pic1.svg" alt="pic">
                                            </div>
                                        </td>
                                        <td>
                                            <h3>Jason Park</h3>
                                        </td>
                                        <td>
                                            <h3 class="just-blue">
                                                <h4>
                                                    <span>Reviewed</span>
                                                </h4>
                                            </h3>
                                        </td>
                                        <td>
                                            <div>
                                                <h4>
                                                    <span>Brooklyn</span>
                                                </h4>

                                            </div>
                                        </td>
                                        <td>
                                            <h4>
                                                <span>US citizen</span>
                                            </h4>
                                        </td>
                                        <td>
                                            <h4>
                                                <span>12.13.2023</span>
                                            </h4>
                                        </td>
                                        <td>
                                            <h4>
                                                <span>5 years</span>
                                            </h4>
                                        </td>
                                        <td>
                                            <div><img src="images/youtube_check.svg" alt=""></div>
                                        </td>
                                        <td>
                                            <div class="cand-icons">
                                                <img src="images/printer.svg" data-bs-toggle="modal"
                                                    data-bs-target="#printer_modal" alt="">
                                                <img src="images/pc_check.svg" alt="">
                                                <i class="fa-solid fa-list-check"></i>
                                                <i class="fa-regular fa-circle-xmark"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <img src="images/pic1.svg" alt="pic">
                                            </div>
                                        </td>
                                        <td>
                                            <h3>Jason Park</h3>
                                        </td>
                                        <td>
                                            <h3 class="just-blue">
                                                <h4>
                                                    <span>Reviewed</span>
                                                </h4>
                                            </h3>
                                        </td>
                                        <td>
                                            <div>
                                                <h4>
                                                    <span>Brooklyn</span>
                                                </h4>

                                            </div>
                                        </td>
                                        <td>
                                            <h4>
                                                <span>US citizen</span>
                                            </h4>
                                        </td>
                                        <td>
                                            <h4>
                                                <span>12.13.2023</span>
                                            </h4>
                                        </td>
                                        <td>
                                            <h4>
                                                <span>5 years</span>
                                            </h4>
                                        </td>
                                        <td>
                                            <div><img src="images/youtube_check.svg" alt=""></div>
                                        </td>
                                        <td>
                                            <div class="cand-icons">
                                                <img src="images/printer.svg" alt="" data-bs-toggle="modal"
                                                    data-bs-target="#stepformModal1">
                                                <img src="images/pc_check.svg" alt="">
                                                <i class="fa-solid fa-list-check"></i>
                                                <i class="fa-regular fa-circle-xmark"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <img src="images/pic1.svg" alt="pic">
                                            </div>
                                        </td>
                                        <td>
                                            <h3>Jason Park</h3>
                                        </td>
                                        <td>
                                            <h3 class="just-blue">
                                                <h4>
                                                    <span>Reviewed</span>
                                                </h4>
                                            </h3>
                                        </td>
                                        <td>
                                            <div>
                                                <h4>
                                                    <span>Brooklyn</span>
                                                </h4>

                                            </div>
                                        </td>
                                        <td>
                                            <h4>
                                                <span>US citizen</span>
                                            </h4>
                                        </td>
                                        <td>
                                            <h4>
                                                <span>12.13.2023</span>
                                            </h4>
                                        </td>
                                        <td>
                                            <h4>
                                                <span>5 years</span>
                                            </h4>
                                        </td>
                                        <td>
                                            <div><img src="images/youtube_check.svg" alt=""></div>
                                        </td>
                                        <td>
                                            <div class="cand-icons">
                                                <img src="images/printer.svg" data-bs-toggle="modal"
                                                    data-bs-target="#printer_modal" alt="">
                                                <img src="images/pc_check.svg" alt="">
                                                <i class="fa-solid fa-list-check"></i>
                                                <i class="fa-regular fa-circle-xmark"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <img src="images/pic1.svg" alt="pic">
                                            </div>
                                        </td>
                                        <td>
                                            <h3>Jason Park</h3>
                                        </td>
                                        <td>
                                            <h3 class="just-blue">
                                                <h4>
                                                    <span>Reviewed</span>
                                                </h4>
                                            </h3>
                                        </td>
                                        <td>
                                            <div>
                                                <h4>
                                                    <span>Brooklyn</span>
                                                </h4>

                                            </div>
                                        </td>
                                        <td>
                                            <h4>
                                                <span>US citizen</span>
                                            </h4>
                                        </td>
                                        <td>
                                            <h4>
                                                <span>12.13.2023</span>
                                            </h4>
                                        </td>
                                        <td>
                                            <h4>
                                                <span>5 years</span>
                                            </h4>
                                        </td>
                                        <td>
                                            <div><img src="images/youtube_check.svg" alt=""></div>
                                        </td>
                                        <td>
                                            <div class="cand-icons">
                                                <img src="images/printer.svg" data-bs-toggle="modal"
                                                    data-bs-target="#printer_modal" alt="">
                                                <img src="images/pc_check.svg" alt="">
                                                <i class="fa-solid fa-list-check"></i>
                                                <i class="fa-regular fa-circle-xmark"></i>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-end candidate-paging">
                            <p>Page 1 of 5 <i class="fa-solid fa-chevron-right"></i></p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="jobs-bottom">
                            <div class="jb-cards-bottom">
                                <div class="row justify-content-center">
                                    <div class="col-lg-5 col-md-6 col-12">
                                        <div class="card-jb3">
                                            <div class="jb-head">
                                                <h3>Shortlist (<span>0</span>)</h3>
                                            </div>
                                            <div class="jb3-body">
                                                <div class="jb3-row">
                                                    <div>
                                                        <img src="images/pic1.svg" alt="pic">
                                                        <h3>Jason Park</h3>
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <img src="images/youtube_check.svg" alt="">
                                                        </div>
                                                        <div class="cand-icons">
                                                            <img src="images/printer.svg" data-bs-toggle="modal"
                                                                data-bs-target="#printer_modal" alt="">
                                                            <img src="images/pc_check.svg" alt="">
                                                            <i class="fa-solid fa-list-check"></i>
                                                            <i class="fa-regular fa-circle-xmark"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jb3-row">
                                                    <div>
                                                        <img src="images/pic1.svg" alt="pic">
                                                        <h3>Jason Park</h3>
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <img src="images/youtube_check.svg" alt="">
                                                        </div>
                                                        <div class="cand-icons">
                                                            <img src="images/printer.svg" data-bs-toggle="modal"
                                                                data-bs-target="#printer_modal" alt="">
                                                            <img src="images/pc_check.svg" alt="">
                                                            <i class="fa-solid fa-list-check"></i>
                                                            <i class="fa-regular fa-circle-xmark"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jb3-row">
                                                    <div>
                                                        <img src="images/pic1.svg" alt="pic">
                                                        <h3>Jason Park</h3>
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <img src="images/youtube_check.svg" alt="">
                                                        </div>
                                                        <div class="cand-icons">
                                                            <img src="images/printer.svg" data-bs-toggle="modal"
                                                                data-bs-target="#printer_modal" alt="">
                                                            <img src="images/pc_check.svg" alt="">
                                                            <i class="fa-solid fa-list-check"></i>
                                                            <i class="fa-regular fa-circle-xmark"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jb3-row">
                                                    <div>
                                                        <img src="images/pic1.svg" alt="pic">
                                                        <h3>Jason Park</h3>
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <img src="images/youtube_check.svg" alt="">
                                                        </div>
                                                        <div class="cand-icons">
                                                            <img src="images/printer.svg" data-bs-toggle="modal"
                                                                data-bs-target="#printer_modal" alt="">
                                                            <img src="images/pc_check.svg" alt="">
                                                            <i class="fa-solid fa-list-check"></i>
                                                            <i class="fa-regular fa-circle-xmark"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-12">
                                        <div class="card-jb3">
                                            <div class="jb-head">
                                                <h3>Shortlist (<span>0</span>)</h3>
                                            </div>
                                            <div class="jb3-body">
                                                <div class="jb3-row">
                                                    <div>
                                                        <img src="images/pic1.svg" alt="pic">
                                                        <h3>Jason Park</h3>
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <img src="images/youtube_check.svg" alt="">
                                                        </div>
                                                        <div class="cand-icons">
                                                            <img src="images/printer.svg" data-bs-toggle="modal"
                                                                data-bs-target="#printer_modal" alt="">
                                                            <img src="images/pc_check.svg" alt="">
                                                            <i class="fa-solid fa-list-check"></i>
                                                            <i class="fa-regular fa-circle-xmark"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jb3-row">
                                                    <div>
                                                        <img src="images/pic1.svg" alt="pic">
                                                        <h3>Jason Park</h3>
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <img src="images/youtube_check.svg" alt="">
                                                        </div>
                                                        <div class="cand-icons">
                                                            <img src="images/printer.svg" data-bs-toggle="modal"
                                                                data-bs-target="#printer_modal" alt="">
                                                            <img src="images/pc_check.svg" alt="">
                                                            <i class="fa-solid fa-list-check"></i>
                                                            <i class="fa-regular fa-circle-xmark"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jb3-row">
                                                    <div>
                                                        <img src="images/pic1.svg" alt="pic">
                                                        <h3>Jason Park</h3>
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <img src="images/youtube_check.svg" alt="">
                                                        </div>
                                                        <div class="cand-icons">
                                                            <img src="images/printer.svg" data-bs-toggle="modal"
                                                                data-bs-target="#printer_modal" alt="">
                                                            <img src="images/pc_check.svg" alt="">
                                                            <i class="fa-solid fa-list-check"></i>
                                                            <i class="fa-regular fa-circle-xmark"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jb3-row">
                                                    <div>
                                                        <img src="images/pic1.svg" alt="pic">
                                                        <h3>Jason Park</h3>
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <img src="images/youtube_check.svg" alt="">
                                                        </div>
                                                        <div class="cand-icons">
                                                            <img src="images/printer.svg" data-bs-toggle="modal"
                                                                data-bs-target="#printer_modal" alt="">
                                                            <img src="images/pc_check.svg" alt="">
                                                            <i class="fa-solid fa-list-check"></i>
                                                            <i class="fa-regular fa-circle-xmark"></i>
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
                <div class="tab-pane fade" id="myCompany" role="tabpanel" aria-labelledby="myCompany-tab">
                    <div class="filter-btn-admin">
                        <ul class="d-flex gap-3">
                            <li><button class="theme-btn3" data-bs-toggle="modal" data-bs-target="#stepformModal1">Post
                                    a Job</button></li>
                        </ul>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-lg-8 col-12">
                            <h2>A few details about your company</h2>
                            <br>
                            <form action="javascript:;">
                                <div class="mb-3">
                                    <label class="form-label">Company Name *</label>
                                    <input type="text" id="" class="form-control" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Website</label>
                                    <input type="text" id="" class="form-control" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Industry</label>
                                    <input type="text" id="" class="form-control" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Organization Size *</label>
                                    <select class="form-select form-select-lg mb-3"
                                        aria-label=".form-select-lg example">
                                        <option selected></option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Organization Type *</label>
                                    <select class="form-select form-select-lg mb-3"
                                        aria-label=".form-select-lg example">
                                        <option selected></option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Logo *</label>
                                    <div class="file-item" data-bs-toggle="modal" data-bs-target="#my_profile_img">
                                        <!-- <input type="file" id="" class="form-control" placeholder=""> -->
                                        <div class="file-upload">
                                            <img src="images/img-icon.svg" alt="">
                                            <h3>Upload logo file</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Tagline *</label>
                                    <input type="text" id="" class="form-control" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Introduction Video</label>
                                    <div class="file-item">
                                        <input type="file" id="" class="form-control" placeholder="">
                                        <div class="file-upload">
                                            <img src="images/video-icon.svg" alt="">
                                            <h3>Upload company introductory video</h3>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="check-bottom mb-3 gap-3 d-flex">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label t_p" for="flexCheckDefault">
                                        <p>
                                            I confirm I represent HR, Recruiting, Marketing, PR or am an Executive at my
                                            company
                                            and I agree to TalentTube’s <a href="javascript:;">Terms of Service</a> and
                                            <a href="javascript:;">Privacy Policy</a> on behalf of
                                            my
                                            company.
                                        </p>
                                    </label>
                                </div>
                                <div class="text-end">
                                    <button class="theme-btn3 step-btn next" type="submit">Save company</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="yout-box">
                                <img class="img-fluid" src="images/youtube-left-box.svg" alt="">
                                <div class="yout-text">
                                    <h3>Company Name</h3>
                                    <p>Tag line goes here</p>
                                    <p class="mt-2 mb-3">Industry</p>
                                    <p>Your job posts will be shown on your company page once your company page is
                                        created.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="myPlan" role="tabpanel" aria-labelledby="myPlan-tab">
                    <div class="filter-btn-admin">
                        <ul class="d-flex gap-lg-5 gap-1">
                            <li><button class="theme-btn3" data-bs-toggle="modal" data-bs-target="#stepformModal1">View
                                    Saved Drafts</button></li>
                            <li><button class="theme-btn3">Post a Job</button></li>
                        </ul>
                    </div>
                    <div class="mp-available">
                        <div class="mpa1">
                            <div class="d-flex justify-content-end gap-1 gap-lg-5 ">
                                <p>Available Reviews: <span>0</span></p>
                                <p>Available Credits: <span>150</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="mp-head">
                        <h2>You are currently on a FREE registration plan. If you like to share a job post, please
                            select a
                            plan.</h2>
                    </div>
                    <div class="myplan-body">
                        <div class="row">
                            <div class="col-12 col-lg-4 ">
                                <div class="myplan-left">

                                    <div class="pricing_detail1">
                                        <h3>Billing</h3>
                                        <p>Things change. Our Monthly Plans renew every month, but you can cancel any
                                            time.
                                        </p>
                                    </div>
                                    <div class="pricing_detail1">
                                        <h3>Job Posting</h3>
                                        <p>At Talent Tube we use AI technology to match the candidates with your job
                                            listing
                                            and attract them to apply relevant positions</p>
                                    </div>
                                    <div class="pricing_detail1">
                                        <h3>Talent Search</h3>
                                        <p>Our unique Talents pool full filled with best talented individuals,
                                            after you
                                            registered with qualified plan you can simply search for your best
                                            fit</p>
                                    </div>
                                    <div class="pricing_detail1">
                                        <h3>Talenttube ats</h3>
                                        <p>Elevate your hiring process with TalentTube ATS – a comprehensive
                                            solution
                                            designed to simplify and optimize your talent acquisition
                                            journey. From seamless
                                            job posting to efficient candidate management, experience a new
                                            era of
                                            recruiting excellence</p>
                                    </div>
                                    <div class="pricing_detail1">
                                        <h3>Messages</h3>
                                        <p>Connect effortlessly with candidates using TalentTube's
                                            intuitive messaging
                                            system. Streamline your communication, enhance candidate
                                            engagement, and build
                                            lasting relationships in the talent acquisition process</p>
                                    </div>
                                    <div class="pricing_detail1">
                                        <h3>Sponsored company page</h3>
                                        <p>Elevate your company's visibility and reach a wider
                                            audience by sponsoring your
                                            dedicated page on TalentTube. Showcase your brand,
                                            culture, and job
                                            opportunities to attract top-tier talent in the industry
                                        </p>
                                    </div>
                                    <div class="pricing_detail1">
                                        <h3>Job Boosting Emails</h3>
                                        <p>Increase the visibility of your job postings and
                                            connect with potential
                                            candidates by leveraging our job-boosting email
                                            service. Amplify your reach and
                                            ensure your opportunities stand out in the inboxes
                                            of qualified candidates</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-8">
                                <div class="row">
                                    <div class="col-12 col-lg-8">
                                        <div class="pricing-plan">
                                            <div class="pricing-item">
                                                <h3>LITE</h3>
                                                <h2>$159</h2>
                                                <h3>MONTHLY</h3>
                                                <button class="theme-btn7">BUY NOW</button>
                                                <p>Billed monthly</p>
                                                <p><span>1</span><br> Jobs available for 1 months
                                                </p>
                                                <p><span>100</span><br> Talent search per month</p>
                                                <p>Yes</p>
                                                <p>Yes</p>
                                                <p>N/A</p>
                                                <p>Yes</p>
                                            </div>
                                            <div class="pricing-item active">
                                                <h3>Growth</h3>
                                                <h2>$159</h2>
                                                <h3>MONTHLY</h3>
                                                <button class="theme-btn7">BUY NOW</button>
                                                <p>Billed monthly</p>
                                                <p><span>3</span><br> Jobs available for 1 months
                                                </p>
                                                <p><span>150</span><br> Talent search per month</p>
                                                <p>Yes</p>
                                                <p>Yes</p>
                                                <p>Yes</p>
                                                <p>Yes</p>
                                            </div>
                                            <div class="pricing-item">
                                                <h3>PRO</h3>
                                                <h2>$159</h2>
                                                <h3>MONTHLY</h3>
                                                <button class="theme-btn7">BUY NOW</button>
                                                <p>Billed monthly</p>
                                                <p><span>5</span><br> Jobs available for 1 months
                                                </p>
                                                <p><span>200</span><br> Talent search per month</p>
                                                <p>Yes</p>
                                                <p>Yes</p>
                                                <p>Yes</p>
                                                <p>Yes</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <div class="plan-right-box">
                                            <h3>Activities</h3>
                                            <p>You have no job activities</p>
                                        </div>
                                        <div class="plan-right-box">
                                            <h3>For larger hiring needs</h3>
                                            <button class="theme-btn3" data-bs-toggle="modal"
                                                data-bs-target="#mp_contact">Contact us</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br><br>
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="myplan1-left">
                                    <h3>Promotion Credits</h3>
                                    <p>One credit is equal to $1. Credits are usable for 12
                                        months. One job Promoting
                                        per
                                        day will cost $5. The credits are usable for
                                        multiple job posts. </p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-8">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="pricing-plan ">
                                            <div class="pricing-item">
                                                <h3>STANDARD</h3>
                                                <h2>$159</h2>
                                                <h3>150 - credits</h3>
                                                <button class="theme-btn7">BUY NOW</button>
                                            </div>
                                            <div class="pricing-item active">
                                                <h3>Growth</h3>
                                                <h2>$450</h2>
                                                <h3>450 - credits</h3>
                                                <button class="theme-btn7">BUY NOW</button>
                                            </div>
                                            <div class="pricing-item pp-2">
                                                <h3>PRO</h3>
                                                <h2>$999</h2>
                                                <h3>999 - credits</h3>
                                                <button class="theme-btn7">BUY NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="myProfile" role="tabpanel" aria-labelledby="myProfile-tab">
                    <div class="row mt-5">
                        <div class="col-12 col-lg-3">
                            <a type="button" class="add_profile_anchor" data-bs-toggle="modal"
                                data-bs-target="#my_profile_img"><i class="fa-light fa-pen add_profile"></i>
                            </a>
                            <div class="mp-left">
                                <img src="images/pic1.svg" alt="">
                                <div>
                                    <h2>Martin Williams</h2>
                                    <h3>Job Title</h3>
                                    <h3>Company name</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9">
                            <table>
                                <tr>
                                    <th>First Name:</th>
                                    <td>Martin</td>
                                    <td><i class="fa-light fa-pencil"></i></td>
                                </tr>
                                <tr>
                                    <th>Last Name:</th>
                                    <td>Williams</td>
                                    <td><i class="fa-light fa-pencil"></i></td>
                                </tr>
                                <tr>
                                    <th>Company:</th>
                                    <td>xxxx xxxxxx</td>
                                    <td><i class="fa-light fa-pencil"></i></td>
                                </tr>
                                <tr>
                                    <th>Job Title:</th>
                                    <td>xxxx xxxxxx</td>
                                    <td><i class="fa-light fa-pencil"></i></td>
                                </tr>
                                <tr>
                                    <th>Work Email:</th>
                                    <td>xxxx xxxxxx</td>
                                    <td><i class="fa-light fa-pencil"></i></td>
                                </tr>
                                <tr>
                                    <th>Phone number:</th>
                                    <td>xxxx xxxxxx</td>
                                    <td><i class="fa-light fa-pencil"></i></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-12 text-end pt-4">
                            <button class="theme-btn3">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<?php
include 'includes/footer.php';
$page = 'home';
?>