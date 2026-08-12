<?php require_once __DIR__.'/../layouts/header.php'; ?>
<?php require_once __DIR__.'/../layouts/navbar.php'; ?>

<div class="container-fluid py-4">
    <!--Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">
                Citizen Management
            </h2>
            <p class="text-muted mb-0">
                Manag all registered citizens in the barangay.
            </p>
        </div>
        <a href="/barangay-system/public/citizens/create" class="btn btn-primary">
            <i class="bi bi-person-plus-fill">
                Add Citizen
            </i>
        </a>
    </div>

    <!-- Cards -->
     <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="card citizen-stat-card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted">
                                Total Citizens
                            </small>
                            <h3 class="fw-bold mb-0">
                                <?= $totalCitizens['total'] ?>
                            </h3>
                        </div>
                        <div class="stat-icon bg-primary">
                            <i class="bi bi-people-fill"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card citizen-stat-card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted">
                                Male
                            </small>
                            <h3 class="fw-bold mb-0">
                                <?= $male['total'] ?>
                            </h3>
                        </div>
                        <div class="stat-icon bg-info">
                            <i class="bi bi-gender-male"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card citizen-stat-card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted">
                                Female
                            </small>
                            <h3 class="fw-bold mb-0">
                                <?= $female['total'] ?>
                            </h3>
                        </div>
                        <div class="stat-icon bg-info">
                            <i class="bi bi-gender-female"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card citizen-stat-card border-0 shadow-0">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted">
                                Senior Citizen
                            </small>
                            <h3 class="fw-bold mb-0">
                                <?= $senior['total'] ?>
                            </h3>
                        </div>
                        <div class="stat-icon gb-info">
                            <i class="bi bi-person-wheelchair"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>

     <!-- SEARCH AND FILTER-->
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <div class="row g-3 align-items-center">
                <!--Search-->
                <div class="col-md-5">
                    <div class="input-group">
                    <span class="input-group-text bg-white">
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Search Citizen...">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--table--> 
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white py-3">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="mb-0 fw-bold">
                        Registered Citizens
                    </h5>
                    <small class="text-muted">
                        List of all registered citizens
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
                            <th class="ps-4">Photo</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Zone</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <?php foreach($citizens as $row): ?>
                    <tbody>
                        <tr>
                            <td class="ps-4"><?php if(!empty($row['photo'])): ?>
                                <img src="/barangay-system/public/uploads/<?= htmlspecialchars($row['photo']) ?>" class="citizen-photo" alt="Citizen Photo">
                                <?php else: ?>
                                    <div class="citizen-photo-placeholder">
                                        <i class="bi bi-person"></i>
                                    </div>
                                <?php endif; ?>
                            </td>
                            <td>
                                <div class="fw-semibold">
                                    <?= $row['first_name'] ?>
                                    <?= $row['last_name'] ?>
                                </div>
                            </td>
                            <td>
                                <div class="fw-semibold">
                                    <?= $row['gender'] ?>
                                </div>
                            </td>
                            <td>
                                <div class="fw-semibold">
                                    <?= $row['zone'] ?>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="/barangay-system/public/citizens/show?id=<?= $row['id'] ?>" class="btn btn-sm btn-outline-primary" title="View">
                                    <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="/barangay-system/public/citizens/edit?id=<?= $row['id'] ?>" class="btn btn-sm btn-outline-warning" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                    </a>
                                    <a onclick="return confirm('Delete this citizen?')" href="/barangay-system/public/citizens/delete?id=<?= $row['id'] ?>" class="btn btn-sm btn-outline-danger" title="Delete">
                                    <i class="bi bi-trash"></i>
                                    </a>
                                    <a href="/barangay-system/public/clearance/create?id=<?= $row['id'] ?>" class="btn btn-sm btn-outline-warning" title="Clearance">
                                    <i class="bi bi-file-earmark-text"></i>
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


