  {{-- horizontal line --}}
  <div class="py-4">
    <div class="w-full border-t border-gray-800"></div>
</div>
{{-- horizontal line end --}}

{{-- form container --}}
    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <div class="flex flex-row flex-wrap justify-center mt-2">
            <div class="flex flex-col basis-4/6">
                <label class="label">
                    <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Nama
                        Event</span>
                </label>
                <label class="w-full p-2">
                    <input type="text" name="nama_event" placeholder="Nama Event"
                        class="input input-bordered w-full @error('nama_event') border-2 border-red-500 @enderror">

                    @error('nama_event')
                        <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"> {{ $message }}
                        </span>
                    @enderror
                </label>
            </div>

            <div class="flex flex-col basis-4/6 mt-2">
                <label class="label">
                    <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Tanggal</span>
                </label>
                <label class="w-full p-2">
                    <input type="date" name="tanggal" placeholder="Tanggal" class="input input-bordered w-full @error('tanggal') border-2 border-red-500 @enderror">

                    @error('tanggal')
                        <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"> {{ $message }}
                        </span>
                    @enderror
                </label>
            </div>
            {{-- 2 input --}}
            <div class="flex flex-row basis-4/6 mt-2">
                <div class="flex flex-col basis-1/2 mt-2">
                    <label class="label">
                        <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Waktu</span>
                    </label>
                    <label class="w-full p-2">
                        <input type="text" name="waktu" placeholder="Waktu" class="input input-bordered w-full @error('waktu') border-2 border-red-500 @enderror">

                        @error('waktu')
                            <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"> {{ $message }}
                            </span>
                        @enderror

                    </label>
                </div>
                <div class="flex flex-col basis-1/2 mt-2">
                    <label class="label">
                        <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Ketua
                            Event</span>
                    </label>
                    <label class="w-full p-2">
                        <input type="text" name="ketua_event" placeholder="Ketua Event" class="input input-bordered w-full @error('ketua_event') border-2 border-red-500 @enderror ">

                        @error('ketua_event')
                            <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"> {{ $message }}
                            </span>
                        @enderror
                    </label>
                </div>
            </div>
            {{-- end 3 input --}}

            <div class="flex flex-col basis-4/6 mt-2">
                <label class="label">
                    <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Jabatan
                        Panitia</span>
                </label>
                {{-- repeater head --}}
                <label class="w-full p-2" id="repeater-head">
                    <tr>
                        <td>
                            <input type="text" name="roles_panitia[]" placeholder="Jabatan Panitia" class="input input-bordered w-full mb-2 @error('roles_panitia') border-2 border-red-500 @enderror">
                        </td>
                    </tr>
                    @error('roles_panitia')
                        <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"> {{ $message }}
                        </span>
                    @enderror
                </label>
                {{-- button add repeater input --}}
                <button type="button" name="add-repeater-input" id="btn-repeat" class="btn text-white">Tambah Panitia</button>
            </div>
            {{-- submit button --}}
            <div class="flex flex-col basis-4/6 mt-2">
                <button class="btn w-20 self-end mt-5 mb-5 btn-primary">Submit</button>
            </div>
            {{-- <label class="w-full" id="repeater-head">
        </label> --}}
        </div>
    </form>

<script type="text/javascript">
    var i = 0;
    $("#btn-repeat").click(function() {
        ++i;
        $("#repeater-head").append(
            '<tr><td class="w-full"><input type="text" name="roles_panitia[]" placeholder="Jabatan Panitia" class="input input-bordered w-full mb-2 @error('roles_panitia') border-2 border-red-500 @enderror"></td><td><button type="button" class="btn btn-delete text-white remove-input-field">Delete</button></td></tr>'
        );
    });
    $(document).on('click', '.remove-input-field', function() {
        $(this).parents('tr').remove();
    });
</script>
