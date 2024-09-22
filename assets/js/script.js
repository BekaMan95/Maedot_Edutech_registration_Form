let currentStep = 1;

// Move to the next step
function nextStep() {
  if (validateForm()) {
    currentStep++;
    updateStep("next");
  }
}

// Move to the previous step
function prevStep() {
  if (currentStep > 1) {
    currentStep--;
    updateStep("back");
  }
}

// Update the form visibility and progress
function updateStep(stepType) {
  document.getElementById("current-step").innerText = currentStep;

  if (stepType === "next") {
    // Hide the previous step
    document
      .getElementById(`step-${currentStep - 1}`)
      .classList.remove("active");
    document
      .getElementById(`step-${currentStep - 1}`)
      .classList.add("form-step");

    // Show the current step
    document
      .getElementById(`step-${currentStep}`)
      .classList.remove("form-step");
    document.getElementById(`step-${currentStep}`).classList.add("active");
  } else {
    // Hide the previous step
    document
      .getElementById(`step-${currentStep + 1}`)
      .classList.remove("active");
    document
      .getElementById(`step-${currentStep + 1}`)
      .classList.add("form-step");

    // Show the current step
    document
      .getElementById(`step-${currentStep}`)
      .classList.remove("form-step");
    document.getElementById(`step-${currentStep}`).classList.add("active");
  }
}

// Validate the current step form inputs
function validateForm() {
  let valid = true;
  const step = document.getElementById(`step-${currentStep}`);

  // Clear previous errors
  step.querySelectorAll(".error").forEach((error) => (error.innerText = ""));

  // Check required fields
  const inputs = step.querySelectorAll("input[required]");
  inputs.forEach((input) => {
    if (!input.value.trim()) {
      document.getElementById(`error-${input.id}`).innerText =
        `${input.id} field is required.`;
      valid = false;
    }
  });

  // Check required dropdowns (select elements)
  const selects = step.querySelectorAll("select[required]");
  selects.forEach((select) => {
    if (!select.value) {
      document.getElementById(`error-${select.id}`).innerText =
        "Please select an option.";
      valid = false;
    }
  });

  // Check required radio buttons
  const radioGroups = step.querySelectorAll("[data-required-radio]");
  radioGroups.forEach((group) => {
    const radioName = group.getAttribute("data-required-radio");
    const selectedRadio = document.querySelector(
      `input[name="${radioName}"]:checked`,
    );
    console.log(selectedRadio);
    if (!selectedRadio) {
      document.getElementById(`error-${radioName}`).innerText =
        "Please select an option.";
      valid = false;
    }
  });

  return valid;
}

// File to base64 string converter
function toBase64(file) {
  return new Promise((resolve, reject) => {
    const reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = () => resolve(reader.result);
    reader.onerror = (error) => reject(error);
  });
}

// Handle data on the last step
async function displayConfirmation() {
  let data = {};
  data.first_name = document.getElementById("first-name").value;
  data.middle_name = document.getElementById("middle-name").value;
  data.last_name = document.getElementById("last-name").value;

  const file = document.getElementById("profile-image").files[0];
  if (file) {
    data.profile_image = await toBase64(file);
  }

  data.email = document.getElementById("email").value;
  data.username = document.getElementById("username").value;
  data.password = document.getElementById("password").value;
  data.phone_number = document.getElementById("phone-number").value;

  var ele = document.getElementsByName("gender");
  for (i = 0; i < ele.length; i++) {
    if (ele[i].checked) {
      data.gender = ele[i].value;
    }
  }

  data.birthdate = document.getElementById("birthdate").value;
  data.country = document.getElementById("country").value;
  data.education_level = document.getElementById("education-level").value;
  data.cgpa = document.getElementById("cgpa").value;
  data.institution = document.getElementById("institution").value;

  const documentFile = document.getElementById("document").files[0];
  if (documentFile) {
    data.document = await toBase64(file);
  }

  data.program_mode = document.getElementById("program-mode").value;
  data.campus = document.getElementById("campus").value;
  data.entry_year = document.getElementById("entry-year").value;
  data.field_of_study = document.getElementById("field-of-study").value;
  data.gat_id = document.getElementById("gat-id").value;
  data.emergency_contact_name = document.getElementById(
    "emergency-contact-name",
  ).value;
  data.emergency_contact_mobile = document.getElementById(
    "emergency-contact-mobile",
  ).value;
  data.emergency_contact_email = document.getElementById(
    "emergency-contact-email",
  ).value;

  var ele = document.getElementsByName("physically-challenged");
  for (i = 0; i < ele.length; i++) {
    if (ele[i].checked) {
      data.physically_challenged = ele[i].value;
    }
  }

  data.challenged_status = document.getElementById("challenged-status").value;
  console.log(data);
  alert("Data Submitted successfully!");
  window.location.replace("successful.php");
}
