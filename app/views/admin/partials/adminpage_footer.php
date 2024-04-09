</div>
</div>


<!-- Settings Modal -->
<div class="modal fade" id="settingsModal" tabindex="-1" role="dialog" aria-labelledby="settingsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Settings</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form inside the modal -->
                <form id="settingsForm" method="post" action="">
                    <div class="form-group m-2">
                        <img src="public/resources/<?= $_SESSION['logo'] ?>" alt="Logo" class="brand-logo border border-1 border-black w-25">
                        <div class="brand-info">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                            <input type="file" class="custom-file-input" id="customFile" name="photo" accept="image/*" value="<?= $_SESSION['logo'] ?>">
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="systemName">System Name:</label>
                        <input name="systemname" type="text" class="form-control" id="systemName" placeholder="EVA-01" value="<?= $_SESSION['systemname'] ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label for="schoolName">School:</label>
                        <input name="schoolname" type="text" class="form-control" id="schoolName" placeholder="Enter school name" value="<?= $_SESSION['schoolname'] ?>">
                    </div>
                    <div class="form-group mb-2">
                        <div class="row d-flex justify-content-start">
                            <div class="col-6"><label for="semester">Semester:</label>
                                <input name="semester" type="text" class="form-control" id="semester" placeholder="Enter semester" value="<?= $_SESSION['semester'] ?>">
                            </div>
                            <div class="col-6">
                                <label for="acadYear">Academic Year:</label>
                                <input name="acadyear" type="text" class="form-control" id="acadYear" placeholder="Enter Academic Year" value="<?= $_SESSION['acadyear'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="themeColor">Theme:</label>
                        <select class="form-control" id="themeColor" name="themeColor">
                            <option value="evamaroon">Maroon</option>
                            <option value="evaorange">Orange</option>
                            <option value="evayellow">Yellow</option>
                            <option value="evagreen">Green</option>
                            <option value="evapurple">Purple</option>
                            <option value="evablue">Blue</option>
                            <option value="evagrey">Grey</option>
                            <option value="evablack">Black</option>
                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button name="btn_settings" type="submit" class="btn btn-primary">Save Changes</button>
                </form>
                <!-- You can add additional buttons here -->
            </div>
        </div>
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
        //auto hide alert
        setTimeout(function() {
            $(".alert").alert('close');
        }, 5000);

    });
</script>
</body>

</html>