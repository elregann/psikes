<!DOCTYPE html>
<html>
<head>
  <title>Halaman Admin - Posting Berita</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    h2 {
      margin-top: 0;
    }

    form {
      margin-top: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"],
    textarea {
      width: 100%;
      padding: 10px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }

    input[type="submit"] {
      padding: 10px 20px;
      font-size: 14px;
      font-weight: bold;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <h2>Halaman Admin - Posting Berita</h2>
  <form action="proses_posting_berita.php" method="POST">
    <label for="judul">Judul Berita:</label>
    <input type="text" id="judul" name="judul" required>

    <label for="isi">Isi Berita:</label>
    <textarea id="isi" name="isi" rows="10" required></textarea>

    <input type="submit" value="Post Berita">
  </form>
</body>
</html>
