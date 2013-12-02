<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_logs')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_logs),array('view','id'=>$data->id_logs)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_logs')); ?>:</b>
    <?php echo date("d/m/Y", strtotime($data->data_logs)); ?>

    <br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_usuario_logs')); ?>:</b>
    <?php echo CHtml::encode(Usuario::model()->findByPK($data->fk_usuario_logs)->nome);?>
	<hr>


</div>