</div>
    </div>

<!-- Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // Function to check window width and toggle sidebar collapse class
            function toggleSidebarCollapse() {
                if ($(window).width() < 992) {
                    $('#sidebar').addClass('collapsed');
                    $('#content').addClass('collapsed');
                } else {
                    $('#sidebar').removeClass('collapsed');
                    $('#content').removeClass('collapsed');
                }
            }

            // Initial check on document ready
            toggleSidebarCollapse();

            // Check on window resize
            $(window).resize(function() {
                toggleSidebarCollapse();
            });

            // Click event handler for the toggle button
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('collapsed');
                $('#content').toggleClass('collapsed');
            });
        });
    </script>
</body>

</html>