@extends('layouts.app')@section('title')Safari Suite@endsection@section('content')    <div class="row">        <div class="col-sm-12">            <div class="portlet">                <div class="portlet-heading portlet-default">                    <h3 class="portlet-title text-dark">                        Safari Suite <small>FORM</small>                    </h3>                    <div class="clearfix"></div>                </div>                <div id="bg-default">                    <div class="portlet-body">                        <div class='row'>                            <div class="col-md-8 col-md-offset-2">                                {!! Form::open(['route'=>['safari_suite.update', $safari_suite->id], 'method'=>'post', 'class'=>'form-horizontal m-b-30']) !!}                                <div class="row">                                    <div class="col-md-12">                                        <h2 class="text-center">Safari Suite Size</h2>                                    </div>                                </div>                                <div class="row">                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Length</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $safari_suite->length }}" name="length" required>                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Shoulders</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $safari_suite->shoulder }}" name="shoulder" required>                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Arm Size</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $safari_suite->arm }}" name="arm" required>                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Cuff</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $safari_suite->cuff }}" name="cuff" required>                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Chest</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $safari_suite->chest }}" name="chest" required>                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Belly</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $safari_suite->belly }}" name="belly" required>                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Hip</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $safari_suite->hip }}" name="hip" required>                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Ban</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $safari_suite->ban }}" name="ban" required>                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Half</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $safari_suite->half }}" name="half" required>                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Cross</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $safari_suite->cross }}" name="cross" required>                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Button Style</label>                                            <div class="col-md-12">                                                <select class="form-control" name="button_style" required>                                                    <option value="{{ $safari_suite->button_style }}">{{ $safari_suite->button_style }}</option>                                                    <optgroup label="Styles">                                                        <option value="1 Button Notch Lapel">1 Button Notch Lapel                                                        </option>                                                        <option value="2 Button Notch Lapel">2 Button Notch Lapel                                                        </option>                                                        <option value="Double Breasted">Double Breasted</option>                                                        <option value="Pic on Mobile">Pic on Mobile</option>                                                    </optgroup>                                                </select>                                            </div>                                        </div>                                    </div>                                </div>                                <div class="form-group">                                    <label class="col-md-12">Design</label>                                    <div class="col-md-12">                                        {!! Form::textarea('design', $safari_suite->design, ['rows'=>'2', 'class'=>'form-control', 'required']) !!}                                    </div>                                </div>                                <input type="submit" class="btn-success btn-block" style="padding: 5px"                                       value="Update Size">                                {!! Form::close() !!}                            </div>                        </div>                    </div>                </div>            </div>        </div>    </div>@endsection