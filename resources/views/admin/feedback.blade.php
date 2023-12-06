@include('admin.includes.header')
@include('admin.includes.sideBar')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Feedback</h4>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($feedbacks as $feedback)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $feedback->title }}</td>
                                            <td>{{ $feedback->description }}</td>
                                            <td>{{ $feedback->created_at }}</td>
                                            <td><a href="/admin/feedback/delete/{{ $feedback->id }}"
                                                    class="btn btn-primary">Delete</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.includes.footer')
    @include('admin.includes.script')
    @include('admin.includes.pageEnd')
