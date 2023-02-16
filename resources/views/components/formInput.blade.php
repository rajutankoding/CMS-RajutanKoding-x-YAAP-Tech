<form method="POST" action="{{route('addContent')}}">
    @csrf
    <div class="add-content">
        <div class="title w-full">
            <label class="label">
                <span>Title</span>
            </label>
            <input type="text" name="title" placeholder="Type here" class="input bg-coklat input-bordered w-full max-w-xs" />
            {{-- <label class="label">
                <span class="label-text-alt">Alt label</span>
                <span class="label-text-alt">Alt label</span>
            </label> --}}
        </div>
        <br>
        <div class="content">
            <label class="label">
                <span>Content</span>
            </label>
            <textarea name="content" class="w-full bg-coklat textarea textarea-bordered h-24" placeholder="Type here..."></textarea>
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-outline btn-coklat">Submit</button>
</form>

