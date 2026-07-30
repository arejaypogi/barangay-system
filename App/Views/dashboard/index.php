
<?php require_once __DIR__.'/../layouts/header.php'; ?>
<?php require_once __DIR__.'/../layouts/sidebar.php'; ?>

<h2>Dashboard</h2>

<div class="row">

<div class="col-md-3 mb-3">
<div class="card">
<div class="card-body">

<h2><?= $totalCitizens['total'] ?></h2>

<p>Total Citizens</p>

</div>
</div>
</div>

<div class="col-md-3 mb-3">
<div class="card">
<div class="card-body">

<h2><?= $male['total'] ?></h2>

<p>Male</p>

</div>
</div>
</div>

<div class="col-md-3 mb-3">
<div class="card">
<div class="card-body">

<h2><?= $female['total'] ?></h2>

<p>Female</p>

</div>
</div>
</div>

<div class="col-md-3 mb-3">
<div class="card">
<div class="card-body">

<h2><?= $senior['total'] ?></h2>

<p>Senior Citizens</p>

</div>
</div>
</div>

<div class="col-md-3 mb-3">
<div class="card">
<div class="card-body">

<h2><?= $voters['total'] ?></h2>

<p>Registered Voters</p>

</div>
</div>
</div>


<div class="col-md-3 mb-3">
<div class="card">
<div class="card-body">

<h2><?= $documents['total'] ?></h2>

<p>Documents Issued</p>

</div>
    </div>
    </div>

    <div class="col-md-3 mb-3">
    <div class="card">
    <div class="card-body">

    <h2><?= $household['total'] ?></h2>

    <p>Households</p>

    </div>
    </div>
</div>

</div>

<h3>Citizens by Zone</h3>

<table class="table table-bordered">

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





<h3>Recent Documents</h3>

<table class="table table-striped">

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





<?php require_once __DIR__.'/../layouts/footer.php'; ?>