let currentStep = 1;

// Move to the next step
function nextStep() {
    if (validateForm()) {
        currentStep++;
        updateStep();
    }
}

// Move to the previous step
function prevStep() {
    currentStep--;
    updateStep();
}

// Update the form visibility and progress
function updateStep() {
    document.getElementById("current-step").innerText = currentStep;

    // Hide all steps
    const steps = document.querySelectorAll(".form-step");
    steps.forEach(step => step.classList.remove("active"));

    // Show the current step
    document.getElementById(`step-${currentStep}`).classList.add("active");

}

// Validate the current step form inputs
function validateForm() {
    let valid = true;
    const step = document.getElementById(`step-${currentStep}`);

    // Clear previous errors
    step.querySelectorAll(".error").forEach(error => error.innerText = "");

    // Check required fields
    const inputs = step.querySelectorAll("input[required]");
    inputs.forEach(input => {
        if (!input.value.trim()) {
            document.getElementById(`error-${input.id}`).innerText = `${input.id} field is required.`;
            valid = false;
        }
    });

    // Check required dropdowns (select elements)
    const selects = step.querySelectorAll("select[required]");
    selects.forEach(select => {
        if (!select.value) {
            document.getElementById(`error-${select.id}`).innerText = "Please select an option.";
            valid = false;
        }
    });

    // Check required radio buttons
    const radioGroups = step.querySelectorAll("[data-required-radio]");
    radioGroups.forEach(group => {
        const radioName = group.getAttribute("data-required-radio");
        const selectedRadio = document.querySelector(`input[name="${radioName}"]:checked`);
        console.log(selectedRadio);
        if (!selectedRadio) {
            document.getElementById(`error-${radioName}`).innerText = "Please select an option.";
            valid = false;
        }
    });

    return valid;
}

// Handle data on the last step
function displayConfirmation() {
    let data = {};
    data.first_name = document.getElementById("first-name").value;
    data.middle_name = document.getElementById("middle-name").value;
    data.last_name = document.getElementById("last-name").value;
    data.profile_image = document.getElementById("profile-image").value;
    data.email = document.getElementById("email").value;
    data.username = document.getElementById("username").value;
    data.password = document.getElementById("password").value;
    data.phone_number = document.getElementById("phone-number").value;
    data.gender = document.getElementById("gender").value;
    data.birthdate = document.getElementById("birthdate").value;
    data.country = document.getElementById("country").value;
    data.education_level = document.getElementById("education-level").value;
    data.cgpa = document.getElementById("cgpa").value;
    data.institution = document.getElementById("institution").value;
    data.program_mode = document.getElementById("program-mode").value;
    data.campus = document.getElementById("campus").value;
    data.entry_year = document.getElementById("entry-year").value;
    data.field_of_study = document.getElementById("field-of-study").value;
    data.gat_id = document.getElementById("gat-id").value;
    data.emergency_contact_name = document.getElementById("emergency-contact-name").value;
    data.emergency_contact_mobile = document.getElementById("emergency-contact-mobile").value;
    data.emergency_contact_email = document.getElementById("emergency-contact-email").value;
    data.physically_challenged = document.getElementById("physically-challenged").value;
    data.challenged_status = document.getElementById("challenged-status").value;

    alert('Data Submitted successfuly!');
}
