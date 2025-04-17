const express = require('express');
const app = express();
const port = 3000;

// Array kutipan absurd
const kutipan = [
  "Bundaran HI kalau diputarin jadi apa? HIHIHI.",
  "Kenapa kita naik taxi, kita nggak boleh bayar uang dulu? Karena uang dulu gak laku.",
  "Kayu apa yang garing? Kayupuk.",
  "Kenapa kucing bunyinya meong? Karena kalau gukguk itu anjing.",
  "Kapan waktu yang tepat untuk membuka pintu? Saat pintunya tertutup.",
  "Apa yang dimiliki kucing tapi tidak dimiliki hewan lain? Anak kucing.",
  "Istri apa yang kecil? Microwife.",
  "Monyet apa yang gondrong? Monyet rambutnya panjang.",
  "Penyakit apa yang nendang sama mukul? Kung Flu."
];

// Array emoji acak
const emojis = [
  "🤦‍♂️", "🐒", "🌮", "🤯", "🥳", "🦄", "🦥", "🍕", "🛌",
  "🚀", "🦖", "⏰", "🧠", "🌈", "🤡", "🧟‍♂️", "🧙‍♂️", "🦸‍♀️"
];

// Fungsi buat HTML
const createMemePage = (quote, emoji) => `
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meme Motivasi Absurd</title>
  <style>
    body {
      background-color: #ff9966;
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }
    .meme-container {
      background: linear-gradient(45deg, #ff6b6b, #5f27cd);
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 10px 20px rgba(0,0,0,0.3);
      text-align: center;
      max-width: 500px;
      color: white;
    }
    .quote {
      font-size: 24px;
      margin-bottom: 10px;
      font-weight: bold;
    }
    .emoji {
      font-size: 70px;
      margin-bottom: 20px;
    }
    button {
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #6c5ce7;
      color: white;
      border: none;
      border-radius: 50px;
      font-size: 16px;
      cursor: pointer;
      transition: transform 0.2s;
    }
    button:hover {
      transform: scale(1.05);
    }
    h1, h2 {
      color: white;
      margin: 5px;
    }
  </style>
</head>
<body>
  <div class="meme-container">
    <div class="quote">"${quote}"</div>
    <div class="emoji">${emoji}</div>
  </div>
  <h1>Nurul Asimarrahmah</h1>
  <h2>SMKN 2 WAJO</h2>
  <button onclick="window.location.reload()">Meme Baru!</button>
</body>
</html>
`;

// Route halaman utama
app.get('/', (req, res) => {
  const randomQuote = kutipan[Math.floor(Math.random() * kutipan.length)];
  const randomEmoji = emojis[Math.floor(Math.random() * emojis.length)];
  res.send(createMemePage(randomQuote, randomEmoji));
});

// Jalankan server
app.listen(port, () => {
  console.log(`Aplikasi meme absurd berjalan di http://localhost:${port}`);
});