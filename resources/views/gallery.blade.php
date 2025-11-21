@foreach($uploads as $upload)

    <div style="margin-bottom:20px;">

        <p><strong>{{ $upload->guest_name }}</strong></p>
        <p>{{ $upload->caption }}</p>

        @if(in_array($upload->file_type, ['mp4','mov','avi','mkv']))
            <video width="400" controls>
                <source src="{{ asset('storage/' . $upload->file_path) }}">
            </video>
        @else
            <img src="{{ asset('storage/' . $upload->file_path) }}" width="400">
        @endif

    </div>

@endforeach
