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
            $user = Auth::user();

            $fileName = str_replace(' ', '', $user->name) . '_' . time() . '_' . $req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('submission', $fileName, 'public');


            $fileModel->userID = Auth::id();
            $fileModel->filePath = '/storage/' . $filePath;
            $fileModel->fileName = str_replace(' ', '', $user->name) . '_' . time() . '_' . $req->file->getClientOriginalName();
            $fileModel->title = $req->title;
            $fileModel->story = $req->story;

            $exif = Image::make('storage/' . $filePath)->exif();
            $fileModel->exif = $exif;

            $mssg = '';
            if (!$exif) {
                $mssg = 'Input valid EXIF';
            }

            return view('submission.verify', [
                'file' => $fileModel,
                'mssg' => $mssg,
            ]);
        }
    }

    public function verify(Request $request)
    {
        $data = $request->all();

        $fileModel = new Submission;

        $fileModel->userID = $data['userID'];
        $fileModel->filePath = $data['filePath'];
        $fileModel->fileName = $data['fileName'];
        $fileModel->title = $data['title'];
        $fileModel->story = $data['story'];
        $fileModel->exifF = $data['exif-f'];
        $fileModel->exifSS = $data['exif-ss'];
        $fileModel->exifISO = $data['exif-iso'];

        $fileModel->save();

        return view('submission.success');
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
