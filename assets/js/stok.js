// fungsi validasi tambah barang masuk
$(document).ready(function () {
	$("#formTambahStok").submit(function () {
		var fieldNamaBarangMasuk = document.getElementById("nama");
		var fieldStokBarangMasuk = document.getElementById("stok");
		var fieldHargaBeliBarangMasuk = document.getElementById("harga");
		var fieldHargaModalBarangMasuk = document.getElementById("modal");
		var fieldKategoriBarangMasuk = document.getElementById("id_kategori");
		var fieldIdsatuanBarangMasuk = document.getElementById("id_satuan");

		if (fieldNamaBarangMasuk.value == "") {
			$("#msgNama").html("Nama Produk masih kosong, harap isi bidang ini").css({
				color: "red",
				"font-size": "80%",
			});
			return false; //form will not submit and modal will remain open
		} else if (fieldStokBarangMasuk.value == "") {
			$("#msgStok").html("Stok Awal masih kosong, harap isi bidang ini").css({
				color: "red",
				"font-size": "80%",
			});
			return false;
		} else if (fieldHargaBeliBarangMasuk.value == "") {
			$("#msgHarga").html("Harga Beli masih kosong, harap isi bidang ini").css({
				color: "red",
				"font-size": "80%",
			});
			return false;
		} else if (fieldHargaModalBarangMasuk.value == "") {
			$("#msgModal")
				.html("Harga Modal masih kosong, harap isi bidang ini")
				.css({
					color: "red",
					"font-size": "80%",
				});
			return false;
		} else if (fieldKategoriBarangMasuk.value == "-- Pilih Kategori --") {
			$("#msgKategori")
				.html("Kategori belum dipilih, harap isi bidang ini")
				.css({
					color: "red",
					"font-size": "80%",
				});
			return false;
		} else if (fieldIdsatuanBarangMasuk.value == "-- Pilih Satuan --") {
			$("#msgSatuan").html("Satuan belum dipilih, harap isi bidang ini").css({
				color: "red",
				"font-size": "80%",
			});
			return false;
		}
		return true; //form will get submitted and modal will close due to page being changed/reloaded
	});
});

//fungsi tabel dan pencarian
$(document).ready(function () {
	var table = $("#stokbarang").DataTable({
		language: {
			info: "Menampilkan _START_ - _END_ dari _TOTAL_ entri",
		},

		// "sDom": '<"top">rt<"bottom"ip><"clear">'
		// "dom": "<'row'<'col-sm-4'i><'col-sm-4'><'col-sm-4'p>>" + "<'row'<'col-sm-12'tr>>"
		dom:
			"<'row'<'col-sm-12'tr>>" +
			"<'row'<'col-sm-4'i><'col-sm-4'B><'col-sm-4'p>>",
	});

	$("#cari-stok").on("keyup click", function () {
		table.search($("#mySearchText").val()).draw();
	});
});
