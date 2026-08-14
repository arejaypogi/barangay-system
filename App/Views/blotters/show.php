<?php require_once __DIR__.'/../layouts/header.php'; ?>
<?php require_once __DIR__.'/../layouts/sidebar.php'; ?>

<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-semibold mb-0">Blotter Details</h2>
        <div>
            <a href="/barangay-system/public/blotters" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Back
            </a>
            <button onclick="window.print()" class="btn btn-outline-primary">
                <i class="bi bi-printer"></i> Print
            </button>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="fw-semibold mb-0">
                Blotter No. <?= htmlspecialchars($record['blotter_no']) ?>
            </h5>
            <?php
                $statusClass = match(strtolower($record['status'])) {
                    'resolved' => 'bg-success',
                    'ongoing'  => 'bg-warning text-dark',
                    'pending'  => 'bg-secondary',
                    default    => 'bg-light text-dark',
                };
            ?>
            <span class="badge <?= $statusClass ?>">
                <?= htmlspecialchars($record['status']) ?>
            </span>
        </div>

        <div class="card-body">
            <div class="row mb-3">
                <div class="col-sm-3 text-muted">Complainant</div>
                <div class="col-sm-9">
                    <?= htmlspecialchars($record['complainant_first'] . ' ' . $record['complainant_last']) ?>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3 text-muted">Respondent</div>
                <div class="col-sm-9">
                    <?= htmlspecialchars($record['respondent_first'] . ' ' . $record['respondent_last']) ?>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3 text-muted">Incident Type</div>
                <div class="col-sm-9"><?= htmlspecialchars($record['incident_type']) ?></div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3 text-muted">Date</div>
                <div class="col-sm-9">
                    <?= htmlspecialchars(date('F j, Y', strtotime($record['incident_date']))) ?>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3 text-muted">Location</div>
                <div class="col-sm-9"><?= htmlspecialchars($record['incident_location']) ?></div>
            </div>

            <hr>

            <div class="mb-2 text-muted">Description</div>
            <div class="alert alert-light border">
                <?= nl2br(htmlspecialchars($record['description'])) ?>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__.'/../layouts/footer.php'; ?>