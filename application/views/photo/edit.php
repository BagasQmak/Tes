<div class="basis-8/12 " id="photo">

    <div class="mt-4 p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <?= form_open_multipart('photo/edit'); ?>
            <?php if (validation_errors() == true): ?>
                <div class="px-4 py-3 mb-3 text-md text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <span class="font-semibold"><?= $this->session->flashdata('error'); ?></span> 
                </div>
     
                
            <?php endif; ?>

            <input type="hidden" class="" name="username" value="<?= $user['username']; ?>">
            <div class="mb-6">
                <label for="title" class="block mb-2  font-semibold text-gray-900 dark:text-gray-300">Judul Foto</label>
                <input type="text" value="<?= $; ?>" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Judul Artikel.." value="<?= set_value('title'); ?>">
                <?= form_error('title', '<p class="text-danger pl-1 pt-2 text-sm font-medium">', '</p>'); ?>
            </div>
            
            <div class="mb-6">
                <label for="category" class="block mb-2 font-semibold text-gray-900 dark:text-gray-400">Cover Foto</label>
                <div class="flex gap-4">
                    <div class="basis-4/12">
                        <img src="<?= base_url('assets/'); ?>img/content/no-image.jpg" id="preview" class="border-4 border-slate-700 shadow-lg rounded-lg max-w-full">
                    </div>
                    <div class="basis-8/12 ">
                        <input type="file" name="gambar" class="file d-none">

                        <div class="input-group ">
                            <input type="text" class="form-control bg-gray-50 border border-gray-300 text-gray-900 rounded-lg" disabled placeholder="Upload Gambar" id="file">
                            <div class="input-group-append">
                                <button type="button" id="pilih_gambar" class="browse text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-r-lg text-sm px-2 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Pilih Gambar</button>
                            </div>
                        </div>
                        <?= form_error('gambar', '<p class="text-danger pl-1 pt-2 text-sm font-medium">', '</p>'); ?>
                    </div>
                </div>
            </div>
           
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm max-w-full sm:w-auto px-5 py-2.5 block dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buat</button>
            

        </form>
    
    </div>
</div>