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
            <a href="{{ route('show.pricelist.withdown') }}" class="nav-link">
              <i class="link-icon" data-feather="file-plus"></i>
              <span class="link-title">New</span>
            </a>
          </li>
          <li class="nav-item nav-category">Account Manager</li>
          <li class="nav-item">
            <a href="{{ route('show.account') }}" class="nav-link">
              <i class="link-icon" data-feather="edit-3"></i>
              <span class="link-title">Create</span>
            </a>
          </li>
          <li class="nav-item nav-category">How to use</li>
          <li class="nav-item">
            <a href="{{ route('manager.watchonline') }}" class="nav-link">
              <i class="link-icon" data-feather="youtube"></i>
              <span class="link-title">Watch online</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('manager.faq') }}" class="nav-link">
              <i class="link-icon" data-feather="info"></i>
              <span class="link-title">FAQ</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>