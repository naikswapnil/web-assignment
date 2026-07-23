import { useState } from "react";
import axios from "axios"
function Register() {
  const [formData, setFormData] = useState({
    name: "",
    email: "",
    password: "",
    mobile: "",
    gender: "",
    dob: "",
    address: "",
    city: "",
    state: "",
    pincode: "",
  });

  const handleChange = (e) => {
    setFormData({
      ...formData,
      [e.target.name]: e.target.value,
    });
  };

  const registerUser = async (e) => {
    e.preventDefault();

    try {
      const response = await axios.post(
        "http://localhost/Backend/register_api.php",  
        formData,
        {
          headers: {
            "Content-Type": "application/json",
          },
        }
      );
      console.log("Full Response:", response);
console.log("Response Data:", response.data);

      if (response.data.status) {
        
        alert(response.data.message);

        // Clear form
        setFormData({
          name: "",
          email: "",
          password: "",
          mobile: "",
          gender: "",
          dob: "",
          address: "",
          city: "",
          state: "",
          pincode: "",
        });
      } else {
        alert(response.data.message);
      }
    } catch (error) {
      console.error(error);
      alert("Something went wrong");
    }
  };

  return (
  <div className="container py-5">
    <div className="row justify-content-center">

      <div className="col-lg-8">

        <div className="card shadow-lg border-0 rounded-4">

          <div className="card-header bg-primary text-white text-center py-4">
            <h2>Create Account</h2>
            <p className="mb-0">Fill in the details below</p>
          </div>

          <div className="card-body p-4">

            <form onSubmit={registerUser}>

              <div className="row">

                <div className="col-md-6 mb-3">
                  <label className="form-label">Full Name</label>
                  <input
                    type="text"
                    name="name"
                    className="form-control"
                    value={formData.name}
                    onChange={handleChange}
                  />
                </div>

                <div className="col-md-6 mb-3">
                  <label className="form-label">Email</label>
                  <input
                    type="email"
                    name="email"
                    className="form-control"
                    value={formData.email}
                    onChange={handleChange}
                  />
                </div>

                <div className="col-md-6 mb-3">
                  <label className="form-label">Password</label>
                  <input
                    type="password"
                    name="password"
                    className="form-control"
                    value={formData.password}
                    onChange={handleChange}
                  />
                </div>

                <div className="col-md-6 mb-3">
                  <label className="form-label">Mobile</label>
                  <input
                    type="text"
                    name="mobile"
                    className="form-control"
                    value={formData.mobile}
                    onChange={handleChange}
                  />
                </div>

                <div className="col-md-6 mb-3">
                  <label className="form-label">Gender</label>

                  <select
                    className="form-select"
                    name="gender"
                    value={formData.gender}
                    onChange={handleChange}
                  >
                    <option value="">Select Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                </div>

                <div className="col-md-6 mb-3">
                  <label className="form-label">Date of Birth</label>

                  <input
                    type="date"
                    className="form-control"
                    name="dob"
                    value={formData.dob}
                    onChange={handleChange}
                  />
                </div>

                <div className="col-12 mb-3">
                  <label className="form-label">Address</label>

                  <textarea
                    className="form-control"
                    rows="3"
                    name="address"
                    value={formData.address}
                    onChange={handleChange}
                  ></textarea>
                </div>

                <div className="col-md-4 mb-3">
                  <label className="form-label">City</label>

                  <input
                    type="text"
                    className="form-control"
                    name="city"
                    value={formData.city}
                    onChange={handleChange}
                  />
                </div>

                <div className="col-md-4 mb-3">
                  <label className="form-label">State</label>

                  <input
                    type="text"
                    className="form-control"
                    name="state"
                    value={formData.state}
                    onChange={handleChange}
                  />
                </div>

                <div className="col-md-4 mb-3">
                  <label className="form-label">Pincode</label>

                  <input
                    type="text"
                    className="form-control"
                    name="pincode"
                    value={formData.pincode}
                    onChange={handleChange}
                  />
                </div>

              </div>

              <div className="text-center mt-4">

                <button
                  type="submit"
                  className="btn btn-primary px-5"
                >
                  Register
                </button>

              </div>

            </form>

          </div>

        </div>

      </div>

    </div>
  </div>
);
}

export default Register;