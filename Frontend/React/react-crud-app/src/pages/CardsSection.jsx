function CardsSection() {
  const cards = [
    {
      id: 1,
      title: "Web Development",
      image: "https://picsum.photos/300/200?random=1",
      description: "Learn HTML, CSS, JavaScript and React."
    },
    {
      id: 2,
      title: "React JS",
      image: "https://picsum.photos/300/200?random=2",
      description: "Build modern single page applications."
    }
    // {
    //   id: 3,
    //   title: "Laravel",
    //   image: "https://picsum.photos/300/200?random=3",
    //   description: "Create powerful PHP web applications."
    // },
    // {
    //   id: 4,
    //   title: "Bootstrap",
    //   image: "https://picsum.photos/300/200?random=4",
    //   description: "Design responsive and beautiful websites."
    // },
    // {
    //   id: 5,
    //   title: "Node.js",
    //   image: "https://picsum.photos/300/200?random=5",
    //   description: "Develop fast backend applications."
    // },
    // {
    //   id: 6,
    //   title: "MySQL",
    //   image: "https://picsum.photos/300/200?random=6",
    //   description: "Store and manage application data."
    // }
  ];

  return (
    <section className="container py-5">
      <h2 className="text-center mb-5">Our Courses</h2>

      <div className="row g-4">
        {cards.map((card) => (
          <div className="col-md-4" key={card.id}>
            <div className="card h-100 shadow">

              <img
                src={card.image}
                className="card-img-top"
                alt={card.title}
              />

              <div className="card-body">
                <h5 className="card-title">{card.title}</h5>

                <p className="card-text">
                  {card.description}
                </p>

                <button className="btn btn-primary">
                  Read More
                </button>
              </div>

            </div>
          </div>
        ))}
      </div>
    </section>
  );
}

export default CardsSection;