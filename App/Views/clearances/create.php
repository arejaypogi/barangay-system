<?php require_once __DIR__ . '/../layouts/header.php'; ?>
<?php require_once __DIR__ . '/../layouts/sidebar.php'; ?>

<h2>Generate Barangay clearance</h2>

<hr>
<p>
    Resident
<strong>
    <?= $citizen['first_name'] ?>
    <?= $citizen['last_name'] ?>
</strong>
</p>

<form method="POST" action="/barangay-system/public/clearance/generate">

<input type="hidden" name="citizen_id" value="<?= $citizen['id'] ?>">


<label for="">Purpose</label>

<input type="text" name="purpose" class="form-control" required>
<br>

<button class="btn btn-success">
    Generate PDF
</button>
</form>

<?php require_once __DIR__ . '/../layouts/footer.php';