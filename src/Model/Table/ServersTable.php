<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;
use Cake\Event\Event;
use App\Lib\SAMPQuery;
use Cake\ORM\TableRegistry;

class ServersTable extends Table
{
	public function initialize(array $config)
	{
		$this->hasMany('Stats', [
			'className' => 'Stats',
			'sort' => ['Stats.id' => 'desc']
		]);
	}

	public function updateInfos($id = 0)
	{
		$Stats = TableRegistry::get('Stats');

		$entity = $this
			->findById($id)
			->contain(['Stats'])
			->first();

		// Testing if server is online
		$tries = 0;
		while($tries < 3) {
			$samp = new SAMPQuery($entity->ip, $entity->port);

			if ($samp->isOnline()) {
				break;
			}

			$tries++;
		}

		// Server is actually online
		if ($tries < 3) {
			$infos = $samp->getRules() + $samp->getInfo();

			$statsEntity = $Stats->newEntity($infos + ['server_id' => $id]);

			$Stats->save($statsEntity);
		} else {
			// Server seems to be offline
			$entityClone = $entity->stats[0];
			
			$entityClone->id = 0;
			$entityClone->players = 0;
			$entityClone->status = 0;
			$entityClone->isNew(true);

			$Stats->save($entityClone);
		}
	}

	public function validationAdd(Validator $validator)
	{
		$validator
			->requirePresence('ip')
			->add('ip', [
				'min length' => [
					'rule' => ['minLength', 9]
				]
			])
			->requirePresence('port')
			->add('port', [
				'not blank' => [
					'rule' => 'notBlank'
				],
				'decimal' => [
					'rule' => 'decimal'
				]
			]);

		return $validator;
	}

	public function isServerActive($entity)
	{
		for ($tries=0; $tries < 3; $tries++) {
			$samp = new SAMPQuery($entity->ip, $entity->port);
			if ($samp->isOnline()) return true;
		}

		return false;
	}

	public function isServerRegistered($entity)
	{
		$query = $this
			->find()
			->where(['Servers.ip' => $entity->ip, 'Servers.port' => $entity->port]);

		return (((bool) $query->count() == 0));
	}

	public function buildRules(RulesChecker $rules)
	{
		$rules
			->add([$this, 'isServerActive'], 'status', [
				'errorField' => 'server',
				'message' => 'O servidor parece estar offline'
			])
			->add([$this, 'isServerRegistered'], 'registered', [
				'errorField' => 'server',
				'message' => 'Este servidor já está cadastrado ;)'
			]);

		return $rules;
	}

	public function afterSave($event, $entity, $options)
	{

	}
}