@extend('layout.master')
@section('content')
    <header>Create New Lessons</header>
    <fieldset>
        <div class="col-md-6">
            <section>
                <label class="label">Grade Level</label>
                <label class="select">
                    {!!Form::select('grade',Grade::lists('number')!!}
                    <i></i>
                </label>
            </section>
        </div>
        <div class="col-md-6">
            <section>
                <label class="label">Unit</label>
                <label class="select">
                    {!!Form::select('unit',Unit::lists('name')!!}
                    <i></i>
                </label>
            </section>
        </div>
    </fieldset>
    <footer>
        <div class="col-md-6 col-sm-12">
            <button type="submit" class="btn-u btn-u-green btn-block curl-bottom-right">Search</button>
        </div>
        <div class="col-md-6 col-sm-12">
            <button type="clear" class="btn-u btn-u-red btn-block curl-bottom-right">Clear</button>
        </div>
    </footer>
@stop
