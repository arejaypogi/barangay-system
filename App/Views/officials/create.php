<?php require_once __DIR__.'/../layouts/header.php'; ?>
<?php require_once __DIR__.'/../layouts/sidebar.php'; ?>

<h2>Register Official</h2>

<form
method="POST"
action="/barangay-system/public/officials/store"
enctype="multipart/form-data">

<input type="text" name="first_name" placeholder="First Name" require>
<br><br>

<input type="text" name="middle_name" placeholder="Middle Name">
<br><br>

<input type="text" name="last_name" placeholder="Last Name" require>
<br><br>

<select name="gender">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
</select>
<br><br>

<input type="date" name="birthdate">
<br><br>

<input type="text" name="contact_number" placeholder="Contact Number">
<br><br>

<textarea name="address" id="" placeholder="Address"></textarea>
<br><br>

<select name="position">
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
<br><br>

<select name="committee">
    <option value="Executive">Executive</option>
    <option value="Peace and Order">Peace and Order</option>
    <option value="Health">Health</option>
    <option value="Education">Education</option>
    <option value="Agriculture">Agriculture</option>
    <option value="Finance">Finance</option>
    <option value="Infrastructure">Infrastructure</option>
    <option value="Youth and Sports">Youth and Sports</option>
</select>
<br><br>

<br><br>

<label>Term Start</label>

<input type="date"
name="term_start">
<br>
<label>Term End</label>

<input type="date"
name="term_end">

<br><br>

<label>Photo</label>

<input
type="file"
name="photo">

<br><br>

<label>Signature</label>

<input
type="file"
name="signature">

<br><br>

<select name="status">

<option>Active</option>
<option>Inactive</option>

</select>

<br><br>

<button type="submit">
Save Official
</button>

</form>

<?php require_once __DIR__.'/../layouts/footer.php'; ?>