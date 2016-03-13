<div id="pages-index">
	<!-- Motd -->
	<section class="motd-wrap">
		<div class="wrap">
			<?= $this->Form->create() ?>
			<h2>ADICIONAR SERVIDOR</h2>
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
	<!-- Search filters -->
	<section class="search-filters">
		<div class="wrap">
			<h2>Buscar servidores</h2>	
			<?= $this->Form->create() ?>
			<div class="form-group">
				<div class="column">
					<?= $this->Form->input('keywords', [
						'label' => 'Palavra',
						'placeholder' => 'Buscará hostname e gamemode'
					]) ?>
				</div>
				<div class="column">
					<?= $this->Form->input('language', [
						'label' => 'Linguagem / Idioma',
						'placeholder' => 'PT-BR, Portugues, Brasil, etc...'
					]) ?>
				</div>
			</div>
			<div class="filter-online form-group">
				<div class="column">
					<span class="form-title">Players online</span>
					<?= $this->Form->inputs([
						'players_min' => ['label' => 'Min'],
						'players_max' => ['label' => 'Max']	
					],[
						'legend' => false
					]) ?>
				</div>
				<div class="column radio-box">
					<span class="form-title">Ordenar resultados</span>
					<?= $this->Form->radio('result_order', [
						['value' => 'vote', 'text' => 'Votos (servidores mais ativos)', 'checked' => 'checked'],
						['value' => 'online', 'text' => 'Jogadores online'],
						['value' => 'average', 'text' => 'Média de jogadores'],
						['valie' => 'random', 'text' => 'Aleatoriamente']
					]) ?>
				</div>
				<div class="column radio-box">
					<span class="form-title">Extra</span>
					<label><?= $this->Form->checkbox('disable_noplayers', ['hiddenField' => false]) ?> Remover servidores sem jogadores</label>
				</div>
			</div>
			<div class="form-group">
				<button class="default-btn">PESQUISAR</button>
			</div>
			<?= $this->Form->end() ?>
		</div>
	</section> <!-- Search filters -->
</div>