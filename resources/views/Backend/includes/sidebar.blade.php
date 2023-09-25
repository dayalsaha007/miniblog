<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ route('Backend.index') }}">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">CORE</div>


                @if(Auth::user()->role == \app\Models\User::ADMIN)
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon">
                    <i class="fas fa-columns"></i>
                </div>
                Category
                <div class="sb-sidenav-collapse-arrow">
                    <i class="fas fa-angle-down"></i>
                </div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('category.index') }}">List Category</a>
                    <a class="nav-link" href="{{ route('category.create') }}">Add Category</a>
                </nav>
            </div>

            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#sub_category"
                aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon">
                    <i class="fas fa-columns"></i>
                </div>
                Sub Category
                <div class="sb-sidenav-collapse-arrow">
                    <i class="fas fa-angle-down"></i>
                </div>
            </a>
            <div class="collapse" id="sub_category" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('sub_category.index') }}">List Tag</a>
                    <a class="nav-link" href="{{ route('sub_category.create') }}">Add Tag</a>
                </nav>
            </div>

            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#tag"
                aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon">
                    <i class="fas fa-columns"></i>
                </div>
                Tag
                <div class="sb-sidenav-collapse-arrow">
                    <i class="fas fa-angle-down"></i>
                </div>
            </a>
            <div class="collapse" id="tag" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('tag.index') }}">List Tag</a>
                    <a class="nav-link" href="{{ route('tag.create') }}">Add Tag</a>
                </nav>
            </div>
                @endif





                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#post"
                aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon">
                    <i class="fas fa-columns"></i>
                </div>
                Post
                <div class="sb-sidenav-collapse-arrow">
                    <i class="fas fa-angle-down"></i>
                </div>
                </a>
                <div class="collapse" id="post" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('post.index') }}">List Post</a>
                        <a class="nav-link" href="{{ route('post.create') }}">Add Post</a>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as: <span class="text-danger text-bold">{{ Auth::user()->name }}</span> </div>
        </div>
    </nav>
</div>
