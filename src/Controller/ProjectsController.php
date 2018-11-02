<?php
namespace App\Controller;

use App\Controller\AppController;

class ProjectsController extends AppController
{
    public function add()
    {
      if ($this->request->is('post')) {
        $data = $this->request->getData();
        $project = $this->Projects->newEntity($data);

        if ($this->Projects->save($project)) {
          if (
            isset($data['project_notes']) &&
            isset($data['project_notes']['notes']) &&
            $data['project_notes']['notes'] !== ''
          ) {
            $this->loadModel('ProjectNotes');
            $project_notes_data = [
              'project_id' => $project->project_id,
              'notes' => $data['project_notes']['notes']
            ];
            $project_notes = $this->ProjectNotes->newEntity($project_notes_data);
            $this->ProjectNotes->save($project_notes);
          }

          if (
            isset($data['project_product_other']) &&
            isset($data['project_product_other']['product_name']) &&
            $data['project_product_other']['product_name'] !== ''
          ) {
            $this->loadModel('ProjectProductOther');
            $project_product_other_data = [
              'project_id' => $project->project_id,
              'product_name' => $data['project_product_other']['product_name']
            ];
            $project_product_other_ent = $this->ProjectProductOther->newEntity($project_product_other_data);
            $this->ProjectProductOther->save($project_product_other_ent);
          }
          $this->Flash->success(__('Your article has been saved'));
        } else {
          $this->Flash->error(__('Unable to add your article.'));
        }
      } else {
        return $this->redirect(['controller' => 'Pages', 'action' => 'display', 'home']);
      }
    }
}
