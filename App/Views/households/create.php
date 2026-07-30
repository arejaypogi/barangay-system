<?php require_once __DIR__.'/../layouts/header.php'; ?>
<?php require_once __DIR__.'/../layouts/sidebar.php'; ?>

<h2>Create Household</h2>

<form
method="POST"
action="/barangay-system/public/households/store">

<label>Household Number</label>

<input
type="text"
name="household_no"
class="form-control"
required>

<br>

<label>Household Head</label>

<select
name="household_head_id"
class="form-control">

<?php foreach($citizen as $citizen): ?>

<option value="<?= $citizen['id'] ?>">

<?= $citizen['first_name'] ?>
<?= $citizen['last_name'] ?>

</option>

<?php endforeach; ?>

</select>

<br>

<label>Address</label>

<textarea
name="address"
class="form-control"></textarea>

<br>

<label>Zone</label>

<input
type="text"
name="zone"
class="form-control">

<br>

<button
class="btn btn-primary">

Save Household

</button>

</form>

<?php require_once __DIR__.'/../layouts/footer.php'; ?>