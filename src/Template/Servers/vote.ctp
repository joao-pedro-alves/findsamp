<div id="servers-vote" class="page-margin">
	<div class="wrap">
		<div class="alert alert-danger">
			<span><i class="fa fa-close"></i> Nosso sistema detectou uma irregularidade e por isso seu voto não foi computado</span>
		</div>
		<div class="alert alert-success">
			<span><i class="fa fa-check-circle"></i> <b>Seu voto foi computado com sucesso!<br />Com seu voto o servidor ganhará muito mais poder de divulgação graças a você ;)</b></span>
		</div>
		<?= $this->Form->create() ?>
		<h2 class="action-title">VOTANDO NO SERVIDOR</h2>
		<h1 class="servername">Brasil - Cidade Virtual [TSSA] [0.3.7] [RPG]</h1>
		<div class="recaptcha-wrap">
			<div class="g-recaptcha" data-sitekey="6LeNqRoTAAAAACr5yV5RpumKLt3NLHyXIj8AsWuM"></div>
			<button class="default-btn" type="submit">VOTAR!</button>
		</div>
		<?= $this->Form->end() ?>
	</div>
</div>