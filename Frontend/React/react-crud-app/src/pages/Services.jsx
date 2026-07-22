function Services(){
    return(
        <>
        <section className="py-5 bg-light">
      <div className="container">

        <div className="text-center mb-5">
          <h1 className="fw-bold">Our Services</h1>
          <p className="text-muted">
            We provide high-quality web development and software solutions to
            help businesses grow digitally.
          </p>
        </div>

        <div className="row g-4">

          {/* Service 1 */}
          <div className="col-md-4">
            <div className="card h-100 shadow border-0">
              <div className="card-body text-center">
                <i className="fas fa-code fa-3x text-primary mb-3"></i>
                <h4>Web Development</h4>
                <p>
                  We build responsive, fast, and modern websites using HTML,
                  CSS, JavaScript, React, PHP, and Laravel.
                </p>
              </div>
            </div>
          </div>

          {/* Service 2 */}
          <div className="col-md-4">
            <div className="card h-100 shadow border-0">
              <div className="card-body text-center">
                <i className="fas fa-laptop-code fa-3x text-success mb-3"></i>
                <h4>Frontend Development</h4>
                <p>
                  Beautiful user interfaces using React JS, Bootstrap, Tailwind
                  CSS, and modern JavaScript.
                </p>
              </div>
            </div>
          </div>

          {/* Service 3 */}
          <div className="col-md-4">
            <div className="card h-100 shadow border-0">
              <div className="card-body text-center">
                <i className="fas fa-server fa-3x text-danger mb-3"></i>
                <h4>Backend Development</h4>
                <p>
                  Robust backend solutions using PHP, Laravel, Node.js, REST
                  APIs, and MySQL databases.
                </p>
              </div>
            </div>
          </div>

          {/* Service 4 */}
          <div className="col-md-4">
            <div className="card h-100 shadow border-0">
              <div className="card-body text-center">
                <i className="fas fa-mobile-alt fa-3x text-warning mb-3"></i>
                <h4>Responsive Design</h4>
                <p>
                  Websites optimized for desktop, tablet, and mobile devices
                  with responsive layouts.
                </p>
              </div>
            </div>
          </div>

          {/* Service 5 */}
          <div className="col-md-4">
            <div className="card h-100 shadow border-0">
              <div className="card-body text-center">
                <i className="fas fa-database fa-3x text-info mb-3"></i>
                <h4>Database Design</h4>
                <p>
                  Efficient database architecture using MySQL with secure and
                  optimized queries.
                </p>
              </div>
            </div>
          </div>

          {/* Service 6 */}
          <div className="col-md-4">
            <div className="card h-100 shadow border-0">
              <div className="card-body text-center">
                <i className="fas fa-headset fa-3x text-secondary mb-3"></i>
                <h4>Technical Support</h4>
                <p>
                  We provide maintenance, updates, bug fixes, and technical
                  support after project delivery.
                </p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
        </>
    )
}

export default Services;