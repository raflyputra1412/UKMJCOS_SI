  {{-- horizontal line --}}
  <div class="py-4">
    <div class="w-full border-t border-gray-800"></div>
</div>
{{-- horizontal line end --}}

{{-- form container --}}
<form action="{{ route('jenis_content.store') }}" method="POST" class="ml-20" enctype="multipart/form-data">
    @csrf
        {{-- end of 2 input --}}
      <div class="flex flex-col basis-5/6 w-5/6 border-2 pb-10 px-10 mt-5 shadow-xl">
          <label class="label">
              <span class="label-text uppercase tracking-wide text-gray-700 text-sm font-bold ml-1">Nama Jenis Content</span>
          </label>
          <label class="w-full p-2">
              <input type="text" name="nama_jenis" placeholder="Nama Jenis" class="input input-bordered w-full">
          </label>
          <button class="justify btn w-20 self-end mt-5 mb-5 btn-primary">Submit</button>
      </div>
</form>