<?php require_once __DIR__.'/../layouts/header.php'; ?>
<?php require_once __DIR__.'/../layouts/navbar.php'; ?>

<div class="container-fluid py-4">
        <div>
            <h2 class="fw-semibold">
            Edit Information
        </h2>
        </div>
        <a href="/barangay-system/public/citizens" class="btn btn-secondary mb-3">
            <i class="bi bi-arrow-left">
                Back
            </i>
        </a>

        <!--form--> 
    <form method="POST" action="/barangay-system/public/citizens/store" enctype="multipart/form-data">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">
                Personal Information
            </h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <input type="hidden" value="<?= $row['id'] ?>" name="id">
                    <label for="" class="form-label">First Name</label>
                    <input type="text" name="first_name" value="<?= $row['first_name'] ?>" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">
                        Middle Name
                    </label>
                    <input type="text" name="middle_name" value="<?= $row['middle_name'] ?>" class="form-control mb-3">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="" class="form-label">Last Name</label>
                    <input type="text" name="last_name" class="form-control" value="<?= $row['last_name'] ?>">
                </div>
                <div class="col md-6">
                    <label for="" class="form-label">Suffix</label>
                    <input type="text" class="form-control mb-3">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <select name="gender" id="" class="form-select" value="<?= $row['gender'] ?>">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Birthday</label>
                    <input type="date" name="birthday" class="form-control" value="<?= $row['birthday'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="" class="form-label">Birth Place</label>
                    <input type="text" name="birth_place" class="form-control" value="<?= $row['birth_place'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Civil Status</label>
                    <input type="text" name="civil_status" class="form-control" value="<?= $row['civil_status'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="" class="form-label">Religion</label>
                    <input type="text" name="reilgion" class="form-control" value="<?= $row['religion'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Occupation</label>
                    <input type="text" name="occupation" class="form-control" value="<?= $row['occupation'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="" class="form-label">Zone</label>
                    <input type="text" name="zone" class="form-control" value="<?= $row['zone'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" value="<?= $row['email'] ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3 text-end">
        <button class="btn btn-primary">
            Save Citizen
        </button>
    </div>
    </form>
</div>

<?php require_once __DIR__.'/../layouts/footer.php'; ?>


