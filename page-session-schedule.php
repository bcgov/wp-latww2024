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
            <div class="container-lg p-md-5 p-4 bg-light-subtle">
            
            <div class="d-none d-md-flex flex-column gap-2 gap-lg-3 flex-no-wrap pt-3 mb-5">
                <img src="https://learn.bcpublicservice.gov.bc.ca/latww/latww2024/img/values/integrity-round.png" height="90" width="90" style="max-width: 11vw; max-height: 11vw;" class="object-fit-contain rounded-circle shadow-sm">
                <img src="https://learn.bcpublicservice.gov.bc.ca/latww/latww2024/img/values/curiosity-round.png" height="90" width="90" style="max-width: 11vw; max-height: 11vw;" class="object-fit-contain rounded-circle shadow-sm">
                <img src="https://learn.bcpublicservice.gov.bc.ca/latww/latww2024/img/values/service-round.png" height="90" width="90" style="max-width: 11vw; max-height: 11vw;" class="object-fit-contain rounded-circle shadow-sm">
                <img src="https://learn.bcpublicservice.gov.bc.ca/latww/latww2024/img/values/passion-round.png" height="90" width="90" style="max-width: 11vw; max-height: 11vw;" class="object-fit-contain rounded-circle shadow-sm">
                <img src="https://learn.bcpublicservice.gov.bc.ca/latww/latww2024/img/values/teamwork-round.png" height="90" width="90" style="max-width: 11vw; max-height: 11vw;" class="object-fit-contain rounded-circle shadow-sm">
                <img src="https://learn.bcpublicservice.gov.bc.ca/latww/latww2024/img/values/accountability-round.png" height="90" width="90" style="max-width: 11vw; max-height: 11vw;" class="object-fit-contain rounded-circle shadow-sm">
                <img src="https://learn.bcpublicservice.gov.bc.ca/latww/latww2024/img/values/courage-round.png" height="90" width="90" style="max-width: 11vw; max-height: 11vw;" class="object-fit-contain rounded-circle shadow-sm">
            </div>
            </div>

        </div>
    </div>
<?php
endwhile; // End of the loop.

get_footer();
