<?php require_once __DIR__.'/../layouts/header.php'; ?>
<?php require_once __DIR__.'/../layouts/sidebar.php'; ?>


<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">
                Blotter Management
            </h2>
            <p class="text-muted mb-0">
                Manage all Blotters.
            </p>
        </div>
        <a href="/barangay-system/public/blotters/create" class="btn btn-primary">
            <i class="bi bi-person-plus-fill">
                New Blotter
            </i>
        </a>
    </div>

    <!--Cards--> 
    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="card citizen-stat-card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted">
                                Total Blotters
                            </small>
                            <h3 class="fw-bold mb-0">546</h3>
                        </div>
                        <div class="stat-icon bg-primary">
                            <i class="bi bi-people-fill"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Table--> 
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white py-3">
            <div class="d-flex justidy-content-between align-items-center">
                <div>
                    <h5 class="mb-0 fw-bold">
                        All Blotters
                    </h5>
                    <small class="text-muted">
                        List of Blotters
                    </small>
                </div>
                <span class="badge bg-primary"></span>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Blotter No.</th>
                            <th>Complainant</th>
                            <th>Respondent</th>
                            <th>Incident</th>
                            <th>Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        <?php foreach($blotters as $row): ?>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="fw-semibold">
                                    <?= $row['blotter_no'] ?>
                                </div>
                            </td>
                            <td>
                                <div class="fw-semibold">
                                    <?= $row['complainant_first'] ?>
                                    <?= $row['complainant_last'] ?>
                                </div>
                            </td>
                            <td>
                                <div class="fw-semibold">
                                    <?= $row['respondent_first'] ?>
                                   <?= $row['respondent_last'] ?>
                                </div>
                            </td>
                            <td>
                                <div class="fw-semibold">
                                    <?= $row['incident_type'] ?>
                                </div>
                            </td>
                            <td>
                                <div class="fw-semibold">
                                    <?= $row['status'] ?>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="barangay-system/public/blotters/show?id=<?= $row['id'] ?>" class="btn btn-sm btn-outline-primary" title="View">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-outline-warning" title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-outline-danger" title="Delete">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php require_once __DIR__.'/../layouts/footer.php'; ?>