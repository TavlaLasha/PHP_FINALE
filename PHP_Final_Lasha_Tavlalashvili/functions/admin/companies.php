<?php
    $companies = selectAll("company");
?>
<h2>Companies</h2>
<table>
    <thead>
    <th>N</th>
    <th>Name</th>
    <th>ID Number</th>
    <th>Date</th>
    </thead>
    <tbody>
    <?php foreach($companies as $key => $company): ?>
        <tr class="rec">
            <td><?=$key+1; ?></td>
            <td><a href="#"><?=$company['name']; ?></a></td>
            <td><?=$company['idn']; ?></td>
            <td><?=$company['date']; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>