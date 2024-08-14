<?php get_header() ?>

<div id="content">
    <!-- Banner Section -->
    <div class="d-flex p-4 p-md-5 align-items-center" style="height: 18vh; min-height: 100px; background: linear-gradient(87deg, rgba(95,33,103,1) 9%, rgba(151, 27, 47,1) 50%, rgba(227,168,43,1) 91%);">
        <div class="container-lg py-4 py-md-5">
            <h1 class="text-white">From Values to Practice</h1>
            <h2 class="text-white h3">Learn @ Work Week 2024</h2>
            </div>
    </div>

    <!-- Main Content Section -->
    <div class="bg-light py-4">
        <div class="container-lg py-4">
            <div class="row">
                <!-- Main Content -->
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2>Event Overview</h2>
                    <p>Welcome to our week-long event! Here, you'll find all the information you need about our sessions, schedules, and more.</p>
                    <a href="#" class="btn btn-lg btn-primary">Register Now</a>

                    <!-- Event Description Section -->
                    <div class="border rounded shadow-sm p-3 mt-4">
                        <div class="d-flex">
                            <div class="me-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="text-success" style="width: 2rem; height: 2rem;">
                                    <path d="M64 32C64 14.3 49.7 0 32 0S0 14.3 0 32V64 368 480c0 17.7 14.3 32 32 32s32-14.3 32-32V352l64.3-16.1c41.1-10.3 84.6-5.5 122.5 13.4c44.2 22.1 95.5 24.8 141.7 7.4l34.7-13c12.5-4.7 20.8-16.6 20.8-30V66.1c0-23-24.2-38-44.8-27.7l-9.6 4.8c-46.3 23.2-100.8 23.2-147.1 0c-35.1-17.6-75.4-22-113.5-12.5L64 48V32z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-success">Start Here</h3>
                                <p>Explore our event sessions and find the ones that are right for you.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Section -->
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded">
                        <img src="https://example.com/banner.jpg" class="card-img-top object-fit-cover" alt="Event Banner" style="height: 12vh;">
                        <div class="card-body fs-6">
                            <h3 class="card-title fs-4">What's New?</h3>
                            <h4 class="fs-4"><a href="#" class="text-decoration-none">New Event Announcement</a></h4>
                            <p class="card-text">Discover the latest updates and announcements related to our event.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Schedule Section -->
    <div class="bg-secondary py-4">
        <div class="container-lg">
            <h3 class="text-white">Event Schedule</h3>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <h5>Monday</h5>
                    <div class="mb-2">
                        <h6><a href="#" class="text-decoration-none">Session Title 1</a></h6>
                        <p>9:00 AM - 10:00 AM</p>
                    </div>
                    <div>
                        <h6><a href="#" class="text-decoration-none">Session Title 2</a></h6>
                        <p>11:00 AM - 12:00 PM</p>
                    </div>
                </div>
                <!-- Repeat for other days -->
            </div>
        </div>
    </div>

    <!-- Accessibility Section -->
    <div class="bg-light py-4">
        <div class="container-lg">
            <h3>Accessibility Information</h3>
            <p>If you require any accommodations to participate in our event, please let us know. We offer ASL interpretation and CART services to ensure that everyone can fully participate.</p>
        </div>
    </div>
</div>

<?php get_footer() ?>
