<h2 class="form-headline">Kontaktujte nás</h2>

    <form class="js-send">

<div class="form-left">

    <!-- action="<?php echo URL; ?>/pages/function-email.php" -->
    <div class="form-label">Vaše jméno</div>
    <div class="form-input">
        <input class="js-form-name js-hint-name js-hint" name="name" />
    </div>

    <div class="form-label">Váš telefon</div>
    <div class="form-input">
        <input class="js-form-phone js-hint-phone js-hint" name="phone" />
    </div>

    <div class="form-label">Vaše emailová adresa</div>
    <div class="form-input">
        <input class="js-form-email js-hint-email js-hint" name="email" />
    </div>

</div>
<div class="form-right">

    <div class="form-label">Text zprávy</div>
    <div class="form-input">
        <textarea class="js-form-text js-hint-text js-hint" name="text" rows="10" cols="40" ></textarea>
    </div>
    
    <noscript><p>Please write "nospam": <input class="js-form-check" name="form-check" size="6" /></p></noscript>
    <script type="text/javascript">
        document.write('<input type="hidden" class="js-form-check" name="form-check" value="no' + 'spam" />');
    </script>

    <input type="submit" value="ODESLAT" class="js-btn-send" />
</div>

    </form>

    <p class="js-sent js-info">
        Děkujeme za odeslání zprávy. Budeme Vás v nejbližší době kontaktovat.
    </p>

    <p class="js-error js-info">
        Chyba při odesílání. Prosím odešlete zprávu znovu nebo nás kontaktujte emailem či telefonicky.
    </p>