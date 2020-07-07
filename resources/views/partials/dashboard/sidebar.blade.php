<div class="dash-nav dash-nav-dark">
    <header>
        <a href="#!" class="menu-toggle">
            <i class="fas fa-bars"></i>
        </a>
        <a href="index.html" class="easion-logo"><i class="fas fa-sun"></i> <span>Easion</span></a>
    </header>
    <nav class="dash-nav-list">
        <a href="index.html" class="dash-nav-item">
            <i class="fas fa-home"></i> Dashboard </a>
        <div class="dash-nav-dropdown">
            <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                <i class="fas fa-chart-bar"></i> Category </a>
            <div class="dash-nav-dropdown-menu">
                <a href="{{ route('category.categoryForm') }}" class="dash-nav-dropdown-item">Adding Category</a>
                <a href="{{ route('category.categoryList') }}" class="dash-nav-dropdown-item">Category List</a>
            </div>
        </div>
        <div class="dash-nav-dropdown ">
            <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                <i class="fas fa-cube"></i> Product </a>
            <div class="dash-nav-dropdown-menu">
                <a href="{{ route('product.returnProductForm') }}" class="dash-nav-dropdown-item">Adding</a>
                <a href="{{ route('product.index') }}" class="dash-nav-dropdown-item">List</a>
            </div>
        </div>
        <div class="dash-nav-dropdown">
            <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                <i class="fas fa-file"></i> Users </a>
            <div class="dash-nav-dropdown-menu">
                <a href="{{ route('user.index') }}" class="dash-nav-dropdown-item">UserList</a>
            </div>
        </div>
        <div class="dash-nav-dropdown">
            <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                <i class="fas fa-info"></i> About </a>
            <div class="dash-nav-dropdown-menu">
                <a href="https://github.com/subet/easion" target="_blank" class="dash-nav-dropdown-item">GitHub</a>
                <a href="https://usebootstrap.com/theme/easion" target="_blank" class="dash-nav-dropdown-item">UseBootstrap</a>
                <a href="https://mudimedia.com" target="_blank" class="dash-nav-dropdown-item">Mudimedia Software</a>
            </div>
        </div>
    </nav>
</div>
