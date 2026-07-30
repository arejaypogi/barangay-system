<?php require_once __DIR__.'/../layouts/header.php'; ?>
<?php require_once __DIR__.'/../layouts/sidebar.php'; ?>

<h2>Add Household Member</h2>

<form method="POST" action="/barangay-system/public/households/save-member">
    <input class="form-control" type="hidden" name="household_id" value="<?= $householdId ?>">

    <label for="">Citizen</label>

    <select name="citizen_id" id="" class="form-contorl">
        <?php foreach($citizen as $citizen): ?>
        <option value="<?= $citizen['id'] ?>">

        <?= $citizen['first_name'] ?>
        <?= $citizen['last_name'] ?>

        </option>

        <?php endforeach; ?>

    </select>

    <br>

    <label>Relationship</label>

    <select
    name="relationship"
    class="form-control">

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

    <br>

    <button
    class="btn btn-primary">

    Save Member

    </button>

    </form>

    <?php require_once __DIR__.'/../layouts/footer.php'; ?>
        </select>
    </form>