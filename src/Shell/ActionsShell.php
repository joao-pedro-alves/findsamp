<?php
namespace App\Shell;

use Cake\Console\Shell;

class ActionsShell extends Shell
{
	public function initialize()
	{
		parent::initialize();
		$this->loadModel('Servers');
	}

	public function updateServers()
	{
		$this->out(date('[H:m:i] ') . 'Loading servers list');
		$query = $this->Servers
			->find('all')
			->contain('Stats');
		$this->out(date('[H:m:i] ') . 'Servers list loaded');

		$this->out(date('[H:m:i] ') . 'Updating servers...');
		foreach ($query as $server)
		{
			$this->Servers->updateInfos($server->id);
		}

		$this->out(date('[H:m:i] ') . "Update finished. Total {$query->count()} servers have been updated");
	}
}