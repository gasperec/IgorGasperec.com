<script>
    document.getElementById("mobile-menu").onclick = function() {
        var menuItems = document.querySelector(".nav-list");
        
        if (menuItems.style.display === "block") {
            menuItems.style.display = "none";
        } else {
            menuItems.style.display = "block";
        }
    }
</script>
