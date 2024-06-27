<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/../layout/head.html'; ?>
<body>
<?php include __DIR__ .  "/../layout/header.html"; ?>

    <main class="flex flex-col mx-12 my-6">
        <div class="flex justify-between items-center">
            <div>
                <h3 class="text-4xl font-semibold text-slate-200">Daftar Kelas DTP</h3>
                <p class="text-sm font-medium text-slate-300">PKL | SMK Telkom Sidoarjo</p></div>
                <div class="flex w-1/2">
                    <div class="dropdown w-full">
                        <div tabindex="0" role="button" class="border border-2 border-slate-600 btn m-1 w-1/3">Lainnya</div>
                        <ul tabindex="0" class="text-slate-200 dropdown-content menu w-1/3 bg-slate-700 rounded-box z-[1] p-2 shadow">
                            <li><a href="<?= BASEURL; ?>/magang">Data Magang</a></li>
                            <li><a href="<?= BASEURL; ?>/kelas">Data Kelas</a></li>
                        </ul>
                    </div>
                </div>
                <button class="btn btn-md btn-primary text-xl" onclick="dataDTP.showModal()">Tambah Data</button>
                <dialog id="dataDTP" class="modal">
                    <div class="modal-box">
                    <h3 class="text-2xl font-bold">Tambah Data Kelas DTP</h3>
                    <form action="<?= BASEURL; ?>/dtp/save" method="POST" class="flex flex-col gap-y-2 my-4">
                        <label class="text-sm" for="dtp">Nama kelas DTP</label>
                        <input type="text" name="dtp" placeholder="Tulis Kelas DTP Baru" id="kelas" class="input input-bordered w-full w-full" autofocus/>

                        <div class="flex flex-col mt-4 w-full">
                            <button class="btn btn-primary btn-md text-lg" type="submit">Tambah Data</button>
                        </div>
                    </form>
                    <div class="flex flex-col mt-4 w-full">
                        <button class="btn btn-md" onclick="dataDTP.close()">Close</button>
                    </div>
                </dialog>
            </div>
        </div>
        <div class="overflow-x-auto mt-6 mb-12">
            <table class="table text-slate-200">
                <!-- head -->
                <thead>
                    <tr>
                        <th>#</th>
                        <th>DTP</th>
                    </tr>
                </thead>
                <!-- row 1 -->
                <?php $i = 1 ; ?>
                <?php  foreach($data['dtp'] as $item) : ?>
                <tr>
                    <th><?= $i++; ?></th>
                    <td><?= $item['dtp']; ?></td>
                    <td class="text-xl font-normal">
                        <a href="<?= BASEURL; ?>/dtp/detail/<?= $item['id']; ?>" class="p-2 bg-green-500 hover:bg-green-400 rounded-lg text-sm text-slate-900 font-semibold">Lainnya</a>
                    </td>
                </tr>
                <?php  endforeach; ?>
            </table>
        </div>
        <?php if(!$data['dtp']) : ?>
            <p class="my-4 flex justify-center text-slate-100 px-6 py-4 bg-neutral rounded-lg font-medium text-xl">Data Tidak Tersedia</p>
        <?php endif; ?>
        
    </main>

<?php include __DIR__ . "/../layout/footer.html"; ?>
</body>
</html>