<h2>Edit Citizen</h2>

<form
method="POST"
action="/barangay-system/public/citizens/update">

<input
type="hidden"
name="id"
value="<?= $row['id'] ?>">

<input
type="text"
name="first_name"
value="<?= $row['first_name'] ?>">

<br><br>

<input
type="text"
name="middle_name"
value="<?= $row['middle_name'] ?>">

<br><br>

<input
type="text"
name="last_name"
value="<?= $row['last_name'] ?>">

<br><br>
<select name="gender" value="<?=  $row['gender'] ?>">

<option>Male</option>
<option>Female</option>

</select>
<br><br>
<input
type="date"
name="birthday" value="<?= $row['birthday'] ?>">
<br><br>
<input
type="text"
name="birth_place"
placeholder="Birth Place" value="<?=  $row['birth_place'] ?>">

<br><br>
<input
type="text"
name="civil_status"
placeholder="Civil Status" value="<?= $row['civil_status'] ?>">

<br><br>
<input
type="text"
name="religion"
placeholder="Religion" value="<?= $row['religion'] ?>">
<br><br>
<input
type="text"
name="contact_number"
placeholder="Contact Number" value="<?=  $row['contact_number'] ?>">

<br><br>

<input
type="text"
name="zone"
placeholder="Zone" value="<?= $row['zone'] ?>">
<br><br>

<input
type="text"
name="occupation"
value="<?= $row['occupation'] ?>">

<br><br>

<input
type="email"
name="email"
value="<?= $row['email'] ?>">

<br><br>

<button type="submit">
Update Citizen
</button>

</form>