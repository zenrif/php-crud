$(function(){

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.tampilModalUbah').on('click', function() {
        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpcrud/mahasiswa/ubah')

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/phpcrud/mahasiswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#id').val(data.id);
                $('#nama').val(data.namamhs);
                $('#nim').val(data.nim);
                $('#jk').val(data.jk);
                $('#alamat').val(data.alamat);
                $('#kota').val(data.kota);
                $('#email').val(data.email);
                $('#foto').val(data.foto);
                
            }
        });
    });


});