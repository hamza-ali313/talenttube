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
                    <h1 class="d-md-block d-lg-none">Filters</h1>
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
                    <div class="jobs3-main-body-left">
                        <div class="jobs3-main-body-left-item" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <div class="jobs3-main-body-left-item active" id="v-pills-profile10-tab"
                                data-bs-toggle="pill" data-bs-target="#v-pills-profile10" type="button" role="tab"
                                aria-controls="v-pills-profile10" aria-selected="true">
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
                            <div class="jobs3-main-body-left-item" id="v-pills-profile11-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile11" type="button" role="tab"
                                aria-controls="v-pills-profile11" aria-selected="false">
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
                            <div class="jobs3-main-body-left-item" id="v-pills-profile12-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile12" type="button" role="tab"
                                aria-controls="v-pills-profile12" aria-selected="false">
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
                            <div class="jobs3-main-body-left-item" id="v-pills-profile13-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile13" type="button" role="tab"
                                aria-controls="v-pills-profile13" aria-selected="false">
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
                            <div class="jobs3-main-body-left-item" id="v-pills-profile14-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile14" type="button" role="tab"
                                aria-controls="v-pills-profile14" aria-selected="false">
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
                            <div class="jobs3-main-body-left-item" id="v-pills-profile15-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile15" type="button" role="tab"
                                aria-controls="v-pills-profile15" aria-selected="false">
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
                            <div class="jobs3-main-body-left-item" id="v-pills-profile16-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile16" type="button" role="tab"
                                aria-controls="v-pills-profile16" aria-selected="false">
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
                            <div class="jobs3-main-body-left-item" id="v-pills-profile17-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile17" type="button" role="tab"
                                aria-controls="v-pills-profile17" aria-selected="false">
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
                            <div class="jobs3-main-body-left-item" id="v-pills-profile18-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile18" type="button" role="tab"
                                aria-controls="v-pills-profile18" aria-selected="false">
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
                            <div class="jobs3-main-body-left-item" id="v-pills-profile19-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile19" type="button" role="tab"
                                aria-controls="v-pills-profile19" aria-selected="false">
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
                </div>
                <div class="col-lg-8">
                    <div id="v-pills-tabContent">
                        <div class="jobs3-main-body-right fade show active" id="v-pills-profile10" role="tabpanel"
                            aria-labelledby="v-pills-profile10-tab">
                            <div class="jobs3-top">
                                <div class="jobs3-top-profile">
                                    <img class="img-fluid" src="images/pic2.svg" alt="">
                                    <div>
                                        <h2>Mario Dunkin</h2>
                                        <p>Project Manager</p>
                                        <h4>8 years of experience</h4>
                                    </div>
                                </div>
                                <div class="jobs3-top-text talent">
                                    <h3>About</h3>
                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris ultrices eros
                                        in.
                                        Lobortis elementum nibh tellus molestie nunc. Libero nunc consequat interdum
                                        varius
                                        sit amet mattis vulputate. Duis at consectetur lorem donec massa. Eget nulla
                                        facilisi etiam dignissim diam quis enim lobortis condimentum lacinia quis.
                                    </p>
                                </div>
                            </div>
                            <div class="viewable-btns">
                                <div>
                                    <a class="theme-btn3" data-bs-toggle="modal" data-bs-target="#profile-info-modal">Information</a>
                                </div>
                                <div>
                                    <a class="theme-btn3" data-bs-toggle="modal" data-bs-target="#invite-to-apply">Invite to Apply</a>
                                </div>
                                <div>
                                    <a class="theme-btn3" href="chat.php">Message</a>
                                </div>
                            </div>
                            <div class="profile-right-box expe">
                                <div class="profile-right-box-upper">
                                    <h2>
                                        Experience
                                    </h2>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 for-scroll">
                                        <div class="jobs3-main-body-left inner">
                                            <div class="proj-man">
                                                <div>
                                                    <div class="img"></div>
                                                    <div>
                                                        <h6>Project Manager</h6>
                                                        <h2>Company Name</h2>
                                                        <h6>2015 - 2021</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="proj-man">
                                                <div>
                                                    <div class="img"></div>
                                                    <div>
                                                        <h6>Project Manager</h6>
                                                        <h2>Company Name</h2>
                                                        <h6>2015 - 2021</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="proj-man">
                                                <div>
                                                    <div class="img"></div>
                                                    <div>
                                                        <h6>Project Manager</h6>
                                                        <h2>Company Name</h2>
                                                        <h6>2015 - 2021</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="proj-man">
                                                <div>
                                                    <div class="img"></div>
                                                    <div>
                                                        <h6>Project Manager</h6>
                                                        <h2>Company Name</h2>
                                                        <h6>2015 - 2021</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="proj-man">
                                                <div>
                                                    <div class="img"></div>
                                                    <div>
                                                        <h6>Project Manager</h6>
                                                        <h2>Company Name</h2>
                                                        <h6>2015 - 2021</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="proj-man">
                                                <div>
                                                    <div class="img"></div>
                                                    <div>
                                                        <h6>Project Manager</h6>
                                                        <h2>Company Name</h2>
                                                        <h6>2015 - 2021</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="proj-man">
                                                <div>
                                                    <div class="img"></div>
                                                    <div>
                                                        <h6>Project Manager</h6>
                                                        <h2>Company Name</h2>
                                                        <h6>2015 - 2021</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="proj-man">
                                                <div>
                                                    <div class="img"></div>
                                                    <div>
                                                        <h6>Project Manager</h6>
                                                        <h2>Company Name</h2>
                                                        <h6>2015 - 2021</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="proj-man">
                                                <div>
                                                    <div class="img"></div>
                                                    <div>
                                                        <h6>Project Manager</h6>
                                                        <h2>Company Name</h2>
                                                        <h6>2015 - 2021</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="proj-man">
                                                <div>
                                                    <div class="img"></div>
                                                    <div>
                                                        <h6>Project Manager</h6>
                                                        <h2>Company Name</h2>
                                                        <h6>2015 - 2021</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="proj-man">
                                                <div>
                                                    <div class="img"></div>
                                                    <div>
                                                        <h6>Project Manager</h6>
                                                        <h2>Company Name</h2>
                                                        <h6>2015 - 2021</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 p-0">
                                        <div id="v-pills-tabContent">
                                            <div class="jobs3-main-body-right inner fade show active"
                                                id="v-pills-profile10" role="tabpanel"
                                                aria-labelledby="v-pills-profile10-tab">
                                                <div class="jobs3-top">
                                                    <div class="proj-man">
                                                        <div>
                                                            <div class="img"></div>
                                                            <div>
                                                                <h6>Project Manager</h6>
                                                                <h2>Company Name</h2>
                                                                <h6>2015 - 2021</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jobs3-top-text talent">
                                                        <p>Remember, employers appreciate candidates who make an effort
                                                            to
                                                            present themselves professionally, and a well-prepared video
                                                            can
                                                            set you apart from other job seekers.
                                                        </p>
                                                        <p>
                                                            Remember, employers appreciate candidates who make an effort
                                                            to
                                                            present themselves professionally, and a well-prepared video
                                                            can
                                                            set you apart from other job seekers. Remember, employers
                                                            appreciate candidates who make an effort to present
                                                            themselves
                                                            professionally, and a well-prepared video can set you apart
                                                            from
                                                            other job seekers.
                                                        </p>
                                                        <p>
                                                            Remember, employers appreciate candidates who make an effort
                                                            to
                                                            present themselves professionally, and a well-prepared video
                                                            can
                                                            set you apart from other job seekers.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jobs3-main-body-right fade" id="v-pills-profile11"
                                                role="tabpanel" aria-labelledby="v-pills-profile11-tab">
                                                <div class="jobs3-top">
                                                    <div class="jobs3-top-profile">
                                                        <img class="img-fluid" src="images/pic2.svg" alt="">
                                                        <div>
                                                            <h2>Dok Berik</h2>
                                                            <p>SEO Manager</p>
                                                            <h4>3 years of experience</h4>
                                                        </div>
                                                    </div>
                                                    <div class="jobs3-top-text talent">
                                                        <h3>About</h3>
                                                        <p>Pharetra convallis posuere morbi leo. Vestibulum lectus
                                                            mauris
                                                            ultrices eros
                                                            in.
                                                            Lobortis elementum nibh tellus molestie nunc. Libero nunc
                                                            consequat interdum
                                                            varius
                                                            sit amet mattis vulputate. Duis at consectetur lorem donec
                                                            massa. Eget nulla
                                                            facilisi etiam dignissim diam quis enim lobortis condimentum
                                                            lacinia quis.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="jobs3-mid">
                                                    <div class="viewable-btns">
                                                        <div>
                                                            <button class="theme-btn3">Information</button>
                                                            <h3>Phone</h3>
                                                            <h3>Email</h3>
                                                            <h3>Work Authorization</h3>
                                                        </div>
                                                        <div>
                                                            <button class="theme-btn3">Invite to Apply</button>
                                                            <h3>Choose from my <br> posted jobs</h3>

                                                        </div>
                                                        <div>
                                                            <button class="theme-btn3">Message</button>
                                                            <h3>Chat window</h3>
                                                        </div>
                                                        <div>
                                                            <button class="theme-btn3">View Profile</button>
                                                            <h3>Link to the <br> candidate profile</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jobs3-top">
                                                    <div class="jobs3-top-text">
                                                        <div>
                                                            <h3>Experience</h3>
                                                            <p>Pharetra convallis posuere morbi leo. Vestibulum lectus
                                                                mauris ultrices
                                                                eros
                                                                in.
                                                                Lobortis elementum nibh tellus molestie nunc. Libero
                                                                nunc
                                                                consequat
                                                                interdum
                                                                varius
                                                                sit amet mattis vulputate. Duis at consectetur lorem
                                                                donec
                                                                massa. Eget
                                                                nulla
                                                                facilisi etiam dignissim diam quis enim lobortis
                                                                condimentum
                                                                lacinia
                                                                quis.
                                                            </p>
                                                        </div>
                                                        <div class="jobs3-top-3">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <h4>2019-2023</h4>
                                                                <h3><span>Software engineer at Intel</span></h3>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum
                                                                        lectus mauris
                                                                        ultrices
                                                                        eros
                                                                        in. Lobortis elementum nibh tellus molestie
                                                                        nunc.
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum
                                                                        lectus mauris
                                                                        ultrices
                                                                        eros
                                                                        in. Lobortis elementum nibh tellus molestie
                                                                        nunc.
                                                                    </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="jobs3-top-3">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <h4>2019-2023</h4>
                                                                <h3><span>Software engineer at Intel</span></h3>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum
                                                                        lectus mauris
                                                                        ultrices
                                                                        eros
                                                                        in. Lobortis elementum nibh tellus molestie
                                                                        nunc.
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum
                                                                        lectus mauris
                                                                        ultrices
                                                                        eros
                                                                        in. Lobortis elementum nibh tellus molestie
                                                                        nunc.
                                                                    </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="jobs3-top-3">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <h4>2019-2023</h4>
                                                                <h3><span>Software engineer at Intel</span></h3>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum
                                                                        lectus mauris
                                                                        ultrices
                                                                        eros
                                                                        in. Lobortis elementum nibh tellus molestie
                                                                        nunc.
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum
                                                                        lectus mauris
                                                                        ultrices
                                                                        eros
                                                                        in. Lobortis elementum nibh tellus molestie
                                                                        nunc.
                                                                    </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="jobs3-edu">
                                                            <h3>Education</h3>
                                                            <p>Pharetra convallis posuere morbi leo. Vestibulum lectus
                                                                mauris ultrices
                                                                eros
                                                                in.
                                                                Lobortis elementum nibh tellus molestie nunc.</p>
                                                            <div class="mt-3">
                                                                <div class="d-flex align-items-center gap-5">
                                                                    <h4>MsC</h4>
                                                                    <p>Masters degree in Management</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-5">
                                                                    <h4>MsC</h4>
                                                                    <p>Masters degree in Management</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="jobs3-edu">
                                                            <h3>Supportive documents</h3>
                                                            <div class="mt-3">
                                                                <div class="d-flex align-items-center gap-3">
                                                                    <h4><i class="fa-solid fa-paperclip"></i></h4>
                                                                    <p>Document 1 - Attachment</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-3">
                                                                    <h4><i class="fa-solid fa-paperclip"></i></h4>
                                                                    <p>Document 2 - Attachment</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="jobs3-edu">
                                                            <h3>Portfolio &amp; work history</h3>
                                                            <div class="mt-3">
                                                                <div class="d-flex align-items-center gap-3">
                                                                    <h4><i class="fa-solid fa-paperclip"></i></h4>
                                                                    <p>www.yourlinkhere.com</p>
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
                            <div class="profile-right-box">
                                <div class="profile-right-box-upper">
                                    <h2>
                                        Education
                                    </h2>
                                </div>
                                <ul class="proj-man-sec">
                                    <li>
                                        <div class="proj-man">
                                            <div>
                                                <div class="img"></div>
                                                <div>
                                                    <h6>Business Administration</h6>
                                                    <h2>University Name</h2>
                                                    <h6>2015 - 2021</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="proj-man">
                                            <div>
                                                <div class="img"></div>
                                                <div>
                                                    <h6>Computer Sciences</h6>
                                                    <h2>College Name</h2>
                                                    <h6>2015 - 2021</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="profile-right-box">
                                <div class="profile-right-box-upper">
                                    <h2>
                                        Skills
                                    </h2>
                                </div>
                                <ul class="ul-skills">
                                    <li>
                                        <h6>Project manager</h6>
                                    </li>
                                    <li>
                                        <h6>Sales Support</h6>
                                    </li>
                                    <li>
                                        <h6>IT Specialist</h6>
                                    </li>
                                    <li>
                                        <h6>Team Lead</h6>
                                    </li>
                                    <li>
                                        <h6>Sales Support</h6>
                                    </li>
                                    <li>
                                        <h6>Sales Support</h6>
                                    </li>
                                    <li>
                                        <h6>Team Lead</h6>
                                    </li>
                                    <li>
                                        <h6>Sales Support</h6>
                                    </li>
                                    <li>
                                        <h6>Team Lead</h6>
                                    </li>
                                    <li>
                                        <h6>Project manager</h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="upload-vid-sec">
                                <div class="row">
                                    <div class="col-12 col-lg-5">
                                        <div class="upload-box">
                                            <h2>Supportive Documents</h2>
                                            <ul class="ul-skills">
                                                <li>
                                                    <h6>Project Manager.doc</h6>
                                                </li>
                                                <li>
                                                    <h6>Experience.doc</h6>
                                                </li>
                                                <li>
                                                    <h6>Experience.doc</h6>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7">
                                        <div class="portfolio">
                                            <h2>Portfolio</h2>
                                            <ul class="ul-portfolio">
                                                <li>
                                                    <h6>link #1</h6>
                                                    <ul>
                                                        <li>
                                                            <input type="text">
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-check-circle"></i>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h6>link #2</h6>
                                                    <ul>
                                                        <li>
                                                            <input type="text">
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-check-circle"></i>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="jobs3-main-body-right fade" id="v-pills-profile11" role="tabpanel"
                            aria-labelledby="v-pills-profile11-tab">
                            <div class="jobs3-top">
                                <div class="jobs3-top-profile">
                                    <img class="img-fluid" src="images/pic2.svg" alt="">
                                    <div>
                                        <h2>Dok Berik</h2>
                                        <p>SEO Manager</p>
                                        <h4>3 years of experience</h4>
                                    </div>
                                </div>
                                <div class="jobs3-top-text talent">
                                    <h3>About</h3>
                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris ultrices eros
                                        in.
                                        Lobortis elementum nibh tellus molestie nunc. Libero nunc consequat interdum
                                        varius
                                        sit amet mattis vulputate. Duis at consectetur lorem donec massa. Eget nulla
                                        facilisi etiam dignissim diam quis enim lobortis condimentum lacinia quis.
                                    </p>
                                </div>
                            </div>
                            <div class="profile-right-box expe">
                                <div class="profile-right-box-upper">
                                    <h2>
                                        Experience
                                    </h2>
                                    <ul class="add-btns">
                                        <li>
                                            <a type="button" data-bs-toggle="modal" data-bs-target="#add_Experience"><i
                                                    class="fas fa-plus-circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a type="button" data-bs-toggle="modal" data-bs-target="#Experiencemodal"><i
                                                    class="fa-light fa-pen"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 for-scroll">
                                        <div class="jobs3-main-body-left inner">
                                            <div class="proj-man">
                                                <div>
                                                    <div class="img"></div>
                                                    <div>
                                                        <h6>Project Manager</h6>
                                                        <h2>Company Name</h2>
                                                        <h6>2015 - 2021</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="proj-man">
                                                <div>
                                                    <div class="img"></div>
                                                    <div>
                                                        <h6>Project Manager</h6>
                                                        <h2>Company Name</h2>
                                                        <h6>2015 - 2021</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="proj-man">
                                                <div>
                                                    <div class="img"></div>
                                                    <div>
                                                        <h6>Project Manager</h6>
                                                        <h2>Company Name</h2>
                                                        <h6>2015 - 2021</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="proj-man">
                                                <div>
                                                    <div class="img"></div>
                                                    <div>
                                                        <h6>Project Manager</h6>
                                                        <h2>Company Name</h2>
                                                        <h6>2015 - 2021</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="proj-man">
                                                <div>
                                                    <div class="img"></div>
                                                    <div>
                                                        <h6>Project Manager</h6>
                                                        <h2>Company Name</h2>
                                                        <h6>2015 - 2021</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="proj-man">
                                                <div>
                                                    <div class="img"></div>
                                                    <div>
                                                        <h6>Project Manager</h6>
                                                        <h2>Company Name</h2>
                                                        <h6>2015 - 2021</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="proj-man">
                                                <div>
                                                    <div class="img"></div>
                                                    <div>
                                                        <h6>Project Manager</h6>
                                                        <h2>Company Name</h2>
                                                        <h6>2015 - 2021</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="proj-man">
                                                <div>
                                                    <div class="img"></div>
                                                    <div>
                                                        <h6>Project Manager</h6>
                                                        <h2>Company Name</h2>
                                                        <h6>2015 - 2021</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="proj-man">
                                                <div>
                                                    <div class="img"></div>
                                                    <div>
                                                        <h6>Project Manager</h6>
                                                        <h2>Company Name</h2>
                                                        <h6>2015 - 2021</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="proj-man">
                                                <div>
                                                    <div class="img"></div>
                                                    <div>
                                                        <h6>Project Manager</h6>
                                                        <h2>Company Name</h2>
                                                        <h6>2015 - 2021</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="proj-man">
                                                <div>
                                                    <div class="img"></div>
                                                    <div>
                                                        <h6>Project Manager</h6>
                                                        <h2>Company Name</h2>
                                                        <h6>2015 - 2021</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 p-0">
                                        <div id="v-pills-tabContent">
                                            <div class="jobs3-main-body-right inner fade show active"
                                                id="v-pills-profile10" role="tabpanel"
                                                aria-labelledby="v-pills-profile10-tab">
                                                <div class="jobs3-top">
                                                    <div class="proj-man">
                                                        <div>
                                                            <div class="img"></div>
                                                            <div>
                                                                <h6>Project Manager</h6>
                                                                <h2>Company Name</h2>
                                                                <h6>2015 - 2021</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jobs3-top-text talent">
                                                        <p>Remember, employers appreciate candidates who make an effort
                                                            to
                                                            present themselves professionally, and a well-prepared video
                                                            can
                                                            set you apart from other job seekers.
                                                        </p>
                                                        <p>
                                                            Remember, employers appreciate candidates who make an effort
                                                            to
                                                            present themselves professionally, and a well-prepared video
                                                            can
                                                            set you apart from other job seekers. Remember, employers
                                                            appreciate candidates who make an effort to present
                                                            themselves
                                                            professionally, and a well-prepared video can set you apart
                                                            from
                                                            other job seekers.
                                                        </p>
                                                        <p>
                                                            Remember, employers appreciate candidates who make an effort
                                                            to
                                                            present themselves professionally, and a well-prepared video
                                                            can
                                                            set you apart from other job seekers.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jobs3-main-body-right fade" id="v-pills-profile11"
                                                role="tabpanel" aria-labelledby="v-pills-profile11-tab">
                                                <div class="jobs3-top">
                                                    <div class="jobs3-top-profile">
                                                        <img class="img-fluid" src="images/pic2.svg" alt="">
                                                        <div>
                                                            <h2>Dok Berik</h2>
                                                            <p>SEO Manager</p>
                                                            <h4>3 years of experience</h4>
                                                        </div>
                                                    </div>
                                                    <div class="jobs3-top-text talent">
                                                        <h3>About</h3>
                                                        <p>Pharetra convallis posuere morbi leo. Vestibulum lectus
                                                            mauris
                                                            ultrices eros
                                                            in.
                                                            Lobortis elementum nibh tellus molestie nunc. Libero nunc
                                                            consequat interdum
                                                            varius
                                                            sit amet mattis vulputate. Duis at consectetur lorem donec
                                                            massa. Eget nulla
                                                            facilisi etiam dignissim diam quis enim lobortis condimentum
                                                            lacinia quis.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="jobs3-mid">
                                                    <div class="viewable-btns">
                                                        <div>
                                                            <button class="theme-btn3">Information</button>
                                                            <h3>Phone</h3>
                                                            <h3>Email</h3>
                                                            <h3>Work Authorization</h3>
                                                        </div>
                                                        <div>
                                                            <button class="theme-btn3">Invite to Apply</button>
                                                            <h3>Choose from my <br> posted jobs</h3>

                                                        </div>
                                                        <div>
                                                            <button class="theme-btn3">Message</button>
                                                            <h3>Chat window</h3>
                                                        </div>
                                                        <div>
                                                            <button class="theme-btn3">View Profile</button>
                                                            <h3>Link to the <br> candidate profile</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jobs3-top">
                                                    <div class="jobs3-top-text">
                                                        <div>
                                                            <h3>Experience</h3>
                                                            <p>Pharetra convallis posuere morbi leo. Vestibulum lectus
                                                                mauris ultrices
                                                                eros
                                                                in.
                                                                Lobortis elementum nibh tellus molestie nunc. Libero
                                                                nunc
                                                                consequat
                                                                interdum
                                                                varius
                                                                sit amet mattis vulputate. Duis at consectetur lorem
                                                                donec
                                                                massa. Eget
                                                                nulla
                                                                facilisi etiam dignissim diam quis enim lobortis
                                                                condimentum
                                                                lacinia
                                                                quis.
                                                            </p>
                                                        </div>
                                                        <div class="jobs3-top-3">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <h4>2019-2023</h4>
                                                                <h3><span>Software engineer at Intel</span></h3>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum
                                                                        lectus mauris
                                                                        ultrices
                                                                        eros
                                                                        in. Lobortis elementum nibh tellus molestie
                                                                        nunc.
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum
                                                                        lectus mauris
                                                                        ultrices
                                                                        eros
                                                                        in. Lobortis elementum nibh tellus molestie
                                                                        nunc.
                                                                    </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="jobs3-top-3">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <h4>2019-2023</h4>
                                                                <h3><span>Software engineer at Intel</span></h3>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum
                                                                        lectus mauris
                                                                        ultrices
                                                                        eros
                                                                        in. Lobortis elementum nibh tellus molestie
                                                                        nunc.
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum
                                                                        lectus mauris
                                                                        ultrices
                                                                        eros
                                                                        in. Lobortis elementum nibh tellus molestie
                                                                        nunc.
                                                                    </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="jobs3-top-3">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <h4>2019-2023</h4>
                                                                <h3><span>Software engineer at Intel</span></h3>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum
                                                                        lectus mauris
                                                                        ultrices
                                                                        eros
                                                                        in. Lobortis elementum nibh tellus molestie
                                                                        nunc.
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p>Pharetra convallis posuere morbi leo. Vestibulum
                                                                        lectus mauris
                                                                        ultrices
                                                                        eros
                                                                        in. Lobortis elementum nibh tellus molestie
                                                                        nunc.
                                                                    </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="jobs3-edu">
                                                            <h3>Education</h3>
                                                            <p>Pharetra convallis posuere morbi leo. Vestibulum lectus
                                                                mauris ultrices
                                                                eros
                                                                in.
                                                                Lobortis elementum nibh tellus molestie nunc.</p>
                                                            <div class="mt-3">
                                                                <div class="d-flex align-items-center gap-5">
                                                                    <h4>MsC</h4>
                                                                    <p>Masters degree in Management</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-5">
                                                                    <h4>MsC</h4>
                                                                    <p>Masters degree in Management</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="jobs3-edu">
                                                            <h3>Supportive documents</h3>
                                                            <div class="mt-3">
                                                                <div class="d-flex align-items-center gap-3">
                                                                    <h4><i class="fa-solid fa-paperclip"></i></h4>
                                                                    <p>Document 1 - Attachment</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-3">
                                                                    <h4><i class="fa-solid fa-paperclip"></i></h4>
                                                                    <p>Document 2 - Attachment</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="jobs3-edu">
                                                            <h3>Portfolio &amp; work history</h3>
                                                            <div class="mt-3">
                                                                <div class="d-flex align-items-center gap-3">
                                                                    <h4><i class="fa-solid fa-paperclip"></i></h4>
                                                                    <p>www.yourlinkhere.com</p>
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
                            <div class="profile-right-box">
                                <div class="profile-right-box-upper">
                                    <h2>
                                        Education
                                    </h2>
                                    <ul class="add-btns">
                                        <li>
                                            <a type="button" data-bs-toggle="modal" data-bs-target="#add_Education"><i
                                                    class="fas fa-plus-circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a type="button" data-bs-toggle="modal" data-bs-target="#educationmodal"><i
                                                    class="fa-light fa-pen"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="proj-man-sec">
                                    <li>
                                        <div class="proj-man">
                                            <div>
                                                <div class="img"></div>
                                                <div>
                                                    <h6>Business Administration</h6>
                                                    <h2>University Name</h2>
                                                    <h6>2015 - 2021</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="proj-man">
                                            <div>
                                                <div class="img"></div>
                                                <div>
                                                    <h6>Computer Sciences</h6>
                                                    <h2>College Name</h2>
                                                    <h6>2015 - 2021</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="profile-right-box">
                                <div class="profile-right-box-upper">
                                    <h2>
                                        Skills
                                    </h2>
                                    <ul class="add-btns">
                                        <li>
                                            <i class="fas fa-plus-circle"></i>
                                        </li>
                                        <li>
                                            <a type="button" data-bs-toggle="modal" data-bs-target="#skillsmodal"><i
                                                    class="fa-light fa-pen"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="ul-skills">
                                    <li>
                                        <h6>Project manager</h6>
                                    </li>
                                    <li>
                                        <h6>Sales Support</h6>
                                    </li>
                                    <li>
                                        <h6>IT Specialist</h6>
                                    </li>
                                    <li>
                                        <h6>Team Lead</h6>
                                    </li>
                                    <li>
                                        <h6>Sales Support</h6>
                                    </li>
                                    <li>
                                        <h6>Sales Support</h6>
                                    </li>
                                    <li>
                                        <h6>Team Lead</h6>
                                    </li>
                                    <li>
                                        <h6>Sales Support</h6>
                                    </li>
                                    <li>
                                        <h6>Team Lead</h6>
                                    </li>
                                    <li>
                                        <h6>Project manager</h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="upload-vid-sec">
                                <div class="row">
                                    <div class="col-12 col-lg-5">
                                        <div class="upload-box">
                                            <h2>Supportive Documents</h2>
                                            <input type="file" id="vid">
                                            <label for="vid">
                                                <i class="fas fa-upload"></i>
                                                upload your video
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7">
                                        <div class="portfolio">
                                            <h2>Portfolio</h2>
                                            <ul class="ul-portfolio">
                                                <li>
                                                    <h6>link #1</h6>
                                                    <ul>
                                                        <li>
                                                            <input type="text">
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-check-circle"></i>
                                                        </li>
                                                        <li>
                                                            <a type="button" data-bs-toggle="modal"
                                                                data-bs-target="#skillsmodal"><i
                                                                    class="fa-light fa-pen"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h6>link #2</h6>
                                                    <ul>
                                                        <li>
                                                            <input type="text">
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-check-circle"></i>
                                                        </li>
                                                        <li>
                                                            <a type="button" data-bs-toggle="modal"
                                                                data-bs-target="#skillsmodal"><i
                                                                    class="fa-light fa-pen"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
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