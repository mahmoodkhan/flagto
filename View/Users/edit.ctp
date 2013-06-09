<h1>Edit User Profile</h1>
<?php
    echo $this->Form->create('User');
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->input('fullname');
    echo $this->Form->input('phone');
   	echo $this->Form->input('address');
    echo $this->Form->end('Submit');