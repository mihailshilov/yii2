<h1>Статья</h1>
<?php// $this->title = 'Статья' ?>

<?php $this->beginBlock('block1'); ?>
<h2>Второй заголовок</h2>
<?php $this->endblock(); ?>


<button class="btn btn-success" id="btn">Click me...</button>



<?php/// $this->RegisterJsFile('@web/js/scripts.js', ['depends' => 'app\assets\AppAsset']) ?>
<?php// $this->registerJs("$('.container').append('<p>show</p>');", \yii\web\View::POS_LOAD) ?>

<?php// $this->registerCss('.container{background:#f5f5f5;}') ?>

<?php 
$js = <<< JS
$('#btn').on('click', function() {
	$.ajax({
		url: 'index.php?r=post/index',
		data: {test: '123'},
		type: 'POST',
		success: function(res) {
			console.log(res);
		},
		error: function() {
			alert('Error!')
		}
	});
});
JS;

$this->registerJS($js);

 ?>