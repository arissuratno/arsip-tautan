<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Manajemen Data Pegawai JSON (Permanent)</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap');
    body { font-family: 'Inter', sans-serif; background-color: #f8fafc; }
    .card { box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: all .3s ease; }
  </style>
</head>
<body class="p-6 md:p-12 flex flex-col items-center min-h-screen">

  <div class="w-full max-w-3xl">
    <header class="text-center mb-8">
      <h1 class="text-3xl font-bold text-gray-800">📁 Manajemen Data Link Pegawai</h1>
      <p class="text-sm text-gray-600 mt-2">Data disimpan permanen di SERVER <b>SDN PEJUANG 7.</p>
    </header>

    <!-- FORM INPUT -->
    <div class="card bg-white p-8 rounded-xl mb-8">
      <h2 class="text-xl font-semibold text-gray-700 mb-4 border-b pb-2">Input / Edit Data Pegawai</h2>
      <form id="formPegawai">
        <div class="mb-3">
          <label class="text-sm font-medium">NIP / ID Pegawai</label>
          <input id="nip_id" required class="w-full p-3 border rounded-lg" placeholder="Masukkan NIP unik..." />
        </div>
        <div class="mb-3">
          <label class="text-sm font-medium">Nama Pegawai</label>
          <input id="nama_pegawai" required class="w-full p-3 border rounded-lg" placeholder="Contoh: Budi Santoso" />
        </div>
        <div class="mb-3">
          <label class="text-sm font-medium">Jabatan / Departemen</label>
          <input id="jabatan" required class="w-full p-3 border rounded-lg" placeholder="Contoh: Staf Keuangan" />
        </div>
        <div class="mb-3">
          <label class="text-sm font-medium">Link Google Drive</label>
          <input id="link_drive" required type="url" class="w-full p-3 border rounded-lg" placeholder="https://drive.google.com/..." />
        </div>
        <div class="mb-4">
          <label class="text-sm font-medium">Tanggal Input / Update</label>
          <input id="tanggal" type="datetime-local" class="w-full p-3 border rounded-lg" />
        </div>
        <button type="submit" class="w-full bg-indigo-600 text-white p-3 rounded-lg font-semibold hover:bg-indigo-700">
          💾 Simpan / Update Data
        </button>
        <p id="msg" class="mt-3 text-sm hidden"></p>
      </form>
    </div>

    <!-- DAFTAR PEGAWAI -->
    <div class="card bg-white p-8 rounded-xl">
      <h2 class="text-xl font-semibold text-gray-700 mb-4 border-b pb-2">Daftar Pegawai</h2>
      <input id="cari" placeholder="🔍 Cari nama / NIP..." class="w-full p-3 border rounded-lg mb-4" />
      <div id="list" class="space-y-3 text-sm"></div>
    </div>
  </div>

<script>
let pegawaiData = [];
const deletePassword = "sira123"; // 🔒 Ganti password ini
const msg = document.getElementById("msg");
const list = document.getElementById("list");

function showMsg(text, type = "info") {
  msg.classList.remove("hidden", "text-green-600", "text-red-600", "text-yellow-600");
  msg.classList.add(type === "error" ? "text-red-600" : type === "success" ? "text-green-600" : "text-yellow-600");
  msg.innerHTML = text;
  setTimeout(() => msg.classList.add("hidden"), 3000);
}

// ===== LOAD DATA DARI SERVER =====
async function loadData() {
  try {
    const res = await fetch("muat_data.php");
    pegawaiData = await res.json();
    renderList(pegawaiData);
    showMsg(`✅ ${pegawaiData.length} data pegawai dimuat dari server.`, "success");
  } catch (e) {
    showMsg("⚠️ Gagal memuat data dari server.", "error");
  }
}

// ===== SIMPAN DATA KE SERVER =====
async function saveData() {
  try {
    const res = await fetch("simpan_data.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify(pegawaiData, null, 2),
    });
    const result = await res.json();
    if (result.status === "success") showMsg("✅ Data tersimpan permanen!", "success");
    else showMsg("❌ Gagal menyimpan data.", "error");
  } catch (e) {
    showMsg("❌ Terjadi kesalahan saat menyimpan.", "error");
  }
}

// ===== RENDER LIST PEGAWAI =====
function renderList(data) {
  if (!data.length) {
    list.innerHTML = `<p class='text-gray-400 italic'>Belum ada data.</p>`;
    return;
  }

  const sorted = [...data].sort((a, b) => a.nama_pegawai.localeCompare(b.nama_pegawai));
  list.innerHTML = sorted.map(item => `
    <div class="p-4 border rounded-lg bg-gray-50 flex flex-col md:flex-row justify-between items-start md:items-center">
      <div>
        <p class="font-semibold text-indigo-700">${item.nama_pegawai}</p>
        <p class="text-sm text-gray-600">NIP: ${item.nip_id}</p>
        <p class="text-xs text-gray-500">Tanggal: ${item.tanggal || '-'}</p>
        <a href="${item.link_drive}" target="_blank" class="text-xs text-blue-600 hover:underline">📎 Lihat Berkas</a>
      </div>
      <div class="flex gap-2 mt-3 md:mt-0">
        <button onclick="hapusData('${item.nip_id}')" class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">Hapus</button>
      </div>
    </div>
  `).join('');
}

// ===== SIMPAN / UPDATE =====
document.getElementById("formPegawai").addEventListener("submit", async e => {
  e.preventDefault();
  const nip = nip_id.value.trim();
  const nama = nama_pegawai.value.trim();
  const jab = jabatan.value.trim();
  const link = link_drive.value.trim();
  let tgl = tanggal.value;

  // Jika kosong, isi otomatis tanggal sekarang
  if (!tgl) {
    const now = new Date();
    const iso = now.toISOString().slice(0,16);
    tgl = iso;
    tanggal.value = iso;
  }

  if (!nip || !nama || !jab || !link) {
    showMsg("⚠️ Semua kolom wajib diisi.", "error");
    return;
  }

  const existingIndex = pegawaiData.findIndex(p => p.nip_id === nip);
  const newData = { nip_id: nip, nama_pegawai: nama, jabatan: jab, link_drive: link, tanggal: tgl };

  if (existingIndex >= 0) pegawaiData[existingIndex] = newData;
  else pegawaiData.push(newData);

  await saveData();
  renderList(pegawaiData);
  e.target.reset();
  tanggal.value = ""; // biar kosong lagi
});

// ===== HAPUS DATA DENGAN PASSWORD =====
async function hapusData(nip) {
  const pass = prompt("Masukkan password untuk menghapus data:");
  if (pass !== deletePassword) {
    showMsg("❌ Password salah! Data tidak dihapus.", "error");
    return;
  }

  if (!confirm("Yakin mau hapus data ini secara permanen?")) {
    showMsg("⚠️ Dibatalkan, data aman.", "info");
    return;
  }

  pegawaiData = pegawaiData.filter(p => p.nip_id !== nip);
  await saveData();
  renderList(pegawaiData);
  showMsg("🗑️ Data berhasil dihapus dari server.", "success");
}

// ===== EDIT DATA =====
function editData(nip) {
  const p = pegawaiData.find(x => x.nip_id === nip);
  if (!p) return;
  nip_id.value = p.nip_id;
  nama_pegawai.value = p.nama_pegawai;
  jabatan.value = p.jabatan;
  link_drive.value = p.link_drive;
  tanggal.value = p.tanggal ? p.tanggal.slice(0,16) : "";
  showMsg(`✏️ Data ${p.nama_pegawai} dimuat ke form.`, "info");
}

// ===== SEARCH =====
document.getElementById("cari").addEventListener("input", e => {
  const q = e.target.value.toLowerCase();
  const hasil = pegawaiData.filter(p =>
    p.nama_pegawai.toLowerCase().includes(q) || p.nip_id.toLowerCase().includes(q)
  );
  renderList(hasil);
});

// ===== INISIALISASI =====
window.onload = loadData;
</script>
</body>
</html>
