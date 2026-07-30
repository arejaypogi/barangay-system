<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Citizen;
use App\Models\Official;
use App\Models\Clearance;
use App\Models\Setting;
use Dompdf\Dompdf;

class ClearanceController extends Controller{

    public function create(){
        $citizenMode = new Citizen();

        $citizen = $citizenMode->find($_GET['id']);

        require_once __DIR__ . '/../Views/clearances/create.php';
    }

    public function generate(){
        $citizenModel = new Citizen();
        $officialModel = new Official();
        $clearanceModel = new Clearance();
        $settingModel = new Setting();

        $citizen = $citizenModel->find($_POST['citizen_id']);
        $captain = $officialModel->getActiveCaptain();
        $setting = $settingModel->get();

        $last = $clearanceModel->getLastId();

        $next = ($last['last_id'] ?? 0) + 1;

        $clearanceNo =
            'BC-' .
            date('Y') .
            '-' .
            str_pad(
                $next,
                6,
                '0',
                STR_PAD_LEFT
            );

         $clearanceModel->create(['citizen_id' => $citizen['id'],
            'clearance_no' => $clearanceNo,
            'purpose' => $_POST['purpose'],'issued_date' => date('Y-m-d')
    ]);
        $age = date_diff(
            date_create($citizen['birthday']),
            date_create('today')
        )->y;

    $html = "

<div style='text-align:center'>

<h4>
Republic of the Philippines
</h4>

<h4>
Province of {$setting['province']}
</h4>

<h4>
Municipality of {$setting['municipality']}
</h4>

<h3>
{$setting['barangay_name']}
</h3>

<hr>

<h2>
BARANGAY CLEARANCE
</h2>

</div>

<br>

Control No:
{$clearanceNo}

<br><br>

TO WHOM IT MAY CONCERN:

<br><br>

This is to certify that

<b>
{$citizen['first_name']}
{$citizen['middle_name']}
{$citizen['last_name']}
</b>

aged

<b>{$age}</b>

years old, is a bona fide resident
of this barangay.

<br><br>

This certification is issued upon
his/her request for:

<b>{$_POST['purpose']}</b>

<br><br><br>

Issued this
".date('F d, Y').".

<br><br><br><br>

<div style='text-align:right;'>

<b>
{$captain['first_name']}
{$captain['last_name']}
</b>

<br>

Barangay Captain

</div>
";

        $dompdf = new Dompdf();

        $dompdf->loadHtml($html);

        $dompdf->setPaper(
            'A4',
            'portrait'
        );

        $dompdf->render();

        $dompdf->stream(
            $clearanceNo . '.pdf',
            [
                'Attachment' => false
            ]
        );


        exit;
    
    }

}