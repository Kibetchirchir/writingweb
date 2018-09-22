@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading"><b><u><h3>Order</h3></u></b></div>
                    @include('include.messages')

                    <div class="panel-body">
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <div class="form contact-form">
                                <div class="row">
                                    <div class="col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <label class="btn btn-block">
                                            {{Form::checkbox('academicLevel', '1',["class" => "form-control", "placeholder" => "Nouveta Limited"])}}
                                            Highschool</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <label class="btn btn-radio ">
                                                {{Form::checkbox('academicLevel', '2',["class" => "form-control", "placeholder" => "Nouveta Limited"])}}undergrad</label>

                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <label btn btn-block>
                                                {{Form::checkbox('academicLevel', '3',["class" => "form-control", "placeholder" => "Nouveta Limited"])}}Masters</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    {{Form::label('paper', 'Type Of Paper')}}
                                    {{Form::select('TypeOfPaper', ['Creative writing' => 'Creative writing', 'Essay(any type)' => 'Essay(any type)','Research paper'=> 'Research paper','Presentation or speech'=>'Presentation or speech','Book/Movie review' => 'Book/Movie review', 'Term paper' => 'Term paper', 'Coursework' => 'Coursework','Research proposal'=>'Research proposal','Business plan'=>'Business plan','Case study'=>'Case study','Admission essay'=>'Admission essay','Article review' => 'Article review','Annotated bibliography' => 'Annotated bibliography','Augmentative essays'=>'Augmentative essays','Critical thinking' => 'Critical thinking','Biographies' => 'Biographies','Capstone project'=>'Capstone project','Other' => 'Other'], null, ["class"=> "form-control",'placeholder' => 'Pick paper...'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('discipline', 'Discipline')}}
                                    {{Form::select('discipline',[
                                    'Humanities' => ['Art(Fine arts, Performing arts)' => 'Art(Fine arts, Performing arts)','Classic English Literature' => 'Classic English Literature','Composition' => 'Composition','English 101' => 'English 101','Film & Theater studies' => 'Film & Theater studies','History'=>'History','Linguistics'=>'Linguistics','Literature' => 'Literature' ,'Music' => 'Music','Philosophy' => 'Philosophy','Poetry'=>'Poetry','Religious studies' => 'Religious studies','Shakespeare' => 'Shakespeare'],
                                    'Social Sciences' => ['Anthropology' => 'Anthropology','Cultural and ethnic studies' => 'Cultural and ethnic studies','Economics' => 'Economics','Ethics' => 'Ethics','Political science'=>'Political science','Psychology' => 'Psychology','Social work and human services' => 'Social work and human services','Sociology'=>'Sociology','Tourism' => 'Tourism','Urban studies'=>'Urban studies',"Women's and gender studies" => "Women's and gender studies"],
                                    'Business and administrative studies' => ['Accounting'=>'Accounting', 'Business studies'=> 'Business studies','Finance' => 'Finance', 'Human resource management (HRM)' => 'Human resource management (HRM)','International relations' => 'International relations','Logistics' => 'Logistics','Management' => 'Management','Marketing' =>'Marketing','Public relations (PR)'=>'Public relations (PR)'],
                                    ],null, ['placeholder' => 'Pick a Discipline...',"class" => "form-control"])}}
                                </div>
                                {{Form::open(['route' => ['orderPost']])}}
                                <div class="form-group">
                                    {{Form::label('topic', 'Topic')}}

                                    {{Form::text('topic', '',["class" => "form-control", "placeholder" => "Independence"])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('paperInstruct', 'Paper instruction')}}
                                    <textarea name="paperInstruction" id="" cols="30" rows="3" class="form-control" placeholder="May include: paper structure and/or outline, types and number of references to be used, grading scale or any other requirements."></textarea>
                                </div>
                                <div class="form-group">
                                     {{Form::label('additional material', 'additional materal')}}
                                    {{ Form::file('upload_file',["class" => "file btn btn-primary "])}}
                                </div>

                                <<div class="panel-heading"><b><u><h3>Payments</h3></u></b></div>
                                <div class="row">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <div class="col-md-2 col-lg-2">
                                            <div class="form-group">
                                                <label class="btn btn-block">
                                                    {{Form::checkbox('deadline', '1',["class" => "form-control", "placeholder" => "Nouveta Limited"])}}
                                                    8hrs</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-lg-2">
                                            <div class="form-group">
                                                <label class="btn btn-radio ">
                                                    {{Form::checkbox('deadline', '2',["class" => "form-control", "placeholder" => "Nouveta Limited"])}}24hrs</label>

                                            </div>
                                        </div>
                                        <div class="col-md-2 col-lg-2">
                                            <div class="form-group">
                                                <label btn btn-block>
                                                    {{Form::checkbox('deadline', '3',["class" => "form-control", "placeholder" => "Nouveta Limited"])}}48hrs</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-lg-2">
                                            <div class="form-group">
                                                <label class="btn btn-block">
                                                    {{Form::checkbox('deadline', '1',["class" => "form-control", "placeholder" => "Nouveta Limited"])}}
                                                    3dys</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-lg-2">
                                            <div class="form-group">
                                                <label class="btn btn-radio ">
                                                    {{Form::checkbox('deadline', '2',["class" => "form-control", "placeholder" => "Nouveta Limited"])}}7dys</label>

                                            </div>
                                        </div>
                                        <div class="col-md-2 col-lg-2">
                                            <div class="form-group">
                                                <label btn btn-block>
                                                    {{Form::checkbox('deadline', '3',["class" => "form-control", "placeholder" => "Nouveta Limited"])}}14dys</label>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                <label class="control-label col-sm-2 for">Pages</label>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-2 col-sm-offset-0">
                                            <div class="input-group">
                                                <span class="input-group-addon minus pointer"> - </span>
                                                <input type="text" min='1' value = "1" class="form-control text-center numbers pages" id = "pages" name = "pages" placeholder="1" required="required" >
                                                <span class="input-group-addon plus pointer"> + </span>
                                            </div>

                                            <span class="text-center text-muted" style = "width: 1%;float:left"> ~ <span id="page-count">275</span> words </span>
                                        </div>

                                        <div class="col-sm-6 col-sm-offset-2">
                                            <div class="switch-field">

                                                <input type="radio" name="spacing" data-multi="2" id = "db-1" value="SINGLE">
                                                <label for="db-1">sing</label>


                                                <input type="radio" name="spacing" data-multi = "1" id = "db-2" checked="checked" value="DOUBLE">
                                                <label for="db-2">Double</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Sources</label>
                                        <div class="col-sm-2 col-sm-offset-1">
                                            <div class="input-group">
                                                <span class="input-group-addon minus pointer"> - </span>
                                                <input type="text" value = "0" class="form-control text-center numbers" name = "sources" placeholder="0" required="required" >
                                                <span class="input-group-addon plus pointer"> + </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Charts</label>
                                        <div class="col-sm-2 col-sm-offset-1">
                                            <div class="input-group">
                                                <span class="input-group-addon minus pointer"> - </span>
                                                <input type="text" value="0" class="form-control text-center numbers charts" name = "charts" placeholder="0" required="required" >
                                                <span class="input-group-addon plus pointer"> + </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">PowerPoint slides</label>
                                        <div class="col-sm-2 col-sm-offset-1">
                                            <div class="input-group">
                                                <span class="input-group-addon minus pointer"> - </span>
                                                <input type="text" value = "0" class="form-control text-center numbers slides" name = "slides" placeholder="0" required="required" >
                                                <span class="input-group-addon plus pointer"> + </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Writer category</label>
                                        <div class="col-sm-9 col-sm-offset-1">
                                            <div class="switch-field">

                                                <input type="radio" name="writerCategory"  id="category-1" data-writer="1" checked="checked" value="Best Available">
                                                <label for="category-1">Best available</label>


                                                <input type="radio" name="writerCategory"  id="category-2" data-writer="2" value="Advanced">
                                                <label for="category-2">Advanced</label>


                                                <input type="radio" name="writerCategory" id="category-3" data-writer="3" value="ENL">

                                                <label for="category-3">ENL</label>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 col-lg-5 col-sm-5">
                                        <div class="form-group">
                                            {{Form::label('email', 'Email')}}

                                            {{Form::text('email', '',["class" => "form-control email", "placeholder" => "Langatchirchir@gmail.com"])}}
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-lg-2 col-sm-2">

                                    </div>
                                    <div class="col-md-5 col-lg-5 col-sm-5">
                                        <div class="form-group">
                                            {{Form::label('phoneNumber', 'phoneNumber')}}

                                            {{Form::text('phoneNumber', '',["class" => "form-control", "placeholder" => "Langatchirchir@gmail.com"])}}
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    {{FORM::submit('Submit',["class" => "btn btn-primary"])}}
                                </div>

                                {!! Form::close() !!}

                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="panel panel-info fixed-price">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong><span id="paper-title"></span> &nbsp;</strong></h3>
                                </div>
                                <div class="panel-body" id = "payment-data">

                                </div>
                                <div class="panel-footer">
                                    <p class="text-success">
                                        Total Price <strong><span Class = "pull-right">$ <span id="final-price">0</span></span></strong>
                                    </p><br>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection