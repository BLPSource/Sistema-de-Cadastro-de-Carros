<?php
$this->breadcrumbs=array(
	'Usuários'=>array('index'),
	'Cadastrar',
);

$this->menu=array(
	array('label'=>'Listar Usuários','url'=>array('index')),
	array('label'=>'Administrar Usuários','url'=>array('admin')),
);
?>

<h1>Cadastrar Usuário</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>