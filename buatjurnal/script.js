document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting the default way

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    // Here you can add code to send the form data to a server or an email service

    // For now, we'll just display a message
    const formMessage = document.getElementById('form-message');
    formMessage.textContent = `Thank you, ${name}! Your message has been sent.`;
    formMessage.style.color = 'green';

    // Clear the form
   