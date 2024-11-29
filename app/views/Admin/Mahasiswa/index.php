<section class="sm:ml-64 bg-blue-50 min-h-screen">

	<?php require_once 'templates/profile.php'; ?>

	<!-- Data Mahasiswa-->
	<section class="flex-col justify-start pl-6">
		<p class="font-bold text-3xl">Data Mahasiswa</p>
	</section>

	<!-- Daftar Program Studi-->
	<section class="relative p-6">
		<!-- Static parent -->
		<div class="absolute ml-8 py-2 px-4 rounded-lg text-white bg-[#F99D1C]">
			Daftar Program Studi
		</div>
		<div class="static mt-5 p-6 bg-white border-2 rounded-lg border-[#FEC01A] space-y-2">
			<!-- cari -->
			<section class="flex justify-between p-6">
				<div
					class="flex items-center bg-white w-1/3 p-2 rounded-md border shadow-md focus-within:ring-2 focus-within:ring-blue-500">
					<img src="../../../public/img/Search (1).png" alt="logo" class="w-5 h-5" />
					<input type="text" id="cari" placeholder="" class="bg-white flex focus:outline-none" />
				</div>

				<!-- btn tambah -->
				<a href="<?= BASEURL; ?>./">
					<button
						class="flex items-center font-semibold space-x-2 py-2 px-6 text-white bg-[#132145] rounded-lg w-auto">
						<img src="../../../public/img/add.png" alt="logo" class="w-5 h-5" />
						<p>Tambah</p>
					</button>
				</a>
			</section>

			<!-- table  -->
			<div class="mt-10 overflow-x-auto bg-white shadow-md rounded-2xl">
				<table class="min-w-full bg-white text-center">
					<thead>
						<tr>
							<th class="py-2 px-4 w-1/12 bg-blue-950 text-white font-semibold border border-blue-950">
								No
							</th>
							<th class="py-2 px-4 w-auto bg-blue-950 text-white font-semibold border border-blue-950">
								Program Studi
							</th>
							<th class="py-2 px-4 w-1/4 bg-blue-950 text-white font-semibold border border-blue-950">
								Aksi
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="py-2 px-4 border border-blue-950">1</td>
							<td class="py-2 px-4 border border-blue-950 text-left">
								D-IV Teknik Informatika
							</td>
							<td class="py-2 px-4 border border-blue-950">
								<button class="bg-[#132145] py-2 px-2 rounded-md mr-2">
									<img src="../../../public/img/Edit_fill.png" alt="Edit" class="" />
								</button>
								<button class="bg-[#FF3B30] py-2 px-2 rounded-md">
									<img src="../../../public/img/Trash.png" alt="Delete" class="" />
								</button>
							</td>
						</tr>
						<tr>
							<td class="py-2 px-4 border border-blue-950">2</td>
							<td class="py-2 px-4 border border-blue-950 text-left">
								D-IV Sistem Informasi Bisnis
							</td>
							<td class="py-2 px-4 border border-blue-950">
								<button class="bg-[#132145] py-2 px-2 rounded-md mr-2">
									<img src="../../../public/img/Edit_fill.png" alt="Edit" class="" />
								</button>
								<button class="bg-[#FF3B30] py-2 px-2 rounded-md">
									<img src="../../../public/img/Trash.png" alt="Delete" class="" />
								</button>
							</td>
						</tr>

					</tbody>
				</table>
			</div>
		</div>
	</section>

	<!-- Daftar mhs-->
	<section class="relative p-6">
		<!-- Static parent -->
		<div class="absolute ml-8 py-2 px-4 rounded-lg text-white bg-[#F99D1C]">
			Daftar Mahasiswa
		</div>
		<div class="static mt-5 p-6 bg-white border-2 rounded-lg border-[#FEC01A] space-y-2">
			<!-- cari -->
			<section class="flex justify-between p-6">
				<div
					class="flex items-center bg-white w-1/3 p-2 rounded-md border shadow-md focus-within:ring-2 focus-within:ring-blue-500">
					<img src="../../../public/img/Search (1).png" alt="logo" class="w-5 h-5" />
					<input type="text" id="cari" placeholder="" class="bg-white flex focus:outline-none" />
				</div>

				<!-- btn tambah -->
				<a href="<?= BASEURL; ?>./">
					<button
						class="flex items-center font-semibold space-x-2 py-2 px-6 text-white bg-[#132145] rounded-lg w-auto">
						<img src="../../../public/img/add.png" alt="logo" class="w-5 h-5" />
						<p>Tambah</p>
					</button>
				</a>
			</section>

			<!-- table  -->
			<div class="mt-10 overflow-x-auto bg-white shadow-md rounded-2xl">
				<table class="min-w-full bg-white text-center">
					<thead>
						<tr>
							<th class="py-2 px-4 w-1/12 bg-blue-950 text-white font-semibold border border-blue-950">
								No
							</th>
							<th class="py-2 px-4 w-auto bg-blue-950 text-white font-semibold border border-blue-950">
								Nama
							</th>
							<th class="py-2 px-4 w-auto bg-blue-950 text-white font-semibold border border-blue-950">
								NIM
							</th>
							<th class="py-2 px-4 w-auto bg-blue-950 text-white font-semibold border border-blue-950">
								Program Studi
							</th>
							<th class="py-2 px-4 w-1/4 bg-blue-950 text-white font-semibold border border-blue-950">
								Aksi
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="py-2 px-4 border border-blue-950">1</td>
							<td class="py-2 px-4 border border-blue-950">Adam Baskara</td>
							<td class="py-2 px-4 border border-blue-950">2341720010</td>
							<td class="py-2 px-4 border border-blue-950">DIV Teknik Informatika</td>
							<td class="py-2 px-4 border border-blue-950">
								<button class="bg-[#132145] py-2 px-2 rounded-md mr-2">
									<img src="../../../public/img/Aksi.png" alt="Edit" class="" />
								</button>
								<button class="bg-[#132145] py-2 px-2 rounded-md mr-2">
									<img src="../../../public/img/Edit_fill.png" alt="Edit" class="" />
								</button>
								<button class="bg-[#FF3B30] py-2 px-2 rounded-md">
									<img src="../../../public/img/Trash.png" alt="Delete" class="" />
								</button>
							</td>
						</tr>
						<tr>
							<td class="py-2 px-4 border border-blue-950">2</td>
							<td class="py-2 px-4 border border-blue-950">Adika Saputra</td>
							<td class="py-2 px-4 border border-blue-950">2341720012</td>
							<td class="py-2 px-4 border border-blue-950">DIV Teknik Informatika</td>
							<td class="py-2 px-4 border border-blue-950">
								<button class="bg-[#132145] py-2 px-2 rounded-md mr-2">
									<img src="../../../public/img/Aksi.png" alt="Edit" class="" />
								</button>
								<button class="bg-[#132145] py-2 px-2 rounded-md mr-2">
									<img src="../../../public/img/Edit_fill.png" alt="Edit" class="" />
								</button>
								<button class="bg-[#FF3B30] py-2 px-2 rounded-md">
									<img src="../../../public/img/Trash.png" alt="Delete" class="" />
								</button>
							</td>
						</tr>
						<tr>
							<td class="py-2 px-4 border border-blue-950">3</td>
							<td class="py-2 px-4 border border-blue-950">Arief Prasetyo</td>
							<td class="py-2 px-4 border border-blue-950">2341720013</td>
							<td class="py-2 px-4 border border-blue-950">DIV Teknik Informatika</td>
							<td class="py-2 px-4 border border-blue-950">
								<button class="bg-[#132145] py-2 px-2 rounded-md mr-2">
									<img src="../../../public/img/Aksi.png" alt="Edit" class="" />
								</button>
								<button class="bg-[#132145] py-2 px-2 rounded-md mr-2">
									<img src="../../../public/img/Edit_fill.png" alt="Edit" class="" />
								</button>
								<button class="bg-[#FF3B30] py-2 px-2 rounded-md">
									<img src="../../../public/img/Trash.png" alt="Delete" class="" />
								</button>
							</td>
						</tr>
						<tr>
							<td class="py-2 px-4 border border-blue-950">4</td>
							<td class="py-2 px-4 border border-blue-950">Abigail Pratama Matadewa</td>
							<td class="py-2 px-4 border border-blue-950">2341720014</td>
							<td class="py-2 px-4 border border-blue-950">DIV Teknik Informatika</td>
							<td class="py-2 px-4 border border-blue-950">
								<button class="bg-[#132145] py-2 px-2 rounded-md mr-2">
									<img src="../../../public/img/Aksi.png" alt="Edit" class="" />
								</button>
								<button class="bg-[#132145] py-2 px-2 rounded-md mr-2">
									<img src="../../../public/img/Edit_fill.png" alt="Edit" class="" />
								</button>
								<button class="bg-[#FF3B30] py-2 px-2 rounded-md">
									<img src="../../../public/img/Trash.png" alt="Delete" class="" />
								</button>
							</td>
						</tr>
						<tr>
							<td class="py-2 px-4 border border-blue-950">5</td>
							<td class="py-2 px-4 border border-blue-950">Baigon Sidomuncul</td>
							<td class="py-2 px-4 border border-blue-950">2341720015</td>
							<td class="py-2 px-4 border border-blue-950">DIV Teknik Informatika</td>
							<td class="py-2 px-4 border border-blue-950">
								<button class="bg-[#132145] py-2 px-2 rounded-md mr-2">
									<img src="../../../public/img/Aksi.png" alt="Edit" class="" />
								</button>
								<button class="bg-[#132145] py-2 px-2 rounded-md mr-2">
									<img src="../../../public/img/Edit_fill.png" alt="Edit" class="" />
								</button>
								<button class="bg-[#FF3B30] py-2 px-2 rounded-md">
									<img src="../../../public/img/Trash.png" alt="Delete" class="" />
								</button>
							</td>
						</tr>
						<tr>
							<td class="py-2 px-4 border border-blue-950">6</td>
							<td class="py-2 px-4 border border-blue-950">Balaram Permatasari</td>
							<td class="py-2 px-4 border border-blue-950">2341720016</td>
							<td class="py-2 px-4 border border-blue-950">DIV Teknik Informatika</td>
							<td class="py-2 px-4 border border-blue-950">
								<button class="bg-[#132145] py-2 px-2 rounded-md mr-2">
									<img src="../../../public/img/Aksi.png" alt="Edit" class="" />
								</button>
								<button class="bg-[#132145] py-2 px-2 rounded-md mr-2">
									<img src="../../../public/img/Edit_fill.png" alt="Edit" class="" />
								</button>
								<button class="bg-[#FF3B30] py-2 px-2 rounded-md">
									<img src="../../../public/img/Trash.png" alt="Delete" class="" />
								</button>
							</td>
						</tr>
						<tr>
							<td class="py-2 px-4 border border-blue-950">7</td>
							<td class="py-2 px-4 border border-blue-950">Cahaya Purnama Indah</td>
							<td class="py-2 px-4 border border-blue-950">2341720017</td>
							<td class="py-2 px-4 border border-blue-950">DIV Teknik Informatika</td>
							<td class="py-2 px-4 border border-blue-950">
								<button class="bg-[#132145] py-2 px-2 rounded-md mr-2">
									<img src="../../../public/img/Aksi.png" alt="Edit" class="" />
								</button>
								<button class="bg-[#132145] py-2 px-2 rounded-md mr-2">
									<img src="../../../public/img/Edit_fill.png" alt="Edit" class="" />
								</button>
								<button class="bg-[#FF3B30] py-2 px-2 rounded-md">
									<img src="../../../public/img/Trash.png" alt="Delete" class="" />
								</button>
							</td>
						</tr>
						<tr>
							<td class="py-2 px-4 border border-blue-950">8</td>
							<td class="py-2 px-4 border border-blue-950">Citra Kereta Kencana</td>
							<td class="py-2 px-4 border border-blue-950">2341720018</td>
							<td class="py-2 px-4 border border-blue-950">DIV Teknik Informatika</td>
							<td class="py-2 px-4 border border-blue-950">
								<button class="bg-[#132145] py-2 px-2 rounded-md mr-2">
									<img src="../../../public/img/Aksi.png" alt="Edit" class="" />
								</button>
								<button class="bg-[#132145] py-2 px-2 rounded-md mr-2">
									<img src="../../../public/img/Edit_fill.png" alt="Edit" class="" />
								</button>
								<button class="bg-[#FF3B30] py-2 px-2 rounded-md">
									<img src="../../../public/img/Trash.png" alt="Delete" class="" />
								</button>
							</td>
						</tr>
						<tr>
							<td class="py-2 px-4 border border-blue-950">9</td>
							<td class="py-2 px-4 border border-blue-950">Debaran Mauti</td>
							<td class="py-2 px-4 border border-blue-950">2341720019</td>
							<td class="py-2 px-4 border border-blue-950">DIV Teknik Informatika</td>
							<td class="py-2 px-4 border border-blue-950">
								<button class="bg-[#132145] py-2 px-2 rounded-md mr-2">
									<img src="../../../public/img/Aksi.png" alt="Edit" class="" />
								</button>
								<button class="bg-[#132145] py-2 px-2 rounded-md mr-2">
									<img src="../../../public/img/Edit_fill.png" alt="Edit" class="" />
								</button>
								<button class="bg-[#FF3B30] py-2 px-2 rounded-md">
									<img src="../../../public/img/Trash.png" alt="Delete" class="" />
								</button>
							</td>
						</tr>
						<tr>
							<td class="py-2 px-4 border border-blue-950">10</td>
							<td class="py-2 px-4 border border-blue-950">Haikal Muhammad Rafli</td>
							<td class="py-2 px-4 border border-blue-950">2341720011</td>
							<td class="py-2 px-4 border border-blue-950">DIV Teknik Informatika</td>
							<td class="py-2 px-4 border border-blue-950">
								<button class="bg-[#132145] py-2 px-2 rounded-md mr-2">
									<img src="../../../public/img/Aksi.png" alt="Edit" class="" />
								</button>
								<button class="bg-[#132145] py-2 px-2 rounded-md mr-2">
									<img src="../../../public/img/Edit_fill.png" alt="Edit" class="" />
								</button>
								<button class="bg-[#FF3B30] py-2 px-2 rounded-md">
									<img src="../../../public/img/Trash.png" alt="Delete" class="" />
								</button>
							</td>
						</tr>
					</tbody>

				</table>
			</div>
		</div>
	</section>

	<!-- Daftar Peran mhs-->
	<section class="relative p-6">
		<!-- Static parent -->
		<div class="absolute ml-8 py-2 px-4 rounded-lg text-white bg-[#F99D1C]">
			Daftar Peran Mahasiswa
		</div>
		<div class="static mt-5 p-6 bg-white border-2 rounded-lg border-[#FEC01A] space-y-2">
			<!-- cari -->
			<section class="flex justify-between p-6">
				<div
					class="flex items-center bg-white w-1/3 p-2 rounded-md border shadow-md focus-within:ring-2 focus-within:ring-blue-500">
					<img src="../../../public/img/Search (1).png" alt="logo" class="w-5 h-5" />
					<input type="text" id="cari" placeholder="" class="bg-white flex focus:outline-none" />
				</div>

				<!-- btn tambah -->
				<a href="<?= BASEURL; ?>./">
					<button
						class="flex items-center font-semibold space-x-2 py-2 px-6 text-white bg-[#132145] rounded-lg w-auto">
						<img src="../../../public/img/add.png" alt="logo" class="w-5 h-5" />
						<p>Tambah</p>
					</button>
				</a>
			</section>

			<!-- table  -->
			<div class="mt-10 overflow-x-auto bg-white shadow-md rounded-2xl">
				<table class="min-w-full bg-white text-center">
					<thead>
						<tr>
							<th class="py-2 px-4 w-1/12 bg-blue-950 text-white font-semibold border border-blue-950">
								No
							</th>
							<th class="py-2 px-4 w-auto bg-blue-950 text-white font-semibold border border-blue-950">
								Daftar Peran
							</th>
							<th class="py-2 px-4 w-1/4 bg-blue-950 text-white font-semibold border border-blue-950">
								Aksi
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="py-2 px-4 border border-blue-950">1</td>
							<td class="py-2 px-4 border border-blue-950 text-left">
								Ketua
							</td>
							<td class="py-2 px-4 border border-blue-950">
								<button class="bg-[#132145] py-2 px-2 rounded-md mr-2">
									<img src="../../../public/img/Edit_fill.png" alt="Edit" class="" />
								</button>
								<button class="bg-[#FF3B30] py-2 px-2 rounded-md">
									<img src="../../../public/img/Trash.png" alt="Delete" class="" />
								</button>
							</td>
						</tr>
						<tr>
							<td class="py-2 px-4 border border-blue-950">2</td>
							<td class="py-2 px-4 border border-blue-950 text-left">
								Anggota
							</td>
							<td class="py-2 px-4 border border-blue-950">
								<button class="bg-[#132145] py-2 px-2 rounded-md mr-2">
									<img src="../../../public/img/Edit_fill.png" alt="Edit" class="" />
								</button>
								<button class="bg-[#FF3B30] py-2 px-2 rounded-md">
									<img src="../../../public/img/Trash.png" alt="Delete" class="" />
								</button>
							</td>
						</tr>

					</tbody>
				</table>
			</div>
		</div>
	</section>

	<!-- btn -->
	<section class="justify-center p-6">
		<a href="<?= BASEURL; ?>./">
			<button class="flex items-center space-x-2 py-2 px-6 text-white bg-[#132145] rounded-lg w-auto">
				<img src="../../../public/img/Back.png" alt="logo" class="w-5 h-5" />
				<p>Kembali</p>
			</button>
		</a>
	</section>
</section>