<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php 
        echo $this->Form->input('fullname', array('label' => 'Full Name'));
        echo $this->Form->input('phone');
        echo $this->Form->input('address', array('label' => 'Street Address'));
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        
        #echo $this->Form->input('role', array(
        #    'options' => array('admin' => 'Admin', 'author' => 'Author')
        #));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>