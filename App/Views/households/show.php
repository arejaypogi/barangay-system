<?php require_once __DIR__.'/../layouts/header.php'; ?>
<?php require_once __DIR__.'/../layouts/navbar.php'; ?>

<div class="container-fluid py-4">
    <h2 class="fw-semibold mb-4">Household Profile</h2>
    <a href="/barangay-system/public/households" class="btn btn-secondary mb-3">
        <i class="bi bi-arrow-left">
            Back
        </i>
    </a>

    <div class="row g-4">
        <!-- Left: Household "avatar" + head name -->
        <div class="col-md-4">
            <div class="card shadow-sm text-center">
                <div class="card-body">
                    <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center mx-auto"
                         style="width:120px; height:120px;">
                        <span class="text-white fs-2">
                            <?= htmlspecialchars(strtoupper(substr($row['first_name'], 0, 1))) ?>
                        </span>
                    </div>

                    <h5 class="fw-semibold mt-3 mb-0">
                        <?= htmlspecialchars($row['first_name'] . ' ' . $row['last_name']) ?>
                    </h5>
                    <p class="text-muted mb-0">Household Head</p>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="fw-semibold mb-0">Information</h5>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-sm-4 text-muted">Household No.</div>
                        <div class="col-sm-8"><?= htmlspecialchars($row['household_no']) ?></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-4 text-muted">Head</div>
                        <div class="col-sm-8">
                            <?= htmlspecialchars($row['first_name'] . ' ' . $row['last_name']) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 text-muted">Zone</div>
                        <div class="col-sm-8"><?= htmlspecialchars($row['zone']) ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="fw-semibold mb-0">Household Members</h5>
                <a href="/barangay-system/public/households/add-member?id=<?= $row['id'] ?>"
                   class="btn btn-success btn-sm">
                    + Add Member
                </a>
            </div>

            <table class="table table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Name</th>
                        <th>Relationship</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php if (empty($members)): ?>
                    <tr>
                        <td colspan="3" class="text-center text-muted">No members added yet.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($members as $member): ?>
                        <tr>
                            <td><?= htmlspecialchars($member['first_name'] . ' ' . $member['last_name']) ?></td>
                            <td><?= htmlspecialchars($member['relationship']) ?></td>
                            <td>
                                <a href="/barangay-system/public/households/remove-member?id=<?= $member['id'] ?>"
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Remove this member?');">
                                    Remove
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once __DIR__.'/../layouts/footer.php'; ?>     