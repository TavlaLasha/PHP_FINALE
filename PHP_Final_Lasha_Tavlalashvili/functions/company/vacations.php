<?php
    $vacations = selectAll("vacations");
?>
<h2>Vacations</h2>
<table>
    <thead>
    <th>N</th>
    <th>Title</th>
    <th>Description</th>
    <th>Date</th>
    <th colspan="2">Action</th>
    </thead>
    <tbody>
    <?php foreach($vacations as $key => $vacation): ?>
        <tr class="rec">
            <td><?=$key+1; ?></td>
            <td><a href="#"><?=$vacation['title']; ?></a></td>
            <td><?=$vacation['description']; ?></td>
            <td><?=$vacation['date']; ?></td>
            <td><a href="edit.php?id=<?=$vacation['id']; ?>" class="edit">Edit</a></td>
            <td><a href="edit.php?del_id=<?=$vacation['id']; ?>" class="delete">Delete</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>