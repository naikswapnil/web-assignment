function About(){

    return(
        <>
        <section class="container py-5">
    <div class="row align-items-center">

        <div class="col-lg-6">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55e?w=800"
                 class="img-fluid rounded shadow"
                 alt="About Us" />
        </div>

        <div class="col-lg-6 mt-4 mt-lg-0">

            <h2 class="fw-bold mb-4">About Us</h2>

            <p class="text-muted">
                Welcome to <strong>My Website</strong>. We are dedicated to providing
                high-quality web development solutions and innovative digital
                services that help businesses grow online.
            </p>

            <p class="text-muted">
                Our experienced team specializes in modern technologies including
                HTML, CSS, JavaScript, React JS, Bootstrap, PHP, Laravel, and MySQL.
                We believe in delivering responsive, user-friendly, and secure
                websites tailored to our clients' needs.
            </p>

            <p class="text-muted">
                Our mission is to transform ideas into powerful digital experiences.
                Whether you need a business website, e-commerce platform, or custom
                web application, we are committed to delivering excellence and
                customer satisfaction.
            </p>

            <a href="#" class="btn btn-primary mt-3">
                Learn More
            </a>

        </div>

    </div>
</section>
        </>
    )
}

export default About;