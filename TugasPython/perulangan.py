# Inisialisasi Array
daftar_nilai = [80, 90, 75, 85, 100]

print("Daftar Nilai Siswa:")

# Implementasi Perulangan untuk membaca Array
for nilai in daftar_nilai:
    if nilai >= 80:
        print(f"Nilai {nilai}: LULUS")
    else:
        print(f"Nilai {nilai}: REMEDIAL")