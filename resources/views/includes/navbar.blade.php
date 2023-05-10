<span id="navbar">
    <div id="nav-wrapper">
      <div id="nav-header-bg">
        <span class="nav-header-fade right"></span>
        <span class="nav-header-fade left"></span>
      </div>

      <div id="nav-external-links" class="social">
        <ul id="social-links">
          <li>
            <a class="facebook" href="https://www.facebook.com/StarWars" target="_blank" rel="noopener noreferrer"
              data-cto="social" title="facebook">
              <span class="facebook-icon"></span>
            </a>
          </li>
          <li>
            <a class="instagram" href="https://www.instagram.com/starwars/" target="_blank"
              rel="noopener noreferrer" data-cto="social" title="instagram">
              <span class="instagram-icon"></span>
            </a>
          </li>
          <li>
            <a class="twitter" href="https://twitter.com/starwars" target="_blank" rel="noopener noreferrer"
              data-cto="social" title="twitter">
              <span class="twitter-icon"></span>
            </a>
          </li>
          <li>
            <a class="youtube" href="https://www.youtube.com/user/starwars" target="_blank"
              rel="noopener noreferrer" data-cto="social" title="youtube">
              <span class="youtube-icon"></span>
            </a>
          </li>
        </ul>
        <span class="sw-kids-container">
          <a class="sw-kids" href="https://starwarskids.com/" target="_blank" rel="noopener noreferrer"
            title="Star Wars Kids" data-cto="swkids">
            <span class="sw-kids-icon"></span>
          </a>
        </span>
        <div id="chrome-controls-container">
          <div id="chrome-controls">
          </div>
        </div>
      </div>

      <div id="nav-drawer-toggle" tabindex="1" role="button" aria-label="Open Menu">
        <div class="toggle-icon">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </div>
      <a id="nav-sw-logo-bar" href="http://starwars.test/" itemprop="logo" data-cto="swlogo"
        title="Star Wars Home"></a>
      <a id="nav-sw-logo" href="http://starwars.test/" itemprop="logo" data-cto="swlogo"
        title="Star Wars Logo"></a>

      <div id="nav-utility">
        <div id="nav-search-container" class="">
          <form id="topnav-search" class="nav-search top-nav" action="http://starwars.test/search" method="GET">
            <div class="query-field">
              <input id="nav-search-input" name="q" type="text" placeholder="Search Star Wars" value=""
                spellcheck="false" autocorrect="off" autocapitalize="off" autocomplete="off">
            </div>
          </form>
          <button class="nav-search-button ada-el-focus" aria-label="Close Search"
            id="nav-search-close-icon"></button>
          <button class="nav-search-button ada-el-focus" aria-label="Open Search" id="nav-search-icon"
            tabindex="-1"></button>
        </div>
        <div class="nav-login show">
          @guest
          <div class="logged-out-container">
              <a href="/login">
                  <div class="disid-login log-in-out" role="button" tabindex="-1" aria-hidden="true">Log In</div>
              </a>
            <p aria-hidden="true"> // </p>
            <div class="disid-signup log-in-out" role="button" tabindex="-1" aria-hidden="true">Sign Up</div>
          </div>
          @endguest
          @auth
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
