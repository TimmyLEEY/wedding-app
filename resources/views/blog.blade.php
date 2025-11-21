@extends('layouts.app')

@section('content')
<div class="container-fluid min-vh-100 py-4" style="background-color: #0D1117; color: #C9D1D9;">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <h2 class="mb-4 fw-bold" style="color: #FFFFFF;">Wedding Blog Feed</h2>

            @foreach($posts as $post)
                <div class="card mb-4 shadow-sm" style="background-color: #161B22; border-radius: 15px; border: none;">
                    <div class="card-body p-3">

                        {{-- Post Header --}}
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o=') }}" 
                                     class="rounded-circle me-2" width="50" height="50">
                                <div>
                                    <strong style="color: #FFFFFF;">{{ $post->guest_name }}</strong><br>
                                    <small style="color: #8B949E;">{{ $post->created_at->diffForHumans() }}</small>
                                </div>
                            </div>
                            <div class="text-muted" style="cursor: pointer;">&#8942;</div>
                        </div>

                        {{-- Caption --}}
                        @if($post->caption)
                            <p style="color: #C9D1D9; font-size: 0.95rem;">{{ $post->caption }}</p>
                        @endif

                        {{-- Media --}}
                        @if(in_array($post->file_type, ['jpg','jpeg','png']))
                            <img src="{{ asset('storage/'.$post->file_path) }}" 
                                 class="img-fluid rounded-3 mb-3" 
                                 style="max-height: 500px; object-fit: cover;">
                        @elseif(in_array($post->file_type, ['mp4','mov','webm']))
                            <video class="img-fluid rounded-3 mb-2" controls style="max-height: 500px;">
                                <source src="{{ asset('storage/'.$post->file_path) }}">
                            </video>

                            {{-- Video Download Button --}}
                            <a href="{{ asset('storage/'.$post->file_path) }}" download
                               class="btn btn-sm btn-outline-light mb-3">
                               <i class="bi bi-download me-1"></i> Save Video
                            </a>
                        @endif

                        {{-- Interactions --}}
                        <div class="d-flex align-items-center justify-content-start mb-3 gap-3">
                            <button type="button" class="btn btn-sm btn-like d-flex align-items-center" data-id="{{ $post->id }}" style="background-color: transparent; border: none; color:#8B949E;">
                                <i class="bi bi-heart-fill me-1"></i> <span class="likes-count">{{ $post->likes_count ?? 0 }}</span>
                            </button>
                            <span style="color:#8B949E;">{{ $post->comments->count() }} comments</span>
                        </div>

                        {{-- Comments Preview --}}
                        <div class="mb-3" style="max-height: 180px; overflow-y: auto; border-top:1px solid #30363D; padding-top: 10px;">
                            @foreach($post->comments->take(3) as $comment)
                                <p class="mb-1" style="font-size: 0.9rem;">
                                    <strong style="color:#FFFFFF;">{{ $comment->guest_name }}:</strong> 
                                    <span style="color:#C9D1D9;">{{ $comment->content }}</span>
                                </p>
                            @endforeach
                            @if($post->comments->count() > 3)
                                <small style="color:#8B949E;">View all {{ $post->comments->count() }} comments...</small>
                            @endif
                        </div>

                        {{-- Comment Form --}}
                        <form action="{{ route('comments.store', $post->id) }}" method="POST" class="mt-2">
                            @csrf
                            <div class="d-flex gap-2 mb-2">
                                <input type="text" name="guest_name" placeholder="Your name" class="form-control form-control-dark" required>
                                <button type="submit" class="btn btn-primary" style="border-radius:20px;">Comment</button>
                            </div>
                            <textarea name="content" placeholder="Write a comment..." class="form-control-dark mb-1" rows="2" required></textarea>
                        </form>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>

{{-- AJAX for Likes --}}
<script>
document.querySelectorAll('.btn-like').forEach(button => {
    button.addEventListener('click', function() {
        const postId = this.dataset.id;
        const likesCountSpan = this.querySelector('.likes-count');

        fetch(`/likes/${postId}`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json'
            }
        })
        .then(res => res.json())
        .then(data => {
            likesCountSpan.textContent = data.likes_count;
        })
        .catch(err => console.error(err));
    });
});
</script>

<style>
/* Dark Facebook-like enhancements */
.form-control-dark {
    background-color: #161B22 !important;
    color: #C9D1D9 !important;
    border-radius: 15px;
    border: 1px solid #30363D;
    padding: 10px;
}

/* Fully visible placeholder */
.form-control-dark::placeholder {
    color: #C9D1D9 !important;
    opacity: 1 !important;
}

/* Scrollbar for comments preview */
::-webkit-scrollbar {
    width: 6px;
}
::-webkit-scrollbar-track {
    background: #161B22;
}
::-webkit-scrollbar-thumb {
    background-color: #30363D;
    border-radius: 3px;
}

/* Card text colors */
.card-body p, .card-body span {
    color: #C9D1D9;
}
.card-body strong {
    color: #FFFFFF;
}
</style>
@endsection
