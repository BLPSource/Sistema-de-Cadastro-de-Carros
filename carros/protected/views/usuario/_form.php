<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'usuario-form',
	'enableAjaxValidation'=>false,
	'enableClientValidation' => true,
)); ?>

	<p class="help-block">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->labelEx($model, 'perfil');
		echo $form->dropDownList($model, 'perfil', array(0=>'Funcionário', 1=>'Administrador'),array('class'=>'span5'));
	?>

	<?php echo $form->textFieldRow($model,'nome',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'senha',array('class'=>'span5','maxlength'=>200)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Cadastrar' : 'Salvar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
