<?php
/**
 * The template for displaying all single pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
get_header();
/* Start the Loop */
while (have_posts()) :
    the_post();
?>
    <div id="content">
        <div class="d-flex p-4 p-md-5 align-items-center bg-gov-blue bg-gradient" style="height: 12vh; min-height: 100px;">
            <div class="container-lg py-4 py-md-5">
                <h1 class="text-white title"><?php the_title() ?></h1>
            </div>
        </div>
        <div class="bg-secondary-subtle">
            <div class="container-lg py-md-5 py-4 ps-3 pe-4 pe-md-5 bg-light-subtle">
                <div class="d-flex justify-content-between gap-5">
                    <div class="d-none d-md-flex flex-column gap-3 flex-no-wrap flex-shrink-0 flex-grow-0">
                        <img src="https://learn.bcpublicservice.gov.bc.ca/latww/latww2024/img/values/integrity-round.png" height="90" width="90" style="max-width: 8vw; max-height: 8vw;" class="object-fit-contain rounded-circle shadow-sm">
                        <img src="https://learn.bcpublicservice.gov.bc.ca/latww/latww2024/img/values/curiosity-round.png" height="90" width="90" style="max-width: 8vw; max-height: 8vw;" class="object-fit-contain rounded-circle shadow-sm">
                        <img src="https://learn.bcpublicservice.gov.bc.ca/latww/latww2024/img/values/service-round.png" height="90" width="90" style="max-width: 8vw; max-height: 8vw;" class="object-fit-contain rounded-circle shadow-sm">
                        <img src="https://learn.bcpublicservice.gov.bc.ca/latww/latww2024/img/values/passion-round.png" height="90" width="90" style="max-width: 8vw; max-height: 8vw;" class="object-fit-contain rounded-circle shadow-sm">
                        <img src="https://learn.bcpublicservice.gov.bc.ca/latww/latww2024/img/values/teamwork-round.png" height="90" width="90" style="max-width: 8vw; max-height: 8vw;" class="object-fit-contain rounded-circle shadow-sm">
                        <img src="https://learn.bcpublicservice.gov.bc.ca/latww/latww2024/img/values/accountability-round.png" height="90" width="90" style="max-width: 8vw; max-height: 8vw;" class="object-fit-contain rounded-circle shadow-sm">
                        <img src="https://learn.bcpublicservice.gov.bc.ca/latww/latww2024/img/values/courage-round.png" height="90" width="90" style="max-width: 8vw; max-height: 8vw;" class="object-fit-contain rounded-circle shadow-sm">
                    </div>
                    <div class="flex-grow-1 d-flex gap-5">
                        <div class="flex-column">
                            <div id="schedule">
                                <h2 class="mb-2">Schedule</h2>
                                <p>Select a session to get more details about the event and register to attend. </p>
                                <p><strong>All times are shown for the Pacific Time Zone. </strong></p>
                                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5 mb-2">
                                    <!-- Monday -->
                                    <div class="col mb-4 mb-lg-1 px-1">
                                        <h3 class="card-title h4">Monday</h3>
                                        <h4 class="card-subtitle text-body-secondary mb-2 h5">October 7</h4>
                                        <div class="d-flex flex-column">
                                            <div class="card mb-2">
                                                <div class="card-body p-2">
                                                    <h5 class="card-title fs-5">
                                                        <a href="https://latww2024.virtuallearn.ca/index.php/monday/opening-and-keynote/" class="text-decoration-none stretched-link">Opening and Keynote</a>
                                                    </h5>
                                                    <p class="card-text fs-6">10&nbsp;am to 11&nbsp;am</p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body p-2">
                                                    <h5 class="card-title fs-5">
                                                        <a href="#" class="text-decoration-none stretched-link">'Speak up' culture in the BC Public Service</a>
                                                    </h5>
                                                    <p class="card-text fs-6">2&nbsp;pm to 3:30&nbsp;pm</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tuesday -->
                                    <div class="col mb-4 mb-lg-1 px-1">
                                        <h3 class="card-title h4">Tuesday</h3>
                                        <h4 class="card-subtitle text-body-secondary mb-2 h5">October 8</h4>
                                        <div class="d-flex flex-column">
                                            <div class="card mb-2">
                                                <div class="card-body p-2">
                                                    <h5 class="card-title fs-5">
                                                        <a href="#" class="text-decoration-none stretched-link">sessionTitle</a>
                                                    </h5>
                                                    <p class="card-text fs-6">startTime to endTime</p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body p-2">
                                                    <h5 class="card-title fs-5">
                                                        <a href="#" class="text-decoration-none stretched-link">sessionTitle</a>
                                                    </h5>
                                                    <p class="card-text fs-6">startTime to endTime</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Wednesday -->
                                    <div class="col mb-4 mb-lg-1 px-1">
                                        <h3 class="card-title h4">Wednesday</h3>
                                        <h4 class="card-subtitle text-body-secondary mb-2 h5">October 9</h4>
                                        <div class="d-flex flex-column">
                                            <div class="card mb-2">
                                                <div class="card-body p-2">
                                                    <h5 class="card-title fs-5">
                                                        <a href="#" class="text-decoration-none stretched-link">sessionTitle</a>
                                                    </h5>
                                                    <p class="card-text fs-6">startTime to endTime</p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body p-2">
                                                    <h5 class="card-title fs-5">
                                                        <a href="#" class="text-decoration-none stretched-link">sessionTitle</a>
                                                    </h5>
                                                    <p class="card-text fs-6">startTime to endTime</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Thursday -->
                                    <div class="col mb-4 mb-lg-1 px-1">
                                        <h3 class="card-title h4">Thursday</h3>
                                        <h4 class="card-subtitle text-body-secondary mb-2 h5">October 10</h4>
                                        <div class="d-flex flex-column">
                                            <div class="card mb-2">
                                                <div class="card-body p-2">
                                                    <h5 class="card-title fs-5">
                                                        <a href="#" class="text-decoration-none stretched-link">sessionTitle</a>
                                                    </h5>
                                                    <p class="card-text fs-6">startTime to endTime</p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body p-2">
                                                    <h5 class="card-title fs-5">
                                                        <a href="#" class="text-decoration-none stretched-link">sessionTitle</a>
                                                    </h5>
                                                    <p class="card-text fs-6">startTime to endTime</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friday -->
                                    <div class="col mb-4 mb-lg-1 px-1">
                                        <h3 class="card-title h4">Friday</h3>
                                        <h4 class="card-subtitle text-body-secondary mb-2 h5">October 11</h4>
                                        <div class="d-flex flex-column">
                                            <div class="card mb-2">
                                                <div class="card-body p-2">
                                                    <h5 class="card-title fs-5">
                                                        <a href="#" class="text-decoration-none stretched-link">sessionTitle</a>
                                                    </h5>
                                                    <p class="card-text fs-6">startTime to endTime</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="sessions" class="mt-5">
                                <h2>Sessions</h2>
                                <h3 class="text-bg-secondary rounded px-2 py-1 mt-4">Monday</h3>
                                <div class="row row-cols-1 row-cols-md-2">
                                    <div class="col">
                                        <h4>Opening and Keynote</h4>
                                        <h5 class="text-dark-emphasis">10 am to 11 am</h5>
                                        <p>Lisa Sweet, ADM with BC Corrections, will explore an inspiring and practical example of how the BCPS corporate values guide decisions and enable teams to achieve amazing results.</p>
                                        <!-- short description -->
                                        <a href="#" class="btn btn-primary">Register: Opening and Keynote</a>
                                    </div>
                                    <div class="col">
                                        <h4>'Speak up' culture in the BC Public Service</h4>
                                        <h5 class="text-dark-emphasis">10 am to 11 am</h5>
                                        <p>Lisa Sweet, ADM with BC Corrections, will explore an inspiring and practical example of how the BCPS corporate values guide decisions and enable teams to achieve amazing results.</p>
                                        <!-- short description -->
                                        <a href="#" class="btn btn-primary">Register: Opening and Keynote</a>
                                    </div>
                                </div>
                                <h3 class="text-bg-secondary rounded px-2 py-1 mt-4">Tuesday</h3>
                                <div class="row row-cols-1 row-cols-md-2">
                                    <div class="col">
                                        <h4>SessionTitle</h4>
                                        <h5 class="text-dark-emphasis">startTime to endTime</h5>
                                        <p>shortDesc</p>
                                        <!-- short description -->
                                        <a href="#" class="btn btn-primary">Register: sessionTitle</a>
                                    </div>
                                    <div class="col">
                                        <h4>SessionTitle</h4>
                                        <h5 class="text-dark-emphasis">startTime to endTime</h5>
                                        <p>shortDesc</p>
                                        <!-- short description -->
                                        <a href="#" class="btn btn-primary">Register: sessionTitle</a>
                                    </div>
                                </div>
                                <h3 class="text-bg-secondary rounded px-2 py-1 mt-4">Wednesday</h3>
                                <div class="row row-cols-1 row-cols-md-2">
                                    <div class="col">
                                        <h4>SessionTitle</h4>
                                        <h5 class="text-dark-emphasis">startTime to endTime</h5>
                                        <p>shortDesc</p>
                                        <!-- short description -->
                                        <a href="#" class="btn btn-primary">Register: sessionTitle</a>
                                    </div>
                                    <div class="col">
                                        <h4>SessionTitle</h4>
                                        <h5 class="text-dark-emphasis">startTime to endTime</h5>
                                        <p>shortDesc</p>
                                        <!-- short description -->
                                        <a href="#" class="btn btn-primary">Register: sessionTitle</a>
                                    </div>
                                </div>
                                <h3 class="text-bg-secondary rounded px-2 py-1 mt-4">Thursday</h3>
                                <div class="row row-cols-1 row-cols-md-2">
                                    <div class="col">
                                        <h4>SessionTitle</h4>
                                        <h5 class="text-dark-emphasis">startTime to endTime</h5>
                                        <p>shortDesc</p>
                                        <!-- short description -->
                                        <a href="#" class="btn btn-primary">Register: sessionTitle</a>
                                    </div>
                                    <div class="col">
                                        <h4>SessionTitle</h4>
                                        <h5 class="text-dark-emphasis">startTime to endTime</h5>
                                        <p>shortDesc</p>
                                        <!-- short description -->
                                        <a href="#" class="btn btn-primary">Register: sessionTitle</a>
                                    </div>
                                </div>
                                <h3 class="text-bg-secondary rounded px-2 py-1 mt-4">Friday</h3>
                                <div class="row row-cols-1 row-cols-md-2">
                                    <div class="col">
                                        <h4>SessionTitle</h4>
                                        <h5 class="text-dark-emphasis">startTime to endTime</h5>
                                        <p>shortDesc</p>
                                        <!-- short description -->
                                        <a href="#" class="btn btn-primary">Register: sessionTitle</a>
                                    </div>
                                    <div class="col">
                                        <h4>SessionTitle</h4>
                                        <h5 class="text-dark-emphasis">startTime to endTime</h5>
                                        <p>shortDesc</p>
                                        <!-- short description -->
                                        <a href="#" class="btn btn-primary">Register: sessionTitle</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
endwhile; // End of the loop.
get_footer();
