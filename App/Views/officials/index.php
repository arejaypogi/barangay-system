<?php require_once __DIR__.'/../layouts/header.php'; ?>
<?php require_once __DIR__.'/../layouts/sidebar.php'; ?>

<h2>Barangay Officials</h2>

<a
class="btn btn-primary"
href="/barangay-system/public/officials/create">

Add Official

</a>

<hr>

<table class="table table-bordered">

<tr>

<th>Photo</th>
<th>Name</th>
<th>Position</th>
<th>Committee</th>
<th>Status</th>

</tr>

<?php foreach($official as $row): ?>

<tr>

<td>

<?php if($row['photo']): ?>

<img
src="/barangay-system/public/uploads/<?= $row['photo'] ?>"
width="60">

<?php endif; ?>

</td>

<td>
<?= $row['first_name'] ?>
<?= $row['last_name'] ?>
</td>

<td>
<?= $row['position'] ?>
</td>

<td>
<?= $row['committee'] ?>
</td>

<td>
<?= $row['status'] ?>
</td>



</tr>

<?php endforeach; ?>

</table>

<?php require_once __DIR__.'/../layouts/footer.php'; ?>