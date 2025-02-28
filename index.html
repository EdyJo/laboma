<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permohonan Surat Keterangan</title>
    <script src="https://www.gstatic.com/firebasejs/9.0.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.0.0/firebase-database.js"></script>
</head>
<body>
    <h1>Form Permohonan Surat Keterangan</h1>
    <form id="form-permohonan">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required><br><br>

        <label for="surat-keterangan">Surat Keterangan:</label>
        <input type="text" id="surat-keterangan" name="surat-keterangan" required><br><br>

        <label for="nomor">Nomor:</label>
        <input type="text" id="nomor" name="nomor" required><br><br>

        <label for="tanggal">Tanggal:</label>
        <input type="date" id="tanggal" name="tanggal" required><br><br>

        <label for="petugas">Petugas (Nama):</label>
        <input type="text" id="petugas" name="petugas" required><br><br>

        <button type="submit">Kirim</button>
    </form>

    <script>
        // Firebase Configuration
        const firebaseConfig = {
            apiKey: "YOUR_FIREBASE_API_KEY",
            authDomain: "YOUR_FIREBASE_AUTH_DOMAIN",
            databaseURL: "YOUR_FIREBASE_DATABASE_URL",
            projectId: "YOUR_FIREBASE_PROJECT_ID",
            storageBucket: "YOUR_FIREBASE_STORAGE_BUCKET",
            messagingSenderId: "YOUR_FIREBASE_SENDER_ID",
            appId: "YOUR_FIREBASE_APP_ID"
        };
        
        // Initialize Firebase
        const app = firebase.initializeApp(firebaseConfig);
        const db = firebase.database();

        // Form submission handler
        document.getElementById("form-permohonan").addEventListener("submit", function(e) {
            e.preventDefault();

            const nama = document.getElementById("nama").value;
            const nim = document.getElementById("nim").value;
            const suratKeterangan = document.getElementById("surat-keterangan").value;
            const nomor = document.getElementById("nomor").value;
            const tanggal = document.getElementById("tanggal").value;
            const petugas = document.getElementById("petugas").value;

            // Check if the NIM already has a letter request
            db.ref('permohonan').orderByChild('nim').equalTo(nim).once('value', function(snapshot) {
                if (snapshot.exists()) {
                    alert("Pemohon sudah memiliki surat keterangan.");
                } else {
                    // Save the data to Firebase Database
                    db.ref('permohonan').push({
                        nama: nama,
                        nim: nim,
                        suratKeterangan: suratKeterangan,
                        nomor: nomor,
                        tanggal: tanggal,
                        petugas: petugas
                    });

                    alert("Permohonan telah dikirim.");
                }
            });
        });
    </script>
</body>
</html>
