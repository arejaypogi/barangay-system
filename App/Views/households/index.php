<?php require_once __DIR__.'/../layouts/header.php'; ?>
<?php require_once __DIR__.'/../layouts/sidebar.php'; ?>

<h2>Households</h2>

<a
class="btn btn-primary"
href="/barangay-system/public/households/create" >

Create Household

</a>

<hr>

<table class="table table-bordered">

<tr>
    <th>Household No</th>
    <th>Zone</th>
</tr>

<?php foreach($households as $row): ?>

<tr>

<td>
<?= $row['household_no'] ?>
</td>

<td>
<?= $row['zone'] ?>
</td>

<td>
    <a
class="btn btn-info btn-sm"
href="/barangay-system/public/households/show?id=<?= $row['id'] ?>">

View

</a>
</td>
</tr>

<?php endforeach; ?>

</table>



<?php require_once __DIR__.'/../layouts/footer.php'; ?>