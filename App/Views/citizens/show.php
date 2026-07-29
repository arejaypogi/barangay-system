<?php require_once __DIR__.'/../layouts/header.php'; ?>
<?php require_once __DIR__.'/../layouts/sidebar.php'; ?>

<h1>Citizen Profile</h1>

<hr>

<?php if($row['photo']): ?>

<img
src="/barangay-system/public/uploads/<?= $row['photo'] ?>"
width="150">

<?php endif; ?>

<p>
Name:
<?= $row['first_name'] ?>
<?= $row['middle_name'] ?>
<?= $row['last_name'] ?>
</p>

<p>Gender: <?= $row['gender'] ?></p>

<p>Birthday: <?= $row['birthday'] ?></p>

<p>Birth Place: <?= $row['birth_place'] ?></p>

<p>Occupation: <?= $row['occupation'] ?></p>

<p>Zone: <?= $row['zone'] ?></p>

<p>Email: <?= $row['email'] ?></p>

<?php require_once __DIR__.'/../layouts/footer.php'; ?>