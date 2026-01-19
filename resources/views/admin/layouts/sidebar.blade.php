<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin.dashboard') }}"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>

            <li class="nav-item dropdown {{ Route::is('admin.testimonial.*') || Route::is('admin.marquee.*') || Route::is('admin.client.*') || Route::is('admin.award.*') || Route::is('admin.counter.*') || Route::is('admin.skill.*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-vector-square"></i><span>Modules</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Route::is('admin.testimonial.*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.testimonial.index') }}""><i class="fas fa-angle-right"></i> Testimonial</a>
                    </li>
                    <li class="{{ Route::is('admin.marquee.*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.marquee.index') }}"><i class="fas fa-angle-right"></i> Marquee</a>
                    </li>
                    <li class="{{ Route::is('admin.client.*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.client.index') }}"><i class="fas fa-angle-right"></i> Client</a>
                    </li>
                    <li class="{{ Route::is('admin.award.*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.award.index') }}"><i class="fas fa-angle-right"></i> Award</a>
                    </li>
                    <li class="{{ Route::is('admin.counter.*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.counter.index') }}"><i class="fas fa-angle-right"></i> Counter</a>
                    </li>
                    <li class="{{ Route::is('admin.skill.*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.skill.index') }}"><i class="fas fa-angle-right"></i> Skill</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ Route::is('admin.post-category.*')||Route::is('admin.post.*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-edit"></i><span>Blog</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Route::is('admin.post-category.*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.post-category.index') }}""><i class="fas fa-angle-right"></i> Post Category</a>
                    </li>
                    <li class="{{ Route::is('admin.post.*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.post.index') }}""><i class="fas fa-angle-right"></i> Post</a>
                    </li>
                    <li class="{{ Route::is('admin.post.comments') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.post.comments') }}""><i class="fas fa-angle-right"></i> Comments</a>
                    </li>
                </ul>
            </li>

            <li class="{{ Route::is('admin.team-member.*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.team-member.index') }}"><i class="fas fa-users"></i> <span>Team Page</span></a></li>

            <li class="{{ Route::is('admin.pricing-plan.*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.pricing-plan.index') }}"><i class="fas fa-dollar-sign"></i> <span>Pricing Page</span></a></li>

            <li class="{{ Route::is('admin.faq.*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.faq.index') }}"><i class="fas fa-question-circle"></i> <span>FAQ Page</span></a></li>

            <li class="{{ Route::is('admin.service.*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.service.index') }}"><i class="fas fa-cogs"></i> <span>Service Page</span></a></li>

            <li class="{{ Route::is('admin.portfolio.*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.portfolio.index') }}"><i class="fas fa-project-diagram"></i> <span>Portfolio Page</span></a></li>

        </ul>
    </aside>
</div>