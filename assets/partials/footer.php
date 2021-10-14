
<footer class='footer fixed-bottom text-light p-1'>
    Coded By Majid ( <a href="https://instagram.com/Academy.01">Academy.01</a> )
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    <?php 
        if($existError):
    ?>
    Swal.fire("Magician doesn't exist!");
    <?php
    endif;
    ?>
</script>