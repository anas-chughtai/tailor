@extends('layouts.app')@section('title')Prince Coat@endsection@section('content')    <div class="row">        <div class="col-sm-12">            <div class="portlet">                <div class="portlet-heading portlet-default">                    <h3 class="portlet-title text-dark">                        Prince Coat <small>FORM</small>                    </h3>                    <div class="clearfix"></div>                </div>                <div id="bg-default">                    <div class="portlet-body">                        <div class='row'>                            <div class="col-md-8 col-md-offset-2">                                {!! Form::open(['route'=>['prince_coat.update', $prince_coat->id], 'method'=>'post', 'class'=>'form-horizontal m-b-30']) !!}                                <div class="row">                                    <div class="col-md-12">                                        <h2 class="text-center">Prince Coat Size</h2>                                    </div>                                </div>                                <div class="row">                                    <div class="col-md-12">                                        <div class="form-group">                                            <label class="col-md-12">Customer Name</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $prince_coat->cus_name }}" name="cus_name">                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Length</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $prince_coat->length }}" name="length" required>                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Shoulders</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $prince_coat->shoulder }}" name="shoulder" required>                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Arm Size</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $prince_coat->arm }}" name="arm" required>                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Cuff</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $prince_coat->cuff }}" name="cuff" required>                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Chest</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $prince_coat->chest }}" name="chest" required>                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Belly</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $prince_coat->belly }}" name="belly" required>                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Hip</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $prince_coat->hip }}" name="hip" required>                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Ban</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $prince_coat->ban }}" name="ban" required>                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Half</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $prince_coat->half }}" name="half" required>                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Cross</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $prince_coat->cross }}" name="cross" required>                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Front Style</label>                                            <div class="col-md-12">                                                <select class="form-control" name="front_style" required>                                                    <option value="{{ $prince_coat->front_style }}">{{ $prince_coat->front_style }}</option>                                                    <optgroup label="Styles">                                                        <option value="Round">Round</option>                                                        <option value="Straight">Straight</option>                                                    </optgroup>                                                </select>                                            </div>                                        </div>                                    </div>                                </div>                                <div class="row">                                    <div class="col-md-12">                                        <h2 class="text-center">Pant Size</h2>                                    </div>                                </div>                                <div class="row">                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Waist</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $prince_coat->p_waist }}" name="p_waist">                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Length</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $prince_coat->p_length }}" name="p_length">                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Hip</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $prince_coat->p_hip }}" name="p_hip">                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Bottom</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $prince_coat->p_bottom }}" name="p_bottom">                                            </div>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label class="col-md-12">Knee</label>                                            <div class="col-md-12">                                                <input type="text" class="form-control" value="{{ $prince_coat->p_knee }}" name="p_knee">                                            </div>                                        </div>                                    </div>                                </div>                                <div class="form-group">                                    <label class="col-md-12">Details</label>                                    <div class="col-md-12">                                        {!! Form::textarea('details', $prince_coat->details, ['rows'=>'2', 'class'=>'form-control', 'required']) !!}                                    </div>                                </div>                                <input type="submit" class="btn-success btn-block" style="padding: 5px"                                       value="Update Size">                                {!! Form::close() !!}                            </div>                        </div>                    </div>                </div>            </div>        </div>    </div>@endsection