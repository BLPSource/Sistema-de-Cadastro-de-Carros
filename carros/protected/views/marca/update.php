<?php
$this->breadcrumbs=array(
	'Marcas'=>array('index'),
	$model->id_marca=>array('view','id'=>$model->id_marca),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Marcas','url'=>array('index')),
	array('label'=>'Cadastrar Marcas','url'=>array('create')),
	array('label'=>'Ver Marca','url'=>array('view','id'=>$model->id_marca)),
	array('label'=>'Administrar Marca','url'=>array('admin')),
);
?>

<h1>Editar Marca <?php echo $model->id_marca; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>