<hr>
<?php if (is_array($comments)) : ?>

<div class='comments'>
<?php foreach ($comments as $number => $comment) : 
 extract($comment);
?>
<div id="comment">
<img src="<?= get_gravatar($mail) ?>">
<div id="poster">
<img src="<?= get_gravatar($mail) ?>">
<h4> <?=$comment['name']?> <em> <?=date('y-m-d h:i:s', $comment['timestamp'])?> </em> </h4>
<em>Email:  <?=$comment['mail']?></em> </br>
<em>Webbplats:  <?=$comment['web']?></em>
<form method=post>
<input type=hidden name="redirect" value="<?=$link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']?>">
<input type='submit' name='doEdit' value='Redigera' onClick="this.form.action = '<?=$this->url->create('comment/editForm/'.$comment['id'])?>'"/>
<input type='submit' name='doRemove' value='Ta bort' onClick="this.form.action = '<?=$this->url->create('comment/remove/'.$comment['id'])?>'"/>
</form>
</div>
<div id="content">
<p><?=$comment['content']?></p>
</div>
<!-- <p><?=dump($comment)?></p> -->
</div>
<?php endforeach; ?>
</div>
<?php endif; ?>
