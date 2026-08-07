
<?php require_once __DIR__.'/../layouts/header.php'; ?>
<?php require_once __DIR__.'/../layouts/navbar.php'; ?>


<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-3">
            <div class="card dashboard-card bg-primary text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6>Total Citizens</h6>
                            <h2><?= $totalCitizens['total'] ?></h2>
                        </div>
                        <div>
                            <i class="bi bi-people-fill display-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card dashboard-card bg-primary text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6>Total Male</h6>
                            <h2><?= $male['total'] ?></h2>
                        </div>
                        <div>
                            <i class="bi bi-gender-male display-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card dashboard-card bg-primary text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6>Total Female</h6>
                            <h2><?= $female['total'] ?></h2>
                        </div>
                        <div>
                            <i class="bi bi-gender-female display-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card dashboard-card bg-primary text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6>Total Registered Voters</h6>
                            <h2><?= $voters['total'] ?></h2>
                        </div>
                        <div>
                            <i class="bi bi-person-bounding-box display-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card dashboard-card bg-primary text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6>Total Senior Citizens</h6>
                            <h2><?= $senior['total'] ?></h2>
                        </div>
                        <div>
                            <i class="bi-person-wheelchair display-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card dashboard-card bg-primary text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6>Total Document Issued</h6>
                            <h2><?= $documents['total'] ?></h2>
                        </div>
                        <div>
                            <i class="bi bi-folder2-open display-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card dashboard-card bg-primary text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6>Total Households</h6>
                            <h2><?= $household['total'] ?></h2>
                        </div>
                        <div>
                            <i class="bi bi-house display-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card dashboard-card bg-danger text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6>Total Blotters</h6>
                            <h2><?= $blotters['total'] ?? 0 ?></h2>
                        </div>
                        <i class="bi bi-shield-exclamation display-4"></i>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        Recent Documents
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>Number</th>
                                <th>Type</th>
                                <th>Date</th>
                            </tr>
                            <?php foreach($recentDocuments as $doc): ?>
                            <tr>
                                <td><?= $doc['document_no'] ?></td>
                                <td><?= $doc['document_type'] ?></td>
                                <td><?= $doc['issued_date'] ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        Zone
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>Zone</th>
                                <th>Total</th>
                            </tr>
                            <?php foreach($zone as $zone): ?>
                            <tr>
                                <td><?= $zone['zone'] ?></td>
                                <td><?= $zone['total'] ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-header">
                    Quick Actions
                </div>
                <div class="card-body">
                    <a class="btn btn-primary w-100 mb-2" href="/barangay-system/public/citizens/create">
                        <i class="bi bi-person-plus"></i>
                        New Citizen
                    </a>
                    <a class="btn btn-danger w-100 mb-2" href="/barangay-system/public/blotters/create">
                        <i class="bi bi-shield-plus"></i>
                        New Blotter
                    </a>
                    <a class="btn btn-warning w-100 mb-2" href="/barangay-system/public/officials/create">
                        <i class="bi bi-person-plus"></i>
                        New Official
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once __DIR__.'/../layouts/footer.php'; ?>