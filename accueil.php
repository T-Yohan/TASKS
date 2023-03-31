

<section class="vh-100" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-10">

        <div class="card">
          <div class="card-header p-3">
            <h5 class="mb-0"><i class="fas fa-tasks me-2"></i>Task List</h5>
          </div>
          <div class="card-body" data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px">

          <form action="edit.php?mod=add" method="post" class="d-flex justify-content-center align-items-center mb-4">
              <div class="form-outline flex-fill">
                <input type="text"  name="task" class="form-control form-control-lg" />
                <label class="form-label" for="form3">nouvelle tache!</label>
              </div>
              <button type="button" class="btn btn-danger btn-floating">
              <i class="fas fa-magic"></i>
              </button>
            </form>

            <table class="table mb-0">
              <thead>
                <tr>
                  <th scope="col">Team Member</th>
                  <th scope="col">Task</th>
                  <th scope="col">Priority</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr class="fw-normal">
                  <th>
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp"
                      class="shadow-1-strong rounded-circle" alt="avatar 1"
                      style="width: 55px; height: auto;">
                    <span class="ms-2">Alice Mayer</span>
                  </th>
                  <td class="align-middle">
                    <span>Call Sam For payments</span>
                  </td>
                  <td class="align-middle">
                    <h6 class="mb-0"><span class="badge bg-danger">High priority</span></h6>
                  </td>
                  <td class="align-middle">
                    <a href="#!" data-mdb-toggle="tooltip" title="Done"><i
                        class="fas fa-check text-success me-3"></i></a>
                    <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                        class="fas fa-trash-alt text-danger"></i></a>
                  </td>
                </tr>

                <th>
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp"
                      class="shadow-1-strong rounded-circle" alt="avatar 1"
                      style="width: 55px; height: auto;">
                    <span class="ms-2">Yohan TURLET</span>
                  </th>
                  <td class="align-middle">
                    <span>Montrer le resultat a Mr Gustave</span>
                  </td>
                  <td class="align-middle">
                    <h6 class="mb-0"><span class="badge bg-danger">important</span></h6>
                  </td>
                  <td class="align-middle">
                    <a href="#!" data-mdb-toggle="tooltip" title="Done"><i
                        class="fas fa-check text-success me-3"></i></a>
                    <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                        class="fas fa-trash-alt text-danger"></i></a>
                  </td>
                </tr>
                <tr class="fw-normal">
                
                </tr>
              </tbody>
            </table>

          </div>
          

      </div>
    </div>
  </div>
</section>

