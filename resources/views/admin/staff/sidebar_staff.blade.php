<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          HolyCross<span>Sys</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="{{route('manager.dashboard')}}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">web apps</li>
          <li class="nav-item">
            <a href="{{ route('staff.chat') }}" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Chat</span>
            </a>
          </li>
          <li class="nav-item nav-category">Buyers Ledger</li>
          <li class="nav-item">
            <a href="{{ route('staff.addintern') }}" class="nav-link">
              <i class="link-icon" data-feather="edit-2"></i>
              <span class="link-title">Add Interment</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('staff.show.customer.user') }}" class="nav-link">
              <i class="link-icon" data-feather="shopping-bag"></i>
              <span class="link-title">Purchase Memorial Lot</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>