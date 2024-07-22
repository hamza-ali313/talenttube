<?php
$page = 'Home';
$pageDesc = '""';
include 'includes/header1.php';
$page = 'home';
?>
<section class="jobs2-banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="jobs2-header">
                    <img class="img-fluid" src="images/banner1.png" alt="">
                    <form action="javascript:;">
                        <ul>
                            <li>
                                <input type="text" name="" id="" placeholder="Search job title, keyword or Company">
                                <button><i class="fa-solid fa-magnifying-glass"></i></button>
                            </li>
                            <li>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option selected="">Province, city or region</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <span><i class="fa-regular fa-location-dot"></i></span>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="jobs2-main">
    <div class="container">
        <div class="jobs2-filter">
            <div class="row justify-content-end">
                <div class="col-12 col-lg-11">
                    <h1 class="d-md-block d-lg-none">Filters</h1>
                    <ul>
                        <li>
                            <h3>Filters</h3>
                        </li>
                        <li><button class="btn theme-btn">Date posted</button></li>
                        <li><button class="btn theme-btn">Salary</button></li>
                        <li><button class="btn theme-btn">Company</button></li>
                        <li><button class="btn theme-btn">Experience level</button></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="jobs2-main-body">
            <div class="row flex-column-reverse  flex-lg-row">
                <div class="col-lg-6">
                    <div class="jobs2-main-body-left" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <div class="jobs2-main-body-left-item active" id="v-pills-remote-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-remote" type="button" role="tab" aria-controls="v-pills-remote"
                            aria-selected="true">
                            <div class="jml1">
                                <img src="images/jobs-find1.png" alt="">
                                <div class="jml1-text">
                                    <h3>Software Engineer - Full stack</h3>
                                    <h4>Rockstar Games</h4>
                                    <p>Philadelphia, PA (Remote)</p>
                                    <p>$ 150k/yr</p>
                                </div>
                            </div>
                        </div>
                        <div class="jobs2-main-body-left-item" id="v-pills-remote1-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-remote1" type="button" role="tab" aria-controls="v-pills-remote1"
                            aria-selected="false">
                            <div class="jml1">
                                <img src="images/itel-sol.png" alt="">
                                <div class="jml1-text">
                                    <h3>Software Engineer - Full stack</h3>
                                    <h4>Rockstar Games</h4>
                                    <p>Philadelphia, PA (Remote)</p>
                                    <p>$ 150k/yr</p>
                                </div>
                            </div>
                        </div>
                        <div class="jobs2-main-body-left-item" id="v-pills-remote2-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-remote2" type="button" role="tab" aria-controls="v-pills-remote2"
                            aria-selected="false">
                            <div class="jml1">
                                <img src="images/jobs-find1.png" alt="">
                                <div class="jml1-text">
                                    <h3>Software Engineer - Full stack</h3>
                                    <h4>Rockstar Games</h4>
                                    <p>Philadelphia, PA (Remote)</p>
                                    <p>$ 150k/yr</p>
                                </div>
                            </div>
                        </div>
                        <div class="jobs2-main-body-left-item" id="v-pills-remote3-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-remote3" type="button" role="tab" aria-controls="v-pills-remote3"
                            aria-selected="false">
                            <div class="jml1">
                                <img src="images/itel-sol.png" alt="">
                                <div class="jml1-text">
                                    <h3>Software Engineer - Full stack</h3>
                                    <h4>Rockstar Games</h4>
                                    <p>Philadelphia, PA (Remote)</p>
                                    <p>$ 150k/yr</p>
                                </div>
                            </div>
                        </div>
                        <div class="jobs2-main-body-left-item" id="v-pills-remote4-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-remote4" type="button" role="tab" aria-controls="v-pills-remote4"
                            aria-selected="false">
                            <div class="jml1">
                                <img src="images/itel-sol.png" alt="">
                                <div class="jml1-text">
                                    <h3>Software Engineer - Full stack</h3>
                                    <h4>Rockstar Games</h4>
                                    <p>Philadelphia, PA (Remote)</p>
                                    <p>$ 150k/yr</p>
                                </div>
                            </div>
                        </div>
                        <div class="jobs2-main-body-left-item" id="v-pills-remote5-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-remote5" type="button" role="tab" aria-controls="v-pills-remote5"
                            aria-selected="false">
                            <div class="jml1">
                                <img src="images/itel-sol.png" alt="">
                                <div class="jml1-text">
                                    <h3>Software Engineer - Full stack</h3>
                                    <h4>Rockstar Games</h4>
                                    <p>Philadelphia, PA (Remote)</p>
                                    <p>$ 150k/yr</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div id="v-pills-tabContent">
                        <div class="jobs2-main-body-right fade show active" id="v-pills-remote" role="tabpanel"
                            aria-labelledby="v-pills-remote-tab">
                            <div class="main-desc d-flex justify-content-between">
                                <div>
                                    <h3>Software Engineer - Full stack</h3>
                                    <h4>Rockstar Games</h4>
                                    <div class="jmb-p d-flex gap-3">
                                        <p>Philadelphia, PA (Remote)</p>
                                        <p><i class="fa-solid fa-circle"></i><span>Promoted</span></p>
                                    </div>
                                    <div class="jmb-desc">
                                        <p><i class="fa-solid fa-hotel"></i><span>1000 - 1500 employees</span></p>
                                        <p><i class="fa-solid fa-toolbox"></i><span>$140,000 - $250,000 per year</span>
                                        </p>
                                        <p><i class="fa-solid fa-list-ul"></i><span>8 of 10 skills match your
                                                profile</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="jobs-title-img">
                                    <img src="images/jobs-find1.png" alt="img">
                                </div>
                            </div>
                            <div class="jmbr-btns">
                                <button class="theme-btn">Apply now</button>
                                <a href="javascript:;" class=""><i class="fa-solid fa-floppy-disk"></i>Save job</a>
                                <a href="javascript:;" class=""><i class="fa-solid fa-share-nodes"></i>Share</a>
                            </div>
                            <div class="jobs-detail">
                                <div class="jd-top">
                                    <h3>Job Details</h3>
                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris ultrices eros in.
                                        Lobortis elementum nibh tellus molestie nunc. Libero nunc consequat interdum
                                        varius
                                        sit amet mattis vulputate. Duis at consectetur lorem donec massa. Eget nulla
                                        facilisi etiam dignissim diam quis enim lobortis condimentum lacinia quis.</p>
                                    <br>
                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris ultrices eros in.
                                        Lobortis elementum nibh tellus molestie nunc. Libero nunc consequat interdum
                                        varius
                                        sit amet mattis vulputate. Duis at consectetur lorem donec massa. Eget nulla
                                        facilisi etiam dignissim diam quis enim lobortis condimentum lacinia quis.</p>
                                </div>
                                <div class="jd-bottom">
                                    <div class="gap-3 d-flex align-items-center">
                                        <img src="images/pic1.svg" alt="">
                                        <div>
                                            <h3>John Doe</h3>
                                            <h4>Recruiter</h4>
                                        </div>
                                    </div>
                                    <button class="btn theme-btn">Message</button>
                                </div>
                            </div>
                        </div>
                        <div class="jobs2-main-body-right fade" id="v-pills-remote1" role="tabpanel"
                            aria-labelledby="v-pills-remote1-tab">
                            <div class="main-desc d-flex justify-content-between">
                                <div>
                                    <h3>Software Developer - Full stack</h3>
                                    <h4>Info Games</h4>
                                    <div class="jmb-p d-flex gap-3">
                                        <p>Philadelphia, PA (Remote)</p>
                                        <p><i class="fa-solid fa-circle"></i><span>Promoted</span></p>
                                    </div>
                                    <div class="jmb-desc">
                                        <p><i class="fa-solid fa-hotel"></i><span>1000 - 1500 employees</span></p>
                                        <p><i class="fa-solid fa-toolbox"></i><span>$140,000 - $250,000 per year</span>
                                        </p>
                                        <p><i class="fa-solid fa-list-ul"></i><span>8 of 10 skills match your
                                                profile</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="jobs-title-img">
                                    <img src="images/jobs-find1.png" alt="img">
                                </div>
                            </div>
                            <div class="jmbr-btns">
                                <button class="theme-btn">Apply now</button>
                                <a href="javascript:;" class=""><i class="fa-solid fa-floppy-disk"></i>Save job</a>
                                <a href="javascript:;" class=""><i class="fa-solid fa-share-nodes"></i>Share</a>
                            </div>
                            <div class="jobs-detail">
                                <div class="jd-top">
                                    <h3>Job Details</h3>
                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris ultrices eros in.
                                        Lobortis elementum nibh tellus molestie nunc. Libero nunc consequat interdum
                                        varius
                                        sit amet mattis vulputate. Duis at consectetur lorem donec massa. Eget nulla
                                        facilisi etiam dignissim diam quis enim lobortis condimentum lacinia quis.</p>
                                    <br>
                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris ultrices eros in.
                                        Lobortis elementum nibh tellus molestie nunc. Libero nunc consequat interdum
                                        varius
                                        sit amet mattis vulputate. Duis at consectetur lorem donec massa. Eget nulla
                                        facilisi etiam dignissim diam quis enim lobortis condimentum lacinia quis.</p>
                                </div>
                                <div class="jd-bottom">
                                    <div class="gap-3 d-flex align-items-center">
                                        <img src="images/pic1.svg" alt="">
                                        <div>
                                            <h3>John Doe</h3>
                                            <h4>Recruiter</h4>
                                        </div>
                                    </div>
                                    <button class="btn theme-btn">Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="jobs2-main-body-next text-center">
            <button class="btn">Next Page <i class="fa-solid fa-arrow-right-long"></i></button>
        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
$page = 'home';
?>