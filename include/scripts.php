<script src=".././js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
<script src=".././js/smoothscroll.js"></script>
<script src=".././js/bootstrap.min.js"></script> 
<script src=".././js/wow.min.js"></script>
<script src=".././js/isotope.pkgd.min.js"></script>
<script src=".././js/typed.js"></script>
<script src=".././js/jquery.magnific-popup.min.js"></script>
<script src=".././js/owl.carousel.min.js"></script>
<script src=".././js/main.js"></script>
<script>
$(document).ready(function () {
    $imgSrc = $('#imgProfile').attr('src');
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imgProfile').attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#btnChangePicture').on('click', function () {
        // document.getElementById('profilePicture').click();
        if (!$('#btnChangePicture').hasClass('changing')) {
            $('#profilePicture').click();
        }
        else {
            // change
        }
    });
    $('#profilePicture').on('change', function () {
        readURL(this);
        $('#btnChangePicture').addClass('changing');
        $('#btnChangePicture').attr('value', 'Confirm');
        $('#btnDiscard').removeClass('d-none');
        // $('#imgProfile').attr('src', '');
    });
    $('#btnDiscard').on('click', function () {
        // if ($('#btnDiscard').hasClass('d-none')) {
        $('#btnChangePicture').removeClass('changing');
        $('#btnChangePicture').attr('value', 'Change');
        $('#btnDiscard').addClass('d-none');
        $('#imgProfile').attr('src', $imgSrc);
        $('#profilePicture').val('');
        // }
    });
});

</script>