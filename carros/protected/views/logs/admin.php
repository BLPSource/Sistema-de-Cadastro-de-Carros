<?php
$this->breadcrumbs=array(
	'Logs'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Logs','url'=>array('index')),

);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('logs-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Logs</h1>

<?php echo CHtml::link('Busca Avançada','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'logs-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_logs',
		'data_logs',
		'fk_usuario_logs',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
