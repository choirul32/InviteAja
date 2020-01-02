@section('navbar-side')
<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.home.index') }}" ><i class="fas fa-f fa-folder"></i>Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.bride.index') }}" ><i class="fas fa-f fa-folder"></i></i>Bride</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.templates.index') }}" ><i class="fas fa-f fa-folder"></i></i>Template</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.event.index') }}" ><i class="fas fa-f fa-folder"></i></i>Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.comment.index') }}" ><i class="fas fa-f fa-folder"></i></i>Comment</a>      
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.gallery.index') }}" ><i class="fas fa-f fa-folder"></i></i>Gallery</a>   
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.invitationinfo.index') }}" ><i class="fas fa-f fa-folder"></i></i>Invitation Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.location.index') }}" ><i class="fas fa-f fa-folder"></i></i>Location</a>           
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.quote.index') }}" ><i class="fas fa-f fa-folder"></i></i>Quote</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.users.index') }}" ><i class="fas fa-f fa-folder"></i></i>User</a>     
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
@endsection