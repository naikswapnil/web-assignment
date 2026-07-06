let students = JSON.parse(localStorage.getItem("students")) || [];
let editIndex = -1;

// ================= LOGIN =================

function login() {
    let user = document.getElementById("username").value;
    let pass = document.getElementById("password").value;

    if(user === "Vedant" && pass === "1234") {
        localStorage.setItem("loggedIn", "true");

        document.getElementById("loginBox").style.display = "none";
        document.getElementById("mainApp").style.display = "flex";
    } else {
        alert("Wrong Username or Password");
    }
}

function logout() {
    localStorage.removeItem("loggedIn");

    document.getElementById("loginBox").style.display = "block";
    document.getElementById("mainApp").style.display = "none";
}

// Auto login
window.onload = function() {
    if(localStorage.getItem("loggedIn") === "true") {
        document.getElementById("loginBox").style.display = "none";
        document.getElementById("mainApp").style.display = "flex";
    }

    showStudents();
};

// ================= STUDENT SYSTEM =================

function saveData() {
    localStorage.setItem("students", JSON.stringify(students));
}

function updateStats() {
    document.getElementById("totalStudents").innerText = students.length;
}

function showStudents(data = students) {
    let table = "";

    data.forEach((s, index) => {
        table += `
        <tr>
            <td>${s.name}</td>
            <td>${s.roll}</td>
            <td>${s.course}</td>
            <td>
                <button onclick="editStudent(${index})">Edit</button>
                <button onclick="deleteStudent(${index})">Delete</button>
            </td>
        </tr>`;
    });

    document.getElementById("studentTable").innerHTML = table;

    updateStats();
}

function addStudent() {
    let name = document.getElementById("name").value;
    let roll = document.getElementById("roll").value;
    let course = document.getElementById("course").value;

    if(name === "" || roll === "" || course === "") {
        alert("Fill all fields");
        return;
    }

    if(editIndex === -1) {
        students.push({ name, roll, course });
    } else {
        students[editIndex] = { name, roll, course };
        editIndex = -1;
    }

    saveData();
    showStudents();

    document.getElementById("name").value = "";
    document.getElementById("roll").value = "";
    document.getElementById("course").value = "";
}

function deleteStudent(index) {
    students.splice(index, 1);
    saveData();
    showStudents();
}

function editStudent(index) {
    document.getElementById("name").value = students[index].name;
    document.getElementById("roll").value = students[index].roll;
    document.getElementById("course").value = students[index].course;

    editIndex = index;
}

function searchStudent() {
    let value = document.getElementById("search").value.toLowerCase();

    let filtered = students.filter(s =>
        s.name.toLowerCase().includes(value) ||
        s.roll.toString().includes(value) ||
        s.course.toLowerCase().includes(value)
    );

    showStudents(filtered);
}