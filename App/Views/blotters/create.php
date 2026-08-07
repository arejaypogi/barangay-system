<?php

use App\Models\Citizen;

 require_once __DIR__.'/../layouts/header.php'; ?>
<?php require_once __DIR__.'/../layouts/sidebar.php'; ?>

<h2>New Blotter Record</h2>

<form action="/barangay-system/public/blotters/store" method="POST">
    <label for="">Complainant</label>

    <select name="complainant_id" class="form-control">
        <?php foreach($citizens as $row): ?>
        <option value="<?= $row['id'] ?>">
            <?= $row['first_name'] ?>
            <?= $row['last_name'] ?>
        </option>
        <?php endforeach; ?>
    </select>
    <br>

    <label for="">Respondent</label>
    <select name="respondent_id" id="" class="form-control">
        <?php foreach($citizens as $row): ?>
        <option value="<?= $row['id'] ?>">
            <?= $row['first_name'] ?>
            <?= $row['last_name'] ?>
        </option>
        <?php endforeach; ?>
    </select>
    <br>

    <label for="">Incident Type</label>
    <input type="text" name="incident_type" class="form-control">
    <br>

    <label for="">Date</label>
    <input type="date" class="form-control" name="incident_date">
    <br>

    <label for="">Time</label>
    <input type="time" name="incident_time" id="" class="form-control">
    <br>

    <label for="">Location</label>
    <input type="text" name="incident_location" class="form-contro">
    <br>

    <label for="">Description</label>
    <input type="text" name="description" id="" class="form-control">
    <br>

    <label for="">Status</label>
    <input type="hidden" name="status" value="Pending">
    <br>
    <br>

    <button class="btn btn-danger">Save Blotter</button>

</form>

<?php require_once __DIR__.'/../layouts/footer.php'; ?>
