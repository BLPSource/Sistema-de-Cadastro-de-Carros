<?php
$this->breadcrumbs=array(
	'Carros'=>array('index'),
	'Cadastrar',
);

$this->menu=array(
	array('label'=>'Listar Carros','url'=>array('index')),
	array('label'=>'Administrar Carros','url'=>array('admin'), 'visible'=>Yii::app()->session['isAdmin']),
);
?>

<h1>Cadastrar Carro</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>