<?php 
    // Multiple recipients
    $to = 'url-shortener@info.com'; // note the comma
    
    // Subject
    $subject = 'E-mail from: ' . $_POST['email'];
    
    // Message
    $message = '
    <html>
    <head>
      <title>Contact from ' . $_POST['name'] .'</title>
    </head>
    <body>
      <p>Message : ' . nl2br(htmlspecialchars($_POST['message'])) .'</p>
      <table>
        <tr>
          <th>Name</th>
          <th>From</th>
          <th>Message</th>
        </tr>
        <tr>
          <td>' . $_POST['name'] .'</td>
          <td>' . $_POST['phone'] . '</td>
          <td>' . $_POST['message'] . '</td>
        </tr>
      </table>
    </body>
    </html>
    ';
    
    // To send HTML mail, the Content-type header must be set
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=UTF-8';
    
    // Additional headers
    $headers[] = $_POST['email'];
    
    // Mail it
    try {
        mail($to, $subject, $message, implode("\r\n", $headers));
        echo 'success';
    } catch (Exception $eh) {
        echo 'Something went wrong! Error: ' . $e->getMessage();
    }
?>