<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use App\Submission;

class SubmissionController extends Controller
{
    public function index()
    {
        return view('submission.index');
    }

    public function fileUpload(Request $req)
    {
        // Reference: https://www.positronx.io/laravel-file-upload-with-validation/
        $req->validate([
            'file' => 'required|mimes:jpeg,png,jpg|max:2048'
        ]);

        $fileModel = new Submission;

        if ($req->file()) {
            $fileName = time() . '_' . $req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('submission', $fileName, 'public');

            $fileModel->userID = Auth::id();
            $fileModel->filePath = '/storage/' . $filePath;
            $fileModel->fileName = time() . '_' . $req->file->getClientOriginalName();
            $fileModel->title = $req->title;
            $fileModel->story = $req->story;

            // $fileModel->save();

            $exif = Image::make('storage/' . $filePath)->exif();
            $fileModel->exif = $exif;

            // dd($exif["ExposureTime"]);
            // dd($exif["FNumber"]);
            // dd($exif["ISOSpeedRatings"]);

            $mssg = '';
            if (!$exif) {
                $mssg = 'Input valid EXIF';
            }

            return view('submission.verify', [
                'file' => $fileModel,
                'mssg' => $mssg,
            ]);

            return back()
                ->with('success', 'File has been uploaded.')
                ->with('file', $fileName);
        }
    }

    public function view()
    {
        $submission = Submission::all();

        return view('submission.view', [
            'submissions' => $submission,
        ]);
    }

    public function getFile($fileName)
    {

        return response()->download(storage_path("app/public/submission/{$fileName}"));
    }
}
