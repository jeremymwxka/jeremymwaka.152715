document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('signupForm');
    const message = document.getElementById('message');

    form.addEventListener('submit', function(event) {
        event.preventDefault();
        
        const name = form.elements['name'].value.trim();
        const email = form.elements['email'].value.trim();
        const password = form.elements['password'].value.trim();

        if (!name || !email || !password) {
            message.textContent = 'Please fill in all fields.';
        } else {
            // You can add more validation logic here if needed
            form.submit();
        }
    });
});
