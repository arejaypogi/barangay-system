<?php require_once __DIR__.'/../layouts/header.php'; ?>
<?php require_once __DIR__.'/../layouts/sidebar.php'; ?>

<div class="container-fluid py-4">
    <h2 class="fw-semibold mb-4">New Blotter Record</h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="/barangay-system/public/blotters/store" method="POST">

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="complainant_id" class="form-label">Complainant</label>
                        <select name="complainant_id" id="complainant_id" class="form-select" required>
                            <option value="" selected disabled>-- Select Complainant --</option>
                            <?php foreach ($citizens as $row): ?>
                                <option value="<?= $row['id'] ?>">
                                    <?= htmlspecialchars($row['first_name'] . ' ' . $row['last_name']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="respondent_id" class="form-label">Respondent</label>
                        <select name="respondent_id" id="respondent_id" class="form-select" required>
                            <option value="" selected disabled>-- Select Respondent --</option>
                            <?php foreach ($citizens as $row): ?>
                                <option value="<?= $row['id'] ?>">
                                    <?= htmlspecialchars($row['first_name'] . ' ' . $row['last_name']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="incident_type" class="form-label">Incident Type</label>
                    <input type="text" name="incident_type" id="incident_type" class="form-control" required>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="incident_date" class="form-label">Date</label>
                        <input type="date" name="incident_date" id="incident_date" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="incident_time" class="form-label">Time</label>
                        <input type="time" name="incident_time" id="incident_time" class="form-control" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="incident_location" class="form-label">Location</label>
                    <input type="text" name="incident_location" id="incident_location" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
                </div>

                <input type="hidden" name="status" value="Pending">

                <button type="submit" class="btn btn-danger">
                    <i class="bi bi-shield-plus"></i> Save Blotter
                </button>
                <a href="/barangay-system/public/blotters" class="btn btn-outline-secondary">
                    Cancel
                </a>
            </form>
        </div>
    </div>
</div>

<?php require_once __DIR__.'/../layouts/footer.php'; ?>