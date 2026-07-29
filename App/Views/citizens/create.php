<h2>Register Citizen</h2>

<form
method="POST"
action="/barangay-system/public/citizens/store"
enctype="multipart/form-data">

<input
type="text"
name="first_name"
placeholder="First Name"
required>

<br><br>

<input
type="text"
name="middle_name"
placeholder="Middle Name">

<br><br>

<input
type="text"
name="last_name"
placeholder="Last Name"
required>

<br><br>

<select name="gender">

<option>Male</option>
<option>Female</option>

</select>

<br><br>

<input
type="date"
name="birthday">

<br><br>

<input
type="text"
name="birth_place"
placeholder="Birth Place">

<br><br>

<input
type="text"
name="civil_status"
placeholder="Civil Status">

<br><br>

<input
type="text"
name="religion"
placeholder="Religion">

<br><br>

<input
type="text"
name="occupation"
placeholder="Occupation">

<br><br>

<input
type="text"
name="contact_number"
placeholder="Contact Number">

<br><br>

<input
type="text"
name="zone"
placeholder="Zone">

<br><br>

<input
type="email"
name="email"
placeholder="Email">

<br><br>

<input
type="file"
name="photo">

<br><br>

<button type="submit">
Save Citizen
</button>

</form>