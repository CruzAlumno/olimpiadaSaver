<span id="navbar">
    <div id="nav-wrapper">
      <div id="nav-header-bg">
        <span class="nav-header-fade right"></span>
        <span class="nav-header-fade left"></span>
      </div>

      <div id="nav-drawer-toggle" tabindex="1" role="button" aria-label="Open Menu">
        <div class="toggle-icon">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </div>
      <a id="" href="http://starwarsbattle.test/" itemprop="logo" data-cto="swlogo"
        title="Star Wars Logo"><img src="{{ URL::to('/') }}/img/title.png"></a>


      <div id="nav-utility">

        <div class="nav-login show">
          @guest
          <div class="logged-out-container">
              <a href="/login">
                  <div class="disid-login log-in-out" role="button" tabindex="-1" aria-hidden="true">Log In</div>
              </a>
          </div>
          @endguest
          @auth
          <form action="/logoutAdmin" method="GET">
            <button type="submit">Logout</button>
          </form>
          <div class="logged-in-container">
            <div class="display-user log-in-out" tabindex="-1" aria-hidden="true">
              <span class="disid-user" role="button" tabindex="0"></span>
              <span class="arrow"></span>
            </div>
            <div class="disid-flyout">
              <div class="disid-login flyout-item" role="button" tabindex="0">Account</div>
              <div class="disid-signup flyout-item" role="button" tabindex="0">Log Out</div>
            </div>
          </div>
          @endauth
        </div>
      </div>
    </div>
  </span>
