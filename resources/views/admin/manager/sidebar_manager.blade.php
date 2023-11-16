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
            <a href="{{ route('manager.chat') }}" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Chat</span>
            </a>
          </li>
          <li class="nav-item nav-category">List price</li>
          <li class="nav-item">
            <a href="{{ route('manager.show.list.price') }}" class="nav-link">
              <i class="link-icon" data-feather="file-plus"></i>
              <span class="link-title">New</span>
            </a>
          </li>
          <li class="nav-item nav-category">Discount Manager</li>
          <li class="nav-item">
            <a href="{{ route('manager.show.discount.rate') }}" class="nav-link">
              <i class="link-icon" data-feather="bar-chart-2"></i>
              <span class="link-title">Rate</span>
            </a>
          </li>
          <li class="nav-item nav-category">Account Manager</li>
          <li class="nav-item">
            <a href="{{ route('show.agent.account') }}" class="nav-link">
              <i class="link-icon" data-feather="user-plus"></i>
              <span class="link-title">Create</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>