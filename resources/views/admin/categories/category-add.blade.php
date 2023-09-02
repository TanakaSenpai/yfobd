@extends('admin.layouts.master')

@section('admin-body')
    <!-- Main content -->
<div class="content-wrapper d-flex justify-content-center py-5 px-md-5">
    <form action="{{ route('admin.category.add.store') }}" class="content w-75" method="POST">
        @csrf
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add Category</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputEstimatedBudget">Category Name:</label>
                <input type="text" name="category" id="inputEstimatedBudget" class="form-control">
              </div>
            </div>
          </div>
            <!-- /.card-body -->
        <div class="">
          <a href="{{ route('admin.categories.show') }}" class="btn btn-secondary">Cancel</a>
          <button type="submit" class="btn btn-success float-right">Add Category</button>
        </div>
    </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection

