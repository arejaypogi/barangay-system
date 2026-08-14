<?php require_once __DIR__.'/../layouts/header.php'; ?>
<?php require_once __DIR__.'/../layouts/navbar.php'; ?>


<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">
                Barangay Officials
            </h2>
            <p class="text muted mb-0">
                Manage Barangay Officials in the Barangay.
            </p>
        </div>
        <a class="btn btn-primary" href="/barangay-system/public/officials/create">
            <i class="bi bi-person-plus-fill">
                Add Official
            </i>
        </a>
    </div>

    <div class="row">
        <!--Table--> 
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5>Officials</h5>
                        <small>List officials of the Barangay Baritan</small>
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
                                <th>Position</th>
                                <th>Committee</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            <?php foreach($official as $row): ?>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-4"><?php if(!empty($row['photo'])): ?>
                                    <img src="/barangay-system/public/uploads/<?= htmlspecialchars($row['photo']) ?>" class="official-photo" alt="Official Photo">
                                    <?php else: ?>
                                    <div class="official-photo-placeholder">
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
                                        <?= $row['position'] ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="fw-semibold">
                                        <?= $row['committee'] ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="fw-semibold">
                                        <?= $row['status'] ?>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="btn group">
                                        <a href="#" class="btn btn-sm btn-outline-primary">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-warning">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-danger">
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
</div>



<?php require_once __DIR__.'/../layouts/footer.php'; ?>