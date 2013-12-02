<?php
$this->breadcrumbs=array(
	'Carros'=>array('index'),
	$model->id_carro=>array('view','id'=>$model->id_carro),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Carros','url'=>array('index')),
	array('label'=>'Cadastrar Carro','url'=>array('create')),
	array('label'=>'Ver Carro','url'=>array('view','id'=>$model->id_carro)),
	array('label'=>'Administrar Carros','url'=>array('admin'), 'visible'=>Yii::app()->session['isAdmin']),
);
?>

<h1>Editar Carro <?php echo $model->id_carro; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>