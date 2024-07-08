@extends('admin.default')
@section('page-title','Danh Sách Nguoi Dung')
@section('content')
<div class="content">
    <!-- Overview -->
    <div class="row row-deck">
      <div class="col-sm-6 col-xxl-3">
        <!-- Pending Orders -->
        <div class="block block-rounded d-flex flex-column">
          <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
            <dl class="mb-0">
              <dt class="fs-3 fw-bold">32</dt>
              <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Pending Orders</dd>
            </dl>
            <div class="item item-rounded-lg bg-body-light">
              <i class="far fa-gem fs-3 text-primary"></i>
            </div>
          </div>
          <div class="bg-body-light rounded-bottom">
            <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
              <span>View all orders</span>
              <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
            </a>
          </div>
        </div>
        <!-- END Pending Orders -->
      </div>
      <div class="col-sm-6 col-xxl-3">
        <!-- New Customers -->
        <div class="block block-rounded d-flex flex-column">
          <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
            <dl class="mb-0">
              <dt class="fs-3 fw-bold">124</dt>
              <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">New Customers</dd>
            </dl>
            <div class="item item-rounded-lg bg-body-light">
              <i class="far fa-user-circle fs-3 text-primary"></i>
            </div>
          </div>
          <div class="bg-body-light rounded-bottom">
            <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
              <span>View all customers</span>
              <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
            </a>
          </div>
        </div>
        <!-- END New Customers -->
      </div>
      <div class="col-sm-6 col-xxl-3">
        <!-- Messages -->
        <div class="block block-rounded d-flex flex-column">
          <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
            <dl class="mb-0">
              <dt class="fs-3 fw-bold">45</dt>
              <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Messages</dd>
            </dl>
            <div class="item item-rounded-lg bg-body-light">
              <i class="far fa-paper-plane fs-3 text-primary"></i>
            </div>
          </div>
          <div class="bg-body-light rounded-bottom">
            <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
              <span>View all messages</span>
              <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
            </a>
          </div>
        </div>
        <!-- END Messages -->
      </div>
      <div class="col-sm-6 col-xxl-3">
        <!-- Conversion Rate -->
        <div class="block block-rounded d-flex flex-column">
          <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
            <dl class="mb-0">
              <dt class="fs-3 fw-bold">4.5%</dt>
              <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Conversion Rate</dd>
            </dl>
            <div class="item item-rounded-lg bg-body-light">
              <i class="fa fa-chart-bar fs-3 text-primary"></i>
            </div>
          </div>
          <div class="bg-body-light rounded-bottom">
            <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
              <span>View statistics</span>
              <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
            </a>
          </div>
        </div>
        <!-- END Conversion Rate-->
      </div>
    </div>
    <!-- END Overview -->

    <!-- Statistics -->
    <div class="row">
      <div class="col-xl-8 col-xxl-9 d-flex flex-column">
        <!-- Earnings Summary -->
        <div class="block block-rounded flex-grow-1 d-flex flex-column">
          <div class="block-header block-header-default">
            <h3 class="block-title">Earnings Summary</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                <i class="si si-refresh"></i>
              </button>
              <button type="button" class="btn-block-option">
                <i class="si si-settings"></i>
              </button>
            </div>
          </div>
          <div class="block-content block-content-full flex-grow-1 d-flex align-items-center">
            <!-- Earnings Chart Container -->
            <!-- Chart.js Chart is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
            <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
            <canvas id="js-chartjs-earnings"></canvas>
          </div>
          <div class="block-content bg-body-light">
            <div class="row items-push text-center w-100">
              <div class="col-sm-4">
                <dl class="mb-0">
                  <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                    <i class="fa fa-caret-up fs-base text-success"></i>
                    <span>2.5%</span>
                  </dt>
                  <dd class="fs-sm fw-medium text-muted mb-0">Customer Growth</dd>
                </dl>
              </div>
              <div class="col-sm-4">
                <dl class="mb-0">
                  <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                    <i class="fa fa-caret-up fs-base text-success"></i>
                    <span>3.8%</span>
                  </dt>
                  <dd class="fs-sm fw-medium text-muted mb-0">Page Views</dd>
                </dl>
              </div>
              <div class="col-sm-4">
                <dl class="mb-0">
                  <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                    <i class="fa fa-caret-down fs-base text-danger"></i>
                    <span>1.7%</span>
                  </dt>
                  <dd class="fs-sm fw-medium text-muted mb-0">New Products</dd>
                </dl>
              </div>
            </div>
          </div>
        </div>
        <!-- END Earnings Summary -->
      </div>
      <div class="col-xl-4 col-xxl-3 d-flex flex-column">
        <!-- Last 2 Weeks -->
        <!-- Chart.js Charts is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
        <div class="row row-deck flex-grow-1">
          <div class="col-md-6 col-xl-12">
            <div class="block block-rounded d-flex flex-column">
              <div class="block-content flex-grow-1 d-flex justify-content-between">
                <dl class="mb-0">
                  <dt class="fs-3 fw-bold">570</dt>
                  <dd class="fs-sm fw-medium text-muted mb-0">Total Orders</dd>
                </dl>
                <div>
                  <div class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-danger bg-danger-light">
                    <i class="fa fa-caret-down me-1"></i>
                    2.2%
                  </div>
                </div>
              </div>
              <div class="block-content p-1 text-center overflow-hidden">
                <!-- Total Orders Chart Container -->
                <canvas id="js-chartjs-total-orders" style="height: 90px;"></canvas>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-12">
            <div class="block block-rounded d-flex flex-column">
              <div class="block-content flex-grow-1 d-flex justify-content-between">
                <dl class="mb-0">
                  <dt class="fs-3 fw-bold">$5,234.21</dt>
                  <dd class="fs-sm fw-medium text-muted mb-0">Total Earnings</dd>
                </dl>
                <div>
                  <div class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-success bg-success-light">
                    <i class="fa fa-caret-up me-1"></i>
                    4.2%
                  </div>
                </div>
              </div>
              <div class="block-content p-1 text-center overflow-hidden">
                <!-- Total Earnings Chart Container -->
                <canvas id="js-chartjs-total-earnings" style="height: 90px;"></canvas>
              </div>
            </div>
          </div>
          <div class="col-xl-12">
            <div class="block block-rounded d-flex flex-column">
              <div class="block-content flex-grow-1 d-flex justify-content-between">
                <dl class="mb-0">
                  <dt class="fs-3 fw-bold">264</dt>
                  <dd class="fs-sm fw-medium text-muted mb-0">New Customers</dd>
                </dl>
                <div>
                  <div class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-success bg-success-light">
                    <i class="fa fa-caret-up me-1"></i>
                    9.3%
                  </div>
                </div>
              </div>
              <div class="block-content p-1 text-center overflow-hidden">
                <!-- New Customers Chart Container -->
                <canvas id="js-chartjs-new-customers" style="height: 90px;"></canvas>
              </div>
            </div>
          </div>
        </div>
        <!-- END Last 2 Weeks -->
      </div>
    </div>
    <!-- END Statistics -->

    <!-- Recent Orders -->
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <h3 class="block-title">Recent Orders</h3>
        <div class="block-options space-x-1">
          <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#one-dashboard-search-orders" data-class="d-none">
            <i class="fa fa-search"></i>
          </button>
          <div class="dropdown d-inline-block">
            <button type="button" class="btn btn-sm btn-alt-secondary" id="dropdown-recent-orders-filters" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-flask"></i>
              Filters
              <i class="fa fa-angle-down ms-1"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-md dropdown-menu-end fs-sm" aria-labelledby="dropdown-recent-orders-filters">
              <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                Pending
                <span class="badge bg-primary rounded-pill">20</span>
              </a>
              <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                Active
                <span class="badge bg-primary rounded-pill">72</span>
              </a>
              <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                Completed
                <span class="badge bg-primary rounded-pill">890</span>
              </a>
              <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                All
                <span class="badge bg-primary rounded-pill">997</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="one-dashboard-search-orders" class="block-content border-bottom d-none">
        <!-- Search Form -->
        <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
          <div class="push">
            <div class="input-group">
              <input type="text" class="form-control form-control-alt" id="one-ecom-orders-search" name="one-ecom-orders-search" placeholder="Search all orders..">
              <span class="input-group-text bg-body border-0">
                <i class="fa fa-search"></i>
              </span>
            </div>
          </div>
        </form>
        <!-- END Search Form -->
      </div>
      <div class="block-content block-content-full">
        <!-- Recent Orders Table -->
        <div class="table-responsive">
          <table class="table table-hover table-vcenter">
            <thead>
              <tr>
                <th>Order ID</th>
                <th class="d-none d-xl-table-cell">Customer</th>
                <th>Status</th>
                <th class="d-none d-sm-table-cell text-center">Profit</th>
                <th class="d-none d-sm-table-cell text-end">Created</th>
                <th class="d-none d-sm-table-cell text-end">Value</th>
              </tr>
            </thead>
            <tbody class="fs-sm">
              <tr>
                <td>
                  <a class="fw-semibold" href="javascript:void(0)">
                    ORD.00925                  </a>
                  <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Ralph Murray</a>
                  <p class="fs-sm fw-medium text-muted mb-0">Web developer</p>
                </td>
                <td>
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Active</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <div class="progress mb-1" style="height: 5px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 11%;" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="fs-xs fw-semibold mb-0">11%</p>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">19 min ago</td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>$1289,39</strong>
                </td>
              </tr>
              <tr>
                <td>
                  <a class="fw-semibold" href="javascript:void(0)">
                    ORD.00924                  </a>
                  <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Carol Ray</a>
                  <p class="fs-sm fw-medium text-muted mb-0">Web developer</p>
                </td>
                <td>
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Completed</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <div class="progress mb-1" style="height: 5px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 17%;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="fs-xs fw-semibold mb-0">17%</p>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">16 min ago</td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>$333,19</strong>
                </td>
              </tr>
              <tr>
                <td>
                  <a class="fw-semibold" href="javascript:void(0)">
                    ORD.00923                  </a>
                  <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Lori Moore</a>
                  <p class="fs-sm fw-medium text-muted mb-0">Photographer</p>
                </td>
                <td>
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Completed</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <div class="progress mb-1" style="height: 5px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 7%;" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="fs-xs fw-semibold mb-0">7%</p>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">11 min ago</td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>$650,32</strong>
                </td>
              </tr>
              <tr>
                <td>
                  <a class="fw-semibold" href="javascript:void(0)">
                    ORD.00922                  </a>
                  <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Betty Kelley</a>
                  <p class="fs-sm fw-medium text-muted mb-0">Photographer</p>
                </td>
                <td>
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Active</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <div class="progress mb-1" style="height: 5px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 6%;" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="fs-xs fw-semibold mb-0">6%</p>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">2 min ago</td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>$1118,31</strong>
                </td>
              </tr>
              <tr>
                <td>
                  <a class="fw-semibold" href="javascript:void(0)">
                    ORD.00921                  </a>
                  <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">David Fuller</a>
                  <p class="fs-sm fw-medium text-muted mb-0">Web developer</p>
                </td>
                <td>
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Active</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <div class="progress mb-1" style="height: 5px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 8%;" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="fs-xs fw-semibold mb-0">8%</p>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">22 min ago</td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>$2326,20</strong>
                </td>
              </tr>
              <tr>
                <td>
                  <a class="fw-semibold" href="javascript:void(0)">
                    ORD.00920                  </a>
                  <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Amber Harvey</a>
                  <p class="fs-sm fw-medium text-muted mb-0">Digital Nomad</p>
                </td>
                <td>
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Active</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <div class="progress mb-1" style="height: 5px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 14%;" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="fs-xs fw-semibold mb-0">14%</p>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">18 min ago</td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>$2252,27</strong>
                </td>
              </tr>
              <tr>
                <td>
                  <a class="fw-semibold" href="javascript:void(0)">
                    ORD.00919                  </a>
                  <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Adam McCoy</a>
                  <p class="fs-sm fw-medium text-muted mb-0">Digital Nomad</p>
                </td>
                <td>
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Pending</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <div class="progress mb-1" style="height: 5px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 3%;" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="fs-xs fw-semibold mb-0">3%</p>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">10 min ago</td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>$1199,11</strong>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- END Recent Orders Table -->
      </div>
      <div class="block-content block-content-full bg-body-light">
        <!-- Pagination -->
        <nav aria-label="Photos Search Navigation">
          <ul class="pagination pagination-sm justify-content-end mb-0">
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                Prev
              </a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="javascript:void(0)">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)">4</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)" aria-label="Next">
                Next
              </a>
            </li>
          </ul>
        </nav>
        <!-- END Pagination -->
      </div>
    </div>
    <!-- END Recent Orders -->
  </div>
  @endsection