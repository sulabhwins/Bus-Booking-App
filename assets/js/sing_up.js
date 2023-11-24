function validateForm() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    if (name.trim() === '') {
        alert('Please enter your name.');
        return false;
    }
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('Please enter a valid email address.');
        return false;
    }
    if (password.length < 6) {
        alert('Password must be at least 6 characters long.');
        return false;
    }
    return true; 
}