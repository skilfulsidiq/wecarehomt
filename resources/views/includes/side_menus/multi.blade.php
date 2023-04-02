
      <li class="nav-item {{ setActive($all_routes, 'mm-active') }}">
          <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="{{ $main_icon }}"></i>
              </div>
              <div class="menu-title">{{ $main_title }}</div>
          </a>
          <ul>
              @forelse ($all_routes as $route)
                  <li> <a class="{{ setSingleActive($route) }}" href="{{ route($route) }}">
                          <i class="bx bx-right-arrow-alt"></i>
                          {{ ucwords($route) }}</a>
                  </li>

              @empty
              @endforelse

          </ul>
      </li>
