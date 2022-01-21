<div class="col-2 flex-column bg-dark text-light d-inline-block h-100">
    <h3 class="flex-shrink-0 pt-5">DASHBOARD</h3>
    <div class="flex-grow-1 pt-3">
        <ul class="list-unstyled">
            <li class="py-2">
                <a href="{{ route('admin.posts.index') }}" class="text-light">I tuoi post</a>
            </li>

            <li class="py-2">
                <a href="{{ route('admin.posts.create') }}" class="text-light">Crea un nuovo post</a>
            </li>
            
            <li class="py-2">
                <a href="{{ view('home') }}" class="text-light">Area pubblica</a>
            </li>
        </ul>
    </div>
</div>