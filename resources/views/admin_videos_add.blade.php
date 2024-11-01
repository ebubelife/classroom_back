@extends('layouts.main')

@section('content')

<main class="flex-1 p-6">
@if (session('success'))
    <div class="max-w-3xl mx-auto bg-green-500 text-white p-4 rounded-lg mb-6">
        {!! session('success') !!}
    </div>
@endif

@if ($errors->any())
    <div class="max-w-3xl mx-auto bg-red-500 text-white p-4 rounded-lg mb-6">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="max-w-3xl mx-auto bg-gray-800 text-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold mb-6">Upload Video</h2>

        <!-- Video Type Selection -->
      <div class="mb-4 hidden">
            <label for="videoType" class="block text-sm font-medium text-gray-300 mt-6">Select Video Source:</label>
            <select id="videoType" class="w-full p-3 bg-gray-700 text-gray-200 focus:outline-none rounded-md appearance-none styled-select" onchange="toggleUploadMethod()" name="video_source" required>
                <option value="" disabled selected hidden>Choose a source...</option>
                <option value="youtube" selected>YouTube</option>
                <option value="local">Local Upload</option>
            </select>
        </div>

        <div id="title" class="mb-4  mt-6">
            <label for="title" class="block text-sm font-medium text-gray-300 mb-2">Video Title:</label>
            <input type="text" id="title" rows="3" class="w-full p-3 rounded-md bg-gray-700  styled-select text-black focus:outline-none"  name="title"/>
        </div>

        <!-- YouTube Embed Link Input -->
        <div id="youtubeField" class="mb-4 hidden mt-6">
            <label for="youtubeLink" class="block text-sm font-medium text-gray-300 mb-2">YouTube Embed Link:</label>
            <textarea id="youtubeLink" rows="3" class="w-full p-3 rounded-md bg-gray-700  styled-select text-black focus:outline-none" placeholder="Enter YouTube embed link here..." name="youtube_link"></textarea>
        </div>

        <label for="subjects">Select Subject:</label><br>
        <select id="subjects" class="styled-select" name="subject" required>
            <option value="" disabled selected hidden>Choose a subject...</option>

            @foreach($subjects as $subject)
            <option value="{{ $subject->subject }}">{{ $subject->subject }}</option>
           

            @endforeach
        </select>
        <br><br>

        <label for="exam">Select Exam:</label><br>
        <select id="exam" class="styled-select" name="exam" required>
            <option value="" disabled selected hidden>Choose an exam...</option>
            <option value="waec">WAEC</option>
            <option value="neco">NECO</option>
            <option value="jamb">JAMB</option>
            <option value="all">ALL</option>
        </select>
        <br><br>

        <label for="class">Select Class:</label><br>
        <select id="class" class="styled-select" name="class" required>
            <option value="" disabled selected hidden>Choose a class...</option>
            <option value="ss1">SS1</option>
            <option value="ss2">SS2</option>
            <option value="ss3">SS3</option>
        </select>
        <br><br>

        <!-- Local File Upload -->
        <div id="localUploadField" class="mb-4 hidden">
            <label for="videoUpload" class="block text-sm font-medium text-gray-300 mb-2">Upload Video File:</label>
            <div id="dropzone" class="cursor-pointer w-full border-2 border-dashed border-gray-600 rounded-md p-6 flex items-center justify-center bg-gray-700 text-gray-400 cursor-pointer hover:bg-gray-600 transition">
                <input type="file" id="videoUpload" accept="video/mp4, video/avi, video/mkv, video/webm" class="hidden" name="video_file" onchange="handleFileSelect(event)">
                <p id="dropzoneText" class="cursor-pointer">Drag & Drop video here or click to select</p>
            </div>
        </div>

        <!-- Upload Button -->
        <button type="submit" class="w-full mt-6 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-500 transition">Add Video</button>
    </div>
</form>

</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const videoType = 'youtube';
        const youtubeField = document.getElementById('youtubeField');
        const localUploadField = document.getElementById('localUploadField');

        if (videoType === 'youtube') {
            youtubeField.classList.remove('hidden');
            localUploadField.classList.add('hidden');
        } else if (videoType === 'local') {
            youtubeField.classList.add('hidden');
            localUploadField.classList.remove('hidden');
        } else {
            youtubeField.classList.add('hidden');
            localUploadField.classList.add('hidden');
        }
    });
</script>


<script>
    // Toggle visibility based on video type selection
    function toggleUploadMethod() {
        const videoType = document.getElementById('videoType').value;
        const youtubeField = document.getElementById('youtubeField');
        const localUploadField = document.getElementById('localUploadField');

       

        if (videoType === 'youtube') {
            youtubeField.classList.remove('hidden');
            localUploadField.classList.add('hidden');
        } else if (videoType === 'local') {
            youtubeField.classList.add('hidden');
            localUploadField.classList.remove('hidden');
        } else {
            youtubeField.classList.add('hidden');
            localUploadField.classList.add('hidden');
        }
    }

    // Handle drag-and-drop text change when a file is selected
    function handleFileSelect(event) {
        const fileInput = event.target;
        const dropzoneText = document.getElementById('dropzoneText');
        
        if (fileInput.files.length > 0) {
            const fileName = fileInput.files[0].name;
            dropzoneText.textContent = `Selected file: ${fileName}`;
        } else {
            dropzoneText.textContent = "Drag & Drop video here or click to select";
        }
    }

    // Drag and Drop functionality
    document.getElementById('dropzone').addEventListener('click', () => {
        document.getElementById('videoUpload').click();
    });
</script>

@endsection
