<h1><?=$title?></h1>

<table style=' text-align: left;'>

<tr>
    <th><?='Id'?></th>
    <th><?='Acronym'?></th>
    <th><?='Name'?></th>
    <th><?='Email'?></th>
    <th><?='Active'?></th>
    <th><?='Trashed'?></th>
</tr> 

<?php foreach ($users as $user) : ?>
<tr>
    <td><a href='id/<?=$user->id?>'><?=$user->id?></a></td>
    <td><?=$user->acronym?></td>
    <td><?=$user->name?></td>
    <td><?=$user->email?></td>
    <td><?=isset($user->active) ? '<i class="fa fa-check-square-o"></i>' : '<i class="fa fa-square-o"></i>'?></td>
    <td><?=isset($user->deleted) ? '<i class="fa fa-check-square-o"></i>' : '<i class="fa fa-square-o"></i>'?></td>
    <div class="btn-group" role="group" aria-label="...">
    <td><a href="<?=$this->url->create('users/soft-delete/' . $user->id) ?>"><i class="fa fa-trash"></i> trash</a></td>
    <td><a href="<?=$this->url->create('users/soft-undelete/' . $user->id) ?>"><i class="fa fa-undo"></i> untrash</a></td>
    <td><a href="<?=$this->url->create('users/delete/' . $user->id) ?>"><i class="fa fa-times"></i> remove</a></td>
    <td><a href="<?=$this->url->create('users/activate/' . $user->id) ?>"><i class="fa fa-plus"></i> activate</a></td>
	<td><a href="<?=$this->url->create('users/deactivate/' . $user->id) ?>"><i class="fa fa-power-off"></i> deactivate</a></td>
    <td><a href="<?=$this->url->create('users/update/' . $user->id) ?>"><i class="fa fa-cogs"></i> update</a></td>
    </
</tr> 
<?php endforeach; ?>

</table>



