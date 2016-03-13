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
					'autocomplete' => 'off',
					'required' => 'required',
					'templates' => [
						'inputContainer' => '{{content}}'
					]
				]) ?>
				<?= $this->Form->input('port', [
					'class' => 'input port-input',
					'label' => false,
					'placeholder' => 'Porta',
					'autocomplete' => 'off',
					'required' => 'required',
					'templates' => [
						'inputContainer' => '{{content}}'
					]
				]) ?>
			</div>
			<button class="default-btn" onclick="this.innerHTML = 'CARREGANDO...'">ADICIONAR</button>
			<div class="message-wrap">
				<?php if (isset($addServerError)): ?>
				<span class="warning"><i class="fa fa-exclamation-circle"></i> <?= $errorMessage ?></span>
				<?php endif ?>

				<?php if ($this->request->query('status') == 'success'): ?>
				<span class="success"><i class="fa fa-check-circle"></i> Servidor adicionado com sucesso! Link de votação: <?= $this->Html->link($this->Url->build('/', true) . 'voting/' . $this->request->query('returned_id')) ?>
				</span>
				<?php endif ?>
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
	<!-- Server list -->
	<section class="server-list">
		<div class="wrap">
			<h1>TOP 50 SERVIDORES</h1>	
			<table class="table servers-table table-striped">
				<thead>
					<tr>
						<th>Rank</th>
						<th>Votos</th>
						<th>Hostname</th>
						<th>IP:Port</th>
						<th>Jogadores</th>
						<th>Média</th>
						<th>Gamemode</th>
						<th>Linguagem</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach (range(0, 49) as $v): ?>
					<tr>
						<td><span class="rank-pos">1º</span></td>
						<td><span class="votes">412</span></td>
						<td><a href="#">Brasil - Cidade Virtual [TSSA] [0.3.7] [RPG]</a></td>
						<td><a href="#">198.50.187.245:7777</a></td>
						<td align="center"><b>44</b>/<small><i>200</i></small></td>
						<td align="center">33.92</td>
						<td>BRASIL [DX]MATA MATA</td>
						<td>Português</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</section> <!-- Server list -->
</div>