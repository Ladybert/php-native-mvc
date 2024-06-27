<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/../layout/head.html'; ?>
<body>
<?php include __DIR__ .  "/../layout/header.html"; ?>

    <main class="flex flex-col mx-12 my-6">
        <div class="flex flex-col justify-center">
            <div>
                <h3 class="text-4xl font-semibold text-slate-200">Detail Penanganan Kelas DTP</h3>
                <p class="text-sm font-medium text-slate-300">PKL | SMK Telkom Sidoarjo</p>
            </div>
            <div class="my-16 card bg-slate-900 mx-20 shadow-xl">
                <div class="card-body text-2xl text-slate-100">
                    <h2 class="card-title text-4xl font-normal">
                        Kelas Keahlian : <span class="font-medium"><?= $data['dtp']['dtp']; ?></span>
                    </h2>
                    <div class=" mt-4 card-actions justify-between">
                        <a href="<?= BASEURL; ?>/dtp" class="btn btn-primary btn-md text-2xl">Kembali</a>
                        <div>
                            <a class="btn btn-warning btn-md text-2xl" onclick="edit.showModal()">Edit</a>
                            <a href="<?= BASEURL; ?>/dtp/delete/<?= $data['dtp']['id']; ?>" onclick="return confirm('Yakin deck ?')" class="btn btn-error btn-md text-2xl font-medium text-slate-900">Delete</a>
                        </div>
                        <dialog id="edit" class="modal">
                            <div class="modal-box">
                            <h3 class="text-2xl font-bold">Update Data Kelas Keahlian</h3>
                            <form action="<?= BASEURL; ?>/dtp/update" method="POST" class="flex flex-col gap-y-2 my-4">
                                <input type="hidden" name="id" value="<?= $data['dtp']['id']; ?>">
                                <label class="text-sm" for="namaDtp">Nama DTP</label>
                                <input type="text" id="namaDtp" value="<?= $data['dtp']['dtp']; ?>" name="dtp" placeholder="Isi dengan data DTP terkait" id="nama" class="input input-bordered w-full w-full" autofocus/>
                                
                                <div class="flex flex-col mt-4 w-full">
                                    <button class="btn btn-primary btn-md text-lg" type="submit">Simpan Data</button>
                                </div>
                            </form>
                            <div class="flex flex-col mt-4 w-full">
                                <button class="btn btn-md" onclick="edit.close()">Close</button>
                            </div>
                        </dialog>
                    </div>
                    <?php if(!$data): ?>
                        <p>Data tidak ditemukan</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>

<?php include __DIR__ . "/../layout/footer.html"; ?>
</body>
</html>