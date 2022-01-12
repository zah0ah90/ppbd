<!DOCTYPE html>
<html lang="en">

<head>
    <title>Whatsapp</title>
</head>

<body>
    Mohon menunggu ini akan redrict ke whatsapp
    @php
        // print_r($data);
    @endphp
    {{-- {{ $data['nama_lengkap'] }} <br> {{ $data['status'] }} --}}

    {{-- <textarea hidden name="text" class="textarea" id="" cols="30" rows="10">https://api.whatsapp.com/send?phone=6282125443516&text=Nama Custumer%20:%20<?= wabos($nama) ?>%0aAKJ%20area%20:%20Depok%0a%0a<?php foreach ($a as $b) { ?>-%20<?= wabos($b['name']) ?>%0a<?= uang($b['price']) ?>%20x%20<?= wabos($b['qty']) ?>%20:%20<?= uang($b['subtotal']) ?>%0a<?php } ?>%0atotal%20semua%20:%20<?= uang($total) ?>%0a<?= wabos($note) ?>
    </textarea> --}}

    {{-- <button hidden id="click" href="#" class="btn btn-danger">Jquery Auto Click</button> --}}


    <script>
        $(document).ready(function() {
            var textarea = $('.textarea').val();
            $('#click').attr('href', textarea)
            $('#click').click(function() {
                var red = window.open(textarea, '_self');
                red.location;
                win.focus();
            });
            // set time out 5 sec
            setTimeout(function() {
                $('#click').trigger('click');
                window.close();
            });
        });
    </script>


</body>

</html>
