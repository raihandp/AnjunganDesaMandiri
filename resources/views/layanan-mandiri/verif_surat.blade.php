<!DOCTYPE html>
<html>
<head>
  <title>Preview Surat</title>
  <style>
    body {
      font-family: sans-serif;
      color: white;
      background: linear-gradient(to top, #ff9472, #f2709c);
      margin: 30px;
    }
    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .header {
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
      margin-top: 30px;
      align-items: center;
    }
    .form input[type="string"] {
      padding: 10px;
      border: 1px solid #000000;
      width: 300px;
      border-radius: 8px;
    }
    .button-container {
      text-align: center;
      margin: 20px;
    }
    .button {
      background-color: orange;
      color: white;
      border: 1px solid #ffffff;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
      margin: 0 10px;
    }
    .button:hover {
      background-color: darkorange;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h2>Judul Surat</h2>
      <h3>Apakah data yang Anda masukkan sudah sesuai?</h3>
    </div>
    <div class="preview-container">
      <iframe src="/skd" width="100%" height="400px"></iframe>
    </div>
    <div class="form">
      <label style="margin-bottom: 10px;">Nomor Ponsel :</label>
      <input type="string" placeholder="Masukkan Nomor HP" required>
    </div>
    <p>(Bila surat sudah selesai diproses akan kami hubungi ke nomor yang Anda masukkan)</p>
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