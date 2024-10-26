<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css"> 
    <style>
      
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh; 
            padding: 20px;
        }

        form {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        form input, form textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            background-color: #f9f9f9;
            box-sizing: border-box;
            transition: border-color 0.3s ease-in-out;
        }

        form input:focus, form textarea:focus {
            outline: none;
            border-color: #007BFF;
        }

        form button {
            background-color: #007BFF;
            color: white;
            padding: 15px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        form button:hover {
            background-color: #0056b3;
        }

        #result {
            font-size: 16px;
            margin-top: 15px;
            display: none;
        }

        
        @media only screen and (max-width: 768px) {
            form {
                padding: 20px;
            }

            form input, form textarea {
                padding: 12px;
            }

            form button {
                padding: 12px;
            }
        }
    </style>
</head>
<body>
    
<?php
    $active = "cont"; 
    include 'header.php';
?>

<main>
    <form method="POST" id="form">
        <input type="hidden" name="access_key" value="5e78450e-4188-408c-b65b-012cb6293a03">

        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Message" required rows="5"></textarea>

        <button type="submit">Submit Form</button>

        <div id="result"></div>
    </form>
</main>

    <script>
        const form = document.getElementById('form');
        const result = document.getElementById('result');

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(form);
            const object = Object.fromEntries(formData);
            const json = JSON.stringify(object);
            result.innerHTML = "Please wait...";
            result.style.display = "block";
            result.style.color = "#007BFF"; 
            fetch('https://api.web3forms.com/submit', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: json
                })
                .then(async (response) => {
                    let json = await response.json();
                    if (response.status == 200) {
                        result.innerHTML = "Form submitted successfully!";
                        result.style.color = "#28a745";
                    } else {
                        result.innerHTML = json.message;
                        result.style.color = "#dc3545";
                    }
                })
                .catch(error => {
                    result.innerHTML = "Something went wrong!";
                    result.style.color = "#dc3545";
                })
                .then(function() {
                    form.reset();
                    setTimeout(() => {
                        result.style.display = "none";
                    }, 3000);
                });
        });
    </script>

<?php include 'footer.php'; ?> 
</body>
</html>
