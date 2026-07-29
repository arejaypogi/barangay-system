<?php require_once __DIR__.'/../layouts/header.php'; ?>
<?php require_once __DIR__.'/../layouts/sidebar.php'; ?>

<h1>Citizens</h1>

<a href="/barangay-system/public/citizens/create">
    Add Citizen
</a>

<hr>

<table border="1" cellpadding="10">

<tr>

<th>Photo</th>
<th>Name</th>
<th>Gender</th>
<th>Zone</th>
<th>Actions</th>

</tr>

<?php foreach($citizens as $row): ?>

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

<td><?= $row['gender'] ?></td>

<td><?= $row['zone'] ?></td>

<td>

<a href="/barangay-system/public/citizens/show?id=<?= $row['id'] ?>">
View
</a>

|

<a href="/barangay-system/public/citizens/edit?id=<?= $row['id'] ?>">
Edit
</a>

|

<a
onclick="return confirm('Delete this citizen?')"
href="/barangay-system/public/citizens/delete?id=<?= $row['id'] ?>">

Delete

</a>

</td>

</tr>

<?php endforeach; ?>

</table>

<?php require_once __DIR__.'/../layouts/footer.php'; ?>