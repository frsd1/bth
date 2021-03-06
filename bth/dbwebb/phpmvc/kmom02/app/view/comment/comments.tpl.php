<section class="comments">

<?php $nr_comments = count($comments); ?>

<?php if (is_array($comments) && count($comments) != 0) : ?>
<h2><?=$nr_comments?> Kommentar<?php if($nr_comments != 1) echo "er"; ?></h2>

<?php foreach ($comments as $comment) : ?>
<div class="comment">
    <div class="avatar-container">
        <img class="avatar" src="<?=get_gravatar($comment["mail"]) ?>" />
    </div>
    <div class="comment-container">
		<p>Namn:&nbsp;<?=$comment["name"] ?><br />E-post:&nbsp;<?=$comment["mail"] ?><br />
        <span class="date">
            (<?=date('Y-m-d', $comment["timestamp"]); ?>)
        </span>
		</p>
        <p>Kommentar:<br />
            <?=$comment["content"] ?>
        </p>
        <p class="comment-links">
            <?php if ( $comment["web"] ) : ?>
            <a class="edit" href="<?=$comment["web"]?>" target="_blank">Hemsida</a> | 
            <?php endif; ?>
            <a class="edit" href="<?=$this->url->create('comment/edit')?>/<?=$comment["id"]?>">Redigera kommentar</a>
        </p>
        </div>
</div>


<?php endforeach; ?>
<?php else: ?>
<h2>Kommentera</h2>
<?php endif; ?>

</section> 
