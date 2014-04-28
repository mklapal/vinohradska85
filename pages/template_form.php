<h2>KONTAKTUJTE NÁS</h2>

    <form action="<?php echo URL; ?>/pages/function-email.php" method="POST">

    <div class="form-label">Vaše jméno</div>
    <div class="form-input"><input name="name" size="30" /></div>

    <div class="form-label">Váš telefon</div>
    <div class="form-input"><input name="phone" size="30" /></div>

    <div class="form-label">Emailová adresa</div>
    <div class="form-input"><input name="email" size="30" /></div>

    <div class="form-label">Text zprávy</div>
    <div class="form-input">
        <textarea name="text" rows="10" cols="40" ></textarea>
        <br>
    </div>
    
	<noscript><p>Vyplňte prosím antispamovou ochranu (vyplňte "nospam"): <input name="kontrola" size="6" /></p></noscript>
	<script type="text/javascript">
		document.write('<input type="hidden" name="kontrola" value="no' + 'spam" />');
	</script>

	<div class="form-label">&nbsp;</div>
    <div class="form-input"><input type="submit" value="odeslat" class="send" /></div>
    </form>
    
	<p>
		* Zpracování a nakládání s osobními údaji probíhá v souladu se zákonem 101/2000 Sb. na ochranu osobních dat. V případě odeslání formuláře nám dáváte automaticky souhlas k tomu, abychom Vaše osobní údaje dle zákona zpracovávali a používali jen ke komunikaci s Vámi. Tento souhlas můžete kdykoli písemně ukončit.
	</p>