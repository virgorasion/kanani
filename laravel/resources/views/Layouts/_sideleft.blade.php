<ul class="sidebar-menu" data-widget="tree">
	<li class="header">HEADER</li>
	<!-- Optionally, you can add icons to the links -->
	<li class="treeview">
		<a href="#">
			<i class="fa fa-dashboard"></i>
			<span>Master</span>
			<span class="pull-right-container">
				<i class="fa fa-angle-left pull-right"></i>
			</span>
		</a>
		<ul class="treeview-menu">
			<li>
				<a href="{{url('/view_dokter')}}">
					<i class="fa fa-circle-o"></i>Dokter</a>
			</li>
			<li>
				<a href="{{url('/view_jenisrawat')}}">
					<i class="fa fa-circle-o"></i>Jenis Rawat</a>
			</li>
			<li>
				<a href="{{url('/view_obat')}}">
					<i class="fa fa-circle-o"></i>Obat</a>
			</li>
			<li>
				<a href="{{url('/view_pegawai')}}">
					<i class="fa fa-circle-o"></i>Pegawai</a>
			</li>
			<li>
				<a href="{{url('/view_peralatan')}}">
					<i class="fa fa-circle-o"></i>Peralatan</a>
			</li>
			<li>
				<a href="{{url('/view_periksa')}}">
					<i class="fa fa-circle-o"></i>Periksa</a>
			</li>
			<li>
				<a href="{{url('/view_supplier')}}">
					<i class="fa fa-circle-o"></i>Supplier</a>
			</li>
			<li>
				<a href="{{url('/view_userfacial')}}">
					<i class="fa fa-circle-o"></i>User Facial</a>
			</li>
			<li>
				<a href="{{url('/view_level')}}">
					<i class="fa fa-circle-o"></i>Level</a>
			</li>
			<li>
				<a href="{{url('/view_satuan')}}">
					<i class="fa fa-circle-o"></i>Satuan</a>
			</li>
		</ul>
	</li>

	<li class="treeview">
		<a href="#">
			<i class="fa fa-table"></i>
			<span>Form</span>
			<span class="pull-right-container">
				<i class="fa fa-angle-left pull-right"></i>
			</span>
		</a>
		<ul class="treeview-menu">
			<li>
				<a href="{{url('/view_daftar_pasien')}}">
					<i class="fa fa-circle-o"></i>Daftar Pasien</a>
			</li>
			<li>
				<a href="{{url('/view_facial_pasien')}}">
					<i class="fa fa-circle-o"></i>Facial Pasien</a>
			</li>
			<li>
				<a href="{{url('/view_rekam_medis')}}">
					<i class="fa fa-circle-o"></i>Rekam Medis</a>
			</li>
		</ul>
	</li>

	<li class="treeview">
		<a href="#">
			<i class="fa fa-money"></i>
			<span>Transaksi</span>
			<span class="pull-right-container">
				<i class="fa fa-angle-left pull-right"></i>
			</span>
		</a>
		<ul class="treeview-menu">
			<li>
				<a href="{{url('/view_daftar_perawatan')}}">
					<i class="fa fa-circle-o"></i> Pendaftaran Perawatan </a>
			</li>
			<li>
				<a href="{{url('/view_beli_obat')}}">
					<i class="fa fa-circle-o"></i> Pembelian Obat</a>
			</li>
			<li>
				<a href="{{url('/view_jual_obat')}}">
					<i class="fa fa-circle-o"></i> Penjualan Obat</a>
			</li>
			<li>
				<a href="{{url('/view_stock_opname')}}">
					<i class="fa fa-circle-o"></i> Stock Opname</a>
			</li>
			<li>
				<a href="{{url('/view_penjualan_resep')}}">
					<i class="fa fa-circle-o"></i> Penjualan Resep</a>
			</li>
			<li>
				<a href="{{url('/view_penulisan_resep')}}">
					<i class="fa fa-circle-o"></i> Penulisan Resep</a>
			</li>
			<li>
				<a href="{{url('/view_konversi')}}">
					<i class="fa fa-circle-o"></i> Konsersi Satuan Obat</a>
			</li>
		</ul>
		<i class="fa fa-line-chart"></i>
		<span>Laporan</span>
		<span class="pull-right-container">
			<i class="fa fa-angle-left pull-right"></i>
		</span>
		<ul class="treeview-menu">
			<li>
				<a href="{{url('/view_absensi')}}">
					<i class="fa fa-circle-o"></i>Absensi</a>
			</li>
			<li>
				<a href="{{url('/view_inventory')}}">
					<i class="fa fa-circle-o"></i>Inventory</a>
			</li>
			<li>
				<a href="{{url('/lap_pembelian_obat')}}">
					<i class="fa fa-circle-o"></i>Pembelian Obat</a>
			</li>
			<li>
				<a href="{{url('/Laporan_insentif_obat')}}">
					<i class="fa fa-circle-o"></i>Insentif Obat</a>
			</li>
			<li>
				<a href="{{url('/Laporan_insentif')}}">
					<i class="fa fa-circle-o"></i>Insentif</a>
			</li>
			<li>
				<a href="{{url('/Laporan_perawatan')}}">
					<i class="fa fa-circle-o"></i>Perawatan</a>
			</li>
			<li>
				<a href="{{url('/Laporan_penjualan')}}">
					<i class="fa fa-circle-o"></i>Penjualan Obat</a>
			</li>
			<li>
				<a href="{{url('/Laporan_penjualan_detail')}}">
					<i class="fa fa-circle-o"></i>Penjualan Obat Detil</a>
			</li>
			<li>
				<a href="{{url('/Laporan_perpenju')}}">
					<i class="fa fa-circle-o"></i>Perawatan dan Penjualan</a>
			</li>
			<li>
				<a href="{{url('/view_lap_foto')}}">
					<i class="fa fa-circle-o"></i>History Foto</a>
			</li>
			<li>
				<a href="{{url('/lap_stock_opname')}}">
					<i class="fa fa-circle-o"></i>Stock Opname</a>
			</li>
			<li>
				<a href="{{url('/lap_konversi')}}">
					<i class="fa fa-circle-o"></i>Konversi Obat</a>
			</li>
			<li>
				<a href="{{url('/view_inventory_resep')}}">
					<i class="fa fa-circle-o"></i>Inventory Resep</a>
			</li>
		</ul>
	</li>
</ul>