        // JavaScript for form submission
        document.getElementById('registerForm').addEventListener('submit', async (event) => {
            event.preventDefault(); // Prevent default form submission
            
            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            try {
                const response = await fetch('register.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ username, email, password })
                });

                const result = await response.json();
                if (result.success) {
                    alert('Registration successful!');
                } else {
                    alert('Registration failed: ' + result.message);
                }
            } catch (error) {
                console.error('Error:', error);
                alert('An error occurred while processing your request.');
            }
        });