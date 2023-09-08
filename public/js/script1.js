$(function() {

    $('.tombolTambahData').on('click',function() {
        $$('#exampleModal').html('Tambah Data Guru');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#jenis_kelamin').val('');
        $('#alamat').val('');
        $('#id').val('');
    })

    $('.tampilModalUbah1').on('click', function() {

        $('#exampleModalLabel').html('Ubah Data Guru');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/mvcphp/public/data_guru/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/mvcphp/public/data_guru/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#jenis_kelamin').val(data.jenis_kelamin);
                $('#alamat').val(data.alamat);
                $('#id').val(data.id);
            }
        });
    });
});