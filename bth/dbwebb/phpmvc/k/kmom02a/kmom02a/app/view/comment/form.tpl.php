<div class='comment-form'>
    <form method=post>
        <input type=hidden name="redirect" value="<?=$this->url->create($page)?>">
        <fieldset>
            <?php if($edit) : ?>
            <legend>Redigera kommentar</legend>
            <?php else: ?>
            <legend>Skriv en kommentar</legend>
            <?php endif; ?>
            <div id="hidden">	    		
            <p>
                <label for="name">Namn:</label>
                <input type='text' name='name' id='name' value='<?=$name?>' />
            </p>
            <p>
                <label for="mail">E-post:</label>
                <input type='email' name='mail' id='mail' value='<?=$mail?>' />
            </p>
            <p>
                <label for="web">Webbsida:</label>
                <input type='url' name='web' id='web' value='<?=$web?>'/>
            </p>
	    </div>	
            <p>
                <label for="content">Kommentar:</label>
                <textarea name='content' id='content' rows='3' ><?=$content?></textarea>
            </p>
            <input type=hidden name="page" value="<?=$page?>">
            
            <p class=buttons>
                <?php if($edit) : ?>
                <input type=hidden name="id" id="id" value="<?=$id?>" />
                <input type='submit' name='doSave' id='doSave' value='Spara kommentar' onClick="this.form.action = '<?=$this->url->create('comment/edit')?>'"/>
                <input type='submit' class="remove" name='doRemove' value='Radera kommentar' onClick="this.form.action = '<?=$this->url->create('comment/remove-one')?>'"/>
                <?php else : ?>
                <input type='submit' name='doCreate' value='Skicka kommentar' onClick="this.form.action = '<?=$this->url->create('comment/add')?>'"/>
                <input type='submit' class="remove" name='doRemoveAll' value='Radera alla kommentarer' onClick="this.form.action = '<?=$this->url->create('comment/remove-all-from-page')?>'"/>
                <?php endif; ?>
            </p>
            <output><?=$output?></output>
        </fieldset>
    </form>
</div>
