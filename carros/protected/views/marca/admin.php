<?php
$this->breadcrumbs=array(
	'Marcas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Marcas','url'=>array('index')),
	array('label'=>'Cadastrar Marca','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('marca-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Marcas</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'marca-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_marca',
		'marca_nome',
		'fk_usuario_marca',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
