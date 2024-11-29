<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Prestasi</title>
    <link href="../../../public/css/output.css" rel="stylesheet" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
    </style>
</head>
<body class="font-[poppins]">
    <!-- sidebar -->
    <aside
      id="default-sidebar"
      class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
      aria-label="Sidebar"
    >
      <div class="h-full px-3 py-4 overflow-y-auto bg-[#132145]">
        <ul class="space-y-2 font-medium">
          <li>
            <div
              class="flex items-center justify-center text-4xl p-4 text-white rounded-lg"
            >
              <span class="ms-3 font-bold">ArchieveIT</span>
            </div>
          </li>
          <li>
            <a
              href="#"
              class="flex items-center p-2 mt-10 text-white rounded-lg hover:bg-[#3063C559]"
            >
              <img
                src="../../../public/img/Home_fill (1).png"
                alt="logo"
                class="w-5 h-5"
              />
              <span class="flex-1 ms-3 whitespace-nowrap">Beranda</span>
            </a>
          </li>
          <li>
            <a
              href="formPrestasi.html"
              class="flex items-center p-2 text-white rounded-lg hover:bg-[#3063C559]"
            >
              <img
                src="../../../public/img/File_dock_add_fill.png"
                alt="logo"
                class="w-5 h-5"
              />
              <span class="flex-1 ms-3 whitespace-nowrap">Form Prestasi</span>
            </a>
          </li>
          <li>
            <a
              href="#"
              class="flex items-center p-2 text-[#FEC01A] rounded-lg bg-[#3063C559]"
            >
              <img
                src="../../../public/img/File_dock_search_fill (1).png"
                alt="logo"
                class="w-5 h-5"
              />
              <span class="flex-1 ms-3 whitespace-nowrap">Daftar Prestasi</span>
            </a>
          </li>
          <li>
            <a
              href="#"
              class="flex items-center p-2 text-white rounded-lg hover:bg-[#3063C559]"
            >
              <img
                src="../../../public/img/Administrasi-data.png"
                alt="logo"
                class="w-5 h-5"
              />
              <span class="flex-1 ms-3 whitespace-nowrap">Administrasi Data</span>
            </a>
          </li>
          <li>
            <a
              href="#"
              class="flex items-center p-2 text-white rounded-lg hover:bg-[#3063C559]"
            >
              <img
                src="../../../public/img/User_circle.png"
                alt="logo"
                class="w-5 h-5"
              />
              <span class="flex-1 ms-3 whitespace-nowrap">Lihat Profil</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>

    <section class="sm:ml-64 bg-blue-50 min-h-screen">
        <!-- profil -->
      <section class="flex justify-end items-center p-8 space-x-3">
        <p class="font-bold">Admin12345</p>
        <img src="../../../public/img/Logo_archhieveIT.png" alt="logo" class="w-8 h-auto">
      </section>

      <!-- daftar prestasi -->
      <section class="flex-col justify-start pl-6">
        <p class="font-bold text-3xl">Daftar prestasi</p>
      </section>

      <!-- btn ekspor -->
       <section class="flex justify-end pr-6">
            <a href="#">
                <button class="flex items-center space-x-2 py-2 px-6 text-white bg-[#132145] rounded-lg w-auto">
                  <img src="../../../public/img/Export_fill.png" alt="logo" class="w-5 h-5">
                  <p>ekspor</p></button>
            </a>
       </section>

       <!-- cari -->
      <section class="flex justify-between p-6">
        <div class="flex items-center bg-white w-1/3 p-2 rounded-md border shadow-md focus-within:ring-2 focus-within:ring-blue-500">
            <img src="../../../public/img/Search (1).png" alt="logo" class="w-5 h-5">
          <input
            type="text"
            id="cari"
            placeholder=""
            class="bg-white flex focus:outline-none"
          />
        </div>
        <div class="flex right-0 space-x-2">
          <div class="flex items-center">
            <span class="">Lihat</span>
            <select
              class="mx-2 border rounded-lg px-2 py-1 text-sm bg-white shadow-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
              <option value="10">10</option>
              <option value="20">20</option>
              <option value="50">50</option>
            </select>
            <span class="">entri</span>
          </div>
          <div class="flex items-center">
            <select
              class="right-0 mx-2 border rounded-lg px-2 py-1 text-sm bg-white shadow-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
              <option>Tingkat</option>
              <option>Provinsi</option>
            </select>
          </div>
          <div class="flex items-center">
            <select
              class="right-0 mx-2 border rounded-lg px-2 py-1 text-sm bg-white shadow-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
              <option>Kategori</option>
              <option>Kategori</option>
            </select>
          </div>
          <div class="flex items-center">
            <select
              class="right-0 mx-2 border rounded-lg px-2 py-1 text-sm bg-white shadow-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
              <option>VALID</option>
              <option>INVALID</option>
            </select>
          </div>
        </div>
      </section>

      <!-- table -->
      <section class="mx-6 overflow-x-auto bg-white shadow-md rounded-2xl">
        <table class="min-w-full bg-white text-center">
          <thead>
            <tr>
              <th
                class="w-1/12 py-2 px-4 bg-blue-950 text-white font-semibold border border-blue-950"
              >
                No
              </th>
              <th
                class="w-auto py-2 px-4 bg-blue-950 text-white font-semibold border border-blue-950"
              >
                Nama Kompetisi
              </th>
              <th
                class="w-auto py-2 px-4 bg-blue-950 text-white font-semibold border border-blue-950"
              >
                Tingkat Kompetisi
              </th>
              <th
                class="w-auto py-2 px-4 bg-blue-950 text-white font-semibold border border-blue-950"
              >
                Kategori Kompetisi
              </th>
              <th
                class="w-auto py-2 px-4 bg-blue-950 text-white font-semibold border border-blue-950"
              >
                Juara
              </th>
              <th
                class="w-1/12 py-2 px-4 bg-blue-950 text-white font-semibold border border-blue-950"
              >
                Poin
              </th>
              <th
                class="w-1/12 py-2 px-4 bg-blue-950 text-white font-semibold border border-blue-950"
              >
                Aksi
              </th>
            </tr>
          </thead>
          <tbody class="text-gray-700">
            <tr>
              <td class="py-2 px-4 border border-blue-950">1</td>
              <td class="py-2 px-4 border border-blue-950">COMFEST</td>
              <td class="py-2 px-4 border border-blue-950">Nasional</td>
              <td class="py-2 px-4 border border-blue-950">SAINS</td>
              <td class="py-2 px-4 border border-blue-950">Juara 1</td>
              <td class="py-2 px-4 border border-blue-950">100</td>
              <td class="py-2 px-4 border border-blue-950">
                <button
                      class=""
                    >
                      <img src="../../../public/img/Aksi.png" alt="logo" class="p-2 bg-[#132145] rounded-md">
                    </button>
              </td>
            </tr>
            <tr>
              <td class="py-2 px-4 border border-blue-950">2</td>
              <td class="py-2 px-4 border border-blue-950">PKM</td>
              <td class="py-2 px-4 border border-blue-950">Nasional</td>
              <td class="py-2 px-4 border border-blue-950">SAINS</td>
              <td class="py-2 px-4 border border-blue-950">Juara 2</td>
              <td class="py-2 px-4 border border-blue-950">75</td>
              <td class="py-2 px-4 border border-blue-950">
                <button
                      class=""
                    >
                      <img src="../../../public/img/Aksi.png" alt="logo" class="p-2 bg-[#132145] rounded-md">
                    </button>
              </td>
            </tr>
          </tbody>
        </table>
      </section>
    </section>

    <!-- footer -->
       <?php include __DIR__ . '/../../components/Footer.php'; ?>
</body>
</html>