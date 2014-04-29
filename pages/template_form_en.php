<h2>Contact us</h2>

    <form class="js-send">

<div class="form-left">

    <!-- action="<?php echo URL; ?>/pages/function-email.php" -->
    <div class="form-label">Your name</div>
    <div class="form-input">
        <input class="js-form-name js-hint-name js-hint" name="name" />
    </div>

    <div class="form-label">Your cellphone</div>
    <div class="form-input">
        <input class="js-form-phone js-hint-phone js-hint" name="phone" />
    </div>

    <div class="form-label">Your e-mail address</div>
    <div class="form-input">
        <input class="js-form-email js-hint-email js-hint" name="email" />
    </div>

</div>
<div class="form-right">

    <div class="form-label">Your message</div>
    <div class="form-input">
        <textarea class="js-form-text js-hint-text js-hint" name="text" rows="10" cols="40" ></textarea>
    </div>
    
	<noscript><p>Please write "nospam": <input class="js-form-check" name="form-check" size="6" /></p></noscript>
	<script type="text/javascript">
		document.write('<input type="hidden" class="js-form-check" name="form-check" value="no' + 'spam" />');
	</script>

	<input type="submit" value="Send" class="js-btn-send" />
</div>

    </form>

    <p class="js-sent js-info">
        Thank you for contacting us! We will contact you as soon as possible.
    </p>

    <p class="js-error js-info">
        An error during sending. Please retry it again or contact us directly through email.
    </p>