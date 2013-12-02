<?php
$this->breadcrumbs=array(
	'Logs'=>array('index'),
	$model->id_logs,
);

$this->menu=array(
	array('label'=>'Listar Logs','url'=>array('index')),
	array('label'=>'Deletar Log','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_logs),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Logs','url'=>array('admin')),
);
?>

<h1>View Logs #<?php echo $model->id_logs; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_logs',
		'data_logs',
		'fk_usuario_logs',
	),
)); ?>
