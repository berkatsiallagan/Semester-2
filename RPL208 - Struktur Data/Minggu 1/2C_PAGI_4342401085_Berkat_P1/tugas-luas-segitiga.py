# Program mengonversi RGB ke Grayscale

def toGray(R: float, G: float, B: float) -> float:
    """
    Fungsi untuk mengonversi nilai RGB menjadi grayscale
    Menggunakan rumus: grayscale = (0.3 * R) + (0.59 * G) + (0.11 * B)
    """
    return (0.3 * R) + (0.59 * G) + (0.11 * B)

# Meminta pengguna memasukkan nilai warna merah (Red), hijau (Green), dan biru (Blue)
R = float(input("Masukkan nilai Red (R): "))
G = float(input("Masukkan nilai Green (G): "))
B = float(input("Masukkan nilai Blue (B): "))

# Validasi input (harus dalam rentang 0-255)
if not (0 <= R <= 255 and 0 <= G <= 255 and 0 <= B <= 255):
    print("Error: Nilai RGB harus antara 0 hingga 255.")
    exit()

# Menghitung grayscale dengan memanggil fungsi toGray
grayscale = toGray(R, G, B)

# Menampilkan hasil grayscale ke layar dengan 2 angka desimal
print(f"Nilai grayscale adalah: {grayscale:.1f}")
