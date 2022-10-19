<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-white hover:bg-slate-800 border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-white focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-white active:bg-cyan-50 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
