<div>
    @section('title')
        Kategori Management
    @endsection
    @if ($isTambah)
        <div class="bg-white rounded-lg shadow-xs 
                dark:bg-gray-800 text-white p-4 mb-4">
            <div class="flex">
                <div class="">
                    <div><label for="">Image</label></div>
                    <input type="file" wire:model="image">
                    <div>
                        @error('image') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="ml-2">
                    <div><label for="">Nama</label></div>
                    <input type="text" wire:model="nama" class="rounded py-1 text-black " placeholder="isi nama kategori"
                        wire:keydown.enter="tambah">
                    <div>
                        @error('nama') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="mt-4 flex">
                <div class="bg-green-600 px-2 py-1 rounded-lg inline-block cursor-pointer" wire:click="tambah">Tambah
                </div>
                <div class="bg-gray-600 px-2 py-1 rounded-lg inline-block ml-4 cursor-pointer"
                    wire:click="confirmTambah">cancle</div>
            </div>
        </div>


    @else
        <div class="my-4">
            <div wire:click="confirmTambah"
                class="bg-green-600 py-2 px-4 cursor-pointer hover:bg-purple-700 rounded-lg text-white inline-block">
                Tambah
                + </div>
        </div>
    @endif

    <div class="grid grid-flow-row grid-cols-12 gap-4">
        @foreach ($kategoris as $item)
            <div
                class="col-span-12 bg-white rounded-lg shadow-xs 
                dark:bg-gray-800 text-white p-4 hover:bg-purple-600 shadow-sm">
                <div class="flex justify-between">
                    <div>
                        <img src="{{ asset('storage/' . $item->image) }}" class="w-16 h-16 object-cover rounded">
                    </div>
                    <div class="my-auto">
                        {{ $item->nama }}
                    </div>
                    @if ($hapusId === $item->id && $isHapus)
                        <div class="flex my-auto">
                            <div class="ml-4 text-red-500" wire:click="confirmHapus({{ $item->id }})">No</div>
                            <div class="ml-4 text-red-500 cursor-pointer" wire:click="hapus({{ $item->id }})">Yakin
                            </div>
                        </div>
                    @else
                        <div class="flex my-auto">
                            <div class="text-yellow-500">Detail</div>
                            <div class="ml-4 text-red-500 cursor-pointer"
                                wire:click="confirmHapus({{ $item->id }})">Hapus</div>
                        </div>
                    @endif
                </div>

            </div>
        @endforeach
    </div>

    @push('script')
        <script>
            window.addEventListener('swal', function(e) {
                Swal.fire(e.detail);
            });
        </script>
    @endpush
</div>
