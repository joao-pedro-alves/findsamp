<?php
namespace App\Controller;

class PagesController extends AppController
{
    public function index()
    {
    	$this->loadModel('Servers');

        if ($this->request->is('post'))
        {
        	$entity = $this->Servers->newEntity($this->request->data, [
        		'validate' => 'add'
        	]);

        	if (($savedEntity = $this->Servers->save($entity))) {
                return $this->redirect([
                    'status' => 'success',
                    'returned_id' => $savedEntity->id
                ]);
            } else {
                $errors = $entity->errors();

                if (isset($errors['server']['status'])) {
                    $errorMessage = $errors['server']['status'];
                } else if (isset($errors['server']['registered'])) {
                    $errorMessage = $errors['server']['registered'];
                } else {
                    $errorMessage = 'Os dados informados são inválidos';
                }

                $this->set([
                    'addServerError' => true,
                    'errorMessage' => $errorMessage
                ]);
            }
        }
    }
}
