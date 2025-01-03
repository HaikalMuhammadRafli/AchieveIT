<section class="sm:ml-64 bg-blue-50 min-h-screen">

	<?php require_once __DIR__ . '../../../templates/profiles.php'; ?>

	<!-- data Admin-->
	<section class="flex-col justify-start pl-6">
		<p class="font-bold text-3xl">Data Admin</p>
	</section>



	<!-- Data Admin -->
	<section class="relative p-6">
		<!-- Static parent -->
		<div class="absolute ml-8 py-2 px-4 rounded-lg text-white bg-[#F99D1C]">
			Data Admin
		</div>
		<div class="static mt-5 p-6 bg-white border-2 rounded-lg border-[#FEC01A] space-y-2">
			<!-- cari -->
			<section class="flex justify-between p-6">
				<div
					class="flex items-center bg-white w-1/3 p-2 rounded-md border shadow-md focus-within:ring-2 focus-within:ring-blue-500">
					<img src="../../../public/img/Search (1).png" alt="logo" class="w-5 h-5" />
					<input type="text" id="adminSearch" class="bg-white flex focus:outline-none w-full" />
				</div>

				<!-- btn tambah -->
				<a href="<?= BASEURL; ?>/Admin/create">
					<button
						class="flex items-center font-semibold space-x-2 py-2 px-6 text-white bg-[#132145] rounded-lg w-auto">
						<img src="../../../public/img/add.png" alt="logo" class="w-5 h-5" />
						<p>Tambah</p>
					</button>
				</a>
			</section>

			<!-- table -->
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
								NIP
							</th>
							<th class="py-2 px-4 w-auto bg-blue-950 text-white font-semibold border border-blue-950">
								Role
							</th>
							<th class="py-2 px-4 w-1/4 bg-blue-950 text-white font-semibold border border-blue-950">
								Aksi
							</th>
						</tr>
					</thead>
					<tbody class="text-left" id="adminTable">
						<?php
						$no = 1;
						foreach ($data['admin'] as $admin) {
							?>
							<tr>
								<td class="py-2 px-4 border border-blue-950"><?= $no ?></td>
								<td class="py-2 px-4 border border-blue-950" id="admin"><?= $admin['nama'] ?></td>
								<td class="py-2 px-4 border border-blue-950"><?= $admin['nip'] ?></td>
								<td class="py-2 px-4 border border-blue-950"><?= $admin['role'] ?></td>
								<td class="py-2 px-4 border border-blue-950">
									<a href="<?= BASEURL; ?>/Admin/edit/<?= $admin['id_admin'] ?>">
										<button class="bg-[#132145] py-2 px-2 rounded-md mr-2">
											<img src="../../../public/img/Edit_fill.png" alt="logo" class="">
										</button>
									</a>
									<a href="<?= BASEURL; ?>/Admin/delete/<?= $admin['id_admin'] ?>">
										<button class="bg-[#FF3B30] py-2 px-2 rounded-md">
											<img src="../../../public/img/Trash.png" alt="logo" class="">
										</button>
									</a>
								</td>
							</tr>
							<?php
							$no++;
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</section>

	<!-- btn -->
	<section class="justify-center p-6">
		<a href="<?= BASEURL; ?>/Admin/administrasiData">
			<button class="flex items-center space-x-2 py-2 px-6 text-white bg-[#132145] rounded-lg w-auto">
				<img src="../../../public/img/Back.png" alt="logo" class="w-5 h-5" />
				<p>Kembali</p>
			</button>
		</a>
	</section>
</section>

<script>
	$(document).ready(function () {
		function searchAdmin() {
			let keyword = $("#adminSearch").val().toLowerCase();
			let visibleRows = 0;
			$("#adminTable tr").each(function () {
				let namaAdmin = $(this).find("#admin").text().toLowerCase();
				$(this).toggle(namaAdmin.includes(keyword));
				if ($(this).is(":visible")) visibleRows++;
			});

			if (visibleRows === 0) {
				$("#adminTable").append('<tr class="empty-row"><td colspan="8" class="text-center py-10"><img src="../../public/img/table-kosong.png" alt="Table Kosong" class="w-1/6 mx-auto" /><p class="font-bold text-gray-500 mt-4">Tidak ada data yang tersedia</p></td></tr>');
			} else {
				$("#adminTable .empty-row").remove();
			}
		}

		$("#adminSearch").on("input change", searchAdmin);
	});
</script>