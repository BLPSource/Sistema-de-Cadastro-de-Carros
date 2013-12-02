<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id_carro',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'modelo',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'ano',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'foto',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'valor',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'num_parcelas_max',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'valor_total',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'data_cadastro_carro',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fk_usuario_carro',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fk_marca_carro',array('class'=>'span5')); ?>


	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
