<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_marca')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_marca),array('view','id'=>$data->id_marca)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marca_nome')); ?>:</b>
	<?php echo CHtml::encode($data->marca_nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_cadastro_marca')); ?>:</b>
    <?php echo date("d/m/Y", strtotime($data->data_cadastro_marca)); ?>

	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_usuario_marca')); ?>:</b>
    <?php echo CHtml::encode(Usuario::model()->findByPK($data->fk_usuario_marca)->nome);?>

    <br>




    <hr>


</div>