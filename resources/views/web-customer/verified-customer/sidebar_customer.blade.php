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
            <a href="{{route('dashboard')}}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">web apps</li>
          <li class="nav-item">
            <a href="{{ route('customer.show.chat') }}" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Chat</span>
            </a>
          </li>
          <li class="nav-item nav-category">Lot Information</li>
          <li class="nav-item">
              <a href="{{ route('customer.show.mylot') }}" class="nav-link">
                <i class="link-icon" data-feather="columns"></i>
                <span class="link-title">My Lot</span>
              </a>
          </li>
          <li class="nav-item nav-category">Payment Information</li>
          <li class="nav-item">
              <a href="{{ route('customer.show.mypayment') }}" class="nav-link">
                <i class="link-icon" data-feather="credit-card"></i>
                <span class="link-title">My Payment</span>
              </a>
          </li>
          <li class="nav-item nav-category">How to use</li>
          <li class="nav-item">
            <a href="{{ route('customer.show.watchonline') }}" class="nav-link">
              <i class="link-icon" data-feather="youtube"></i>
              <span class="link-title">Watch online</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('customer.show.faq') }}" class="nav-link">
              <i class="link-icon" data-feather="info"></i>
              <span class="link-title">FAQ</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>