@extends('admin.layouts.master')

@section('admin-body')
@php
    $limit = 30;
@endphp
<div class="content-wrapper py-3">
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between w-100">
                  <h3 class="card-title">Categories</h3>
                  <div class="d-flex justify-content-end w-100">
                    <a class="btn btn-primary" href="{{ route('admin.posts.add') }}">Add Post</a>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover" style="table-layout:fixed">
                    <thead>
                      <tr>
                        <th style="width: 10%;">No.</th>
                        <th>Page Name</th>
                        <th>Page title</th>
                        <th>Page Slug</th>
                        <th>Content One</th>
                        <th>Content Two</th>
                        <th>Content Three</th>
                        <th>Status</th>
                        <th style="width: 10%;">Action(s)</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($posts as $post)
                        <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $post->page_name }}
                        <td>{{ $post->page_title }}
                        <td>{{ $post->page_slug }}
                        <td>{{ Str::limit($post->content_one, $limit, '...') }}
                        <td>{{ Str::limit($post->content_two, $limit, '...') }}
                        <td>{{ Str::limit($post->content_three, $limit, '...') }}
                        <td>{{ $post->status }}
                        </td>
                        <td>
                            <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-success btn-sm my-2"><i class="nav-icon fas fa-edit"></i></a>
                            <form action="{{ route('admin.posts.delete', $post->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="nav-icon fas fa-trash"></i></button>
                            </form>
                        </td>
                        </tr>
                    @endforeach
                    </tfoot>
                  </table>
                </div>
                <div class="d-flex justify-content-center w-100">
                    {{ $posts->links('pagination::bootstrap-4') }}
                </div>
                <!-- /.card-body -->
            </div>
               <!-- /.card -->
{{-- @if (session()->has('success'))
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <img src="..." class="rounded me-2" alt="...">
            <strong class="me-auto">Bootstrap</strong>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            {{ session()->get('success') }}
        </div>
    </div>
    @endif --}}
            </div>
          </div>
        </div>
    </section>
</div>

@endsection


