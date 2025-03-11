# Program mengonversi RGB ke Grayscale

# Meminta pengguna memasukkan nilai warna merah (Red), hijau (Green), dan biru (Blue)
R = float(input("Masukkan nilai Red (R): "))  # Input nilai merah (R) dalam bentuk float
G = float(input("Masukkan nilai Green (G): "))  # Input nilai hijau (G) dalam bentuk float
B = float(input("Masukkan nilai Blue (B): "))  # Input nilai biru (B) dalam bentuk float

# Menghitung nilai grayscale menggunakan rumus standar
# Rumus: grayscale = (0.3 * R) + (0.59 * G) + (0.11 * B)
# Bobot ini digunakan karena mata manusia lebih sensitif terhadap warna hijau

grayscale = (0.3 * R) + (0.59 * G) + (0.11 * B)  # Perhitungan grayscale

# Menampilkan hasil grayscale ke layar
print(f"Nilai grayscale adalah: {grayscale}")  # Output hasil dalam format f-string
