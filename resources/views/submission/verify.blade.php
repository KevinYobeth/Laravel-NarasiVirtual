<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    {{-- 
    $fileName = time() . '_' . $req->file->getClientOriginalName();
    $filePath = $req->file('file')->storeAs('submission', $fileName, 'public');

    $fileModel->userID = Auth::id();
    $fileModel->filePath = '/storage/' . $filePath;
    $fileModel->fileName = time() . '_' . $req->file->getClientOriginalName();
    $fileModel->title = $req->title;
    $fileModel->story = $req->story;

    // $fileModel->save();

    $exif = Image::make('storage/' . $filePath)->exif();
    $fileModel->exif = $exif; --}}

    @if(!empty($mssg))
        <div class="alert alert-danger" role="alert">
            {{ $mssg }}
        </div>
    @endif

    <img src="{{ url($file->filePath) }}" alt="" width="200px">

    <form action="/verifySubmission" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="title">Title</label>
        <input class="form-group" type="text" value="{{ $file->title }}" name="title">
        <br>

        <label for="story">story</label>
        <input class="form-group" type="text" value="{{ $file->story }}" name="story">
        <br>

        <label for="exif-f">F (Aperture)</label>
        <input class="form-group" type="text"
            value="{{ $file->exif["FNumber"] ?? '' }}"
            name="exif-f" oninvalid="this.setCustomValidity('Enter F Number')" required>
        <br>

        <label for=" exif-ss">SS (Shutter Speed)</label>
        <input class="form-group" type="text"
            value="{{ $file->exif["ExposureTime"] ?? '' }}"
            name="exif-ss" oninvalid="this.setCustomValidity('Enter SS Number')" required>
        <br>

        <label for="exif-iso">ISO</label>
        <input class="form-group" type="text"
            value="{{ $file->exif["ISOSpeedRatings"] ?? '' }}"
            name="exif-iso" oninvalid="this.setCustomValidity('Enter ISO Number')" required>
        <br>

        <input type="hidden" name="title" value="{{ $file->title }}">
        <input type="hidden" name="title" value="{{ $file->title }}">
        <input type="hidden" name="story" value="{{ $file->story }}">
        <input type="hidden" name="userID" value="{{ $file->userID }}">
        <input type="hidden" name="filePath" value="{{ $file->filePath }}">
        <input type="hidden" name="fileName"
            value="{{ str_replace(' ', '', $file->fileName) }}">

        <button type="submit">Submit</button>
    </form>
    {{-- 
    <p>{{ $file->userID }}</p>
    <p>{{ $file->filePath }}</p>
    <p>{{ $file->fileName }}</p>
    <p>{{ $file->title }}</p>
    <p>{{ $file->story }}</p>
    <p>{{ $file->exif["ExposureTime"] }}</p>
    <p>{{ $file->exif["FNumber"] }}</p>
    <p>{{ $file->exif["ISOSpeedRatings"] }}</p> --}}


</body>

</html>
