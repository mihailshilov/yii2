<?php if(!empty($posts)): ?>
<div class="row">    
    <?php foreach ($posts as $post): ?>
        <div class="col-lg-4">
            <h2><a href='<?= \yii\helpers\Url::to(['post/view', 'id' => $post->id])?>'><?=$post->title;?></a></h2>
          <p><?=$post->excerpt;?></p>
        </div>
    <?php endforeach;?>
</div>
<div class="row">
    <?= yii\widgets\LinkPager::widget(['pagination' => $pages]); ?> 
</div>
    
<?php endif;?>

