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
                <h2 class="text-white h3">Monday, October 7 | 10 am to 11 am</h2>
            </div>
        </div>
        <div class="bg-secondary-subtle">
            <div class="container-lg p-md-5 p-4 bg-light-subtle">
                <!-- Session Description -->
                <div class="row">
                    <div class="col-md-7">
                        <h2>About the session</h2>
                        <p>In 2023, BC Corrections won the Premier's Award for Organizational Excellence with their work on connecting and healing through culture. This work is a clear example of the positive outcomes the value of service aims for. It is also an example of the values of courage and curiosity needed to innovate as we put reconciliation into action. </p>
                        <p>Lisa will share how the BCPS corporate values guide decisions in this example of the complex work done by the BC Public Service. </p>
                        <a href="#" class="btn btn-primary">Register</a>
                    </div>
                    <div class="col-md-5">
                        <div class="card bg-dark-subtle">
                            <div class="card-body">
                                <h3 class="card-title">Session at a glance</h3>
                                <ul>
                                    <li>Date: Monday, October 7</li>
                                    <li>Start time: 10 am</li>
                                    <li>End time: 11 am</li>
                                    <li>Platform: MS Teams</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Speakers Section -->
            <div class="bg-dark-subtle">
                <div class="container-lg p-md-5 p-4">

                    <h2>Speakers</h2>
                    <div class="d-flex justify-content-around gap-3 mt-3">
                        <div class="flex-column">
                            <div class="bg-gov-purple bg-gradient rounded-circle mb-3" style="height: 11vw; width: 11vw;"></div>
                            <h4>Lisa Sweet</h4>
                            <p>ADM, Corrections Branch (PSSG)</p>
                        </div>
                        <div class="flex-column">
                            <div class="bg-gov-purple bg-gradient rounded-circle mb-3" style="height: 11vw; width: 11vw;"></div>
                            <h4>Lisa Sweet</h4>
                            <p>ADM, Corrections Branch (PSSG)</p>
                        </div>
                        <div class="flex-column">
                            <div class="bg-gov-purple bg-gradient rounded-circle mb-3" style="height: 11vw; width: 11vw;"></div>
                            <h4>Lisa Sweet</h4>
                            <p>ADM, Corrections Branch (PSSG)</p>
                        </div>
                        <!-- Add more speaker sections as needed -->
                    </div>

                </div>
            </div>

            <!-- Additional Resources -->
            <div class="container-lg p-md-5 p-4 bg-light-subtle">
                <h3>Additional Resources</h3>
                <p><a href="slide-deck.pdf" class="btn btn-secondary">Download Slide Deck</a></p>
                <p><a href="workshop-files.zip" class="btn btn-secondary">Download Workshop Files</a></p>
                <!-- <h3>Session Recording</h3>
                <div class="embed-responsive embed-responsive-16by9 mt-3"><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
                </div> -->
            </div>
        
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="entry-content">
                    <?php the_content() ?>
                </div><!-- .entry-content -->
            </article><!-- #post-<?php the_ID(); ?> -->
        </div>
    </div>
    </div>
<?php
endwhile; // End of the loop.
get_footer();
