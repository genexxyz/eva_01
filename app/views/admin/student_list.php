<?php include 'partials/adminpage_header.php'; ?>

<h3>Student List</h3>
<div class="container mt-5">
    <div class="row ">
        <div class="col-6 col-sm-6">
            <!-- Search bar -->
            <input type="text" class="form-control mb-2" placeholder="Search">
        </div>
        <div class="col-6 col-sm-6 text-right d-flex justify-content-end">
            <!-- Add button -->
            <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#addStudentModal">Add</button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 table-responsive">
            <!-- Bootstrap table -->
            <table class="table table-bordered table-hover table-striped table-sm">
                <thead class="table-primary">
                    <tr class="text-center">
                        <th>Student ID</th>
                        <th>Name</th>
                        <th>Course, Year & Section</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <!-- Table rows -->
                    <?php

                    foreach ($rows as $item) { ?>
                        <tr>
                            <td class="py-2 px-2"><?= $item->stud_code ?></td>
                            <td class="px-5 py-2"><?= $item->stud_lname . ", "  . $item->stud_fname . " "  . $item->stud_mname ?></td>
                            <td class="text-center py-2"><?= isset($class[$item->stud_class]) ? $class[$item->stud_class] : 'N/A' ?></td>
                            <td class="text-start py-2"><?= $item->stud_email ?></td>
                            <td class="d-flex justify-content-center py-2"><button class="btn btn-success" type="button">
                                    <i class="fa fa-eye" ></i>
                                </button></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Pagination -->
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center ">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>


<!-- Student Modal -->
<div class="modal fade" id="addStudentModal" tabindex="-1" role="dialog" aria-labelledby="addStudentModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addStudentModalLabel">Add New Student</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form for adding a new student -->
        <form action="" method="post">
          <div class="form-group">
            <label for="student_id"><strong>Student ID</strong></label>
            <input type="text" class="form-control mb-3" id="student_id" name="id" placeholder="MA12345678" required autocomplete="off">
          </div>

          <div class="row d-flex justify-content-start mb-3">
          <div class="form-group col-12 mb-2">
            <label for="first_name"><strong>First Name</strong></label>
            <input type="text" class="form-control" id="first_name" name="firstname" required autocomplete="off">
          </div>
          <div class="form-group col-6">
            <label for="middle_name"><strong>Middle Name</strong></label>
            <input type="text" class="form-control" id="middle_name" name="middlename" autocomplete="off">
          </div>
          <div class="form-group col-6">
            <label for="last_name"><strong>Last Name</strong></label>
            <input type="text" class="form-control" id="last_name" name="lastname" required autocomplete="off">
          </div>
          </div>


          
          <div class="row mb-3">

          
    <div class="form-group col-4">
        <label for="section"><strong>Course, Yr.&Sec</strong></label>
        <select id="sectionSelect" class="form-select" required name="section">
            <option value="">Search</option>
            <?php foreach ($classOption as $option) { ?>
                <option value="<?= $option->class_id ?>"><?= $option->class_course . "-" . $option->class_level . $option->class_section ?></option>
            <?php } ?>
        </select>
    </div>


          <div class="form-group col-8">
            <label for="email"><strong>Email</strong></label>
            <input type="email" class="form-control" id="email" name="email" placeholder="sample@email.com" required autocomplete="off">
          </div>
          </div>
          <div class="form-group mb-4">
            <label for="password"><strong>Password</strong> <i class="">(default)</i></label>
            <input type="text" class="form-control" name="pass" disabled placeholder="@Student01">
          </div>
          <button type="submit" name="addStudent" class="btn btn-primary w-100">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>




<?php include 'partials/adminpage_footer.php'; ?>