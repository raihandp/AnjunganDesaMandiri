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
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .form input[type="text"] {
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ddd;
      width: 300px;
    }
    .form button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
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
      <iframe src="{{ route('preview.surat') }}" width="100%" height="400px"></iframe>
    </div>
    <div class="form">
      <input type="text" placeholder="Masukkan Nomor HP" required>
      <div>
        <button onclick="window.history.back();">Kembali</button>
        <button onclick="submitForm();">Lanjutkan</button>
      </div>
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