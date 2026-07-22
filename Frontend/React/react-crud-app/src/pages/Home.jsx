import CardsSection from "./CardsSection";

function Home() {
  return (
    <>
      {/* Hero Section */}
      <section className="bg-light py-5">
        <div className="container text-center">
          <h1 className="display-4 fw-bold">Welcome to My Website</h1>
          <p className="lead">
            Learn React JS, Bootstrap, Laravel, and Full Stack Development.
          </p>

          <button className="btn btn-primary btn-lg mt-3">
            Get Started``
          </button>
        </div>
      </section>

      {/* Cards Section */}
      <CardsSection />

      {/* Additional Section */}
      <section className="py-5">
        <div className="container">
          <h2>Hello World</h2>

          <p>
            This is the Home page of our React application. Here you can display
            your latest courses, services, products, or any other information.
          </p>
        </div>
      </section>
    </>
  );
}

export default Home;