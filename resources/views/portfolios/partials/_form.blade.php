<div class="tab-content">
    <div class="tab-pane active" id="tab_0">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Form Actions On Bottom
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config">
                    </a>
                    <a href="javascript:;" class="reload">
                    </a>
                    <a href="javascript:;" class="remove">
                    </a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="javascript:;" class="form-horizontal">
                    <div class="form-body">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-offset-2 col-md-8">
                                    {!! Form::label('title', 'Title:') !!}
                                    {!! Form::text('title',Input::old('title'), array('class'=>'form-control input-circle')) !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-offset-2 col-md-8">
                                    {!! Form::label('description', 'Description:') !!}
                                    {!! Form::textarea('description',Input::old('description'), array('class'=>'form-control input-circle')) !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-offset-2 col-md-8">
                                    {!! Form::label('status', 'Status:') !!}
                                    {!! Form::textarea('status',Input::old('description'), array('class'=>'form-control input-circle')) !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-offset-2 col-md-8">
                                    {!! Form::submit($submit_text, ['class'=>'btn green input-circle']) !!}
                                </div>
                            </div>

                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>