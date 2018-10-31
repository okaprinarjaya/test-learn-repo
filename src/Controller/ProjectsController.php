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
          $this->Flash->success(__('Your article has been saved'));
        } else {
          $this->Flash->error(__('Unable to add your article.'));
        }
      } else {
        return $this->redirect(['controller' => 'Pages', 'action' => 'display', 'home']);
      }
    }
}
