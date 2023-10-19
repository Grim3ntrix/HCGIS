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
          <li class="nav-item nav-category">Manager</li>
          <li class="nav-item">
            <a class="nav-link"  data-bs-toggle="collapse" href="#charts" role="button" aria-expanded="false" aria-controls="charts">
              <i class="link-icon" data-feather="edit-2"></i>
              <span class="link-title">Add Pricelist</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('show.pricelist.withdown') }}" class="nav-link">With Down-payment</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('showpricelist.nodown') }}" class="nav-link">No Down-payment</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="users"></i>
              <span class="link-title">Account</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="emails">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('create.account') }}" class="nav-link">Create</a>
                </li>
              </ul>
            </div>
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