@extends('admin.master')

@section('content')
<div class="container">
    <div class="view-account">
        <section class="module">
            <div class="module-inner">
                <div class="side-bar">
                    <form class="form-horizontal">
                        <fieldset class="fieldset">
                            <div class="form-group avatar">
                                <figure class="figure col-md-2 col-sm-3 col-xs-12">
                                    <img class="img-rounded img-responsive" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                </figure>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label">User Name</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" value="Rebecca">
                                </div>
                            </div>
                        </fieldset>
                            <div class="form-group">
                                <label class="col-md-2  col-sm-3 col-xs-12 control-label">Email</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="email" class="form-control" value="Rebecca@website.com">
                                </div>
                            </div>
                        </fieldset>
                        <hr>
                        <div class="form-group">
                            <div class="col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0">
                                <input class="btn-info bg-info btn-primary" type="submit" value="Update Profile">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div

@endsection