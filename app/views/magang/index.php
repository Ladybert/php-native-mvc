<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/../layout/head.html'; ?>
<body>
<?php include __DIR__ .  "/../layout/header.html"; ?>

    <main class="flex flex-col mx-12 my-6">
        <div class="flex justify-between items-center">
            <div>
                <h3 class="text-4xl font-semibold text-slate-200">Daftar Anak Magang</h3>
                <p class="text-sm font-medium text-slate-300">PKL | SMK Telkom Sidoarjo</p></div>
                <div class="flex w-1/2">
                    <div class="dropdown w-full">
                        <div tabindex="0" role="button" class="border border-2 border-slate-600 btn m-1 w-1/3">Lainnya</div>
                        <ul tabindex="0" class="text-slate-200 dropdown-content menu w-1/3 bg-slate-700 rounded-box z-[1] p-2 shadow">
                            <li><a href="<?= BASEURL; ?>/dtp">Data DTP</a></li>
                            <li><a href="<?= BASEURL; ?>/kelas">Data Kelas</a></li>
                        </ul>
                    </div>
                </div>
                <button class="btn btn-md btn-primary text-xl" onclick="my_modal_1.showModal()">Tambah Data</button>
                <dialog id="my_modal_1" class="modal">
                    <div class="modal-box">
                    <h3 class="text-2xl font-bold">Tambah Data Anak Magang</h3>
                    <form action="<?= BASEURL; ?>/magang/save" method="POST" class="flex flex-col gap-y-2 my-4">
                        <label class="text-sm" for="nama">Nama</label>
                        <input type="text" name="nama" placeholder="Tulis nama lengkap anda" id="nama" class="input input-bordered w-full w-full" autofocus/>
                        
                        <label class="text-sm" for="jurusan">Jurusan</label>
                        <select class="select select-bordered w-full" name="jurusan" id="jurusan">
                            <option disabled selected>Pilih Jurusan</option>
                            <option>Sistem Informasi Jaringan dan Aplikasi</option>
                            <option>Teknik Jaringan Akses Telekomunikasi</option>
                        </select>

                        <div class="flex justify-between gap-x-4">
                            <div class="w-full">
                                <label class="text-sm" for="kelas">Kelas</label>
                                <select class="select select-bordered w-full" name="kelas" id="kelas">
                                    <?php foreach($data['kelas'] as $k) : ?>
                                        <option value="<?= $k['id']; ?>"><?= $k['kelas']; ?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="w-full">
                                <label class="text-sm" for="dtp">DTP</label>
                                <select class="select select-bordered w-full" name="dtp" id="dtp">
                                    <?php foreach($data['dtp'] as $d) : ?>
                                        <option value="<?= $d['id']; ?>"><?= $d['dtp']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="flex flex-col mt-4 w-full">
                            <button class="btn btn-primary btn-md text-lg" type="submit">Tambah Data</button>
                        </div>
                    </form>
                    <div class="flex flex-col mt-4 w-full">
                        <button class="btn btn-md" onclick="my_modal_1.close()">Close</button>
                    </div>
                </dialog>
            </div>
        </div>
        <div class="overflow-x-auto my-6">
            <table class="table text-slate-200">
                <!-- head -->
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Kelas</th>
                        <th>DTP</th>
                        <th>Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                <!-- row 1 -->
                <?php $i = 1 ; ?>
                <?php  foreach($data['alpatech'] as $item) : ?>
                <tr>
                    <th><?= $i++; ?></th>
                    <td><?= $item['nama']; ?></td>
                    <td><?= $item['kelas']; ?></td>
                    <td><?= $item['dtp']; ?></td>
                    <td><?= $item['jurusan']; ?></td>
                    <td class="text-xl font-normal">
                        <a href="<?= BASEURL; ?>/magang/detail/<?= $item['id']; ?>" class="p-2 bg-green-500 hover:bg-green-400 rounded-lg text-sm text-slate-900 font-semibold">Detail</a>
                    </td>
                </tr>
                <?php  endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php if(!$data['alpatech']) : ?>
                    <p class="my-4 flex justify-center text-slate-100 px-6 py-4 bg-neutral rounded-lg font-medium text-xl">Data Tidak Tersedia</p>
        <?php endif; ?>
        
    </main>

<?php include __DIR__ . "/../layout/footer.html"; ?>
</body>
</html>