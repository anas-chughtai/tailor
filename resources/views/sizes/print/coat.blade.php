@extends('layouts.app')@section('title')Coat@endsection@section('content')    <div class="row">        <div class="col-sm-12">            <div class="portlet">                <div id="bg-default">                    <div class="portlet-body">                        <div class='row'>                            <div class="col-md-8 col-md-offset-2">                                <table class="table table-striped table-bordered">                                    <tr class="text-center">                                        <td colspan="3"><h2>Coat Size</h2></td>                                    </tr>                                    <tr class="text-center">                                        <td colspan="3"><strong>{{ $coat->cus_name }}</strong></td>                                    </tr>                                    <tr class="text-center">                                        <td><i class="fa fa-angle-right"></i></td>                                        <td>Length</td>                                        <td><strong>{{ $coat->length }}</strong></td>                                    </tr>                                    <tr class="text-center">                                        <td><i class="fa fa-angle-right"></i></td>                                        <td>Soulders</td>                                        <td><strong>{{ $coat->shoulder }}</strong></td>                                    </tr>                                    <tr class="text-center">                                        <td><i class="fa fa-angle-right"></i></td>                                        <td>Arm Size</td>                                        <td><strong>{{ $coat->arm }}</strong></td>                                    </tr>                                    <tr class="text-center">                                        <td><i class="fa fa-angle-right"></i></td>                                        <td>Cuff</td>                                        <td><strong>{{ $coat->cuff }}</strong></td>                                    </tr>                                    <tr class="text-center">                                        <td><i class="fa fa-angle-right"></i></td>                                        <td>Chest</td>                                        <td><strong>{{ $coat->chest }}</strong></td>                                    </tr>                                    <tr class="text-center">                                        <td><i class="fa fa-angle-right"></i></td>                                        <td>Belly</td>                                        <td><strong>{{ $coat->belly }}</strong></td>                                    </tr>                                    <tr class="text-center">                                        <td><i class="fa fa-angle-right"></i></td>                                        <td>Hip</td>                                        <td><strong>{{ $coat->hip }}</strong></td>                                    </tr>                                    <tr class="text-center">                                        <td><i class="fa fa-angle-right"></i></td>                                        <td>Ban</td>                                        <td><strong>{{ $coat->ban }}</strong></td>                                    </tr>                                    <tr class="text-center">                                        <td><i class="fa fa-angle-right"></i></td>                                        <td>Half</td>                                        <td><strong>{{ $coat->half }}</strong></td>                                    </tr>                                    <tr class="text-center">                                        <td><i class="fa fa-angle-right"></i></td>                                        <td>Cross</td>                                        <td><strong>{{ $coat->cross }}</strong></td>                                    </tr>                                    <tr class="text-center">                                        <td><i class="fa fa-angle-right"></i></td>                                        <td>Button Style</td>                                        <td><strong>{{ $coat->button_style }}</strong></td>                                    </tr>                                    <tr class="text-center">                                        <td><i class="fa fa-angle-right"></i></td>                                        <td>Design</td>                                        <td><strong>{{ $coat->design }}</strong></td>                                    </tr>                                </table>                                <div class="hidden-print m-t-30">                                    <div class="text-center">                                        <a href="javascript:window.print()" class="btn btn-info waves-effect waves-light"><i                                                    class="fa fa-print"></i> Print</a>                                    </div>                                </div>                            </div>                        </div>                    </div>                </div>            </div>        </div>    </div>@endsection