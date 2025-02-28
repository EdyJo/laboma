<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tandatangani Surat Keterangan</title>
    <script src="https://www.gstatic.com/firebasejs/9.0.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.0.0/firebase-database.js"></script>
</head>
<body>
    <h1>Form Tandatangan Surat Keterangan</h1>
    <form id="form-tandatangan">
        <label for="nip">NIP Kalab:</label>
        <input type="text" id="nip" name="nip" required><br><br>

        <label for="surat-nomor">Nomor Surat:</label>
        <input type="text" id="surat-nomor" name="surat-nomor" required><br><br>

        <label for="tandatangan">Tanda Tangan (Upload Image):</label>
        <input type="file" id="tandatangan" name="tandatangan" accept="image/*" required><br><br>

        <button type="submit">Tandatangani</button>
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
        const storage = firebase.storage();

        // Form submission handler for Kalab
        document.getElementById("form-tandatangan").addEventListener("submit", function(e) {
            e.preventDefault();

            const nip = document.getElementById("nip").value;
            const nomorSurat = document.getElementById("surat-nomor").value;
            const tandatangan = document.getElementById("tandatangan").files[0];

            // Validate if NIP and Surat Nomor exists
            db.ref('permohonan').orderByChild('nomor').equalTo(nomorSurat).once('value', function(snapshot) {
                if (snapshot.exists()) {
                    const suratData = snapshot.val();
                    const suratKey = Object.keys(suratData)[0];

                    // Upload the signature image
                    const storageRef = storage.ref('tandatangan/' + nip + '-' + nomorSurat);
                    const uploadTask = storageRef.put(tandatangan);

                    uploadTask.on('state_changed', function(snapshot) {
                        // Progress function (optional)
                    }, function(error) {
                        alert("Terjadi kesalahan saat meng-upload tanda tangan.");
                    }, function() {
                        uploadTask.snapshot.ref.getDownloadURL().then(function(downloadURL) {
                            // Store the signature URL in Firebase
                            db.ref('permohonan/' + suratKey).update({
                                tandatanganURL: downloadURL,
                                nipKalab: nip
                            });

                            alert("Surat keterangan telah ditandatangani.");
                        });
                    });
                } else {
                    alert("Surat tidak ditemukan.");
                }
            });
        });
    </script>
</body>
</html>
