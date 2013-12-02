<?php
$this->breadcrumbs=array(
	'Usuários'=>array('index'),
	$model->id_usuario,
);

$this->menu=array(
	array('label'=>'Listar Usuários','url'=>array('index')),
	array('label'=>'Cadastrar Usuário','url'=>array('create')),
	array('label'=>'Atualizar Usuário','url'=>array('update','id'=>$model->id_usuario)),
	array('label'=>'Deletar Usuário','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_usuario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Usuário','url'=>array('admin')),
);
?>

<h1>Ver Usuário #<?php echo $model->id_usuario; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_usuario',
		'perfil',
		'nome',
		'senha',
	),
)); ?>
