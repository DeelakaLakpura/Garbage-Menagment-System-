<!DOCTYPE html>
<html>
<head>
  <title>Article Submission</title>
  <style>
    body {
      font-family: 'poppins';
      background-image: url('background.jpg');
      background-repeat: no-repeat;
      background-size: cover;
    
      margin: 0;
      padding: 20px;
    }
    
    .container {
      max-width: 800px;
      margin: 0 auto;
      align-items: center;
      text-align: center;
      background-color: #e8f5e9; /* Light green background color */
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin-top: 110px;
   
    }
    
    h1 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
      text-decoration: underline;
    }
    
    label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
      color: #555;
    }
    
    input[type="text"],
    textarea {
      width: 90%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      resize: vertical;
      font-size: 14px;
    }
    
    input[type="file"] {
      margin-top: 5px;
    }
    
    button[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      
      cursor: pointer;
      font-size: 16px;
    }
    
    button[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Write Your Article</h1>
    <form id="articleForm">
   
      <input type="text" placeholder="Enter Title Here" id="articleTitle" required>
  <br>
  <br>
      <textarea id="articleContent" rows="10" placeholder="Enter Content Here" required></textarea>
    
      <br><br>
      
      <input type="file" id="imageUpload" title="Upload Images"   multiple>
    
      <button type="submit">Submit</button>
    </form>
  </div>

 
</body>
</html>
