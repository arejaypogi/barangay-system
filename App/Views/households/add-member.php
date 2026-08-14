<?php require_once __DIR__.'/../layouts/header.php'; ?>
<?php require_once __DIR__.'/../layouts/sidebar.php'; ?>

<div class="container-fluid py-4">
    <h2 class="fw-semibold mb-4">
        Add Household Member
    </h2>
    <div class="card shadow-sm">
        <div class="card-body">
            <form method="POST" action="/barangay-system/public/households/save-member">
            <input class="form-control" type="hidden" name="household_id" value="<?= $householdId ?>">
            <div class="mb-3">
                <label for="" class="form-label">Citizen</label>
                <select name="citizen_id" id="" class="form-select">
                    <?php foreach($citizen as $citizen): ?>
                    <option value="<?= $citizen['id'] ?>">
                    <?= $citizen['first_name'] ?>
                    <?= $citizen['last_name'] ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Relationship</label>
                <select name="relationship" id="" class="form-select">
                    <option>Wife</option>
                    <option>Husband</option>

                    <option>Son</option>
                    <option>Daughter</option>

                    <option>Father</option>
                    <option>Mother</option>

                    <option>Brother</option>
                    <option>Sister</option>

                    <option>Grandfather</option>
                    <option>Grandmother</option>

                    <option>Other Relative</option>
                </select>
            </div>
            <button class="btn btn-primary">Save Member</button>
            <a href="/barangay-system/public/households/show?id=<?= htmlspecialchars($householdId) ?>"" class="btn btn-outline-secondary">
                Cancel
            </a>
            </form>
        </div>
    </div>
</div>

    <?php require_once __DIR__.'/../layouts/footer.php'; ?>
