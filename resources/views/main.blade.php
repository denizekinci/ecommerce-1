@extends('master')
@section('title','Anasayfa')



        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="highlight-icon bg-light mr-3">
                                <i class="mdi mdi-cube text-success icon-lg"></i>
                            </div>
                            <div class="wrapper">
                                <p class="card-text mb-0">Revenue</p>
                                <div class="fluid-container">
                                    <h3 class="card-title mb-0">$65,650</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="highlight-icon bg-light mr-3">
                                <i class="mdi mdi-briefcase-check text-primary icon-lg"></i>
                            </div>
                            <div class="wrapper">
                                <p class="card-text mb-0">Orders</p>
                                <div class="fluid-container">
                                    <h3 class="card-title mb-0">$45,650</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="highlight-icon bg-light mr-3">
                                <i class="mdi mdi-account-multiple text-danger icon-lg"></i>
                            </div>
                            <div class="wrapper">
                                <p class="card-text mb-0">Returns</p>
                                <div class="fluid-container">
                                    <h3 class="card-title mb-0">$12,357</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="highlight-icon bg-light mr-3">
                                <i class="mdi mdi-airballoon text-info icon-lg"></i>
                            </div>
                            <div class="wrapper">
                                <p class="card-text mb-0">Sales</p>
                                <div class="fluid-container">
                                    <h3 class="card-title mb-0">$45,650</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Latest Comments</h5>
                        <div class="d-flex align-items-start pb-3 pt-1 mb-4 border-bottom">
                            <img src="../../images/brand-logo/4.png" alt="brand logo">
                            <div class="wrapper w-100 pl-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="badge badge-danger badge-lg mb-2">ADMIN-APPLE</span>
                                    <span class="text-gray text-small">13:17 PM</span>
                                </div>
                                <p>A new rating has been received</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start pb-3 pt-1 mb-4 border-bottom">
                            <img src="../../images/brand-logo/3.png" alt="brand logo">
                            <div class="wrapper w-100 pl-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="badge badge-warning badge-lg mb-2">ADMIN-AIRBNB</span>
                                    <span class="text-gray text-small">09:29 PM</span>
                                </div>
                                <p>Verify your email address !</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start pb-3 pt-1 mb-4 border-bottom">
                            <img src="../../images/brand-logo/1.png" alt="brand logo">
                            <div class="wrapper w-100 pl-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="badge badge-success badge-lg mb-2">ADMIN-AMAZON</span>
                                    <span class="text-gray text-small">03:43 AM</span>
                                </div>
                                <p>Support of theme</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start pt-1">
                            <img src="../../images/brand-logo/2.png" alt="brand logo">
                            <div class="wrapper w-100 pl-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="badge badge-info badge-lg mb-2">ADMIN-FACEBOOK</span>
                                    <span class="text-gray text-small">10:14 AM</span>
                                </div>
                                <p>New submission on website</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Top Selling Products</h5>
                        <div class="row border-bottom pb-3 mb-3">
                            <div class="col-12 py-4 my-3">
                                <canvas id="DashboardBarChart-1" style="height:100px"></canvas>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="d-flex align-items-end">
                                    <h1 class="display-4 font-weight-semibold mb-0">8935</h1>
                                    <h5 class="ml-3 mb-2">Sales Per Day</h5>
                                </div>
                                <p class="mt-0 mb-2">Some quick example text to build</p>
                                <div class="d-flex align-items-center">
                                    <div class="progress progress-md w-100 mr-3">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 38%" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mb-0">38%</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex align-items-end">
                                    <h1 class="display-4 font-weight-semibold mb-0">6843</h1>
                                    <h5 class="ml-3 mb-2">Orders Per Day</h5>
                                </div>
                                <p class="mt-0 mb-2">Proin eget tortor risus.</p>
                                <div class="d-flex align-items-center">
                                    <div class="progress progress-md w-100 mr-3">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 64%" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mb-0">64%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Revenue</h5>
                        <div class="w-75 mx-auto">
                            <div class="d-flex justify-content-between text-center mb-2">
                                <div class="wrapper">
                                    <h4>6,256</h4>
                                    <small class="text-muted">Totel sales</small>
                                </div>
                                <div class="wrapper">
                                    <h4>8569</h4>
                                    <small class="text-muted">Open Compaign</small>
                                </div>
                            </div>
                        </div>
                        <div id="morris-line-example" style="height:250px;"></div>
                        <div class="w-75 mx-auto">
                            <div class="d-flex justify-content-between text-center mt-5">
                                <div class="wrapper">
                                    <h4>5136</h4>
                                    <small class="text-muted">Online Sales</small>
                                </div>
                                <div class="wrapper">
                                    <h4>4596</h4>
                                    <small class="text-muted">Store Sales</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Order Status</h5>
                        <div class="row mb-5">
                            <div class="col-md-3 col-sm-6 col-6">
                                <div class="d-flex">
                                    <h2 class="mb-0">5675</h2>
                                    <i class="mdi mdi-arrow-up h2 mb-0 text-success"></i>
                                </div>
                                <p>Daily Order</p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-6">
                                <div class="d-flex">
                                    <h2 class="mb-0">7841</h2>
                                    <i class="mdi mdi-arrow-up h2 mb-0 text-success"></i>
                                </div>
                                <p>Tasks Completed</p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-6">
                                <div class="d-flex">
                                    <h2 class="mb-0">6521</h2>
                                    <i class="mdi mdi-arrow-down h2 mb-0 text-danger"></i>
                                </div>
                                <p>Monthly Sales</p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-6">
                                <div class="d-flex">
                                    <h2 class="mb-0">8954</h2>
                                    <i class="mdi mdi-arrow-up h2 mb-0 text-success"></i>
                                </div>
                                <p>Total Revenue</p>
                            </div>
                        </div>
                        <canvas id="dashoard-area-chart" height="70"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h5 class="card-title mb-0">New Accounts</h5>
                            <small class="text-gray d-none d-sm-block">Last activity was 2 days ago</small>
                        </div>
                        <div class="new-accounts">
                            <ul class="chats">
                                <li class="chat-persons">
                                    <a href="#">
                                        <span class="pro-pic"><img src="../../images/faces/face1.jpg" alt="profile image"></span>
                                        <div class="user">
                                            <p class="u-name">David</p>
                                            <p class="u-designation">Python Developer</p>
                                        </div>
                                        <p class="joined-date">30 Mins ago</p>
                                    </a>
                                </li>
                                <!-- list person -->
                                <li class="chat-persons">
                                    <a href="#">
                                        <span class="pro-pic"><img src="../../images/faces/face2.jpg" alt="profile image"></span>
                                        <div class="user">
                                            <p class="u-name">Stella Johnson</p>
                                            <p class="u-designation">SEO Expert</p>
                                        </div>
                                        <p class="joined-date">2 Days ago</p>
                                    </a>
                                </li>
                                <!-- list person -->
                                <li class="chat-persons">
                                    <a href="#">
                                        <span class="pro-pic"><img src="../../images/faces/face23.jpg" alt="profile image"></span>
                                        <div class="user">
                                            <p class="u-name">Marina Michel</p>
                                            <p class="u-designation">Business Development</p>
                                        </div>
                                        <p class="joined-date">4 Days ago</p>
                                    </a>
                                </li>
                                <!-- list person -->
                                <li class="chat-persons">
                                    <a href="#">
                                        <span class="pro-pic"><img src="../../images/faces/face4.jpg" alt="profile image"></span>
                                        <div class="user">
                                            <p class="u-name">Edward Fletcher</p>
                                            <p class="u-designation">UI/UX Designer</p>
                                        </div>
                                        <p class="joined-date">5 Days ago</p>
                                    </a>
                                </li>
                                <!-- list person -->
                                <li class="chat-persons">
                                    <a href="#">
                                        <span class="pro-pic"><img src="../../images/faces/face14.jpg" alt="profile image"></span>
                                        <div class="user">
                                            <p class="u-name">Allen Donald</p>
                                            <p class="u-designation">UI/UX Designer</p>
                                        </div>
                                        <p class="joined-date">5 Days ago</p>
                                    </a>
                                </li>
                                <!-- list person -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="card-title mb-0">To-do list</h5>
                            <button type="button" class="btn btn-sm btn-success ml-auto"><i class="mdi mdi-plus"></i>Create New</button>
                        </div>
                        <div class="todo-list-container">
                            <div class="list-wrapper">
                                <ul class="todo-list">
                                    <li class="list">
                                        <div class="form-check form-check-flat todo-form-check w-100">
                                            <div class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                                <i class="input-helper"></i>
                                                <div class="d-flex">
                                                    <div class="wrapper todo-content">
                                                        <h6 class="mb-1 ellipsis">Anyways i would like just do it</h6>
                                                        <p class="text-gray mb-0 ellipsor">15:00 PM Mon, 14 Jan 2018</p>
                                                        <span class="text-success ellipsor">#Photoshop</span>
                                                    </div>
                                                    <div class="action-wrapper wrapper ml-auto d-flex align-items-center">
                                                        <i class="btn-close mdi mdi-close-circle-outline text-danger icon-md"></i>
                                                        <i class="btn-action mdi mdi-dots-vertical text-muted icon-md"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list">
                                        <div class="form-check form-check-flat todo-form-check w-100">
                                            <div class="form-check-label">
                                                <input type="checkbox" class="form-check-input" checked>
                                                <i class="input-helper"></i>
                                                <div class="d-flex">
                                                    <div class="wrapper todo-content">
                                                        <h6 class="mb-1 ellipsis">Make an appointment with Doctor</h6>
                                                        <p class="text-gray mb-0 ellipsor">10:00 PM Sat, 10 Jan 2018</p>
                                                        <span class="text-success ellipsor">#Bootstrap</span>
                                                    </div>
                                                    <div class="action-wrapper wrapper ml-auto d-flex align-items-center">
                                                        <i class="btn-close mdi mdi-close-circle-outline text-danger icon-md"></i>
                                                        <i class="btn-action mdi mdi-dots-vertical text-muted icon-md"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list">
                                        <div class="form-check form-check-flat todo-form-check w-100">
                                            <div class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                                <i class="input-helper"></i>
                                                <div class="d-flex">
                                                    <div class="wrapper todo-content">
                                                        <h6 class="mb-1 ellipsis">Visit our boys in Battle Exhibition</h6>
                                                        <p class="text-gray mb-0 ellipsor">06:46 PM Mon, 02 Jan 2018</p>
                                                        <span class="text-success ellipsor">#Bootstrap&nbsp;&nbsp;#CSS</span>
                                                    </div>
                                                    <div class="action-wrapper wrapper ml-auto d-flex align-items-center">
                                                        <i class="btn-close mdi mdi-close-circle-outline text-danger icon-md"></i>
                                                        <i class="btn-action mdi mdi-dots-vertical text-muted icon-md"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list">
                                        <div class="form-check form-check-flat todo-form-check w-100">
                                            <div class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                                <i class="input-helper"></i>
                                                <div class="d-flex">
                                                    <div class="wrapper todo-content">
                                                        <h6 class="mb-1 ellipsis">Please Checkout The Attachment</h6>
                                                        <p class="text-gray mb-0 ellipsor">03:00 PM Sat, 13 Jan 2018</p>
                                                        <span class="text-danger ellipsor">#HTML</span>
                                                    </div>
                                                    <div class="action-wrapper wrapper ml-auto d-flex align-items-center">
                                                        <i class="btn-close mdi mdi-close-circle-outline text-danger icon-md"></i>
                                                        <i class="btn-action mdi mdi-dots-vertical text-muted icon-md"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Payment Method</h5>
                        <div class="table-responsive">
                            <table class="table center-aligned-table">
                                <thead>
                                <tr>
                                    <th class="border-bottom-0">ID</th>
                                    <th class="border-bottom-0">Assignee</th>
                                    <th class="border-bottom-0">Task Details</th>
                                    <th class="border-bottom-0">Payment Method</th>
                                    <th class="border-bottom-0">Payment Status</th>
                                    <th class="border-bottom-0">Amount</th>
                                    <th class="border-bottom-0">Tracking Number</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>#320</td>
                                    <td>Mark C.Diaz</td>
                                    <td>Support of thteme</td>
                                    <td>Credit card</td>
                                    <td><label class="badge badge-success">Approved</label></td>
                                    <td>$12,245</td>
                                    <td>JPBBN435893458</td>
                                </tr>
                                <tr>
                                    <td>#321</td>
                                    <td>Jose D</td>
                                    <td>Verify your email address !</td>
                                    <td>Internet banking</td>
                                    <td><label class="badge badge-warning">Pending</label></td>
                                    <td>$12,245</td>
                                    <td>BDYBN435893325</td>
                                </tr>
                                <tr>
                                    <td>#322</td>
                                    <td>Philips T</td>
                                    <td>Item support message send</td>
                                    <td>Credit card</td>
                                    <td><label class="badge badge-success">Approved</label></td>
                                    <td>$12,245</td>
                                    <td>JSNTN435884258</td>
                                </tr>
                                <tr>
                                    <td>#323</td>
                                    <td>Luke Pixel</td>
                                    <td>New submission on website</td>
                                    <td>Cash on delivery</td>
                                    <td><label class="badge badge-danger">Rejected</label></td>
                                    <td>$12,245</td>
                                    <td>JPABT435893678</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0 d-none d-md-block text-dark">Showing 1 to 20 of 20 entries</p>
                            <ul class="pagination mb-0 ml-auto">
                                <li class="page-item"><a class="page-link" href="#"><i class="mdi mdi-chevron-left"></i></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="mdi mdi-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">The Current Chart</h5>
                        <canvas id="current-chart" height="100"></canvas>
                    </div>
                    <div class="border-top py-4 px-4">
                        <p class="mb-0 text-gray">Projects Status</p>
                        <div class="d-flex align-items-end">
                            <h2 class="mb-0 display-2 font-weight-semibold text-success">76,533</h2>
                            <p class="mb-2 ml-1 text-success">PCS</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Updates</h5>
                        <ul class="bullet-line-list">
                            <li>
                                <h6>User confirmation</h6>
                                <p class="mb-0">Donec rutrum congue leo eget malesuada.</p>
                                <p class="text-muted">
                                    <i class="mdi mdi-clock"></i>
                                    7 months ago.
                                </p>
                            </li>
                            <li>
                                <h6>Continuous evaluation</h6>
                                <p class="mb-0">Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                                <p class="text-muted">
                                    <i class="mdi mdi-clock"></i>
                                    7 months ago.
                                </p>
                            </li>
                            <li>
                                <h6>Promotion</h6>
                                <p class="mb-0">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                <p class="text-muted">
                                    <i class="mdi mdi-clock"></i>
                                    7 months ago.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Manage Tickets</h5>
                        <div class="fluid-container">
                            <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                                <div class="col-md-1">
                                    <img class="img-sm rounded-circle mb-4 mb-md-0" src="../../images/faces/face1.jpg" alt="profile image">
                                </div>
                                <div class="ticket-details col-md-9">
                                    <div class="d-flex">
                                        <p class="text-dark font-weight-bold mr-2 mb-0 no-wrap">James :</p>
                                        <p class="font-weight-medium mr-1 mb-0">[#23047]</p>
                                        <p class="font-weight-semibold mb-0 ellipsis">Donec rutrum congue leo eget malesuada.</p>
                                    </div>
                                    <p class="text-small text-gray mb-2">Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim vivamus.</p>
                                    <div class="row text-gray d-md-flex d-none">
                                        <div class="col-4 d-flex">
                                            <p class="mb-0 mr-2 text-muted text-muted">Last responded :</p>
                                            <p class="Last-responded mr-2 mb-0 text-muted text-muted">3 hours ago</p>
                                        </div>
                                        <div class="col-4 d-flex">
                                            <p class="mb-0 mr-2 text-muted text-muted">Due in :</p>
                                            <p class="Last-responded mr-2 mb-0 text-muted text-muted">2 Days</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ticket-actions col-md-2">
                                    <div class="btn-group dropdown">
                                        <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Manage
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#"><i class="fa fa-reply fa-fw"></i>Quick reply</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-history fa-fw"></i>Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"><i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                                <div class="col-md-1">
                                    <img class="img-sm rounded-circle mb-4 mb-md-0" src="../../images/faces/face2.jpg" alt="profile image">
                                </div>
                                <div class="ticket-details col-md-9">
                                    <div class="d-flex">
                                        <p class="text-dark font-weight-bold mr-2 mb-0 no-wrap">Stella :</p>
                                        <p class="font-weight-medium mr-1 mb-0">[#23135]</p>
                                        <p class="font-weight-semibold mb-0 ellipsis">Curabitur aliquet quam id dui posuere blandit.</p>
                                    </div>
                                    <p class="text-small text-gray mb-2">Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh. Curabitur non nulla sit amet nisl.</p>
                                    <div class="row text-gray d-md-flex d-none">
                                        <div class="col-4 d-flex">
                                            <p class="mb-0 mr-2 text-muted">Last responded :</p>
                                            <p class="Last-responded mr-2 mb-0 text-muted">3 hours ago</p>
                                        </div>
                                        <div class="col-4 d-flex">
                                            <p class="mb-0 mr-2 text-muted">Due in :</p>
                                            <p class="Last-responded mr-2 mb-0 text-muted">2 Days</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ticket-actions col-md-2">
                                    <div class="btn-group dropdown">
                                        <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Manage
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#"><i class="fa fa-reply fa-fw"></i>Quick reply</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-history fa-fw"></i>Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"><i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ticket-card mt-3">
                                <div class="col-md-1">
                                    <img class="img-sm rounded-circle mb-4 mb-md-0" src="../../images/faces/face3.jpg" alt="profile image">
                                </div>
                                <div class="ticket-details col-md-9">
                                    <div class="d-flex">
                                        <p class="text-dark font-weight-bold mr-2 mb-0 no-wrap">John Doe :</p>
                                        <p class="font-weight-medium mr-1 mb-0">[#23246]</p>
                                        <p class="font-weight-semibold mb-0 ellipsis">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar.</p>
                                    </div>
                                    <p class="text-small text-gray mb-2">Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Lorem ipsum dolor sit amet.</p>
                                    <div class="row text-gray d-md-flex d-none">
                                        <div class="col-4 d-flex">
                                            <p class="mb-0 mr-2 text-muted">Last responded :</p>
                                            <p class="Last-responded mr-2 mb-0 text-muted">3 hours ago</p>
                                        </div>
                                        <div class="col-4 d-flex">
                                            <p class="mb-0 mr-2 text-muted">Due in :</p>
                                            <p class="Last-responded mr-2 mb-0 text-muted">2 Days</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ticket-actions col-md-2">
                                    <div class="btn-group dropdown">
                                        <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Manage
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#"><i class="fa fa-reply fa-fw"></i>Quick reply</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-history fa-fw"></i>Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"><i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- content-wrapper ends -->

    <!-- partial -->

