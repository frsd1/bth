<div class='comment-form'>
    <form method=post>
        <input type=hidden name="redirect" value="<?=$link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']?>">
        <input type=hidden name="page" value="<?=$link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']?>">
        <fieldset>
        <legend>Lämna en kommentar</legend>
        <p><label>Namn:<input type='text' name='name' value='<?=$name?>'/></label></p>
        <p><label>Email:<input type='text' name='mail' value='<?=$mail?>'/></label></p>
        <p><label>Hemsida:<input type='text' name='web' value='<?=$web?>'/></label></p>
        <p><label>kommentar<br/><textarea name='content'><?=$content?></textarea></label></p>
        <p class=buttons>
            <input type='submit' name='doCreate' value='bobKommentera' onClick="this.form.action = '<?=$this->url->create('comment/add')?>'"/>
            <input type='reset' value='Rensa'/>
            <input type='submit' name='doRemoveAll' value='Ta bort alla' onClick="this.form.action = '<?=$this->url->create('comment/remove-all')?>'"/>
        </p>
        <output><?=$output?></output>
        </fieldset>
    </form>
</div>

