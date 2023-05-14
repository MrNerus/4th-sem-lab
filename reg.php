
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="regstyle.css">
  
  </head>
  <body>
    <h1>Registration Form</h1>
    <a href="./admincon.php">Admin</a>
    <form action="" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      
      <button type="submit" onclick="makePost()">Submit</button>
    </form>
    
    <!-- <script>
      const form = document.querySelector('form');
      form.addEventListener('submit', (event) => {
        event.preventDefault();
        const name = document.querySelector('#name').value;
        const email = document.querySelector('#email').value;
        const password = document.querySelector('#password').value;
        // TODO: Handle form submission
      });
    </script> -->
    <script>
      function makePost() {
        <?php
          include('./regcon.php')
        ?>
      }
    </script>
    
  </body>
</html>

