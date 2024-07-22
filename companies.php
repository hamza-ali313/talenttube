<?php
$page = 'Home';
$pageDesc = '""';
include 'includes/header1.php';
$page = 'home';
?>

<section class="jobs2-banner jobs3-banner">
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
                <div class="col-11">
                    <ul>
                        <li>
                            <h3>Filters</h3>
                        </li>
                        <li><button class="btn theme-btn">Years of experience</button></li>
                        <li><button class="btn theme-btn">Industry</button></li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="jobs2-main-body">
            <div class="row flex-column-reverse  flex-lg-row">
                <div class="col-lg-4 for-scroll">
                    <div class="jobs3-main-body-left companies-job3" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <div class="jobs3-main-body-left-item active" id="v-pills-companies-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-companies" type="button" role="tab"
                            aria-controls="v-pills-companies" aria-selected="true">
                            <div class="jml2">
                                <div class="video-container position-relative">
                                    <img class="img-fluid" src="images/video-img.svg" alt="" class="vid-bg">
                                    <a data-fancybox="" data-type="video" href="images/video.mp4">
                                        <div class="play-pause-button center" onclick="togglePlayPause()">
                                            <i id="play-icon" class="fa-solid fa-play"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="jml2-text d-flex align-items-center gap-3">
                                    <h3>Company Name 1</h3>
                                    <h4>Industry</h4>
                                </div>
                            </div>
                        </div>
                        <div class="jobs3-main-body-left-item" id="v-pills-companies1-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-companies1" type="button" role="tab"
                            aria-controls="v-pills-companies1" aria-selected="false">
                            <div class="jml2">
                                <div class="video-container position-relative">
                                    <img class="img-fluid" src="images/video-img.svg" alt="" class="vid-bg">
                                    <a data-fancybox="" data-type="video" href="images/video.mp4">
                                        <div class="play-pause-button center" onclick="togglePlayPause()">
                                            <i id="play-icon" class="fa-solid fa-play"></i>
                                        </div>
                                    </a>
                                </div>

                                <div class="jml2-text d-flex align-items-center gap-3">
                                    <h3>Company Name 2</h3>
                                    <h4>Industry</h4>
                                </div>
                            </div>
                        </div>
                        <div class="jobs3-main-body-left-item" id="v-pills-companies2-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-companies2" type="button" role="tab"
                            aria-controls="v-pills-companies2" aria-selected="false">
                            <div class="jml2">
                                <div class="video-container position-relative">
                                    <img class="img-fluid" src="images/video-img.svg" alt="" class="vid-bg">
                                    <a data-fancybox="" data-type="video" href="images/video.mp4">
                                        <div class="play-pause-button center" onclick="togglePlayPause()">
                                            <i id="play-icon" class="fa-solid fa-play"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="jml2-text d-flex align-items-center gap-3">
                                    <h3>Mario Dunkin</h3>
                                    <h4>Project Manager</h4>
                                </div>
                            </div>
                        </div>
                        <div class="jobs3-main-body-left-item" id="v-pills-companies3-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-companies3" type="button" role="tab"
                            aria-controls="v-pills-companies3" aria-selected="false">
                            <div class="jml2">
                                <div class="video-container position-relative">
                                    <img class="img-fluid" src="images/video-img.svg" alt="" class="vid-bg">
                                    <a data-fancybox="" data-type="video" href="images/video.mp4">
                                        <div class="play-pause-button center" onclick="togglePlayPause()">
                                            <i id="play-icon" class="fa-solid fa-play"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="jml2-text d-flex align-items-center gap-3">
                                    <h3>Mario Dunkin</h3>
                                    <h4>Project Manager</h4>
                                </div>
                            </div>
                        </div>
                        <div class="jobs3-main-body-left-item" id="v-pills-companies4-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-companies4" type="button" role="tab"
                            aria-controls="v-pills-companies4" aria-selected="false">
                            <div class="jml2">
                                <div class="video-container position-relative">
                                    <img class="img-fluid" src="images/video-img.svg" alt="" class="vid-bg">
                                    <a data-fancybox="" data-type="video" href="images/video.mp4">
                                        <div class="play-pause-button center" onclick="togglePlayPause()">
                                            <i id="play-icon" class="fa-solid fa-play"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="jml2-text d-flex align-items-center gap-3">
                                    <h3>Mario Dunkin</h3>
                                    <h4>Project Manager</h4>
                                </div>
                            </div>
                        </div>
                        <div class="jobs3-main-body-left-item" id="v-pills-companies5-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-companies5" type="button" role="tab"
                            aria-controls="v-pills-companies5" aria-selected="false">
                            <div class="jml2">
                                <div class="video-container position-relative">
                                    <img class="img-fluid" src="images/video-img.svg" alt="" class="vid-bg">
                                    <a data-fancybox="" data-type="video" href="images/video.mp4">
                                        <div class="play-pause-button center" onclick="togglePlayPause()">
                                            <i id="play-icon" class="fa-solid fa-play"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="jml2-text d-flex align-items-center gap-3">
                                    <h3>Mario Dunkin</h3>
                                    <h4>Project Manager</h4>
                                </div>
                            </div>
                        </div>
                        <div class="jobs3-main-body-left-item" id="v-pills-companies6-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-companies6" type="button" role="tab"
                            aria-controls="v-pills-companies6" aria-selected="false">
                            <div class="jml2">
                                <div class="video-container position-relative">
                                    <img class="img-fluid" src="images/video-img.svg" alt="" class="vid-bg">
                                    <a data-fancybox="" data-type="video" href="images/video.mp4">
                                        <div class="play-pause-button center" onclick="togglePlayPause()">
                                            <i id="play-icon" class="fa-solid fa-play"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="jml2-text d-flex align-items-center gap-3">
                                    <h3>Mario Dunkin</h3>
                                    <h4>Project Manager</h4>
                                </div>
                            </div>
                        </div>
                        <div class="jobs3-main-body-left-item" id="v-pills-companies7-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-companies7" type="button" role="tab"
                            aria-controls="v-pills-companies7" aria-selected="false">
                            <div class="jml2">
                                <div class="video-container position-relative">
                                    <img class="img-fluid" src="images/video-img.svg" alt="" class="vid-bg">
                                    <a data-fancybox="" data-type="video" href="images/video.mp4">
                                        <div class="play-pause-button center" onclick="togglePlayPause()">
                                            <i id="play-icon" class="fa-solid fa-play"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="jml2-text d-flex align-items-center gap-3">
                                    <h3>Mario Dunkin</h3>
                                    <h4>Project Manager</h4>
                                </div>
                            </div>
                        </div>
                        <div class="jobs3-main-body-left-item" id="v-pills-companies8-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-companies8" type="button" role="tab"
                            aria-controls="v-pills-companies8" aria-selected="false">
                            <div class="jml2">
                                <div class="video-container position-relative">
                                    <img class="img-fluid" src="images/video-img.svg" alt="" class="vid-bg">
                                    <a data-fancybox="" data-type="video" href="images/video.mp4">
                                        <div class="play-pause-button center" onclick="togglePlayPause()">
                                            <i id="play-icon" class="fa-solid fa-play"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="jml2-text d-flex align-items-center gap-3">
                                    <h3>Mario Dunkin</h3>
                                    <h4>Project Manager</h4>
                                </div>
                            </div>
                        </div>
                        <div class="jobs3-main-body-left-item" id="v-pills-companies9-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-companies9" type="button" role="tab"
                            aria-controls="v-pills-companies9" aria-selected="false">
                            <div class="jml2">
                                <div class="video-container position-relative">
                                    <img class="img-fluid" src="images/video-img.svg" alt="" class="vid-bg">
                                    <a data-fancybox="" data-type="video" href="images/video.mp4">
                                        <div class="play-pause-button center" onclick="togglePlayPause()">
                                            <i id="play-icon" class="fa-solid fa-play"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="jml2-text d-flex align-items-center gap-3">
                                    <h3>Mario Dunkin</h3>
                                    <h4>Project Manager</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div id="v-pills-tabContent">
                        <div class="jobs3-main-body-right fade show active" id="v-pills-companies" role="tabpanel"
                            aria-labelledby="v-pills-companies-tab">
                            <div class="jobs3-top">
                                <div class="jobs3-top-profile">
                                    <img class="img-fluid" src="images/company1.svg" alt="">
                                    <div>
                                        <h2>TACION</h2>
                                        <div class="jmb-desc comp-jmb-desc">
                                            <p><i class="fa-solid fa-hotel"></i><span>1000 - 1500 employees</span></p>
                                            <p><i class="fa-solid fa-toolbox"></i><span>IT Solutions</span>
                                            </p>
                                            <p><i class="fa-solid fa-globe"></i><span>www.tacion.com</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="jobs3-top-text">
                                    <h3>About</h3>
                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris ultrices eros in.
                                        Lobortis elementum nibh tellus molestie nunc. Libero nunc consequat interdum
                                        varius
                                        sit amet mattis vulputate. Duis at consectetur lorem donec massa. Eget nulla
                                        facilisi etiam dignissim diam quis enim lobortis condimentum lacinia quis.</p>
                                </div>
                            </div>
                            <div class="jobs3-top">
                                <div class="jobs3-top-text">
                                    <h3>Active Jobs from Tacion</h3>
                                    <div class="d-flex align-items-center justify-content-between my-divs ">
                                        <div class="jobs3-top-3 comp3">
                                            <div class="d-flex align-items-center gap-3">
                                                <h3><span>Software engineer</span></h3>
                                                <h4>Remote / United states</h4>
                                            </div>
                                            <p><i class="fa-solid fa-toolbox"></i><span>$140,000 - $250,000 per
                                                    year</span>
                                            </p>
                                        </div>
                                        <div>
                                            <button class="theme-btn btn-square"  data-bs-toggle="modal" data-bs-target="#view_detail">View details</button>
                                        </div>
                                    </div>
                                    <div class="my-4 d-flex align-items-center justify-content-between my-divs">
                                        <div class="jobs3-top-3 comp3">
                                            <div class="d-flex align-items-center gap-3">
                                                <h3><span>Data Analyst</span></h3>
                                                <h4>On-site / New York</h4>
                                            </div>
                                            <p><i class="fa-solid fa-toolbox"></i><span>$140,000 - $250,000 per
                                                    year</span>
                                            </p>
                                        </div>
                                        <div>
                                            <button class="theme-btn btn-square">View details</button>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between my-divs mb-3">
                                        <div class="jobs3-top-3 comp3">
                                            <div class="d-flex align-items-center gap-3">
                                                <h3><span>Software Developer</span></h3>
                                                <h4>Hybrid / Bay Area -California</h4>
                                            </div>
                                            <p><i class="fa-solid fa-toolbox"></i><span>$140,000 - $250,000 per
                                                    year</span>
                                            </p>
                                        </div>
                                        <div>
                                            <button class="theme-btn btn-square">View details</button>
                                        </div>

                                    </div>
                                    <div class="btn-specs">
                                        <button class="btn">
                                            <i class="fa-solid fa-plus"></i>
                                            <span>Load more</span></button>
                                    </div>
                                    <div class="jobs3-edu recq-img">
                                        <h3>Recruiters from Tacion</h3>
                                        <div
                                            class="recq-profile d-flex align-items-center justify-content-between my-divs">
                                            <div class="d-flex align-items-center gap-4">
                                                <img class="img-fluid" src="images/pic2.svg" alt="">
                                                <div>
                                                    <h2>John Doe</h2>
                                                    <h4>Recruiter</h4>
                                                </div>
                                            </div>
                                            <button class="theme-btn btn-square">Message</button>
                                        </div>
                                        <div
                                            class="recq-profile d-flex align-items-center justify-content-between my-divs">
                                            <div class="d-flex align-items-center gap-4">
                                                <img class="img-fluid" src="images/pic2.svg" alt="">
                                                <div>
                                                    <h2>John Doe</h2>
                                                    <h4>Recruiter</h4>
                                                </div>
                                            </div>
                                            <button class="theme-btn btn-square">Message</button>
                                        </div>
                                        <div
                                            class="recq-profile d-flex align-items-center justify-content-between my-divs">
                                            <div class="d-flex align-items-center gap-4">
                                                <img class="img-fluid" src="images/pic2.svg" alt="">
                                                <div>
                                                    <h2>John Doe</h2>
                                                    <h4>Recruiter</h4>
                                                </div>
                                            </div>
                                            <button class="theme-btn btn-square">Message</button>
                                        </div>
                                        <div class="btn-specs">
                                            <button class="btn">
                                                <i class="fa-solid fa-plus"></i>
                                                <span>Load more</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="jobs3-main-body-right fade" id="v-pills-companies1" role="tabpanel"
                            aria-labelledby="v-pills-companies1-tab">
                            <div class="jobs3-top">
                                <div class="jobs3-top-profile">
                                    <img class="img-fluid" src="images/company1.svg" alt="">
                                    <div>
                                        <h2>Buffer ZONE</h2>
                                        <div class="jmb-desc comp-jmb-desc">
                                            <p><i class="fa-solid fa-hotel"></i><span>500 - 1500 employees</span></p>
                                            <p><i class="fa-solid fa-toolbox"></i><span>IT Solutions</span>
                                            </p>
                                            <p><i class="fa-solid fa-globe"></i><span>www.tacion.com</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="jobs3-top-text">
                                    <h3>About</h3>
                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris ultrices eros in.
                                        Lobortis elementum nibh tellus molestie nunc. Libero nunc consequat interdum
                                        varius
                                        sit amet mattis vulputate. Duis at consectetur lorem donec massa. Eget nulla
                                        facilisi etiam dignissim diam quis enim lobortis condimentum lacinia quis.</p>
                                </div>
                            </div>
                            <div class="jobs3-top">
                                <div class="jobs3-top-text">
                                    <h3>Active Jobs from Tacion</h3>
                                    <div class="d-flex align-items-center justify-content-between my-divs ">
                                        <div class="jobs3-top-3 comp3">
                                            <div class="d-flex align-items-center gap-3">
                                                <h3><span>Software engineer</span></h3>
                                                <h4>Remote / United states</h4>
                                            </div>
                                            <p><i class="fa-solid fa-toolbox"></i><span>$140,000 - $250,000 per
                                                    year</span>
                                            </p>
                                        </div>
                                        <div>
                                            <button class="theme-btn btn-square">View details</button>
                                        </div>
                                    </div>
                                    <div class="my-4 d-flex align-items-center justify-content-between my-divs">
                                        <div class="jobs3-top-3 comp3">
                                            <div class="d-flex align-items-center gap-3">
                                                <h3><span>Data Analyst</span></h3>
                                                <h4>On-site / New York</h4>
                                            </div>
                                            <p><i class="fa-solid fa-toolbox"></i><span>$140,000 - $250,000 per
                                                    year</span>
                                            </p>
                                        </div>
                                        <div>
                                            <button class="theme-btn btn-square">View details</button>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between my-divs mb-3">
                                        <div class="jobs3-top-3 comp3">
                                            <div class="d-flex align-items-center gap-3">
                                                <h3><span>Software Developer</span></h3>
                                                <h4>Hybrid / Bay Area -California</h4>
                                            </div>
                                            <p><i class="fa-solid fa-toolbox"></i><span>$140,000 - $250,000 per
                                                    year</span>
                                            </p>
                                        </div>
                                        <div>
                                            <button class="theme-btn btn-square">View details</button>
                                        </div>

                                    </div>
                                    <div class="btn-specs">
                                        <button class="btn">
                                            <i class="fa-solid fa-plus"></i>
                                            <span>Load more</span></button>
                                    </div>
                                    <div class="jobs3-edu recq-img">
                                        <h3>Recruiters from Tacion</h3>
                                        <div
                                            class="recq-profile d-flex align-items-center justify-content-between my-divs">
                                            <div class="d-flex align-items-center gap-4">
                                                <img class="img-fluid" src="images/pic2.svg" alt="">
                                                <div>
                                                    <h2>John Doe</h2>
                                                    <h4>Recruiter</h4>
                                                </div>
                                            </div>
                                            <button class="theme-btn btn-square">Message</button>
                                        </div>
                                        <div
                                            class="recq-profile d-flex align-items-center justify-content-between my-divs">
                                            <div class="d-flex align-items-center gap-4">
                                                <img class="img-fluid" src="images/pic2.svg" alt="">
                                                <div>
                                                    <h2>John Doe</h2>
                                                    <h4>Recruiter</h4>
                                                </div>
                                            </div>
                                            <button class="theme-btn btn-square">Message</button>
                                        </div>
                                        <div
                                            class="recq-profile d-flex align-items-center justify-content-between my-divs">
                                            <div class="d-flex align-items-center gap-4">
                                                <img class="img-fluid" src="images/pic2.svg" alt="">
                                                <div>
                                                    <h2>John Doe</h2>
                                                    <h4>Recruiter</h4>
                                                </div>
                                            </div>
                                            <button class="theme-btn btn-square">Message</button>
                                        </div>
                                        <div class="btn-specs">
                                            <button class="btn">
                                                <i class="fa-solid fa-plus"></i>
                                                <span>Load more</span></button>
                                        </div>
                                    </div>
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