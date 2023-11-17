@extends('admin.manager.body.listprice')
@section('listprice-content')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">List Price</h4>
                        <form action="" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Product Type</label>
                                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Product Type">
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Product Category</label>
                                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Product Category">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Price (Contract)</label>
                                        <input type="number" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="₱00.00">
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <button type="submit" class="btn btn-outline-primary generate">Generate</button>
                            <button type="submit" class="btn btn-success save">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="row">
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">List Price</h6>
                        <form class="forms-sample">
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Spot Cash</label>
                                <input type="number" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="₱00.00">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">At-Need</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="₱00.00">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">With Down Payment</h6>
                        <form class="forms-sample">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">1yr/s (Interest)</label>
                                        <input type="number" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="₱00.00">
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Monthly Payment</label>
                                        <input type="number" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="₱00.00">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">2yr/s (Interest)</label>
                                        <input type="number" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="₱00.00">
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Monthly Payment</label>
                                        <input type="number" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="₱00.00">
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">3yr/s (Interest)</label>
                                        <input type="number" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="₱00.00">
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Monthly Payment</label>
                                        <input type="number" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="₱00.00">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">4yr/s (Interest)</label>
                                        <input type="number" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="₱00.00">
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Monthly Payment</label>
                                        <input type="number" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="₱00.00">
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">5yr/s (Interest)</label>
                                        <input type="number" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="₱00.00">
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Monthly Payment</label>
                                        <input type="number" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="₱00.00">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Description</h6>
                        <form class="forms-sample">
                            <textarea  class="form-control" name="" id="" cols="25" rows="11"></textarea>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">No Down Payment</h6>
                        <form class="forms-sample">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">1yr/s (Interest)</label>
                                        <input type="number" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="₱00.00">
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Monthly Payment</label>
                                        <input type="number" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="₱00.00">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">2yr/s (Interest)</label>
                                        <input type="number" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="₱00.00">
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Monthly Payment</label>
                                        <input type="number" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="₱00.00">
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">3yr/s (Interest)</label>
                                        <input type="number" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="₱00.00">
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Monthly Payment</label>
                                        <input type="number" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="₱00.00">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">4yr/s (Interest)</label>
                                        <input type="number" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="₱00.00">
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Monthly Payment</label>
                                        <input type="number" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="₱00.00">
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">5yr/s (Interest)</label>
                                        <input type="number" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="₱00.00">
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Monthly Payment</label>
                                        <input type="number" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="₱00.00">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- page-content -->
@endsection
