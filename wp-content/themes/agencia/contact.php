<?php
/**
 * Template Name: Contact page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<?php
	get_header();
?>

<div class="container">
    <div class="row margin-vert-30">
        <div class="col-md-9">
            <div class="headline">
                <h2>Контакти</h2>
            </div>
            <p>Може да се свържете с нас като ни пишете на имайла ни или позвънните на телефония ни номер.</p>
            <br>
            <!-- Contact Form -->

            <?php echo do_shortcode( '[contact-form-7 id="1234" title="Contact form 1"]' ); ?>
            
        </div>
        <!-- Side Column -->
        <div class="col-md-3">
            <!-- Recent Posts -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Контакти</h3>
                </div>
                <div class="panel-body">
                    <p>Може да се свържете с нас като ни пишете на имайла ни или позвънните на телефония ни номер.</p>
                    <ul class="list-unstyled">
                        <li>
                            <i class="fa-phone color-primary"></i>+353-44-55-66</li>
                        <li>
                            <i class="fa-envelope color-primary"></i>virtuoso@example.com</li>
                        <li>
                            <i class="fa-home color-primary"></i>http://www.virtuoso.com</li>
                    </ul>
                    <ul class="list-unstyled">
                        <li>
                            <strong class="color-primary">Monday-Friday:</strong>9am to 6pm</li>
                        <li>
                            <strong class="color-primary">Saturday:</strong>Closed</li>
                        <li>
                            <strong class="color-primary">Sunday:</strong>Closed</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
	get_footer();
?>