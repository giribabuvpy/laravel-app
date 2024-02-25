@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">

            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">New Item</li>
                    </ol>
                </nav>
            </div> 
        </div>
        <!--end breadcrumb-->

        <div class="row">
            <div class="col-xl-6 mx-auto"> 
                    
                <div class="card">
                    <div class="card-body p-4">
                        <h5 class="mb-4">Add Item</h5>
                        <form id="myForm" action="{{route('item.store')}}" method="post" class="row g-3">
                            @csrf 

                            @if ($errors->any())
                            <ul>
                                {!!implode('',$errors->all('<li>:message</li>'))!!}
                            </ul>
                            @endif

                            <div class="mb-4">
                                <label for="single-select-field" class="form-label">Select category</label>
                                <select class="form-select" id="single-select-field" data-placeholder="Choose one thing">
                                    <option></option>
                                    <option value='1'>Fixed expenses</option>
                                    <option>Solution</option>
                                    <option>Conglomeration</option>
                                    <option>Algoritm</option>
                                    <option>Holistic</option>
                                </select>
                            </div>

                            <div class="col-md-12">
                                <label for="input3" class="form-label">Item name</label>
                                <input type="text" value ="{{old('item_name')}}" class="form-control" id="item_name" name="item_name" placeholder="Category name">
                            </div>

                            <div class="col-md-12">
                                <label for="input3" class="form-label">Validation</label>
                                <select name="validation">
                                    <option value='0'>Optional</option>
                                    <option value='1'>Required</option>
                                </select>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4">Save</button> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </form>
            </div>
        </div> 
    </div>
@endsection
