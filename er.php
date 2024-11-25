<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Bootstrap Headers Page">
    <title>Headers · Bootstrap v5.3</title>

    <!-- Bootstrap CDN for faster load times -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="headers.css" rel="stylesheet">

    <style>
      /* General styles */
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      /* Divider styling */
      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }
      /* Custom button style */
      .btn-bd-primary {
        --bs-btn-font-weight: 600;
        --bs-btn-color: white;
        --bs-btn-bg: #712cf9;
        --bs-btn-border-color: #712cf9;
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-active-bg: #5a23c8;
      }
    </style>
  </head>
  <body>
    <!-- SVG Icons -->
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <!-- Bootstrap Icon -->
      <symbol id="bootstrap" viewBox="0 0 118 94">
        <title>Bootstrap</title>
        <path fill-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284..."></path>
      </symbol>
      <!-- Additional icons like sun, moon, etc. could go here -->
    </svg>

    <!-- Theme Toggle -->
    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li><button type="button" class="dropdown-item" data-bs-theme-value="light">Light</button></li>
        <li><button type="button" class="dropdown-item" data-bs-theme-value="dark">Dark</button></li>
        <li><button type="button" class="dropdown-item active" data-bs-theme-value="auto">Auto</button></li>
      </ul>
    </div>

    <!-- Main content could go here -->

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@docsearch/js@3"></script>
  </body>
</html>
