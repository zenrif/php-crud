<!-- Script Foto -->
<script>
    function previewImg() {
        const foto = document.querySelector('#foto');
        const fotoLabel = document.querySelector('.custom-file-label');

        fotoLabel.textContent = foto.files[0].name;
    }
</script>
<script src="<?= BASEURL; ?>/public/js/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="<?= BASEURL; ?>/public/js/bootstrap.js"> </script>
<script src="<?= BASEURL; ?>/public/js/script.js"> </script>
</body>

</html>