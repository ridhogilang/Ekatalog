<div class="sidebar">
    <div class="title">E - Katalog</div>
    <ul>
        <li class="{{ request()->is('datamobil') ? 'active' : '' }}"><a href="/datamobil">Data Mobil</a></li>
        <li class="{{ request()->is('sparepart') ? 'active' : '' }}"><a href="/sparepart">Sparepart</a></li>
        <li class="{{ request()->is('register') ? 'active' : '' }}"><a href="/register">Tambah Admin</a></li>
        <li class="{{ request()->is('datauser') ? 'active' : '' }}"><a href="/datauser">Data Admin</a></li>
        {{-- <li>
            <a onclick="toggleDropdown(event)">Tambah Mobil</a>
            <div class="dropdown-content">
                <a href="/tambah-mobil" class="{{ request()->is('tambah-mobil') ? 'active' : '' }}">Tambah</a>
                <a href="/edit-mobil" class="{{ request()->is('edit-mobil') ? 'active' : '' }}">Edit</a>
                <a href="/hapus-mobil" class="{{ request()->is('hapus-mobil') ? 'active' : '' }}">Delete</a>
            </div>
        </li>         --}}
    </ul>
</div>