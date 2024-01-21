<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.index') }}" class="brand-link">
      <img src="{{ asset(setting()->site_logo) }}" alt="AdminLTE Logo" class="brand-image  elevation-3">
      <span class="brand-text font-weight-light">&nbsp;</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset(auth()->user()->avatar) }}" class="img-circle elevation-2" alt="{{ auth()->user()->name }}">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="{{ route('admin.index') }}" class="nav-link {{ Request::url() == route('admin.index') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{ route('admin.users') }}" class="nav-link {{ Request::url() == route('admin.users') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Users
              </p>
            </a>
          </li>




          <li class="nav-item has-treeview">
            <a href="{{ route('admin.banner.edit') }}" class="nav-link {{ Request::url() == route('admin.banner.edit') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Banner
              </p>
            </a>
          </li>




          <li class="nav-item has-treeview {{ Request::url() == route('admin.about.edit') || Request::url() == route('admin.privacy.policy', 2) || Request::url() == route('admin.trams.comdition', 1) || Request::url() == route('admin.refund.policy', 3) || Request::url() == route('admin.support.edit', 4) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::url() == route('admin.about.edit') || Request::url() == route('admin.privacy.policy', 2) || Request::url() == route('admin.trams.comdition', 1) || Request::url() == route('admin.refund.policy', 3) || Request::url() == route('admin.support.edit', 4) ? 'active' : '' }}">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.about.edit') }}" class="nav-link {{ Request::url() == route('admin.about.edit') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.privacy.policy', 2) }}" class="nav-link {{ Request::url() == route('admin.privacy.policy', 2) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Privacy Policy </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.trams.comdition', 1) }}" class="nav-link {{ Request::url() == route('admin.trams.comdition', 1) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Trams And Condition </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.refund.policy', 3) }}" class="nav-link {{ Request::url() == route('admin.refund.policy', 3) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Refund Policy</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.support.edit', 4) }}" class="nav-link {{ Request::url() == route('admin.support.edit', 4) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Support</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="{{ route('admin.responsibility.step', 1) }}" class="nav-link {{ Request::url() == route('admin.responsibility.step', 1) ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Responsibility & Steps
              </p>
            </a>
          </li>


          <li class="nav-item has-treeview {{ Request::url() == route('plan.create') || Request::url() == route('plan.index') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::url() == route('plan.create') || Request::url() == route('plan.index') ? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Plans
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('plan.create') }}" class="nav-link {{ Request::url() == route('plan.create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Plan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('plan.index') }}" class="nav-link {{ Request::url() == route('plan.index') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Plan List</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview {{ Request::url() == route('admin.gig.pending') || Request::url() == route('admin.gig.approved') || Request::url() == route('admin.gig.rejected') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::url() == route('admin.gig.pending') || Request::url() == route('admin.gig.approved') || Request::url() == route('admin.gig.rejected') ? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Gig's
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.gig.pending') }}" class="nav-link {{ Request::url() == route('admin.gig.pending') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pending Gig</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.gig.approved') }}" class="nav-link {{ Request::url() == route('admin.gig.approved') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Approved Gig</p>
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.gig.rejected') }}" class="nav-link {{ Request::url() == route('admin.gig.rejected') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rejected Gig</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{ Request::url() == route('admin.advertisement.pending') || Request::url() == route('admin.advertisement.approved') || Request::url() == route('admin.advertisement.rejected') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::url() == route('admin.advertisement.pending') || Request::url() == route('admin.advertisement.approved') || Request::url() == route('admin.advertisement.rejected') ? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Advertisement's
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.advertisement.pending') }}" class="nav-link {{ Request::url() == route('admin.advertisement.pending') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pending Advertisement</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.advertisement.approved') }}" class="nav-link {{ Request::url() == route('admin.advertisement.approved') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Approved Advertisement</p>
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.advertisement.rejected') }}" class="nav-link {{ Request::url() == route('admin.advertisement.rejected') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rejected Advertisement</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{ Request::url() == route('admin.job.pending') || Request::url() == route('admin.job.approved') || Request::url() == route('admin.job.rejected') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::url() == route('admin.job.pending') || Request::url() == route('admin.job.approved') || Request::url() == route('admin.job.rejected') ? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Job's
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.job.pending') }}" class="nav-link {{ Request::url() == route('admin.job.pending') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pending Job</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.job.approved') }}" class="nav-link {{ Request::url() == route('admin.job.approved') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Approved Job</p>
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.job.rejected') }}" class="nav-link {{ Request::url() == route('admin.job.rejected') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rejected Job</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview {{ Request::url() == route('admin.deposit.pending') || Request::url() == route('admin.deposit.approved') || Request::url() == route('admin.deposit.rejected') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::url() == route('admin.deposit.pending') || Request::url() == route('admin.deposit.approved') || Request::url() == route('admin.deposit.rejected') ? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Deposit's
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.deposit.pending') }}" class="nav-link {{ Request::url() == route('admin.deposit.pending') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pending Deposit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.deposit.approved') }}" class="nav-link {{ Request::url() == route('admin.deposit.approved') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Approved Deposit</p>
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.deposit.rejected') }}" class="nav-link {{ Request::url() == route('admin.deposit.rejected') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rejected Deposit</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{ Request::url() == route('admin.withdraw.pending') || Request::url() == route('admin.withdraw.approved') || Request::url() == route('admin.withdraw.rejected') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::url() == route('admin.withdraw.pending') || Request::url() == route('admin.withdraw.approved') || Request::url() == route('admin.withdraw.rejected') ? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Withdraw's
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.withdraw.pending') }}" class="nav-link {{ Request::url() == route('admin.withdraw.pending') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pending Withdraw</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.withdraw.approved') }}" class="nav-link {{ Request::url() == route('admin.withdraw.approved') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Approved Withdraw</p>
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.withdraw.rejected') }}" class="nav-link {{ Request::url() == route('admin.withdraw.rejected') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rejected Withdraw</p>
                </a>
              </li>
            </ul>
          </li>




          <li class="nav-item has-treeview {{ Request::url() == route('category.create') || Request::url() == route('category.index') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::url() == route('category.create') || Request::url() == route('category.index') ? 'active' : '' }}">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
                Categories
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('category.create') }}" class="nav-link {{ Request::url() == route('category.create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('category.index') }}" class="nav-link {{ Request::url() == route('category.index') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category List</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview {{ Request::url() == route('subcategory.create') || Request::url() == route('subcategory.index') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::url() == route('subcategory.create') || Request::url() == route('subcategory.index') ? 'active' : '' }}">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
                Sub-Categories
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('subcategory.create') }}" class="nav-link {{ Request::url() == route('subcategory.create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Sub-Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('subcategory.index') }}" class="nav-link {{ Request::url() == route('subcategory.index') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sub-Category List</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{ Request::url() == route('getway.create') || Request::url() == route('getway.index') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::url() == route('getway.create') || Request::url() == route('getway.index') ? 'active' : '' }}">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
                Payment Getways
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('getway.create') }}" class="nav-link {{ Request::url() == route('getway.create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Getway</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('getway.index') }}" class="nav-link {{ Request::url() == route('getway.index') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Getway List</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{ Request::url() == route('testimonials.create') || Request::url() == route('testimonials.index') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::url() == route('testimonials.create') || Request::url() == route('testimonials.index') ? 'active' : '' }}">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
                Testimonials
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('testimonials.create') }}" class="nav-link {{ Request::url() == route('testimonials.create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Testimonial</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('testimonials.index') }}" class="nav-link {{ Request::url() == route('testimonials.index') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testimonial List</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{ Request::url() == route('skill.create') || Request::url() == route('skill.index') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::url() == route('skill.create') || Request::url() == route('skill.index') ? 'active' : '' }}">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
                Skills
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('skill.create') }}" class="nav-link {{ Request::url() == route('skill.create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Skill</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('skill.index') }}" class="nav-link {{ Request::url() == route('skill.index') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Skill List</p>
                </a>
              </li>
            </ul>
          </li>


          {{-- <li class="nav-item has-treeview {{ Request::url() == route('subcategory.create') || Request::url() == route('subcategory.index') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::url() == route('subcategory.create') || Request::url() == route('subcategory.index') ? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Sub-Categories
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('subcategory.create') }}" class="nav-link {{ Request::url() == route('subcategory.create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Sub-Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('subcategory.index') }}" class="nav-link {{ Request::url() == route('subcategory.index') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sub-Category List</p>
                </a>
              </li>
            </ul>
          </li> --}}


          <li class="nav-item has-treeview">
            <a href="{{ route('admin.refer.commission') }}" class="nav-link {{ Request::url() == route('admin.refer.commission') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Refer Commission
              </p>
            </a>
          </li>




          <li class="nav-item has-treeview {{ Request::url() == route('social.create') || Request::url() == route('social.index') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::url() == route('social.create') || Request::url() == route('social.index') ? 'active' : '' }}">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Socials
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('social.create') }}" class="nav-link {{ Request::url() == route('social.create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Social Link</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('social.index') }}" class="nav-link {{ Request::url() == route('social.index') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Social Link </p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{ Request::url() == route('admin.setting.general') || Request::url() == route('admin.setting.security') || Request::url() == route('admin.setting.siteMeta') || Request::url() == route('admin.setting.site') || Request::url() == route('admin.setting.custom') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::url() == route('admin.setting.general') || Request::url() == route('admin.setting.security') || Request::url() == route('admin.setting.siteMeta') || Request::url() == route('admin.setting.site') || Request::url() == route('admin.setting.custom') ? 'active' : '' }}">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.setting.general') }}" class="nav-link {{ Request::url() == route('admin.setting.general') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Setting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.setting.site') }}" class="nav-link {{ Request::url() == route('admin.setting.site') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Site Setting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.setting.security') }}" class="nav-link {{ Request::url() == route('admin.setting.security') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Security Setting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.setting.siteMeta') }}" class="nav-link  {{ Request::url() == route('admin.setting.siteMeta') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Site Meta</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.setting.custom') }}" class="nav-link  {{ Request::url() == route('admin.setting.custom') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Custom Code</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview">
              <a href="{{ route('logout') }}" class="nav-link " onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-power-off"></i>
                <p>
                    Logout
                </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>











        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
