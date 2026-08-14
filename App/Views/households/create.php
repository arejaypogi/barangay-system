<?php require_once __DIR__.'/../layouts/header.php'; ?>
<?php require_once __DIR__.'/../layouts/sidebar.php'; ?>

<div class="container-fluid py-4">
    <div>
        <h5 class="fw-semibold">
            Create New Household
        </h5>
        <p class="text-muted mb-0">
            Add a new Household to barangay.
        </p>
    </div>
    <a href="/barangay-system/public/households" class="btn btn-secondary">
        <i class="bi bi-arrow-left">
            Back
        </i>
    </a>

    <!--from-->
    <form method="POST" action="/barangay-system/public/households/store">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white">
            <h5 class="bm-0">
                New Household
            </h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col md-6">
                    <label for="" class="form-label">Household ID</label>
                    <input type="text" name="household_no" class="form-control">
                </div>
                <div class="col md-6">
                    <label for="" class="form-label">House Head</label>
                    <select name="house_head_id" id="" class="form-select">
                            <?php foreach($citizen as $citizen): ?>
                        <option value="<?= $citizen['id'] ?>">
                            <?= $citizen['first_name'] ?>
                            <?= $citizen['last_name'] ?>
                        </option>
                            <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col md-6">
                    <label for="" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control">
                </div>
                <div class="col md-6">
                    <label for="" class="form-label">Zone</label>
                    <input type="text" name="zone" class="form-control">
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3 text-end">
            <button class="btn btn-primary">
                Save Household
            </button>
        </div>
    </form>
</div>


<?php require_once __DIR__.'/../layouts/footer.php'; ?>