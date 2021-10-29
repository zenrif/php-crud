<!-- Script Foto -->
<script>
    function previewImg() {
        const foto = document.querySelector('#foto');
        const fotoLabel = document.querySelector('.custom-file-label');

        fotoLabel.textContent = foto.files[0].name;
    }
</script>
<script src="<?= BASEURL; ?>/public/js/jquery-3.6.0.min.js"></script>
<script src="<?= BASEURL; ?>/public/js/bootstrap.js"> </script>
<script src="<?= BASEURL; ?>/public/js/script.js"> </script>
</body>

</html>
