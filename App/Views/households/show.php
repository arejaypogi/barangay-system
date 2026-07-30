<?php require_once __DIR__.'/../layouts/header.php'; ?>
<?php require_once __DIR__.'/../layouts/sidebar.php'; ?>

<h2>Household Profile</h2>

<hr>

<p>

Household No:

<strong>
<?= $row['household_no'] ?>
</strong>

</p>

<p>

Head:

<strong>

<?= $row['first_name'] ?>
<?= $row['last_name'] ?>

</strong>

</p>

<p>

Zone:

<?= $row['zone'] ?>

</p>

<hr>

<h4>Family Members</h4>

<table class="table table-bordered">

<tr>

<th>Name</th>
<th>Relationship</th>

</tr>

<?php foreach($members as $member): ?>

<tr>

<td>

<?= $member['first_name'] ?>
<?= $member['last_name'] ?>

</td>

<td>

<?= $member['relationship'] ?>

</td>

</tr>

<?php endforeach; ?>

</table>

<?php require_once __DIR__.'/../layouts/footer.php'; ?>