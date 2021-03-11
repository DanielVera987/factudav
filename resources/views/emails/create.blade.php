@extends('layouts.app')

@section('styles')
    <!-- bootstrap-wysiwyg -->
    <link href="{{ asset('/vendors/google-code-prettify/bin/prettify.min.css') }}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{ asset('/vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{ asset('/vendors/switchery/dist/switchery.min.css') }}" rel="stylesheet">
    <!-- starrr -->
    <link href="{{ asset('/vendors/starrr/dist/starrr.css') }}" rel="stylesheet">

    <link href="{{ asset('/vendors/pnotify/dist/pnotify.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendors/pnotify/dist/pnotify.buttons.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendors/pnotify/dist/pnotify.nonblock.css') }}" rel="stylesheet">
    <style>
      .select2 {
        width:100%!important;
      }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                
                <div class="x_title">
                    <h2>Enviar Correo </h2>
                    <div class="clearfix"></div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                </div>

                <div class="x_content">
                    <form id="demo-form2" action="{{ route('invoices.sendEmail', $id) }}" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                        @csrf
                        <div class="row">
                            <!-- For -->
                            <div class="col-md-12 col-sm-12">
                                <label for="last-name">Para <span class="required">*</span></label>
                                <input type="email" id="to" name="to" required="required" value="{{ $to ?? old('to') }}" class="form-control">
                            </div>

                            <!-- Subject -->
                            <div class="col-md-12 col-sm-12">
                                <label for="first-name">Asunto: <span class="required">*</span></label>
                                <input type="text" id="subject" name="subject" required="required" value="Factura Realizada [{{ $title ?? old('subject')}}]" class="form-control ">
                            </div>
                        
                            <div class="ln_solid"></div>

                            <!-- Message -->
                            <div class="col-md-12 col-sm-12 "><br />
                                <label for="first-name">Mensaje: <span class="required">*</span></label>
                                <div id="alerts"></div>
                                <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">   
                                    <div class="btn-group">
                                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a data-edit="fontSize 5">
                                                    <p style="font-size:17px">Huge</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-edit="fontSize 3">
                                                    <p style="font-size:14px">Normal</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-edit="fontSize 1">
                                                    <p style="font-size:11px">Small</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                                        <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                                        <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                                        <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                                        <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                                        <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                                        <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                                        <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                                        <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                                        <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                                        <div class="dropdown-menu input-append">
                                            <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                                            <button class="btn" type="button">Add</button>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                                        <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                                    </div>
                                </div>
                                <div id="editor-one" class="editor-wrapper" contenteditable="true"></div>
                                <textarea name="message" id="message" style="display:none;"></textarea>
                                <br />
                                
                                <input type="checkbox" name="sendPDF" class="flat" checked="checked"> {{ $filename }}.pdf
                                <br /><br />
                                <input type="checkbox" name="sendXML" class="flat" checked="checked"> {{ $filename }}.xml

                            </div>

                            <!-- Buttons  -->
                            <div class="col-md-12 col-sm-12">
                                </br>
                                <div class="actionBar">
                                    <button onclick="changeContent()" class="btn btn-success float-rigth">Enviar</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
    <!-- bootstrap-wysiwyg -->
    <script src="{{ asset('/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
    <script src="{{ asset('/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
    <script src="{{ asset('/vendors/google-code-prettify/src/prettify.js') }}"></script>
    <!-- jQuery Tags Input -->
    <script src="{{ asset('/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>
    <!-- Switchery -->
    <script src="{{ asset('/vendors/switchery/dist/switchery.min.js') }}"></script>
    <!-- Autosize -->
    <script src="{{ asset('/vendors/autosize/dist/autosize.min.js') }}"></script>
    <!-- jQuery autocomplete -->
    <script src="{{ asset('/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}"></script>
    <!-- starrr -->
    <script src="{{ asset('/vendors/starrr/dist/starrr.js') }}"></script>

    <script src="{{ asset('/vendors/pnotify/dist/pnotify.js') }}"></script>
    <script src="{{ asset('/vendors/pnotify/dist/pnotify.buttons.js') }}"></script>
    <script>
        function changeContent(){
            $("textarea[name='message']").val($("#editor-one").html());
        }
    </script>
@endsection