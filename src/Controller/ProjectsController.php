<?php
namespace App\Controller;

use App\Controller\AppController;

class ProjectsController extends AppController
{
    public function add()
    {
        $project = $this->Projects->newEntity();
        if ($this->request->is('post')) {

            $data = [
                'project_id' => 'ad10ef13-ff5e-42cf-9612-6118c3862833',
                'customer_name' => 'Oka Prinarjaya',
                'customer_phone' => '08174128301',
                'created' => '2018-10-15 13:00:00',
                'delivery_date' => '2018-10-20',
                'stitch_name' => 'Celana panjanng jeans'
            ];

            $project = $this->Projects->patchEntity($project, $data);
            if ($this->Projects->save($project)) {
                $this->Flash->success(__('Your article has been saved'));
            } else {
                $this->Flash->error(__('Unable to add your article.'));
            }

            debug($this->request->getData());
        }
        $this->set('project', $project);
    }
}
