<div class="mt-12">
    {{-- header --}}
    <div class="grid grid-flow-row grid-cols-12 gap-4">
        <div class="col-span-6">
            <div class="font-extrabold text-6xl">
                Dari <span class="text-hijau-custom-dua">bertanya <br> jadi</span> mengerti
            </div>
            <div class="my-6 text-gray-600 text-lg">
                Lawtalk tempat berbagi ilmu 350 juta Forum dan pakar hukum, belajar bersama untuk menyelesaikan
                soal-soal yang paling rumit sekalipun
            </div>
            <div>
                <a href="" class="bg-hijau-custom-dua px-4 py-2 rounded text-white">Buat Forum</a>
            </div>
        </div>
        <div class="col-span-6">
            <img src="{{ asset('image/head-diskusi.png') }}" alt="image">
        </div>
    </div>
    {{-- endheader --}}

    <div class="grid grid-flow-row grid-cols-12 gap-4 mt-14">
        <div class="col-span-2">
            <div class="font-bold">Filter</div>
            <div class="rounded shadow w-full bg-white p-2 mt-4">
                <div class="text-sm font-semibold mb-2">Tipe diskusi</div>
                <div>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="tipe" value="">
                        <span class="ml-2">Populer</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="tipe" value="">
                        <span class="ml-2">Terbaru</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="tipe" value="">
                        <span class="ml-2">Paling sedikit</span>
                    </label>
                </div>
                <hr class="my-3 bg-gray-700">
                <div class="text-sm font-semibold mb-2">Kategori Hukum</div>
                <div>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="kategori" value="">
                        <span class="ml-2">Pidana</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="kategori" value="">
                        <span class="ml-2">Perdata</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="kategori" value="">
                        <span class="ml-2">Tata Negara</span>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
