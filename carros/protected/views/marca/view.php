<?php
$this->breadcrumbs=array(
	'Marcas'=>array('index'),
	$model->id_marca,
);

$this->menu=array(
	array('label'=>'Listar Marcas','url'=>array('index')),
	array('label'=>'Cadastrar Marca','url'=>array('create')),
	array('label'=>'Editar Marca','url'=>array('update','id'=>$model->id_marca)),
	array('label'=>'Deletar Marca','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_marca),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Marcas','url'=>array('admin')),
);
?>

<h1>Marca #<?php echo $model->id_marca; ?></h1>

<?php
$model->fk_usuario_marca = Usuario::model()->findByPK($model->fk_usuario_marca)->nome;
$model->data_cadastro_marca = date("d/m/Y", strtotime($model->data_cadastro_marca));


 $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_marca',
		'marca_nome',
		'data_cadastro_marca',
		'fk_usuario_marca',
	),
)); ?>
