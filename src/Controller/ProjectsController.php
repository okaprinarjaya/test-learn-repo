<?php
namespace App\Controller;

use App\Controller\AppController;

class ProjectsController extends AppController
{
    public function add()
    {
        $project = $this->Projects->newEntity();
        if ($this->request->is('post')) {

            $data = array_merge(
              $this->request->getData(),
              ['project_id' => '3dabed27-f1e3-4730-b7ab-03cebea00005']
            );

            $project = $this->Projects->patchEntity($project, $data);
            if ($this->Projects->save($project)) {
                $this->Flash->success(__('Your article has been saved'));
            } else {
                $this->Flash->error(__('Unable to add your article.'));
                debug($project->getErrors());
            }

            debug($this->request->getData());
            debug($data);
        }
        $this->set('project', $project);
    }
}
