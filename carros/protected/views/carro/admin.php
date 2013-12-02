<?php
if(Yii::app()->session['isAdmin']==false)
    exit;

$this->breadcrumbs=array(
	'Carros'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Carros','url'=>array('index')),
	array('label'=>'Cadastrar Carro','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('carro-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Carros</h1>

<?php echo CHtml::link('Busca avançada','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'carro-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_carro',
		'modelo',
		'ano',
		'valor',
		'num_parcelas_max',
		'valor_total',
        /*
		'data_cadastro_carro',
		'fk_usuario_carro',
		'fk_marca_carro',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
