<x-sidebar-dashboard>
    <!-- Dashboard -->
    <x-sidebar-menu-dashboard routeName="admin.dashboard" title="Dashboard">
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Zm-1 9a1 1 0 1 0-2 0v2a1 1 0 1 0 2 0v-2Zm2-5a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1Zm4 4a1 1 0 1 0-2 0v3a1 1 0 1 0 2 0v-3Z" clip-rule="evenodd" />
        </svg>
    </x-sidebar-menu-dashboard>

    <!-- Produk -->
    <x-sidebar-menu-dropdown-dashboard routeName="admin.products.index" title="Produk">
        <x-sidebar-menu-dropdown-item-dashboard routeName="admin.products.index" title="Manajemen Produk" />
        <x-sidebar-menu-dropdown-item-dashboard routeName="admin.categories.index" title="Manajemen Kategori" />
        <x-sidebar-menu-dropdown-item-dashboard routeName="admin.products.export" title="Export" />
    </x-sidebar-menu-dropdown-dashboard>

    <!-- Stok -->
    <x-sidebar-menu-dropdown-dashboard routeName="admin.stock.index" title="Stok">
        <x-sidebar-menu-dropdown-item-dashboard routeName="admin.stock.history" title="Riwayat Stok" />
        <x-sidebar-menu-dropdown-item-dashboard routeName="admin.stock.opname" title="Stock Opname" />
        <x-sidebar-menu-dropdown-item-dashboard routeName="admin.stock.min" title="Pengaturan Stok Minimum" />
    </x-sidebar-menu-dropdown-dashboard>

    <!-- Supplier -->
    <x-sidebar-menu-dashboard routeName="admin.suppliers.index" title="Supplier" />

    <!-- Pengguna -->
    <x-sidebar-menu-dashboard routeName="admin.users.index" title="Pengguna" />

    <!-- Laporan -->
    <x-sidebar-menu-dropdown-dashboard routeName="admin.reports.index" title="Laporan">
        <x-sidebar-menu-dropdown-item-dashboard routeName="admin.reports.stock" title="Laporan Stok" />
        <x-sidebar-menu-dropdown-item-dashboard routeName="admin.reports.transactions" title="Laporan Transaksi" />
        <x-sidebar-menu-dropdown-item-dashboard routeName="admin.reports.users" title="Laporan Pengguna" />
    </x-sidebar-menu-dropdown-dashboard>

    <!-- Pengaturan -->
    <x-sidebar-menu-dashboard routeName="admin.settings.index" title="Pengaturan" />
</x-sidebar-dashboard>
