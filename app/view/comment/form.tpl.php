<div class='comment-form'> 
    <form method=post> 
        <input type=hidden name="redirect" value="<?=$this->url->create($this->di->request->extractRoute())?>"> 
        <fieldset> 
        <legend>Skriv en ny kommentar</legend> 
        <p><label><textarea name='content' placeholder="Kommentar"><?=$content?></textarea></label></p> 
        <p><label><input type='text' name='name' placeholder="Ditt namn..." value='<?=$name?>'/></label></p> 
        <p><label><input type='text' name='web' placeholder="Din hemsida.." value='<?=$web?>'/></label></p> 
        <p><label><input type='text' name='mail' placeholder="Din email..." value='<?=$mail?>'/></label></p> 
        <p class=buttons> 
             <input type=hidden name="key" value="<?=$this->di->request->getCurrentUrl();?>"> 
            <input type='submit' name='doCreate' value='Skicka' onClick="this.form.action = '<?="comment/add";?>'"/> 
            <input type='reset' value='Återställ'/> 
            <input type='submit' name='doRemoveAll' value='Ta bort alla' onClick="this.form.action = '<?=$this->url->create('comment/remove-all')?>'"/> 
        </p> 
        <output><?=$output?></output> 
        </fieldset> 
    </form> 
</div> 
