function validateForm() {

    let rollNo =
        document.getElementById("roll_no").value;

    let name =
        document.getElementById("name").value;

    let contact =
        document.getElementById("contact").value;

    let marks =
        document.getElementById("marks").value;

    let gender =
        document.querySelector(
            'input[name="Gender"]:checked'
        );


    if (rollNo === "") {

        alert("Please enter Roll Number");

        return false;
    }


    if (name === "") {

        alert("Please enter Student Name");

        return false;
    }


    if (gender === null) {

        alert("Please select Gender");

        return false;
    }


    if (contact === "") {

        alert("Please enter Contact Number");

        return false;
    }


    if (contact.length !== 10) {

        alert("Contact Number must contain 10 digits");

        return false;
    }


    if (marks === "") {

        alert("Please enter Marks");

        return false;
    }


    if (marks < 0 || marks > 100) {

        alert("Marks should be between 0 and 100");

        return false;
    }


    return true;
}