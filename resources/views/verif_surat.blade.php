<!DOCTYPE html>
<html>
<head>
  <title>Preview Surat</title>
  <style>
    body {
      font-family: sans-serif;
    }
    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .header {
      background-color: #f0f0f0;
      padding: 10px;
      text-align: center;
      margin-bottom: 20px;
    }
    .preview-container {
      border: 1px solid #ddd;
      padding: 10px;
      width: 80%;
    }
    .form {
      margin-top: 20px;
      align-items: center;
    }
    .form input[type="number"] {
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ddd;
      width: 300px;
    }
    .button-container {
      text-align: center;
      margin-top: 20px;
    }
    .button {
      background-color: orange;
      color: white;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
    }
    .button:hover {
      background-color: darkorange;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Judul Surat</h1>
      <h2>Nomor Surat: 123/ABC/2023</h2>
    </div>
    <div class="preview-container">
      <iframe src="/skd" width="100%" height="400px"></iframe>
    </div>
    <div class="form">
      <label style="margin-bottom: 10px;">Nomor Ponsel :</label>
      <input type="string" placeholder="Masukkan Nomor HP" required>
    </div>
    <div class="button-container">
      <button class="button" onclick="window.history.back();">Kembali</button>
      <button type="submit" class="button" onclick="window.location.href='/berhasil';">Lanjutkan</button>
    </div>
  </div>

  <script>
    function submitForm() {
      // Logika untuk mengirim data form
      alert("Form akan dikirim!");
    }
  </script>
</body>
</html>