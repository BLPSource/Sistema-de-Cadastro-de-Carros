<?php
$this->breadcrumbs=array(
	'Logs',
);

$this->menu=array(
	array('label'=>'Administrar Logs','url'=>array('admin')),
);
?>

<h1>Logs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
