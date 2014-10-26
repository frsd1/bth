<!doctype html>
<html class='no-js' lang='<?=$lang?>'>
<head>
<meta charset='utf-8'/>
<title><?=$title . $title_append?></title>
<?php if(isset($favicon)): ?><link rel='icon' href='<?=$this->url->asset($favicon)?>'/><?php endif; ?>
<?php foreach($stylesheets as $stylesheet): ?>
<link rel='stylesheet' type='text/css' href='<?=$this->url->asset($stylesheet)?>'/>
<?php endforeach; ?>
<?php if(isset($style)): ?><style><?=$style?></style><?php endif; ?>
<script src='<?=$this->url->asset($modernizr)?>'></script>
</head>

<body>

<div id='wrapper'>

<div id='header'>
<?php if(isset($header)) echo $header?>
<?php $this->views->render('header')?>
</div>

<?php if ($this->views->hasContent('navbar')) : ?>
<div id='navbar'>
<?php $this->views->render('navbar')?>
</div>
<?php endif; ?>

<?php if($this->views->hasContent('flash')) : ?>
<div id='wrap-flash'>
    <div id='flash'><?php $this->views->render('flash')?></div>
</div>
<?php endif; ?>

<?php if($this->views->hasContent('featured-1', 'featured-2', 'featured-3')) : ?>
<div id='wrap-featured'>
    <div id='featured-1'><?php $this->views->render('featured-1')?></div>
    <div id='featured-2'><?php $this->views->render('featured-2')?></div>
    <div id='featured-3'><?php $this->views->render('featured-3')?></div>
</div>
<?php endif; ?>

<?php if($this->views->hasContent('main')) : ?>
<div id='wrap-main'>
    <div id='main'><?php $this->views->render('main')?></div>
    <div id='sidebar'><?php $this->views->render('sidebar')?></div>
</div>
<?php endif; ?>

<?php if($this->views->hasContent('triptych-1', 'triptych-2', 'triptych-3')) : ?>
<div id='wrap-triptych'>
    <div id='triptych-1'><?php $this->views->render('triptych-1')?></div>
    <div id='triptych-2'><?php $this->views->render('triptych-2')?></div>
    <div id='triptych-3'><?php $this->views->render('triptych-3')?></div>
</div>
<?php endif; ?>

<?php if($this->views->hasContent('footer-col-1', 'footer-col-2', 'footer-col-3', 'footer-col-4')) : ?>
<div id='wrap-footer'>
    <div id='footer-col-1'><?php $this->views->render('footer-col-1')?></div>
    <div id='footer-col-2'><?php $this->views->render('footer-col-2')?></div>
    <div id='footer-col-3'><?php $this->views->render('footer-col-3')?></div>
    <div id='footer-col-4'><?php $this->views->render('footer-col-4')?></div>
</div>


<?php endif; ?>
<div id='footer'>
<?php if(isset($footer)) echo $footer?>
<?php $this->views->render('footer')?>
</div>


</div> 

<!---
<div>
<?php $this->views->render('comment-form') ?>

<?php $this->views->render('comments') ?>
</div>

--->




<?php if(isset($jquery)):?><script src='<?=$this->url->asset($jquery)?>'></script><?php endif; ?>

<script>
    $(".navbar ul li:nth-child(3)").click(function(ev) {
        ev.preventDefault();
        ev.stopPropagation();
        if($("#wrapper").hasClass("stripes")){
            $("#wrapper").removeClass("stripes");
        } else {
            $("#wrapper").addClass("stripes");
        }
    });
</script>

<?php if(isset($javascript_include)): foreach($javascript_include as $val): ?>
<script src='<?=$this->url->asset($val)?>'></script>
<?php endforeach; endif; ?>

<?php if(isset($google_analytics)): ?>
<script>
  var _gaq=[['_setAccount','<?=$google_analytics?>'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif; ?>

</body>
</html>