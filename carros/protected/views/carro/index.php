<?php
$this->breadcrumbs=array(
	'Carros',
);

$this->menu=array(
	array('label'=>'Cadastrar Carro','url'=>array('create')),
	array('label'=>'Administrar Carros','url'=>array('admin'), 'visible'=>Yii::app()->session['isAdmin']),
);
?>

<h1>Carros</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
