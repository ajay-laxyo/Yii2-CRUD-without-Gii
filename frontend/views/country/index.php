<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Countries</h1>
<div class="row">
	<div class="col-sm-1">
		<?= Html::a('Create', ['/country/create'], ['class'=>'btn btn-success grid-button']) ?>
	</div>
</div>
<div class="container">
	<table class="table table-striped">
    	<tr>
    		<th>ID</th>
    		<th>Code</th>
    		<th>Name</th>
    		<th>Population</th>
    		<th>Operation</th>
    	</tr>

<hr>
<ul>
<?php foreach ($countries as $country): ?>
    	<tr>
    		<td><?= Html::encode("{$country->id}") ?></td>
    		<td><?= Html::encode("{$country->code}") ?></td>
    		<td><?= Html::encode("{$country->name}") ?></td>
    		<td><?= Html::encode("{$country->population}") ?></td>
    		<td><?= Html::a('Update', ['/country/edit', 'id' => $country->id], ['class'=>'btn btn-primary grid-button']) ?>
    			<?= Html::a('Delete', ['/country/delete', 'id' => $country->id], ['class'=>'btn btn-danger grid-button']) ?>
    		</td>
    	</tr>
    
<?php endforeach; ?>
</ul>
	
	</table>
<?= LinkPager::widget(['pagination' => $pagination]) ?>

</div>