<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <title>Laravel File Upload</title>
    <style>
        .container {
            max-width: 500px;
        }

        dl,
        ol,
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

    </style>
</head>

<body>

    <div class="container mt-5">

        @foreach($submissions as $submission)
            <img src="{{ url($submission->filePath) }}" alt="" width="200px">
            <p>User ID: {{ $submission->userID }}</p>
            <p>Photo ID: {{ $submission->id }}</p>
            <p>File Name: {{ $submission->fileName }}</p>
            <p>Title: {{ $submission->title }}</p>
            <p>Story: {{ $submission->story }}</p>
            <p>EXIF: {{ $submission->exif }}</p>
            <a href="{{ route('getfile', $submission->fileName) }}">
                <button>Download</button></a>
            <br>
        @endforeach

    </div>

</body>

</html>
