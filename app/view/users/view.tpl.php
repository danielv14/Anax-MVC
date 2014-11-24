<h1>Användare</h1>

<p><span class='bold'>ID:</span> <?=$user->id?></p>
<p><span class='bold'>Acronym:</span> <?=$user->acronym?></p>
<p><span class='bold'>Namn:</span> <?=$user->name?></p>
<p><span class='bold'>Mail adress:</span> <?=$user->email?></p>
<p><span class='bold'>Användaren skapades:</span> <?=$user->created?></p>
<?php if (isset($user->updated)) : ?> 
<p><span class='bold'>Senast uppdaterad:</span> <?=$user->updated?></p>
<?php endif; ?>
<?php if (isset($user->deleted)) : ?> 
<p><span class='bold'>Kontot raderades:</span> <?=$user->deleted?></p>
<?php endif; ?>
<?php if (isset($user->active)) : ?> 
<p><span class='bold'>Kontot har varit aktivt sen:</span> <?=$user->active?></p>
<?php endif; ?>

