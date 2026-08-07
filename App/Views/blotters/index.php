<?php require_once __DIR__.'/../layouts/header.php'; ?>
<?php require_once __DIR__.'/../layouts/sidebar.php'; ?>

<h2>BLotter Record</h2>

<a href="/barangay-system/public/blotters/create" class="btn btn-success">
    New Blotter
</a>

<hr>
<table class="table table-borderd">
    <tr>
        <th>Blotter No</th>
        <th>Complainant</th>
        <th>Respondent</th>
        <th>Incident</th>
        <th>Status</th>
    </tr>
    <?php foreach($blotters as $row): ?>
    <tr>
        <td><?= $row['blotter_no'] ?></td>
        <td>
            <?= $row['complainant_first'] ?>
            <?= $row['complainant_last'] ?>
        </td>
        <td>
            <?= $row['respondent_first'] ?>
            <?= $row['respondent_last'] ?>
        </td>
        <td><?= $row['incident_type'] ?></td>
        <td><?= $row['status'] ?></td>
        <td><a class="btn btn-info btn-sm" href="/barangay-system/public/blotters/show?id=<?= $row['id'] ?>">
            View
        </a></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php require_once __DIR__.'/../layouts/footer.php'; ?>