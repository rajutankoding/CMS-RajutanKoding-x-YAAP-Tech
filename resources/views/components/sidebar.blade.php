<div class="sidebar">
    <ul class="menu w-56 rounded-box">
        <li class="hover-bordered {{ (request()-> is('/post')) ? 'aktif' : '' }}"><a href="{{ route('postAdmin') }}">Post</a></li>
        <li class="hover-bordered {{ (request()-> is('/post')) ? 'aktif' : '' }}"><a href="{{ route('addAdmin') }}">Add</a></li>
    </ul>
</div>
