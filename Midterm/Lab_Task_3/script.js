function handleForm() {
    let allValid = true;

    const name = document.getElementById('fullname');
    const age = document.getElementById('age');
    const email = document.getElementById('email');
    const number = document.getElementById('number');
    const policynumber = document.getElementById('policynumber');
    const insurance = document.getElementById('insurance');
    const username = document.getElementById('username');
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirmpassword');
    const nameError = document.getElementById('nameError');
    const ageError = document.getElementById('ageError');
    const emailError = document.getElementById('emailError');
    const numError = document.getElementById('numError');
    const policyError = document.getElementById('policyError');
    const InsError = document.getElementById('InsError');
    const userError = document.getElementById('userError');
    const passError = document.getElementById('passError');
    const confirmError = document.getElementById('confirmError');

    if (name.value.trim() === '') {
        nameError.textContent = "Name is required.";
        nameError.style.color = "red";
        allValid = false;
    } else {
        nameError.textContent = "";
    }

    if (age.value.trim() === '') {
        ageError.textContent = "Age is required.";
        ageError.style.color = "red";
        allValid = false;
    } else {
        ageError.textContent = "";
    }

    if (email.value.trim() === '') {
        emailError.textContent = "Email is required.";
        emailError.style.color = "red";
        allValid = false;
    } else if (!email.value.includes('@') || !email.value.includes('.')) {
        emailError.textContent = "Enter a valid email.";
        emailError.style.color = "red";
        allValid = false;
    }
    else {
        emailError.textContent = "";
    }

    if (number.value.trim() === '') {
        numError.textContent = "Phone number is required.";
        numError.style.color = "red";
        allValid = false;
    } else {
        numError.textContent = "";
    }

    if (policynumber.value.trim() === '') {
        policyError.textContent = "Policy number is required.";
        policyError.style.color = 'red';
        allValid = false;

    } else {
        policyError.textContent = "";
    }

    if (insurance.value === '') {
        InsError.textContent = "Select an option.";
        InsError.style.color = "red";
        allValid = false;

    }

    if (username.value.trim() === '') {
        userError.textContent = "Username is required.";
        userError.style.color = "red";
        allValid = false;
    }
    else {
        userError.textContent = "";
    }

    if (password.value.trim() === '') {
        passError.textContent = "Password is required.";
        passError.style.color = "red";
        allValid = false;
    } else {
        passError.textContent = "";
    }

    if (confirmPassword.value.trim() === '') {
        confirmError.textContent = "Confirm password is required.";
        confirmError.style.color = "red";
        allValid = false;
    } else if (confirmPassword.value !== password.value) {
        confirmError.textContent = "Passwords do not match.";
        confirmError.style.color = "red";
        allValid = false;
    } else {
        confirmError.textContent = "";
    }

    return allValid;
}

addEventListener('submit', event => {
    event.preventDefault();
    handleForm();
});
