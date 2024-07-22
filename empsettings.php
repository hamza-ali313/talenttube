<?php
$page = 'Home';
$pageDesc = '""';
include 'includes/header1.php';
$page = 'home';
?>


<section class="settings-pg">
    <div class="container">
        <a href="" class="theme-btn mb-3"><i class="fa-solid fa-arrow-left"></i> Back to dashboard</a>
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-12 col-xl-3 col-lg-12 col-md-12 ">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
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
                                        <button class="nav-link active" id="v-pills-profInfo-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-profInfo" type="button" role="tab"
                                            aria-controls="v-pills-profInfo" aria-selected="true">
                                            <h3>Profile information</h3>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="nav-link " id="v-pills-compInfo-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-compInfo" type="button" role="tab"
                                            aria-controls="v-pills-compInfo" aria-selected="true">
                                            <h3>company information</h3>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="nav-link " id="v-pills-signIn-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-signIn" type="button" role="tab"
                                            aria-controls="v-pills-signIn" aria-selected="true">
                                            <h3>Sign in & Security</h3>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="nav-link" id="v-pills-Subs-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-Subs" type="button" role="tab"
                                            aria-controls="v-pills-Subs" aria-selected="false">
                                            <h3>Subscriptions</h3>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="nav-link" id="v-pills-notif-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-notif" type="button" role="tab"
                                            aria-controls="v-pills-notif" aria-selected="false">
                                            <h3>Email notifications</h3>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="nav-link" id="v-pills-accnt-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-accnt" type="button" role="tab"
                                            aria-controls="v-pills-accnt" aria-selected="false">
                                            <h3>Delete account</h3>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-9 col-lg-12 col-md-12 ">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-profInfo" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="settings-frm bdrblu">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-12 col-lg-6 ">
                                                <div class="name-box">
                                                    <div class="input-box">
                                                        <label for="">First name *</label>
                                                        <div class="skill-input">
                                                            <input type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="name-box">
                                                    <div class="input-box">
                                                        <label for="">Last name *</label>
                                                        <div class="skill-input">
                                                            <input type="text">
                                                            <i class="fa-light fa-pen"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-12">
                                                <div class="input-box">
                                                    <label for="">Company *</label>
                                                    <div class="skill-input">
                                                        <input type="text">
                                                        <i class="fa-light fa-pen"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-12">
                                                <div class="input-box">
                                                    <label for="">Job title *</label>
                                                    <div class="skill-input">
                                                        <input type="text">
                                                        <i class="fa-light fa-pen"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="v-pills-compInfo" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="settings-frm bdrblu">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-12 col-lg-12">
                                                <div class="input-box">
                                                    <label for="">Company name *</label>
                                                    <div class="skill-input">
                                                        <input type="text">
                                                        <i class="fa-light fa-pen"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-12">
                                                <div class="input-box">
                                                    <label for="">Website</label>
                                                    <div class="skill-input">
                                                        <input type="text">
                                                        <i class="fa-light fa-pen"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-12">
                                                <div class="input-box">
                                                    <label for="">Industry</label>
                                                    <div class="skill-input">
                                                        <input type="text">
                                                        <i class="fa-light fa-pen"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-12">
                                                <div class="input-box">
                                                    <label for="">Organization size *</label>
                                                    <div class="skill-input">
                                                        <select type="text">
                                                            <option value="">US citizen</option>
                                                            <option value="">Green Card</option>
                                                            <option value="">EAD</option>
                                                            <option value="">C2C</option>
                                                            <option value="">Sponsorship</option>
                                                            <option value="">where are you at in your job search?
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-12">
                                                <div class="input-box">
                                                    <label for="">Organization type *</label>
                                                    <div class="skill-input">
                                                        <select type="text">
                                                            <option value="">US citizen</option>
                                                            <option value="">Green Card</option>
                                                            <option value="">EAD</option>
                                                            <option value="">C2C</option>
                                                            <option value="">Sponsorship</option>
                                                            <option value="">where are you at in your job search?
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-12">
                                                <div class="input-box">
                                                    <label for="">Tagline</label>
                                                    <div class="skill-input">
                                                        <input type="text">
                                                        <i class="fa-light fa-pen"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-12">
                                                <div class="input-box">
                                                    <label for="">about *</label>
                                                    <div class="skill-input">
                                                        <textarea type="text" rows="5"></textarea>
                                                        <i class="fa-light fa-pen"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-12">
                                                <div class="input-box">
                                                    <label for="">Tagline</label>
                                                    <div class="skill-input">
                                                        <input type="text">
                                                        <i class="fa-light fa-pen"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-12">
                                                <label for="">logo *</label>
                                                <div class="skill-input">
                                                    <div class="upload-box">
                                                        <div>
                                                            <label for=""><i class="fas fa-upload"></i> upload
                                                                logo</label>
                                                            <input type="file">
                                                        </div>
                                                    </div>
                                                    <i class="fa-light fa-pen"></i>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-12">
                                                <label for="">Introduction video *</label>
                                                <div class="skill-input">
                                                    <div class="upload-box">

                                                        <label for=""><i class="fas fa-upload"></i>upload
                                                            video</label>
                                                        <input type="file">
                                                    </div>
                                                    <i class="fa-light fa-pen"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="v-pills-signIn" role="tabpanel"
                                aria-labelledby="v-pills-signIn-tab">
                                <div class="settings-frm bdrblu signIn">
                                    <div class="signIn-cred">
                                        <div class="right-ac">
                                            <h3>Work Email address</h3>
                                            <h3>Work Email address</h3>
                                        </div>
                                        <i class="fa-light fa-pen" data-bs-toggle="modal" data-bs-target="#change_email"
                                            type="button"></i>
                                    </div>
                                    <div class="signIn-cred">
                                        <div class="right-ac">
                                            <h3>Phone number</h3>
                                            <h3>+1 234 567 8910</h3>
                                        </div>
                                        <i class="fa-light fa-pen" data-bs-toggle="modal" data-bs-target="#change_phone"
                                            type="button"></i>
                                    </div>
                                    <div class="signIn-cred">
                                        <div class="right-ac">
                                            <h3>Change Password</h3>
                                            <h3>*************</h3>
                                        </div>
                                        <i class="fa-light fa-pen" data-bs-toggle="modal"
                                            data-bs-target="#change__currpassword" type="button"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="v-pills-Subs" role="tabpanel"
                                aria-labelledby="v-pills-Subs-tab">
                                <div class="settings-frm bdrblu Subs">
                                    <div class="row">
                                        <div class="col-12 col-lg-9">
                                            <div class="Subs-left">
                                                <div class="upper">
                                                    <h2>Premium subscription</h2>
                                                    <h3>01 December, 2023</h3>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-lg-6">
                                                        <ul>
                                                            <li>
                                                                <h3>Sponsor your profile on Talents page.</h3>
                                                            </li>
                                                            <li>
                                                                <h3>Send 30 messages to the Employers/month</h3>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <ul>
                                                            <li>
                                                                <h3>FREE access to the Resume Builder</h3>
                                                            </li>
                                                            <li>
                                                                <h3>Achieve your goals faster.</h3>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-3">
                                            <div class="Subs-right">
                                                <h1>
                                                    ACTIVE
                                                </h1>
                                                <h1 class="inactive">
                                                    Inactive
                                                </h1>
                                                <a href="" class="theme-btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#unscrib" type="button">Unsubscribe</a>
                                                <a href="" class="theme-btn3 py-2" data-bs-toggle="modal"
                                                    data-bs-target="#free-trial" type="button">Reactivate premium</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade  " id="v-pills-notif" role="tabpanel"
                                aria-labelledby="v-pills-notif-tab">
                                <div class="settings-frm bdrblu notif">
                                    <div class="signIn-cred">
                                        <div class="right-ac">
                                            <h3>web designer</h3>
                                            <h3>email notifications</h3>
                                        </div>
                                        <div class="select-dropdown">
                                            <button href="#" role="button" data-value=""
                                                class="select-dropdown__button btn acti">Active
                                            </button>
                                            <ul class="select-dropdown__list ">
                                                <li data-value="1" class="select-dropdown__list-item"><a
                                                        href="">Active</a></li>
                                                <li data-value="2" class="select-dropdown__list-item"><a href="">Turn
                                                        Off</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="signIn-cred">
                                        <div class="right-ac">
                                            <h3>web developer</h3>
                                            <h3>email notifications</h3>
                                        </div>
                                        <div class="select-dropdown">
                                            <button href="#" role="button" data-value=""
                                                class="select-dropdown__button btn inacti"> Inactive
                                            </button>
                                            <ul class="select-dropdown__list ">
                                                <li data-value="1" class="select-dropdown__list-item"><a
                                                        href="">Active</a></li>
                                                <li data-value="2" class="select-dropdown__list-item"><a href="">Turn
                                                        Off</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text-end mt-5">
                                        <a href="" class="theme-btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#uns_all_notifications" type="button">Unsubscribe all
                                            notifications</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade  " id="v-pills-accnt" role="tabpanel"
                                aria-labelledby="v-pills-accnt-tab">
                                <div class="settings-frm bdrblu pills-accnt">
                                    <h6>
                                        If you are receiving too many emails or notifications, you dont need to delete
                                        your
                                        account. You can simply unsubscribe to the notifications.
                                    </h6>
                                    <div class="text-end">
                                        <a href="" class="theme-btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#verify-Otp" type="button">Delete account</a>
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
</section>


<style>
    /* Style for the circle */
    .btn-circle {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        display: inline-block;
    }

    /* Green circle for active state */
    .btn-circle.active {
        background-color: green;
    }

    /* Red circle for turn off state */
    .btn-circle.turn-off {
        background-color: red;
    }
</style>

<?php
include 'includes/footer.php';
$page = 'home';
?>


<script>
    $(document).ready(function () {
        // Handle click event of the dropdown items
        $(".dropdown-item").click(function () {
            var selectedValue = $(this).attr('data-value');
            // Update button text based on selected value
            $(this).closest(".btn-group").find(".btn").text($(this).text());
            // Update button class based on selected value
            var btnCircle = $(this).closest(".btn-group").find(".btn-circle");
            if (selectedValue === "active") {
                btnCircle.removeClass("turn-off").addClass("active");
            } else if (selectedValue === "turn_off") {
                btnCircle.removeClass("active").addClass("turn-off");
            }
            // Handle your logic for the selected value here
        });
    });
</script>