<h2>Contact us</h2>

    <form class="js-send">
    <!-- action="<?php echo URL; ?>/pages/function-email.php" -->
    <div class="form-label">Your name</div>
    <div class="form-input">
        <input class="js-form-name" name="name" size="30" />
    </div>
        <span class="js-hint-name js-hint">Please fill your name.</span>

    <div class="form-label">Your cellphone</div>
    <div class="form-input">
        <input class="js-form-phone" name="phone" size="30" />
    </div>
        <span class="js-hint-phone js-hint">Please fill your cellphone.</span>

    <div class="form-label">Your e-mail address</div>
    <div class="form-input">
        <input class="js-form-email" name="email" size="30" />
    </div>
        <span class="js-hint-email js-hint">Please fill valid email address.</span>

    <div class="form-label">Your message</div>
    <div class="form-input">
        <textarea class="js-form-text" name="text" rows="10" cols="40" ></textarea>
    </div>
        <span class="js-hint-text js-hint">Please here write your message.</span>
    
	<noscript><p>Please write "nospam": <input class="js-form-check" name="form-check" size="6" /></p></noscript>
	<script type="text/javascript">
		document.write('<input type="hidden" class="js-form-check" name="form-check" value="no' + 'spam" />');
	</script>

	<div class="form-label">&nbsp;</div>
    <div class="form-input"><input type="submit" value="Send" class="js-btn-send" /></div>
    </form>

    <p class="js-sent js-hint">
        Thank you for contacting us! We will contact you as soon as possible.
    </p>

    <p class="js-error js-hint">
        An error during sending. Please retry it again or contact us directly through email.
    </p>
