const signUpButton = document.getElementById('signUpButton');
const signInButton = document.getElementById('signInButton');
const signInForm = document.getElementById('signIn');
const signUpForm = document.getElementById('signup');

console.log(signUpButton, signInButton, signInForm, signUpForm);

signUpButton.addEventListener('click', function() {
    console.log("Sign Up button clicked");
    signInForm.style.display = "none";
    signUpForm.style.display = "block";
});

signInButton.addEventListener('click', function() {
    console.log("Sign In button clicked");
    signInForm.style.display = "block";
    signUpForm.style.display = "none";
});

document.getElementById('password').addEventListener('input', function(event) {
    console.log("Password input detected");
    const password = event.target.value;
    let messages = [];
    if (!/[A-Z]/.test(password)) {
        messages.push('Use at least one uppercase letter.');
    }
    if (!/[a-z]/.test(password)) {
        messages.push('Use at least one lowercase letter.');
    }
    if (!/[0-9]/.test(password)) {
        messages.push('Use at least one number.');
    }
    if (!/[@$!%*#?&]/.test(password)) {
        messages.push('Use at least one special character like @$!%*#?&.');
    }
    if (password.length <= 8) {
        messages.push('Password must be at least 8 characters long.');
    }

    console.log(messages);
    document.getElementById('passwordHelp').innerHTML = messages.join('<br>');
    document.getElementById('passwordHelp').style.color = messages.length > 0 ? 'red' : 'green';
});
