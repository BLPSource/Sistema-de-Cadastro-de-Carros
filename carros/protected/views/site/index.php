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
<br><br><br>
<?php $this->endWidget();

?>
<div style="position:absolute; right:50px; top:80px;">
    <i>Modelagem de dados</i>
    <br>
    <?php echo CHtml::image('images/tables.png'); ?><br>
    <a href="javascript:$('#dialog').show();void 0;">Ver SQL</a><br>
    <a href="https://github.com/BLPSource/Sistema-de-Cadastro-de-Carros" target="_new">Ver código-fonte</a>

</div>

<div id="dialog" style="display:none;">
    PostgreSQL
    <pre>
    CREATE TABLE usuario (
		id_usuario SERIAL,
		perfil integer, --(0=user|1=adm) 
		nome varchar(200),
		senha varchar(200),
		CONSTRAINT usuario_pk PRIMARY KEY(id_usuario)
	);

	CREATE TABLE logs (
		id_logs SERIAL,
		data_logs date DEFAULT ('now'::text)::date, --Data de acesso
		fk_usuario_logs integer REFERENCES usuario (id_usuario), --Acessado por
		CONSTRAINT logs_pk PRIMARY KEY(id_logs)
	);

	CREATE TABLE marca (
		id_marca SERIAL,
		marca_nome varchar(200),
		data_cadastro_marca date DEFAULT ('now'::text)::date, --Cadastrado em
		fk_usuario_marca integer REFERENCES usuario (id_usuario), --Cadastrado por
		CONSTRAINT marca_pk PRIMARY KEY(id_marca)
	);

	CREATE TABLE carro (
		id_carro SERIAL, --Id
		modelo varchar(200),
		ano integer,
		foto varchar(200),
		valor integer,
		num_parcelas_max integer, --Número de parcelas
		valor_total integer,
		data_cadastro_carro date DEFAULT ('now'::text)::date, --Cadastrado em
		fk_usuario_carro integer REFERENCES usuario (id_usuario), --Cadastrado por
		fk_marca_carro integer REFERENCES marca (id_marca),
		CONSTRAINT carro_pk PRIMARY KEY(id_carro)
	);
    </pre>
</div>
