<?php require_once __DIR__.'/../layouts/header.php'; ?>
<?php require_once __DIR__.'/../layouts/sidebar.php'; ?>

<div class="container-fluid py-4">
    <h2 class="mb-4">Resident Profile</h2>

    <div class="row g-4">
        <!-- Left: Photo -->
        <div class="col-md-4">
            <div class="card shadow-sm text-center">
                <div class="card-body">
                    <?php if (!empty($row['photo'])): ?>
                        <img
                            src="/barangay-system/public/uploads/<?= htmlspecialchars($row['photo']) ?>"
                            class="img-thumbnail"
                            width="180" height="180"
                            style="object-fit: cover;"
                            alt="Resident photo">
                    <?php else: ?>
                        <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center mx-auto"
                             style="width:180px; height:180px;">
                            <span class="text-white fs-1">
                                <?= htmlspecialchars(strtoupper(substr($row['first_name'], 0, 1) . substr($row['last_name'], 0, 1))) ?>
                            </span>
                        </div>
                    <?php endif; ?>

                    <h5 class="mt-3 mb-0">
                        <?= htmlspecialchars($row['first_name'] . ' ' . $row['last_name']) ?>
                    </h5>
                    <small class="text-muted">Zone <?= htmlspecialchars($row['zone']) ?></small>

                    <hr>
                    <a href="/barangay-system/public/citizens/edit?id=<?= $row['id'] ?>"
                       class="btn btn-warning btn-sm w-100 mb-2">
                        Edit Profile
                    </a>
                    <a href="/barangay-system/public/citizens"
                       class="btn btn-outline-secondary btn-sm w-100">
                        Back to List
                    </a>
                </div>
            </div>
        </div>

        <!-- Right: Information -->
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    <strong>Personal Information</strong>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-sm-4 text-muted">Full Name</div>
                        <div class="col-sm-8">
                            <?= htmlspecialchars(trim("{$row['first_name']} {$row['middle_name']} {$row['last_name']}")) ?>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-4 text-muted">Gender</div>
                        <div class="col-sm-8"><?= htmlspecialchars($row['gender']) ?></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-4 text-muted">Birthday</div>
                        <div class="col-sm-8">
                            <?= htmlspecialchars(date('F j, Y', strtotime($row['birthday']))) ?>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-4 text-muted">Birth Place</div>
                        <div class="col-sm-8"><?= htmlspecialchars($row['birth_place']) ?></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-4 text-muted">Occupation</div>
                        <div class="col-sm-8"><?= htmlspecialchars($row['occupation']) ?></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-4 text-muted">Zone</div>
                        <div class="col-sm-8"><?= htmlspecialchars($row['zone']) ?></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 text-muted">Email</div>
                        <div class="col-sm-8"><?= htmlspecialchars($row['email']) ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__.'/../layouts/footer.php'; ?>