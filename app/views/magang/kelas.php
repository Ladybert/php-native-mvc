<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/../layout/head.html'; ?>
<body>
<?php include __DIR__ .  "/../layout/header.html"; ?>

    <main class="flex flex-col mx-12 my-6">
        <div class="flex justify-between items-center">
            <div>
                <h3 class="text-4xl font-semibold text-slate-200">Daftar Kelas Kejuruan</h3>
                <p class="text-sm font-medium text-slate-300">PKL | SMK Telkom Sidoarjo</p></div>
                <div class="flex w-1/2">
                    <div class="dropdown w-full">
                        <div tabindex="0" role="button" class="border border-2 border-slate-600 btn m-1 w-1/3">Lainnya</div>
                        <ul tabindex="0" class="text-slate-200 dropdown-content menu w-1/3 bg-slate-700 rounded-box z-[1] p-2 shadow">
                            <li><a href="<?= BASEURL; ?>/magang">Data Magang</a></li>
                            <li><a href="<?= BASEURL; ?>/dtp">Data DTP</a></li>
                        </ul>
                    </div>
                </div>
                <button class="btn btn-md btn-primary text-xl" onclick="dataKelas.showModal()">Tambah Data</button>
                <dialog id="dataKelas" class="modal">
                    <div class="modal-box">
                    <h3 class="text-2xl font-bold">Tambah Data Kelas</h3>
                    <form action="<?= BASEURL; ?>/kelas/save" method="POST" class="flex flex-col gap-y-2 my-4">
                        <label class="text-sm" for="kelas">Nama Kelas</label>
                        <input type="text" name="kelas" placeholder="Tulis Kelas Baru" id="kelas" class="input input-bordered w-full w-full" autofocus/>

                        <div class="flex flex-col mt-4 w-full">
                            <button class="btn btn-primary btn-md text-lg" type="submit">Tambah Data</button>
                        </div>
                    </form>
                    <div class="flex flex-col mt-4 w-full">
                        <button class="btn btn-md" onclick="dataKelas.close()">Close</button>
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
                        <th>Kelas</th>
                    </tr>
                </thead>
                <!-- row 1 -->
                <?php $i = 1 ; ?>
                <?php  foreach($data['kelas'] as $item) : ?>
                <tr>
                    <th><?= $i++; ?></th>
                    <td><?= $item['kelas']; ?></td>
                    <td class="text-xl font-normal">
                        <a href="<?= BASEURL; ?>/kelas/detail/<?= $item['id']; ?>" class="p-2 bg-green-500 hover:bg-green-400 rounded-lg text-sm text-slate-900 font-semibold">Lainnya</a>
                    </td>
                </tr>
                <?php  endforeach; ?>
            </table>
        </div>
        <?php if(!$data['kelas']) : ?>
            <p class="my-4 flex justify-center text-slate-100 px-6 py-4 bg-neutral rounded-lg font-medium text-xl">Data Tidak Tersedia</p>
        <?php endif; ?>
        
    </main>

<?php include __DIR__ . "/../layout/footer.html"; ?>
</body>
</html>