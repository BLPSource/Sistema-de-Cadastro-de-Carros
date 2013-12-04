<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_carro')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_carro),array('view','id'=>$data->id_carro)); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('fk_marca_carro')); ?>:</b>
    <?php #echo CHtml::encode($data->fk_marca_carro); ?>
    <?php echo CHtml::encode(Marca::model()->findByPK($data->fk_marca_carro)->marca_nome);?>
	<br>
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('modelo')); ?>:</b>
	<?php echo CHtml::encode($data->modelo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ano')); ?>:</b>
	<?php echo CHtml::encode($data->ano); ?>
	<br />

	<b><?php #echo CHtml::encode($data->getAttributeLabel('foto')); ?></b>
	<?php //echo CHtml::encode($data->foto); ?>
    <img src='images/carros/<?php echo $data->foto; ?>' width="250" height="250" style="border: solid 1px #ccc;padding:4px;margin-top:3px;margin-bottom:3px;">
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
    <?php echo Yii::app()->numberFormatter->formatCurrency($data->valor, 'R$ ');
	 #echo CHtml::encode($data->valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_parcelas_max')); ?>:</b>
	<?php echo CHtml::encode($data->num_parcelas_max); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_total')); ?>:</b>
    <?php echo Yii::app()->numberFormatter->formatCurrency($data->valor_total, 'R$ ');?>

    <br>
	<b><?php echo CHtml::encode($data->getAttributeLabel('data_cadastro_carro')); ?>:</b>
	<?php echo date("d/m/Y", strtotime($data->data_cadastro_carro)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_usuario_carro')); ?>:</b>
    <?php echo CHtml::encode(Usuario::model()->findByPK($data->fk_usuario_carro)->nome);?>
	<br />


<hr>
</div>