import { Link } from "react-router-dom";
function Header() {
  return (
    <>
      <nav
        className="navbar navbar-expand-lg navbar-dark"
        style={{ backgroundColor: "#1E3A8A" }}
      >
        <div className="container">

          {/* Logo */}
          <a className="navbar-brand fw-bold" href="/">
            My Website
          </a>

          {/* Mobile Toggle */}
          <button
            className="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
          >
            <span className="navbar-toggler-icon"></span>
          </button>

          {/* Navbar */}
          <div className="collapse navbar-collapse" id="navbarNav">

            {/* Left Menu */}
            <ul className="navbar-nav me-auto">

              <li className="nav-item">
                
                <Link className="nav-link active" to="/">
                  Home
                </Link>
              </li>
           
              <li className="nav-item">
                 <Link className="nav-link" to="/about">
                  About
                 </Link>
              </li>

              <li className="nav-item">
                <Link className="nav-link" to="/services">
                  Services
                </Link>
              </li>

              <li className="nav-item">
                <a className="nav-link" href="/contact">
                  Contact
                </a>
              </li>

            </ul>

            {/* Right Menu */}
            <ul className="navbar-nav">

              {/* Login */}
              <li className="nav-item">
                <a className="nav-link" href="/login">
                  Login
                </a>
              </li>

              {/* Register */}
              <li className="nav-item">
                <a className="nav-link" href="/register">
                  Register
                </a>
              </li>

              {/* User Dropdown */}
              <li className="nav-item dropdown">

                <a
                  className="nav-link dropdown-toggle d-flex align-items-center"
                  href="/"
                  role="button"
                  data-bs-toggle="dropdown"
                >
                  <img
                    src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                    alt="User"
                    width="35"
                    height="35"
                    className="rounded-circle"
                  />
                </a>

                <ul className="dropdown-menu dropdown-menu-end">

                  <li>
                    <h6 className="dropdown-header">
                      Welcome User
                    </h6>
                  </li>

                  <li>
                    <hr className="dropdown-divider" />
                  </li>

                  <li>
                    <a className="dropdown-item" href="/dashboard">
                      Dashboard
                    </a>
                  </li>

                  <li>
                    <a className="dropdown-item" href="/profile">
                      Profile
                    </a>
                  </li>

                  <li>
                    <a className="dropdown-item" href="/settings">
                      Settings
                    </a>
                  </li>

                  <li>
                    <hr className="dropdown-divider" />
                  </li>

                  <li>
                    <a className="dropdown-item text-danger" href="/logout">
                      Logout
                    </a>
                  </li>

                </ul>

              </li>

            </ul>

          </div>

        </div>
      </nav>
    </>
  );
}

export default Header;