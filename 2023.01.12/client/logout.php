<script>
    logoutUser('../server/logout.php',render)
    function render (data) {
        location.href = "./index.php"
        console.log(data)
    }
</script>