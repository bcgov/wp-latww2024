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

    $start = get_post_meta(get_the_ID(), 'startTime', TRUE);
    $end = get_post_meta(get_the_ID(), 'endTime', TRUE);
    $dayOfWeek = get_post_meta(get_the_ID(), 'dayOfWeek', TRUE);
    $shortDesc = get_post_meta(get_the_ID(), 'shortDesc', TRUE);
    $abstract = get_post_meta(get_the_ID(), 'abstract', TRUE);
    $platform = get_post_meta(get_the_ID(), 'platform', TRUE);
    $registrationLink = get_post_meta(get_the_ID(), 'registrationLink', TRUE);
    $speakerOne = get_post_meta(get_the_ID(), 'speakerOne', TRUE);
    $speakerOneTitle = get_post_meta(get_the_ID(), 'speakerOneTitle', TRUE);
    $speakerOneImg = get_post_meta(get_the_ID(), 'speakerOneImg', TRUE);
    $slideDeck = get_post_meta(get_the_ID(), 'slideDeck', TRUE);
    $workshopFiles = get_post_meta(get_the_ID(), 'workshopFiles', TRUE);
?>


    <div id="content">
        <div class="d-flex p-4 p-md-5 align-items-center bg-gov-blue bg-gradient" style="min-height: 100px;">
            <div class="container-lg">
                <h1 class="text-white title"><?php the_title() ?></h1>
                <h2 class="text-white h3"><?= $dayOfWeek ?> | <?= $start ?> to <?= $end ?></h2>
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
                            <div class="d-lg-flex gap-5">
                                <!-- Session Description -->
                                <div class="flex-grow-1">
                                    <h2>About the session</h2>
                                    <!-- full abstract -->
                                    <p><?= the_content() ?></p>
                                    <?php if (!empty($registrationLink)): ?>
                                        <?php $tt = get_the_title() ?>
                                        <a href="#<?= $registrationLink ?>" class="btn btn-primary">Register: <?= mb_strimwidth($tt, 0, 45, '...') ?></a>
                                    <?php else: ?>
                                        <div class="alert alert-warning">Not open for registration yet.</div>
                                    <?php endif ?>
                                    <p class="fs-6 mt-3">
                                        <span class="icon-svg baseline-svg">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                                            </svg>
                                        </span>Learn how to <a href="/latww2024/how-to-register/">import the event details to your Outlook calendar</a> from the learning system.
                                    </p>
                                </div>
                                <div class="flex-shrink-0 mt-3 mt-lg-0">
                                    <div class="card bg-dark-subtle mb-4">
                                        <div class="card-body">
                                            <h3 class="card-title">Session at a glance</h3>
                                            <ul class="list-unstyled mb-0">
                                                <li><strong>Date:</strong> <?= $dayOfWeek ?></li>
                                                <li><strong>Start time:</strong> <?= $start ?></li>
                                                <li><strong>End time:</strong> <?= $end ?></li>
                                                <li><strong>Platform:</strong> <?= $platform ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h4>Session Materials</h4>
                                    <?php if ($slideDeck || $workshopFiles): ?>
                                        <?php if ($slideDeck): ?>
                                            <p><a href="<?= $slideDeck ?>" class="btn btn-secondary">Download Slide Deck</a></p>
                                        <?php endif ?>
                                        <?php if ($workshopFiles): ?>
                                            <p><a href="<?= $workshopFiles ?>" class="btn btn-secondary">Download Workshop Files</a></p>
                                        <?php endif ?>
                                    <?php else: ?>
                                        <p>No materials posted yet.</p>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="my-4"><!-- Speakers Section -->
                                <?php if ($speakerOne || $speakerTwo || $speakerThree): ?>
                                    <h2>Speakers</h2>
                                    <div class="d-flex gap-5 mt-3 text-center">
                                        <?php if ($speakerOne): ?>
                                            <div class="flex-column">
                                                <img src="<?= $speakerOneImg ?>" height="200" width="200" class="rounded-circle shadow-sm mb-3" alt="<?= $speakerOne ?>" style="max-width: 15vw;">
                                                <h4><?= $speakerOne ?></h4>
                                                <p class="mt-1"><?= $speakerOneTitle ?></p>
                                            </div>
                                        <?php endif ?>
                                        <?php if ($speakerTwo): ?>
                                            <div class="flex-column">
                                                <img src="<?= $speakerTwoImg ?>" height="200" width="200" class="rounded-circle shadow-sm mb-3" alt="<?= $speakerTwo ?>" style="max-width: 15vw;">
                                                <h4><?= $speakerTwo ?></h4>
                                                <p class="mt-1"><?= $speakerTwoTitle ?></p>
                                            </div>
                                        <?php endif ?>
                                        <?php if ($speakerThree): ?>
                                            <div class="flex-column">
                                                <img src="<?= $speakerThreeImg ?>" height="200" width="200" class="rounded-circle shadow-sm mb-3" alt="<?= $speakerThree ?>" style="max-width: 15vw;">
                                                <h4><?= $speakerThree ?></h4>
                                                <p class="mt-1"><?= $speakerThreeTitle ?></p>
                                            </div>
                                        <?php endif ?>
                                    </div>
                                <?php endif ?>



                                <hr>
                                <h3>Accessibility</h3>
                                <p>All sessions include ASL interpretation and CART services.</p>
                                <p>If you need any accommodations to participate in L@WW, please <a href="https://sfs7.gov.bc.ca/affwebservices/public/saml2sso?SPID=urn:ca:bc:gov:customerportal:prod">submit an AskMyHR service request</a> using the category "Learning Centre".</p>
                                <h3>Session Recording</h3>
                                <p>This session will be recorded and will be available for viewing after Learn @ Work Week. The video will be posted here as well as listed in the LearningHUB.</p>
                                <!-- alternative -->
                                <!-- <p>This session will not be recorded due to copyrighted content.</p> -->
                                <!-- <div class="ratio ratio-16x9">
                                    <iframe width="590" height="315" src="https://www.youtube.com/embed/UvhY8Q-01Rg?si=1sGvFCsQZ_esQZ7i" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div> -->
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
