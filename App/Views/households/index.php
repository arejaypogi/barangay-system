<?php require_once __DIR__.'/../layouts/header.php'; ?>
<?php require_once __DIR__.'/../layouts/sidebar.php'; ?>


<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">
                Household Management
            </h2>
            <p class="text-muted mb-0">
                Manage household records in your barangay.
            </p>
        </div>
        <a href="/barangay-system/public/households/create" class="btn btn-primary" >
            <i class="bi bi-house-add-fill">
                Add Household
            </i>
        </a>
    </div>

    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <small>Total Households</small>
                    <h3>215</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <small>Total Population</small>
                    <h3>354</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <small>Average Members</small>
                    <h3>234</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <small>Zones</small>
                    <h3>7</h3>
                </div>
            </div>
        </div>
    </div>

    <!--serach -->
    <div class="card shadow-sm border-0 mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-5">
                    <div class="input-group">
                        <span class="input-group-text bg-white">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Search household...">
                    </div>
                </div>
                <div class="col-md-2">
                    <select name="" id="" class="form-select">
                        <option value="">All Zones</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select name="" id="" class="form-select">
                        <option value="">All Purok</option>
                    </select>
                </div>
                <div class="col-md-3 text-end">
                    <button class="btn btn-outline-secondary">
                        Reset
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!--Table--> 
    <table class="table table-bordered">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Household No.</th>
                            <th>Household Head</th>
                            <th>Zone</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($households as $row): ?>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="fw-semibold">
                                    <?= $row['household_no'] ?>
                                </div>
                            </td>
                            <td>
                                <div class="fw-semibold">
                                    Household Head
                                </div>
                            </td>
                            <td>
                                <div class="fw-semibold">
                                    <?= $row['zone'] ?>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="/barangay-system/public/households/show?id=<?= $row['id'] ?>"" class="btn btn-sm btn-outline-primary" title="View">
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
    </table>
</div>



<?php require_once __DIR__.'/../layouts/footer.php'; ?>