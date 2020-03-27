<?php
?>

<section class="contact-form">
	<div class="row">
<!--		<div class="columns small-12 medium-6">-->
<!--			<div class="contact-information">-->
<!--                <div class="contact-item">-->
<!--                    <img src="http://om.test/wp-content/uploads/2019/10/Epilepsy-treatment.svg" />-->
<!--                    <div class="wp-icon-wrapper"><span class="dashicons dashicons-phone"></span></div>-->
<!--                    <p>1-249-997-1379</p>-->
<!--                </div>-->
<!--                <div class="contact-item">-->
<!--                    <img src="http://om.test/wp-content/uploads/2019/10/29-scientist.svg" />-->
<!--                    <div class="wp-icon-wrapper"><span class="dashicons dashicons-email-alt"></span></div>-->
<!--                    <p>support@om-pacific.com</p>-->
<!--                </div>-->
<!--			</div>-->
<!--		</div>-->
        <div class="columns small-12 medium-6 email-icon-column">

            <img src="<?php echo OM_UPLOADS_DIR . '/icons/mail-dark.svg'; ?>" alt="Online CBD Store Contact Us" />
        </div>
		<div class="columns small-12 medium-6">
            <?php echo do_shortcode('[contact-form-7 id="87" title="Newsletter Form"]'); ?>
		</div>
	</div>
</section>