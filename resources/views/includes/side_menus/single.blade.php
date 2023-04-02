
  <li class="nav-item {{ setSingleActive($route,'mm-active') }}">
      <a href="{{ route($route) }}">
          <div class="parent-icon"><i class="{{ $icon }}"></i>
          </div>
          <div class="menu-title">{{ $title }}</div>
      </a>
  </li>
