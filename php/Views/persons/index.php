<?php
?>
            <a href="edit.php" class="btn btn-success">
                <i class="glyphicon glyphicon-plus"></i>
                New Record
            </a>
            <a href="#" class="btn btn-danger">
                <i class="glyphicon glyphicon-trash"></i>
                Delete All
                <span class="badge"><?=count($model)?></span>
            </a>
            <br />

<table class="table table-striped">
    <thead>
        <tr>
            <th>Actions</th>
            <th>Name</th>
            <th>Age</th>
            <th>Weight</th>
            <th>Recommended Workout Time (Minutes)</th>
            <th>Recommended Calorie Intake</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($model as $row): ?>
            <tr>
                <td></td>
                <td><?=$row['Name']?></td>
                <td><?=$row['Age']?></td>
                <td><?=$row['Weight']?></td>
                <td><?=$row['Recommended Workout Time (Minutes)']?></td>
                <td><?=$row['Recommended Calorie Intake']?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<script type="text/javascript">
    $(function(){
        $(".ajax").click(function(){
            $.get(this.href + "&format=plain").then(function(data){
                
            });
            return false;
        });
    });
</script>
