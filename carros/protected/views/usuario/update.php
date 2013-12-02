<?php
$this->breadcrumbs=array(
	'Usuários'=>array('index'),
	$model->id_usuario=>array('view','id'=>$model->id_usuario),
	'Atualizar',
);

$this->menu=array(
	array('label'=>'Listar Usuários','url'=>array('index')),
	array('label'=>'Cadastrar Usuário','url'=>array('create')),
	array('label'=>'Ver Usuário','url'=>array('view','id'=>$model->id_usuario)),
	array('label'=>'Administrar Usuário','url'=>array('admin')),
);
?>

<h1>Atualizar Usuário <?php echo $model->id_usuario; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>