@if (session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(()=>show=false, 3000)" x-show="show" class="fixed top-1 left-1/2 transform -translate-x-1/2 bg-lime-500 text-white px-48 py-3 rounded-full">
        <p>
            {{ session('message') }}
        </p>
    </div>
@endif
