<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Students Record</h1>
<div class="row">
	<div class="col-sm-1">
		<?= Html::a('Create', ['/student/create'], ['class'=>'btn btn-success grid-button']) ?>
	</div>
</div>
<div class="container">
	<table class="table table-striped">
    	<tr>
    		<th>ID</th>
    		<th>Name</th>
    		<th>Email Id</th>
    		<th>Mobile Number</th>
    		<th>Address</th>
    		<th>Course</th>
    		<th>Section</th>
    		<!-- <th>Profile Picture</th> -->
    		<th>Operations</th>
    	</tr>

    <ul>
    <?php foreach ($students as $student): ?>
        	<tr>
        		<td><?= Html::encode("{$student->id}") ?></td>
        		<td><?= Html::encode("{$student->name}") ?></td>
        		<td><?= Html::encode("{$student->email}") ?></td>
        		<td><?= Html::encode("{$student->mobile}") ?></td>
                <td><?= Html::encode("{$student->address}") ?></td>
        		<td><?= Html::encode("{$student->course}") ?></td>
        		<td><?= Html::encode("{$student->section}") ?></td>
        		<!-- <td><?= Html::encode("{$student->profile_pic}") ?></td> -->
        		<td><?= Html::a('Update', ['/student/edit', 'id' => $student->id], ['class'=>'btn btn-primary grid-button']) ?>
        			<?= Html::a('Delete', ['/student/delete', 'id' => $student->id], ['class'=>'btn btn-danger grid-button']) ?>
        		</td>
        	</tr>
        
    <?php endforeach; ?>
    </ul>
    	
    	</table>
    <?= LinkPager::widget(['pagination' => $pagination]) ?>

</div>