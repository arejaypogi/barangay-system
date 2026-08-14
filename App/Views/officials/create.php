<?php require_once __DIR__.'/../layouts/header.php'; ?>
<?php require_once __DIR__.'/../layouts/navbar.php'; ?>

<div class="container-fluid py-4">
    <div>
        <h2 class="fw-semibold">
            Register new Official
        </h2>
        <p class="text-muted mb-0">
            Add new Official to barangay database.
        </p>
    </div>
    <a href="/barangay-system/public/officials" class="btn btn-secondary">
        <i class="bi bi-arrow-left">
            Back
        </i>
    </a>

    <!--form-->
    <form method="POST" action="/barangay-system/public/officials/store" enctype="multipart/form-data">
    <div class="card shadow-sm border-10">
        <div class="card-header bg-primary text-white ">
            <h5 class="mb-0">
                Official Information
            </h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col md-6">
                    <label for="" class="form-label">First Name</label>
                    <input type="text" name="first_name" class="form-control">
                </div>
                <div class="col md-6">
                    <label for="" class="form-label">Middle Name</label>
                    <input type="text" name="middle_name" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col md-6">
                    <label for="" class="form-label">Last Name</label>
                    <input type="text" name="last_name" class="form-control">
                </div>
                <div class="col md-6">
                    <label for="" class="form-label">Suffix</label>
                    <input type="text" name="suffix" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col md-6">
                    <label name="gender" class="form-label">Gender</label>
                    <select name="" id="" class="form-select">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="col md-6">
                    <label for="" class="form-label">Birthday</label>
                    <input type="date" name="birthdate" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col md-6">
                    <label for="" class="form-label">Contact Number</label>
                    <input type="number" name="contact_number" class="form-control">
                </div>
                <div class="col md-6">
                    <label for="" class="form-label">Complete Address</label>
                    <input type="text" name="address" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col md-6">
                    <label for="" class="form-label">Position</label>
                    <select name="position" id="" class="form-select">
                        <option value="Barangay Captain">Barangay Captain</option>
                        <option value="Barangay Secretary">Barangay Secretary</option>
                        <option value="Barangay Treasurer">Barangay Treasurer</option>

                        <option value="Kagawad 1">Kagawad 1</option>
                        <option value="Kagawad 2">Kagawad 2</option>
                        <option value="Kagawad 3">Kagawad 3</option>
                        <option value="Kagawad 4">Kagawad 4</option>
                        <option value="Kagawad 5">Kagawad 5</option>
                        <option value="Kagawad 6">Kagawad 6</option>
                        <option value="Kagawad 7">Kagawad 7</option>

                        <option value="SK Chairman">SK Chairman</option>

                        <option value="SK Kagawad 1">SK Kagawad 1</option>
                        <option value="SK Kagawad 2">SK Kagawad 2</option>
                        <option value="SK Kagawad 3">SK Kagawad 3</option>
                        <option value="SK Kagawad 4">SK Kagawad 4</option>
                        <option value="SK Kagawad 5">SK Kagawad 5</option>
                        <option value="SK Kagawad 6">SK Kagawad 6</option>
                        <option value="SK Kagawad 7">SK Kagawad 7</option>

                        <option value="Barangay Tanod">Barangay Tanod</option>
                        <option value="Health Worker">Health Worker</option>
                    </select>
                </div>
                <div class="col md-6">
                    <label for="" class="form-label">Committee</label>
                    <select name="committee" id="" class="form-select">
                        <option value="Executive">Executive</option>
                        <option value="Peace and Order">Peace and Order</option>
                        <option value="Health">Health</option>
                        <option value="Education">Education</option>
                        <option value="Agriculture">Agriculture</option>
                        <option value="Finance">Finance</option>
                        <option value="Infrastructure">Infrastructure</option>
                        <option value="Youth and Sports">Youth and Sports</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col md-6">
                    <label for="" class="form-label">Term Start</label>
                    <input type="date" name="term_start" class="form-control">
                </div>
                <div class="col md-6">
                    <label for="" class="form-label">Term End</label>
                    <input type="date" name="term_end" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col md-6">
                    <label for="" class="form-label">Picture</label>
                    <input type="file" name="photo" class="form-control">
                </div>
                <div class="col md-6">
                    <label for="" class="form-label">Signature</label>
                    <input type="file" name="signature" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col md-6">
                    <label for="" class="form-label">Status</label>
                    <select name="status" id="" class="form-select">
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                </div>
                <div class="col md-6">
                    <div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3 text-end">
        <button class="btn btn-primary">
            Save Official
        </button>
    </div>
    </form>
</div>



<?php require_once __DIR__.'/../layouts/footer.php'; ?>