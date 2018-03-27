@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">Add New Item</div>
            <div class="panel-body">
                @include('includes.flash')
                <form class="form-horizontal" role="form" method="POST" action="{{url('/items')}}">
                    {!! csrf_field() !!}

                    <div class="form-group{{ $errors->has('item_name') ?'has-error':''}}">
                        <label for="item_name" class="col-md-4 control-label">Item Name</label>
                        <div class="col-md-6">
                            <input id="item_name" type="text" class="form-control" name="item_name" required/>
                            @if($errors->has('item_name'))
                                <span class="help-block">
                                    <strong>{{$errors->first('item_name')}}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{$errors->has('description') ?'has-error':''}}">
                        <label for="description" class="col-md-4 control-label">Description</label>
                        <div class="col-md-6">
                            <textarea rows="5" id="description" class="form-control" name="description" required></textarea>

                        @if($errors->has('description'))
                            <span class="help-block">
                                <strong>{{$errors->first('description')}}</strong>
                            </span>
                        @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('category')?'has-error':''}}">
                        <label for="category" class="col-md-4 control-label">Category</label>
                        <div class="col-md-6">
                            <select id="category" class="form-control" name="category">
                                <option>Select Any Of the Options</option>
                                <option>Art</option>
                                <option>Books</option>
                                <option>Electronics</option>
                                <option>Home & Garden</option>
                                <option>Sporting Goods</option>
                                <option>Toys</option>
                                <option>Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('condition')?'has-error':''}}">
                        <label for="condition" class="col-md-4 control-label">Condition</label>
                        <div class="col-md-6">
                            <select id="condition" class="form-control" name="condition" required>
                                <option>Select Any Of the Options</option>
                                <option>New</option>
                                <option>Very Good</option>
                                <option>Good</option>
                                <option>Fair</option>
                                <option>Poor</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('start_price') ? ' has-error' : '' }}">
                        <label for="start_price" class="col-md-4 control-label">Bidding Starts At $</label>

                        <div class="col-md-6">
                            <input id="start_price" type="number" min="5" class="form-control" name="start_price" required>

                            @if ($errors->has('price'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('minimum_price') ? ' has-error' : '' }}">
                        <label for="minimum_price" class="col-md-4 control-label">Minimum Sale Price $</label>

                        <div class="col-md-6">
                            <input id="minimum_price" type="number" class="form-control" name="minimum_price" min="5" required>

                            @if ($errors->has('min_price'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('end_day')?'has-error':''}}">
                        <label for="end_day" class="col-md-4 control-label">Auction Ends In</label>
                        <div class="col-md-6">
                            <select id="end_day" class="form-control" name="end_day" required>
                                <option>Select Any Of the Options</option>
                                <option>1 day</option>
                                <option>3 days</option>
                                <option>5 days</option>
                                <option>7 days</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('inst_price') ? ' has-error' : '' }}">
                        <label for="inst_price" class="col-md-4 control-label">Get it Now At $</label>

                        <div class="col-md-6">
                            <input id="inst_price" type="number" class="form-control" name="inst_price" min="5" required>

                            @if ($errors->has('inst_price'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('inst_price') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('returns')?'has-error':''}}">
                        <label for="returns" class="col-md-4 control-label">Returns Accepted ?</label>
                        <div class="col-md-6">
                            <select id="returns" class="form-control" name="returns" required>
                                <option>Select Any Of the Options</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <center>
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-ticket"></i> List My Item
                            </button>
                            </center>
                        </div>
                    </div>
                </form>
            </div>
            <div class="panel-footer">GitBay Inc.</div>
        </div>
    </div>
</div>


@endsection
