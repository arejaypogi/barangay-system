<?php require_once __DIR__.'/../layouts/header.php'; ?>
<?php require_once __DIR__.'/../layouts/sidebar.php'; ?>


<h2>Blotter Details</h2>

<hr>

<p>
<strong>Blotter No:</strong>
<?= $record['blotter_no'] ?>
</p>

<p>
<strong>Complainant:</strong>
<?= $record['complainant_first'] ?>
<?= $record['complainant_last'] ?>
</p>

<p>
<strong>Respondent:</strong>
<?= $record['respondent_first'] ?>
<?= $record['respondent_last'] ?>
</p>

<p>
<strong>Incident:</strong>
<?= $record['incident_type'] ?>
</p>

<p>
<strong>Date:</strong>
<?= $record['incident_date'] ?>
</p>

<p>
<strong>Location:</strong>
<?= $record['incident_location'] ?>
</p>

<p>
<strong>Status:</strong>
<?= $record['status'] ?>
</p>

<p>
<strong>Description:</strong>
</p>

<div class="alert alert-light">
<?= nl2br($record['description']) ?>
</div>


<?php require_once __DIR__.'/../layouts/footer.php'; ?>