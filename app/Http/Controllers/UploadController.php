<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;
use App\Models\Comment;
use App\Models\Like;

class UploadController extends Controller
{
    public function showForm() {
        return view('upload');
    }

    public function store(Request $request) {
        $request->validate([
            'guest_name' => 'required|string|max:255',
            'caption' => 'nullable|string',
            'file' => 'required|mimes:jpg,jpeg,png,mp4,mov,avi,mkv|max:102400', 
        ]);

        try {
            $file = $request->file('file');
            $path = $file->store('uploads', 'public');

            Upload::create([
                'guest_name' => $request->guest_name,
                'caption' => $request->caption,
                'file_path' => $path,
                'file_type' => strtolower($file->getClientOriginalExtension()),
            ]);

            return back()->with('success', 'Uploaded successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Upload failed: ' . $e->getMessage());
        }
    }

    public function showBlog() {
        $posts = Upload::with(['comments', 'likes'])->latest()->get();
        return view('blog', compact('posts'));
    }

    public function storeComment(Request $request, $id) {
        $validated = $request->validate([
            'guest_name' => 'required|string|max:255',
            'content' => 'required|string|max:2000',
        ]);

        Comment::create([
            'upload_id' => $id,
            'guest_name' => $validated['guest_name'],
            'content' => $validated['content'],
        ]);

        return back()->with('success', 'Comment added successfully!');
    }

 public function storeLike(Request $request, $id) {
    $upload = Upload::findOrFail($id);
    $upload->likes()->create([]);
    return response()->json([
        'likes_count' => $upload->likes()->count()
    ]);
}
}
