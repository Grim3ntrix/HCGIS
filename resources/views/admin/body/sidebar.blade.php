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
            <a href="pages/apps/chat.html" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Chat</span>
            </a>
          </li>
          <li class="nav-item nav-category">Information</li>
          <li class="nav-item">
              <a href="pages/apps/chat.html" class="nav-link">
                <i class="link-icon" data-feather="map-pin"></i>
                <span class="link-title">Interns</span>
              </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
              <i class="link-icon" data-feather="columns"></i>
              <span class="link-title">Lots</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="uiComponents">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/ui-components/alerts.html" class="nav-link">Sold Lots</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#forms" role="button" aria-expanded="false" aria-controls="forms">
              <i class="link-icon" data-feather="dollar-sign"></i>
              <span class="link-title">Pricelist</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="forms">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/forms/basic-elements.html" class="nav-link">With Down-payment</a>
                </li>
                <li class="nav-item">
                  <a href="pages/forms/basic-elements.html" class="nav-link">No Down-payment</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Buyers Ledger</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
              <i class="link-icon" data-feather="user-check"></i>
              <span class="link-title">Customer</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="advancedUI">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/advanced-ui/cropper.html" class="nav-link">Purchase Lot</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Cashier</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" role="button" aria-expanded="false" aria-controls="general-pages">
              <i class="link-icon" data-feather="credit-card"></i>
              <span class="link-title">Payment</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="general-pages">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/general/blank-page.html" class="nav-link">Add Record</a>
                </li>
                <li class="nav-item">
                  <a href="pages/general/blank-page.html" class="nav-link">Paid Customers</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">How to use</li>
          <li class="nav-item">
            <a href="#" target="_blank" class="nav-link">
              <i class="link-icon" data-feather="youtube"></i>
              <span class="link-title">Watch online</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" target="_blank" class="nav-link">
              <i class="link-icon" data-feather="info"></i>
              <span class="link-title">FAQ</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>