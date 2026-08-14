<?php require_once __DIR__ . '/../layouts/header.php'; ?>
<?php require_once __DIR__ . '/../layouts/sidebar.php'; ?>

<div class="container-fluid py-4">
    <h2 class="fw-semibold mb-4">Generate Barnagay Clearance</h2>
    <div class="card shadow-sm">
        <div class="card-body">
            <p class="mb-4">
                Resident:
                <strong>
                    <?= $citizen['first_name'] ?>
                    <?= $citizen['last_name'] ?>
                </strong>
            </p>
            <form method="POST" action="/barangay-system/public/clearance/generate">
            <input type="hidden" name="citizen_id" value="<?= $citizen['id'] ?>">
                <div class="mb-3">
                    <label for="" class="form-label">Purpose</label>
                    <input type="text" name="purpose" class="form-control">
                </div>
                <button class="btn btn-success">
                    <i class="bi bi-file-earmark-pdf"></i>Generate PDF
                </button>
                <a href="/barangay-system/public/citizens/show?id=<?= htmlspecialchars($citizen['id']) ?>" class="btn btn-outline-secondary">
                    Cancel
                </a>
            </form>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../layouts/footer.php';