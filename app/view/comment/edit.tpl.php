
<div class='comment-form'>  
    <form method=post>  
        <fieldset>  
        <legend>Ändra en Kommentar</legend>  
        <p><label>Kommentar:<br/><textarea name='content'><?=$content?></textarea></label></p>  
        <p><label>Namn:<br/><input type='text' name='name' value='<?=$name?>'/></label></p>  
        <p><label>Hemsida:<br/><input type='text' name='web' value='<?=$web?>'/></label></p>  
        <p><label>Email:<br/><input type='text' name='mail' value='<?=$mail?>'/></label></p>  
        <p class=buttons>  
          <input type='hidden' name="redirect" value="<?=$this->url->create($redirect)?>">  
           <input type=hidden name="key" value="<?=$key?>"> 
            <input type='submit' name='saveEdit' value='Spara' onClick="this.form.action = '<?=$this->url->create('comment/savecomment'.'/'.$id)?>'" />  
            <input type='submit' name='doCancel' value='Cancel' onClick="this.form.action = ''"/>  
        </p>  
        </fieldset>  
    </form>  
</div>  