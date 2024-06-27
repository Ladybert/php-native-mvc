<!DOCTYPE html>
<html lang="en">
    <?php include "../layout/head.html" ?>
<body>
    <?php include "../layout/header.html" ?>

    <div class="my-6 mx-12 flex flex-col gap-y-4">
        <h3 class="text-4xl font-semibold">Daftarkan Akun anda</h3>
        <form action="" class="flex flex-col gap-y-4">
            <div class="flex flex-col gap-y-2 text-2xl">
                <label for="username">Username</label>
                <input class="p-2 border border-2 rounded-lg border-purple-500" type="text" id="username" placeholder="Masukkan Username" name="username">
            </div>
            <div class="flex flex-col gap-y-2 text-2xl">
                <label for="username">Password</label>
                <input class="p-2 border border-2 rounded-lg border-purple-500" type="text" id="password" placeholder="Masukkan Password" name="username">
            </div>
            <button class="text-2xl text-slate-200 mx-64 my-2 px-4 py-2 flex justify-center my-4 rounded-lg border border-2 bg-purple-600 hover:bg-purple-500" type="submit">Save</button>
        </form>
    </div>
    
    <?php include "../layout/footer.html" ?>
</body>
</html>