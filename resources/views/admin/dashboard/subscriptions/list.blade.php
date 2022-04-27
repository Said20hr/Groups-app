<x-layouts.admin>
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card">
            <!-- Card header -->
            <div class="card-header pb-0">
                <div class="d-lg-flex">
                  <div>
                    <h5 class="mb-0">All Subscriptions</h5>
                  </div>
                  <div class="ms-auto my-auto mt-lg-0 mt-4">
                    <div class="ms-auto my-auto">
                      <a href="{{ route('admin.subscriptions.index') }}" class="btn bg-gradient-primary btn-sm mb-0">+&nbsp; New Subscription</a>
                      
                      <div class="dropdown d-inline">
                        <a href="javascript:;" class="btn btn-outline-primary btn-sm mb-0 dropdown-toggle " data-bs-toggle="dropdown" id="navbarDropdownMenuLink2">
                          Filters
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg-start px-2 py-3" aria-labelledby="navbarDropdownMenuLink2" data-popper-placement="left-start">
                          <li><a class="dropdown-item border-radius-md" href="javascript:;">Status: Paid</a></li>
                          <li><a class="dropdown-item border-radius-md" href="javascript:;">Status: Refunded</a></li>
                          <li><a class="dropdown-item border-radius-md" href="javascript:;">Status: Canceled</a></li>
                          <li>
                            <hr class="horizontal dark my-2">
                          </li>
                          <li><a class="dropdown-item border-radius-md text-danger" href="javascript:;">Remove Filter</a></li>
                        </ul>
                      </div>
                      <div class="modal fade" id="import" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog mt-lg-10">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="ModalLabel">Import CSV</h5>
                              <i class="fas fa-upload ms-3"></i>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <p>You can browse your computer for a file.</p>
                              <input type="text" placeholder="Browse file..." class="form-control mb-3">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="importCheck" checked="">
                                <label class="custom-control-label" for="importCheck">I accept the terms and conditions</label>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn bg-gradient-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn bg-gradient-primary btn-sm">Upload</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn btn-outline-primary btn-sm export mb-0 mt-sm-0 mt-1" data-type="csv" type="button" name="button">Export CSV</button>
                    </div>
                  </div>
                </div>
              </div>
          <div class="table-responsive">
            <table class="table table-flush" id="datatable-search">
              <thead class="thead-light">
                <tr>
                  <th>Id</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Customer</th>
                  <th>Product</th>
                  <th>Revenue</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="customCheck1">
                      </div>
                      <p class="text-xs font-weight-bold ms-2 mb-0">#10421</p>
                    </div>
                  </td>
                  <td class="font-weight-bold">
                    <span class="my-2 text-xs">1 Nov, 10:20 AM</span>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <div class="d-flex align-items-center">
                      <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-check" aria-hidden="true"></i></button>
                      <span>Paid</span>
                    </div>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <div class="d-flex align-items-center">
                      <img src="../../../assets/img/team-2.jpg" class="avatar avatar-xs me-2" alt="user image">
                      <span>Orlando Imieto</span>
                    </div>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <span class="my-2 text-xs">Nike Sport V2</span>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <span class="my-2 text-xs">$140,20</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="form-check pt-0">
                        <input class="form-check-input" type="checkbox" id="customCheck2">
                      </div>
                      <p class="text-xs font-weight-bold ms-2 mb-0">#10422</p>
                    </div>
                  </td>
                  <td class="font-weight-bold">
                    <span class="my-2 text-xs">1 Nov, 10:53 AM</span>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <div class="d-flex align-items-center">
                      <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-check" aria-hidden="true"></i></button>
                      <span>Paid</span>
                    </div>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <div class="d-flex align-items-center">
                      <img src="../../../assets/img/team-1.jpg" class="avatar avatar-xs me-2" alt="user image">
                      <span>Alice Murinho</span>
                    </div>
                  </td>
                  <td class="font-weight-bold">
                    <span class="my-2 text-xs">Valvet T-shirt</span>
                  </td>
                  <td class="font-weight-bold">
                    <span class="my-2 text-xs">$42,00</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="customCheck3">
                      </div>
                      <p class="text-xs font-weight-bold ms-2 mb-0">#10423</p>
                    </div>
                  </td>
                  <td class="font-weight-bold">
                    <span class="my-2 text-xs">1 Nov, 11:13 AM</span>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <div class="d-flex align-items-center">
                      <button class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-undo" aria-hidden="true"></i></button>
                      <span>Refunded</span>
                    </div>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-xs me-2 bg-gradient-dark">
                        <span>M</span>
                      </div>
                      <span>Michael Mirra</span>
                    </div>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <span class="my-2 text-xs">
                      Leather Wallet
                      <span class="text-secondary ms-2"> +1 more </span>
                    </span>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <span class="my-2 text-xs">$25,50</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="customCheck4">
                      </div>
                      <p class="text-xs font-weight-bold ms-2 mb-0">#10424</p>
                    </div>
                  </td>
                  <td class="font-weight-bold">
                    <span class="my-2 text-xs">1 Nov, 12:20 PM</span>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <div class="d-flex align-items-center">
                      <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-check" aria-hidden="true"></i></button>
                      <span>Paid</span>
                    </div>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <div class="d-flex align-items-center">
                      <div class="d-flex align-items-center">
                        <img src="../../../assets/img/team-3.jpg" class="avatar avatar-xs me-2" alt="user image">
                        <span>Andrew Nichel</span>
                      </div>
                    </div>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <span class="my-2 text-xs">
                      Bracelet Onu-Lino
                    </span>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <span class="my-2 text-xs">$19,40</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="customCheck5">
                      </div>
                      <p class="text-xs font-weight-bold ms-2 mb-0">#10425</p>
                    </div>
                  </td>
                  <td class="font-weight-bold">
                    <span class="my-2 text-xs">1 Nov, 1:40 PM</span>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <div class="d-flex align-items-center">
                      <button class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-times" aria-hidden="true"></i></button>
                      <span>Canceled</span>
                    </div>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <div class="d-flex align-items-center">
                      <div class="d-flex align-items-center">
                        <img src="../../../assets/img/team-4.jpg" class="avatar avatar-xs me-2" alt="user image">
                        <span>Sebastian Koga</span>
                      </div>
                    </div>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <span class="my-2 text-xs">
                      Phone Case Pink
                      <span class="text-secondary ms-2"> x 2 </span>
                    </span>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <span class="my-2 text-xs">$44,90</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="customCheck6">
                      </div>
                      <p class="text-xs font-weight-bold ms-2 mb-0">#10426</p>
                    </div>
                  </td>
                  <td class="font-weight-bold">
                    <span class="my-2 text-xs">1 Nov, 2:19 AM</span>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <div class="d-flex align-items-center">
                      <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-check" aria-hidden="true"></i></button>
                      <span>Paid</span>
                    </div>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-xs me-2 bg-gradient-primary">
                        <span>L</span>
                      </div>
                      <span>Laur Gilbert</span>
                    </div>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <span class="my-2 text-xs">
                      Backpack Niver
                    </span>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <span class="my-2 text-xs">$112,50</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="customCheck7">
                      </div>
                      <p class="text-xs font-weight-bold ms-2 mb-0">#10427</p>
                    </div>
                  </td>
                  <td class="font-weight-bold">
                    <span class="my-2 text-xs">1 Nov, 3:42 AM</span>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <div class="d-flex align-items-center">
                      <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-check" aria-hidden="true"></i></button>
                      <span>Paid</span>
                    </div>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-xs me-2 bg-gradient-dark">
                        <span>I</span>
                      </div>
                      <span>Iryna Innda</span>
                    </div>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <span class="my-2 text-xs">
                      Adidas Vio
                    </span>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <span class="my-2 text-xs">$200,00</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="customCheck8">
                      </div>
                      <p class="text-xs font-weight-bold ms-2 mb-0">#10428</p>
                    </div>
                  </td>
                  <td class="font-weight-bold">
                    <span class="my-2 text-xs">2 Nov, 9:32 AM</span>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <div class="d-flex align-items-center">
                      <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-check" aria-hidden="true"></i></button>
                      <span>Paid</span>
                    </div>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-xs me-2 bg-gradient-dark">
                        <span>A</span>
                      </div>
                      <span>Arrias Liunda</span>
                    </div>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <span class="my-2 text-xs">
                      Airpods 2 Gen
                    </span>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <span class="my-2 text-xs">$350,00</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="customCheck9">
                      </div>
                      <p class="text-xs font-weight-bold ms-2 mb-0">#10429</p>
                    </div>
                  </td>
                  <td class="font-weight-bold">
                    <span class="my-2 text-xs">2 Nov, 10:14 AM</span>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <div class="d-flex align-items-center">
                      <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-check" aria-hidden="true"></i></button>
                      <span>Paid</span>
                    </div>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <div class="d-flex align-items-center">
                      <div class="d-flex align-items-center">
                        <img src="../../../assets/img/team-5.jpg" class="avatar avatar-xs me-2" alt="user image">
                        <span>Rugna Ilpio</span>
                      </div>
                    </div>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <span class="my-2 text-xs">
                      Bracelet Warret
                    </span>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <span class="my-2 text-xs">$15,00</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="customCheck10">
                      </div>
                      <p class="text-xs font-weight-bold ms-2 mb-0">#10430</p>
                    </div>
                  </td>
                  <td class="font-weight-bold">
                    <span class="my-2 text-xs">2 Nov, 12:56 PM</span>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <div class="d-flex align-items-center">
                      <button class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-undo" aria-hidden="true"></i></button>
                      <span>Refunded</span>
                    </div>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <div class="d-flex align-items-center">
                      <div class="d-flex align-items-center">
                        <img src="../../../assets/img/ivana-squares.jpg" class="avatar avatar-xs me-2" alt="user image">
                        <span>Anna Landa</span>
                      </div>
                    </div>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <span class="my-2 text-xs">
                      Watter Bottle India
                      <span class="text-secondary ms-2"> x 3 </span>
                    </span>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <span class="my-2 text-xs">$25,00</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="customCheck11">
                      </div>
                      <p class="text-xs font-weight-bold ms-2 mb-0">#10431</p>
                    </div>
                  </td>
                  <td class="font-weight-bold">
                    <span class="my-2 text-xs">2 Nov, 3:12 PM</span>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <div class="d-flex align-items-center">
                      <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-check" aria-hidden="true"></i></button>
                      <span>Paid</span>
                    </div>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-xs me-2 bg-gradient-dark">
                        <span>K</span>
                      </div>
                      <span>Karl Innas</span>
                    </div>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <span class="my-2 text-xs">
                      Kitchen Gadgets
                    </span>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <span class="my-2 text-xs">$164,90</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="customCheck12">
                      </div>
                      <p class="text-xs font-weight-bold ms-2 mb-0">#10432</p>
                    </div>
                  </td>
                  <td class="font-weight-bold">
                    <span class="my-2 text-xs">2 Nov, 5:12 PM</span>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <div class="d-flex align-items-center">
                      <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-check" aria-hidden="true"></i></button>
                      <span>Paid</span>
                    </div>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-xs me-2 bg-gradient-info">
                        <span>O</span>
                      </div>
                      <span>Oana Kilas</span>
                    </div>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <span class="my-2 text-xs">
                      Office Papers
                    </span>
                  </td>
                  <td class="text-xs font-weight-bold">
                    <span class="my-2 text-xs">$23,90</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer pt-3  ">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              © <script>
                document.write(new Date().getFullYear())
              </script>,
              made with <i class="fa fa-heart"></i> by
              <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
              for a better web.
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
</div>
<div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3  bg-transparent ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Argon Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="d-flex my-3">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark mb-1">
        <div class="d-flex my-4">
          <h6 class="mb-0">Sidenav Mini</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarMinimize" onclick="navbarMinimize(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-4 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <a class="btn btn-primary w-100" href="https://www.creative-tim.com/product/argon-dashboard-pro">Buy now</a>
        <a class="btn btn-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free demo</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/argon-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/ct-argon-dashboard-pro" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20PRO%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard-pro" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard-pro" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
</div>
  
@push('js')
<!--   Core JS Files   -->
<script src="{{asset('dashboard/assets/js/plugins/datatables.js')}}"></script>
<!-- Kanban scripts -->
<script src="{{asset('dashboard/assets/js/plugins/dragula/dragula.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/plugins/jkanban/jkanban.js')}}"></script>
<!--====== Plugins js ======-->
  <script>
    const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
      searchable: true,
      fixedHeight: false,
      perPageSelect: false
    });

    document.querySelectorAll(".export").forEach(function(el) {
      el.addEventListener("click", function(e) {
        var type = el.dataset.type;

        var data = {
          type: type,
          filename: "soft-ui-" + type,
        };

        if (type === "csv") {
          data.columnDelimiter = "|";
        }

        dataTableSearch.export(data);
      });
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
@endpush
</x-layouts.admin>
