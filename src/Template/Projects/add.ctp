<h2>Tambah project</h2>
<?php
echo $this->Form->create($project);
echo $this->Form->control('title');
echo $this->Form->control('body', ['rows' => '3']);
echo $this->Form->button(__('Save Article'));
echo $this->Form->end();
?>
