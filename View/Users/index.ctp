<h1>Users</h1>
<?php echo $this->Html->link(
    'Add User',
    array('controller' => 'users', 'action' => 'add')
); ?>
<table>
    <tr>
    	<th>Action</th>
    	<th>Id</th>
    	<th>Handle</th>
        <th>Username</th>
        <th>Full Name</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Created</th>
        <th>Modified</th>
    </tr>
     <!-- Here is where we loop through our $users array, printing out post info -->

    <?php foreach ($users as $user): ?>
    <tr>
    	<td>
            <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $user['User']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id'])); ?>
        </td>
        <td><?php echo $user['User']['id']; ?></td>
        <td><?php echo $user['User']['handle']; ?></td>
        <td>
            <?php echo $this->Html->link($user['User']['username'],
array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
        </td>
        <td><?php echo $user['User']['fullname']; ?></td>
        <td><?php echo $user['User']['phone']; ?></td>
        <td><?php echo $user['User']['address']; ?></td>
        <td><?php echo $user['User']['created']; ?></td>
        <td><?php echo $user['User']['modified']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>
        