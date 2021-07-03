//fungsi tabel dan pencarian
$(document).ready(function () {
	var table = $("#barangmasuk").DataTable({
		language: {
			info: "Menampilkan _START_ - _END_ dari _TOTAL_ entri",
		},

		// "sDom": '<"top">rt<"bottom"ip><"clear">'
		// "dom": "<'row'<'col-sm-4'i><'col-sm-4'><'col-sm-4'p>>" + "<'row'<'col-sm-12'tr>>"
		dom:
			"<'row'<'col-sm-12'tr>>" +
			"<'row'<'col-sm-4'i><'col-sm-4'B><'col-sm-4'p>>",
	});

	$("#mySearchButton").on("keyup click", function () {
		table.search($("#mySearchText").val()).draw();
	});
});

//ambil data ketika edit
$(document).on("click", "#btnedit", function () {
	let id = $(this).data("id");
	let idbarangmasuk = $(this).data("idbarangmasuk");
	let stokmasuk = $(this).data("stokmasuk");
	let keterangan = $(this).data("keterangan");
	let penerima = $(this).data("penerima");

	$(".modal-body #id").val(id);
	$(".modal-body #id_barang_edit").val(idbarangmasuk);
	$(".modal-body #stok_edit").val(stokmasuk);
	$(".modal-body #keterangan_edit").val(keterangan);
	$(".modal-body #penerima_edit").val(penerima);
});

//ambil data ketika hapus

// fungsi autonumeric form barang masuk
// var rupiahhargabeli = document.getElementById("harga_beli_barang_masuk");
// var rupiahhargamodal = document.getElementById("harga_modal");
// var rupiahhargabeliedit = document.getElementById(
// 	"harga_beli_barang_masuk_edit"
// );
// var rupiahhargamodaledit = document.getElementById("harga_modal_edit");

// rupiahhargabeli.addEventListener("keyup", function (e) {
// 	rupiahhargabeli.value = formatRupiah(this.value, "Rp. ");
// });

// rupiahhargamodal.addEventListener("keyup", function (e) {
// 	rupiahhargamodal.value = formatRupiah(this.value, "Rp. ");
// });

// rupiahhargabeliedit.addEventListener("keyup", function (e) {
// 	rupiahhargabeliedit.value = formatRupiah(this.value, "Rp. ");
// });

// rupiahhargamodaledit.addEventListener("keyup", function (e) {
// 	rupiahhargamodaledit.value = formatRupiah(this.value, "Rp. ");
// });

// function formatRupiah(angka, pref) {
// 	var number_string = angka.replace(/[^,\d]/g, "").toString(),
// 		split = number_string.split(","),
// 		sisa = split[0].length % 3,
// 		rupiahhargabeli = split[0].substr(0, sisa),
// 		rupiahhargamodal = split[0].substr(0, sisa),
// 		rupiahhargabeliedit = split[0].substr(0, sisa),
// 		rupiahhargamodaledit = split[0].substr(0, sisa),
// 		ribuan = split[0].substr(sisa).match(/\d{3}/gi);

// 	if (ribuan) {
// 		separator = sisa ? "." : "";
// 		rupiahhargabeli += separator + ribuan.join(".");
// 		rupiahhargamodal += separator + ribuan.join(".");
// 		rupiahhargabeliedit += separator + ribuan.join(".");
// 		rupiahhargamodaledit += separator + ribuan.join(".");
// 	}

// 	rupiahhargabeli =
// 		split[1] != undefined ? rupiahhargabeli + "," + split[1] : rupiahhargabeli;
// 	rupiahhargamodal =
// 		split[1] != undefined
// 			? rupiahhargamodal + "," + split[1]
// 			: rupiahhargamodal;

// 	rupiahhargabeliedit =
// 		split[1] != undefined
// 			? rupiahhargabeliedit + "," + split[1]
// 			: rupiahhargabeliedit;
// 	rupiahhargamodaledit =
// 		split[1] != undefined
// 			? rupiahhargamodaledit + "," + split[1]
// 			: rupiahhargamodaledit;
// 	return pref == undefined
// 		? rupiahhargabeli
// 		: rupiahhargabeli
// 		? "" + rupiahhargabeli
// 		: "";
// 	return pref == undefined
// 		? rupiahhargamodal
// 		: rupiahhargamodal
// 		? "" + rupiahhargamodal
// 		: "";
// 	return pref == undefined
// 		? rupiahhargabeliedit
// 		: rupiahhargabeliedit
// 		? "" + rupiahhargabeliedit
// 		: "";
// 	return pref == undefined
// 		? rupiahhargamodaledit
// 		: rupiahhargamodaledit
// 		? "" + rupiahhargamodaledit
// 		: "";
// }

// fungsi validasi tambah barang masuk
$(document).ready(function () {
	$("#formTambah").submit(function () {
		var fieldNamaBarangMasuk = document.getElementById("nama_barang_masuk");
		var fieldStokBarangMasuk = document.getElementById("stok_barang_masuk");
		var fieldHargaBeliBarangMasuk = document.getElementById(
			"harga_beli_barang_masuk"
		);
		var fieldHargaModalBarangMasuk = document.getElementById("harga_modal");
		var fieldKategoriBarangMasuk = document.getElementById("id_kategori");
		var fieldIdsatuanBarangMasuk = document.getElementById("id_satuan");

		if (fieldNamaBarangMasuk.value == "") {
			$("#msgBarangmasuk")
				.html("Nama Produk masih kosong, harap isi bidang ini")
				.css({
					color: "red",
					"font-size": "80%",
				});
			return false; //form will not submit and modal will remain open
		} else if (fieldStokBarangMasuk.value == "") {
			$("#msgStokBarangmasuk")
				.html("Stok Awal masih kosong, harap isi bidang ini")
				.css({
					color: "red",
					"font-size": "80%",
				});
			return false;
		} else if (fieldHargaBeliBarangMasuk.value == "") {
			$("#msgHargaBeliBarangmasuk")
				.html("Harga Beli masih kosong, harap isi bidang ini")
				.css({
					color: "red",
					"font-size": "80%",
				});
			return false;
		} else if (fieldHargaModalBarangMasuk.value == "") {
			$("#msgHargaModalBarangmasuk")
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
