<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
        <h4 class="text-white p-2">HolyCross<span>Gardens</span></h4></a>
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
          <li class="nav-item nav-category">Price List</li>
          <li class="nav-item">
            <a href="{{ route('staff.show.all.list.price') }}" class="nav-link">
              <i class="link-icon" data-feather="dollar-sign"></i>
              <span class="link-title">All Price List</span>
            </a>
          </li>
          <li class="nav-item nav-category">Buyers Ledger</li>
          <li class="nav-item">
            <a href="{{ route('staff.show.obituary') }}" class="nav-link">
              <i class="link-icon" data-feather="plus-square"></i>
              <span class="link-title">Obituary</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('staff.show.user.customer') }}" class="nav-link">
              <i class="link-icon" data-feather="shopping-bag"></i>
              <span class="link-title">Purchase</span>
            </a>
          </li>
          <li class="nav-item nav-category">Payment</li>
          <li class="nav-item">
            <a href="{{ route('staff.show.customer') }}" class="nav-link">
              <i class="link-icon" data-feather="plus-square"></i>
              <span class="link-title">Pay</span>
            </a>
          </li>
          <li class="nav-item nav-category">Ledger Account</li>
          <li class="nav-item">
            <a href="{{ route('show.customer.account') }}" class="nav-link">
              <i class="link-icon" data-feather="user-plus"></i>
              <span class="link-title">All Account</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>