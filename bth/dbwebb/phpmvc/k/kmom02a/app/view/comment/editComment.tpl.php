<hr>
<?php if (is_array($comment)) : ?>
    <div class='comments'>
        <div class='comment-form'>
            <form method=post>
                <input type=hidden name="redirect" value="<?=$link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']?>">
                <input type=hidden name="timestamp" value="<?=$comment['timestamp']?>">
                <input type=hidden name="page" value="<?=$comment['page']?>">
                <fieldset>
                <legend>Redigera kommentaren</legend>
                <p><label>Name:<input type='text' name='name' value='<?=$comment['name']?>'/></label></p>
                <p><label>Email:<input type='text' name='mail' value='<?=$comment['mail']?>'/></label></p>
                <p><label>Homepage:<input type='text' name='web' value='<?=$comment['web']?>'/></label></p>
                <p><label>Comment:<br/><textarea name='content'><?=$comment['content']?></textarea></label></p>
                <p class=buttons>

		    <input type='submit' name='doCreate' value='ggKommentera' onClick="this.form.action = '<?=$this->url->create('comment/add')?>'"/>
                    <input type='submit' name='doEdit' value='Spara' onClick="this.form.action = '<?=$this->url->create('comment/edit/'.$comment['id'])?>'"/>
                    <input type='submit' name='doEdit' value='Spara' onClick="this.form.action = '<?=$this->url->create('comment/edit/'.$comment['id'])?>'"/>
                    <input type='reset' value='Ta bort'/>
                    <input type='submit' name='cancel' value='Avbryt' onClick="this.form.action = 'javascript:history.back();'"/>
                </p>
                </fieldset>
            </form>
        </div>
    </div>
<?php endif; ?>
