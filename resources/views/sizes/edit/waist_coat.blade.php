@extends('layouts.app')@section('title')Waist Coat@endsection@section('content')    <div class="row">        <div class="col-sm-12">            <div class="portlet">                <div class="portlet-heading portlet-default">                    <h3 class="portlet-title text-dark">                        Waist Coat <small>FORM</small>                    </h3>                    <div class="clearfix"></div>                </div>                <div id="bg-default">                    <div class="portlet-body">                        <div class='row'>                            <div class="col-md-8 col-md-offset-2">                                {!! Form::open(['route'=>['waist_coat.update', $waist_coat->id], 'method'=>'post', 'class'=>'form-horizontal m-b-30']) !!}                                <div class="row">                                    <div class="col-md-12">                                        <h2 class="text-center">Waist Coat Size</h2>                                    </div>                                </div>                                <div class="row">                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Length</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $waist_coat->length }}" name="length" required>                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Shoulders</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $waist_coat->shoulder }}" name="shoulder" required>                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Neck</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $waist_coat->neck }}" name="neck" required>                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Chest</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $waist_coat->chest }}" name="chest" required>                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Belly</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $waist_coat->belly }}" name="belly" required>                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Hip</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $waist_coat->hip }}" name="hip" required>                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Design</label>                                            <div class="col-md-12">                                                <select class="form-control" name="design" required>                                                    <option value="{{ $waist_coat->design }}">{{ $waist_coat->design }}</option>                                                    <optgroup label="Styles">                                                        <option value="Ban">Ban</option>                                                        <option value="Round Gala">Round Gala</option>                                                        <option value="V Style">V Style</option>                                                    </optgroup>                                                </select>                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Front Style</label>                                            <div class="col-md-12">                                                <select class="form-control" name="front_style" required>                                                    <option value="{{ $waist_coat->front_style }}">{{ $waist_coat->front_style }}</option>                                                    <optgroup label="Styles">                                                        <option value="Round">Round</option>                                                        <option value="Straight">Straight</option>                                                    </optgroup>                                                </select>                                            </div>                                        </div>                                    </div>                                </div>                                <input type="submit" class="btn-success btn-block" style="padding: 5px"                                       value="Update Size">                                {!! Form::close() !!}                            </div>                        </div>                    </div>                </div>            </div>        </div>    </div>@endsection