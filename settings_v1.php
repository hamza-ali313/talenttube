<?php
$page = 'Home';
$pageDesc = '""';
include 'includes/header1.php';
$page = 'home';
?>


<section class="settings-pg">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-3 col-lg-12 col-md-12">
                <div class="profile-info bdrblu">
                    <div>
                        <img class="img-fluid" src="images/pic2.svg" alt="">
                        <div>
                            <h2>Mario Dunkin</h2>
                            <p>Project Manager</p>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <h1>Profile information</h1>
                        </li>
                        <li>
                            <h3>Sign in & Security</h3>
                        </li>
                        <li>
                            <h3>Email notifications</h3>
                        </li>
                        <li>
                            <h3>Subscriptions</h3>
                        </li>
                        <li>
                            <h3>Delete account</h3>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-xl-9 col-lg-12 col-md-12">
                <div class="settings-frm bdrblu">
                    <form action="">
                        <div class="row">
                            <div class="col-12 col-lg-12 d-flex align-items-center justify-content-between">
                                <div class="name-box">
                                    <div class="input-box">
                                        <label for="">First name *</label>
                                        <div class="skill-input">
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="input-box">
                                        <label for="">Last name *</label>
                                        <div class="skill-input">
                                            <input type="text">

                                        </div>
                                    </div>
                                </div>
                                <i class="fa-light fa-pen"></i>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class="input-box">
                                    <label for="">Tag-line *</label>
                                    <div class="skill-input">
                                        <input type="text">
                                        <i class="fa-light fa-pen"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class="input-box">
                                    <label for="">Location *</label>
                                    <div class="skill-input">
                                        <input type="text">
                                        <i class="fa-light fa-pen"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class="input-box">
                                    <label for="">Years of experience * </label>
                                    <div class="skill-input">
                                        <input type="number">
                                        <i class="fa-light fa-pen"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class="input-box">
                                    <label for="">Work authorization *</label>
                                    <div class="skill-input">
                                        <select class="form-select form-select-lg mb-3"
                                            aria-label=".form-select-lg example">
                                            <option selected="">Province, city or region</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <i class="fa-light fa-pen"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class="input-box">
                                    <label for="">About *</label>
                                    <div class="skill-input">
                                        <textarea type="text"></textarea>
                                        <i class="fa-light fa-pen"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class="input-box">
                                    <label for="">Where are you at in your job search? </label>
                                    <div class="skill-input">
                                        <select class="form-select form-select-lg mb-3"
                                            aria-label=".form-select-lg example">
                                            <option selected="">Province, city or region</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <i class="fa-light fa-pen"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="" type="button" class="theme-btn3 mt-5"> save</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>




<?php
include 'includes/footer.php';
$page = 'home';
?>