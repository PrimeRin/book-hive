<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librarian Login</title>
    <link rel="stylesheet" href="../../public/css/login.css">
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <img src="../../public/img/book-hive.png" alt="Library Logo" class="logo">
            <h2>Librarian Login</h2>
            <form id="loginForm">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
                
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
                
                <button type="submit">Login</button>
            </form>
            <p id="error-message" class="error-message" style="display: none;"></p>
        </div>
    </div>

    <script>
        document.getElementById("loginForm").addEventListener("submit", function(event) {
            event.preventDefault();

            const formData = new FormData(this);
            fetch("/authController", {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = "../dashboard"; 
                } else {
                    const errorMessage = document.getElementById("error-message");
                    console.log("error message", errorMessage);
                    errorMessage.textContent = data.error;
                    errorMessage.style.display = "block";
                }
            })
            .catch(error => {
                console.error("Error:", error);
            });
        });
    </script>
</body>
</html>
