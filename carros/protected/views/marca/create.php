<?php
$this->breadcrumbs=array(
	'Marcas'=>array('index'),
	'Cadastrar',
);

$this->menu=array(
	array('label'=>'Listar Marcas','url'=>array('index')),
	array('label'=>'Administrar Marcas','url'=>array('admin')),
);
?>

<h1>Cadastrar Marca</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>