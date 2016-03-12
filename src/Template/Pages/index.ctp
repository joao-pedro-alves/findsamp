<div id="pages-index">
	<!-- Motd -->
	<section class="motd-wrap">
		<div class="wrap">
			<?= $this->Form->create() ?>
			<h1>ADICIONAR SERVIDOR</h1>
			<div class="form-wrap">
				<?= $this->Form->input('ip', [
					'class' => 'input ip-input',
					'label' => false,
					'placeholder' => 'Endereço de IP',
					'templates' => [
						'inputContainer' => '{{content}}'
					]
				]) ?>
				<?= $this->Form->input('port', [
					'class' => 'input port-input',
					'label' => false,
					'placeholder' => 'Porta',
					'templates' => [
						'inputContainer' => '{{content}}'
					]
				]) ?>
			</div>
			<button class="default-btn">PROCURAR</button>
			<div class="message-wrap">
				<!-- <span class="warning"><i class="fa fa-exclamation-circle"></i> Servidor adicionado com sucesso</span> -->
				<span class="success"><i class="fa fa-check-circle"></i> Servidor adicionado com sucesso</span>
			</div>
			<?= $this->Form->end() ?>
		</div>
	</section> <!-- Motd -->
</div>