<x-layouts.admin>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
              <div class="card  mb-4">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Money</p>
                        <h5 class="font-weight-bolder">
                          $53,000
                        </h5>

                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <div class="card  mb-4">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Users</p>
                        <h5 class="font-weight-bolder">
                         {{\App\Models\User::count()}}
                        </h5>

                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <div class="card  mb-4">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">New Clients</p>
                        <h5 class="font-weight-bolder">
                          +3,462
                        </h5>

                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                        <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <div class="card  mb-4">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Sales</p>
                        <h5 class="font-weight-bolder">
                          $103,430
                        </h5>

                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                        <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 mb-4 mb-lg-0">
          <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
              <h6 class="text-capitalize">Sales overview</h6>
              <p class="text-sm mb-0">
                <i class="fa fa-arrow-up text-success"></i>
                <span class="font-weight-bold">4% more</span> in 2021
              </p>
            </div>
            <div class="card-body p-3">
              <div class="chart">
                <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
          <div class="col-lg-8 col-md-6 mb-4 mb-lg-0">
              <div class="card">
                  <div class="table-responsive">
                      <table class="table align-items-center mb-0">
                          <thead>
                          <tr>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Technology</th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                              <th class="text-secondary opacity-7"></th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                              <td>
                                  <div class="d-flex px-2 py-1">
                                      <div>
                                          <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                      </div>
                                      <div class="d-flex flex-column justify-content-center">
                                          <h6 class="mb-0 text-xs">John Michael</h6>
                                          <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <p class="text-xs font-weight-bold mb-0">Manager</p>
                                  <p class="text-xs text-secondary mb-0">Organization</p>
                              </td>
                              <td class="align-middle text-center text-sm">
                                  <span class="badge badge-sm badge-success">Online</span>
                              </td>
                              <td class="align-middle text-center">
                                  <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                              </td>
                              <td class="align-middle">
                                  <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                      Edit
                                  </a>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class="d-flex px-2 py-1">
                                      <div>
                                          <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-3.jpg" class="avatar avatar-sm me-3">
                                      </div>
                                      <div class="d-flex flex-column justify-content-center">
                                          <h6 class="mb-0 text-xs">Alexa Liras</h6>
                                          <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <p class="text-xs font-weight-bold mb-0">Programator</p>
                                  <p class="text-xs text-secondary mb-0">Developer</p>
                              </td>
                              <td class="align-middle text-center text-sm">
                                  <span class="badge badge-sm badge-secondary">Offline</span>
                              </td>
                              <td class="align-middle text-center">
                                  <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                              </td>
                              <td class="align-middle">
                                  <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                      Edit
                                  </a>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class="d-flex px-2 py-1">
                                      <div>
                                          <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-4.jpg" class="avatar avatar-sm me-3">
                                      </div>
                                      <div class="d-flex flex-column justify-content-center">
                                          <h6 class="mb-0 text-xs">Laurent Perrier</h6>
                                          <p class="text-xs text-secondary mb-0">laurent@creative-tim.com</p>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <p class="text-xs font-weight-bold mb-0">Executive</p>
                                  <p class="text-xs text-secondary mb-0">Projects</p>
                              </td>
                              <td class="align-middle text-center text-sm">
                                  <span class="badge badge-sm badge-success">Online</span>
                              </td>
                              <td class="align-middle text-center">
                                  <span class="text-secondary text-xs font-weight-bold">19/09/17</span>
                              </td>
                              <td class="align-middle">
                                  <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                      Edit
                                  </a>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class="d-flex px-2 py-1">
                                      <div>
                                          <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-3.jpg" class="avatar avatar-sm me-3">
                                      </div>
                                      <div class="d-flex flex-column justify-content-center">
                                          <h6 class="mb-0 text-xs">Michael Levi</h6>
                                          <p class="text-xs text-secondary mb-0">michael@creative-tim.com</p>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <p class="text-xs font-weight-bold mb-0">Programator</p>
                                  <p class="text-xs text-secondary mb-0">Developer</p>
                              </td>
                              <td class="align-middle text-center text-sm">
                                  <span class="badge badge-sm badge-success">Online</span>
                              </td>
                              <td class="align-middle text-center">
                                  <span class="text-secondary text-xs font-weight-bold">24/12/08</span>
                              </td>
                              <td class="align-middle">
                                  <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                      Edit
                                  </a>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class="d-flex px-2 py-1">
                                      <div>
                                          <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                      </div>
                                      <div class="d-flex flex-column justify-content-center">
                                          <h6 class="mb-0 text-xs">Richard Gran</h6>
                                          <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <p class="text-xs font-weight-bold mb-0">Manager</p>
                                  <p class="text-xs text-secondary mb-0">Executive</p>
                              </td>
                              <td class="align-middle text-center text-sm">
                                  <span class="badge badge-sm badge-secondary">Offline</span>
                              </td>
                              <td class="align-middle text-center">
                                  <span class="text-secondary text-xs font-weight-bold">04/10/21</span>
                              </td>
                              <td class="align-middle">
                                  <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                      Edit
                                  </a>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class="d-flex px-2 py-1">
                                      <div>
                                          <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-3.jpg" class="avatar avatar-sm me-3">
                                      </div>
                                      <div class="d-flex flex-column justify-content-center">
                                          <h6 class="mb-0 text-xs">Michael Levi</h6>
                                          <p class="text-xs text-secondary mb-0">michael@creative-tim.com</p>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <p class="text-xs font-weight-bold mb-0">Programator</p>
                                  <p class="text-xs text-secondary mb-0">Developer</p>
                              </td>
                              <td class="align-middle text-center text-sm">
                                  <span class="badge badge-sm badge-success">Online</span>
                              </td>
                              <td class="align-middle text-center">
                                  <span class="text-secondary text-xs font-weight-bold">24/12/08</span>
                              </td>
                              <td class="align-middle">
                                  <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                      Edit
                                  </a>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class="d-flex px-2 py-1">
                                      <div>
                                          <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                      </div>
                                      <div class="d-flex flex-column justify-content-center">
                                          <h6 class="mb-0 text-xs">Richard Gran</h6>
                                          <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <p class="text-xs font-weight-bold mb-0">Manager</p>
                                  <p class="text-xs text-secondary mb-0">Executive</p>
                              </td>
                              <td class="align-middle text-center text-sm">
                                  <span class="badge badge-sm badge-secondary">Offline</span>
                              </td>
                              <td class="align-middle text-center">
                                  <span class="text-secondary text-xs font-weight-bold">04/10/21</span>
                              </td>
                              <td class="align-middle">
                                  <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                      Edit
                                  </a>
                              </td>
                          </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
          <div class="card h-100 ">
            <div class="card-header">
              <h5 class="mb-0 text-capitalize">Progress track</h5>
            </div>
            <div class="card-body pt-0">
              <ul class="list-group list-group-flush list">
                  <li class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <a href="javascript:;" class="avatar rounded-circle">
                        <img alt="Image placeholder" src="https://dynamic-assets.coinbase.com/e785e0181f1a23a30d9476038d9be91e9f6c63959b538eabbc51a1abc8898940383291eede695c3b8dfaa1829a9b57f5a2d0a16b0523580346c6b8fab67af14b/asset_icons/b57ac673f06a4b0338a596817eb0a50ce16e2059f327dc117744449a47915cb2.png">
                      </a>
                    </div>
                    <div class="col">
                      <h6>Crypto Analysis</h6>
                      <div class="progress progress-xs mb-0">
                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                      </div>
                    </div>
                  </div>
                </li>
                  <li class="list-group-item px-0">
                      <div class="row align-items-center">
                          <div class="col-auto">
                              <a href="javascript:;" class="avatar rounded-circle">
                                  <img alt="Image placeholder" src="https://dynamic-assets.coinbase.com/e785e0181f1a23a30d9476038d9be91e9f6c63959b538eabbc51a1abc8898940383291eede695c3b8dfaa1829a9b57f5a2d0a16b0523580346c6b8fab67af14b/asset_icons/b57ac673f06a4b0338a596817eb0a50ce16e2059f327dc117744449a47915cb2.png">
                              </a>
                          </div>
                          <div class="col">
                              <h6>Crypto Analysis</h6>
                              <div class="progress progress-xs mb-0">
                                  <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                              </div>
                          </div>
                      </div>
                  </li>
                  <li class="list-group-item px-0">
                      <div class="row align-items-center">
                          <div class="col-auto">
                              <a href="javascript:;" class="avatar rounded-circle">
                                  <img alt="Image placeholder" src="https://dynamic-assets.coinbase.com/e785e0181f1a23a30d9476038d9be91e9f6c63959b538eabbc51a1abc8898940383291eede695c3b8dfaa1829a9b57f5a2d0a16b0523580346c6b8fab67af14b/asset_icons/b57ac673f06a4b0338a596817eb0a50ce16e2059f327dc117744449a47915cb2.png">
                              </a>
                          </div>
                          <div class="col">
                              <h6>Crypto Analysis</h6>
                              <div class="progress progress-xs mb-0">
                                  <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                              </div>
                          </div>
                      </div>
                  </li>
                  <li class="list-group-item px-0">
                      <div class="row align-items-center">
                          <div class="col-auto">
                              <a href="javascript:;" class="avatar rounded-circle">
                                  <img alt="Image placeholder" src="https://dynamic-assets.coinbase.com/e785e0181f1a23a30d9476038d9be91e9f6c63959b538eabbc51a1abc8898940383291eede695c3b8dfaa1829a9b57f5a2d0a16b0523580346c6b8fab67af14b/asset_icons/b57ac673f06a4b0338a596817eb0a50ce16e2059f327dc117744449a47915cb2.png">
                              </a>
                          </div>
                          <div class="col">
                              <h6>Crypto Analysis</h6>
                              <div class="progress progress-xs mb-0">
                                  <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                              </div>
                          </div>
                      </div>
                  </li>
                  <li class="list-group-item px-0">
                      <div class="row align-items-center">
                          <div class="col-auto">
                              <a href="javascript:;" class="avatar rounded-circle">
                                  <img alt="Image placeholder" src="https://dynamic-assets.coinbase.com/e785e0181f1a23a30d9476038d9be91e9f6c63959b538eabbc51a1abc8898940383291eede695c3b8dfaa1829a9b57f5a2d0a16b0523580346c6b8fab67af14b/asset_icons/b57ac673f06a4b0338a596817eb0a50ce16e2059f327dc117744449a47915cb2.png">
                              </a>
                          </div>
                          <div class="col">
                              <h6>Crypto Analysis</h6>
                              <div class="progress progress-xs mb-0">
                                  <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                              </div>
                          </div>
                      </div>
                  </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">

        <div class="col-12 col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7">Project</th>
                      <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">Budget</th>
                      <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                      <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">Completion</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-spotify.svg" class="avatar avatar-sm rounded-circle me-2">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-xs">Spotify</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">$2,500</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">working</span>
                        </span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center">
                          <span class="me-2 text-xs">60%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-dark mb-0">
                          <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-invision.svg" class="avatar avatar-sm rounded-circle me-2">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-xs">Invision</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">$5,000</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-success"></i>
                          <span class="text-dark text-xs">done</span>
                        </span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center">
                          <span class="me-2 text-xs">100%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-dark mb-0" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-jira.svg" class="avatar avatar-sm rounded-circle me-2">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-xs">Jira</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">$3,400</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-danger"></i>
                          <span class="text-dark text-xs">canceled</span>
                        </span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center">
                          <span class="me-2 text-xs">30%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="30" style="width: 30%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-dark mb-0" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-slack.svg" class="avatar avatar-sm rounded-circle me-2">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-xs">Slack</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">$1,000</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-danger"></i>
                          <span class="text-dark text-xs">canceled</span>
                        </span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center">
                          <span class="me-2 text-xs">0%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width: 0%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-dark mb-0" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-webdev.svg" class="avatar avatar-sm rounded-circle me-2">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-xs">Webdev</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">$14,000</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">working</span>
                        </span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center">
                          <span class="me-2 text-xs">80%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80" style="width: 80%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-dark mb-0" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-xd.svg" class="avatar avatar-sm rounded-circle me-2">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-xs">Adobe XD</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">$2,300</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-success"></i>
                          <span class="text-dark text-xs">done</span>
                        </span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center">
                          <span class="me-2 text-xs">100%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-dark mb-0" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-12 col-md-6 mb-4 mb-md-0">
              <div class="card bg-gradient-dark">
                <div class="card-body">
                  <div class="mb-2">
                    <sup class="text-white">$</sup> <span class="h2 text-white">3,300</span>
                    <div class="text-white opacity-8 mt-2 text-sm">Your current balance</div>
                    <div>
                      <span class="text-success font-weight-600">+ 15%</span> <span class="text-white opacity-8">($250)</span>
                    </div>
                  </div>
                  <button class="btn btn-sm btn-white mb-0 w-100">Add credit</button>
                </div>
                <div class="card-footer pt-0">
                  <div class="row">
                    <div class="col">
                      <small class="text-white opacity-8">Orders: 60%</small>
                      <div class="progress progress-xs my-2">
                        <div class="progress-bar bg-success" style="width: 60%"></div>
                      </div>
                    </div>
                    <div class="col"><small class="text-white opacity-8">Sales: 40%</small>
                      <div class="progress progress-xs my-2">
                        <div class="progress-bar bg-warning" style="width: 40%"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="card bg-gradient-danger h-100">
                <div class="card-body">
                  <div class="row justify-content-between align-items-center">
                    <div class="col">
                      <img src="{{asset('dashboards/')}}/assets/img/logos/bitcoin.jpg" class="w-30 border-radius-md" alt="Image placeholder">
                    </div>
                    <div class="col-auto">
                      <span class="badge badge-lg badge-success">Active</span>
                    </div>
                  </div>
                  <div class="my-4">
                    <p class="text-white opacity-8 mb-0 text-sm">Address (Said)</p>
                    <div class="h6 text-white cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Copy Address">3EyrVe7bgjkkdsmdAuw3ZTxCyYsgmW4iqJ</div>
                  </div>
                  <div class="row mt-5">
                    <div class="col">
                      <p class="text-white opacity-8 mb-0 text-sm">Name</p>
                      <span class="d-block h6 text-white">Majed Mubarek</span>
                    </div>
                    <div class="col ms-auto text-end">
                      <div class="btn-groups mt-3">
                        <div class="btn rounded-circle btn-sm btn-white mb-0 p-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Receive">
                          <i class="ni ni-bold-down p-2"></i>
                        </div>
                        <div class="btn rounded-circle btn-sm btn-white mb-0 p-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Send">
                          <i class="ni ni-bold-up p-2"></i>
                        </div>
                        <div class="btn rounded-circle btn-sm btn-white mb-0 p-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Swap">
                          <i class="ni ni-curved-next p-2"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>


  <!--   Core JS Files   -->

  @push('js')

  <script src="{{asset('dashboards/assets/js/plugins/dragula/dragula.min.js')}}"></script>
  <script src="{{asset('dashboards/assets/js/plugins/jkanban/jkanban.js')}}"></script>
  <script src="{{asset('dashboards/assets/js/plugins/chartjs.min.js')}}"></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
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
</body>

</x-layouts.admin>
