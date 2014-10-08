<hr>
<h2>cmmentarer</h2>

<?php if (is_array($comments)) : ?>
<div class='comments'>
<hr />
<?php foreach ($comments as $id => $comment) : 
extract($comment);
?>
<img src="<?= get_gravatar($mail,80) ?>">

<p><span class='nameComment'><?=$comment['name']?></span>
<span class='dateComment'><?php echo date("Y-m-d ",$comment['timestamp']);?></span></p>

<p class='commentContent'><?=$comment['content']?></p>

<form method='post'  style='padding-top:10px' class='right'>
    <input type='hidden' name="redirect" value="<?=$this->url->create('')?>">
    <input type='submit' name='doEdit' value='Edit Post' onClick="this.form.action = '<?=$this->url->create('comment/edit') .'/' . $id?>'" />
    <input type='submit' name='doRemove' value='Delete Post' onClick="this.form.action = '<?=$this->url->create('comment/delete') .'/' . $id?>'" />
</form>
<p style='padding-top:15px'><span class='mailComment clear'>Mail: <?=$comment['mail']?></span>&#124;&#124;<span class='webComment'>Webb: <?=$comment['web']?></span></p>


<hr />
<?php endforeach; ?>
</div>
<?php endif; ?> 
