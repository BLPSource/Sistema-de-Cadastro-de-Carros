<?php
$this->breadcrumbs=array(
	'Carros'=>array('index'),
	$model->id_carro,
);

$this->menu=array(
	array('label'=>'Listar Carros','url'=>array('index')),
	array('label'=>'Cadastrar Carro','url'=>array('create')),
	array('label'=>'Atualizar Carro','url'=>array('update','id'=>$model->id_carro), 'visible'=>Yii::app()->session['isAdmin']),
	array('label'=>'Deletar Carro','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_carro),'confirm'=>'Confirma parar deletar este item?'), 'visible'=>Yii::app()->session['isAdmin']),
	array('label'=>'Administrar Carros','url'=>array('admin'), 'visible'=>Yii::app()->session['isAdmin']),
);
?>

<h1>Carro #<?php echo $model->id_carro; ?></h1>

<?php

$model->fk_usuario_carro = Usuario::model()->findByPK($model->fk_usuario_carro)->nome;
$model->fk_marca_carro = Marca::model()->findByPK($model->fk_marca_carro)->marca_nome;
$model->data_cadastro_carro = date("d/m/Y", strtotime($model->data_cadastro_carro));
$model->valor = Yii::app()->numberFormatter->formatCurrency($model->valor, 'R$ ');
$model->valor_total = Yii::app()->numberFormatter->formatCurrency($model->valor_total, 'R$ ');

$this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_carro',
		'fk_marca_carro',
		'modelo',
		'ano',
		'valor',
		'num_parcelas_max',
		'valor_total',
		'data_cadastro_carro',
		'fk_usuario_carro',
		
	),
)); ?>
