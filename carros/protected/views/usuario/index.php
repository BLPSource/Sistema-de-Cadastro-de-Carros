<?php
$this->breadcrumbs=array(
	'Usuários',
);

$this->menu=array(
	array('label'=>'Cadastrar Usuário','url'=>array('create')),
	array('label'=>'Administrar Usuário','url'=>array('admin')),
);
?>

<h1>Usuários</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
