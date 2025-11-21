@extends('layouts.app')

@section('content')
<div class="container mt-5 d-flex justify-content-center">
    <div class="w-100" style="max-width: 600px;">
        <div class="card bg-dark text-white shadow-sm rounded-4 p-4">
            <h2 class="mb-4 fw-bold" style="color: #FFFFFF;">Upload Your Photo or Video</h2>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form action="{{ url('/post') }}" method="POST" enctype="multipart/form-data" class="d-flex flex-column gap-3">
                @csrf

                <input type="text" name="guest_name" placeholder="Your Name" required
                    class="form-control dark-input">

                <input type="text" name="caption" placeholder="Caption (optional)"
                    class="form-control dark-input">

                <label for="file-upload" class="file-label">
                    <i class="bi bi-upload me-2"></i> Choose file
                </label>
                <input type="file" name="file" id="file-upload" required class="d-none">

                <button type="submit" class="btn upload-btn">Upload</button>
            </form>
        </div>
    </div>
</div>

<style>
    /* Card background and shadows */
    .card.bg-dark {
        background-color: #161B22;
        border: none;
    }

    /* Inputs */
    .dark-input {
        background-color: #0D1117;
        color: #C9D1D9;
        border: 1px solid #30363D;
        border-radius: 25px;
        padding: 10px 15px;
    }

    .dark-input::placeholder {
        color: #8B949E;
        opacity: 1;
    }

    .dark-input:focus {
        outline: none;
        border-color: #1DA1F2;
        box-shadow: 0 0 0 2px rgba(29, 161, 242, 0.25);
    }

    /* Custom file upload button */
    .file-label {
        display: inline-block;
        width: 100%;
        padding: 10px 15px;
        border-radius: 25px;
        background-color: #0D1117;
        border: 1px solid #30363D;
        color: #C9D1D9;
        text-align: center;
        cursor: pointer;
        transition: background-color 0.2s, border-color 0.2s;
    }

    .file-label:hover {
        background-color: #1A1F28;
        border-color: #1DA1F2;
        color: #1DA1F2;
    }

    /* Submit button */
    .upload-btn {
        background-color: #1DA1F2;
        color: #fff;
        border-radius: 25px;
        font-weight: 600;
        padding: 10px 0;
        transition: background-color 0.2s;
    }

    .upload-btn:hover {
        background-color: #0d8ddb;
    }
</style>
@endsection
