<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/../layout/head.html'; ?>
<body>
<?php include __DIR__ .  "/../layout/header.html"; ?>

    <main class="flex flex-col mx-12 my-6">
        <div class="flex flex-col justify-center">
            <div>
                <h3 class="text-4xl font-semibold text-slate-200">Detail Anak Magang</h3>
                <p class="text-sm font-medium text-slate-300">PKL | SMK Telkom Sidoarjo</p>
            </div>
            <div class="my-16 card bg-slate-900 mx-20 shadow-xl">
                <div class="card-body text-2xl text-slate-100">
                    <h2 class="card-title text-3xl"><?= $data['alpatech']['nama']; ?></h2>
                    <p>Kelas : <?= $data['alpatech']['kelas']; ?></p>
                    <p>Bidang Keahlian : <?= $data['alpatech']['dtp']; ?></p>
                    <p>Jurusan : <?= $data['alpatech']['jurusan']; ?></p>
                    <div class=" mt-4 card-actions justify-between">
                        <a href="<?= BASEURL; ?>/magang/index" class="btn btn-primary btn-md text-2xl">Kembali</a>
                        <div>
                            <a class="btn btn-warning btn-md text-2xl" onclick="edit.showModal()">Edit</a>
                            <a href="<?= BASEURL; ?>/magang/delete/<?= $data['alpatech']['id']; ?>" onclick="return confirm('Yakin deck ?')" class="btn btn-error btn-md text-2xl font-medium text-slate-900">Delete</a>
                        </div>
                        <dialog id="edit" class="modal">
                            <div class="modal-box">
                            <h3 class="text-2xl font-bold">Update Data Anak Magang</h3>
                            <form action="<?= BASEURL; ?>/magang/update" method="POST" class="flex flex-col gap-y-2 my-4">
                                <input type="hidden" name="id" value="<?= $data['alpatech']['id']; ?>">
                                <label class="text-sm" for="nama">Nama</label>
                                <input type="text" value="<?= $data['alpatech']['nama']; ?>" name="nama" placeholder="Tulis nama lengkap anda" id="nama" class="input input-bordered w-full w-full" autofocus/>
                                
                                <label class="text-sm" for="jurusan">Jurusan</label>
                                <select class="select select-bordered w-full" value="<?= $data['alpatech']['jurusan']; ?>" name="jurusan" id="jurusan">
                                    <option value="Sistem Informasi Jaringan dan Aplikasi" <?= $data['alpatech']['jurusan'] == 'Sistem Informasi Jaringan dan Aplikasi' ? 'selected' : ''; ?>>Sistem Informasi Jaringan dan Aplikasi</option>
                                    <option value="Teknik Jaringan Akses Telekomunikasi" <?= $data['alpatech']['jurusan'] == 'Teknik Jaringan Akses Telekomunikasi' ? 'selected' : ''; ?>>Teknik Jaringan Akses Telekomunikasi</option>
                                </select>
                                <div class="flex justify-between gap-x-4">
                                    <div class="w-full">
                                        <label class="text-sm" for="kelas">Kelas</label>
                                        <select class="select select-bordered w-full" name="kelas" id="kelas">
                                            <?php foreach($data['kelas'] as $k) : ?>
                                                <option value="<?= $k['id']; ?>" <?= ($k['kelas'] == $data['alpatech']['kelas']); ?> >
                                                <?= $k['kelas']; ?>
                                            </option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                    <div class="w-full">
                                        <label class="text-sm" for="dtp">DTP</label>
                                        <select class="select select-bordered w-full" name="dtp" id="dtp">
                                        <?php foreach ($data['dtps'] as $dtp) : ?>
                                            <option value="<?= $dtp['id']; ?>" <?= ($dtp['dtp'] == $data['alpatech']['dtp']) ? 'selected' : ''; ?>>
                                                <?= $dtp['dtp']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                
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