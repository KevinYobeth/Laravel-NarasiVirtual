<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use RealRashid\SweetAlert\Facades\Alert;

use App\Ticket;
use App\Status;
use ZipArchive;

class CertificateController extends Controller
{
    public function index()
    {
        return view('certificate.index');
    }

    public function showCertificate(Request $r)
    {
        $certificates = Ticket::where('email', $r->email)
            ->groupBy('name', 'seminarID')
            ->orderBy('id')->get();

        if (count($certificates) == 0) {
            Alert::error('Email Not Found!', 'Make sure you enter the email used in exit ticket.');
            return back();
        }

        $folderName = explode("@", $r->email);

        if (!Storage::disk('local')->exists('public/certif/' . $folderName[0])) {
            Storage::disk('local')->makeDirectory('public/certif/' . $folderName[0]);

            for ($i = 0; $i < count($certificates); $i++) {

                $seminar = array("EXPYSL", "CPTEMT");
                $klasik = array("MTHAWR", "SLFLVE", "VRTEXH", "INSPBN");
                $kotor = array("BTYPRT", "SLFPRT", "ARTOBW", "FLMPHT", "VTLPHS");

                if (in_array($certificates[$i]->seminarID, $seminar)) {

                    if ($certificates[$i]->seminarID == "EXPYSL")
                        $img = Image::make(Storage::disk('local')->get('public/certif/HANA.jpg'));
                    else if ($certificates[$i]->seminarID == 'CPTEMT')
                        $img = Image::make(Storage::disk('local')->get('public/certif/AMANDA.jpg'));
                } else if (in_array($certificates[$i]->seminarID, $klasik)) {

                    $img = Image::make(Storage::disk('local')->get('public/certif/KLASIK.jpg'));
                } else if (in_array($certificates[$i]->seminarID, $kotor)) {
                    $img = Image::make(Storage::disk('local')->get('public/certif/KOTOR.jpg'));
                }

                $img->text(strtoupper($certificates[$i]->name), 1754, 1060, function ($font) {
                    $font->file(public_path('fonts/Raleway-bold.ttf'));
                    $font->size(120);
                    $font->color('#000');
                    $font->align('center');
                    $font->valign('top');
                });

                $event = Status::where('slug', $certificates[$i]->seminarID)->firstOrFail();

                $img->text($event->eventName, 1754, 1380, function ($font) {
                    $font->file(public_path('fonts/Raleway-medium.ttf'));
                    $font->size(90);
                    $font->color('#000');
                    $font->align('center');
                    $font->valign('top');
                });

                error_log($folderName[0] . '/' . $event->eventName . '.jpg');

                Storage::disk('local')->put('public/certif/' . $folderName[0] . '/' . $certificates[$i]->name . ' - ' . $event->eventName . '.jpg', (string) $img->encode());
            }

            $certifs = Storage::allfiles('public/certif/' . $folderName[0]);
        } else {

            $certifs = Storage::allfiles('public/certif/' . $folderName[0]);
        }

        return view('certificate.show', ['certificates' => $certificates, 'certifs' => $certifs, 'folderName' => $folderName[0]]);
    }

    public function downloadCertificate($filepath)
    {
        return Storage::download($filepath);
    }

    public function downloadZip($folderName)
    {
        $zip = new ZipArchive();

        error_log($folderName);

        $fileName = 'storage/certif/' . $folderName . '/E-Certificate.zip';

        if ($zip->open($fileName, ZipArchive::CREATE)) {
            $files = Storage::files('public/certif/' . $folderName);

            foreach ($files as $key => $value) {

                $relativeName = basename($value);

                $zip->addFile(str_replace('public', 'storage', $value), $relativeName);
            }
            $zip->close();
        }

        return response()->download(public_path('storage/certif/' . $folderName . '/E-Certificate.zip'), 'E-Certificate NARASI 2020.zip');
    }
}
