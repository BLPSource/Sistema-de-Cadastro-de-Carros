<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>CHtml::encode(Yii::app()->name),
)); ?>
<br>
<a href="index.php?r=carro">Procure um carro</a><br>
<a href="index.php?r=carro/create">Cadastre seu carro</a>
<?php $this->endWidget();

?>
