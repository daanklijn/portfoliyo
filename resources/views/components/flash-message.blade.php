<div>
    @if ($message = Session::get('error'))
    <div
        class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
        role="alert">
        <strong class="font-bold">{{ $message }}</strong>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
  </span>
    </div>
    @endif
</div>
