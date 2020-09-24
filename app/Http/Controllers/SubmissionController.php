<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Submission;

class SubmissionController extends Controller
{
    public function index()
    {
        return view('submission');
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
            $fileModel->exif = $req->exif;

            $fileModel->save();

            return back()
                ->with('success', 'File has been uploaded.')
                ->with('file', $fileName);
        }
    }

    public function view()
    {
        $submission = Submission::all();

        return view('viewSubmission', [
            'submissions' => $submission,
        ]);
    }

    public function getFile($fileName)
    {

        return response()->download(storage_path("app/public/submission/{$fileName}"));
        // $file = Storage::disk('submission')->get($fileName);
        // return (Response($file, 200))->header('Content-Type', 'image/jpeg');
    }
}
