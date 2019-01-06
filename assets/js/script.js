const flashData = $('.flash-data').data('flashdata');
// console.log(flashData);
if (flashData) {
	Swal({
		title: 'Data Mahasiswa',
		text: 'Berhasil' + flashData,
		type: 'success',
	});
}

// hapus
$('.tombol-hapus').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');
	const nama = $('.tombol-hapus').attr('data-hapusNama');
	console.log(nama);

	Swal({
		title: 'Apakah anda yakin?',
		html: "akan menghapus data mahasiswa yang bernama <u><b>" + nama + "</b></u>",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus Data'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});
