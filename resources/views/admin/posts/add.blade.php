@extends('admin.layouts.master')

@section('admin-body')
    <!-- Main content -->
<div class="content-wrapper d-flex justify-content-center py-5 px-md-5">
    <form action="{{ route('admin.posts.store') }}" class="content w-75" method="POST">
        @csrf
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Post</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Page Name</label>
                <input name="page_name" type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Page Title</label>
                <input name="page_title" type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Page Slug</label>
                <input name="page_slug" type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Content One</label>
                <textarea name="content_one" id="inputDescription" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputDescription">Content Two</label>
                <textarea name="content_two" id="inputDescription" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputDescription">Content Three</label>
                <textarea name="content_three" id="inputDescription" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">Status</label>
                <select name="status" id="inputStatus" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option value='Active'>Active</option>
                  <option value='Inactive'>Inactive</option>
                </select>
              </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="">
          <a href="{{ route('admin.posts.show') }}" class="btn btn-secondary">Cancel</a>
          <button type="submit" class="btn btn-success float-right">Save Post</button>
        </div>
    </form>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->

  @endsection

