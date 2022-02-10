<?php

namespace App\Http\Controllers;

use App\Certificate;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class CertificateController extends Controller
{
    //

    public function status($uuid)
    {
        $certificate = Certificate::where("uuid",$uuid)->first();

        if (is_null($certificate))
            return view('certificate-not-found');

        Log::info(print_r($certificate->toArray(),true));

        return view("status",compact('certificate'));
    }

    public function registration(Request $request)
    {

        $uuid = Str::uuid();
        Certificate::create([
            "uuid" => $uuid,
            "full_name" => $request->first_name . " " . $request->second_name . " " . $request->last_name,
            "passport" => $request->passport,
            "birthday" => $request->birthday,
            "snils" => $request->snils,
            "oms" => $request->oms ?? '',
            "international_passport" => $request->international_passport ?? '',
            "sex" => $request->sex,
            "unrz_number" => $request->unrz_number,
            "drug_name" => $request->drug_name,
            "drug_creator" => $request->drug_creator,
            "drug_serial" => $request->drug_serial,
            "medical_organization" => $request->medical_center,
            "drug_creation_date" => Carbon::now(),
            "disease_information" => null,
            "cert_number" => $request->cert_number,
        ]);

        return response()->json([
            "example_link" => "/vaccine/example/$uuid",
            "certificate_link" => "/covid-cert/status/$uuid"
        ]);
    }

    public function certificateForm()
    {
        return view('certificate-form');
    }

    public function search(Request $request)
    {
        $certificate = Certificate::where("cert_number",$request->cert_number)->first();

        if (is_null($certificate))
            return response()->json([],404);

        return response()->json([
            "example_link" => "/vaccine/example/$certificate->uuid",
            "certificate_link" => "/covid-cert/status/$certificate->uuid"
        ]);
    }

    public function example($uuid)
    {
        $certificate = Certificate::where("uuid",$uuid)->first();

        if (is_null($certificate))
            return view('certificate-not-found');

        return view('certificate-example',compact('certificate'));
    }

    public function download(): \Illuminate\Http\Response
    {
        $products = [
            ['title' => 'Product 1', 'price' => 10.99, 'quantity' => 1, 'totals' => 10.99],
            ['title' => 'Product 2', 'price' => 14.99, 'quantity' => 2, 'totals' => 29.98],
            ['title' => 'Product 3', 'price' => 500.00, 'quantity' => 1, 'totals' => 500.00],
            ['title' => 'Product 4', 'price' => 6.99, 'quantity' => 3, 'totals' => 20.97],
        ];

        $total = collect($products)->sum('totals');

        $pdf = PDF::loadView('certificate', compact('products', 'total'),
            [], 'UTF-8');

        return $pdf->download('certificate.pdf');
    }
}
