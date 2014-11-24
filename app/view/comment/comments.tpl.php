<hr>

<?php if (is_array($comments)) : ?> 
<h3>Inlägg (<?=count($comments);?>)</h3> 
<div class='comments'> 
<?php foreach ($comments as $id => $comment) : ?> 

<div class="Rowcomment"> 
    <p class="Headercomment"><?="Användare: " . $comment['name'] . "&emsp;"?></p> 
    <p class="Contentcomment"><?=$comment['content']?></p> 
    <p class="ContentBelowcomment"><a href=""  title="Hemsida"><?=$comment['web']?></a> <?=$comment['mail']?></p>
    
  
     
    <form method=post> 
     
    <input type=hidden name="redirect" value="<?=$this->url->create($this->di->request->extractRoute())?>"> 
    <div class="Editcomment"> 
     <input type=hidden name="key" value="<?=$this->di->request->getCurrentUrl();?>"> 
    <input type='submit' name='doEdit' value='Ändra' onClick="this.form.action = '<?=$this->url->create('comment/edit'.'/'.$id)?>'"/> 
    <input type='submit' name='doDelete' value='Ta bort' onClick="this.form.action = '<?=$this->url->create('comment/delete'.'/'.$id)?>'"/> 
    </div> 
    </form> 
</div> 
    


<?php endforeach; ?> 
</div> 
<?php endif; ?> 

<?php 


?> 