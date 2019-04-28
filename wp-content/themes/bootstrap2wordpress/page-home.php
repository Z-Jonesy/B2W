<?php
/*
 Template Name: Home Page
 */

get_header(); ?>

<?php get_template_part( 'template-parts/content', 'hero' ); ?>
<?php get_template_part( 'template-parts/content', 'optin' ); ?>
<?php get_template_part( 'template-parts/content', 'boost' ); ?>
<?php get_template_part( 'template-parts/content', 'benefits' ); ?>
<?php get_template_part( 'template-parts/content', 'coursefeatures' ); ?>
<?php get_template_part( 'template-parts/content', 'projectfeatures' ); ?>
<?php get_template_part( 'template-parts/content', 'featurette' ); ?>
<?php get_template_part( 'template-parts/content', 'instructor' ); ?>
<?php get_template_part( 'template-parts/content', 'testimonials' ); ?>


<!-- MODAL -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i>
                    Subscribe to our mailing list
                </h4>
            </div> <!-- modal header -->

            <div class="modal-body">
                <p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of
                    our best-selling courses, <em> for free</em></p>
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <label class="sr-only" for="subscribe-name">Your first name</label>
                        <input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
                    </div> <!-- form group -->
                    <div class="form-group">
                        <label class="sr-only" for="subscribe-email">Your email</label>
                        <input type="text" class="form-control" id="subscribe-email" placeholder="Your email">
                    </div> <!-- form group -->

                    <input type="submit" class="btn btn-danger" value="subscribe">
                </form> <!-- form inline -->
                <hr>
                <p>
                    <small>By providing your email you consent to receiving occasional promotional emails &amp;
                        newsletters. <br>No sapm, just good stuff. We respect your privacy &amp; you may
                        unsubscribe at any time
                    </small>
                </p>

            </div> <!-- modal body-->

        </div> <!-- modal content-->
    </div> <!-- modal dialog -->
</div> <!-- modal -->

<?php get_footer(); ?>
