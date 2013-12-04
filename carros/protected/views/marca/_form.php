<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'marca-form',
	'enableAjaxValidation'=>false,
	'enableClientValidation' => true,
)); ?>

	<p class="help-block">Campos com <span class="required">*</span> São obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'marca_nome',array('class'=>'span5','maxlength'=>200)); ?>

    <?php echo $form->hiddenField($model,'fk_usuario_marca',array('value'=>Yii::app()->session['userId'])); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Cadastrar' : 'Salvar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
